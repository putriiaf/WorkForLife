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
        @if($posts != NULL)
        @foreach ($posts as $post)
        <div class="flex bg-white border-gray-100 border-2 shadow-lg rounded-xl max-w-2xl mb-5">
        <a href="/posts/{{ $post->id }}">
                <div class="flex items-start px-4 py-6">
                    @if($post->foto_profil)
                        <img src="{{ asset('storage/' . $post->foto_profil) }}" class="w-12 h-12 rounded-full object-cover mr-4 shadow" alt="avatar">
                    @else
                        <img src="{{ asset('img/avatar.png') }}" class="w-12 h-12 rounded-full object-cover mr-4 shadow" alt="avatar">
                    @endif
                        <div class="">
                            <div class="flex items-center justify-between">
                                <h2 class="text-lg font-semibold text-gray-900 -mt-1">{{ $post->nama }}</h2>
                            </div>
                            <p class="text-gray-700">{{ $post->created_at }}</p>
                            <h6 class="mt-3 font-extrabold block w-[560px] line-clamp-1">{{ $post->judul }}</h6>
                            <p class="mt-1 text-gray-700 text-sm block w-[560px] line-clamp-2">
                                {{ $post->deskripsi }}
                            </p>
                            @if (!(session()->has('token')))
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
                            @endif
                        </div>
                </div>
        </a>
        </div>
        @endforeach
        @endif
    </div>

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
  <a href="/posts?page={{$page->current_page - 1}}" class="inline-flex items-center py-2 px-4 mr-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    <svg class="mr-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
    Previous
  </a>
  @endif
  @if($page->current_page == $page->last_page)
  <a href="/posts?page={{$page->last_page}}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    Next
    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </a>
  @else
  <a href="/posts?page={{$page->current_page + 1}}" class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
    Next
    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </a>
  @endif
  @endif
  </div>
</div>
@endsection