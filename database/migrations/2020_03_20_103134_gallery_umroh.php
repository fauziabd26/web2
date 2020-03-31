<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GalleryUmroh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleryumroh', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->date('keterangan');
            $table->time('tanggal');
            $table->string('muthowwif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleryumroh');
    }
}
