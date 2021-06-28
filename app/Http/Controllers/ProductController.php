<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product-index',['products' => $products]);
    }

    public function store(Request $request)
    {
        Product::create([
            'nama_product' => $request->input('product'),
            'harga' => $request->input('harga')     
        ]);


        return back();
    }

    public function delete($id)
    {
        DB::table('products')->delete($id);
        return back();
    }
}
