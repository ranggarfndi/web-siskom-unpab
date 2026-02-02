<x-app-layout>
    {{-- Header Section --}}
    <div class="bg-white py-12 border-b border-gray-100">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <span class="text-purple-600 font-bold tracking-wider uppercase text-xs mb-2 block">Investasi Pendidikan</span>
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Rincian Biaya Kuliah</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Transparansi biaya untuk mendukung perencanaan masa depan Anda di Sistem Komputer UNPAB.
            </p>
        </div>
    </div>

    {{-- Content Section --}}
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            @php
                $biayaData = [
                    'Reguler - 1' => [
                        'desc' => 'Kelas Pagi (Senin - Jumat)',
                        'items' => [
                            'Biaya Daftar Ulang' => 1750000, 
                            'UK. Termin 1' => 750000, 'UK. Termin 2' => 800000,
                            'UK. Termin 3' => 800000, 'UK. Termin 4' => 750000, 
                            'UK. Termin 5' => 750000, 'UK. Termin 6' => 750000, 
                            'UK. Termin 7' => 750000, 'UK. Termin 8' => 800000,
                            'UK. Termin 9' => 800000, 'UK. Termin 10' => 750000, 
                            'UK. Termin 11' => 750000, 'UK. Termin 12' => 750000,
                        ],
                        'total' => 11200000
                    ],
                    'Reguler - 2A' => [
                        'desc' => 'Kelas Malam (Senin - Jumat)',
                        'items' => [
                            'Biaya Daftar Ulang' => 2250000, 
                            'UK. Termin 1' => 960000, 'UK. Termin 2' => 960000,
                            'UK. Termin 3' => 960000, 'UK. Termin 4' => 960000, 
                            'UK. Termin 5' => 960000, 'UK. Termin 6' => 960000, 
                            'UK. Termin 7' => 960000, 'UK. Termin 8' => 960000,
                            'UK. Termin 9' => 960000, 'UK. Termin 10' => 960000, 
                            'UK. Termin 11' => 960000, 'UK. Termin 12' => 960000,
                        ],
                        'total' => 14020000
                    ],
                    'Reguler - 2B' => [
                        'desc' => 'Kelas Karyawan (Jumat - Sabtu)',
                        'items' => [
                            'Biaya Daftar Ulang' => 2250000, 
                            'UK. Termin 1' => 960000, 'UK. Termin 2' => 960000,
                            'UK. Termin 3' => 960000, 'UK. Termin 4' => 960000, 
                            'UK. Termin 5' => 960000, 'UK. Termin 6' => 960000, 
                            'UK. Termin 7' => 960000, 'UK. Termin 8' => 960000,
                            'UK. Termin 9' => 960000, 'UK. Termin 10' => 960000, 
                            'UK. Termin 11' => 960000, 'UK. Termin 12' => 960000,
                        ],
                        'total' => 14020000
                    ]
                ];
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                @foreach($biayaData as $kategori => $detail)
                <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden flex flex-col hover:shadow-2xl transition-shadow duration-300 relative group">
                    
                    {{-- Header Card --}}
                    <div class="p-6 bg-gradient-to-r from-purple-800 to-purple-600 text-white text-center relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-full bg-white opacity-10 transform -skew-x-12"></div>
                        <h2 class="text-2xl font-bold relative z-10">{{ $kategori }}</h2>
                        <p class="text-purple-100 text-sm mt-1 relative z-10 font-medium">{{ $detail['desc'] }}</p>
                    </div>

                    {{-- List Items --}}
                    <div class="p-6 flex-grow bg-white">
                        <div class="space-y-3">
                            @foreach($detail['items'] as $item => $harga)
                            <div class="flex justify-between items-center text-sm {{ $loop->last ? '' : 'border-b border-dashed border-gray-200 pb-2' }}">
                                <span class="text-gray-600 font-medium">{{ $item }}</span>
                                <span class="text-gray-900 font-bold">Rp {{ number_format($harga, 0, ',', '.') }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Total & CTA --}}
                    <div class="p-6 bg-gray-50 border-t border-gray-200">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-sm font-bold text-gray-500 uppercase tracking-wide">Estimasi Total</span>
                            <span class="text-2xl font-extrabold text-purple-700">
                                Rp {{ number_format($detail['total'], 0, ',', '.') }}
                            </span>
                        </div>
                        
                        <a href="{{ route('pendaftaran.prosedur') }}" class="block w-full py-3 px-4 bg-white border-2 border-purple-600 text-purple-600 font-bold text-center rounded-xl hover:bg-purple-600 hover:text-white transition-all duration-300 transform group-hover:-translate-y-1 shadow-sm">
                            Pilih Paket Ini
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Note Tambahan --}}
            <div class="mt-12 bg-blue-50 border-l-4 border-blue-500 p-4 rounded-r-lg max-w-4xl mx-auto">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fa-solid fa-circle-info text-blue-500 text-xl"></i>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-blue-700">
                            <strong>Catatan:</strong> Biaya di atas adalah estimasi untuk tahun ajaran saat ini dan dapat berubah sewaktu-waktu sesuai kebijakan Universitas. Silakan hubungi bagian keuangan atau administrasi prodi untuk rincian paling akurat.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>