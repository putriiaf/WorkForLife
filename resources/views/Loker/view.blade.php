@extends('layout.layout')

@section('content')

@foreach($lokers as $loker)
<section class="mx-10 max-w-full">
    <div class="flex flex-row font-montserrat">
        <div class="flex px-3 pt-6 flex-auto">
            <div class="mr-10">
                <img src="{{ asset('img/gojek.png') }}" class="w-20 h-20 rounded-full">
            </div>
            <div>
                <h1 class="text-3xl font-extrabold mb-3">{{$loker->nama_perusahaan}}</h1>
                <h1 class="text-2xl font-extrabold">{{ $loker->posisi }}</h1>
                <h2 class="pt-1 font-bold text-lg">{{ $loker->domisili }}</h2>
                <h2 class="pt-1 font-bold text-lg">Minimal Pengalaman : {{ $loker->min_pengalaman }}</h2>
                <h2 class="pt-1 font-bold text-lg">{{ $loker->insentif }}</h2>
            </div>
        </div>
        <div class="mt-8 mr-5">   
            <div class="mt-2 mb-2">
                <a href="{{ $loker->link_pendaftaran }} "class="bg-dongker px-8 py-3 mt-8 text-white rounded-xl font-semibold uppercase tracking-wide hover:bg-dongker/70">Apply</a>
            </div>
            @if(session()->get('token') != NULL)
            @if(session()->get('role') == 1 && (session()->get('company_id') == $loker->company_id))
            <div class="pt-3">
                <a href="/loker/{{ $loker->id }}/edit" class="bg-white px-8 py-2 mt-8 text-dongker border-2 border-[#123C69] rounded-xl font-semibold uppercase hover:bg-dongker hover:text-white">Edit</a>
            </div>
            <form action="/loker/{{ $loker->id }}" method="post">
            @method('delete')
            @csrf
            <button class="bg-white px-6 py-2 mt-3 text-red-700 border-2 border-red-700 block rounded-xl font-semibold uppercase tracking-wide hover:bg-[#DA0202] hover:text-white" onclick="return confirm('Apakah Anda yakin ingin menghapus lowongan kerja ini?')">Hapus</button>
        </form>
        @endif
        @endif
        </div>

    </div>
</section>

<section class="mx-10 my-8 pl-8 font-montserrat">
    <h1 class="font-bold font-xl pb-6">Deskripsi</h1>
    <h2 class="font-bold pt-1">Kriteria</h2>
    <p>{{ $loker->kriteria }}</p>
    <h2 class="font-bold pt-1">Job Description</h2>
    <p>{{ $loker->jobdesc }}</p>
</section>

@endforeach
@endsection