<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sepatus', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('merek');
            $table->unsignedTinyInteger('ukuran');
            $table->string('warna');
            $table->decimal('harga', 10, 2);
            $table->integer('stok')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sepatus');
    }
};
