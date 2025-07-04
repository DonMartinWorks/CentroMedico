@props(['breadcrumbs'])

@if (count($breadcrumbs))
    <nav class="mb-4 bg-gray-50 p-2 rounded-lg shadow-lg border">
        <div class="flex items-center justify-between"> {{-- New flex container --}}
            <ol class="flex flex-wrap">
                @foreach ($breadcrumbs as $item)
                    <li
                        class="text-sm leading-normal text-slate-700 {{ !$loop->first ? "pl-2 before:float-left before:pr-2 before:content-['/']" : '' }}">
                        @isset($item['route'])
                            <a href="{{ $item['route'] }}"
                                class="opacity-50 text-gray-600 hover:text-purple-500 transition-all hover:opacity-100">
                                {{ $item['name'] }}
                            </a>
                        @else
                            {{ $item['name'] }}
                        @endisset
                    </li>
                @endforeach
            </ol>

            <ol class="flex flex-wrap">
                @if (count($breadcrumbs) > 1)
                    <div class="flex items-center py-2">
                        <i class="fa-solid fa-location-pin mr-2 text-blue-600"></i>
                        <h6 class="font-extrabold text-gray-700 text-lg">
                            {{ end($breadcrumbs)['name'] }}
                        </h6>
                    </div>
                @endif
            </ol>
        </div>
    </nav>
@endif
