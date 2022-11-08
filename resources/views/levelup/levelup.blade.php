@extends('layout.layout')

@section('content')
<div class="relative pt-10 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-20 md:px-12 px-4">
<div class="md:flex-1 md:mr-40">
  <h1 class="font-montserrat text-5xl font-extrabold mb-7">Level Up Your Skill</h1>
    <p class="font-montserrat font-light mb-7 max-w-xl">
      Kembangkan potensimu lewat LevelUp.
    </p>
    <div>
  	  <form class="font-montserrat flex">
		    <a href="#" class="px-8 rounded-lg bg-[#E84A5F]  text-white font-bold p-4  border-[#E84A5F] hover:bg-[#E84A5F]/75 border-[#E84A5F]/75">Cek Sekarang</a>
	    </form>
    </div>
</div>
<div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
  <img src="{{ asset('img/levelup.png') }}" alt="Gambar" />
</div>
</div>

<div class="text-center py-8 pt-10 pb-24">
  <h1 class="font-montserrat font-extrabold text-3xl">Semua Program</h1>
</div>

<div class="mx-10 grid grid-cols-3 gap-8">
@foreach ($events as $event)
<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md">
    <a href="/levelup/event/1">
        <img class="rounded-t-lg" src="{{ asset('img/webinar.jpg')}}" alt="">
    </a>
    <div class="p-6">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $event->nama }}</h5>
        </a>
        <div class="pb-3">
          <ul class="pt-3">
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              </div>
              <p class="text-md">{{ date('Y-m-d', strtotime($event->tanggal_event)) }}</p>
            </li>
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <p class="text-md">{{ date('H:i:s', strtotime($event->tanggal_event)) }}</p>
            </li>
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
              </div>
              <p class="text-md">Rp {{ $event->harga }}</p>
            </li>
          </ul>
        </div>
        <div class="flex justify-center">
        <a href="/levelup/event/{{ $event->id }}" class="inline-flex items-center py-2 px-5 text-lg font-medium text-center text-white bg-[#E84A5F] rounded-lg hover:bg-[#E84A5F]/75 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Detail
        </a>
        </div>
    </div>
</div>

<!-- <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md">
    <a href="#">
        <img class="rounded-t-lg" src="{{ asset('img/webinar.jpg')}}" alt="">
    </a>
    <div class="p-6">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Topik Webinar</h5>
        </a>
        <div class="pb-3">
          <ul class="pt-3">
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              </div>
              <p class="text-md">Jumat, 7 Oktober 2022</p>
            </li>
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <p class="text-md">19.00 - 21.00</p>
            </li>
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
              </div>
              <p class="text-md">RP 40.000</p>
            </li>
          </ul>
        </div>
        <div class="flex justify-center">
        <a href="#" class="inline-flex items-center py-2 px-5 text-lg font-medium text-center text-white bg-[#E84A5F] rounded-lg hover:bg-[#E84A5F]/75 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Daftar
        </a>
        </div>
    </div>
</div>

<div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md">
    <a href="#">
        <img class="rounded-t-lg" src="{{ asset('img/webinar.jpg')}}" alt="">
    </a>
    <div class="p-6">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Topik Webinar</h5>
        </a>
        <div class="pb-3">
          <ul class="pt-3">
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              </div>
              <p class="text-md">Jumat, 7 Oktober 2022</p>
            </li>
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <p class="text-md">19.00 - 21.00</p>
            </li>
            <li class="flex pb-3">
              <div class="pr-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
              </div>
              <p class="text-md">RP 40.000</p>
            </li>
          </ul>
        </div>
        <div class="flex justify-center">
        <a href="#" class="inline-flex items-center py-2 px-5 text-lg font-medium text-center text-white bg-[#E84A5F] rounded-lg hover:bg-[#E84A5F]/75 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Daftar
        </a>
        </div>
    </div>
</div> -->
@endforeach
</div>
@endsection