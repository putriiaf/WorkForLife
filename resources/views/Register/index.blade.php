@extends('layout.layout')
@section('content')
    <div class="mx-auto font-montserrat">
      <div class="mt-5">
      <h1 class="text-3xl text-center font-bold mb-5"><b>Buat Akun</b></h1>
                  <form action="/register" method="post">
                  <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4 relative w-full mb-3"> 
                      @csrf
                      <h6 class="disable">NAMA</h6>
                      <input type="text" name="nama" class=" @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" required value="{{ old('nama') }}">
                      @error('nama')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="w-full lg:w-6/12 px-4 relative w-full mb-3">
                    <h6 class="disable">USERNAME</h6>
                      <input type="text" name="username" class= " @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                      @error('username')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <!-- <div class="w-full lg:w-6/12 px-4 relative w-full mb-3">
                      <h6 class="disable">NOMOR HANDPHONE</h6>
                      <input type="tel" name="no_telp" class= "@error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Masukkan Nomor Handphone" required value="{{ old('no_telp') }}">
                      @error('no_telp')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div> -->
                    <div class="w-full lg:w-6/12 px-4 relative w-full mb-3">
                      <h6 class="disable">JENIS KELAMIN</h6>
                      <div class="form-check">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="L" {{ old('jk') == 'L' ? 'checked' : '' }}>L
                      </div>
                      <div class="form-check">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="P" {{ old('jk') == 'P' ? 'checked' : '' }}>P
                      </div>
                      @error('jk')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="w-full lg:w-6/12 px-4 relative w-full mb-3">
                      <h6 class="disable">EMAIL</h6>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email address" required value="{{ old('email') }}">
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="w-full lg:w-6/12 px-4 relative w-full mb-3">
                      <h6 class="disable">NOMOR TELEPON</h6>
                      <input type="tel" name="no_telp" class= " @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Masukkan Tanggal Lahir" required value="{{ old('no_telp') }}">
                      @error('no_telp')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="w-full lg:w-6/12 px-4 relative w-full mb-3">
                      <h6 class="disable">PASSWORD</h6>
                      <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="w-full lg:w-6/12 px-4 relative w-full mb-3">
                      <h6 class="disable">Konfirmasi Password</h6>
                      <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <input type="hidden" name="role" id="role" value="0" required>
                    </div>
                    <div class="center">
                      <button class="px-8 py-2 font-semibold rounded-lg bg-dongker border-2 border-[#123C69] text-white hover:bg-dongker/40 hover:border-[#123C69]/40 text-justify" type="submit">Daftar Sekarang</button> <br>
                    </div>
                    <small class="">Sudah punya akun? <a href="/login">Masuk Sekarang!</a> </small>
                    </form>
                  </div>
          </div>
    </div>
@endsection
    