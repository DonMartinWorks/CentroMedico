<x-admin-layout title="{{ __('All Roles') }}" :breadcrumbs="[
    [
        'name' => __('Dashboard'),
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => __('Roles'),
        'route' => route('admin.roles.index'),
    ],
    [
        'name' => __('Create :name', ['name' => __('Role')]),
    ],
]">
    <x-wire-card>
        <form action="{{ route('admin.roles.store') }}" method="POST">
            @csrf
            <x-wire-input label="{{ __('Name') }}" name="name"
                placeholder="{{ __('Example') }}&#58;&#160;{{ __('Administrator') }}" value="{{ old('name') }}" />

            <div class="mt-4">
                <x-display.end>
                    <x-wire-button light md positive type="submit" title="{{ __('Create :name', ['name' => __('Role')]) }}">
                        <i class="fas fa-plus mr-2"></i>{{ __('Create :name', ['name' => __('Role')]) }}
                    </x-wire-button>
                </x-display.end>
            </div>
        </form>
    </x-wire-card>
</x-admin-layout>
