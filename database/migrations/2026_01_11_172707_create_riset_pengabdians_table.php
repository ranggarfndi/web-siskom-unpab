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
        Schema::create('riset_pengabdians', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['riset', 'pengabdian']); // Pilihan Riset atau Pengabdian
            $table->string('nama'); // Nama Dosen/Peneliti
            $table->string('judul'); // Judul Penelitian/Pengabdian
            $table->string('link')->nullable(); // Link Jurnal/Dokumen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riset_pengabdians');
    }
};
