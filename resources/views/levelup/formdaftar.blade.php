@extends('layout.layout')

@section('content')
<div class="mx-20 my-8 font-montserrat">
    <div class="mb-10">
        <h1 class="text-2xl font-bold">Review Pendaftaranmu</h1>
    </div>
    <div>
        <form action="POST">
        @csrf
            <div class="gap-6 mb-6">
                <div class="mb-3">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5" placeholder="Masukan Nama Lengkap" value="Fadlan" required disabled>
                </div>
                <div class="mb-3">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor Handphone</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5" placeholder="Masukan Nomor Handphone" value="081616212" required disabled>
                </div>
                <div class="my-3 mt-10">
                    <h2 class="mb-2 text-lg font-bold">Detail Acara</h2>
                    <div class="p-2 my-7 mb-5 w-1/2 bg-white rounded-xl border border-gray-200 shadow-md">
                        <h3 class="font-bold text-lg mb-4">{{ $event->nama }}</h3>
                        <ul>
                            <li class="mb-2">
                                <p>{{ date('l, j F Y', strtotime($event->tanggal_event)) }}</p>
                            </li>
                            <li class="mb-2">
                                {{ date('H:i', strtotime($event->tanggal_event)) }}
                            </li>
                            <li class="mb-2">
                                Rp {{ $event->harga }}
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="submit" class="items-center py-2 px-5 text-lg font-medium text-center text-white bg-dongker rounded-lg hover:bg-dongker/75 focus:ring-4 focus:outline-none focus:ring-blue-300">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection