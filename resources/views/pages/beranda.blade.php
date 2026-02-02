<x-app-layout>
    {{-- Swiper.js CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Section 1: Interactive Welcome Hero -->
    <div class="relative w-full h-screen bg-gray-900 flex items-center justify-center overflow-hidden bg-cover bg-center" 
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('images/hero-pancabudi-1.jpg') }}');">
    
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 via-purple-900/20 to-gray-900/90 z-0"></div>
        
        <div id="particles-js" class="absolute top-0 left-0 w-full h-full z-0"></div>

        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
            
            <span class="block text-purple-300 font-semibold tracking-widest uppercase text-sm md:text-base mb-4 animate-hero-down delay-100">
                Selamat Datang di Program Studi
            </span>

            <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-black tracking-tight leading-tight mb-4 animate-hero-zoom delay-300">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-pink-500 to-purple-600 filter drop-shadow-lg">
                    Sistem Komputer
                </span>
            </h1>

            <h2 class="text-xl sm:text-2xl md:text-3xl text-gray-300 font-light mb-8 animate-hero-up delay-500">
                Universitas Pembangunan Panca Budi
            </h2>

            <p class="text-base md:text-xl max-w-2xl mx-auto text-gray-400 mb-10 leading-relaxed animate-hero-up delay-700">
                Membentuk <span class="text-white font-semibold">Inovator Teknologi</span> Masa Depan yang menguasai Pengembangan Perangkat Lunak Mobile dan IoT.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-hero-up" style="animation-delay: 0.9s; animation-fill-mode: forwards; opacity: 0;">
                
                <a href="#menu-navigasi" 
                class="group relative w-full sm:w-auto px-8 py-4 bg-purple-600 rounded-full font-bold text-white shadow-lg overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-purple-500/50">
                    <span class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></span>
                    <span class="relative flex items-center justify-center gap-2">
                        Lihat Semua Menu
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                    </span>
                </a>

                <a href="{{ route('pendaftaran.prosedur') }}" 
                class="w-full sm:w-auto px-8 py-4 bg-white/10 backdrop-blur-sm border border-white/20 text-white rounded-full font-bold hover:bg-white hover:text-purple-900 transition-all duration-300">
                    Pendaftaran Mahasiswa
                </a>
            </div>
        </div>
    </div>

    <!-- Section 2: Artikel -->
    @if ($latestArtikels->isNotEmpty())
        <div id="artikel" class="w-full bg-gray-100 py-16 sm:py-24">
             <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Artikel & Berita Terbaru</h2>
                    <p class="text-gray-600 mt-2 text-lg">Wawasan dan informasi terkini dari kami.</p>
                </div>
                
                <!-- Slider Container -->
                <div class="swiper hero-slider h-[60vh] md:h-[70vh] rounded-xl shadow-lg overflow-hidden group mb-10">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($latestArtikels as $artikel)
                            <div class="swiper-slide relative">
                                <!-- Gambar Background -->
                                <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="{{ $artikel->judul }}"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                
                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-90"></div>

                                <!-- Content -->
                                <div class="absolute inset-0 flex items-end">
                                    <div class="p-8 md:p-16 text-white w-full md:max-w-4xl">
                                        <div class="transform translate-y-4 transition-transform duration-500 group-hover:translate-y-0">
                                            <!-- Label -->
                                            <span class="inline-block px-3 py-1 mb-4 text-xs font-semibold tracking-wider uppercase bg-purple-600 rounded-full shadow-sm">
                                                Berita Terbaru
                                            </span>
                                            
                                            <!-- Judul -->
                                            <h3 class="text-2xl md:text-4xl lg:text-5xl font-extrabold leading-tight mb-4 shadow-text">
                                                {{ $artikel->judul }}
                                            </h3>
                                            
                                            <!-- Deskripsi Singkat (Excerpt) -->
                                            <p class="text-gray-200 text-sm md:text-lg mb-8 line-clamp-2 md:line-clamp-3">
                                                {{ Str::limit(strip_tags($artikel->konten), 150) }}
                                            </p>

                                            <!-- Tombol Baca di Slider -->
                                            <a href="{{ route('artikel.show', $artikel->slug) }}" 
                                               class="inline-flex items-center px-6 py-3 text-base font-medium text-purple-700 bg-white rounded-full hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-md group-hover:shadow-lg">
                                                Baca Selengkapnya
                                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="swiper-button-next text-white hover:text-purple-400 transition"></div>
                    <div class="swiper-button-prev text-white hover:text-purple-400 transition"></div>
                </div>

                <!-- Tombol Lihat Semua Artikel (Di luar slider) -->
                <div class="text-center">
                    <a href="{{ route('artikel.index') }}" class="inline-flex items-center justify-center px-8 py-3 text-base font-bold text-white bg-purple-700 rounded-full hover:bg-purple-800 transition duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-1">
                        Lihat Semua Artikel
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    @endif

    <div id="tentang-kami" class="py-16 sm:py-24 bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-64 h-64 bg-purple-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 translate-x-1/2 translate-y-1/2"></div>

    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                    Tentang Program Studi <span class="text-purple-700">Sistem Komputer</span>
                </h2>
                
                <div class="prose prose-lg text-gray-600 mb-8 text-justify">
                    <p>
                        Program Studi Sistem Komputer dirancang untuk menghasilkan lulusan yang kompeten dalam perancangan, pengembangan, dan pemeliharaan sistem berbasis komputer yang cerdas. Kami mengintegrasikan perangkat keras (hardware) dan perangkat lunak (software) untuk menciptakan solusi teknologi inovatif.
                    </p>
                </div>

                <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 mb-8">
                    <div class="mb-4">
                        <h3 class="text-lg font-bold text-purple-700 flex items-center mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                            Visi
                        </h3>
                        <p class="text-sm text-gray-700 italic">"Menghasilkan lulusan yang mampu mengimpelementasikan IPTEK pada bidang ilmu Sistem Komputer serta Bermanfaat Bagi Kemaslahatan Umat."</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-purple-700 flex items-center mb-2">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" /></svg>
                            Misi Utama
                        </h3>
                        <ul class="text-sm text-gray-700 list-disc list-inside space-y-1">
                            <li>Melaksanakan Tridharma Perguruan Tinggi di bidang Sistem Komputer.</li>
                            <li>Pengembangan SDM Dosen dan Tenaga Kependidikan.</li>
                        </ul>
                    </div>
                </div>

                <div class="text-center lg:text-left">
                    <a href="{{ route('visi-misi.index') }}" class="inline-flex items-center text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-bold rounded-full text-sm px-6 py-3 transition duration-300 shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        Lihat Visi & Misi Lengkap
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <div class="relative flex flex-col items-center justify-center lg:items-center mt-12 lg:mt-0">
                
                <div class="relative group">
                    <div class="absolute -inset-4 bg-gradient-to-r from-purple-400 to-indigo-400 rounded-full opacity-30 blur-xl group-hover:opacity-50 transition duration-500"></div>

                    <div class="relative w-64 h-64 lg:w-80 lg:h-80 rounded-full p-2 bg-white border border-gray-100 shadow-2xl">
                        <div class="w-full h-full rounded-full overflow-hidden relative">
                             <img src="{{ asset('images/kaprodi.png') }}" alt="Kaprodi Sistem Komputer" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110">
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-8 z-10">
                    <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-1">Zulfahmi Syahputra, S.Kom., M.Kom.</h3>
                    <p class="text-purple-600 font-bold text-lg tracking-wide uppercase">Kepala Program Studi</p>
                    
                    <div class="mt-4 max-w-sm mx-auto">
                        <p class="text-gray-500 italic relative inline-block px-4">
                            <span class="text-3xl text-purple-200 absolute -top-2 -left-2">"</span>
                            Berkomitmen mencetak lulusan yang siap bersaing di era digital.
                            <span class="text-3xl text-purple-200 absolute -bottom-4 -right-2">"</span>
                        </p>
                    </div>

                    <div class="flex justify-center space-x-5 mt-6">
                        <a href="#" class="text-gray-400 hover:text-purple-600 transition transform hover:-translate-y-1"><i class="fa-brands fa-linkedin text-2xl"></i></a>
                        <a href="#" class="text-gray-400 hover:text-purple-600 transition transform hover:-translate-y-1"><i class="fa-solid fa-envelope text-2xl"></i></a>
                    </div>
                </div>

                <div class="absolute -z-10 bottom-10 right-0 opacity-30">
                    <svg width="100" height="100" fill="none" viewBox="0 0 100 100">
                        <pattern id="dots" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <circle cx="2" cy="2" r="2" class="text-purple-400" fill="currentColor" />
                        </pattern>
                        <rect width="100" height="100" fill="url(#dots)" />
                    </svg>
                </div>
            </div>

        </div>
    </div>
