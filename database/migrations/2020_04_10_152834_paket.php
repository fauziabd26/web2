<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Paket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('paket', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name');
            $table->string('durasi');
            $table->date('tanggal');
            $table->string('pesawat');
            $table->string('hotelmekka');
            $table->string('hotelmadina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::dropIfExists('paket');

    }
}
