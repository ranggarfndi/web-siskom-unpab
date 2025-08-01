<x-app-layout>
    <div class="bg-white py-12">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">Dosen Tetap</h1>
            <p class="mt-2 text-lg text-gray-600">Para pengajar profesional dan berdedikasi kami.</p>
        </div>
    </div>

    <div class="py-16 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @forelse($dosen as $item)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                        <a href="{{ route('dosen-tetap.show', $item) }}" class="block">
                            <img class="w-full h-64 object-cover object-center" src="{{ asset('storage/' . $item->foto) }}" alt="Foto {{ $item->nama }}">
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-900">{{ $item->nama }}</h3>
                                <p class="text-purple-700 font-semibold mt-1">Dosen</p>
                                <p class="text-gray-500 text-sm mt-1">NIDN: {{ $item->nidn }}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-xl">Belum ada data dosen.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>