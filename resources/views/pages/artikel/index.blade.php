<x-app-layout>
    <div class="bg-white py-12">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">Artikel & Berita</h1>
            <p class="mt-2 text-lg text-gray-600">Baca wawasan dan berita terbaru dari kami.</p>
        </div>
    </div>

    <div class="py-16 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($artikels as $item)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                        <a href="{{ route('artikel.show', $item->slug) }}" class="block">
                            <img class="w-full h-48 object-cover" src="{{ asset('storage/' . $item->thumbnail) }}" alt="Thumbnail {{ $item->judul }}">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-gray-900 h-16">{{ Str::limit($item->judul, 50) }}</h3>
                                <p class="text-gray-500 text-sm mt-2">
                                    {{ $item->published_at->format('d F Y') }} oleh {{ $item->user->name }}
                                </p>
                            </div>
                        </a>
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500">Belum ada artikel yang dipublikasikan.</p>
                @endforelse
            </div>

            {{-- Pagination Links --}}
            <div class="mt-12">
                {{ $artikels->links() }}
            </div>
        </div>
    </div>
</x-app-layout>