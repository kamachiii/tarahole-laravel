<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nama_bidan');
            $table->string('no_bpjs');
            $table->string('no_telepon');
            $table->datetime('tgl_kunjungan');
            $table->date('tgl_kembali');
            $table->enum('jenis_kb', ['Suntik 1 bulan', 'Suntik 2 bulan', 'Suntik 3 bulan', 'Pil', 'IUD', 'Implant']);
            $table->enum('kb_terakhir', ['Suntik 1 bulan', 'Suntik 2 bulan', 'Suntik 3 bulan', 'Pil', 'IUD', 'Implant']);
            $table->date('tgl_kb_terakhir');
            $table->boolean('hamil');
            $table->enum('metode_payment', ['JKN', 'Mandiri']);
            $table->bigInteger('payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
