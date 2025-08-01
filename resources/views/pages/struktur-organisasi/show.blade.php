<x-app-layout>
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                <div class="md:flex">
                    {{-- Foto --}}
                    <div class="md:flex-shrink-0">
                        <img class="h-64 w-full object-cover md:h-full md:w-64" src="{{ asset('storage/' . $detailAnggota->foto) }}" alt="Foto {{ $detailAnggota->nama }}">
                    </div>

                    {{-- Detail Info --}}
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-purple-700 font-semibold">{{ $detailAnggota->jabatan }}</div>
                        <h1 class="block mt-1 text-3xl leading-tight font-bold text-black">{{ $detailAnggota->nama }}</h1>
                        <p class="mt-2 text-lg text-gray-600">NIDN: {{ $detailAnggota->nidn ?? 'Tidak tersedia' }}</p>

                        {{-- Deskripsi --}}
                        <div class="mt-4 text-gray-600 prose max-w-none">
                            {!! $detailAnggota->deskripsi !!}
                        </div>

                        {{-- Tombol Kembali --}}
                        <div class="mt-8">
                            <a href="{{ route('struktur-organisasi.index') }}" class="text-purple-700 hover:text-purple-900 font-semibold">
                                &larr; Kembali ke semua anggota
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>