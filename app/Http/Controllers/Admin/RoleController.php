<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\ToastsMessages;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    use ToastsMessages;

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('roles.admin.management.role.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('roles.admin.management.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:roles,name']
        ]);

        Role::create(['name' => $request->name]);

        $this->createdMessage(__('Role'), $request->name);

        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role): View
    {
        return view('roles.admin.management.role.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role): View
    {
        return view('roles.admin.management.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:roles,name,' . $role->id]
        ]);

        $role->update(['name' => $request->name]);

        $this->updatedMessage(__('Role'), $request->name);

        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
    }
}
