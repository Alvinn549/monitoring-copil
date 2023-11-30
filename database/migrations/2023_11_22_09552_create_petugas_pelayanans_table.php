<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasPelayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas_pelayanans', function (Blueprint $table) {
            $table->id();
            $table->string('kk_lama')->nullable();
            $table->string('photo_berwarna')->nullable();
            $table->string('skp')->nullable();
            $table->string('skpd')->nullable();
            $table->string('fc_surat_nikah')->nullable();
            $table->string('fc_kk')->nullable();
            $table->string('fc_ktp')->nullable();
            $table->string('fc_akta_kelahiran')->nullable();
            $table->string('f1_01')->nullable();
            $table->string('f1_15')->nullable();
            $table->string('f1_16')->nullable();
            $table->string('f1_21')->nullable();
            $table->string('f2_01')->nullable();
            $table->string('f2_29')->nullable();
            $table->string('f2_38')->nullable();
            $table->string('nama');
            $table->date('tanggal');
            $table->datetime('jam_masuk');
            $table->datetime('jam_keluar')->nullable();
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
        Schema::dropIfExists('petugas_pelayanans');
    }
}
