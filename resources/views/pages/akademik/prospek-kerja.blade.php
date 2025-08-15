    <x-app-layout>
        <!-- Page Header -->
        <div class="bg-gray-50">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">Prospek Karir Lulusan</h1>
                <p class="mt-3 text-lg text-gray-600 max-w-2xl mx-auto">Peluang karir luas menanti para lulusan program studi Sistem Komputer di era industri 4.0.</p>
            </div>
        </div>

        <!-- Content Section -->
        <div class="py-16 sm:py-24 bg-white">
            <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                @php
                    $prospects = [
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>',
                            'title' => 'IoT Engineer',
                            'description' => 'Merancang dan mengembangkan ekosistem perangkat terhubung (Internet of Things), mulai dari sensor hingga platform cloud.'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
                            'title' => 'Robotics Engineer',
                            'description' => 'Mendesain, membangun, dan memprogram robot cerdas untuk berbagai industri, seperti manufaktur, kesehatan, dan logistik.'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M12 19V5M8 12h8" /></svg>',
                            'title' => 'Embedded Systems Engineer',
                            'description' => 'Mengembangkan perangkat lunak yang tertanam langsung pada perangkat keras (mikrokontroler) untuk produk elektronik pintar.'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l4-4 4 4m0 6l-4 4-4-4" /></svg>',
                            'title' => 'Network Architect',
                            'description' => 'Merancang dan mengelola infrastruktur jaringan komputer yang kompleks, aman, dan efisien untuk perusahaan skala besar.'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>',
                            'title' => 'Cyber Security Analyst',
                            'description' => 'Melindungi sistem dan jaringan komputer dari ancaman siber dengan melakukan analisis keamanan, deteksi intrusi, dan respons insiden.'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>',
                            'title' => 'AI/Machine Learning Engineer',
                            'description' => 'Membangun dan menerapkan model kecerdasan buatan dan pembelajaran mesin untuk analisis data, prediksi, dan otomasi cerdas.'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" /></svg>',
                            'title' => 'Cloud Engineer',
                            'description' => 'Mengelola dan mengoptimalkan infrastruktur berbasis cloud (seperti AWS, Azure, Google Cloud) untuk skalabilitas dan keandalan aplikasi.'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>',
                            'title' => 'Data Analyst',
                            'description' => 'Menganalisis data dalam jumlah besar untuk menemukan tren, wawasan bisnis, dan membantu pengambilan keputusan strategis.'
                        ],
                        [
                            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>',
                            'title' => 'System Integrator',
                            'description' => 'Menggabungkan berbagai komponen sistem perangkat keras dan perangkat lunak yang berbeda agar dapat berfungsi sebagai satu kesatuan.'
                        ],
                    ];
                @endphp
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($prospects as $prospect)
                        <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:-translate-y-1 transition-all duration-300">
                            <div class="text-purple-600 mb-5">
                                {!! $prospect['icon'] !!}
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $prospect['title'] }}</h3>
                            <p class="text-gray-600">
                                {{ $prospect['description'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-app-layout>
    