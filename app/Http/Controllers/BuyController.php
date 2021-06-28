<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Supplier;
use App\Buy;
use App\Product;
use App\Transaction;

class BuyController extends Controller
{
    public function index(){
        $suppliers = Supplier::all();
        $products = Product::all();
        $buys = Buy::all();
        return view('buy-index',compact('products','buys','suppliers'));
    }

    public function store(Request $request)
    {
      $harga_product = Product::Where('id',$request->input('product_id'))->first()->harga;

       $buy = new Buy;

       $buy->supplier_id = $request->supplier_id;
       $buy->product_id = $request->product_id;
       $buy->harga_product = $harga_product;
       $buy->total = $request->total;
       $buy->total_harga = (int)$request->total*(int)$harga_product;

       $buy->save();

       return redirect('/buy-index');
    }

    public function delete($id)
    {
        DB::table('buys')->delete($id);
        return back();
    }
}
