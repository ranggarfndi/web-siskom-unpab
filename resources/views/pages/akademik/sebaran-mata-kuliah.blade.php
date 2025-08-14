<x-app-layout>
    <!-- Page Header -->
    <div class="bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Sebaran Mata Kuliah</h1>
            <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">Kurikulum Program Studi Sistem Komputer yang dirancang untuk masa depan.</p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-16 sm:py-24 bg-white">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @php
                // Data mata kuliah yang sudah diproses dan dikelompokkan per semester
                $semesters = [
                    1 => [
                        ['kode' => 'NAS01100400004', 'nama' => 'Bahasa Indonesia', 'sks' => 3],
                        ['kode' => 'UPB0110041001', 'nama' => 'Pengantar Metafisika', 'sks' => 3],
                        ['kode' => '4370KOM30103', 'nama' => 'Struktur Data dan Algoritma', 'sks' => 3],
                        ['kode' => '4370KOM30105', 'nama' => 'Pemrograman Dasar', 'sks' => 4],
                        ['kode' => '4370KOM30104', 'nama' => 'Kalkulus', 'sks' => 3],
                        ['kode' => '4370KOM30106', 'nama' => 'Aplikasi Komputer Perkantoran', 'sks' => 2],
                        ['kode' => '4370KOM30107', 'nama' => 'Elektronika Dasar dan Pengukuran', 'sks' => 3],
                    ],
                    2 => [
                        ['kode' => 'UPB0110041002', 'nama' => 'Metafisika Ketuhanan', 'sks' => 3],
                        ['kode' => 'UPB0110041003', 'nama' => 'Pengantar Bisnis dan Inovasi', 'sks' => 3],
                        ['kode' => '4370KOM30210', 'nama' => 'Sistem Operasi', 'sks' => 2],
                        ['kode' => '4370KOM30211', 'nama' => 'Pengantar Internet of Things', 'sks' => 2],
                        ['kode' => '4370KOM30212', 'nama' => 'Aljabar Linier dan Matriks', 'sks' => 3],
                        ['kode' => '4370KOM40213', 'nama' => 'Perancangan Sistem Digital', 'sks' => 4],
                        ['kode' => '4370KOM40214', 'nama' => 'Pemrograman Web', 'sks' => 4],
                    ],
                    3 => [
                        ['kode' => '4370KOM50319', 'nama' => 'Pemrograman Aplikasi Permainan', 'sks' => 4],
                        ['kode' => '4370KOM50324', 'nama' => 'Sistem Mikrokontroler', 'sks' => 4],
                        ['kode' => '4370KOM50320', 'nama' => 'Rekayasa Perangkat Lunak', 'sks' => 3],
                        ['kode' => '4370KOM50325', 'nama' => 'Jaringan Nirkabel', 'sks' => 3],
                        ['kode' => '4370KOM50321', 'nama' => 'Teknologi Augmented dan Virtual Reality', 'sks' => 3],
                        ['kode' => '4370KOM50326', 'nama' => 'Manajemen dan Analisis Data', 'sks' => 3],
                        ['kode' => '4370KOM50322', 'nama' => 'Pemrograman Berorientasi Objek', 'sks' => 3],
                        ['kode' => '4370KOM50327', 'nama' => 'Pengolahan Citra Digital', 'sks' => 3],
                        ['kode' => '4370KOM30315', 'nama' => 'Statistika dan Probabilitas', 'sks' => 3],
                        ['kode' => '4370KOM40316', 'nama' => 'Jaringan Komputer dan Komunikasi Data', 'sks' => 3],
                        ['kode' => '4370KOM40317', 'nama' => 'Metode Penelitian', 'sks' => 2],
                        ['kode' => '4370KOM50318', 'nama' => 'Desain Antarmuka Pengguna', 'sks' => 3],
                        ['kode' => '4370KOM50323', 'nama' => 'Sensor dan Aktuator', 'sks' => 3],
                    ],
                    4 => [
                        ['kode' => '4370KOM40428', 'nama' => 'Pemrograman Perangkat Bergerak', 'sks' => 4],
                        ['kode' => '4370KOM40429', 'nama' => 'Sistem Tertanam', 'sks' => 3],
                        ['kode' => '4370KOM40430', 'nama' => 'Robotika', 'sks' => 2],
                        ['kode' => '4370KOM50431', 'nama' => 'Bisnis Cerdas', 'sks' => 3],
                        ['kode' => '4370KOM50432', 'nama' => 'Sistem Informasi Manajemen', 'sks' => 3],
                        ['kode' => '4370KOM50433', 'nama' => 'Desain Pengalaman Pengguna', 'sks' => 3],
                        ['kode' => '4370KOM50434', 'nama' => 'Framework Pengembangan Web', 'sks' => 3],
                        ['kode' => '4370KOM50435', 'nama' => 'Audit Perangkat Lunak', 'sks' => 3],
                        ['kode' => '4370KOM50436', 'nama' => 'Antarmuka dan Periferal', 'sks' => 3],
                        ['kode' => '4370KOM50437', 'nama' => 'Pemrograman Jaringan', 'sks' => 3],
                        ['kode' => '4370KOM50438', 'nama' => 'Teknologi Visi Komputer', 'sks' => 3],
                        ['kode' => '4370KOM50439', 'nama' => 'Infrastruktur Internet of Things', 'sks' => 3],
                        ['kode' => '4370KOM50440', 'nama' => 'Teknik Kendali dan Otomasi', 'sks' => 3],
                    ],
                    5 => [
                        ['kode' => '4370KOM40541', 'nama' => 'Analisis dan Desain Sistem', 'sks' => 3],
                        ['kode' => '4370KOM40542', 'nama' => 'Sistem Basis Data', 'sks' => 4],
                        ['kode' => '4370KOM40543', 'nama' => 'Arsitektur dan Organisasi Komputer', 'sks' => 3],
                        ['kode' => '4370KOM40544', 'nama' => 'Kecerdasan Buatan', 'sks' => 3],
                        ['kode' => '4370KOM40545', 'nama' => 'Teknologi Virtualisasi dan Cloud', 'sks' => 3],
                        ['kode' => '4370KOM40546', 'nama' => 'Pengolahan Sinyal Digital', 'sks' => 4],
                    ],
                    6 => [
                        ['kode' => '4370KOM40652', 'nama' => 'Pemodelan dan Simulasi', 'sks' => 3],
                        ['kode' => '4370KOM50653', 'nama' => 'Sistem Pakar', 'sks' => 3],
                        ['kode' => '4370KOM50654', 'nama' => 'Sistem Pendukung Keputusan', 'sks' => 3],
                        ['kode' => '4370KOM50655', 'nama' => 'Jaringan Saraf Tiruan', 'sks' => 3],
                        ['kode' => '4370KOM50656', 'nama' => 'Bio Informatika', 'sks' => 3],
                        ['kode' => '4370KOM50657', 'nama' => 'Data Mining', 'sks' => 3],
                        ['kode' => '4370KOM40647', 'nama' => 'Keamanan Data', 'sks' => 3],
                        ['kode' => '4370KOM40648', 'nama' => 'Manajemen Proyek', 'sks' => 3],
                        ['kode' => '4370KOM40649', 'nama' => 'Grafika Komputer', 'sks' => 3],
                        ['kode' => '4370KOM40650', 'nama' => 'Pembelajaran Mesin', 'sks' => 3],
                        ['kode' => '4370KOM40651', 'nama' => 'Pengembangan Kepribadian dan Komunikasi', 'sks' => 2],
                    ],
                    7 => [
                        ['kode' => 'NAS01100400001', 'nama' => 'Pancasila', 'sks' => 2],
                        ['kode' => 'NAS01100400002', 'nama' => 'Kewarganegaraan', 'sks' => 2],
                        ['kode' => 'NAS01100400003', 'nama' => 'Agama', 'sks' => 2],
                        ['kode' => 'FST0110042001', 'nama' => 'Implementasi Sains dan Teknologi', 'sks' => 2],
                        ['kode' => '4370KOM60762', 'nama' => 'Teknopreneur', 'sks' => 3],
                        ['kode' => '4370KOM60763', 'nama' => 'Tugas Akhir', 'sks' => 6],
                    ],
                ];
            @endphp

            <div class="space-y-16">
                @php $grandTotalSks = 0; @endphp
                @foreach($semesters as $semester => $courses)
                    <div>
                        <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-purple-200 pb-2 mb-6">Semester {{ $semester }}</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">No.</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-48">Kode MK</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mata Kuliah</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-24">SKS</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    @php $totalSks = 0; @endphp
                                    @foreach($courses as $index => $course)
                                        <tr class="hover:bg-gray-50">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $course['kode'] }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{ $course['nama'] }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $course['sks'] }}</td>
                                        </tr>
                                        @php $totalSks += $course['sks']; @endphp
                                    @endforeach
                                </tbody>
                                <tfoot class="bg-gray-100">
                                    <tr>
                                        <td colspan="3" class="px-6 py-3 text-right text-sm font-bold text-gray-700">Total SKS</td>
                                        <td class="px-6 py-3 text-sm font-bold text-gray-900">{{ $totalSks }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    @php $grandTotalSks += $totalSks; @endphp
                @endforeach

                <!-- Grand Total Section -->
                <div class="mt-12 pt-8 border-t-4 border-purple-600">
                    <div class="flex justify-end items-center bg-gray-100 p-6 rounded-lg shadow-inner">
                        <h2 class="text-2xl font-bold text-gray-800">Total SKS Keseluruhan:</h2>
                        <p class="ml-4 text-3xl font-extrabold text-purple-700">{{ $grandTotalSks }} SKS</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
