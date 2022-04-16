<?php

namespace App\Http\Controllers;

use App\Models\Building;
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
        $code = Project::where('code', $request->code)->get();
        if ($code->count() == 0) {
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
            $product->id_user = Auth::user()->id;
            $product->save();
            return back()->with('message', 'Create Successfully');
        } else {
            return back()->with('msg1', 'Code already exists');
        }
    }
}
