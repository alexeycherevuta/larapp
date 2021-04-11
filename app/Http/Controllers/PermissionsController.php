<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permission.index', compact('permissions'));
    }
    public function createPermission(Request $request)
    {
        Permission::create(['name' => $request->name]);
        return redirect(route('permissions.index'));
    }
    public function deletePermission($id)
    {
        Permission::destroy(['id' => $id]);
        return redirect(route('permissions.index'));
    }
}
