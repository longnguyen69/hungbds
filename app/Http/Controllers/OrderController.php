<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('users/createOrder');
    }

    public function store(Request $request)
    {
        //
    }
}
