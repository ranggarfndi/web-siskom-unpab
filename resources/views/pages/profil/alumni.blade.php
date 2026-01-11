<x-app-layout>
    <!-- Header -->
    <div class="bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Alumni Kami</h1>
            <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">
                Jejak langkah para lulusan Sistem Komputer yang berkarya di berbagai industri.
            </p>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="py-20 bg-white">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if($alumni->isNotEmpty())
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-16">
                    @foreach($alumni as $item)
                        <div class="flex flex-col items-center text-center group">
                            
                            <!-- Foto Lingkaran Besar -->
                            <div class="relative mb-6">
                                <!-- Lingkaran dekoratif ungu -->
                                <div class="absolute inset-0 rounded-full border-4 border-purple-200 transform scale-110 group-hover:scale-125 group-hover:border-purple-300 transition-all duration-300"></div>
                                
                                <!-- Foto Utama -->
                                <div class="w-40 h-40 md:w-48 md:h-48 rounded-full overflow-hidden border-4 border-purple-600 shadow-xl relative z-10 group-hover:shadow-2xl transition-all duration-300">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" 
                                         alt="{{ $item->nama }}" 
                                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                                </div>
                            </div>

                            <!-- Info -->
                            <div class="relative z-10">
                                <h3 class="text-xl font-bold text-gray-900 mb-1 group-hover:text-purple-700 transition-colors">
                                    {{ $item->nama }}
                                </h3>
                                <p class="text-sm text-purple-600 font-semibold mb-2">
                                    NPM: {{ $item->npm }}
                                </p>
                                <div class="h-1 w-12 bg-purple-200 mx-auto mb-3 rounded-full group-hover:w-24 group-hover:bg-purple-400 transition-all duration-300"></div>
                                <p class="text-base font-bold text-gray-800">{{ $item->jabatan }}</p>
                                <p class="text-sm text-gray-500">{{ $item->pekerjaan }}</p>
                            </div>

                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20">
                    <div class="bg-purple-50 rounded-full p-6 inline-block mb-4">
                        <svg class="h-12 w-12 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900">Belum ada data alumni</h3>
                    <p class="mt-1 text-gray-500">Data alumni akan segera ditambahkan.</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>