</div>

    <!-- Section 4: Akreditasi -->
    <div class="py-16 sm:py-24 relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#6d28d9 1px, transparent 1px); background-size: 32px 32px;"></div>

    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center mb-12">
            {{-- <span class="text-purple-600 font-bold tracking-wider uppercase text-sm">Jaminan Mutu</span> --}}
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2"><span class="text-purple-600">Akreditasi</span> Program Studi</h2>
            <p class="text-gray-600 mt-3 text-lg max-w-2xl mx-auto">
                Program Studi Sistem Komputer telah diakui kualitasnya oleh Lembaga Akreditasi Mandiri/BAN-PT.
            </p>
        </div>

        <div class="flex flex-col items-center">
            
            <div class="relative group w-full max-w-3xl">
                
                <div class="absolute -inset-1 bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                
                <div class="relative bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden transform transition duration-500 group-hover:-translate-y-2 group-hover:shadow-2xl">
                    
                    <div class="grid grid-cols-1 md:grid-cols-3">
                        <div class="md:col-span-2 p-4 bg-gray-100 relative overflow-hidden cursor-pointer">
                            <img src="{{ asset('images/akreditasi.jpg') }}" 
                                 alt="Sertifikat Akreditasi" 
                                 class="w-full h-auto object-contain transform transition duration-700 group-hover:scale-105 rounded-md shadow-sm">
                            
                            <div class="absolute inset-0 bg-gray-900/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                <a href="{{ asset('images/akreditasi.jpg') }}" target="_blank" class="inline-flex items-center px-6 py-3 bg-white text-gray-900 font-bold rounded-full shadow-lg hover:bg-purple-50 transition transform hover:scale-105">
                                    <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                    Lihat Sertifikat Asli
                                </a>
                            </div>
                        </div>

                        <div class="p-6 md:col-span-1 flex flex-col justify-center border-t md:border-t-0 md:border-l border-gray-100 bg-white">
                            
                            <div class="mb-6">
                                <span class="block text-xs text-gray-400 uppercase tracking-wide font-semibold mb-1">Peringkat Akreditasi</span>
                                <div class="inline-block px-4 py-2 bg-purple-100 text-purple-700 rounded-lg font-bold text-xl border border-purple-200">
                                    BAIK SEKALI
                                    </div>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase">Nomor SK</p>
                                    <p class="text-sm text-gray-800 font-medium truncate">001/SK/LAM-INFOKOM/2024</p> </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase">Masa Berlaku</p>
                                    <p class="text-sm text-gray-800 font-medium">Hingga 2029</p> </div>
                                <div>
                                    <p class="text-xs text-gray-500 font-semibold uppercase">Diterbitkan Oleh</p>
                                    <div class="flex items-center mt-1">
                                        <div class="w-2 h-2 rounded-full bg-green-500 mr-2 animate-pulse"></div>
                                        <p class="text-sm text-gray-800 font-medium">LAM INFOKOM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute -top-4 -right-4 w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full flex items-center justify-center shadow-lg transform rotate-12 group-hover:rotate-0 transition duration-500 z-20 border-4 border-white">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>

            </div>
        </div>

    </div>
