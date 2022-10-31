@extends('layout.layout')

@section('content')
<div>
    <div class="mx-20 mt-5 mb-10">
        <h1 class="text-2xl font-bold font-montserrat">Konfirmasi Pembayaran</h1>
    </div>

    <div class="flex justify-center overflow-x-auto relative mb-10">
        <div class="w-1/3 rounded-xl border border-gray-200 shadow-md">
            <div class="p-6">
                <div class="pt-3">
                    <table class="border-separate font-montserrat w-full text-md text-left">
                        <tr>
                            <th>
                                <p class="text-left">Nama Pengguna</p>
                            </th>
                            <th>
                                <p class="text-right">John Doe</p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p class="text-left">No. Telepon</p>
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
                    </table>
                </div>
                <div class="px-3 py-3">
                    <table class="font-montserrat w-full text-md text-left">
                        <tr>
                            <th>
                                <p class="text-left font-normal">Judul Kegiatan</p>
                            </th>
                            <th>
                                <p class="text-right font-normal">Seminar Internasional</p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p class="text-left font-normal">Tanggal Kegiatan</p>
                            </th>
                            <th>
                                <p class="text-right font-normal">Jumat, 7 Oktober 2022</p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p class="font-normal">Waktu Kegiatan</p>
                            </th>
                            <th>
                                <p class="text-right font-normal">19.00 - 21.00</p>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p class="font-normal">Total Biaya</p>
                            </th>
                            <th>
                                <p class="text-right font-normal">Rp 40.000</p>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="pl-5 pb-6 font-montserrat text-md">
                <p class="font-bold pb-3">Silakan melakukan pembayaran melalui beberapa metode di bawah:</p>
                <p class="pb-1">Gopay: 0812917291901 a.n. Work For Life Indonesia</p>
                <p>BCA: 8670718618 a.n. Work For Life Indonesia</p>
            </div>
        </div>
    </div>

    <form action="">
        <div class="flex justify-center">
            <label class="block mb-2 font-montserrat text-md font-medium" for="file_input">Upload Bukti Pembayaran</label>
        </div>

        <div class="flex justify-center overflow-x-auto relative">
            <input class="block w-1/3 text-sm bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none " id="file_input" type="file">
        </div>

        <div class="flex w-1/3 justify-end">
            <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection