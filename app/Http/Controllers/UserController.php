<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        if (Auth::user()->id_role == 1){
            return view('case/create-user', compact('roles'));
        } else {
            return abort(403);
        }

    }
    public function save(Request $request)
    {
        $user1 = Users::where('username',$request->username)->first();
        if ($user1){
            return back()->with('alert1','Account already exists!');
        } else {
        $user = new Users();
        $user->email = $request->username;
        $user->username = $request->username;
        $user->password = Hash::Make($request->password);
        $user->full_name = $request->fullname;
        $user->phone = $request->phone;
        $user->sex = $request->sex;
        $user->birthday = $request->date;
        $user->id_role = $request->role;
        $user->id_address = 1;
        $user->save();
        return back()->with('alert','Account successfully!');
        }
    }
}
