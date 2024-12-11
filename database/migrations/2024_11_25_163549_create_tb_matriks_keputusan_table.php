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
        Schema::create('tb_matriks_keputusan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_alternatif',50);
            $table->string('kode_kriteria',50);
            $table->decimal('value',10);
            $table->timestamps();

            $table->foreign('kode_alternatif')->references('kode_alternatif')->on('tb_alternatif')->onDelete('cascade');
            $table->foreign('kode_kriteria')->references('kode_kriteria')->on('tb_kriteria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_matriks_keputusan');
    }
};
