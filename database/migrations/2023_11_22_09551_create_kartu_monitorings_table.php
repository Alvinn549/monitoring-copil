<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartuMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_monitorings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
$table->integer('nik_pemohon');
$table->string('ttl');
$table->text('alamat');
$table->integer('kk');
$table->integer('ktp');
$table->integer('akta');
$table->integer('skp_skpd');
$table->date('tanggal');
$table->integer('no_antrian');
$table->date('jadi_tanggal');

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
        Schema::dropIfExists('kartu_monitorings');
    }
}
