<x-layout>
    {{-- proses pengiriman dan pembacaan variabel dari route ke layout melalui route dan view --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="flex flex-col items-center justify-center">
        <h1 class="text-3xl font-semibold">Daily Arcticle</h1>
        <div>
            <div class="flex items-center justify-between gap-10 m-6">
                <article class="border border-slate-800 rounded-md w-[450px] h-[600px] shadow-xl overflow-hidden">
                    <div class="flex justify-between p-5">
                        <h2>Sehat Dengan Olahraga</h2>
                        <p>20/12/2024</p>
                    </div>
                    <div class="w-full h-full bg-slate-300">
                        <p class="p-16 font-serif text-lg tracking-tight text-justify">Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem
                            temporibus molestiae, tempore nulla dicta quisquam itaque e arum quibusdam numquam minima,
                            qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero
                            accusantium fugiat perspiciatis earum totam quas magni commodi!</p>
                    </div>
                </article>
                <article class="border border-slate-800 rounded-md w-[450px] h-[600px] shadow-xl overflow-hidden">
                    <div class="flex justify-between p-5">
                        <h2>Sehat Dengan Olahraga</h2>
                        <p>20/12/2024</p>
                    </div>
                    <div class="w-full h-full bg-slate-300">
                        <p class="p-16 font-serif text-lg tracking-tight text-justify">Lorem ipsum dolor sit amet
                            consectetur
                            adipisicing elit. Totam expedita tenetur ea hic, doloribus velit optio non exercitationem
                            temporibus molestiae, tempore nulla dicta quisquam itaque earum quibusdam numquam minima,
                            qui quia dolore id enim cumque nemo maiores? Numquam recusandae molestias, deserunt libero
                            accusantium fugiat perspiciatis earum totam quas magni commodi!</p>
                    </div>
                </article>

            </div>
        </div>
    </section>
</x-layout>