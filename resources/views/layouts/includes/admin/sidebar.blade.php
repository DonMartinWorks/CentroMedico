@php
    $links = [
        [
            'name' => __('Dashboard'),
            'icon' => 'fa-solid fa-gauge-high',
            'route' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
        ],

        [
            'header' => __('Management')
        ],

        [
            'name' => __('Roles and Permissions'),
            'icon' => 'fas fa-user-shield',
            'route' => route('admin.roles.index'),
            'active' => request()->routeIs('admin.roles.*'),
        ]
    ];
@endphp

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gray-100 border-r border-gray-200 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-100">
        <ul class="space-y-2 font-medium">
            @foreach ($links as $link)
                <li>
                    {{-- HEADER --}}
                    @isset($link['header'])
                        <div class="px-2 py-3 text-xs font-semibold text-gray-500 uppercase">
                            {{ $link['header'] }}
                        </div>
                    @else
                        {{-- Link with Submenus (Flowbite) --}}
                        @isset($link['submenu'])
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 {{ $link['active'] ? 'bg-gray-200' : '' }}"
                                aria-controls="dropdown-example-{{ $loop->iteration }}"
                                data-collapse-toggle="dropdown-example-{{ $loop->iteration }}">
                                <span class="w-6 h-6 inline-flex justify-center items-center">
                                    <i
                                        class="{{ $link['active'] ? 'bg-purple-500 p-2 rounded-md text-white' : 'text-gray-600' }} {{ $link['icon'] }}"></i>
                                </span>

                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap {{ $link['active'] ? 'text-purple-500' : 'text-gray-600' }}">{{ $link['name'] }}</span>

                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <ul id="dropdown-example-{{ $loop->iteration }}" class="{{ $link['active'] ? '' : 'hidden' }} py-2 space-y-2">
                                @foreach ($link['submenu'] as $item)
                                    <li>
                                        <a href="{{ $item['route'] }}"
                                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 {{ $item['active'] ? 'bg-gray-200 text-purple-500' : '' }}">
                                            {{ $item['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            {{-- SIMPLE LINK --}}
                            <a href="{{ $link['route'] }}"
                                class="flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-50 group {{ $link['active'] ? 'bg-gray-200' : '' }}">
                                <span class="w-6 h-6 inline-flex justify-center items-center">
                                    <i
                                        class="{{ $link['active'] ? 'bg-purple-500 p-2 rounded-md text-white' : 'text-gray-600' }} {{ $link['icon'] }}"></i>
                                </span>
                                <span class="ms-3 {{ $link['active'] ? 'text-purple-500' : 'text-gray-600' }}">{{ $link['name'] }}</span>
                            </a>
                        @endisset
                    @endisset
                </li>
            @endforeach
        </ul>
    </div>
</aside>
