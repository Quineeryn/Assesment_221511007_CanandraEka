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
        Schema::create('nota', function (Blueprint $table) {
            $table->id();
            $table->string('kodeNota');
            $table->date('tglNota');
            $table->time('jamNota');
            $table->float('jumlahBelanja');
            $table->integer('diskon');
            $table->float('total');
            $table->unsignedBigInteger('kodeTenan');
            $table->unsignedBigInteger('kodeKasir');
            $table->foreign('kodeTenan')->references('id')->on('tenan')->onDelete('cascade');
            $table->foreign('kodeKasir')->references('id')->on('kasir')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota');
    }
};
