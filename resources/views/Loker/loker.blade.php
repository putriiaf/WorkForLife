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
            </span>
          </form>
          @if (!(session()->has('token')))
          @else
          <form action="/loker/upload">
            @if(session()->get('role') != 0)
              <form method="get" action="/loker/upload">
                <span class="pl-3 space-x-3">
                <button class="w-32 h-12 mt-7 text-center rounded-lg bg-dongker text-white text-base hover:bg-dongker/50" type="submit">Tambah Loker</button>
                </span>
              </form>
            @endif
            @endif
          </form>
        </span>

    </div>
</section>

<section class="mx-10 grid grid-cols-3 gap-8">
@foreach($lokers as $loker)
<a href="/loker/{{$loker->id}}" class="block font-montserrat p-6 max-w-sm bg-white rounded-xl border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
  <span class="flex mr-4">
    <div class="pr-4">
      <img class="mb-3 w-16 h-16 rounded-lg" src="{{ asset('img/gojek.png') }}" alt="logo">
    </div>
    <div>
      <p class="pt-2 pb-1 text-md font-bold">{{ $loker->posisi }}</p>
      <p class="mb-3 text-sm text-dongker font-bold">{{$loker->nama_perusahaan}}</p>
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

<div class="flex flex-col items-center my-10">
  <!-- Help text -->
  <span class="text-sm text-gray-700 dark:text-gray-400">
      Showing Page <span class="font-semibold text-gray-900 dark:text-white">{{$page->current_page}}</span>
  </span>
  <div class="inline-flex mt-2 xs:mt-0">
  @if($page->last_page > 1)
  @if($page->current_page == 1)
  <a href="#" class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
    Previous
  </a>
  @else
  <a href="/loker?page={{$page->current_page - 1}}" class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
    Previous
  </a>
  @endif
  @if($page->current_page == $page->last_page)
  <a href="/loker?page={{$page->last_page}}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    Next
    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </a>
  @else
  <a href="/loker?page={{$page->current_page + 1}}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    Next
    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </a>
  @endif
  @endif
  </div>
</div>
@endsection