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
        Schema::create('adidas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_adidas');
            $table->string('gambar');
            $table->string('deskripsi');
            $table->string('harga');
            $table->integer('stock')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adidas');
    }
};