@extends('layout.layout')

@section('content')

<script src="{{ asset('js/dropdown,js') }}"></script>

<div class="ml-16 mr-10 mt-7 font-montserrat">
    <div class="flex">
        <h1 class="text-4xl font-extrabold text-dongker">Judul</h1>
        <button id="dropdownDefault" data-dropdown-toggle="dropdown" class="" type="button">
            <img src="{{ asset('img/more.png') }}" alt="">
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection