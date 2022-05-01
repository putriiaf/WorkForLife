@extends('layout.layout')

@section('content')
    <div class="font-montserrat text-black">
        @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div class="font-montserrat text-black ">
        <h4 class="text-3xl text-center font-bold mb-5">Form Edit Lowongan Kerja</h4> <br>  
        <div class="container text-center bg-[#F6F6F6] mx-auto p-4 shadow-lg rounded">  
        <form method="POST" action="/loker/{{ $loker->id }}" class="offset-md-1" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="p-6 font-bold">
                <label class="text-blueGray-600 text-sm font-bold" for="posisi">Posisi</label>
                <input type="text" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64" name="posisi" value="{{ old('posisi', $loker->posisi) }}">
            </div>
            <div class="font-bold">
                <label for="jobdesc" class="text-blueGray-600 text-sm font-bold">Job Description</label>
                <textarea id="jobdesc" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-48" type="text" name="jobdesc" value="{{ old('jobdesc', $loker->jobdesc) }}"></textarea>
            </div>
            @auth
            <input type="hidden" name="company_id" value="{{ auth()->user()->id }}">
            @endauth
            <div class="text-center p-6"> 
                <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40" type="submit">Submit</button><br> <br>
                <button class="px-8 py-2 font-semibold rounded-lg border-2 border-[#E84A5F] text-red hover:bg-red/40 hover:border-[#123C69]/40" type="submit">Kembali</button>
            </div>
        </form>
        </div>
        </div>
@endsection