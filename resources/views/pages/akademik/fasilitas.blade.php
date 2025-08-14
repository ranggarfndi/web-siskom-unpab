    <x-app-layout>
        <!-- Page Header -->
        <div class="bg-gray-50">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Fasilitas Program Studi</h1>
                <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">Sarana dan prasarana modern untuk mendukung proses belajar mengajar yang optimal.</p>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="py-16 sm:py-24 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                @if($fasilitas->isNotEmpty())
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                        @foreach($fasilitas as $item)
                            <div x-data="{ open: false }" class="group">
                                <div @click="open = true" class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8 cursor-pointer">
                                    <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" class="h-full w-full object-cover object-center transition-transform duration-300 group-hover:scale-105">
                                </div>
                                <h3 class="mt-4 text-lg font-bold text-gray-800">{{ $item->nama }}</h3>
                                <div class="mt-1 text-sm text-gray-600 prose">
                                    {!! Str::limit($item->deskripsi, 100) !!}
                                </div>

                                <!-- Lightbox Modal -->
                                <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75 p-4" style="display: none;">
                                    <div @click.away="open = false" class="relative max-w-4xl max-h-full mx-auto">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}" class="w-auto h-auto max-w-full max-h-[90vh] rounded-lg shadow-2xl">
                                        <button @click="open = false" class="absolute -top-4 -right-4 h-10 w-10 bg-white rounded-full text-gray-800 flex items-center justify-center">&times;</button>
                                        <div class="text-white text-center mt-2 bg-black bg-opacity-50 p-2 rounded-b-lg">
                                            <p class="font-bold">{{ $item->nama }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-12">
                        <p class="text-gray-500 text-xl">Belum ada data fasilitas yang ditambahkan.</p>
                    </div>
                @endif
            </div>
        </div>
    </x-app-layout>
    