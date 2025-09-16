    <x-app-layout>
        <!-- Page Header -->
        <div class="bg-gray-50">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Rincian Biaya Kuliah</h1>
                <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">Transparansi biaya untuk mendukung perencanaan pendidikan Anda.</p>
            </div>
        </div>

        <!-- Content Section -->
        <div class="py-16 sm:py-24 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                @php
                    $biayaData = [
                        'Reguler - 1' => [
                            'items' => [
                                'Biaya Daftar Ulang' => 1750000, 'UK. Termin 1' => 750000, 'UK. Termin 2' => 800000,
                                'UK. Termin 3' => 800000, 'UK. Termin 4' => 750000, 'UK. Termin 5' => 750000,
                                'UK. Termin 6' => 750000, 'UK. Termin 7' => 750000, 'UK. Termin 8' => 800000,
                                'UK. Termin 9' => 800000, 'UK. Termin 10' => 750000, 'UK. Termin 11' => 750000,
                                'UK. Termin 12' => 750000,
                            ],
                            'total' => 11200000
                        ],
                        'Reguler - 2A' => [
                            'items' => [
                                'Biaya Daftar Ulang' => 2250000, 'UK. Termin 1' => 960000, 'UK. Termin 2' => 960000,
                                'UK. Termin 3' => 960000, 'UK. Termin 4' => 960000, 'UK. Termin 5' => 960000,
                                'UK. Termin 6' => 960000, 'UK. Termin 7' => 960000, 'UK. Termin 8' => 960000,
                                'UK. Termin 9' => 960000, 'UK. Termin 10' => 960000, 'UK. Termin 11' => 960000,
                                'UK. Termin 12' => 960000,
                            ],
                            'total' => 14020000
                        ],
                        'Reguler - 2B' => [
                            'items' => [
                                'Biaya Daftar Ulang' => 2250000, 'UK. Termin 1' => 960000, 'UK. Termin 2' => 960000,
                                'UK. Termin 3' => 960000, 'UK. Termin 4' => 960000, 'UK. Termin 5' => 960000,
                                'UK. Termin 6' => 960000, 'UK. Termin 7' => 960000, 'UK. Termin 8' => 960000,
                                'UK. Termin 9' => 960000, 'UK. Termin 10' => 960000, 'UK. Termin 11' => 960000,
                                'UK. Termin 12' => 960000,
                            ],
                            'total' => 14020000
                        ]
                    ];
                @endphp

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    @foreach($biayaData as $kategori => $detail)
                    <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden flex flex-col">
                        <div class="p-6 bg-purple-600 text-white">
                            <h2 class="text-2xl font-bold text-center">{{ $kategori }}</h2>
                        </div>
                        <div class="p-6 flex-grow">
                            <table class="w-full">
                                <tbody class="divide-y divide-gray-200">
                                    @foreach($detail['items'] as $item => $harga)
                                    <tr>
                                        <td class="py-3 text-gray-600">{{ $item }}</td>
                                        <td class="py-3 text-right font-semibold text-gray-800">Rp {{ number_format($harga, 0, ',', '.') }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="p-6 bg-gray-50 border-t border-gray-200">
                            <div class="flex justify-between items-center">
                                <span class="text-lg font-bold text-gray-800">TOTAL</span>
                                <span class="text-xl font-extrabold text-purple-700">Rp {{ number_format($detail['total'], 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-app-layout>
    