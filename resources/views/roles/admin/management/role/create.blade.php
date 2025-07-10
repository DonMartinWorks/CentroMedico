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
    Create Role
</x-admin-layout>
