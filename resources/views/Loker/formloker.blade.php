@extends('layout.layout')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<div class="font-montserrat my-10">
    <div class="flex justify-center item-center mt-8">
        <h1 class="text-2xl font-bold">Form Tambah Loker</h1>
    </div>
    <div class="flex justify-center item-center">
        <form method="POST" action="/loker/upload" enctype="multipart/form-data" class="w-6/12">
        @csrf
        <div class="bg-abu rounded-lg">
        <div class="m-10 py-10">
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Posisi</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input type="text" class="p-1 px-2 w-full" name="posisi" id="posisi" value="{{ old('judul')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Domisili</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input type="text" class="p-1 px-2 w-full" name="domisili" id="domisili" value="{{ old('judul')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Minimal Pengalaman</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input type="text" class="p-1 px-2 w-full" name="min_pengalaman" id="min_pengalaman" value="{{ old('judul')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 font-bold h-6 mx-2 mt-3">Insentif</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input type="text" class="p-1 px-2 w-full" name="insentif" id="insentif" value="{{ old('judul')}}">
                        </div>
                        <script>
                            $(document).ready(function(){
                                $('#insentif').mask('#.##0', {reverse: true});
                            })
                        </script>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 text-base font-bold h-6 mx-2 mt-3">Kriteria</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input type="text" class="p-1 px-2 w-full" name="kriteria" id="kriteria" value="{{ old('judul')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 text-base font-bold h-6 mx-2 mt-3">Job Description</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input type="text" class="p-1 px-2 w-full" name="jobdesc" id="jobdesc" value="{{ old('judul')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row pb-4 mb-4">
                <div class="w-44 text-base font-bold h-6 mx-2 mt-3">Link Pendaftaran</div>
                <div class="flex-1 flex flex-col md:flex-row">
                    <div class="w-full flex-1 mx-2">
                        <div class="my-2 p-1 bg-white flex border border-gray-200 rounded">
                            <input type="text" class="p-1 px-2 w-full" name="link_pendaftaran" id="link_pendaftaran" value="{{ old('judul')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @if(session()->has('token'))
            <input id="company_id" type="hidden" name="company_id" value="{{ session()->get('company_id') }}">
        @endif
        <div class="flex justify-center item-center pb-4">
            <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40" type="submit">Submit</button>
        </div>
        </form>
    </div>
</div>
@endsection