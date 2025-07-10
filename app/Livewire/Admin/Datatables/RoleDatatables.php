<?php

namespace App\Livewire\Admin\Datatables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Spatie\Permission\Models\Role;

class RoleDatatables extends DataTableComponent
{
    protected $model = Role::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),

            Column::make(__('Name'), "name")
                ->sortable()
                ->searchable(),

            Column::make(__('Created at'), "created_at")
                ->sortable()
                ->format(function ($value) {
                    return $value->format('d/m/Y H:i');
                })
                ->searchable(),

            Column::make(__('Updated at'), "updated_at")
                ->sortable()
                ->format(function ($value) {
                    return $value->format('d/m/Y H:i');
                })
                ->searchable(),

            Column::make(__('Actions'))
                ->label(function ($row) {
                    return view('roles.admin.management.role.actions', [
                        'role' => $row
                    ]);
                })
        ];
    }
}
