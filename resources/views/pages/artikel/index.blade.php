<x-app-layout>
    <div class="bg-white py-12">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">Artikel & Berita</h1>
            <p class="mt-2 text-lg text-gray-600">Baca wawasan dan berita terbaru dari kami.</p>

            {{-- FORM PENCARIAN & FILTER --}}
            <div class="mt-8 max-w-4xl mx-auto">
                <form action="{{ route('artikel.index') }}" method="GET" class="bg-gray-50 p-4 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex flex-col md:flex-row gap-4">
                        {{-- Input Kata Kunci --}}
                        <div class="flex-grow relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari judul atau isi artikel..." class="pl-10 w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring focus:ring-purple-200 transition duration-200">
                        </div>

                        {{-- Input Tanggal --}}
                        <div class="w-full md:w-48 relative">
                            <input type="date" name="date" value="{{ request('date') }}" class="w-full rounded-lg border-gray-300 focus:border-purple-500 focus:ring focus:ring-purple-200 transition duration-200 text-gray-600">
                        </div>

                        {{-- Tombol Cari --}}
                        <button type="submit" class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-2 px-6 rounded-lg transition duration-300 flex items-center justify-center">
                            Cari
                        </button>

                        {{-- Tombol Reset (Muncul jika sedang memfilter) --}}
                        @if(request('search') || request('date'))
                            <a href="{{ route('artikel.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold py-2 px-6 rounded-lg transition duration-300 flex items-center justify-center">
                                Reset
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="py-12 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            {{-- Hasil Pencarian (Opsional: Menampilkan pesan jika tidak ada hasil) --}}
            @if($artikels->isEmpty())
                <div class="text-center py-16">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <h3 class="mt-2 text-lg font-medium text-gray-900">Tidak ada artikel ditemukan</h3>
                    <p class="mt-1 text-gray-500">Coba ubah kata kunci atau tanggal pencarian Anda.</p>
                    <div class="mt-6">
                        <a href="{{ route('artikel.index') }}" class="text-purple-600 hover:text-purple-500 font-medium">Lihat semua artikel &rarr;</a>
                    </div>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($artikels as $item)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 flex flex-col h-full">
                            <a href="{{ route('artikel.show', $item->slug) }}" class="block flex-shrink-0">
                                <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $item->thumbnail) }}" alt="Thumbnail {{ $item->judul }}">
                            </a>
                            <div class="p-6 flex flex-col flex-grow">
                                <div class="flex-grow">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2 line-clamp-2">
                                        <a href="{{ route('artikel.show', $item->slug) }}" class="hover:text-purple-700 transition">
                                            {{ Str::limit($item->judul, 60) }}
                                        </a>
                                    </h3>
                                    <p class="text-gray-500 text-sm mt-2 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        {{ $item->published_at->format('d F Y') }}
                                    </p>
                                    <p class="text-gray-500 text-sm mt-1 flex items-center">
                                         <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                        {{ $item->user->name }}
                                    </p>
                                </div>
                                <div class="mt-4 pt-4 border-t border-gray-100">
                                     <a href="{{ route('artikel.show', $item->slug) }}" class="text-purple-700 font-semibold hover:text-purple-900 transition text-sm flex items-center">
                                        Baca Selengkapnya
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                     </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                {{-- Pagination Links --}}
                <div class="mt-12">
                    {{ $artikels->links() }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>