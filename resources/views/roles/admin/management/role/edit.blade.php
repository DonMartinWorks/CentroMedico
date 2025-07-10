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
        'name' => __('Edit :name', ['name' => __('Role')]),
    ],
]">
    Edit Role
</x-admin-layout>
