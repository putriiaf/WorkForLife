@extends('layout.layout')

@section('content')
    <div class="font-montserrat text-black">
        @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div class="font-montserrat text-black ">
        <h4 class="text-3xl text-center font-bold mb-5">Form Edit Report</h4> <br>  
        <div class="container text-center bg-[#F6F6F6] mx-auto p-4 shadow-lg rounded">  
        <form method="POST" action="/admin/report/{{ $report->id }}" class="offset-md-1" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="p-6 font-bold">
                <label class="text-blueGray-600 text-sm font-bold" for="postingan_id">Postingan ID</label>
                <input type="text" class="bg-white border border-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-64" readonly name="postingan_id" value={{ $report->postingan_id }}>
            </div>
            <div class="flex font-bold">
                <label for="is_approved" class="text-blueGray-600 text-sm font-bold">Status</label>
                <div class="flex items-center mr-4 mb-1">
                  <input id="is_approved" type="radio" name="is_approved" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required value="1" {{ old('is_approved') == '1' ? 'checked' : '' }}>
                  <label for="is_approved" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Terima</label>
                </div>
                <div class="flex items-center mr-4">
                  <input id="is_approved" type="radio" name="is_approved" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" required value="0" {{ old('is_approved') == '0' ? 'checked' : '' }}>
                  <label for="is_approved" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tolak</label>
                </div>
                </div>
            <div class="text-center p-6"> 
                <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40" type="submit">Update</button><br> <br>
                {{-- <button class="px-8 py-2 font-semibold rounded-lg border-2 border-[#E84A5F] text-red hover:bg-red/40 hover:border-[#123C69]/40" type="submit">Kembali</button> --}}
            </div>
        </div>
        </div>
@endsection
