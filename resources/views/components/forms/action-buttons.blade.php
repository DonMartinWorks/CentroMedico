@props(['model', 'editRoute', 'deleteRoute', 'resourceName'])

<div class="flex items-center space-x-2">
    <x-wire-button light md warning title="{{ __('Edit :name', ['name' => $resourceName . ' ' . $model->name]) }}"
        href="{{ $editRoute }}">
        <i class="fas fa-pencil-alt"></i>
    </x-wire-button>

    <form action="{{ $deleteRoute }}" method="POST">
        @csrf
        @method('DELETE')
        <x-wire-button light md negative title="{{ __('Delete :name', ['name' => $resourceName . ' ' . $model->name]) }}"
            type="submit">
            <i class="fas fa-trash-alt"></i>
        </x-wire-button>
    </form>
</div>
