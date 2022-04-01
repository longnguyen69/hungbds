<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function index() {
        if (Auth::user()->id_role == 1){
            return view('admin/index');
        } else {
            return abort(403);
        }
    }

    public function indexUser() {
        return view('users/index');
    }
}
