<x-app-layout>
    {{-- Wrapper Alpine.js untuk fitur pencarian --}}
    <div x-data="{ search: '' }" class="min-h-screen">

        {{-- Page Title & Search Bar --}}
        <div class="bg-white py-12 border-b border-gray-100">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Struktur Organisasi</h1>
                <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
                    Kenali tim dosen dan staf yang berdedikasi membangun Sistem Komputer UNPAB.
                </p>

                {{-- Kolom Pencarian --}}
                <div class="relative max-w-xl mx-auto">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-search text-gray-400 text-lg"></i>
                    </div>
                    <input 
                        x-model="search" 
                        type="text" 
                        class="w-full pl-12 pr-4 py-4 rounded-full border border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 transition-all duration-300 shadow-sm text-gray-700 placeholder-gray-400"
                        placeholder="Cari nama dosen, jabatan, atau NIDN..."
                    >
                    {{-- Tombol Clear (Muncul jika ada ketikan) --}}
                    <button 
                        x-show="search.length > 0" 
                        @click="search = ''"
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-red-500 transition cursor-pointer"
                        x-transition>
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- Content Section with Cards --}}
        <div class="py-16 bg-gray-50 min-h-[500px]">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                
                {{-- Grid untuk menampung card --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                    {{-- Looping data dari Controller --}}
                    @forelse($anggota as $item)
                        {{-- 
                             LOGIKA PENCARIAN:
                             x-show akan menyembunyikan elemen jika teks di dalamnya tidak cocok dengan kata kunci pencarian.
                             $el.textContent mengambil semua teks di dalam div ini (Nama, Jabatan, NIDN).
                        --}}
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-all duration-300 group"
                             x-show="$el.textContent.toLowerCase().includes(search.toLowerCase())"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-90"
                             x-transition:enter-end="opacity-100 transform scale-100">
                            
                            <a href="{{ route('struktur-organisasi.show', $item) }}" class="block h-full flex flex-col">
                                {{-- Foto Wrapper --}}
                                <div class="relative overflow-hidden h-64 bg-gray-100">
                                    @if($item->foto)
                                        <img class="w-full h-full object-cover object-top transform group-hover:scale-110 transition duration-700" 
                                             src="{{ asset('storage/' . $item->foto) }}" 
                                             alt="Foto {{ $item->nama }}">
                                    @else
                                        {{-- Placeholder jika tidak ada foto --}}
                                        <div class="w-full h-full flex items-center justify-center bg-purple-50 text-purple-200">
                                            <i class="fa-solid fa-user text-6xl"></i>
                                        </div>
                                    @endif
                                    
                                    {{-- Overlay Hover --}}
                                    <div class="absolute inset-0 bg-purple-900/0 group-hover:bg-purple-900/20 transition duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                        <span class="bg-white text-purple-700 py-2 px-4 rounded-full text-sm font-bold shadow-lg">Lihat Profil</span>
                                    </div>
                                </div>

                                {{-- Info Teks --}}
                                <div class="p-6 text-center flex-grow flex flex-col justify-center relative">
                                    {{-- Dekorasi Garis --}}
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-10 h-1 bg-purple-500 rounded-b-full opacity-0 group-hover:opacity-100 transition duration-300"></div>

                                    <h3 class="text-lg font-bold text-gray-900 leading-tight mb-2 group-hover:text-purple-700 transition">{{ $item->nama }}</h3>
                                    <span class="inline-block bg-purple-50 text-purple-700 text-xs font-bold px-3 py-1 rounded-full mb-3 mx-auto border border-purple-100">
                                        {{ $item->jabatan }}
                                    </span>
                                    <p class="text-gray-500 text-sm mt-auto">NIDN: <span class="font-mono text-gray-700">{{ $item->nidn ?? '-' }}</span></p>
                                </div>
                            </a>
                        </div>
                    @empty
                        {{-- Pesan jika database kosong --}}
                        <div class="col-span-full text-center py-12">
                            <div class="inline-block p-4 rounded-full bg-gray-100 mb-4">
                                <i class="fa-regular fa-folder-open text-3xl text-gray-400"></i>
                            </div>
                            <p class="text-gray-500 text-xl">Belum ada data anggota organisasi.</p>
                        </div>
                    @endforelse

                </div>
                
                {{-- Pesan "Tidak Ditemukan" (Muncul hanya via JS jika hasil search 0) --}}
                <div x-show="document.querySelectorAll('.grid > div[x-show]:not([style*=\'display: none\'])').length === 0 && search.length > 0" 
                     class="text-center py-20" style="display: none;">
                    <i class="fa-solid fa-magnifying-glass-minus text-4xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500 text-lg">Maaf, tidak ditemukan anggota dengan kata kunci "<span x-text="search" class="font-bold text-purple-600"></span>".</p>
                    <button @click="search = ''" class="mt-4 text-purple-600 hover:underline font-semibold">Reset Pencarian</button>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>