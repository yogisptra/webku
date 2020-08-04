<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'name' =>'Yogi',
            'email' => 'yogisaputra@gmail.com',
            'password' => bcrypt('admin'),
            'role' =>'admin',
        ]);
    }
}
