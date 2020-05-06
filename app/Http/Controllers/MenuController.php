<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data_menu = \App\Menu::all();
        return view('menu.index', ['data_menu' => $data_menu]);
    }
    public function create(Request $Request)
    {
        \App\Menu::create($Request->all());
        return redirect('/pesan')->with('sukses', 'Pesanan Baru Berhasil Ditambahkan');
    }
    public function delete($id)
    {
        $menu = \App\Menu::find($id);
        $menu->delete();
        return redirect('/menu')->with('sukses', 'Pesanan Baru Berhasil Dihapus');
    }
}
