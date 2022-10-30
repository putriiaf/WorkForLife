@extends('layout.layout')

@section('content')
<div>
    <div class="mx-20 mt-5 mb-10">
        <h1 class="text-2xl font-bold font-montserrat">Konfirmasi Pembayaran</h1>
    </div>

    <div class="flex justify-center overflow-x-auto relative mb-10">
        <table class="font-montserrat w-1/3 text-md text-left rounded-xl border border-gray-200 shadow-md">
            <tr>
                <th>
                    <p class="text-left font-normal">Nama Pengguna</p>
                </th>
                <th>
                    <p class="text-right">John Doe</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p class="text-left font-normal">No. Telepon</p>
                </th>
                <th>
                    <p class="text-right">0851639742173</p>    
                </th>
            </tr>
            <tr class="mt-5">
                <th>
                    <p class="text-left">Nama Kegiatan</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p class="text-left font-normal">Judul Kegiatan</p>
                </th>
                <th>
                    <p class="text-right">Seminar Internasional</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p class="text-left font-normal">Tanggal Kegiatan</p>
                </th>
                <th>
                    <p class="text-right">Jumat, 7 Oktober 2022</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p class="font-normal">Waktu Kegiatan</p>
                </th>
                <th>
                    <p class="text-right">19.00 - 21.00</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p class="font-normal">Total Biaya</p>
                </th>
                <th>
                    <p class="text-right">Rp 40.000</p>
                </th>
            </tr>
        </table>
    </div>
    <div class="flex justify-center">
    <label class="block mb-2 font-montserrat text-md font-medium" for="file_input">Upload Bukti Pembayaran</label>
    </div>
    <div class="flex justify-center overflow-x-auto relative">
        <input class="block w-1/3 text-sm bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none " id="file_input" type="file">
    </div>
</div>
@endsection