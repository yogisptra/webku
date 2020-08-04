<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PengerjaanController extends Controller
{
    public function pending()
    {
    	$data_pengerjaan = \App\Pengerjaan::where("status", "pending")->get(); 
    	return view('pengerjaan.pending', ['data_pengerjaan' => $data_pengerjaan]);
	}

	public function proses()
    {
    	$data_pengerjaan = \App\Pengerjaan::where("status", "proses")->get(); 
    	return view('pengerjaan.proses', ['data_pengerjaan' => $data_pengerjaan]);
	}

	public function selesai()
    {
    	$data_pengerjaan = \App\Pengerjaan::where("status", "hasil")->get(); ;
    	return view('pengerjaan.selesai', ['data_pengerjaan' => $data_pengerjaan]);
	}

    public function MasukPending($id)
    {
       $pelanggan = \App\Pelanggan::find($id);
       \App\Pengerjaan::create([
        "id_kategori"=>$pelanggan->id,
        "id_pelanggan"=>$pelanggan->id,
        "status"=>"pending",
        "apply_date"=>now(),
        ]);
                return redirect('/pengerjaan/pending');
    }

    public function MasukProses(Request $request, $id)
    {
        $pengerjaan = \App\Pengerjaan::find($id);
        $pengerjaan->update([
        "id_kategori"=>$pengerjaan->id,
        "id_pelanggan"=>$pengerjaan->id,
        "status"=>"proses",
        "apply_date"=>now(),
        ]);
        return redirect('/pengerjaan/proses')->with('sukses', 'Data Berhasil di Update');
    }

    public function MasukSelesai(Request $request, $id)
    {
        $pengerjaan = \App\Pengerjaan::find($id);
        $pengerjaan->update([
        "id_kategori"=>$pengerjaan->id,
        "id_pelanggan"=>$pengerjaan->id,
        "status"=>"hasil",
        "apply_date"=>now(),
        ]);
        return redirect('/pengerjaan/selesai')->with('sukses', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
        $user = \App\Pengerjaan::find($id);
        $user->delete();
        return redirect('/pengerjaan/pending')->with('sukses', 'Data Berhasil di Delete');
    }

    public function generatePDF()
    {
        $data = \App\Pengerjaan::all();
        $data = ['title' => 'Laporan Pengerjaan'];
        $data_pengerjaan = \App\Pengerjaan::all();
 
        $pdf = PDF::loadView('pengerjaan.laporan', ['data_pengerjaan' => $data_pengerjaan], compact('data_pengerjaan'));
        $pdf->setPaper('a4','potrait');
        return $pdf->stream();
    }
}   
