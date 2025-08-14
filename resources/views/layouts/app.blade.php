<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistem Komputer') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen bg-white flex flex-col">

        <!-- ===== Header & Navigation (REVISED) ===== -->
        <header class="bg-white shadow-md sticky top-0 z-50">
            <nav x-data="{ mobileMenuOpen: false }" class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <!-- Logo -->
                    <a href="/" class="text-2xl font-bold text-purple-700">
                        SISTEM KOMPUTER
                    </a>

                    <!-- Desktop Navigation -->
                        <div class="hidden md:flex items-center space-x-8">
                            <!-- Menu Item: Beranda -->
                            <div class="relative group">
                                <a href="{{ route('beranda') }}"
                                    class="text-gray-700 transition duration-300 py-2 text-base">Beranda</a>
                                <span
                                    class="absolute bottom-[-8px] left-0 h-1 bg-purple-700 transition-all duration-300 group-hover:w-full {{ request()->routeIs('beranda') ? 'w-full' : 'w-0' }}"></span>
                            </div>

                            <!-- Menu Item: Profil (Dropdown) -->
                            @php $isProfilActive = request()->routeIs(['visi-misi.index', 'struktur-organisasi.*', 'dosen-tetap.*', 'kontak.index']); @endphp
                            <div x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true"
                                @mouseleave="dropdownOpen = false" class="relative group">
                                <button class="text-gray-700 transition duration-300 py-2 text-base flex items-center">
                                    <span>Profil</span>
                                    <svg class="w-4 h-4 ml-1 transform transition-transform duration-300"
                                        :class="{ 'rotate-180': dropdownOpen }" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <span
                                    class="absolute bottom-[-8px] left-0 h-1 bg-purple-700 transition-all duration-300 group-hover:w-full {{ $isProfilActive ? 'w-full' : 'w-0' }}"></span>
                                <div x-show="dropdownOpen" x-transition
                                    class="absolute left-1/2 -translate-x-1/2 mt-2 py-2 px-2 w-56 bg-white rounded-lg shadow-xl z-20">
                                    <a href="{{ route('visi-misi.index') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Visi
                                        & Misi</a>
                                    <a href="{{ route('struktur-organisasi.index') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Struktur
                                        Organisasi</a>
                                    <a href="{{ route('dosen-tetap.index') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Dosen
                                        Tetap</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Alumni</a>
                                    <a href="{{ route('kontak.index') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Kontak</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Riset
                                        & Pengabdian</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Kemitraan</a>
                                </div>
                            </div>

                            <!-- Menu Item: Artikel -->
                            <div class="relative group">
                                <a href="{{ route('artikel.index') }}"
                                    class="text-gray-700 transition duration-300 py-2 text-base">Artikel</a>
                                <span
                                    class="absolute bottom-[-8px] left-0 h-1 bg-purple-700 transition-all duration-300 group-hover:w-full {{ request()->routeIs('artikel.*') ? 'w-full' : 'w-0' }}"></span>
                            </div>

                            <!-- Menu Item: Akademik (Dropdown) -->
                            <div x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true"
                                @mouseleave="dropdownOpen = false" class="relative group">
                                <button class="text-gray-700 transition duration-300 py-2 text-base flex items-center">
                                    <span>Akademik</span>
                                    <svg class="w-4 h-4 ml-1 transform transition-transform duration-300"
                                        :class="{ 'rotate-180': dropdownOpen }" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <span
                                    class="absolute bottom-[-8px] left-0 h-1 bg-purple-700 transition-all duration-300 group-hover:w-full w-0"></span>
                                <div x-show="dropdownOpen" x-transition
                                    class="absolute left-1/2 -translate-x-1/2 mt-2 py-2 px-2 w-56 bg-white rounded-lg shadow-xl z-20">
                                    <a href="{{ route('fasilitas.index') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Fasilitas
                                        Program Studi</a>
                                    <a href="{{ route('fasilitas-universitas.index') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Fasilitas
                                        UNPAB</a>
                                    <a href="{{ route('sebaran-matkul.index') }}"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Sebaran
                                        Mata Kuliah</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Capaian
                                        Profil Lulusan</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Prospek
                                        Kerja Lulusan</a>
                                </div>
                            </div>

                            <!-- Menu Item: Biaya Kuliah -->
                            <div class="relative group">
                                <a href="#" class="text-gray-700 transition duration-300 py-2 text-base">Biaya
                                    Kuliah</a>
                                <span
                                    class="absolute bottom-[-8px] left-0 h-1 bg-purple-700 transition-all duration-300 group-hover:w-full w-0"></span>
                            </div>

                            <!-- Menu Item: Pendaftaran (Dropdown) -->
                            <div x-data="{ dropdownOpen: false }" @mouseenter="dropdownOpen = true"
                                @mouseleave="dropdownOpen = false" class="relative group">
                                <button class="text-gray-700 transition duration-300 py-2 text-base flex items-center">
                                    <span>Pendaftaran</span>
                                    <svg class="w-4 h-4 ml-1 transform transition-transform duration-300"
                                        :class="{ 'rotate-180': dropdownOpen }" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </button>
                                <span
                                    class="absolute bottom-[-8px] left-0 h-1 bg-purple-700 transition-all duration-300 group-hover:w-full w-0"></span>
                                <div x-show="dropdownOpen" x-transition
                                    class="absolute right-0 mt-2 py-2 px-2 w-56 bg-white rounded-lg shadow-xl z-20">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Jurusan
                                        UNPAB</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Prosedur
                                        Pendaftaran</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Jadwal
                                        Kuliah</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Syarat
                                        Pendaftaran</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-purple-600 hover:text-white rounded-md">Cara
                                        Pembayaran</a>
                                </div>
                            </div>

                            <!-- Menu Item: Portal UNPAB -->
                            <div class="relative group">
                                <a href="https://mahasiswa.pancabudi.ac.id/" target="blank" class="text-gray-700 transition duration-300 py-2 text-base">Portal UNPAB</a>
                                <span
                                    class="absolute bottom-[-8px] left-0 h-1 bg-purple-700 transition-all duration-300 group-hover:w-full w-0"></span>
                            </div>
                        </div>

                    <!-- Social Icons -->
                    <div class="hidden lg:flex items-center space-x-4">
                        <a href="#" aria-label="Facebook"
                            class="text-gray-500 hover:text-purple-700 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram"
                            class="text-gray-500 hover:text-purple-700 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.585-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zM12 0C8.74 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.74 0 12s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.74 24 12 24s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98C23.986 15.667 24 15.26 24 12s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98C15.667.014 15.26 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="YouTube"
                            class="text-gray-500 hover:text-purple-700 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.701V4.115l8.817 4.885-8.817 4.885z" />
                            </svg>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden">
                        <button @click="mobileMenuOpen = !mobileMenuOpen"
                            class="p-2 rounded-md text-gray-700 hover:bg-gray-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path :class="{ 'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{ 'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div x-show="mobileMenuOpen" x-transition class="md:hidden pb-4">
                    <div class="pt-4 space-y-1">
                        <!-- Mobile: Beranda -->
                        <a href="{{ route('beranda') }}"
                            class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ request()->routeIs('beranda') ? 'bg-purple-50 border-purple-600 text-purple-800' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">Beranda</a>

                        <!-- Mobile: Profil (Accordion) -->
                        <div x-data="{ subOpen: {{ $isProfilActive ? 'true' : 'false' }} }">
                            <button @click="subOpen = !subOpen"
                                class="w-full flex justify-between items-center pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ $isProfilActive ? 'bg-purple-50 border-purple-600 text-purple-800' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">
                                <span>Profil</span>
                                <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': subOpen }"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="subOpen" x-transition class="pl-4 mt-1 space-y-1">
                                <a href="{{ route('visi-misi.index') }}"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Visi
                                    & Misi</a>
                                <a href="{{ route('struktur-organisasi.index') }}"
                                    class="block pl-10 pr-4 py-2 text-base font-medium {{ request()->routeIs('struktur-organisasi.*') ? 'bg-purple-100 text-purple-800' : 'text-gray-600 hover:bg-gray-100' }}">Struktur
                                    Organisasi</a>
                                <a href="{{ route('dosen-tetap.index') }}"
                                    class="block pl-10 pr-4 py-2 text-base font-medium {{ request()->routeIs('dosen-tetap.*') ? 'bg-purple-100 text-purple-800' : 'text-gray-600 hover:bg-gray-100' }}">Dosen
                                    Tetap</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Alumni</a>
                                <a href="{{ route('kontak.index') }}"
                                    class="block pl-10 pr-4 py-2 text-base font-medium {{ request()->routeIs('kontak.index') ? 'bg-purple-100 text-purple-800' : 'text-gray-600 hover:bg-gray-100' }}">Kontak</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Riset
                                    & Pengabdian</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Kemitraan</a>
                            </div>
                        </div>

                        <!-- Mobile: Artikel -->
                        <a href="{{ route('artikel.index') }}"
                            class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium {{ request()->routeIs('artikel.*') ? 'bg-purple-50 border-purple-600 text-purple-800' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }}">Artikel</a>

                        <!-- Mobile: Akademik (Accordion) -->
                        <div x-data="{ subOpen: false }">
                            <button @click="subOpen = !subOpen"
                                class="w-full flex justify-between items-center pl-3 pr-4 py-2 border-l-4 text-base font-medium border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                                <span>Akademik</span>
                                <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': subOpen }"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="subOpen" x-transition class="pl-4 mt-1 space-y-1">
                                <a href="{{ route('fasilitas.index') }}"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Fasilitas
                                    Program Studi</a>
                                <a href="{{ route('fasilitas-universitas.index') }}"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Fasilitas
                                    UNPAB</a>
                                <a href="{{ route('sebaran-matkul.index') }}"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Sebaran
                                    Mata Kuliah</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Capaian
                                    Profil Lulusan</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Prospek
                                    Kerja Lulusan</a>
                            </div>
                        </div>

                        <!-- Mobile: Biaya Kuliah -->
                        <a href="#"
                            class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">Biaya
                            Kuliah</a>

                        <!-- Mobile: Pendaftaran (Accordion) -->
                        <div x-data="{ subOpen: false }">
                            <button @click="subOpen = !subOpen"
                                class="w-full flex justify-between items-center pl-3 pr-4 py-2 border-l-4 text-base font-medium border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800">
                                <span>Pendaftaran</span>
                                <svg class="w-5 h-5 transition-transform" :class="{ 'rotate-180': subOpen }"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div x-show="subOpen" x-transition class="pl-4 mt-1 space-y-1">
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Jurusan
                                    UNPAB</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Prosedur
                                    Pendaftaran</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Jadwal
                                    Kuliah</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Syarat
                                    Pendaftaran</a>
                                <a href="#"
                                    class="block pl-10 pr-4 py-2 text-base font-medium text-gray-600 hover:bg-gray-100">Cara
                                    Pembayaran</a>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </header>

        <main class="flex-grow">
            {{ $slot }}
        </main>

        <a href="https://wa.me/6281234567890?text=Halo%20Admin%20SISKOM" target="_blank"
            class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-transform transform hover:scale-110 z-50"
            aria-label="Chat on WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="currentColor" viewBox="0 0 448 512">
                <path
                    d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 221.9-99.6 221.9-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.8 0-67.3-8.8-98.1-25.4l-7-4.1-72.5 19.1 19.4-70.6-4.5-7.3c-18.4-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
            </svg>
        </a>

        {{-- FOOTER --}}
        <footer class="bg-gray-900 text-white">
            <!-- Main Footer Content -->
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                    <!-- About Section -->
                    <div class="md:col-span-2 lg:col-span-2">
                        <h3 class="text-2xl font-bold text-white mb-4">SISTEM KOMPUTER</h3>
                        <p class="text-gray-400 leading-relaxed max-w-md">
                            Sistem Komputer Cerdas untuk masa depan yang lebih baik. Kami berdedikasi untuk pendidikan
                            dan inovasi teknologi.
                        </p>
                    </div>

                    <!-- Links Section -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 tracking-wider uppercase">Tautan</h3>
                        <ul class="space-y-3">
                            <li><a href="/" class="text-gray-400 hover:text-white transition">Beranda</a></li>
                            <li><a href="{{ route('struktur-organisasi.index') }}"
                                    class="text-gray-400 hover:text-white transition">Struktur Organisasi</a></li>
                            <li><a href="{{ route('dosen-tetap.index') }}"
                                    class="text-gray-400 hover:text-white transition">Dosen Tetap</a></li>
                            <li><a href="{{ route('artikel.index') }}"
                                    class="text-gray-400 hover:text-white transition">Artikel</a></li>
                            <li><a href="{{ route('kontak.index') }}"
                                    class="text-gray-400 hover:text-white transition">Kontak</a></li>
                        </ul>
                    </div>

                    <!-- Contact Section -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4 tracking-wider uppercase">Hubungi Kami</h3>
                        <ul class="space-y-4 text-gray-400">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mr-3 mt-1 flex-shrink-0 text-purple-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <span>Jl. Pendidikan No. 123, Medan, Sumatera Utara</span>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 flex-shrink-0 text-purple-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <a href="mailto:info@siskom.ac.id"
                                    class="hover:text-white transition">info@siskom.ac.id</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="w-5 h-5 mr-3 flex-shrink-0 text-purple-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                <span>(061) 123-4567</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Copyright & Socials Section -->
            <div class="bg-black bg-opacity-20">
                <div
                    class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-5 flex flex-col sm:flex-row justify-between items-center">
                    <p class="text-sm text-gray-400">&copy; {{ date('Y') }} Web SISKOM. All Rights Reserved.</p>
                    <div class="flex space-x-4 mt-4 sm:mt-0">
                        <a href="#" aria-label="Facebook" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="Instagram" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.585-.069 4.85c-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.585-.012-4.85-.07c-3.252-.148-4.771-1.691-4.919-4.919-.058-1.265-.069-1.645-.069-4.85s.011-3.585.069-4.85c.149-3.225 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zM12 0C8.74 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.74 0 12s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.74 24 12 24s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98C23.986 15.667 24 15.26 24 12s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98C15.667.014 15.26 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z" />
                            </svg>
                        </a>
                        <a href="#" aria-label="YouTube" class="text-gray-400 hover:text-white transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.701V4.115l8.817 4.885-8.817 4.885z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</body>

</html>
