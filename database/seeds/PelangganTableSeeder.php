<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('pelanggan')->insert([
            'nama_depan' =>'Rudi',
            'nama_belakang' =>'Abdullah',
            'email' => 'rudiabdullah@gmail.com',
            'nomor_hp' =>'084214141',
            'provinsi' =>'Jawa Barat',
            'kota' =>'Bandung',
            'kode_pos' =>'40237',
            'alamat' => 'Jalan Cibangkong No. 17',
            'kategori' =>'Web Design',
        ]);
    }
}
