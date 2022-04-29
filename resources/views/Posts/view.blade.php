@extends('layout.layout')

@section('content')

<script src="{{ asset('js/dropdown,js') }}"></script>

<div class="flex mt-7 space-x-8 font-montserrat">
<div class="ml-16 mr-20 max-w-3xl">
    <div class="">
        <span class="flex max-w-44">
            <h1 class="text-4xl font-extrabold text-dongker line-clamp-2">{{ $post->judul }}</h1>
            @guest
            @else
            @if($post->user_id == auth()->user()->id)
            <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
            @endif
            @endguest
        </button>
        </span>
        <!-- Dropdown menu -->
        @guest
        @else
        @if($post->user_id == auth()->user()->id)
        <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Option 1</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Option 2</a>
                </li>
            </ul>
        </div>
        @endif
        @endguest
    </div>

    <div class="flex items-start px-2 py-6">
        @if($post->user->foto_profil)
        <img src="{{ asset('storage/' . $post->user->foto_profil) }}" class="w-16 h-16 rounded-full object-cover mr-4 shadow" alt="avatar">
        @else
        <img src="{{ asset('img/avatar.png') }}" class="w-16 h-16 rounded-full object-cover mr-4 shadow" alt="avatar">
        @endif
        <div class="pt-1">
            <div class="flex items-center justify-between">
                <h2 class="text-lg font-semibold text-gray-900 mt-1">{{ $post->user->nama }}</h2>
            </div>
            <p class="text-gray-700">{{ $post->created_at }}2</p>
        </div>
    </div>

    <div class="mt-5 text-justify">
        <p>{{ $post->deskripsi }}</p>
    </div>

    <div class="flex space-x-4">
        {{-- <button class="flex pt-5 space-x-2">
            <img src="{{ asset('img/like.png') }}" alt="">
            <p>1 Juta</p>
        </button>--}}
        <a href="/report/{{ $post->id }}">
        <button class="flex pt-5 space-x-2">
            <img src="{{ asset('img/report.png') }}" alt="">
            <p>Report</p>
        </button>
        </a>
    </div>
</div>

<div class="mr-10">
    <h4 class="text-2xl font-extrabold text-dongker pb-5">Postingan Terbaru</h1>
    <div class="shadow-md rounded-lg h-5/6 w-[325px] pb-3">
        @foreach($latest_post as $new_post)
        <div class="pt-2">
            <a href="#" class="text-dongker text-lg font-bold">{{ $new_post->judul }}</a>
        </div>
        <p class="line-clamp-3 pt-1">{{ $new_post->deskripsi }}</p>
        @endforeach
    </div>
</div>
</div>
@endsection