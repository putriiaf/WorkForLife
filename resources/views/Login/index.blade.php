@extends('layout.layout')
@section('content')
  <div class="container font-montserrat mx-auto" >
    <div class="">
        <div class="">
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
  
          @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('loginError') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <div class="form-signin mt-5">
              <h1 class="mb-5 text-3xl font-bold"><b>Masuk</b></h1>
              <form action="/login" method="post">
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                @csrf
                <div>
                  <h6 class="disable">EMAIL</h6>
                  <input type="email" class="form-control" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email address" value="{{ old('email') }}" autofocus required>
                  @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="">
                  <h6 class="disable">PASSWORD</h6>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                  @error('password')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
                </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                <img class="w-40 h-40"src="{{ asset('img/login.png') }}" alt="">
                </div>

                {{-- <div class="">
                  <h6 class="disable">EMAIL</h6>
                  <input type="email" class="form-control" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email address" value="{{ old('email') }}" autofocus required>
                </div>
                <div class="">
                  <h6 class="disable">PASSWORD</h6>
                  <input type="password" class="form-control" id="Password" placeholder="Password">
                </div> --}}
                </div>
                <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40 text-justify" type="submit">Login</button>
                <br>
                <small class="d-block text-center mt-3">Belum punya akun? <a class="text-red" href="/register">Daftar Sekarang!</a> </small>
              </form>
                </div>
      </div>
    </div>
  </div>
  @endsection
    