<x-app-layout>
    <!-- Container Utama -->
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb / Tombol Kembali -->
            <div class="mb-8">
                <a href="{{ route('artikel.index') }}" class="inline-flex items-center text-purple-700 hover:text-purple-900 font-medium transition group">
                    <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali ke Daftar Berita
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                
                <!-- KOLOM KIRI: KONTEN UTAMA (Artikel) -->
                <div class="lg:col-span-2">
                    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 border border-gray-100">
                        <!-- Header Artikel -->
                        <header class="mb-8">
                            <div class="flex items-center text-sm text-gray-500 mb-4 space-x-4">
                                <span class="flex items-center bg-purple-100 text-purple-700 px-3 py-1 rounded-full font-semibold text-xs">
                                    {{ $artikel->published_at->format('d F Y') }}
                                </span>
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    {{ $artikel->user->name }}
                                </span>
                            </div>

                            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight mb-6">
                                {{ $artikel->judul }}
                            </h1>
                            
                            <!-- Featured Image -->
                            <div class="relative w-full h-64 md:h-[400px] rounded-xl overflow-hidden shadow-md">
                                <img class="w-full h-full object-cover" src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="{{ $artikel->judul }}">
                            </div>
                        </header>

                        <!-- Isi Artikel -->
                        <article class="prose prose-lg prose-purple max-w-none text-gray-700 leading-relaxed">
                            {!! $artikel->konten !!}
                        </article>

                        <!-- Footer Artikel (Share) -->
                        <div class="mt-10 pt-6 border-t border-gray-100 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <span class="text-gray-500 font-medium">Bagikan berita ini:</span>
                            <div class="flex space-x-3">
                                <button class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center hover:bg-blue-600 hover:text-white transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.791-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></button>
                                <button class="w-10 h-10 rounded-full bg-blue-50 text-blue-400 flex items-center justify-center hover:bg-blue-400 hover:text-white transition"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg></button>
                                <button class="w-10 h-10 rounded-full bg-green-100 text-green-500 flex items-center justify-center hover:bg-green-500 hover:text-white transition" onclick="copyLink()"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KOLOM KANAN: SIDEBAR (Berita Terbaru) -->
                <div class="lg:col-span-1">
                    <div class="sticky top-24">
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-6 border-b-2 border-purple-200 pb-2">
                                Berita Terbaru
                            </h3>
                            
                            @if($relatedArticles->isNotEmpty())
                                <div class="flex flex-col space-y-6">
                                    @foreach($relatedArticles as $item)
                                        <a href="{{ route('artikel.show', $item->slug) }}" class="group flex items-start space-x-4">
                                            <!-- Thumbnail Kecil -->
                                            <div class="flex-shrink-0 w-24 h-24 rounded-lg overflow-hidden relative shadow-sm">
                                                <img class="w-full h-full object-cover transform group-hover:scale-110 transition duration-300" src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->judul }}">
                                            </div>
                                            <!-- Teks -->
                                            <div class="flex-1">
                                                <h4 class="text-sm font-bold text-gray-800 group-hover:text-purple-700 transition leading-snug line-clamp-2">
                                                    {{ $item->judul }}
                                                </h4>
                                                <p class="text-xs text-gray-500 mt-2 flex items-center">
                                                    <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                                    {{ $item->published_at->format('d M Y') }}
                                                </p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                
                                <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                                    <a href="{{ route('artikel.index') }}" class="text-sm font-semibold text-purple-700 hover:text-purple-900 transition flex items-center justify-center group">
                                        Lihat Semua Berita
                                        <svg class="w-4 h-4 ml-1 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                    </a>
                                </div>
                            @else
                                <p class="text-gray-500 text-sm text-center py-4">Belum ada berita lainnya.</p>
                            @endif
                        </div>

                        <!-- Widget Tambahan: Pendaftaran -->
                        <div class="bg-gradient-to-br from-purple-700 to-purple-900 rounded-2xl shadow-md p-6 mt-8 text-white text-center relative overflow-hidden">
                            <!-- Background Pattern -->
                            <div class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 rounded-full bg-white opacity-10"></div>
                            <div class="absolute bottom-0 left-0 -ml-4 -mb-4 w-24 h-24 rounded-full bg-white opacity-10"></div>
                            
                            <h4 class="font-bold text-lg mb-2 relative z-10">Pendaftaran Mahasiswa Baru</h4>
                            <p class="text-purple-100 text-sm mb-6 relative z-10">Bergabunglah dengan kami dan jadilah ahli teknologi masa depan.</p>
                            <a href="#" class="inline-block bg-white text-purple-700 font-bold py-2 px-6 rounded-full text-sm hover:bg-gray-100 transition shadow-sm relative z-10">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function copyLink() {
            navigator.clipboard.writeText(window.location.href);
            alert("Tautan artikel berhasil disalin!");
        }
    </script>
</x-app-layout>