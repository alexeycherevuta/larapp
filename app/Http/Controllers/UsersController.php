<?php
namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;
class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function spy($id)
    {
        $ghostUser = Auth::user();
        Auth::loginUsingId($id);
        return redirect()->back()->with('ghostUser', $ghostUser);
    }
}
