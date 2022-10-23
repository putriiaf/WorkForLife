@extends('layout.layout')

@section('content')
<div class="mx-20 my-8 font-montserrat">
    <div class="mb-10">
        <h1 class="text-2xl font-bold">Review Pendaftaranmu</h1>
    </div>
    <div>
        <form action="">
            <div class="gap-6 mb-6">
                <div class="mb-3">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Lengkap</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5" placeholder="Masukan Nama Lengkap" required>
                </div>
                <div class="mb-3">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor Handphone</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/3 p-2.5" placeholder="Masukan Nomor Handphone" required>
                </div>
                <div class="my-3 mt-10">
                    <h2 class="mb-2 text-lg font-bold">Detail Acara</h2>
                    <div class="p-2 my-7 mb-5 w-1/2 bg-white rounded-xl border border-gray-200 shadow-md">
                        <h3 class="font-bold text-lg mb-4">Topik Webinar</h3>
                        <ul>
                            <li class="mb-2">
                                <p>Jumat, 7 Oktober 2022</p>
                            </li>
                            <li class="mb-2">
                                19.00 - 20.00
                            </li>
                            <li class="mb-2">
                                Rp 40.000
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