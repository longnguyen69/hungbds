<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
//        dd($index->building->id);
        return view('admin/listProduct', compact('products'));
    }

    public function create()
    {
        $project = Building::all();
        return view('admin/createProduct', compact('project'));
    }

    public function store(Request $request)
    {

        try {
            $code = Product::where('code', $request->code)->get();
            if ($code->count() == 0) {
                $phone1 = Customer::where('phone1', $request->phone_chunha)->get();
                if ($phone1->count() == 0) {
                    $customer = new Customer();
                    $customer->name = $request->name_chunha;
                    $customer->phone1 = $request->phone_chunha;
                    $customer->source = 1;
                    $customer->save();
                }
                $phone = Customer::where('phone1', $request->phone_chunha)->get();
                $product = new Product();
                $product->code = strtoupper($request->code);
                $product->name = strtoupper($request->name);
                $product->view = $request->view;
                $product->huong = $request->huong;
                $product->noithat = $request->noithat;
                $product->dientich = $request->dientich;
                $product->sophongtam = $request->sophongtam;
                $product->sophongngu = $request->sophongngu;
                $product->gia = $request->gia;
                $product->tang = $request->tang;
                $product->type = $request->type;
                $product->id_toa = $request->toa;
                $product->diachi = $request->diachi;
                $product->id_chunha = $phone[0]['id'];
                $product->id_user = Auth::user()->id;
                $product->save();
                return back()->with('message', 'Create successfully!');
            } else {
                return back()->with('msg1', 'Code already exists!');
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
