<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\AccountJenis;
use App\AccountType;
use App\Journals;
use App\Costumer;
use App\Order;
use App\Menu;
use App\User;
use App\Supplier;
use App\Buy;
use App\Product;

class LaporansController extends Controller
{
    public function order()
    {
        $costumers = Costumer::all();
        $menus = Menu::all();
        $orders = Order::all();
        return view('admin-order',compact('menus','orders','costumers'));
    }

    public function buy(){
        $suppliers = Supplier::all();
        $products = Product::all();
        $buys = Buy::all();
        return view('admin-buy',compact('products','buys','suppliers'));
    }

    public function viewLabaRugi()
    {
        $pendapatan = Account::where('account_jenis_name','Pendapatan')->orWhere('account_jenis_name','Pendapatan Lain')->get();
        $pengeluaran = Account::where('account_jenis_name','Biaya Atas Pendapatan')->orWhere('account_jenis_name','Pengeluaran Operasional','Pengeluaran Lainnya')->get();
        // dd($pengeluaran);

        foreach ($pendapatan as $pendapatans) {
            $totalPendapatan = $pendapatans->where('account_jenis_name','Pendapatan')->orWhere('account_jenis_name','Pendapatan Lain')->sum('saldo_account');
        }

        foreach ($pengeluaran as $pengeluarans) {
            $totalPengeluaran = $pengeluarans->where('account_jenis_name','Biaya Atas Pendapatan')->orWhere('account_jenis_name','Pengeluaran Operasional','Pengeluaran Lainnya')->sum('saldo_account');
        }

        $LabaRugi = $totalPendapatan - $totalPengeluaran;

        // dd($LabaRugi);

        return view('laporanLabaRugi', [
            'pendapatan' => $pendapatan,
            'pengeluaran' => $pengeluaran,
            'totalPendapatan' => $totalPendapatan,
            'totalPengeluaran' => $totalPengeluaran,
            'LabaRugi' => $LabaRugi,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
