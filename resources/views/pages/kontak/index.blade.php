<x-app-layout>
    <div class="bg-white py-12">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900">Hubungi Kami</h1>
            <p class="mt-2 text-lg text-gray-600">Kami siap mendengar dari Anda.</p>
        </div>
    </div>

    <div class="py-16 bg-gray-50">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                {{-- Kolom Kiri: Informasi Kontak --}}
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Informasi Kontak</h2>
                    <div class="space-y-4 text-gray-700 text-lg">
                        <p>
                            <strong class="text-gray-900">Alamat:</strong><br>
                            Jl. Pendidikan No. 123, Medan, Sumatera Utara
                        </p>
                        <p>
                            <strong class="text-gray-900">Email:</strong><br>
                            <a href="mailto:info@siskom.ac.id" class="text-purple-700 hover:underline">info@siskom.ac.id</a>
                        </p>
                        <p>
                            <strong class="text-gray-900">Telepon:</strong><br>
                            (061) 123-4567
                        </p>
                         <p>
                            <strong class="text-gray-900">WhatsApp:</strong><br>
                            <a href="https://wa.me/6281234567890" target="_blank" class="text-purple-700 hover:underline">0812-3456-7890</a>
                        </p>
                    </div>
                </div>

                {{-- Kolom Kanan: Peta --}}
                <div>
                     <h2 class="text-2xl font-bold text-gray-800 mb-4">Lokasi Kami</h2>
                    <div class="mt-4">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0163353457187!2d98.6568019749731!3d3.583493996388487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131c158564a4d%3A0x63426786657682b1!2sUniversitas%20Sumatera%20Utara!5e0!3m2!1sen!2sid!4v1721577978252!5m2!1sen!2sid"
                            width="100%" 
                            height="350" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-lg shadow-md">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>