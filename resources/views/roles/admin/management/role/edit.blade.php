<x-admin-layout title="{{ __('Edit :name', ['name' => __('Role')]) }}" :breadcrumbs="[
    [
        'name' => __('Dashboard'),
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => __('Roles'),
        'route' => route('admin.roles.index'),
    ],
    [
        'name' => __('Edit :name', ['name' => __('Role') . ': ' . $role->name]),
    ],
]">
    <x-wire-card>
        <form action="{{ route('admin.roles.update', $role) }}" method="POST">
            @csrf
            @method('PUT')
            <x-wire-input label="{{ __('Name') }}" name="name"
                placeholder="{{ __('Example') }}&#58;&#160;{{ __('Administrator') }}"
                value="{{ old('name', $role->name) }}" />

            <div class="mt-4">
                <x-display.end>
                    <x-wire-button light md positive type="submit"
                        title="{{ __('Update :name', ['name' => $role->name]) }}">
                        <i class="fas fa-plus mr-2"></i>{{ __('Update :name', ['name' => $role->name]) }}
                    </x-wire-button>
                </x-display.end>
            </div>
        </form>
    </x-wire-card>
</x-admin-layout>
