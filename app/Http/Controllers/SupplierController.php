<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Costumer;
use App\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier-index', ['suppliers' => $suppliers]);
    }

    public function store(Request $request)
    {
        Supplier::create([
            'nama'=>$request->input('nama'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'no_hp'=>$request->input('no_hp'),
            'alamat'=>$request->input('alamat')
        ]);

        return back();
    }

    public function delete($id)
    {
        DB::table('suppliers')->delete($id);
        return back();
    }
}
