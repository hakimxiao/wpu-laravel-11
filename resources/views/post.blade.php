<x-layout>
    {{-- proses pengiriman dan pembacaan variabel dari route ke layout melalui route dan view --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="flex flex-col items-center justify-center">
        <h1 class="text-3xl font-semibold">Daily Arcticle</h1>
        <div>
            <div class="flex items-center justify-between gap-10 w-full">
                <article class="border border-slate-800 rounded-md w-[450px] h-[500px] shadow-xl overflow-hidden">
                    <div class="flex justify-between p-5">
                        <a href="/authors/{{ $post->author->id }}" class="hover:underline text-blue-400">
                            <h2> {{ $post->author->name }}</h2>
                        </a>
                        <h4>{{$post['title']}}</h4>
                        <p>{{ $post->created_at->format('j F Y') }}</p>
                    </div>
                    <div class="w-full h-full bg-slate-300">
                        <p class="p-16 font-serif text-lg tracking-tight text-justify">
                            {{ $post['body'] }}
                        </p>
                        <div class="flex justify-between items-center mx-4">
                            <a href="/posts" class="p-10 font-medium text-blue-500 hover:underline"> Back
                                To Posts &laquo;</a>
                            <a href="/categories/{{ $post->category->slug }}"
                                class="hover:underline text-base text-gray-50">
                                Category: {{ $post->category->name }}
                            </a>

                        </div>
                    </div>
            </div>
        </div>
    </section>
</x-layout>