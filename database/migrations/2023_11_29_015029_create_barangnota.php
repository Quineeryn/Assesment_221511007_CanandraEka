<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangnota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jumlahBarang');
            $table->unsignedBigInteger('kodeNota');
            $table->unsignedBigInteger('namaBarang');
            $table->unsignedBigInteger('Total');
            $table->unsignedBigInteger('hargaSatuan');
            $table->foreign('kodeNota')->references('id')->on('nota')->onDelete('cascade');
            $table->foreign('namaBarang')->references('id')->on('barang')->onDelete('cascade');
            $table->foreign('hargaSatuan')->references('id')->on('barang')->onDelete('cascade');
            $table->foreign('Total')->references('id')->on('nota')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangnota');
    }
};
