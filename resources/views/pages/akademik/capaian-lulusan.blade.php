<x-app-layout>
    <!-- Header -->
    <div class="bg-gray-50 border-b border-gray-200">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">Capaian Profil Lulusan</h1>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Kompetensi dan kualifikasi yang dimiliki oleh lulusan Sistem Komputer untuk bersaing di dunia profesional.
            </p>
        </div>
    </div>

    <!-- Content -->
    <div class="py-16 bg-white">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <!-- BAGIAN 1: 3 LINGKARAN PROFIL (DENGAN GAMBAR STATIS) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-20">
                
                <!-- Profil 1: Pendidik IT -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-40 h-40 rounded-full bg-purple-100 flex items-center justify-center mb-6 shadow-lg border-4 border-purple-200 group-hover:scale-105 transition-transform duration-300 overflow-hidden">
                        <!-- Gambar Pendidik -->
                        <img src="{{ asset('images/pendidik.png') }}" 
                             alt="Pendidik IT" 
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Pendidik IT</h3>
                    <p class="text-sm text-gray-500 mt-2">Tenaga Pengajar Akademik & Praktisi</p>
                </div>

                <!-- Profil 2: PPLM -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-40 h-40 rounded-full bg-blue-100 flex items-center justify-center mb-6 shadow-lg border-4 border-blue-200 group-hover:scale-105 transition-transform duration-300 overflow-hidden">
                        <!-- Gambar Mobile Developer -->
                        <img src="{{ asset('images/pplm.png') }}" 
                             alt="Pengembang Perangkat Lunak Berbasis Mobile" 
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Pengembang Perangkat Lunak Berbasis Mobile</h3>
                    <p class="text-sm text-gray-500 mt-2">(PPLM)</p>
                </div>

                <!-- Profil 3: PIOT -->
                <div class="flex flex-col items-center text-center group">
                    <div class="w-40 h-40 rounded-full bg-teal-100 flex items-center justify-center mb-6 shadow-lg border-4 border-teal-200 group-hover:scale-105 transition-transform duration-300 overflow-hidden">
                        <!-- Gambar IoT Developer -->
                        <img src="{{ asset('images/piot.png') }}" 
                             alt="Pengembang Sistem Kendali Berbasis IoT" 
                             class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-xl font-bold text-gray-900">Pengembang Sistem Kendali Berbasis IoT</h3>
                    <p class="text-sm text-gray-500 mt-2">(PIOT)</p>
                </div>

            </div>

            <!-- BAGIAN 2: TABEL CAPAIAN -->
            @php
                $tables = [
                    'Sikap' => [
                        'color' => 'purple',
                        'items' => [
                            'Bertaqwa Kepada Tuhan Yang Maha Esa dan menjunjung tinggi nilai kemanusian dalam menjalankan tugas berdasarkan agama, moral, dan etika; serta menunjukkan sikap religius.'
                        ]
                    ],
                    'Pengetahuan' => [
                        'color' => 'blue',
                        'items' => [
                            'Menguasai konsep teoritis sistem komputer secara umum serta konsep teoritis bidang khusus pengembangan perangkat lunak, sistem kendali, dan Internet of Things (IoT), termasuk prinsip dasar pemrograman, basis data, sensor, mikrokontroler, dan kecerdasan buatan, serta mampu memformulasikan penyelesaian masalah prosedural berbasis sistem komputer.'
                        ]
                    ],
                    'Keterampilan Umum' => [
                        'color' => 'green',
                        'items' => [
                            'Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam pengembangan atau implementasi ilmu pengetahuan dan teknologi di bidang sistem komputer dengan memperhatikan nilai humaniora, serta mampu bekerja mandiri maupun dalam tim secara bertanggung jawab.',
                            'Mampu mengambil keputusan secara tepat berdasarkan analisis data dan informasi, menyusun deskripsi saintifik dalam bentuk skripsi atau laporan tugas akhir, mendokumentasikan dan mengelola data secara akuntabel, serta mengunggah karya ilmiah pada media resmi perguruan tinggi.'
                        ]
                    ],
                    'Keterampilan Khusus' => [
                        'color' => 'red',
                        'items' => [
                            'Mampu melakukan analisis, perancangan, pemrograman, pengujian, dan perbaikan dalam pengembangan perangkat lunak untuk membangun sistem aplikasi berbasis komputer sebagai solusi permasalahan dengan memanfaatkan framework dan teknologi terkini.',
                            'Mampu merancang dan mengembangkan sistem berbasis perangkat keras yang meliputi sensor, mikrokontroler, dan sistem kendali, termasuk integrasi perangkat keras dan perangkat lunak pada proyek IoT.',
                            'Mampu mengelola dan menganalisis data sistem dan IoT menggunakan basis data serta mengintegrasikan pendekatan kecerdasan buatan dalam pengembangan perangkat lunak maupun sistem cerdas berbasis IoT.'
                        ]
                    ]
                ];
            @endphp

            <div class="space-y-12">
                @foreach($tables as $title => $data)
                    <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
                        <div class="bg-{{ $data['color'] }}-600 px-6 py-4">
                            <h2 class="text-xl font-bold text-white uppercase tracking-wider">{{ $title }}</h2>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider w-16">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-500 uppercase tracking-wider">Capaian Profil Lulusan</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($data['items'] as $index => $item)
                                    <tr class="hover:bg-gray-50 transition-colors">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 font-medium align-top">
                                            {{ $index + 1 }}
                                        </td>
                                        <td class="px-6 py-4 text-gray-700 text-base leading-relaxed align-top text-justify">
                                            {{ $item }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>