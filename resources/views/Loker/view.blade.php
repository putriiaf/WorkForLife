@extends('layout.layout')

@section('content')

@foreach($lokers as $loker)
<section class="mx-10">
    <div class="flex flex-row font-montserrat">
        <div class="mt-3">
            <img src="{{ asset('img/gojek.png') }}" alt="">
        </div>
        <div class="px-3 pt-6">
            <h1 class="text-lg font-extrabold mb-3">{{$loker->nama_perusahaan}}</h1>
            <h1 class="text-lg font-extrabold">{{ $loker->posisi }}</h1>
            <h2 class="pt-1">{{ $loker->domisili }}</h2>
            <h2 class="pt-1">{{ $loker->min_pengalaman }}</h2>
        </div>
        <div class="ml-[800px]">   
            <h2 class="pt-1 font-bold text-md">{{ $loker->insentif }}</h2>
            <a href="{{ $loker->link_pendaftaran }} "class="bg-dongker px-8 py-2 mt-8 text-white block rounded-xl font-semibold uppercase tracking-wide hover:bg-dongker/70 hover:text-white/50">Apply</a>
            @if(session()->get('token') != NULL)
            @if(session()->get('role') == 1 && (session()->get('company_id') == $loker->company_id))
            <div class="pt-3">
                <a href="/loker/{{ $loker->id }}/edit" class="bg-white px-8 py-2 mt-8 text-dongker border-2 border-[#123C69] rounded-xl font-semibold uppercase hover:bg-slate-500">Edit</a>
            </div>
            <form action="/loker/{{ $loker->id }}" method="post">
            @method('delete')
            @csrf
            <button class="bg-white px-8 py-2 mt-3 text-red-700 border-2 border-[#E84A5F] block rounded-xl font-semibold uppercase tracking-wide hover:bg-slate-500 hover:text-red-400" onclick="return confirm('Apakah Anda yakin ingin menghapus lowongan kerja ini?')">Hapus</button>
        </form>
        @endif
        @endif
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

@endforeach
@endsection