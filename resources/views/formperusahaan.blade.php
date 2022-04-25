@extends('layout.layout')

@section('content')
<div class="font-montserrat my-10">
    <div class="flex justify-center item-center mt-8">
        <h1 class="text-2xl font-bold">Form Verifikasi Perusahaan</h1>
    </div>
    <div class="flex justify-center item-center">
        <form action="get" class="w-6/12">
        <div class="bg-abu rounded-lg">
        <div class="m-10 py-10">
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Nama Perusahaan</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input class="p-1 px-2 w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Alamat</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input class="p-1 px-2 py-10 w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Nama Contact Perusahaan</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input class="p-1 px-2 w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Nama Telepon Contact Perusahaan</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input class="p-1 px-2 w-full">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 text-base font-bold h-6 mx-2 mt-3">Email</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input class="p-1 px-2 w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="flex justify-center item-center pb-4">
            <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40">Submit</button>
        </div>
        <div class="flex justify-center item-center font-bold">
            <p>Sudah Punya Akun? <span><a href="#" class="text-pingki">Masuk Sekarang</a></span> </p>
        </div>
        </form>
    </div>
</div>
@endsection