<x-app-layout>
    <div class="py-16 bg-white">
        <div class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <article>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">{{ $artikel->judul }}</h1>
                <p class="text-lg text-gray-500 mt-4">
                    Dipublikasikan pada {{ $artikel->published_at->format('d F Y') }} oleh <span class="font-semibold">{{ $artikel->user->name }}</span>
                </p>

                <img class="w-full rounded-xl my-8" src="{{ asset('storage/' . $artikel->thumbnail) }}" alt="Thumbnail {{ $artikel->judul }}">

                <div class="prose prose-lg max-w-none">
                    {!! $artikel->konten !!}
                </div>
            </article>
        </div>
    </div>
</x-app-layout>