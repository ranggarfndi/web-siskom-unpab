<x-app-layout>
    {{-- Swiper.js CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Section 1: Interactive Welcome Hero -->
    <div class="relative w-full h-screen bg-gray-900 flex items-center justify-center overflow-hidden">
        <div id="particles-js" class="absolute top-0 left-0 w-full h-full"></div>
        <div class="relative z-10 text-center text-white p-4">
            <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight leading-tight animate-fade-in-down"
                style="text-shadow: 3px 3px 10px rgba(0,0,0,0.5);">
                <span class="block">Selamat Datang di Program Studi</span>
                <span class="block text-purple-400 mt-2">Sistem Komputer</span>
                <span class="block text-2xl sm:text-3xl md:text-4xl lg:text-5xl mt-4">Universitas Pembangunan Panca
                    Budi</span>
            </h1>
            <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-200 mt-6 mb-8 animate-fade-in-up"
                style="animation-delay: 0.5s;">
                Membentuk Inovator Teknologi Masa Depan Melalui Pendidikan Unggul.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up"
                style="animation-delay: 1s;">
                <a href="#menu-navigasi"
                    class="w-full sm:w-auto bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105">
                    Lihat Seluruh Menu
                </a>
                <a href="#"
                    class="w-full sm:w-auto bg-transparent border-2 border-white hover:bg-white hover:text-gray-900 text-white font-bold py-3 px-8 rounded-full transition duration-300">
                    Pendaftaran
                </a>
            </div>
        </div>
    </div>

    <!-- Section 2: Artikel Terbaru Slider -->
    @if ($latestArtikels->isNotEmpty())
        <div id="artikel" class="w-full bg-gray-100 py-16 sm:py-24">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Artikel & Berita Terbaru</h2>
                    <p class="text-gray-600 mt-2 text-lg">Wawasan dan informasi terkini dari kami.</p>
                </div>
                <div class="swiper hero-slider h-[60vh] md:h-[70vh] rounded-xl shadow-lg">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($latestArtikels as $artikel)
                            <div class="swiper-slide">
                                <a href="{{ route('artikel.show', $artikel->slug) }}" class="block w-full h-full">
                                    <div class="absolute inset-0 bg-black bg-opacity-50 z-10"></div>
                                    <img src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="{{ $artikel->judul }}"
                                        class="w-full h-full object-cover">
                                    <div class="absolute inset-0 z-20 flex items-end p-6 md:p-12 text-white">
                                        <div class="max-w-3xl">
                                            <h3 class="text-2xl md:text-4xl font-extrabold leading-tight shadow-text">
                                                {{ $artikel->judul }}
                                            </h3>
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
        </div>
    @endif

    <!-- Section 3: Tentang Kami -->
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
                <div class="flex items-center justify-center">
                    <img src="{{ asset('images/unpab-depan.jpg') }}" alt="Gedung Universitas"
                        class="rounded-xl shadow-2xl w-full h-auto max-h-[400px] object-cover">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4: Akreditasi -->
    <div class="py-16 sm:py-24 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Akreditasi Program Studi</h2>
                <p class="text-gray-600 mt-2 text-lg">Komitmen kami terhadap kualitas pendidikan yang unggul.</p>
            </div>
            <div class="flex justify-center">
                <div class="w-full max-w-2xl p-2 sm:p-4 bg-white rounded-lg shadow-xl">
                    <img src="{{ asset('images/akreditasi.jpg') }}" alt="Sertifikat Akreditasi"
                        class="w-full h-full object-contain rounded-md">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5: Navigasi Cepat (Menu Lengkap dalam Card) -->
    <div id="menu-navigasi" class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Jelajahi Seluruh Menu Kami</h2>
                <p class="text-gray-600 mt-2 text-lg">Temukan semua informasi yang Anda butuhkan tentang kami.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-4 gap-4 md:gap-6">
                @php
                    $menuItems = [
                        // Standalone Menus
                        [
                            'group' => 'General',
                            'label' => 'Beranda',
                            'route' => 'beranda',
                            'icon' => '<i class="fa-solid fa-house text-2xl"></i>',
                        ],

                        // Profil
                        [
                            'group' => 'Profil',
                            'label' => 'Visi & Misi',
                            'route' => 'visi-misi.index',
                            'icon' => '<i class="fa-solid fa-bullseye text-2xl"></i>',
                        ],
                        [
                            'group' => 'Profil',
                            'label' => 'Struktur Organisasi',
                            'route' => 'struktur-organisasi.index',
                            'icon' => '<i class="fa-solid fa-sitemap text-2xl"></i>',
                        ],
                        [
                            'group' => 'Profil',
                            'label' => 'Dosen Tetap',
                            'route' => 'dosen-tetap.index',
                            'icon' => '<i class="fa-solid fa-user-tie text-2xl"></i>',
                        ],
                        [
                            'group' => 'Profil',
                            'label' => 'Alumni',
                            'route' => '#',
                            'icon' => '<i class="fa-solid fa-user-graduate text-2xl"></i>',
                        ],
                        [
                            'group' => 'Profil',
                            'label' => 'Kontak',
                            'route' => 'kontak.index',
                            'icon' => '<i class="fa-solid fa-envelope text-2xl"></i>',
                        ],
                        [
                            'group' => 'Profil',
                            'label' => 'Riset & Pengabdian',
                            'route' => '#',
                            'icon' => '<i class="fa-solid fa-flask text-2xl"></i>',
                        ],
                        [
                            'group' => 'Profil',
                            'label' => 'Kemitraan',
                            'route' => '#',
                            'icon' => '<i class="fa-solid fa-handshake text-2xl"></i>',
                        ],

                        // Standalone Menus
                        [
                            'group' => 'General',
                            'label' => 'Artikel',
                            'route' => 'artikel.index',
                            'icon' => '<i class="fa-solid fa-newspaper text-2xl"></i>',
                        ],

                        // Akademik
                        [
                            'group' => 'Akademik',
                            'label' => 'Fasilitas',
                            'route' => 'fasilitas.index',
                            'icon' => '<i class="fa-solid fa-building-columns text-2xl"></i>',
                        ],
                        [
                            'group' => 'Akademik',
                            'label' => 'Sebaran Mata Kuliah',
                            'route' => 'sebaran-matkul.index',
                            'icon' => '<i class="fa-solid fa-book-open text-2xl"></i>',
                        ],
                        [
                            'group' => 'Akademik',
                            'label' => 'Capaian Profil Lulusan',
                            'route' => '#', // ganti route jika sudah ada
                            'icon' => '<i class="fa-solid fa-graduation-cap text-2xl"></i>',
                        ],
                        [
                            'group' => 'Akademik',
                            'label' => 'Prospek Kerja Lulusan',
                            'route' => '#', // ganti route jika sudah ada
                            'icon' => '<i class="fa-solid fa-briefcase text-2xl"></i>',
                        ],

                        // Standalone Menus
                        [
                            'group' => 'General',
                            'label' => 'Biaya Kuliah',
                            'route' => 'biaya-kuliah.index',
                            'icon' => '<i class="fa-solid fa-money-bill-wave text-2xl"></i>',
                        ],

                        // Pendaftaran
                        [
                            'group' => 'Pendaftaran',
                            'label' => 'Prosedur Pendaftaran',
                            'route' => '#',
                            'icon' => '<i class="fa-solid fa-list-check text-2xl"></i>',
                        ],
                        [
                            'group' => 'Pendaftaran',
                            'label' => 'Jadwal Kuliah',
                            'route' => '#',
                            'icon' => '<i class="fa-solid fa-calendar-days text-2xl"></i>',
                        ],
                        [
                            'group' => 'Pendaftaran',
                            'label' => 'Syarat Pendaftaran',
                            'route' => '#',
                            'icon' => '<i class="fa-solid fa-file-circle-check text-2xl"></i>',
                        ],
                        [
                            'group' => 'Pendaftaran',
                            'label' => 'Cara Pembayaran',
                            'route' => '#',
                            'icon' => '<i class="fa-solid fa-credit-card text-2xl"></i>',
                        ],

                        [
                            'group' => 'General',
                            'label' => 'Himpunan Jurusan',
                            'route' => 'https://imakomunpab.com', // contoh link, sesuaikan url IMAKOM
                            'icon' => '<i class="fa-solid fa-users text-2xl"></i>',
                        ],
                        [
                            'group' => 'General',
                            'label' => 'Portal UNPAB',
                            'route' => 'https://portal.unpab.ac.id',
                            'icon' => '<i class="fa-solid fa-globe text-2xl"></i>',
                        ],
                    ];
                @endphp

                @foreach ($menuItems as $item)
                    @php
                        $isExternal = \Illuminate\Support\Str::startsWith($item['route'], 'http');
                        $url = $isExternal ? $item['route'] : ($item['route'] === '#' ? '#' : route($item['route']));
                    @endphp
                    <a href="{{ $url }}" @if ($isExternal) target="_blank" @endif
                        class="group block bg-white p-4 rounded-xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 text-center flex flex-col items-center justify-center h-full">
                        <div class="text-purple-600 group-hover:text-purple-700 transition-colors duration-300">
                            {!! $item['icon'] !!}
                        </div>
                        <h3
                            class="mt-3 text-sm sm:text-base font-semibold text-gray-800 leading-tight flex-grow flex items-center">
                            {{ $item['label'] }}</h3>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Section 6: Kata Mereka (Testimoni) -->
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

    <!-- Section 7: Himpunan Mahasiswa -->
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

    <!-- Section 8: Call to Action (CTA) -->
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
    </script>

    {{-- Custom CSS --}}
    <style>
        .shadow-text {
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        @keyframes fade-in-down {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-down {
            animation: fade-in-down 0.8s ease-out forwards;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }
    </style>
</x-app-layout>
