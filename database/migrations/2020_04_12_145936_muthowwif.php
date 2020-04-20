<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Muthowwif extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muthowwif', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id_muthowwif');
            $table->string('file');
            $table->string('nama_muthowwif');
            $table->integer('umur');
            $table->string('alamat');
            $table->timestamps();
            $table->primary('id_muthowwif');
        });
        
        Schema::table('manasik', function($table){
            $table->foreign('id_muthowwif')
            ->references('id_muthowwif')
            ->on('muthowwif')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('muthowwif');
    }
}
