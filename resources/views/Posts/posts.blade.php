@extends('layout.layout')

@section('content')
    <div class="text-center pb-24">
        <h1 class="font-montserrat font-extrabold text-3xl">Berbagi Pengalaman</h1>
        <div class="pt-10">
            <span>
                <span class="pl-3">
                    <form action="/posts">
                        <input type="text" id="search" class="h-12 w-1/2 p-3 rounded-lg shadow-md border-2" name="search" value="{{ request('search') }}">
                        <button class="w-20 h-12 text-center rounded-lg bg-dongker text-white text-base hover:bg-dongker/50" type="submit">Cari</button>
                    </form>
                    <form method="get" action="/uploadpost">
                        <button class="w-32 h-12 mt-7 text-center rounded-lg bg-dongker text-white text-base hover:bg-dongker/50" type="submit">Tambah Post</button>
                    </form>
                </span>
            </span>
        </div>
    </div>

    <div class="mx-20 font-montserrat">
        <h1 class="text-2xl text-dongker font-extrabold pb-6">Postingan Terbaru</h1>
        @if($posts->first())
        @foreach ($posts->unique('id') as $post)
            @foreach ($reports as $report)
                @if($report->postingan_id == $post->id && $report->is_approved == '1')
                    @continue(2)
                @endif
            @endforeach
        <div class="flex bg-white border-gray-100 border-2 shadow-lg rounded-xl max-w-2xl mb-5">
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
                            @guest
                            @else
                            <a href="/report/{{ $post->id }}">
                            <button class="flex pt-5 space-x-2">
                                @if($post->user_id == session()->get('id'))
                                @else
                                <img src="{{ asset('img/report.png') }}" alt="">
                                <p>Report</p>
                                @endif
                            </button>
                            </a>
                            @endguest
                        </div>
                </div>
        </a>
        </div>
        @endforeach
        @endif
    </div>

    <div class="mx-16 py-7">
        {{$posts->links()}}
    </div>
@endsection