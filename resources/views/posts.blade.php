<x-layout>
    {{-- proses pengiriman dan pembacaan variabel dari route ke layout melalui route dan view --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="flex flex-col items-center justify-center">
        <h1 class="text-3xl font-semibold">Daily Arcticle</h1>
        <div>
            <div class="grid grid-cols-3 gap-2 m-1">
                @foreach ($posts as $post)
                    <article class="border border-slate-800 rounded-md w-[400px] h-[300px] shadow-xl overflow-hidden">
                        <div class="flex justify-between p-2 text-sm">
                            <a href="/authors/{{ $post->author->id }}" class="hover:underline text-blue-400">
                                <h2> {{ $post->author->name }}</h2>
                            </a>
                            <h4>{{$post['title']}}</h4>
                            <p>{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                        <div class="w-full h-full bg-slate-300">
                            {{-- +++ * TIPS * +++
                            Str::limit(_, _) adalah utility pembantu untuk memberikan limitasi dari sebuah kata /
                            string
                            --}}
                            <p class="p-16 font-serif text-lg tracking-tight text-justify">
                                {{ Str::limit($post['body'], limit: 100) }}
                            </p>
                            <a href="/posts/{{ $post['slug'] }}" class="p-10 font-medium text-blue-500 hover:underline">Read
                                More &raquo;</a>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>
    </section>
</x-layout>