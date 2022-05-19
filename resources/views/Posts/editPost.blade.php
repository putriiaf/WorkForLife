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
        <h4 class="text-3xl text-center font-bold mb-5">Form Edit Postingan</h4> <br>  
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
                <textarea id="deskripsi" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64 h-48" type="text" name="deskripsi" value="{{ old('deskripsi', $posts->deskripsi) }}"></textarea>
            </div>
            @if (session()->has('token'))
            <input type="hidden" name="user_id" value="{{ session()->get('id')}}">
            @endif
            <div class="text-center p-6"> 
                <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40" type="submit">Submit</button><br> <br>
                <button class="px-8 py-2 font-semibold rounded-lg border-2 border-[#E84A5F] text-red hover:bg-red/40 hover:border-[#123C69]/40" type="submit">Kembali</button>
            </div>
        </form>
        </div>
        </div>
        <div class="font-montserrat my-10">
    <div class="flex justify-center item-center mt-8">
    @if(session()->has('success'))
      <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg " role="alert">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
          {{ session('success') }}
          </div>
          <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
      </div>
      @endif
    </div>

    <div class="flex justify-center item-center mt-8">
        <h1 class="text-2xl font-bold">Form Edit Postingan</h1>
    </div>
    @foreach($posts as $post)
    <div class="flex justify-center item-center">
        <form method="POST" action="/loker/{{ $loker->id }}" class="w-6/12" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="bg-abu rounded-lg">
        <div class="m-10 py-10">
        <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Judul</div>
                <div>
                    <div class="flex flex-col md:flex-row w-max">
                        <div class="flex-1 my-2 p-1 bg-white flex border border-gray-200 rounded-lg">
                            <input type="text" class="p-1 px-2 w-96" name="judul" value="{{ old('judul', $posts->judul) }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Deskripsi</div>
                <div>
                    <div class="flex flex-col md:flex-row w-max">
                        <div class="flex-1 my-2 p-1 bg-white flex border border-gray-200 rounded-lg">
                            <input type="text" class="p-1 px-2 py-10 w-96" name="deskripsi" value="{{ old('deskripsi', $posts->deskripsi) }}">
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" class="p-1 px-2 w-full" name="user_id" value="1">
        </div>
        </div>
        <div class="flex justify-center item-center pb-4">
            <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40">Submit</button>
        </div>
        </form>
    </div>
    @endforeach
</div>
@endsection