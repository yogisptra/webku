<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    Protected $table = 'pelanggan';
    Protected $fillable = 
    ['nama_depan', 'nama_belakang', 'email', 'nomor_hp', 'provinsi', 'kota', 'kode_pos', 'alamat', 'kategori'];

    public function kategori()
    {
    	return $this->belongsTo("\App\Kategori", "id_kategori");
    }

}
