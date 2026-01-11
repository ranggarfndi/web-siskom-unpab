<x-app-layout>
    <!-- Header Section -->
    <div class="bg-gray-50 border-b border-gray-200">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">Dokumen Persyaratan Pendaftaran</h1>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Adapun kelengkapan berkas yang harus dilengkapi sebagai syarat mendaftar sebagai mahasiswa di Universitas Pembangunan Panca Budi Medan adalah sebagai berikut.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-16 bg-white">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                
                <!-- KARTU 1: MAHASISWA BARU UMUM -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden flex flex-col h-full hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-purple-600 p-6 text-white flex items-center">
                        <svg class="w-8 h-8 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        <h2 class="text-2xl font-bold">Mahasiswa Baru Umum</h2>
                    </div>
                    <div class="p-8 flex-grow">
                        <ul class="space-y-4">
                            @php
                                $syaratUmum = [
                                    'Fotocopy Ijazah SMA 2 Lembar.',
                                    'Salinan Nilai SLTA atau yang sederajat atau Surat Keterangan Hasil Ujian (SKHU) 2 Lembar.',
                                    'Pas Photo terbaru 3 x 4 = 4 lembar.',
                                    'Fotocopy KTP/SIM = 2 lembar.',
                                    'Fotocopy Kartu Keluarga = 2 lembar.',
                                    'Fotocopy Kartu BPJS Kesehatan (Jika ada).',
                                    'Membayar biaya pendaftaran dan Daftar Ulang yang ditetapkan.',
                                    'Menandatangani surat pernyataan di atas materai 6000.',
                                    'Berkelakuan baik dan berbadan sehat.',
                                    'Tidak terlibat penyalahgunaan NARKOBA.',
                                    'Bagi Warga Negara Asing (WNA) kecuali berijazah SMU/SMK/MA harus mendapat persetujuan dari Depdiknas.',
                                    'Mengikuti Ujian Test Potensi Akademik (TPA) Online.'
                                ];
                            @endphp

                            @foreach($syaratUmum as $item)
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-green-100 flex items-center justify-center mt-0.5 mr-3">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-gray-700 text-base leading-relaxed">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- KARTU 2: MAHASISWA PINDAHAN/LANJUTAN -->
                <div class="bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden flex flex-col h-full hover:shadow-xl transition-shadow duration-300">
                    <div class="bg-blue-600 p-6 text-white flex items-center">
                        <svg class="w-8 h-8 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                        <h2 class="text-2xl font-bold">Mahasiswa Pindahan/Lanjutan</h2>
                    </div>
                    <div class="p-8 flex-grow bg-blue-50/30">
                        <p class="mb-6 text-gray-600 font-medium border-l-4 border-blue-400 pl-4 italic">
                            Bagi mahasiswa Pindahan/Lanjutan, wajib melengkapi persyaratan umum di samping, ditambah dengan persyaratan khusus berikut:
                        </p>
                        <ul class="space-y-4">
                            @php
                                $syaratPindahan = [
                                    'Fotocopy Ijazah D3 + Transkrip D3 yang dileges 2 Lembar.',
                                    'Surat Pindah dari kampus sebelumnya.',
                                    'Salinan nilai dari kampus sebelumnya.',
                                    'Mendapatkan Rekomendasi Ka. Prodi yang dituju.',
                                    'IPK dari PTS asal minimal 3,00 (skala 4,00) atau dari PTN asal minimal 2,75 (skala 4,00).'
                                ];
                            @endphp

                            @foreach($syaratPindahan as $item)
                            <li class="flex items-start">
                                <div class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 flex items-center justify-center mt-0.5 mr-3">
                                    <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <span class="text-gray-700 text-base leading-relaxed">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <!-- Call to Action -->
            <div class="mt-16 text-center">
                <div class="inline-block bg-purple-50 border border-purple-200 rounded-xl p-6">
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Sudah melengkapi berkas?</h3>
                    <p class="text-gray-600 mb-6">Segera lakukan pendaftaran online atau kunjungi kampus kami.</p>
                    <a href="#" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-700 hover:bg-purple-800 transition duration-150 ease-in-out shadow-md">
                        Daftar Sekarang
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>