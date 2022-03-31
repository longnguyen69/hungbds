<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = ['username'=>$request->username, 'password'=>$request->password];
        if (Auth::attempt($user))
        {
            if (Auth::user()->id_role == 1)
            {
                return redirect()->route('admin.index');
            } else {
                return  redirect()->route('user.index');
            }
        } else {
            return back()->with('msg','incorrect username or password');
        }
    }
}
