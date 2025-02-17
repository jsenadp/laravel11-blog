@php
    $judul = "Ini adalah judul dari class component";
@endphp

<x-halaman-layout :title="$judul">

<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, repudiandae officiis praesentium voluptas nam aliquid ut quibusdam ipsum rerum nulla consequuntur ex consequatur sapiente. Delectus odio ad fugiat rerum ratione.</p>

<x-slot name="tanggal">17 Agustus 2045</x-slot>
<x-slot name="penulis">JDP</x-slot>

</x-halaman-layout>