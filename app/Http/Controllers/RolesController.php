<?php
namespace App\Http\Controllers;
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
    public function create(Request $request)
    {
        Role::create(['name' => $request->name]);
        return redirect()->route('roles.index');
    }
    public function delete($id)
    {
        Role::destroy(['id' => $id]);
        return redirect()->route('roles.index');
    }
    public function showEdit($id)
    {
        $rolePermissions = Role::find($id)->permissions()->get();
        $permissions = Permission::all()->whereNotIn('name', $rolePermissions->pluck('name'))->pluck('name');
        return view('roles.edit', compact('rolePermissions', 'permissions', 'id'));
    }
}