</div>

    <div id="menu-navigasi" class="py-16 sm:py-24 bg-gray-50 min-h-screen">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-col md:flex-row justify-between items-end md:items-center mb-12 gap-6">
            <div class="text-left">
                <h2 class="text-3xl font-bold text-gray-900">Jelajahi <span class="text-purple-600">Menu</span></h2>
                <p class="text-gray-500 mt-2">Akses cepat ke seluruh informasi program studi.</p>
            </div>
            
            <div class="w-full md:w-96 relative">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-search text-gray-400"></i>
                </div>
                <input type="text" id="menuSearch" 
                    class="block w-full pl-10 pr-3 py-3 border border-gray-300 rounded-full leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 sm:text-sm transition duration-300 shadow-sm hover:shadow-md" 
                    placeholder="Cari menu (misal: Dosen, Biaya)...">
            </div>
        </div>

        @php
            $menuGroups = [
                'General' => [
                    ['label' => 'Beranda', 'route' => 'beranda', 'icon' => 'fa-house'],
                    ['label' => 'Artikel & Berita', 'route' => 'artikel.index', 'icon' => 'fa-newspaper'],
                    ['label' => 'Biaya Kuliah', 'route' => 'biaya-kuliah.index', 'icon' => 'fa-money-bill-wave'],
                    ['label' => 'Portal Mahasiswa', 'route' => 'https://portal.unpab.ac.id', 'icon' => 'fa-globe'],
                    ['label' => 'Himpunan (IMAKOM)', 'route' => 'https://imakomunpab.com', 'icon' => 'fa-users'],
                ],
                'Profil Prodi' => [
                    ['label' => 'Visi & Misi', 'route' => 'visi-misi.index', 'icon' => 'fa-bullseye'],
                    ['label' => 'Struktur Organisasi', 'route' => 'struktur-organisasi.index', 'icon' => 'fa-sitemap'],
                    ['label' => 'Dosen Tetap', 'route' => 'dosen-tetap.index', 'icon' => 'fa-user-tie'],
                    ['label' => 'Alumni', 'route' => 'alumni.index', 'icon' => 'fa-user-graduate'],
                    ['label' => 'Riset & Pengabdian', 'route' => 'riset-pengabdian.index', 'icon' => 'fa-flask'],
                    ['label' => 'Kemitraan', 'route' => 'kemitraan.index', 'icon' => 'fa-handshake'],
                    ['label' => 'Kontak Kami', 'route' => 'kontak.index', 'icon' => 'fa-envelope'],
                ],
                'Akademik' => [
                    ['label' => 'Fasilitas Lab', 'route' => 'fasilitas.index', 'icon' => 'fa-computer'],
                    ['label' => 'Sebaran Mata Kuliah', 'route' => 'sebaran-matkul.index', 'icon' => 'fa-book-open'],
                    ['label' => 'Capaian Lulusan', 'route' => 'capaian-lulusan.index', 'icon' => 'fa-graduation-cap'],
                    ['label' => 'Prospek Karir', 'route' => 'prospek-kerja.index', 'icon' => 'fa-briefcase'],
                ],
                'Pendaftaran' => [
                    ['label' => 'Prosedur Daftar', 'route' => 'pendaftaran.prosedur', 'icon' => 'fa-list-check'],
                    ['label' => 'Syarat Pendaftaran', 'route' => 'pendaftaran.syarat', 'icon' => 'fa-file-circle-check'],
                    ['label' => 'Cara Pembayaran', 'route' => 'pendaftaran.pembayaran', 'icon' => 'fa-credit-card'],
                    ['label' => 'Jadwal Kuliah', 'route' => '#', 'icon' => 'fa-calendar-days'],
                ]
            ];
        @endphp

        <div id="menuContainer">
            @foreach ($menuGroups as $groupName => $items)
                <div class="menu-group mb-12">
                    <div class="flex items-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800 border-l-4 border-purple-600 pl-3 uppercase tracking-wider">
                            {{ $groupName }}
                        </h3>
                        <div class="h-px bg-gray-200 flex-grow ml-4"></div>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                        @foreach ($items as $item)
                            @php
                                $isExternal = \Illuminate\Support\Str::startsWith($item['route'], 'http');
                                // Cek apakah route ada di Laravel, jika '#' biarkan '#'
                                $url = $isExternal ? $item['route'] : ($item['route'] === '#' ? '#' : (Route::has($item['route']) ? route($item['route']) : '#'));
                            @endphp
                            
                            <a href="{{ $url }}" @if($isExternal) target="_blank" @endif 
                               class="menu-item group bg-white border border-gray-100 rounded-xl p-6 hover:shadow-xl hover:border-purple-200 transition-all duration-300 flex flex-col items-center text-center transform hover:-translate-y-1">
                                
                                <div class="w-14 h-14 bg-purple-50 text-purple-600 rounded-full flex items-center justify-center text-2xl mb-4 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300 shadow-sm">
                                    <i class="fa-solid {{ $item['icon'] }}"></i>
                                </div>
                                
                                <h4 class="text-sm font-semibold text-gray-700 group-hover:text-purple-700 leading-tight">
                                    {{ $item['label'] }}
                                </h4>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div id="noResults" class="hidden text-center py-12">
            <div class="inline-block p-4 rounded-full bg-gray-100 mb-4">
                <i class="fa-solid fa-search text-gray-400 text-3xl"></i>
            </div>
            <p class="text-gray-500 text-lg">Menu yang Anda cari tidak ditemukan.</p>
        </div>

    </div>
