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
        <div class="flex bg-white border-gray-100 border-2 shadow-lg rounded-xl max-w-2xl">
        <a href="">
                <div class="flex items-start px-4 py-6">
                    <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="{{ asset('img/avatar.png') }}" alt="avatar">
                        <div class="">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams </h2>
                            </div>
                            <p class="text-gray-700">12 April 2022</p>
                            <h6 class="mt-3 font-extrabold">Judul</h6>
                            <p class="mt-1 text-gray-700 text-sm">
                                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!
                            </p>
                            <button class="flex pt-5 space-x-2">
                                <img src="{{ asset('img/report.png') }}" alt="">
                                <p>Report</p>
                            </button>
                        </div>
                </div>
        </a>
        </div>
    </div>
@endsection