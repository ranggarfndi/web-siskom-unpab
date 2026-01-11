<x-app-layout>
    <!-- Header -->
    <div class="bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Mitra Kerjasama</h1>
            <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">
                Membangun sinergi dengan berbagai institusi dan industri untuk kemajuan pendidikan.
            </p>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="py-20 bg-white">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if($mitra->isNotEmpty())
                <!-- Grid 4 Kolom -->
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 md:gap-12">
                    @foreach($mitra as $item)
                        <div class="flex flex-col items-center group">
                            
                            <!-- Logo dalam Lingkaran -->
                            <div class="relative w-32 h-32 mb-4 transition-transform duration-300 transform group-hover:scale-105">
                                <!-- Bingkai Lingkaran -->
                                <div class="absolute inset-0 rounded-full border-2 border-gray-200 bg-white shadow-sm flex items-center justify-center overflow-hidden p-4 group-hover:border-purple-500 group-hover:shadow-md transition-all duration-300">
                                    <!-- Gambar Logo (contain agar pas di dalam lingkaran) -->
                                    <img src="{{ asset('storage/' . $item->logo) }}" 
                                            alt="{{ $item->nama }}" 
                                            class="max-w-full max-h-full object-contain">
                                </div>
                            </div>

                            <!-- Nama Mitra -->
                            <h3 class="text-center font-bold text-gray-800 text-lg group-hover:text-purple-700 transition-colors">
                                {{ $item->nama }}
                            </h3>
                            
                        </div>
                    @endforeach
                </div>
            @else
                <!-- Pesan Kosong -->
                <div class="text-center py-20">
                    <div class="bg-purple-50 rounded-full p-6 inline-block mb-4">
                        <svg class="h-12 w-12 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Belum ada data mitra</h3>
                    <p class="mt-1 text-gray-500">Data kemitraan akan segera ditambahkan.</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>