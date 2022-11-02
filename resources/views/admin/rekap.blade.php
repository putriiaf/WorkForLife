@extends('layout.layout')

@section('content')

<div class="mx-10">
    <div class="flex justify-center item-center mt-8">
    @if(session()->has('success'))
      <div id="alert-3" class="flex p-4 mb-4 bg-green-100 rounded-lg " role="alert">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
          {{ session('success') }}
          </div>
          <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
      </div>
      @endif
    </div>
    <div class="mb-4 border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2" id="perusahaan-tab" data-tabs-target="#perusahaan" type="button" role="tab" aria-controls="perusahaan" aria-selected="false">Perusahaan</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="loker-tab" data-tabs-target="#loker" type="button" role="tab" aria-controls="loker" aria-selected="false">Loker</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="post-tab" data-tabs-target="#post" type="button" role="tab" aria-controls="post" aria-selected="false">Post</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="report-tab" data-tabs-target="#report" type="button" role="tab" aria-controls="report" aria-selected="false">Report</button>
            </li>
            <li role="presentation">
                <button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="pembayaran-tab" data-tabs-target="#pembayaran" type="button" role="tab" aria-controls="pembayaran" aria-selected="false">Pembayaran</button>
            </li>
        </ul>
    </div>

    <div id="myTabContent">
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="perusahaan" role="tabpanel" aria-labelledby="perusahaan-tab">
            <div class="font-montserrat">
                <div class="mx-16 mt-8 mb-5">
                    <h1 class="text-3xl font-bold">Perusahaan</h1>
                </div>
                <div class="flex justify-end mx-20 mb-2">
                    <a href="/company" class="text-white bg-dongker py-2 px-5 rounded-lg">Tambah</a>
                </div>
                <div class="relative flex justify-center mx-8 mb-5 overflow-x-auto border shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Perusahaan [Terdaftar]
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Perusahaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama CP
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Telepon CP
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alamat
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $company->id }}
                                </th>
                                <td class="px-6 py-4">
                                    <!-- {{ !empty($company->user) ? $company->user->nama:'' }} -->
                                    {{ $company->is_approved!=0 ? "ada akun":'' }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $company->nama_perusahaan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $company->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $company->namaCP }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $company->noCP }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $company->alamat }}
                                </td>
                                <td class="px-1 py-4">
                                    @if($company->is_approved == 0)
                                    <a href="/admin/company/{{ $company->id }}/detail" class="font-medium text-dongker">Detail</a>
                                    @endif  
                                    <form action="/admin/company/delete/{{ $company->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="font-medium text-dongker" onclick="return confirm('Apakah Anda yakin ingin menghapus lowongan kerja ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="loker" role="tabpanel" aria-labelledby="loker-tab">
            <div class="font-montserrat">
                <div class="mx-16 mt-8 mb-5">
                    <h1 class="text-3xl font-bold">Lowongan Kerja</h1>
                </div>
                <div class="flex justify-end mx-20 mb-2">
                    <a href="/loker/upload" class="text-white bg-dongker py-2 px-5 rounded-lg">Tambah</a>
                </div>
                <div class="relative flex justify-center mx-8 mb-5 overflow-x-auto border shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Perusahaan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Posisi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Domisili
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Minimum Pengalaman
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Insentif
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Link Pendaftaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                        </thead>
                        <tbody>
                            @foreach($lokers as $loker)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $loker->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $loker->nama_perusahaan }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $loker->posisi }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $loker->domisili }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $loker->min_pengalaman }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $loker->insentif }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $loker->link_pendaftaran }}
                                </td>
                                <td class="px-5 py-4 text-right space-x-5">
                                    <a href="/loker/{{ $loker->id }}/edit" class="font-medium text-dongker">Edit</a>
                                    <form action="/loker/{{ $loker->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="font-medium text-dongker" onclick="return confirm('Apakah Anda yakin ingin menghapus lowongan kerja ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="post" role="tabpanel" aria-labelledby="post-tab">
            <div class="font-montserrat">
                <div class="mx-16 mt-8 mb-5">
                    <h1 class="text-3xl font-bold">Post</h1>
                </div>
                <div class="flex justify-end mx-20 mb-2">
                    <a href="/uploadpost" class="text-white bg-dongker py-2 px-5 rounded-lg">Tambah</a>
                </div>
                <div class="relative flex justify-center mx-8 mb-5 overflow-x-auto border shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Judul
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Deskripsi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $post->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $post->user_id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->judul }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->deskripsi }}
                                </td>
                                <td class="px-5 py-4 text-right space-x-5">
                                    <a href="/posts/{{ $post->id }}/edit" class="font-medium text-dongker">Edit</a>
                                    <form action="/posts/{{ $post->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="font-medium text-dongker" onclick="return confirm('Apakah Anda yakin ingin menghapus post?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="report" role="tabpanel" aria-labelledby="report-tab">
            <div class="font-montserrat">
                <div class="mx-16 mt-8 mb-5">
                    <h1 class="text-3xl font-bold">Report</h1>
                </div>
                <div class="relative flex justify-center mx-8 mb-5 overflow-x-auto border shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Postingan ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Alasan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $report)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $report->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $report->user_id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $report->postingan_id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $report->alasan }}
                                </td>
                                @if($report->is_approved == 0)
                                <td class="px-6 py-4">
                                    Belum diproses
                                </td>
                                @else
                                <td class="px-6 py-4">
                                    Sudah diproses
                                </td>
                                @endif
                                <td class="px-5 py-4 text-right space-x-5">
                                    <a href="/admin/report/{{ $report->id }}/detail" class="font-medium text-dongker">Edit</a>
                                    <form action="/admin/report/{{ $report->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="font-medium text-dongker" onclick="return confirm('Apakah Anda yakin ingin menghapus report?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="pembayaran" role="tabpanel" aria-labelledby="pembayaran-tab">
            <div class="font-montserrat">
                <div class="mx-16 mt-8 mb-5">
                    <h1 class="text-3xl font-bold">Wokwowk</h1>
                </div>
                <div class="relative flex justify-center mx-8 mb-5 overflow-x-auto border shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    User ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nomor Telepon
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status Pembayaran
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $report)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $report->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $report->user_id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $report->postingan_id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $report->alasan }}
                                </td>
                                @if($report->is_approved == 0)
                                <td class="px-6 py-4">
                                    Belum diproses
                                </td>
                                @else
                                <td class="px-6 py-4">
                                    Sudah diproses
                                </td>
                                @endif
                                <td class="px-5 py-4 text-right space-x-5">
                                    <a href="/admin/report/{{ $report->id }}/detail" class="font-medium text-dongker">Edit</a>
                                    <form action="/admin/report/{{ $report->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="font-medium text-dongker" onclick="return confirm('Apakah Anda yakin ingin menghapus report?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection