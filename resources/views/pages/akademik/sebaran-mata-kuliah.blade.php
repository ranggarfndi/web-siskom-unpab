<x-app-layout>
    <!-- Page Header -->
    <div class="bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Sebaran Mata Kuliah</h1>
            <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">
                Kurikulum Program Studi Sistem Komputer yang disesuaikan dengan konsentrasi keahlian.
            </p>
        </div>
    </div>

    <!-- Content Section -->
    <div class="py-16 sm:py-24 bg-white" x-data="{ activeTab: 'pplm' }">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <!-- Tab Navigation -->
            <div class="flex justify-center mb-12">
                <div class="bg-gray-100 p-1 rounded-lg inline-flex shadow-inner">
                    <button @click="activeTab = 'pplm'" 
                        :class="{ 'bg-white text-purple-700 shadow-sm': activeTab === 'pplm', 'text-gray-500 hover:text-gray-700': activeTab !== 'pplm' }"
                        class="px-6 py-2.5 rounded-md text-sm font-bold transition-all duration-200 focus:outline-none">
                        Konsentrasi PPLM
                    </button>
                    <button @click="activeTab = 'piot'" 
                        :class="{ 'bg-white text-teal-600 shadow-sm': activeTab === 'piot', 'text-gray-500 hover:text-gray-700': activeTab !== 'piot' }"
                        class="px-6 py-2.5 rounded-md text-sm font-bold transition-all duration-200 focus:outline-none">
                        Konsentrasi PIOT
                    </button>
                </div>
            </div>

            @php
                // --- DATA MATKUL UMUM (Semester 1, 2, 5, 6, 7 sama untuk kedua konsentrasi) ---
                // Semester 1
                $sem1 = [
                    ['kode' => 'UPB0110041001', 'nama' => 'Pengantar Metafisika', 'wp' => 'W', 'sks' => 3],
                    ['kode' => 'NAS01100400004', 'nama' => 'Bahasa Indonesia', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM30103', 'nama' => 'Struktur Data dan Algoritma', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM30104', 'nama' => 'Kalkulus', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM30105', 'nama' => 'Pemrograman Dasar', 'wp' => 'W', 'sks' => 4],
                    ['kode' => '4370KOM30106', 'nama' => 'Aplikasi Komputer Perkantoran', 'wp' => 'W', 'sks' => 2],
                    ['kode' => '4370KOM30107', 'nama' => 'Elektronika Dasar dan Pengukuran', 'wp' => 'W', 'sks' => 3],
                ];

                // Semester 2
                $sem2 = [
                    ['kode' => 'UPB0110041002', 'nama' => 'Metafisika Ketuhanan', 'wp' => 'W', 'sks' => 3],
                    ['kode' => 'UPB0110041003', 'nama' => 'Pengantar Bisnis dan Inovasi', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM30210', 'nama' => 'Sistem Operasi', 'wp' => 'W', 'sks' => 2],
                    ['kode' => '4370KOM30211', 'nama' => 'Pengantar Internet of Things', 'wp' => 'W', 'sks' => 2],
                    ['kode' => '4370KOM30212', 'nama' => 'Aljabar Linier dan Matriks', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40213', 'nama' => 'Perancangan Sistem Digital', 'wp' => 'W', 'sks' => 4],
                    ['kode' => '4370KOM40214', 'nama' => 'Pemrograman Web', 'wp' => 'W', 'sks' => 4],
                ];

                // Semester 5
                $sem5 = [
                    ['kode' => '4370KOM40541', 'nama' => 'Analisis dan Desain Sistem', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40542', 'nama' => 'Sistem Basis Data', 'wp' => 'W', 'sks' => 4],
                    ['kode' => '4370KOM40543', 'nama' => 'Arsitektur dan Organisasi Komputer', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40544', 'nama' => 'Kecerdasan Buatan', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40545', 'nama' => 'Teknologi Virtualisasi dan Cloud', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40546', 'nama' => 'Pengolahan Sinyal Digital', 'wp' => 'W', 'sks' => 4],
                ];

                // Semester 6
                $sem6 = [
                    ['kode' => '4370KOM40647', 'nama' => 'Keamanan Data', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40648', 'nama' => 'Manajemen Proyek', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40649', 'nama' => 'Grafika Komputer', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40650', 'nama' => 'Pembelajaran Mesin', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM40651', 'nama' => 'Pengembangan Kepribadian dan Komunikasi', 'wp' => 'W', 'sks' => 2],
                    ['kode' => '4370KOM40652', 'nama' => 'Pemodelan dan Simulasi', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM50653', 'nama' => 'Sistem Pakar', 'wp' => 'P', 'sks' => 3],
                    ['kode' => '4370KOM50654', 'nama' => 'Sistem Pendukung Keputusan', 'wp' => 'P', 'sks' => 3],
                    ['kode' => '4370KOM50655', 'nama' => 'Jaringan Saraf Tiruan', 'wp' => 'P', 'sks' => 3],
                    ['kode' => '4370KOM50656', 'nama' => 'Bio Informatika', 'wp' => 'P', 'sks' => 3],
                    ['kode' => '4370KOM50657', 'nama' => 'Data Mining', 'wp' => 'P', 'sks' => 3],
                ];

                // Semester 7
                $sem7 = [
                    ['kode' => 'FST0110042001', 'nama' => 'Implementasi Sains dan Teknologi', 'wp' => 'W', 'sks' => 2],
                    ['kode' => 'NAS01100400001', 'nama' => 'Pancasila', 'wp' => 'W', 'sks' => 2],
                    ['kode' => 'NAS01100400002', 'nama' => 'Kewarganegaraan', 'wp' => 'W', 'sks' => 2],
                    ['kode' => 'NAS01100400003', 'nama' => 'Agama', 'wp' => 'W', 'sks' => 2],
                    ['kode' => '4370KOM60762', 'nama' => 'Teknopreneur', 'wp' => 'W', 'sks' => 3],
                    ['kode' => '4370KOM60763', 'nama' => 'Tugas Akhir', 'wp' => 'S', 'sks' => 6], // S biasanya disamakan Wajib
                ];

                // --- DATA KHUSUS PPLM (Semester 3 & 4) ---
                $pplmData = [
                    1 => $sem1,
                    2 => $sem2,
                    3 => [
                        ['kode' => '4370KOM30315', 'nama' => 'Statistika dan Probabilitas', 'wp' => 'W', 'sks' => 3],
                        ['kode' => '4370KOM40316', 'nama' => 'Jaringan Komputer dan Komunikasi Data', 'wp' => 'W', 'sks' => 3],
                        ['kode' => '4370KOM40317', 'nama' => 'Metode Penelitian', 'wp' => 'W', 'sks' => 2],
                        ['kode' => '4370KOM50318', 'nama' => 'Desain Antarmuka Pengguna', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM50319', 'nama' => 'Pemrograman Aplikasi Permainan', 'wp' => 'W', 'sks' => 4, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM50320', 'nama' => 'Rekayasa Perangkat Lunak', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM50321', 'nama' => 'Teknologi Augmented dan Virtual Reality', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM50322', 'nama' => 'Pemrograman Berorientasi Objek', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                    ],
                    4 => [
                        ['kode' => '4370KOM40428', 'nama' => 'Pemrograman Perangkat Bergerak', 'wp' => 'W', 'sks' => 4, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM40429', 'nama' => 'Sistem Tertanam', 'wp' => 'W', 'sks' => 3], // Ada di kedua
                        ['kode' => '4370KOM40430', 'nama' => 'Robotika', 'wp' => 'W', 'sks' => 2], // Ada di kedua
                        ['kode' => '4370KOM50431', 'nama' => 'Bisnis Cerdas', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM50432', 'nama' => 'Sistem Informasi Manajemen', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM50433', 'nama' => 'Desain Pengalaman Pengguna', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM50434', 'nama' => 'Framework Pengembangan Web', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                        ['kode' => '4370KOM50435', 'nama' => 'Audit Perangkat Lunak', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PPLM
                    ],
                    5 => $sem5,
                    6 => $sem6,
                    7 => $sem7,
                ];

                // --- DATA KHUSUS PIOT (Semester 3 & 4) ---
                $piotData = [
                    1 => $sem1,
                    2 => $sem2,
                    3 => [
                        ['kode' => '4370KOM30315', 'nama' => 'Statistika dan Probabilitas', 'wp' => 'W', 'sks' => 3],
                        ['kode' => '4370KOM40316', 'nama' => 'Jaringan Komputer dan Komunikasi Data', 'wp' => 'W', 'sks' => 3],
                        ['kode' => '4370KOM40317', 'nama' => 'Metode Penelitian', 'wp' => 'W', 'sks' => 2],
                        ['kode' => '4370KOM50323', 'nama' => 'Sensor dan Aktuator', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                        ['kode' => '4370KOM50324', 'nama' => 'Sistem Mikrokontroler', 'wp' => 'W', 'sks' => 4, 'khusus' => true], // KHUSUS PIOT
                        ['kode' => '4370KOM50325', 'nama' => 'Jaringan Nirkabel', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                        ['kode' => '4370KOM50326', 'nama' => 'Manajemen dan Analisis Data', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                        ['kode' => '4370KOM50327', 'nama' => 'Pengolahan Citra Digital', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                    ],
                    4 => [
                        ['kode' => '4370KOM40428', 'nama' => 'Pemrograman Perangkat Bergerak', 'wp' => 'W', 'sks' => 4, 'khusus' => true], // Tampil di kedua tapi mungkin beda fokus, saya tandai khusus
                        ['kode' => '4370KOM40429', 'nama' => 'Sistem Tertanam', 'wp' => 'W', 'sks' => 3],
                        ['kode' => '4370KOM40430', 'nama' => 'Robotika', 'wp' => 'W', 'sks' => 2],
                        ['kode' => '4370KOM50436', 'nama' => 'Antarmuka dan Periferal', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                        ['kode' => '4370KOM50437', 'nama' => 'Pemrograman Jaringan', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                        ['kode' => '4370KOM50438', 'nama' => 'Teknologi Visi Komputer', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                        ['kode' => '4370KOM50439', 'nama' => 'Infrastruktur Internet of Things', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                        ['kode' => '4370KOM50440', 'nama' => 'Teknik Kendali dan Otomasi', 'wp' => 'W', 'sks' => 3, 'khusus' => true], // KHUSUS PIOT
                    ],
                    5 => $sem5,
                    6 => $sem6,
                    7 => $sem7,
                ];
            @endphp

            <!-- TAB KONTEN: PPLM -->
            <div x-show="activeTab === 'pplm'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="text-center mb-10">
                    <h3 class="text-2xl font-bold text-purple-700">Pengembangan Perangkat Lunak Mobile (PPLM)</h3>
                    <p class="text-gray-500">Fokus pada pembuatan aplikasi mobile, game, dan antarmuka pengguna.</p>
                </div>

                <div class="space-y-16">
                    @php 
                        $grandTotalSksWajib = 0; 
                        $grandTotalSksPilihan = 0; 
                    @endphp
                    @foreach($pplmData as $semester => $courses)
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-purple-200 pb-2 mb-6">Semester {{ $semester }}</h2>
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">No.</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-48">Kode MK</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mata Kuliah</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-20">W/P</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-24">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @php $semesterSks = 0; @endphp
                                        @foreach($courses as $index => $course)
                                            {{-- Logika Highlight Mata Kuliah Khusus --}}
                                            @php
                                                $isSpecial = isset($course['khusus']) && $course['khusus'];
                                                $rowClass = $isSpecial ? 'bg-purple-50 hover:bg-purple-100' : 'hover:bg-gray-50';
                                                $textClass = $isSpecial ? 'text-purple-900 font-semibold' : 'text-gray-800';
                                            @endphp

                                            <tr class="{{ $rowClass }} transition-colors duration-150">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $course['kode'] }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm {{ $textClass }}">
                                                    {{ $course['nama'] }}
                                                    @if($isSpecial)
                                                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-purple-100 text-purple-800">
                                                            PPLM
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-bold {{ $course['wp'] === 'P' ? 'text-orange-600' : 'text-green-600' }}">
                                                    {{ $course['wp'] }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{ $course['sks'] }}</td>
                                            </tr>
                                            @php 
                                                $semesterSks += $course['sks'];
                                                if ($course['wp'] === 'P') {
                                                    $grandTotalSksPilihan += $course['sks'];
                                                } else {
                                                    $grandTotalSksWajib += $course['sks'];
                                                }
                                            @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot class="bg-gray-50">
                                        <tr>
                                            <td colspan="4" class="px-6 py-3 text-right text-sm font-bold text-gray-700">Total SKS Semester {{ $semester }}</td>
                                            <td class="px-6 py-3 text-center text-sm font-bold text-gray-900">{{ $semesterSks }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    @endforeach

                    <!-- TOTAL SKS PPLM -->
                    <div class="mt-12 pt-8 border-t-4 border-purple-600">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Total Wajib -->
                            <div class="bg-green-50 p-6 rounded-lg shadow-sm border border-green-100 flex flex-col items-center justify-center">
                                <h3 class="text-sm font-semibold text-green-800 uppercase tracking-wide">Total SKS Wajib (W)</h3>
                                <p class="mt-2 text-4xl font-extrabold text-green-600">{{ $grandTotalSksWajib }}</p>
                            </div>
    
                            <!-- Total Pilihan -->
                            <div class="bg-orange-50 p-6 rounded-lg shadow-sm border border-orange-100 flex flex-col items-center justify-center">
                                <h3 class="text-sm font-semibold text-orange-800 uppercase tracking-wide">Total SKS Pilihan (P)</h3>
                                <p class="mt-2 text-4xl font-extrabold text-orange-600">{{ $grandTotalSksPilihan }}</p>
                            </div>
    
                            <!-- Total Keseluruhan -->
                            <div class="bg-purple-50 p-6 rounded-lg shadow-sm border border-purple-100 flex flex-col items-center justify-center">
                                <h3 class="text-sm font-semibold text-purple-800 uppercase tracking-wide">Total SKS Keseluruhan</h3>
                                <p class="mt-2 text-4xl font-extrabold text-purple-700">{{ $grandTotalSksWajib + $grandTotalSksPilihan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB KONTEN: PIOT -->
            <div x-show="activeTab === 'piot'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" style="display: none;">
                <div class="text-center mb-10">
                    <h3 class="text-2xl font-bold text-teal-700">Pengembangan Internet of Things (PIOT)</h3>
                    <p class="text-gray-500">Fokus pada sistem cerdas, mikrokontroler, jaringan, dan otomasi.</p>
                </div>

                <div class="space-y-16">
                     @php 
                        $grandTotalSksWajib = 0; 
                        $grandTotalSksPilihan = 0; 
                    @endphp
                    @foreach($piotData as $semester => $courses)
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 border-b-2 border-teal-200 pb-2 mb-6">Semester {{ $semester }}</h2>
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-16">No.</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-48">Kode MK</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Mata Kuliah</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-20">W/P</th>
                                            <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-24">SKS</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @php $semesterSks = 0; @endphp
                                        @foreach($courses as $index => $course)
                                             {{-- Logika Highlight Mata Kuliah Khusus --}}
                                            @php
                                                $isSpecial = isset($course['khusus']) && $course['khusus'];
                                                $rowClass = $isSpecial ? 'bg-teal-50 hover:bg-teal-100' : 'hover:bg-gray-50'; // Warna Teal untuk PIOT
                                                $textClass = $isSpecial ? 'text-teal-900 font-semibold' : 'text-gray-800';
                                            @endphp
                                            <tr class="{{ $rowClass }} transition-colors duration-150">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $index + 1 }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $course['kode'] }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm {{ $textClass }}">
                                                    {{ $course['nama'] }}
                                                    @if($isSpecial)
                                                        <span class="ml-2 inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-teal-100 text-teal-800">
                                                            PIOT
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-bold {{ $course['wp'] === 'P' ? 'text-orange-600' : 'text-green-600' }}">
                                                    {{ $course['wp'] }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm text-gray-500">{{ $course['sks'] }}</td>
                                            </tr>
                                            @php 
                                                $semesterSks += $course['sks'];
                                                if ($course['wp'] === 'P') {
                                                    $grandTotalSksPilihan += $course['sks'];
                                                } else {
                                                    $grandTotalSksWajib += $course['sks'];
                                                }
                                            @endphp
                                        @endforeach
                                    </tbody>
                                    <tfoot class="bg-gray-50">
                                        <tr>
                                            <td colspan="4" class="px-6 py-3 text-right text-sm font-bold text-gray-700">Total SKS Semester {{ $semester }}</td>
                                            <td class="px-6 py-3 text-center text-sm font-bold text-gray-900">{{ $semesterSks }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    @endforeach

                    <!-- TOTAL SKS PIOT -->
                    <div class="mt-12 pt-8 border-t-4 border-teal-600">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <!-- Total Wajib -->
                            <div class="bg-green-50 p-6 rounded-lg shadow-sm border border-green-100 flex flex-col items-center justify-center">
                                <h3 class="text-sm font-semibold text-green-800 uppercase tracking-wide">Total SKS Wajib (W)</h3>
                                <p class="mt-2 text-4xl font-extrabold text-green-600">{{ $grandTotalSksWajib }}</p>
                            </div>
    
                            <!-- Total Pilihan -->
                            <div class="bg-orange-50 p-6 rounded-lg shadow-sm border border-orange-100 flex flex-col items-center justify-center">
                                <h3 class="text-sm font-semibold text-orange-800 uppercase tracking-wide">Total SKS Pilihan (P)</h3>
                                <p class="mt-2 text-4xl font-extrabold text-orange-600">{{ $grandTotalSksPilihan }}</p>
                            </div>
    
                            <!-- Total Keseluruhan -->
                            <div class="bg-teal-50 p-6 rounded-lg shadow-sm border border-teal-100 flex flex-col items-center justify-center">
                                <h3 class="text-sm font-semibold text-teal-800 uppercase tracking-wide">Total SKS Keseluruhan</h3>
                                <p class="mt-2 text-4xl font-extrabold text-teal-700">{{ $grandTotalSksWajib + $grandTotalSksPilihan }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>