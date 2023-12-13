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
        Schema::create('pncs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->integer('s');
            $table->integer('r');
            $table->integer('n');
            $table->enum('kunjungan', [1, 2, 3, 4]);
            $table->integer('gpa');
            $table->text('keluhan');
            $table->string('terapi');
            $table->string('nama_bidan');
            $table->enum('method_payment', ['JKN', 'Mandiri']);
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
        Schema::dropIfExists('pncs');
    }
};
