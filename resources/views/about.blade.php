<x-layout>
    {{-- proses pengiriman dan pembacaan variabel dari route ke layout melalui route dan view --}}
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl">Welcome To MyABout</h3>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <h1>Halaman About</h1>
    <h1>Owner : {{ $name }}</h1>
    <img src="img/strange.jpg" alt="strange" width="200">
</x-layout>