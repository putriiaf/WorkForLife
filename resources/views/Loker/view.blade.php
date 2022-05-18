@extends('layout.layout')

@section('content')

<section class="mx-10">
    <div class="flex flex-row font-montserrat">
        <div>
            <img src="{{ asset('img/gojek.png') }}" alt="">
        </div>
        <div class="px-3 pt-6">
            <h1 class="text-2xl font-extrabold mb-3">{{ $loker->nama_perusahaan }}</h1>
            <h1 class="text-2xl font-extrabold">{{ $loker->posisi }}</h1>
            <h2 class="pt-1">{{ $loker->domisili }}</h2>
            <h2 class="pt-1">{{ $loker->min_pengalaman }}</h2>
        </div>
        <div class="ml-[800px]">   
            <h2 class="pt-1 font-extrabold text-md">{{ $loker->insentif }}</h2>
            <a href="{{ $loker->link_pendaftaran }} "class="bg-dongker px-8 py-2 mt-8 text-white block rounded-xl font-semibold uppercase tracking-wide hover:bg-dongker/70 hover:text-white/50">Apply</a>
        </div>
    </div>
</section>

<section class="mx-10 my-8 pl-8 font-montserrat">
    <h1 class="font-bold font-lg pb-6">Deskripsi</h1>
    <h2 class="font-bold pt-1">Kriteria</h2>
    <p>{{ $loker->kriteria }}</p>
    <h2 class="font-bold pt-1">Job Description</h2>
    <p>{{ $loker->jobdesc }}</p>
</section>


@endsection