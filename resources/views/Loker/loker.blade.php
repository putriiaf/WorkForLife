@extends('layout.layout')

@section('content')

<section class="text-center pb-24">
    <h1 class="font-montserrat font-extrabold text-3xl">Semua Pekerjaan</h1>
    <div class="pt-8">
        <span>
            <input type="search" id="search" class="h-12 w-1/2 p-3 rounded-lg shadow-md border-2">
            <span class="pl-3">
              <button class="w-20 h-12 text-center rounded-lg bg-dongker text-white text-base hover:bg-dongker/50">Cari</button>
            </span>
            <span class="pl-5">
              <button class="w-10 h-10">
                <img src="{{ asset('img/plus.png') }}" alt="">
              </button>
            </span>
        </span>
    </div>
</section>

<section>
  <div class="m-10">
    <div class="grid-flow-col grid-rows-2 grid-cols-3 gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    @foreach($lokers as $loker)
      <a href="/loker/{{ $loker->id }}">
      <div class="px-5 py-7 m-10 max-w-xs bg-white rounded-xl border shadow-lg font-montserrat font-semibold">
        <span class="flex mr-4">
          <div class="pr-4">
            <img class="mb-3 w-16 h-16 rounded-lg" src="{{ asset('img/gojek.png') }}" alt="logo">
          </div>
          <div>
            <p class="pt-2 pb-1 text-md font-bold">{{ $loker->posisi }}</p>
            <p class="mb-3 text-sm text-dongker font-bold">{{ $loker->company->nama_perusahaan }}</p>
          </div>
        </span>
        <div>
          <ul>
            <li class="flex flex-row pl-5 pt-3">
              <div class="pr-5 pt-0.5">
                <img class="w-5 h-5" src="{{ asset('img/map.png') }}" alt="">
              </div>
              <p class="text-md">{{ $loker->domisili }}</p>
            </li>
            @if($loker->min_pengalaman != NULL)
            <li class="flex flex-row pl-5 pt-3">
              <div class="pr-5 pt-0.5">
                <img class="w-5 h-5" src="{{ asset('img/briefcase.png') }}" alt="">
              </div>
              <p class="text-md">{{ $loker->min_pengalaman }}</p>
            </li>
            @endif
            @if($loker->insentif != NULL)
            <li class="flex flex-row pl-5 pt-3">
              <div class="pr-5 pt-0.5">
                <img class="w-5 h-5" src="{{ asset('img/duit.png') }}" alt="">
              </div>
              <p class="text-md">{{ $loker->insentif }}</p>
            </li>
            @endif
          </ul>
        </div>
        </a>
        <div class="justify-center item-center pt-9 mx-16">
          <a class="bg-[#E0FBFC] px-9 py-3 mt-8 rounded-xl font-semibold uppercase tracking-wide hover:bg-tipis/50" href="#">
            Apply
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<div class="flex py-7 items-center justify-center space-x-2">
  <!--
    <a href="#" class="flex items-center px-4 py-2 text-gray-500 bg-gray-300 rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg>
    </a>
  -->
    {{$lokers->links()}}
    <a href="#" class="px-4 py-2 text-white bg-dongker rounded-md ">
        1
    </a>
    <a href="#" class="px-4 py-2 bg-white rounded-md hover:bg-dongker hover:text-white">
        2
    </a>
    <a href="#" class="px-4 py-2 bg-white rounded-md hover:bg-dongker hover:text-white">
        3
    </a>
    <a href="#" class="px-4 py-2 bg-white rounded-md hover:bg-dongker hover:text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
        </svg>
    </a>
</div>
@endsection