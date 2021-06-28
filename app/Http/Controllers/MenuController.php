<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menu;


class MenuController extends Controller
{
    public function kasir()
    {
        return view('kasir');
    }

    public function admin()
    {
        return view('admin');
    }

    public function index()
    {
        $menus = Menu::all();
        return view('menu-index',['menus' => $menus]);
    }

    public function store(Request $request)
    {
        Menu::create([
            'nama_menu' => $request->input('menu'),
            'harga' => $request->input('harga')     
        ]);


        return back();
    }

    public function delete($id)
    {
        DB::table('menus')->delete($id);
        return back();
    }
}
