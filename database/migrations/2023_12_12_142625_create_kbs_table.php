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
        Schema::create('kbs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->string('nama_bidan');
            $table->enum('jenis_kb', ['Suntik 1 bulan', 'Suntik 2 bulan', 'Suntik 3 bulan', 'Pil', 'IUD', 'Implant']);
            $table->enum('kb_terakhir', ['Suntik 1 bulan', 'Suntik 2 bulan', 'Suntik 3 bulan', 'Pil', 'IUD', 'Implant']);
            $table->date('tgl_kb_terakhir');
            $table->integer('lk');
            $table->integer('pr');
            $table->boolean('hamil');
            $table->text('keluhan');
            $table->enum('metode_payment', ['JKN', 'Mandiri']);
            $table->bigInteger('payment');
            $table->timestamps();

            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kbs');
    }
};
