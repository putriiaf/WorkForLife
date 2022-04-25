@extends('layout.layout')

@section('content')
    <div class="text-center pb-24">
        <h1 class="font-montserrat font-extrabold text-3xl">Berbagi Pengalaman</h1>
        <div class="pt-10">
            <span>
                <input type="search" id="search" class="h-12 w-1/2 p-3 rounded-lg shadow-md border-2">
                <span class="pl-3">
                    <button class="w-20 h-12 text-center rounded-lg bg-dongker text-white text-base hover:bg-dongker/50">Cari</button>
                </span>
            </span>
        </div>
    </div>

    <div class="mx-20 font-montserrat">
        <h1 class="text-2xl text-dongker font-extrabold pb-6">Postingan Terbaru</h1>
        @foreach($posts as $post)
        <div class="flex bg-white border-gray-100 border-2 shadow-lg rounded-xl max-w-2xl">
        <a href="/posts/{{ $post->id }}">
                <div class="flex items-start px-4 py-6">
                    @if($post->user->foto_profil)
                        <img src="{{ asset('storage/' . $post->user->foto_profil) }}" class="w-12 h-12 rounded-full object-cover mr-4 shadow" alt="avatar">
                    @else
                        <img src="{{ asset('img/avatar.png') }}" class="w-12 h-12 rounded-full object-cover mr-4 shadow" alt="avatar">
                    @endif
                        <div class="">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">{{ $post->user->nama }}</h2>
                            </div>
                            <p class="text-gray-700">{{ $post->created_at }}</p>
                            <h6 class="mt-3 font-extrabold block w-[560px] line-clamp-1">{{ $post->judul }}</h6>
                            <p class="mt-1 text-gray-700 text-sm block w-[560px] line-clamp-2">
                                {{ $post->deskripsi }}
                            </p>
                            <button class="flex pt-5 space-x-2">
                                <img src="{{ asset('img/report.png') }}" alt="">
                                <p>Report</p>
                            </button>
                        </div>
                </div>
         </a>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection