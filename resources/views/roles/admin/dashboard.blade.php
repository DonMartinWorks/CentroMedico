<x-admin-layout title="{{ __('Admin Dashboard') }}" :breadcrumbs="[
    [
        'name' => __('Dashboard'),
        'route' => route('admin.dashboard'),
    ],
    [
        'name' => __('Admin Dashboard'),
    ],
]">
    <x-wire-button>{{ __('Admin Dashboard') }}</x-wire-button>
</x-admin-layout>
