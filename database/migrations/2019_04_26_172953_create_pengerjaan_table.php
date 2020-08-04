<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengerjaan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('id_kategori');
            $table->unsignedinteger('id_pelanggan');
            $table->enum('status', array('proses', 'pending', 'hasil'));
            $table->datetime('apply_date');
            $table->timestamps();

            $table->foreign('id_kategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengerjaan');
    }
}
