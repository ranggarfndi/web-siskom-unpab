<x-app-layout>
    {{-- Page Title --}}
    <div class="bg-white py-12">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">Struktur Organisasi</h1>
            <p class="mt-2 text-lg text-gray-600">Kenali tim yang berada di balik Sistem Komputer.</p>
        </div>
    </div>

    {{-- Content Section with Cards --}}
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            {{-- Grid untuk menampung card --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                {{-- Looping data dari Controller --}}
                @forelse($anggota as $item)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                        <a href="{{ route('struktur-organisasi.show', $item) }}" class="block">
                            {{-- Foto --}}
                            <img class="w-full h-64 object-cover object-center" src="{{ asset('storage/' . $item->foto) }}" alt="Foto {{ $item->nama }}">

                            {{-- Info Teks --}}
                            <div class="p-6 text-center">
                                <h3 class="text-xl font-bold text-gray-900">{{ $item->nama }}</h3>
                                <p class="text-purple-700 font-semibold mt-1">{{ $item->jabatan }}</p>
                                <p class="text-gray-500 text-sm mt-1">NIDN: {{ $item->nidn ?? '-' }}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    {{-- Pesan jika tidak ada data --}}
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-xl">Belum ada data anggota organisasi.</p>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>