<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Costumer;
use App\Order;
use App\Menu;
use App\User;
use App\Transaction;

class OrderController extends Controller
{
    public function index(){
        $costumers = Costumer::all();
        $menus = Menu::all();
        $orders = Order::all();
        return view('order-index',compact('menus','orders','costumers'));
    }

    public function store(Request $request)
    {
      $harga_menu = Menu::Where('id',$request->input('menu_id'))->first()->harga;

       $order = new Order;

       $order->costumer_id = $request->costumer_id;
       $order->menu_id = $request->menu_id;
       $order->harga_menu = $harga_menu;
       $order->total = $request->total;
       $order->total_harga = (int)$request->total*(int)$harga_menu;

       $order->save();

       return redirect('/order-index');
    }

    public function delete($id)
    {
        DB::table('orders')->delete($id);
        return back();
    }

    public function cari(Request $request){
      $cari = $request->cari;

      $orders = DB::table('costumers')->where('nama','like',"%".$cari."%")->paginate();
      return view('order-index',['orders' => $orders]);
  }

 
}
