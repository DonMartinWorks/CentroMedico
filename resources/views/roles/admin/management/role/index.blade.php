<x-admin-layout title="{{ __('All Roles') }}" :breadcrumbs="[
    [
        'name' => __('Dashboard'),
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => __('All Roles'),
    ],
]">
    <x-slot name="action">
        <x-display.end>
            <x-wire-button light md positive title="{{ __('Create :name', ['name' => __('Role')]) }}"
                href="{{ route('admin.roles.create') }}">
                <i class="fas fa-plus mr-2"></i>{{__('Create :name', ['name' => __('Role')])}}
            </x-wire-button>
        </x-display.end>
    </x-slot>

    @livewire('admin.datatables.role-datatables')
</x-admin-layout>
