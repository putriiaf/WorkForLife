@extends('layout.layout')

@section('content')

<section class="mx-10">
    <div class="flex flex-row font-montserrat">
        <div>
            <img src="{{ asset('img/gojek.png') }}" alt="">
        </div>
        <div class="px-3 pt-6">
            <h1 class="text-2xl font-extrabold">Product Designer</h1>
            <h2 class="pt-1">Jakarta, Indonesia</h2>
        </div>
        <div class="ml-[800px]">   
            <a class="bg-dongker px-8 py-2 mt-8 text-white block rounded-xl font-semibold uppercase tracking-wide hover:bg-dongker/70 hover:text-white/50">Apply</a>
        </div>
    </div>
</section>

<section class="mx-10 my-8 pl-8 font-montserrat">
    <h1 class="font-bold font-lg pb-6">Deskripsi</h1>
    <p>Lorem Ipsum</p>
</section>


@endsection