<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('namapt');
            $table->string('alamat');
            $table->string('kategori');
            $table->string('ruanglingkup');
            $table->string('jumlahlokasi');
            $table->date('diterbitkan');
            $table->date('berlaku');
            $table->date('berakhir');
            $table->date('surpertama');
            $table->date('surkedua');
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
        Schema::dropIfExists('pegawai');
    }
};