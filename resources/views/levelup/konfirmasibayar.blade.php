@extends('layout.layout')

@section('content')
<div>
    <h1>konfirmasi Pembayaran</h1>

    <div class="grid grid-rows-2 justify-center w-1/3 bg-white rounded-xl border border-gray-200 shadow-md">
        <table>
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
            <tr>
                <th>
                    <p class="text-left">Nama Kegiatan</p>
                </th>
            </tr>
        </table>
        <table>
            <tr>
                <th>Judul Kegiatan</th>
                <th>Seminar Internasional</th>
            </tr>
            <tr>
                <th>Tanggal Kegiatan</th>
                <th>Jumat, 7 Oktober 2022</th>
            </tr>
            <tr>
                <th>Waktu Kegiatan</th>
                <th>19.00 - 21.00</th>
            </tr>
            <tr>
                <th>Total Biaya</th>
                <th>Rp 40.000</th>
            </tr>
        </table>
    </div>
</div>
@endsection