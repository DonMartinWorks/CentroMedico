<x-forms.action-buttons :model="$role" :edit-route="route('admin.roles.edit', $role)" :delete-route="route('admin.roles.destroy', $role)" resource-name="{{ __('Role') }}" />
