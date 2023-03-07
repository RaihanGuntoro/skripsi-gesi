<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontrasepsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrasepsis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kontrasepsi');
            $table->string('gambar_kontrasepsi');
            $table->string('kode_kontrasepsi');
            $table->string('jumlah_kontrasepsi');
            $table->text('deskripsi_kontrasepsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontrasepsis');
    }
}
