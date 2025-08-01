<x-app-layout>
    {{-- Swiper.js CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Section 1: Interactive Welcome Hero -->
    <div class="relative w-full h-screen bg-gray-900 flex items-center justify-center overflow-hidden">
        <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>
        <!-- Latar belakang partikel akan dibuat oleh JavaScript di dalam div ini -->
        <div class="relative z-10 text-center text-white p-4">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-tight leading-tight mb-4 animate-fade-in-down" style="text-shadow: 3px 3px 10px rgba(0,0,0,0.5);">
                Selamat Datang di Program Studi
            </h1>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-tight leading-tight mb-4 animate-fade-in-down" style="text-shadow: 3px 3px 10px rgba(0,0,0,0.5);">
                <span class="text-purple-400">Sistem Komputer</span>
            </h1>
            <h1 class="text-xl md:text-xl lg:text-5xl font-extrabold tracking-tight leading-tight mb-4 animate-fade-in-down" style="text-shadow: 3px 3px 10px rgba(0,0,0,0.5);">
                Universitas Pembangunan Panca Budi
            </h1>
            <p class="text-lg md:text-xl lg:text-2xl max-w-3xl mx-auto text-gray-200 mb-8 animate-fade-in-up" style="animation-delay: 0.5s;">
                Membentuk Inovator Teknologi Masa Depan Melalui Pendidikan Unggul.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up" style="animation-delay: 1s;">
                <a href="#menu-navigasi" class="w-full sm:w-auto bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">
                    Lihat Seluruh Menu
                </a>
                <a href="#" class="w-full sm:w-auto bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white font-bold py-3 px-8 rounded-full transition duration-300">
                    Pendaftaran
                </a>
            </div>
        </div>
    </div>

    <!-- Section 2: Tentang Kami -->
    <div id="tentang-kami" class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Tentang Program Studi <span
                            class="text-purple-700">Sistem Komputer</span></h2>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                        Program Studi Sistem Komputer dirancang untuk menghasilkan lulusan yang kompeten dalam
                        perancangan, pengembangan, dan pemeliharaan sistem berbasis komputer yang cerdas. Kami
                        mengintegrasikan perangkat keras (hardware) dan perangkat lunak (software) untuk menciptakan
                        solusi teknologi inovatif yang menjawab tantangan industri modern.
                    </p>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                        Dengan kurikulum yang relevan dan fasilitas laboratorium yang canggih, kami membekali mahasiswa
                        dengan pengetahuan mendalam tentang jaringan komputer, sistem embedded, kecerdasan buatan, dan
                        keamanan siber.
                    </p>
                </div>
                <div class="p-8">
                    <img src="{{ asset('images/unpab-depan.jpg') }}" alt="Laboratorium Komputer"
                        class="rounded-xl shadow-2xl w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3: Akreditasi -->
    <div class="py-16 sm:py-24 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Akreditasi Program Studi</h2>
                <p class="text-gray-600 mt-2 text-lg">Komitmen kami terhadap kualitas pendidikan yang unggul.</p>
            </div>
            <div class="flex justify-center">
                <div class="w-full max-w-2xl p-4 bg-white rounded-lg shadow-xl">
                    <img src="{{ asset('images/akreditasi.jpg') }}"
                        alt="Sertifikat Akreditasi" class="w-full h-full object-contain rounded-md">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4: Navigasi Cepat (Menu Lengkap dalam Card) -->
    <div id="menu-navigasi" class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Jelajahi Seluruh Menu Kami</h2>
                <p class="text-gray-600 mt-2 text-lg">Temukan semua informasi yang Anda butuhkan tentang kami.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 md:gap-6">
                @php
                    $menuItems = [
                        // Profil
                        ['label' => 'Visi & Misi', 'route' => 'visi-misi.index', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>'],
                        ['label' => 'Struktur Organisasi', 'route' => 'struktur-organisasi.index', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'],
                        ['label' => 'Dosen Tetap', 'route' => 'dosen-tetap.index', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21a6 6 0 00-9-5.197M15 11a4 4 0 110-5.292M12 4.354a4 4 0 010 5.292" /></svg>'],
                        ['label' => 'Alumni', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6m10 0h-2m-4 0H7m4 0v-2m0 2h2m-2-2v-2m0 2v2m0-2H9m2 2h2m-2-2H9m2 2H7m4-6v-2m0 2h2m-2-2v-2m0 2v2m0-2H9m2 2h2" /></svg>'],
                        ['label' => 'Kontak', 'route' => 'kontak.index', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>'],
                        ['label' => 'Riset & Pengabdian', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547a2 2 0 00-.547 1.806l.477 2.387a6 6 0 00.517 3.86l.158.318a6 6 0 003.86.517l2.387.477a2 2 0 001.806-.547a2 2 0 00.547-1.806l-.477-2.387a6 6 0 00-.517-3.86l-.158-.318a6 6 0 01-.517-3.86l2.387-.477a2 2 0 001.022-.547z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 15a3 3 0 100-6 3 3 0 000 6z" /></svg>'],
                        ['label' => 'Kemitraan', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>'],
                        ['label' => 'Artikel', 'route' => 'artikel.index', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 11a2 2 0 01-2-2V7a2 2 0 00-2-2H9a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2z" /></svg>'],
                        ['label' => 'Fasilitas Prodi', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>'],
                        ['label' => 'Fasilitas UNPAB', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" /></svg>'],
                        ['label' => 'Sebaran Mata Kuliah', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H7a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>'],
                        ['label' => 'Profil Lulusan', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>'],
                        ['label' => 'Prospek Kerja', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>'],
                        ['label' => 'Biaya Kuliah', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>'],
                        ['label' => 'Jurusan UNPAB', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>'],
                        ['label' => 'Prosedur Pendaftaran', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>'],
                        ['label' => 'Jadwal Kuliah', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>'],
                        ['label' => 'Syarat Pendaftaran', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z" /></svg>'],
                        ['label' => 'Cara Pembayaran', 'route' => '#', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H7a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>'],
                        ['label' => 'Portal UNPAB', 'route' => 'https://mahasiswa.pancabudi.ac.id/', 'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" /></svg>'],
                    ];
                @endphp
                @foreach($menuItems as $item)
                    @php
                        $isExternal = \Illuminate\Support\Str::startsWith($item['route'], 'http');
                        $url = $isExternal ? $item['route'] : ($item['route'] === '#' ? '#' : route($item['route']));
                    @endphp
                    <a href="{{ $url }}" @if($isExternal) target="_blank" @endif class="group block bg-white p-4 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center justify-center">
                        <div class="text-purple-600 group-hover:text-purple-700 transition-colors duration-300">
                            {!! $item['icon'] !!}
                        </div>
                        <h3 class="mt-3 text-base font-semibold text-gray-800 leading-tight">{{ $item['label'] }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Section 5: Kata Mereka (Testimoni) -->
    <div class="py-16 sm:py-24 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Kata Mereka</h2>
                <p class="text-gray-600 mt-2 text-lg">Apa kata mahasiswa tentang pengalaman belajar mereka.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <p class="text-gray-600 italic">"Materi yang diajarkan sangat relevan dengan industri saat ini. Saya
                        merasa sangat siap untuk berkarir setelah lulus dari sini."</p>
                    <div class="flex items-center mt-6">
                        <img class="w-12 h-12 rounded-full object-cover"
                            src="https://placehold.co/100x100/C9D6FF/333333?text=B" alt="Budi">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Budi Santoso</p>
                            <p class="text-sm text-gray-500">Mahasiswa Angkatan 2022</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <p class="text-gray-600 italic">"Dosen-dosennya sangat suportif dan selalu mendorong kami untuk
                        berpikir kritis dan kreatif. Lingkungan belajarnya luar biasa!"</p>
                    <div class="flex items-center mt-6">
                        <img class="w-12 h-12 rounded-full object-cover"
                            src="https://placehold.co/100x100/E7C6FF/333333?text=A" alt="Ani">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Ani Wijaya</p>
                            <p class="text-sm text-gray-500">Mahasiswa Angkatan 2021</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                    <p class="text-gray-600 italic">"Fasilitas laboratoriumnya sangat lengkap dan modern. Kami bisa
                        langsung mempraktikkan teori yang dipelajari di kelas."</p>
                    <div class="flex items-center mt-6">
                        <img class="w-12 h-12 rounded-full object-cover"
                            src="https://placehold.co/100x100/D4F1F4/333333?text=C" alt="Citra">
                        <div class="ml-4">
                            <p class="font-bold text-gray-800">Citra Lestari</p>
                            <p class="text-sm text-gray-500">Mahasiswa Angkatan 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 6: Himpunan Mahasiswa -->
    <div class="bg-purple-100">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Himpunan Mahasiswa Jurusan</h2>
                    <p class="mt-2 text-2xl font-semibold text-purple-700">IMAKOM (IKATAN MAHASISWA KOMPUTER)</p>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                        IMAKOM adalah wadah bagi seluruh mahasiswa Sistem Komputer untuk menyalurkan aspirasi,
                        mengembangkan soft skills, dan membangun jaringan. Bergabunglah dengan kami untuk mengikuti
                        berbagai kegiatan seru dan bermanfaat!
                    </p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="https://imakomunpab.com/" target="_blank"
                            class="inline-block bg-purple-700 text-white font-bold py-3 px-8 rounded-lg hover:bg-purple-800 transition-colors duration-300">
                            Kunjungi Website
                        </a>
                        <a href="https://www.instagram.com/imakom_unpab/" target="_blank"
                            class="inline-block bg-white text-purple-700 font-bold py-3 px-8 rounded-lg border border-purple-700 hover:bg-purple-100 transition-colors duration-300">
                            Ikuti Instagram
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/logo-imakom.jpg') }}" alt="Logo IMAKOM"
                        class="rounded-full shadow-2xl w-64 h-64 md:w-80 md:h-80 object-cover">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section 7: Call to Action (CTA) -->
    <div class="bg-purple-700">
        <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                Siap Bergabung dengan Kami?
            </h2>
            <p class="mt-4 text-lg text-purple-200">
                Jadilah bagian dari inovator teknologi masa depan. Mulai perjalanan Anda di Sistem Komputer sekarang.
            </p>
            <a href="#"
                class="mt-8 inline-block bg-white text-purple-700 font-bold py-3 px-8 rounded-full hover:bg-gray-100 transition-colors duration-300">
                Daftar Sekarang
            </a>
        </div>
    </div>

    <!-- Section 8: Hero Slider Artikel Terbaru -->
    @if ($latestArtikels->isNotEmpty())
        <div id="artikel" class="w-full">
            <div class="swiper hero-slider h-[60vh] md:h-[80vh]">
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach ($latestArtikels as $artikel)
                        <div class="swiper-slide">
                            <a href="{{ route('artikel.show', $artikel->slug) }}" class="block w-full h-full">
                                <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
                                <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="{{ $artikel->judul }}"
                                    class="w-full h-full object-cover">
                                <div class="absolute inset-0 z-20 flex items-end p-8 md:p-16 text-white">
                                    <div class="max-w-3xl">
                                        <h2 class="text-3xl md:text-5xl font-extrabold leading-tight shadow-text">
                                            {{ $artikel->judul }}
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <!-- Navigation Buttons -->
                <div class="swiper-button-next text-white"></div>
                <div class="swiper-button-prev text-white"></div>
            </div>
        </div>
    @endif

    {{-- Swiper.js Script --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    {{-- Particles.js Script --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Inisialisasi Swiper Slider
            const swiper = new Swiper('.hero-slider', {
                loop: true,
                effect: 'slide',
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });

            // Inisialisasi Particles.js
            if (document.getElementById('particles-js')) {
                particlesJS('particles-js', {
                    "particles": { "number": { "value": 80, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#a855f7" }, "shape": { "type": "circle" }, "opacity": { "value": 0.5, "random": true }, "size": { "value": 3, "random": true }, "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.2, "width": 1 }, "move": { "enable": true, "speed": 2, "direction": "none", "out_mode": "out" } }, "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "repulse" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }, "modes": { "repulse": { "distance": 100, "duration": 0.4 }, "push": { "particles_nb": 4 } } }, "retina_detect": true
                });
            }

            // **FUNGSI SMOOTH SCROLL BARU**
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>

    {{-- Custom CSS --}}
    <style>
        .shadow-text { text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); }
        @keyframes fade-in-down {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-down { animation: fade-in-down 0.8s ease-out forwards; }
        .animate-fade-in-up { animation: fade-in-up 0.8s ease-out forwards; }
    </style>
</x-app-layout>
