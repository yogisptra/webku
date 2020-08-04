<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PelangganController extends Controller
{
		/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	    factory(App\Pelanggan::class, 50)->create()->each(function ($pelanggan) {
	        $pelanggan->posts()->save(factory(App\Post::class)->make());
	    });
	}

    public function index()
    {
    	$data_pelanggan = \App\Pelanggan::all();
    	return view('pelanggan.index', ['data_pelanggan' => $data_pelanggan]);
	}

	public function edit($id)
	{
		$pelanggan = \App\Pelanggan::find($id);
		return view('pelanggan/edit', ['pelanggan' => $pelanggan]);
	}
	
	public function update(Request $request, $id)
	{
		$pelanggan = \App\Pelanggan::find($id);
		$pelanggan->update($request->all());
		return redirect('/pelanggan')->with('sukses', 'Data Berhasil di Update');
	}

	public function delete($id)
	{
		$pelanggan = \App\Pelanggan::find($id);
		$pelanggan->delete();
		return redirect('/pelanggan')->with('sukses', 'Data Berhasil di Delete');
	}

	public function detail($id)
    {
    	$pelanggan = \App\Pelanggan::find($id);
    	return view('/pelanggan/detail', ['pelanggan' => $pelanggan]);
	}

	public function pelangganPDF()
    {
       
        
        $data_pelanggan = \App\Pelanggan::all();
 
        $pdf = PDF::loadView('pelanggan.laporan_pelanggan', ['data_pelanggan' => $data_pelanggan], compact('data_pelanggan'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream();
    }

}
