<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function create(){
        return view('admin/createCustomer');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->id_user = Auth::id();
        $customer->phone1 = $request->phone1;
        $customer->source = $request->type;
        $customer->save();
        return back()->with('msg','Create successfully!');
    }
}
