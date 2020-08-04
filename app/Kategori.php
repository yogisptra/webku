<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    Protected $table = 'kategori';
    Protected $fillable = 
    ['id_produk', 'kategori_produk', 'deskripsi_produk', 'avatar'];

    public function pelanggan()
    {
    	return $this->hasMany("\App\Pelanggan", "id_pelanggan");
    }
} 

