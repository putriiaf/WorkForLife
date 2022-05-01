@extends('layout.layout')

@section('content')

<section class="text-center pb-24">
    <h1 class="font-montserrat font-extrabold text-3xl">Semua Pekerjaan</h1>
    <div class="pt-8">
        <span>
          <form action="/loker">
            <input type="text" id="search" class="h-12 w-1/2 p-3 rounded-lg shadow-md border-2" name="search" value="{{ request('search') }}">
            <span class="pl-3 space-x-3">
              <button type="submit" class="w-20 h-12 text-center rounded-lg bg-dongker text-white text-base hover:bg-dongker/50">
                Cari
              </button>
              @guest
              @else
              @if(auth()->user()->role != 0)
              <form action="/loker/upload" method="get">
                @csrf
                <button class="w-32 h-12 text-center rounded-lg bg-dongker text-white text-base hover:bg-dongker/50" type="submit">Tambah Loker</button>
            </form>
              @endif
              @endguest
            </span>
          </form>
    </div>
</section>

<!--
<section>
  <div class="">
    <div class="grid gap-4">
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
-->

<section class="mx-10 grid grid-cols-3 gap-8">
@foreach($lokers as $loker)
<a href="/loker/{{ $loker->id }}" class="block font-montserrat p-6 max-w-sm bg-white rounded-xl border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
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
@endforeach
</section>

<div class="mx-16 py-7 items-center justify-center">
    {{$lokers->links()}}
</div>
@endsection