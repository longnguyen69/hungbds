<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }

    public function index() {
        return view('admin/index');
    }

    public function indexUser() {
        return view('users/index');
    }
}
