<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$data_kategori = \App\Kategori::all();
    	return view('home.index', ['data_kategori' => $data_kategori]);
    }

   	public function pesan($id)
	{
		$kategori = \App\Kategori::find($id);
		return view('home.pesan', ['kategori' => $kategori]);
	}

	public function create(Request $request)
    {
		\App\Pelanggan::create($request->all());
		return redirect('/');
    }
}
