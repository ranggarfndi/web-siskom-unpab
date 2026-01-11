<x-app-layout>
    <!-- Header -->
    <div class="bg-gray-50 border-b border-gray-200">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 text-center">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">Cara Pembayaran</h1>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Panduan lengkap pembayaran biaya kuliah melalui mitra perbankan resmi Universitas Pembangunan Panca Budi.
            </p>
        </div>
    </div>

    <!-- Content -->
    <div class="py-16 bg-white">
        <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                
                <!-- BANK BRI -->
                <div class="bg-white rounded-2xl shadow-lg border border-blue-100 overflow-hidden flex flex-col h-full">
                    <div class="bg-blue-600 p-6 text-white flex items-center justify-between">
                        <div class="flex items-center">
                            <div class="bg-white p-2 rounded-lg mr-4">
                                <!-- Logo BRI Placeholder Text -->
                                <span class="text-blue-700 font-bold text-xl">BRI</span>
                            </div>
                            <h2 class="text-xl font-bold">Bank Rakyat Indonesia</h2>
                        </div>
                    </div>
                    
                    <div class="p-0 flex-grow divide-y divide-gray-100">
                        
                        <!-- ATM BRI -->
                        <div class="p-8">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 text-blue-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H7a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                                Via ATM Bank BRI
                            </h3>
                            <ol class="list-decimal list-outside ml-5 space-y-2 text-gray-600 text-sm leading-relaxed">
                                <li>Masukan Kartu ATM</li>
                                <li>Masukan PIN ATM</li>
                                <li>Pilih Menu <span class="font-semibold text-gray-800">Pembayaran</span></li>
                                <li>Pilih Menu <span class="font-semibold text-gray-800">Pendidikan</span></li>
                                <li>Pilih Daftar Universitas</li>
                                <li>Pilih <span class="font-semibold text-blue-600">Universitas Panca Budi</span></li>
                                <li>Masukan Nomor Registrasi. Mis: <strong>201234</strong></li>
                                <li>Lihat jumlah pembayaran. Mis. <strong>500.000</strong></li>
                                <li>Pilih Lanjut Bayar</li>
                                <li>Ambil Struk sebagai bukti pembayaran</li>
                                <li>Selesai</li>
                            </ol>
                        </div>

                        <!-- Internet Banking BRI -->
                        <div class="p-8 bg-blue-50/30">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <!-- Ikon Diperbarui ke Laptop/Komputer -->
                                <svg class="w-6 h-6 text-blue-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                Via Internet Banking BRI
                            </h3>
                            <ol class="list-decimal list-outside ml-5 space-y-2 text-gray-600 text-sm leading-relaxed">
                                <li>Buka Website <a href="https://ib.bri.co.id" target="_blank" class="text-blue-600 hover:underline">https://ib.bri.co.id</a></li>
                                <li>Login, masukan Username dan Password Anda</li>
                                <li>Pilih Menu <span class="font-semibold text-gray-800">Pembayaran</span></li>
                                <li>Pilih Menu <span class="font-semibold text-gray-800">Pendidikan</span></li>
                                <li>Pilih Daftar Universitas</li>
                                <li>Pilih <span class="font-semibold text-blue-600">Universitas Panca Budi</span></li>
                                <li>Masukan Nomor Registrasi. Mis: <strong>201234</strong></li>
                                <li>Lihat jumlah pembayaran. Mis. <strong>500.000</strong></li>
                                <li>Pilih Lanjut Bayar</li>
                                <li>Capture/Simpan/Print Struk</li>
                                <li>Selesai</li>
                            </ol>
                        </div>

                    </div>
                </div>

                <!-- BANK SYARIAH MANDIRI (BSM) -->
                <div class="bg-white rounded-2xl shadow-lg border border-teal-100 overflow-hidden flex flex-col h-full">
                    <div class="bg-teal-600 p-6 text-white flex items-center justify-between">
                            <div class="flex items-center">
                            <div class="bg-white p-2 rounded-lg mr-4">
                                <!-- Logo BSM Placeholder Text -->
                                <span class="text-teal-700 font-bold text-xl">BSM</span>
                            </div>
                            <h2 class="text-xl font-bold">Bank Syariah Mandiri</h2>
                        </div>
                    </div>

                    <div class="p-0 flex-grow divide-y divide-gray-100">
                        
                        <!-- Internet Banking BSM -->
                        <div class="p-8">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <!-- Ikon Diperbarui juga agar konsisten -->
                                <svg class="w-6 h-6 text-teal-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                Via Internet Banking BSM
                            </h3>
                            <ol class="list-decimal list-outside ml-5 space-y-2 text-gray-600 text-sm leading-relaxed">
                                <li>Buka Website <a href="https://bsm.co.id" target="_blank" class="text-teal-600 hover:underline">https://bsm.co.id</a></li>
                                <li>Login, masukan username dan password</li>
                                <li>Pilih Menu <span class="font-semibold text-gray-800">Pembayaran</span></li>
                                <li>Pilih Menu <span class="font-semibold text-gray-800">Pendidikan</span></li>
                                <li>Pilih Daftar Universitas</li>
                                <li>Pilih <span class="font-semibold text-teal-600">Universitas Panca Budi</span></li>
                                <li>Masukan Nomor Registrasi. Mis: <strong>201234</strong></li>
                                <li>Lihat jumlah pembayaran. Mis. <strong>500.000</strong></li>
                                <li>Pilih Lanjut Bayar</li>
                                <li>Print/Simpan Struk</li>
                                <li>Selesai</li>
                            </ol>
                        </div>

                        <!-- Mobile App BSM -->
                        <div class="p-8 bg-teal-50/30">
                            <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center">
                                <svg class="w-6 h-6 text-teal-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                Via Mandiri Syariah Mobile
                            </h3>
                            <ol class="list-decimal list-outside ml-5 space-y-2 text-gray-600 text-sm leading-relaxed">
                                <li>Buka Mandiri Syariah Mobile</li>
                                <li>Login, masukan username dan password</li>
                                <li>Pilih Menu <span class="font-semibold text-gray-800">Pembayaran</span></li>
                                <li>Pilih Menu <span class="font-semibold text-gray-800">Institusi/Akademik/Wakaf</span></li>
                                <li>Cari <span class="font-semibold text-teal-600">UNIV. PANCA BUDI (FAKULTAS)</span></li>
                                <li>Masukan Nomor Registrasi. Mis: <strong>201234</strong></li>
                                <li>Masukan PIN Anda</li>
                                <li>Lihat jumlah pembayaran sebesar. Mis. <strong>500.000</strong></li>
                                <li>Pilih Lanjut Bayar</li>
                                <li>Capture/Simpan Struk</li>
                                <li>Selesai</li>
                            </ol>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Info Tambahan -->
            <div class="mt-12 bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-lg">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-bold text-yellow-800">Penting</h3>
                        <div class="mt-2 text-sm text-yellow-700">
                            <p>Simpan bukti pembayaran (Struk ATM/Screenshot Mobile Banking) sebagai syarat daftar ulang. Jika mengalami kendala pembayaran, silakan hubungi bagian keuangan di Biro Rektorat.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>