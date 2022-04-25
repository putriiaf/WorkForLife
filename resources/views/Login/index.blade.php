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

    <section class="md:h-screen flex flex-col md:text-left md:flex-row mt-10 lg:px-20 md:px-12 px-4">
    <div class="md:flex-1 md:mr-40">
      <h1 class="font-montserrat text-5xl font-extrabold ml-2 mb-7">Masuk</h1>
      <div>
      <form action="/login" method="post">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">
            @csrf
            <div class="pb-10">
              <h6 class="disable">EMAIL</h6>
              <input type="email" class="w-96 rounded-xl" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email address" value="{{ old('email') }}" autofocus required>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="">
              <h6 class="disable">PASSWORD</h6>
              <input type="password" name="password" class="form-control w-96 rounded-xl" id="password" placeholder="Password" required>
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>

            {{-- 
            <div class="">
              <h6 class="disable">EMAIL</h6>
              <input type="email" class="form-control w-96" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email address" value="{{ old('email') }}" autofocus required>
            </div>
            <div class="">
              <h6 class="disable">PASSWORD</h6>
              <input type="password" class="form-control w-96" id="Password" placeholder="Password">
            </div> 
              --}}
            </div>
              <div class="mx-36 mt-8 mb-1">
                <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40 text-justify" type="submit">Login</button>
              </div>
              <small class="d-block text-center mx-20">Belum punya akun? <a class="text-pingki" href="/register">Daftar Sekarang!</a> </small>
      </form>
      </div>
    </div>
    <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
      <img src="{{ asset('img/login.png') }}" alt="Gambar" />
    </div>
  </section>

    </div>
  </div>
</div>
</div>
  @endsection
    