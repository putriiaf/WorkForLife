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
        <h4 class="text-3xl text-center font-bold mb-5">Form Report Postingan</h4> <br>  
        <div class="container text-center bg-[#F6F6F6] mx-auto p-4 shadow-lg rounded">  
        <form method="POST" action="/posts/{{ $posts->id }}" class="offset-md-1" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="p-6 font-bold">
                <label class="text-blueGray-600 text-sm font-bold" for="judul">Judul</label>
                <input type="text" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64" name="judul" value="{{ old('judul', $posts->judul) }}">
            </div>
            <div class="font-bold">
                <label for="deskripsi" class="text-blueGray-600 text-sm font-bold">Deskripsi</label>
                <textarea id="deskripsi" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-48" type="text" name="deskripsi" value="{{ old('judul', $posts->deskripsi) }}"></textarea>
            </div>
            @auth
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            @endauth
            <div class="text-center p-6"> 
                <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40" type="submit">Submit</button><br> <br>
                <button class="px-8 py-2 font-semibold rounded-lg border-2 border-[#E84A5F] text-red hover:bg-red/40 hover:border-[#123C69]/40" type="submit">Kembali</button>
            </div>
        </form>
        </div>
        </div>
@endsection