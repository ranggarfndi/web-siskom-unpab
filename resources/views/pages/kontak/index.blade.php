<x-app-layout>
    {{-- Header Section (Disamakan dengan halaman Dosen/Struktur) --}}
    <div class="bg-white py-12 border-b border-gray-100">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-2">Hubungi Kami</h1>
            <p class="text-lg text-gray-600">Kami siap mendengar dan membantu kebutuhan Anda.</p>
        </div>
    </div>

    {{-- Content Section --}}
    <div class="py-16 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 items-start">
                
                {{-- Kolom Kiri: Informasi Kontak (Dalam Card Rapi) --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-100">
                        Informasi Kontak
                    </h2>
                    
                    <div class="space-y-6">
                        {{-- Alamat --}}
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center text-purple-600 mt-1">
                                <i class="fa-solid fa-location-dot text-lg"></i>
                            </div>
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Alamat</p>
                                <p class="text-gray-600 mt-1 leading-relaxed">Jl. Gatot Subroto No.km, Simpang Tj., Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20122</p>
                            </div>
                        </div>

                        {{-- Email --}}
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center text-pink-600 mt-1">
                                <i class="fa-solid fa-envelope text-lg"></i>
                            </div>
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Email</p>
                                <a href="mailto:info@siskom.ac.id" class="text-purple-700 hover:text-purple-900 transition mt-1 block">info@siskom.ac.id</a>
                            </div>
                        </div>

                        {{-- Telepon --}}
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center text-blue-600 mt-1">
                                <i class="fa-solid fa-phone text-lg"></i>
                            </div>
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">Telepon</p>
                                <p class="text-gray-600 mt-1">(061) 123-4567</p>
                            </div>
                        </div>

                        {{-- WhatsApp --}}
                        <div class="flex items-start">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center text-green-600 mt-1">
                                <i class="fa-brands fa-whatsapp text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <p class="font-bold text-gray-900">WhatsApp</p>
                                <a href="https://wa.me/6281234567890" target="_blank" class="text-purple-700 hover:text-purple-900 transition mt-1 block font-medium">
                                    0812-3456-7890
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Kolom Kanan: Peta (Dipercantik Frame-nya) --}}
                <div class="bg-white p-2 rounded-2xl shadow-lg h-full min-h-[400px]">
                    <h2 class="text-lg font-bold text-gray-800 mb-3 px-2 flex items-center">
                        <i class="fa-solid fa-map-location-dot mr-2 text-purple-600"></i> Lokasi Kami
                    </h2>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.4972265211373!2d98.64475926951617!3d3.590019038247472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e3aa81119d9%3A0xb77bf04f1d46a342!2sUniversitas%20Pembangunan%20Panca%20Budi!5e0!3m2!1sen!2sid!4v1768405985237!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>