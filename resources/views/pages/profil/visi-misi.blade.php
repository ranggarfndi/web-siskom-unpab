<x-app-layout>
    <!-- Background dengan pola halus -->
    <div class="min-h-screen bg-purple-50 py-16 flex items-center justify-center">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">Visi & Misi</h1>
                <p class="text-lg text-gray-600">Arah masa depan Program Studi Sistem Komputer</p>
            </div>

            <div class="flex flex-col md:flex-row items-center md:items-start gap-8 md:gap-12">
                
                <!-- KOLOM 1: FOTO KAPRODI -->
                <div class="w-full md:w-1/3 flex flex-col items-center">
                    <!-- Frame Foto Lingkaran/Lonjong -->
                    <div class="relative w-64 h-64 md:w-72 md:h-72 rounded-full border-4 border-white shadow-2xl overflow-hidden bg-gray-200">
                        <!-- GANTI SRC INI DENGAN FOTO KAPRODI ASLI -->
                        {{-- <!-- Contoh: src="{{ asset('images/kaprodi.jpg') }}" --> --}}
                        <img src="{{ asset ('images/kaprodi.png') }}" 
                             alt="Kaprodi Sistem Komputer" 
                             class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Label Nama -->
                    <div class="mt-6 text-center">
                        <div class="bg-white py-2 px-6 rounded-full shadow-md border border-purple-100 inline-block">
                            <h3 class="text-md font-bold text-gray-900">Zulfahmi Syahputra, S.Kom., M.Kom.</h3>
                            <p class="text-sm text-purple-600 font-semibold">KA. Prodi Sistem Komputer</p>
                        </div>
                    </div>
                </div>

                <!-- KOLOM 2: GELEMBUNG BICARA (VISI MISI) -->
                <div class="w-full md:w-2/3 relative">
                    <!-- Segitiga Gelembung (Tail) - Desktop (Kiri) -->
                    <div class="hidden md:block absolute top-20 -left-4 w-8 h-8 bg-white border-l border-b border-gray-200 transform rotate-45 z-10"></div>
                    
                    <!-- Segitiga Gelembung (Tail) - Mobile (Atas) -->
                    <div class="md:hidden absolute -top-3 left-1/2 -translate-x-1/2 w-8 h-8 bg-white border-t border-l border-gray-200 transform rotate-45 z-10"></div>

                    <!-- Kotak Konten -->
                    <div class="bg-white rounded-3xl p-8 md:p-10 shadow-xl border border-gray-200 relative z-0">
                        
                        <!-- VISI -->
                        <div class="mb-8">
                            <span class="inline-block bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full mb-3 tracking-wider uppercase">Visi Kami</span>
                            <p class="text-xl md:text-2xl font-medium text-gray-800 leading-relaxed italic">
                                "Menghasilkan lulusan yang mampu mengimpelementasikan Ilmu Pengetahuan dan Teknologi (IPTEK) pada bidang ilmu Sistem Komputer serta Bermanfaat Bagi Kemaslahatan Umat."
                            </p>
                        </div>

                        <hr class="border-gray-100 my-6">

                        <!-- MISI -->
                        <div>
                            <span class="inline-block bg-gray-800 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 tracking-wider uppercase">Misi Kami</span>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mt-1 mr-4 text-purple-600 font-bold text-sm">1</div>
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        Melaksanakan Tridharma Perguruan Tinggi Pendidikan, Penelitian dan Pengabdian sesuai bidang keilmuan Sistem Komputer di tingkat nasional dan internasional.
                                    </p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mt-1 mr-4 text-purple-600 font-bold text-sm">2</div>
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        Melakukan pengembangan Sumber Daya Manusia Dosen dan Tenaga Kependidikan dalam mendukung pencapaian Profil Lulusan.
                                    </p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mt-1 mr-4 text-purple-600 font-bold text-sm">3</div>
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        Peningkatan kualitas dan kuantitas sarana prasarana Pendidikan, Penelitian dan Pengabdian dalam mendukung pencapaian Profil Lulusan.
                                    </p>
                                </li>
                                <li class="flex items-start">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full bg-purple-100 flex items-center justify-center mt-1 mr-4 text-purple-600 font-bold text-sm">4</div>
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        Memperluas jejaring Kerjasama melalui peningkatan kualitas dan kuantitas kerjasama tingkat nasional dan internasional.
                                    </p>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>