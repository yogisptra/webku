<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengerjaan extends Model
{
    Protected $table = 'pengerjaan';
    Protected $fillable = 
     ['id_kategori', 'id_pelanggan', 'status', 'apply_date'];

    public function kategori()
    {
    	return $this->belongsTo("\App\Kategori", "id_kategori");
    }

    public function pelanggan()
    {
    	return $this->belongsTo("\App\Pelanggan", "id_pelanggan");
    }
}
