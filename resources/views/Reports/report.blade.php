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
        <form method="POST" action="/report" class="offset-md-1" enctype="multipart/form-data">
            @csrf
            <div class="font-bold">
                <label for="alasan" class="text-blueGray-600 text-sm font-bold">Alasan</label>
                <textarea id="alasan" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-48" type="text" name="alasan" value="{{ old('alasan') }}"></textarea>
            </div>
            <input type="hidden" id="user_id" name="user_id" value="{{ session()->get('id') }}">
            <input type="hidden" name="postingan_id" value="{{$posts->id}}"> 
            <div class="text-center p-6"> 
                <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40" type="submit">Submit</button><br> <br>
                </form>
            </div>
            <div class="text-center p-6"> 
                <a href="/posts">
                <button class="px-8 py-2 font-semibold rounded-lg border-2 border-[#E84A5F] text-red hover:bg-red/40 hover:border-[#123C69]/40">Kembali</button>
                </a>
            </div>
        
        </div>
        </div>
@endsection
