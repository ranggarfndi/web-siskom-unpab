<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistem Komputer UNPAB') }}</title>
    
    <meta name="description" content="Program Studi Sistem Komputer UNPAB. Membentuk inovator teknologi masa depan.">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #d8b4fe; border-radius: 5px; }
        ::-webkit-scrollbar-thumb:hover { background: #a855f7; }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50 text-gray-800" x-data="globalSearch()">
    <div class="min-h-screen flex flex-col">

        <header class="fixed w-full top-0 z-50 transition-all duration-300 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100">
            <nav x-data="{ mobileMenuOpen: false }" class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="flex items-center justify-between h-20">
                    
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="flex items-center gap-3 group">
                            <img src="{{ asset('images/logo-navbar-siskom.png') }}" class="h-10 w-auto transform transition duration-300 group-hover:scale-105" alt="Sistem Komputer Logo" />
                        </a>
                    </div>

                    <div class="hidden lg:flex flex-1 items-center justify-center space-x-2 px-4">
                        
                        <a href="{{ route('beranda') }}" 
                           class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request()->routeIs('beranda') ? 'bg-purple-100 text-purple-700' : 'text-gray-600 hover:bg-gray-100 hover:text-purple-600' }}">
                           Beranda
                        </a>

                        @php $isProfilActive = request()->routeIs(['visi-misi.index', 'struktur-organisasi.*', 'dosen-tetap.*', 'alumni.index', 'kontak.index', 'riset-pengabdian.index', 'kemitraan.index']); @endphp
                        <div x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false" class="relative group">
                            <button class="px-4 py-2 rounded-full text-sm font-semibold flex items-center transition-all duration-300 {{ $isProfilActive ? 'bg-purple-100 text-purple-700' : 'text-gray-600 hover:bg-gray-100 hover:text-purple-600' }}">
                                <span>Profil</span>
                                <i class="fa-solid fa-chevron-down ml-1 text-xs transition-transform duration-300" :class="{ 'rotate-180': dropdownOpen }"></i>
                            </button>
                            
                            <div x-show="dropdownOpen" 
                                 x-transition:enter="transition ease-out duration-200" 
                                 x-transition:enter-start="opacity-0 scale-95" 
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-150" 
                                 x-transition:leave-start="opacity-100 scale-100" 
                                 x-transition:leave-end="opacity-0 scale-95"
                                 class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-60 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50 origin-top">
                                <div class="py-1">
                                    <a href="{{ route('visi-misi.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Visi & Misi</a>
                                    <a href="{{ route('struktur-organisasi.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Struktur Organisasi</a>
                                    <a href="{{ route('dosen-tetap.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Dosen Tetap</a>
                                    <a href="{{ route('alumni.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Alumni</a>
                                    <a href="{{ route('riset-pengabdian.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Riset & Pengabdian</a>
                                    <a href="{{ route('kemitraan.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Kemitraan</a>
                                    <a href="{{ route('kontak.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Kontak</a>
                                </div>
                            </div>
                        </div>

                        @php $isAkademikActive = request()->routeIs(['fasilitas.index', 'sebaran-matkul.index', 'prospek-kerja.index', 'capaian-lulusan.index']); @endphp
                        <div x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false" class="relative group">
                            <button class="px-4 py-2 rounded-full text-sm font-semibold flex items-center transition-all duration-300 {{ $isAkademikActive ? 'bg-purple-100 text-purple-700' : 'text-gray-600 hover:bg-gray-100 hover:text-purple-600' }}">
                                <span>Akademik</span>
                                <i class="fa-solid fa-chevron-down ml-1 text-xs transition-transform duration-300" :class="{ 'rotate-180': dropdownOpen }"></i>
                            </button>
                            
                            <div x-show="dropdownOpen" 
                                 x-transition:enter="transition ease-out duration-200" 
                                 x-transition:enter-start="opacity-0 scale-95" 
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-150" 
                                 x-transition:leave-start="opacity-100 scale-100" 
                                 x-transition:leave-end="opacity-0 scale-95"
                                 class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-64 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50 origin-top">
                                <div class="py-1">
                                    <a href="{{ route('fasilitas.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Fasilitas Program Studi</a>
                                    <a href="{{ route('sebaran-matkul.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Sebaran Mata Kuliah</a>
                                    <a href="{{ route('capaian-lulusan.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Capaian Profil Lulusan</a>
                                    <a href="{{ route('prospek-kerja.index') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Prospek Kerja</a>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('artikel.index') }}" 
                           class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request()->routeIs('artikel.*') ? 'bg-purple-100 text-purple-700' : 'text-gray-600 hover:bg-gray-100 hover:text-purple-600' }}">
                           Artikel
                        </a>

                        <a href="{{ route('biaya-kuliah.index') }}" 
                           class="px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 {{ request()->routeIs('biaya-kuliah.index') ? 'bg-purple-100 text-purple-700' : 'text-gray-600 hover:bg-gray-100 hover:text-purple-600' }}">
                           Biaya
                        </a>

                        @php $isPendaftaranActive = request()->routeIs(['pendaftaran.prosedur', 'pendaftaran.syarat', 'pendaftaran.pembayaran']); @endphp
                        <div x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true" @mouseleave="dropdownOpen = false" class="relative group">
                            <button class="px-4 py-2 rounded-full text-sm font-semibold flex items-center transition-all duration-300 {{ $isPendaftaranActive ? 'bg-purple-100 text-purple-700' : 'text-gray-600 hover:bg-gray-100 hover:text-purple-600' }}">
                                <span>Pendaftaran</span>
                                <i class="fa-solid fa-chevron-down ml-1 text-xs transition-transform duration-300" :class="{ 'rotate-180': dropdownOpen }"></i>
                            </button>
                            
                            <div x-show="dropdownOpen" 
                                 x-transition:enter="transition ease-out duration-200" 
                                 x-transition:enter-start="opacity-0 scale-95" 
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-150" 
                                 x-transition:leave-start="opacity-100 scale-100" 
                                 x-transition:leave-end="opacity-0 scale-95"
                                 class="absolute left-1/2 transform -translate-x-1/2 mt-2 w-60 bg-white rounded-xl shadow-xl border border-gray-100 overflow-hidden z-50 origin-top">
                                <div class="py-1">
                                    <a href="{{ route('pendaftaran.prosedur') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Prosedur Pendaftaran</a>
                                    <a href="{{ route('pendaftaran.syarat') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Syarat Pendaftaran</a>
                                    <a href="{{ route('pendaftaran.pembayaran') }}" class="block px-4 py-2.5 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">Cara Pembayaran</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 lg:gap-3">
                        
                        <div class="hidden lg:flex items-center border-r border-gray-200 pr-3 gap-2">
                            <a href="https://www.instagram.com/" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center bg-gray-50 text-gray-500 hover:bg-pink-100 hover:text-pink-600 transition-all duration-300 shadow-sm" title="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://wa.me/6281234567890" target="_blank" class="w-8 h-8 rounded-full flex items-center justify-center bg-gray-50 text-gray-500 hover:bg-green-100 hover:text-green-600 transition-all duration-300 shadow-sm" title="WhatsApp">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                            <a href="mailto:info@siskom.ac.id" class="w-8 h-8 rounded-full flex items-center justify-center bg-gray-50 text-gray-500 hover:bg-purple-100 hover:text-purple-600 transition-all duration-300 shadow-sm" title="Email">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>

                        <button @click="openSearch()" class="w-9 h-9 rounded-full bg-gray-50 flex items-center justify-center text-gray-500 hover:bg-purple-100 hover:text-purple-700 transition focus:outline-none shadow-sm">
                            <i class="fa-solid fa-search"></i>
                        </button>

                        <div class="lg:hidden ml-1">
                            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-700 hover:text-purple-700 focus:outline-none p-1">
                                <i class="fa-solid fa-bars-staggered text-2xl" x-show="!mobileMenuOpen"></i>
                                <i class="fa-solid fa-xmark text-2xl" x-show="mobileMenuOpen" x-cloak></i>
                            </button>
                        </div>
                    </div>

                </div>

                <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                     class="lg:hidden absolute top-20 left-0 w-full bg-white shadow-lg border-t border-gray-100 py-4 px-4 h-screen overflow-y-auto">
                    
                    <div class="space-y-2">
                        <a href="{{ route('beranda') }}" class="block px-4 py-3 rounded-lg font-medium {{ request()->routeIs('beranda') ? 'bg-purple-50 text-purple-700' : 'text-gray-600' }}">Beranda</a>
                        
                        <div x-data="{ subOpen: false }" class="rounded-lg overflow-hidden">
                            <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center px-4 py-3 text-left font-medium text-gray-600 hover:bg-gray-50">
                                <span>Profil</span>
                                <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="{ 'rotate-180': subOpen }"></i>
                            </button>
                            <div x-show="subOpen" class="bg-gray-50 px-4 py-2 space-y-1">
                                <a href="{{ route('visi-misi.index') }}" class="block py-2 text-sm text-gray-600">Visi & Misi</a>
                                <a href="{{ route('struktur-organisasi.index') }}" class="block py-2 text-sm text-gray-600">Struktur Organisasi</a>
                                <a href="{{ route('dosen-tetap.index') }}" class="block py-2 text-sm text-gray-600">Dosen Tetap</a>
                                <a href="{{ route('alumni.index') }}" class="block py-2 text-sm text-gray-600">Alumni</a>
                                <a href="{{ route('kontak.index') }}" class="block py-2 text-sm text-gray-600">Kontak</a>
                            </div>
                        </div>

                        <div x-data="{ subOpen: false }" class="rounded-lg overflow-hidden">
                            <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center px-4 py-3 text-left font-medium text-gray-600 hover:bg-gray-50">
                                <span>Akademik</span>
                                <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="{ 'rotate-180': subOpen }"></i>
                            </button>
                            <div x-show="subOpen" class="bg-gray-50 px-4 py-2 space-y-1">
                                <a href="{{ route('fasilitas.index') }}" class="block py-2 text-sm text-gray-600">Fasilitas</a>
                                <a href="{{ route('sebaran-matkul.index') }}" class="block py-2 text-sm text-gray-600">Sebaran Matkul</a>
                                <a href="{{ route('prospek-kerja.index') }}" class="block py-2 text-sm text-gray-600">Prospek Kerja</a>
                            </div>
                        </div>

                        <a href="{{ route('artikel.index') }}" class="block px-4 py-3 rounded-lg font-medium text-gray-600 hover:bg-gray-50">Artikel</a>
                        <a href="{{ route('biaya-kuliah.index') }}" class="block px-4 py-3 rounded-lg font-medium text-gray-600 hover:bg-gray-50">Biaya Kuliah</a>

                        <div x-data="{ subOpen: false }" class="rounded-lg overflow-hidden">
                            <button @click="subOpen = !subOpen" class="w-full flex justify-between items-center px-4 py-3 text-left font-medium text-gray-600 hover:bg-gray-50">
                                <span>Pendaftaran</span>
                                <i class="fa-solid fa-chevron-down text-xs transition-transform" :class="{ 'rotate-180': subOpen }"></i>
                            </button>
                            <div x-show="subOpen" class="bg-gray-50 px-4 py-2 space-y-1">
                                <a href="{{ route('pendaftaran.prosedur') }}" class="block py-2 text-sm text-gray-600">Prosedur Pendaftaran</a>
                                <a href="{{ route('pendaftaran.syarat') }}" class="block py-2 text-sm text-gray-600">Syarat Pendaftaran</a>
                                <a href="{{ route('pendaftaran.pembayaran') }}" class="block py-2 text-sm text-gray-600">Cara Pembayaran</a>
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-center space-x-6 py-4 border-t border-gray-100 mt-2">
                             <a href="https://www.instagram.com/" class="text-gray-400 hover:text-pink-600"><i class="fa-brands fa-instagram text-2xl"></i></a>
                             <a href="https://wa.me/6281234567890" class="text-gray-400 hover:text-green-600"><i class="fa-brands fa-whatsapp text-2xl"></i></a>
                             <a href="mailto:info@siskom.ac.id" class="text-gray-400 hover:text-purple-600"><i class="fa-solid fa-envelope text-2xl"></i></a>
                        </div>

                        <div class="pt-2">
                            <a href="https://mahasiswa.pancabudi.ac.id/" target="_blank" class="block w-full text-center bg-purple-600 text-white font-bold py-3 rounded-lg shadow-md">Portal Mahasiswa</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div x-show="searchOpen" class="fixed inset-0 z-[100] overflow-y-auto" role="dialog" aria-modal="true" x-cloak>
            <div x-show="searchOpen" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-900/60 backdrop-blur-sm" @click="searchOpen = false"></div>

            <div x-show="searchOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="relative min-h-[20vh] flex items-start justify-center p-4 sm:p-6 mt-20">
                <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl overflow-hidden ring-1 ring-black/5" @click.stop>
                    <div class="relative border-b border-gray-200">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-6 pointer-events-none">
                            <i class="fa-solid fa-search text-gray-400 text-lg"></i>
                        </div>
                        <input x-ref="searchInput" x-model="query" type="text" class="w-full border-0 py-5 pl-14 pr-12 text-gray-900 placeholder-gray-500 focus:ring-0 text-lg font-medium bg-transparent" placeholder="Cari halaman, menu, atau informasi..." role="combobox" aria-expanded="false">
                        <button @click="searchOpen = false" class="absolute inset-y-0 right-0 flex items-center pr-6 text-gray-400 hover:text-gray-600">
                            <i class="fa-solid fa-xmark text-xl"></i>
                        </button>
                    </div>

                    <ul x-show="filteredItems.length > 0" class="max-h-[60vh] scroll-py-3 overflow-y-auto p-4 space-y-2">
                        <template x-for="item in filteredItems" :key="item.url">
                            <li class="group flex cursor-pointer select-none rounded-xl p-3 hover:bg-purple-50 transition-colors">
                                <a :href="item.url" class="flex-auto flex items-center">
                                    <div class="flex h-10 w-10 flex-none items-center justify-center rounded-lg bg-gray-100 group-hover:bg-purple-200 group-hover:text-purple-700 text-gray-500 transition-all">
                                        <i class="fa-solid" :class="item.category === 'Artikel' ? 'fa-newspaper' : 'fa-link'"></i>
                                    </div>
                                    <div class="ml-4 flex-auto">
                                        <p class="text-sm font-semibold text-gray-900 group-hover:text-purple-900" x-text="item.title"></p>
                                        <p class="text-xs text-gray-500 group-hover:text-purple-600" x-text="item.category"></p>
                                    </div>
                                    <i class="fa-solid fa-chevron-right text-gray-300 group-hover:text-purple-400 text-sm"></i>
                                </a>
                            </li>
                        </template>
                    </ul>

                    <div x-show="query !== '' && filteredItems.length === 0" class="py-14 px-6 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4">
                            <i class="fa-solid fa-magnifying-glass-minus text-2xl text-gray-400"></i>
                        </div>
                        <p class="font-semibold text-gray-900">Tidak ada hasil ditemukan</p>
                        <p class="text-sm text-gray-500 mt-1">Kami tidak dapat menemukan "<span x-text="query"></span>". Coba kata kunci lain.</p>
                    </div>
                </div>
            </div>
        </div>

        <main class="flex-grow pt-20"> {{ $slot }}
        </main>

        <a href="https://wa.me/6281234567890?text=Halo%20Admin%20SISKOM,%20saya%20ingin%20bertanya..." target="_blank"
           class="fixed bottom-8 right-8 z-40 group">
           <span class="absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75 animate-ping"></span>
           <div class="relative flex items-center justify-center w-14 h-14 bg-green-500 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-110">
                <i class="fa-brands fa-whatsapp text-white text-3xl"></i>
           </div>
           <div class="absolute right-16 top-1/2 -translate-y-1/2 bg-white px-3 py-1 rounded shadow-md text-sm font-medium text-gray-700 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
               Chat Kami
           </div>
        </a>

        <footer class="bg-gray-900 text-white relative overflow-hidden border-t border-purple-900">
             <div class="absolute inset-0 opacity-[0.03]" style="background-image: linear-gradient(#ffffff 1px, transparent 1px), linear-gradient(to right, #ffffff 1px, transparent 1px); background-size: 30px 30px;"></div>

            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                    <div class="md:col-span-2">
                        <div class="flex items-center gap-3 mb-6">
                            <div>
                                <h3 class="text-xl font-bold tracking-wide">SISTEM KOMPUTER</h3>
                                <p class="text-xs text-purple-400 tracking-widest uppercase">Universitas Pembangunan Panca Budi</p>
                            </div>
                        </div>
                        <p class="text-gray-400 leading-relaxed max-w-md mb-6">
                            Menghasilkan lulusan yang kompeten dalam perancangan sistem cerdas, IoT, dan teknologi masa depan yang bermanfaat bagi kemaslahatan umat.
                        </p>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-purple-600 hover:text-white transition-all duration-300"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-pink-600 hover:text-white transition-all duration-300"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-red-600 hover:text-white transition-all duration-300"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all duration-300"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-lg font-bold mb-6 text-white border-b-2 border-purple-600 inline-block pb-1">Tautan Cepat</h3>
                        <ul class="space-y-3">
                            <li><a href="{{ route('visi-misi.index') }}" class="text-gray-400 hover:text-purple-400 transition flex items-center"><i class="fa-solid fa-angle-right mr-2 text-xs"></i> Visi & Misi</a></li>
                            <li><a href="{{ route('dosen-tetap.index') }}" class="text-gray-400 hover:text-purple-400 transition flex items-center"><i class="fa-solid fa-angle-right mr-2 text-xs"></i> Dosen Tetap</a></li>
                            <li><a href="{{ route('artikel.index') }}" class="text-gray-400 hover:text-purple-400 transition flex items-center"><i class="fa-solid fa-angle-right mr-2 text-xs"></i> Artikel Terbaru</a></li>
                            <li><a href="{{ route('pendaftaran.prosedur') }}" class="text-gray-400 hover:text-purple-400 transition flex items-center"><i class="fa-solid fa-angle-right mr-2 text-xs"></i> Info Pendaftaran</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-lg font-bold mb-6 text-white border-b-2 border-purple-600 inline-block pb-1">Hubungi Kami</h3>
                        <ul class="space-y-4 text-gray-400">
                            <li class="flex items-start">
                                <i class="fa-solid fa-location-dot mt-1.5 mr-3 text-purple-500"></i>
                                <span>Jl. Jend. Gatot Subroto No. KM 4,5, Medan, Sumatera Utara</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fa-solid fa-envelope mr-3 text-purple-500"></i>
                                <a href="mailto:prodi_siskom@pancabudi.ac.id" class="hover:text-white transition">prodi_siskom@pancabudi.ac.id</a>
                            </li>
                            <li class="flex items-center">
                                <i class="fa-brands fa-whatsapp mr-3 text-purple-500"></i>
                                <span>+62 812 3456 7890</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-black/30 backdrop-blur-sm border-t border-gray-800">
                <div class="container mx-auto max-w-7xl px-4 py-6 flex justify-center items-center">
                    <p class="text-sm text-gray-500 text-center">
                        &copy; {{ date('Y') }} Program Studi Sistem Komputer UNPAB. 
                        <span class="hidden sm:inline mx-1">|</span> 
                        <br class="sm:hidden">
                        Dibuat oleh Mahasiswa Sistem Komputer & Anggota IMAKOM | RANGGA RAFANDI - 2114370113
                    </p>
                </div>
            </div>
        </footer>

    </div>

    <script>
        function globalSearch() {
            return {
                searchOpen: false,
                query: '',
                menuItems: [
                    // --- MENU UTAMA ---
                    { title: 'Beranda', url: "{{ route('beranda') }}", category: 'Utama' },

                    // --- PROFIL ---
                    { title: 'Visi & Misi', url: "{{ route('visi-misi.index') }}", category: 'Profil' },
                    { title: 'Struktur Organisasi', url: "{{ route('struktur-organisasi.index') }}", category: 'Profil' },
                    { title: 'Dosen Tetap', url: "{{ route('dosen-tetap.index') }}", category: 'Profil' },
                    { title: 'Alumni', url: "{{ route('alumni.index') }}", category: 'Profil' },
                    { title: 'Riset & Pengabdian', url: "{{ route('riset-pengabdian.index') }}", category: 'Profil' },
                    { title: 'Kemitraan', url: "{{ route('kemitraan.index') }}", category: 'Profil' },
                    { title: 'Kontak Kami', url: "{{ route('kontak.index') }}", category: 'Profil' },

                    // --- AKADEMIK ---
                    { title: 'Fasilitas Program Studi', url: "{{ route('fasilitas.index') }}", category: 'Akademik' },
                    { title: 'Sebaran Mata Kuliah', url: "{{ route('sebaran-matkul.index') }}", category: 'Akademik' },
                    { title: 'Capaian Profil Lulusan', url: "{{ route('capaian-lulusan.index') }}", category: 'Akademik' },
                    { title: 'Prospek Kerja Lulusan', url: "{{ route('prospek-kerja.index') }}", category: 'Akademik' },

                    // --- PENDAFTARAN & BIAYA ---
                    { title: 'Biaya Kuliah', url: "{{ route('biaya-kuliah.index') }}", category: 'Pendaftaran' },
                    { title: 'Prosedur Pendaftaran', url: "{{ route('pendaftaran.prosedur') }}", category: 'Pendaftaran' },
                    { title: 'Syarat Pendaftaran', url: "{{ route('pendaftaran.syarat') }}", category: 'Pendaftaran' },
                    { title: 'Cara Pembayaran', url: "{{ route('pendaftaran.pembayaran') }}", category: 'Pendaftaran' },

                    // --- ARTIKEL ---
                    { title: 'Artikel & Berita', url: "{{ route('artikel.index') }}", category: 'Artikel' },

                    // --- LINK EKSTERNAL (Penting untuk akses cepat) ---
                    { title: 'Portal Mahasiswa UNPAB', url: "https://mahasiswa.pancabudi.ac.id/", category: 'Eksternal' },
                    { title: 'Himpunan Mahasiswa (IMAKOM)', url: "https://imakomunpab.com/", category: 'Eksternal' },
                ],
                get filteredItems() {
                    if (this.query === '') return [];
                    return this.menuItems.filter(item => 
                        item.title.toLowerCase().includes(this.query.toLowerCase()) || 
                        item.category.toLowerCase().includes(this.query.toLowerCase())
                    );
                },
                openSearch() {
                    this.searchOpen = true;
                    this.$nextTick(() => this.$refs.searchInput.focus());
                }
            }
        }
    </script>
</body>
</html>