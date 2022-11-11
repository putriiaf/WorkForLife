@extends('layout.layout')

@section('content')
<div class="flex justify-center">
    <div class="text-center items-center">
        <div class="my-10">
            <div class="flex justify-center">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <h1 class="text-lg">Pendaftaran Berhasil</h1>
        </div>  

        <!-- <div class="border-2 border-gray-500 rounded-lg">
            <ul class="py-5 text-lg">
                <li class="font-semibold">Topik Webinar</li>
                <li>Jumat, 7 Oktober 2022</li>
                <li>19.00 - 20.00</li>
                <li>Rp 40.000</li>
            </ul>
        </div> -->

        <div class="my-10">
            <a href="/profile" class="mx-8 px-8 py-2 font-semibold rounded-lg bg-white border-2 border-gray-500 text-dongker hover:bg-white/30 hover:border-gray-500/30">Riwayat Pendaftaran Event</a>
        </div>
    </div>
</div>
@endsection