<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        foreach ($users as $user) {
            $user->image = "https:
        }
        return view('users.index', compact('users'));
    }
    public function spy($id){
        Auth::loginUsingId($id);
        return redirect()->back();
    }
}
