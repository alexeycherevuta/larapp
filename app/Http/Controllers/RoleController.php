<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('role.index', compact('roles'));
    }
    public function createRole(Request $request)
    {
        Role::create(['name' => $request->name]);
        return redirect(route('role.index'));
    }
    public function deleteRole($id)
    {
        Role::destroy(['id' => $id]);
        return redirect(route('role.index'));
    }
    public function showEdit($id)
    {
        $role = Role::find($id);
        return view('role.edit', compact('role'));
    }
}
