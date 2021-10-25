<?php
namespace App\Http\Controllers;
use App\Http\Requests\RoleForm;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }
    public function store(RoleForm $form)
    {
        $form->persist();
        return back();
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index');
    }
    public function edit(Role $role)
    {
        $rolePermissions = $role->permissions()->get();
        $permissions = Permission::all()->whereNotIn('name', $rolePermissions->pluck('name'))->pluck('name');
        return view('roles.edit', compact('rolePermissions', 'permissions', 'role'));
    }
}
