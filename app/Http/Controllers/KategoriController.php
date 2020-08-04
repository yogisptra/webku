<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
   	public function index()
    {
    	$data_kategori = \App\Kategori::all();
    	return view('kategori.index', ['data_kategori' => $data_kategori]);
    }

    public function create(Request $request)
    {
		\App\Kategori::create($request->all());
		return redirect('/kategori');
    }

    public function edit($id)
	{
		$kategori = \App\Kategori::find($id);
		return view('kategori/edit', ['kategori' => $kategori]);
	}

	public function update(Request $request, $id)
	{
		// dd($request->all());
		$kategori = \App\Kategori::find($id);
		$kategori->update($request->all());
		if($request->hasFile('avatar')){
			$request->file('avatar')->move('img/', $request->file('avatar')->getClientOriginalName());
			$kategori->avatar = $request->file('avatar')->getClientOriginalName();
			$kategori->save();
		}
		return redirect('/kategori')->with('sukses', 'Data Berhasil di Update');
	}

	public function delete($id)
	{
		$kategori = \App\Kategori::find($id);
		$kategori->delete();
		return redirect('/kategori')->with('sukses', 'Data Berhasil di Delete');
	}
}