</div>

    <!-- Section 6: Kata Mereka (Testimoni) -->
    <div class="py-16 sm:py-24 relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 translate-x-1/2 translate-y-1/2"></div>

    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Kata <span class="text-purple-600">Mereka</span>
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Dengar langsung pengalaman seru dan berkesan dari mahasiswa aktif kami.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative border-t-4 border-purple-600 animate-hero-up delay-100">
                    <div class="absolute top-4 right-6 text-9xl text-gray-100 font-serif opacity-50 select-none group-hover:text-purple-50 transition-colors duration-300">
                        ”
                    </div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center space-x-1 mb-4 text-yellow-400 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic leading-relaxed mb-6">
                            "Materi yang diajarkan sangat relevan dengan industri saat ini. Saya merasa sangat siap untuk berkarir, terutama dengan dukungan lab yang memadai."
                        </p>
                    </div>

                    <div class="flex items-center pt-6 border-t border-gray-100 relative z-10">
                        <div class="relative">
                            <img class="w-14 h-14 rounded-full object-cover border-2 border-purple-100 group-hover:border-purple-500 transition-colors duration-300" 
                                src="https://ui-avatars.com/api/?name=Rangga+Rafandi&background=7c3aed&color=fff" alt="Rangga">
                            <div class="absolute -bottom-1 -right-1 bg-green-500 w-4 h-4 rounded-full border-2 border-white" title="Aktif"></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 group-hover:text-purple-700 transition-colors">
                                Rangga Rafandi 
                                <i class="fa-solid fa-circle-check text-blue-500 text-xs ml-1" title="Verified Student"></i>
                            </h4>
                            <p class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Angkatan 2021</p>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative border-t-4 border-pink-500 animate-hero-up delay-300">
                    <div class="absolute top-4 right-6 text-9xl text-gray-100 font-serif opacity-50 select-none group-hover:text-pink-50 transition-colors duration-300">”</div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center space-x-1 mb-4 text-yellow-400 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-gray-600 italic leading-relaxed mb-6">
                            "Dosen-dosennya sangat suportif dan selalu mendorong kami untuk berpikir kritis. Suasana kekeluargaan di prodi ini sangat terasa."
                        </p>
                    </div>

                    <div class="flex items-center pt-6 border-t border-gray-100 relative z-10">
                        <div class="relative">
                            <img class="w-14 h-14 rounded-full object-cover border-2 border-pink-100 group-hover:border-pink-500 transition-colors duration-300" 
                                src="https://ui-avatars.com/api/?name=Aisyah+Nabilla&background=ec4899&color=fff" alt="Aisyah">
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 group-hover:text-pink-600 transition-colors">
                                Aisyah Nabilla
                                <i class="fa-solid fa-circle-check text-blue-500 text-xs ml-1"></i>
                            </h4>
                            <p class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Angkatan 2022</p>
                        </div>
                    </div>
                </div>

                <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 relative border-t-4 border-blue-500 animate-hero-up delay-500">
                    <div class="absolute top-4 right-6 text-9xl text-gray-100 font-serif opacity-50 select-none group-hover:text-blue-50 transition-colors duration-300">”</div>
                    
                    <div class="relative z-10">
                        <div class="flex items-center space-x-1 mb-4 text-yellow-400 text-sm">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p class="text-gray-600 italic leading-relaxed mb-6">
                            "Fasilitas laboratoriumnya sangat lengkap dan modern. Kami bisa langsung mempraktikkan teori IoT dan AI yang dipelajari di kelas."
                        </p>
                    </div>

                    <div class="flex items-center pt-6 border-t border-gray-100 relative z-10">
                        <div class="relative">
                            <img class="w-14 h-14 rounded-full object-cover border-2 border-blue-100 group-hover:border-blue-500 transition-colors duration-300" 
                                src="https://ui-avatars.com/api/?name=Muhammad+Eka&background=3b82f6&color=fff" alt="Eka">
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                M. Eka Wiguna
                                <i class="fa-solid fa-circle-check text-blue-500 text-xs ml-1"></i>
                            </h4>
                            <p class="text-xs text-gray-500 uppercase tracking-wide font-semibold">Angkatan 2023</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Section 7: Himpunan Mahasiswa -->
    <div class="relative py-20 sm:py-28 bg-[#0a0a0a] overflow-hidden text-white">
    
    <div class="absolute inset-0 bg-gradient-to-b from-gray-950 via-[#130c1d] to-purple-950 opacity-90"></div>

    <div class="absolute inset-0 opacity-[0.05]" 
         style="background-image: linear-gradient(rgba(168, 85, 247, 0.4) 1px, transparent 1px), linear-gradient(to right, rgba(168, 85, 247, 0.4) 1px, transparent 1px); background-size: 40px 40px;">
    </div>

    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-purple-800/30 rounded-full mix-blend-screen filter blur-[120px] opacity-40 translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-fuchsia-900/20 rounded-full mix-blend-screen filter blur-[120px] opacity-30 -translate-x-1/2 translate-y-1/2 pointer-events-none"></div>

    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="text-center lg:text-left animate-hero-up delay-100">
                <span class="inline-flex items-center py-1 px-3 rounded-full bg-gray-900/50 border border-purple-500/50 text-purple-300 text-xs font-bold tracking-wider uppercase mb-6 backdrop-blur-md shadow-[0_0_15px_rgba(168,85,247,0.15)]">
                    <i class="fa-solid fa-users mr-2"></i> Himpunan Mahasiswa Jurusan
                </span>
                
                <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-3 text-white">
                    Bergabung dengan Keluarga
                </h2>
                <h3 class="text-3xl md:text-5xl font-black mb-6 pb-2 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-fuchsia-400 to-purple-500 drop-shadow-sm">
                    IMAKOM UNPAB
                </h3>
                
                <p class="text-lg text-gray-300 leading-relaxed mb-8 max-w-xl mx-auto lg:mx-0 border-l-2 border-purple-800 pl-4">
                    Ikatan Mahasiswa Komputer (IMAKOM) adalah wadah bagi seluruh mahasiswa Sistem Komputer untuk berkolaborasi, membangun jaringan profesional, dan mengembangkan *hard & soft skills*. Temukan Passion Anda di sini!
                </p>

                <div class="flex flex-wrap justify-center lg:justify-start gap-10 mb-10 border-t border-white/10 pt-8">
                    <div>
                        <p class="text-3xl font-black text-white">70+</p>
                        <p class="text-sm text-purple-400 font-medium uppercase tracking-wide">Anggota Aktif</p>
                    </div>
                    <div>
                        <p class="text-3xl font-black text-white">Kreatif &</p>
                        <p class="text-sm text-purple-400 font-medium uppercase tracking-wide">Bersahabat</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="https://imakomunpab.com/" target="_blank"
                        class="group relative inline-flex items-center justify-center px-8 py-4 font-bold text-white rounded-full overflow-hidden shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-purple-600/30">
                        <span class="absolute inset-0 bg-gradient-to-r from-purple-700 to-purple-900 group-hover:from-purple-600 group-hover:to-purple-800 transition-all duration-300"></span>
                        <span class="relative flex items-center">
                            <i class="fa-solid fa-globe mr-2"></i> Website Resmi
                        </span>
                    </a>

                    <a href="https://www.instagram.com/imakom_unpab/" target="_blank"
                        class="inline-flex items-center justify-center bg-gray-900/30 border-2 border-purple-500/30 text-purple-300 font-bold py-4 px-8 rounded-full hover:bg-purple-900/20 hover:border-purple-400 hover:text-white transition-all duration-300 backdrop-blur-sm">
                        <i class="fa-brands fa-instagram mr-2 text-xl"></i>
                        Follow Instagram
                    </a>
                </div>
            </div>

            <div class="relative flex justify-center items-center animate-hero-zoom delay-300 mt-12 lg:mt-0">
                <div class="absolute inset-0 bg-purple-700 rounded-full filter blur-[80px] opacity-30 animate-pulse"></div>
                
                <div class="relative w-72 h-72 md:w-[400px] md:h-[400px] animate-float">
                    <div class="absolute inset-0 border border-dashed border-purple-300/20 rounded-full animate-[spin_20s_linear_infinite]"></div>
                    <div class="absolute -inset-4 border border-purple-500/10 rounded-full"></div>
                    
                    <div class="absolute inset-8 rounded-full overflow-hidden border-4 border-purple-500/30 shadow-[0_0_30px_rgba(168,85,247,0.2)] bg-white flex items-center justify-center group">
                        <img src="{{ asset('images/logo-imakom.jpg') }}" alt="Logo IMAKOM"
                            class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110 group-hover:rotate-3">
                        
                        <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-purple-400/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                    </div>

                    <div class="absolute -top-2 right-12 bg-gray-900/80 p-3 rounded-2xl border border-purple-500/30 shadow-lg animate-bounce backdrop-blur-md" style="animation-duration: 3.5s;">
                        <i class="fa-solid fa-code text-purple-400 text-xl"></i>
                    </div>
                    <div class="absolute bottom-12 -left-2 bg-gray-900/80 p-3 rounded-2xl border border-fuchsia-500/30 shadow-lg animate-bounce backdrop-blur-md" style="animation-duration: 4.5s;">
                        <i class="fa-solid fa-network-wired text-fuchsia-400 text-xl"></i>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Section 8: Call to Action (CTA) -->
    <div class="relative py-20 sm:py-24 bg-gray-900 overflow-hidden bg-cover bg-center" 
    style="background-image: linear-gradient(rgba(17, 24, 39, 0.8), rgba(17, 24, 39, 0.8)), url('{{ asset('images/hero-pancabudi.jpg') }}');">
    
        <div class="absolute inset-0 opacity-10" 
            style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(to right, #ffffff 1px, transparent 1px); background-size: 50px 50px;">
        </div>
        
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-3xl h-full bg-purple-500 rounded-full mix-blend-overlay filter blur-[100px] opacity-20"></div>

        <div class="container mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            
            <div class="mb-6 animate-hero-down">
                <span class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-white shadow-xl">
                    <i class="fa-solid fa-rocket text-2xl animate-pulse"></i>
                </span>
            </div>

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-6 leading-tight">
                Siap Menjadi Ahli <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-yellow-500">Teknologi Masa Depan?</span>
            </h2>
            
            <p class="mt-4 text-lg sm:text-xl text-purple-100 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
                Jangan biarkan potensi Anda menunggu. Bergabunglah dengan Sistem Komputer UNPAB dan mulailah perjalanan inovasi Anda hari ini.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-5">
                
                <a href="{{ route('pendaftaran.prosedur') }}" 
                class="group relative inline-flex items-center justify-center bg-white text-purple-900 font-bold text-lg py-4 px-10 rounded-full shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:shadow-[0_0_30px_rgba(255,255,255,0.5)] hover:scale-105 transition-all duration-300">
                    <span class="absolute -inset-1 rounded-full border border-white/50 animate-[ping_2s_cubic-bezier(0,0,0.2,1)_infinite]"></span>
                    
                    <span class="relative flex items-center">
                        Daftar Sekarang
                        <i class="fa-solid fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform"></i>
                    </span>
                </a>

                <a href="https://wa.me/6282304733646?text=Halo%20Kaprodi%20Siskom,%20saya%20ingin%20bertanya%20tentang%20pendaftaran." target="_blank"
                class="inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white font-semibold rounded-full hover:bg-white/10 hover:border-white transition-all duration-300 backdrop-blur-sm">
                    <i class="fa-brands fa-whatsapp mr-2 text-xl"></i>
                    Konsultasi
                </a>
            </div>
        </div>
    </div>

    {{-- Section Credit --}}
    <div class="py-12 bg-gray-900 relative overflow-hidden border-t border-gray-800">
    
    <div class="absolute inset-0 opacity-[0.03]" 
         style="background-image: linear-gradient(#a855f7 1px, transparent 1px), linear-gradient(to right, #a855f7 1px, transparent 1px); background-size: 24px 24px;">
    </div>

    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-purple-900/20 rounded-full blur-[80px]"></div>

    <div class="container mx-auto px-4 text-center relative z-10">
        
        <p class="text-[10px] sm:text-xs text-gray-500 uppercase tracking-[0.2em] mb-6 font-semibold">Developed & Designed By</p>

        <div class="inline-flex flex-col sm:flex-row items-center bg-gray-800/80 backdrop-blur-md border border-gray-700/50 rounded-2xl sm:rounded-full p-4 sm:p-2 sm:pr-8 hover:bg-gray-800 hover:border-purple-500/40 transition-all duration-300 group shadow-lg shadow-purple-900/5">
            
            <div class="relative mb-3 sm:mb-0">
                <div class="w-14 h-14 sm:w-12 sm:h-12 rounded-full overflow-hidden border-2 border-gray-600 group-hover:border-purple-500 transition-colors duration-300">
                    <img src="{{ asset('images/rangga.jpg') }}" alt="Rangga Rafandi" class="w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 right-0 w-3.5 h-3.5 sm:w-3 sm:h-3 bg-green-500 border-2 border-gray-800 rounded-full" title="Mahasiswa Aktif"></div>
            </div>

            <div class="sm:ml-4 text-center sm:text-left">
                <h4 class="text-base sm:text-sm font-bold text-gray-100 group-hover:text-white transition-colors">
                    Rangga Rafandi - 2114370113
                </h4>
                <div class="flex flex-col sm:flex-row items-center text-xs space-y-1 sm:space-y-0 sm:space-x-2 mt-1 sm:mt-0.5">
                    <span class="text-purple-400 font-medium bg-purple-900/30 px-2 py-0.5 rounded-full sm:bg-transparent sm:px-0 sm:py-0">Mahasiswa Sistem Komputer</span>
                    <span class="hidden sm:inline text-gray-600">•</span>
                    <span class="text-gray-400 group-hover:text-yellow-400 transition-colors text-[11px] sm:text-xs">Anggota IMAKOM</span>
                </div>
            </div>

            <div class="mt-3 sm:mt-0 sm:ml-6 pt-3 sm:pt-0 border-t border-gray-700 sm:border-t-0 w-full sm:w-auto flex justify-center">
                <a href="https://www.linkedin.com/in/ranggarfndi/" target="_blank" class="text-gray-500 hover:text-purple-400 transition-colors flex items-center gap-2 sm:block" title="Lihat Profil LinkedIn">
                    <span class="sm:hidden text-xs font-medium">Connect</span>
                    <i class="fa-brands fa-linkedin text-xl sm:text-lg"></i>
                </a>
            </div>
        </div>

    </div>
</div>

    {{-- Swiper.js Script --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    {{-- Particles.js Script --}}
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi Swiper Slider
            if (document.querySelector('.hero-slider')) {
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
            }

            // Inisialisasi Particles.js
            if (document.getElementById('particles-js')) {
                particlesJS('particles-js', {
                    "particles": {
                        "number": {
                            "value": 80,
                            "density": {
                                "enable": true,
                                "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#a855f7"
                        },
                        "shape": {
                            "type": "circle"
                        },
                        "opacity": {
                            "value": 0.5,
                            "random": true
                        },
                        "size": {
                            "value": 3,
                            "random": true
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#ffffff",
                            "opacity": 0.2,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 2,
                            "direction": "none",
                            "out_mode": "out"
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                            "onhover": {
                                "enable": true,
                                "mode": "repulse"
                            },
                            "onclick": {
                                "enable": true,
                                "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "repulse": {
                                "distance": 100,
                                "duration": 0.4
                            },
                            "push": {
                                "particles_nb": 4
                            }
                        }
                    },
                    "retina_detect": true
                });
            }

            // Fungsi Smooth Scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
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

        // Navigasi Menu Lengap
        document.getElementById('menuSearch').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let menuGroups = document.querySelectorAll('.menu-group');
        let totalVisible = 0;

        menuGroups.forEach(function(group) {
            let items = group.querySelectorAll('.menu-item');
            let groupVisibleCount = 0;

            items.forEach(function(item) {
                let text = item.textContent.toLowerCase();
                if (text.includes(filter)) {
                    item.style.display = ""; // Tampilkan
                    groupVisibleCount++;
                    totalVisible++;
                } else {
                    item.style.display = "none"; // Sembunyikan
                }
            });

            // Sembunyikan judul grup jika tidak ada item di dalamnya yang cocok
            if (groupVisibleCount === 0) {
                group.style.display = "none";
            } else {
                group.style.display = "";
            }
        });

        // Tampilkan pesan "Tidak Ditemukan" jika totalVisible 0
        let noResults = document.getElementById('noResults');
        if (totalVisible === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    });
    </script>

    {{-- Custom CSS --}}
    <style>
        /* --- 1. UTILITY TEXT SHADOW (Bawaan Lama) --- */
        .shadow-text {
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        /* --- 2. DEFINISI KEYFRAMES (Gerakan Animasi) --- */
        
        /* Gerakan Muncul dari Atas */
        @keyframes fade-in-down {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Gerakan Muncul dari Bawah */
        @keyframes fade-in-up {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Gerakan Zoom In (Membesar) - BARU */
        @keyframes zoom-in {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Gerakan Melayang (Floating) untuk Mouse - BARU */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Efek Kilau Cahaya pada Tombol - BARU */
        @keyframes shimmer {
            100% { transform: translateX(100%); }
        }

        /* --- 3. CLASS ANIMASI (Dipanggil di HTML) --- */

        /* Animasi Lama (Tetap disimpan agar bagian lain tidak error) */
        .animate-fade-in-down {
            animation: fade-in-down 0.8s ease-out forwards;
        }
        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }

        /* Animasi Baru untuk Hero Section */
        .animate-hero-up {
            animation: fade-in-up 0.8s ease-out forwards;
            opacity: 0; /* Mulai dari invisible */
        }
        
        .animate-hero-down {
            animation: fade-in-down 0.8s ease-out forwards;
            opacity: 0;
        }

        .animate-hero-zoom {
            animation: zoom-in 1s ease-out forwards;
            opacity: 0;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        /* --- 4. UTILITY DELAY (Untuk antrian animasi) --- */
        .delay-100 { animation-delay: 0.1s; }
        .delay-300 { animation-delay: 0.3s; }
        .delay-500 { animation-delay: 0.5s; }
        .delay-700 { animation-delay: 0.7s; }
    </style>
</x-app-layout>
