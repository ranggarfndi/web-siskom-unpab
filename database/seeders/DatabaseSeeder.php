<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alumni;
use App\Models\Mitra;
use App\Models\Artikel;
use App\Models\Fasilitas;
use App\Models\DosenTetap;
use App\Models\RisetPengabdian;
use App\Models\StrukturOrganisasi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat User Admin (Jika belum ada)
        $user = User::firstOrCreate(
            ['email' => 'admin@siskom.test'],
            [
                'name' => 'Admin Siskom',
                'password' => bcrypt('password'), // Password default
                'email_verified_at' => now(),
            ]
        );

        // 2. Struktur Organisasi (Total: ~25 Data)
        // Data Utama
        $jabatanStruktur = ['Ketua Program Studi', 'Sekretaris Prodi', 'Kepala Laboratorium', 'Staff Administrasi'];
        foreach ($jabatanStruktur as $index => $jabatan) {
            StrukturOrganisasi::create([
                'nama' => fake()->name(),
                'jabatan' => $jabatan,
                'nidn' => fake()->unique()->numerify('##########'),
                'foto' => 'placeholder.jpg',
                'deskripsi' => '<p>' . fake()->paragraph() . '</p>',
                'urutan' => $index + 1,
            ]);
        }
        // Data Tambahan (Staff/Anggota)
        for ($i = 0; $i < 21; $i++) {
            StrukturOrganisasi::create([
                'nama' => fake()->name(),
                'jabatan' => 'Staff Divisi ' . fake()->word(),
                'nidn' => fake()->unique()->numerify('##########'),
                'foto' => 'placeholder.jpg',
                'deskripsi' => '<p>' . fake()->paragraph() . '</p>',
                'urutan' => count($jabatanStruktur) + $i + 1,
            ]);
        }
        $this->command->info('Data Struktur Organisasi berhasil dibuat (25 data).');

        // 3. Dosen Tetap (30 Data)
        for ($i = 0; $i < 30; $i++) {
            DosenTetap::create([
                'nama' => fake()->name() . ', S.Kom., M.Kom',
                'nidn' => fake()->unique()->numerify('##########'),
                'no_hp' => fake()->phoneNumber(),
                'email' => fake()->unique()->safeEmail(),
                'foto' => 'placeholder.jpg',
                'bidang_keahlian' => '<p>' . implode(', ', fake()->words(5)) . '</p>',
                'urutan' => $i + 1,
            ]);
        }
        $this->command->info('Data Dosen Tetap berhasil dibuat (30 data).');

        // 4. Alumni (30 Data)
        for ($i = 0; $i < 30; $i++) {
            Alumni::create([
                'nama' => fake()->name(),
                'npm' => fake()->unique()->numerify('2018######'),
                'pekerjaan' => fake()->jobTitle(),
                'jabatan' => fake()->randomElement(['Senior Staff', 'Manager', 'CTO', 'CEO', 'Specialist', 'Consultant']),
                'gambar' => 'placeholder.jpg',
            ]);
        }
        $this->command->info('Data Alumni berhasil dibuat (30 data).');

        // 5. Riset & Pengabdian (50 Data)
        for ($i = 0; $i < 50; $i++) {
            RisetPengabdian::create([
                'jenis' => fake()->randomElement(['riset', 'pengabdian']),
                'nama' => fake()->name() . ', M.Kom',
                'judul' => fake()->sentence(8),
                'link' => 'https://scholar.google.com/',
            ]);
        }
        $this->command->info('Data Riset & Pengabdian berhasil dibuat (50 data).');

        // 6. Kemitraan (30 Data)
        // Data Utama
        $mitraNames = ['PT Telkom Indonesia', 'Bank BRI', 'Indosat Ooredoo', 'Gojek Indonesia', 'Tokopedia', 'Diskominfo Sumut'];
        foreach ($mitraNames as $mitra) {
            Mitra::create([
                'nama' => $mitra,
                'logo' => 'placeholder.jpg',
            ]);
        }
        // Data Tambahan (Perusahaan Fiktif)
        for ($i = 0; $i < 24; $i++) {
            Mitra::create([
                'nama' => fake()->company(),
                'logo' => 'placeholder.jpg',
            ]);
        }
        $this->command->info('Data Mitra berhasil dibuat (30 data).');

        // 7. Artikel (40 Data)
        for ($i = 0; $i < 40; $i++) {
            $judul = fake()->sentence(6);
            Artikel::create([
                'judul' => $judul,
                'slug' => Str::slug($judul) . '-' . Str::random(5), // Tambah random string biar slug unik
                'thumbnail' => 'placeholder.jpg',
                'konten' => '<p>' . implode('</p><p>', fake()->paragraphs(5)) . '</p>',
                'user_id' => $user->id,
                'published_at' => fake()->dateTimeBetween('-2 years', 'now'),
            ]);
        }
        $this->command->info('Data Artikel berhasil dibuat (40 data).');

        // 8. Fasilitas Program Studi (25 Data)
        // Data Utama
        $fasilitas = ['Laboratorium Jaringan', 'Laboratorium Robotika', 'Ruang Kelas Multimedia', 'Perpustakaan Prodi', 'Ruang Diskusi', 'Workshop IoT'];
        foreach ($fasilitas as $item) {
            Fasilitas::create([
                'nama' => $item,
                'gambar' => 'placeholder.jpg',
                'deskripsi' => '<p>' . fake()->paragraph() . '</p>',
            ]);
        }
        // Data Tambahan
        for ($i = 0; $i < 19; $i++) {
            Fasilitas::create([
                'nama' => 'Ruang ' . fake()->word() . ' ' . fake()->randomDigit(),
                'gambar' => 'placeholder.jpg',
                'deskripsi' => '<p>' . fake()->paragraph() . '</p>',
            ]);
        }
        $this->command->info('Data Fasilitas berhasil dibuat (25 data).');
    }
}