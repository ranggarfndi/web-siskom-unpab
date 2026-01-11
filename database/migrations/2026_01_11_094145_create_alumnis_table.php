<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up(): void
        {
            Schema::create('alumnis', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('npm')->unique(); // Nomor Pokok Mahasiswa
                $table->string('pekerjaan'); // Contoh: Software Engineer
                $table->string('jabatan');   // Contoh: Senior Manager
                $table->string('gambar');    // Foto Alumni
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('alumnis');
        }
    };