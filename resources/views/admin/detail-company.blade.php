@extends('layout.layout')

@section('content')

<div class="mx-10">
    <div class="mb-4 border-b border-gray-200">
        <form method="post" action="/admin/company/create" enctype="multipart/form-data">
            <div class="grid grid-cols-2 gap-8">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama" class="ml-1">Nama</label>
                    <input required value="{{ $company->nama_perusahaan }}" type="text" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="nama" placeholder="Nama" name="nama">
                </div>
                <div class="form-group mb-3">
                    <label for="username" class="ml-1">Username</label>
                    <input required value="{{ old('username') }}" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="username" aria-describedby="emailHelp124" placeholder="Username" name="username">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="ml-1">Email</label>
                    <input required value="{{ $company->email }}" type="email" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" placeholder="Email" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="no_telp" class="ml-1">Nomor Telepon</label>
                    <input required value="{{ $company->noCP }}" type="text" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="no_telp" placeholder="Nomor Telepon" name="no_telp">
                </div>
                <div class="form-group mb-3">
                    <label for="no_telp" class="ml-1">Password</label>
                    <input required value="{{ old('password') }}" type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-xl transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="password" placeholder="Password" name="password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <input required value="{{ $company->id }}" type="hidden" id="company_id" name="company_id">
                </div>
                <div class="form-group mb-3">
                    <input required value="1" type="hidden" id="role" name="role">
                </div>
            </div>
            <div class="flex justify-center items-center">
                <button class="px-8 py-2 mb-10 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40 text-justify" type="submit">Buat Akun Perusahaan</button>
            </div>
        </form>
    </div>
</div>

@endsection