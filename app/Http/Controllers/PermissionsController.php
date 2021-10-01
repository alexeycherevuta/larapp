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
    public function create(Request $request)
    {
        Permission::create(['name' => $request->name]);
        return redirect()->route('permissions.index');
    }
    public function delete(Request $request)
    {
        Permission::destroy(['id' => $request->id]);
        return redirect()->route('permissions.index');
    }
}
