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
        Schema::create('dosen_tetaps', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nidn')->unique();
        $table->string('no_hp')->nullable(); // <-- Tambahan baru
        $table->string('email')->unique()->nullable();
        $table->string('foto');
        $table->text('bidang_keahlian')->nullable();
        $table->integer('urutan')->default(0);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen_tetaps');
    }
};
