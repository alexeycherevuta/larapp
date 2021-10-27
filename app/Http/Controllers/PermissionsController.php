<?php
namespace App\Http\Controllers;
use App\Http\Requests\PermissionForm;
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
    public function store(PermissionForm $form)
    {
        $form->persist();
        return back();
    }
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return back();
    }
    public function add(Role $role)
    {
        $role::find(request('role'))->givePermissionTo(request('permission'));
        return back();
    }
    public function revoke(Role $role)
    {
        $role::find(request('role'))->revokePermissionTo(request('permission')); 
        return back();
    }
}
