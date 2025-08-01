<x-app-layout>
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-xl shadow-xl overflow-hidden">
                <div class="md:flex">
                    <div class="md:flex-shrink-0">
                        <img class="h-64 w-full object-cover md:h-full md:w-64" src="{{ asset('storage/' . $detailDosen->foto) }}" alt="Foto {{ $detailDosen->nama }}">
                    </div>
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-purple-700 font-semibold">{{ $detailDosen->jabatan_fungsional }}</div>
                        <h1 class="block mt-1 text-3xl leading-tight font-bold text-black">{{ $detailDosen->nama }}</h1>
                        <p class="mt-2 text-lg text-gray-600">NIDN: {{ $detailDosen->nidn }}</p>
                        <p class="mt-1 text-md text-gray-500">{{ $detailDosen->email }}</p>
                        <p class="mt-1 text-md text-gray-500">{{ $detailDosen->no_hp }}</p>

                        <h4 class="mt-6 font-bold text-gray-800">Bidang Keahlian:</h4>
                        <div class="mt-2 text-gray-600 prose max-w-none">
                            {!! $detailDosen->bidang_keahlian !!}
                        </div>

                        <div class="mt-8">
                            <a href="{{ route('dosen-tetap.index') }}" class="text-purple-700 hover:text-purple-900 font-semibold">
                                &larr; Kembali ke daftar dosen
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>