<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@500&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb85f1a3b6.js" crossorigin="anonymous"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Work For Life | {{ $title }}</title>
  </head>
  <body class="bg" style="background-color: MediumSeaGreen;">
    
    <!-- Content -->
    <div class="container" style="color: white">
      <div class="row justify-content-md-center">
          <div class="col-7">
          </div>
          <div class="col-md-4 mt-5">
              <main class="form-register">
                  <h1 class="text-center"><b>Register Account!</b></h1>
                  <small class="d-block text-center">For the purpose of regulation, your details are required.</small>
                  <hr>
                  <form action="/register" method="post">
                      @csrf
                    <div class="box-login">
                      <h6 class="disable">Name*</h6>
                      <input type="text" name="nama" class="form-control rounded-top @error('nama') is-invalid @enderror" id="nama" placeholder="Name" required value="{{ old('nama') }}">
                      {{-- <label for="nama">Name</label> --}}
                      @error('name')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="box-login">
                      <h6 class="disable">Username*</h6>
                      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                      {{-- <label for="nama">Name</label> --}}
                      @error('username')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="box-login mt-3">
                      <h6 class="disable">Email address*</h6>
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email address" required value="{{ old('email') }}">
                      {{-- <label for="email">Email address</label> --}}
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="box-login mt-3">
                      <h6 class="disable">Phone Number*</h6>
                      <input type="tel" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="Enter phone number" required value="{{ old('no_telp') }}">
                      {{-- <label for="no_telp">Nomor Telepon</label> --}}
                      @error('no_telp')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="box-login mt-3">
                      <h6 class="disable">Gender*</h6>
                      <div class="form-check">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="L" {{ old('jk') == 'L' ? 'checked' : '' }}>L
                        {{-- <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="P" {{ old('jk') == 'P' ? 'checked' : '' }}>P --}}
                        {{-- <label class="form-check-label" for="jk">
                        </label> --}}
                      </div>
                      <div class="form-check">
                        <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="P" {{ old('jk') == 'P' ? 'checked' : '' }}>P
                        {{-- <label class="form-check-label" for="jk">
                          P
                        </label> --}}
                      </div>
                      @error('jk')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="box-login mt-3">
                      <h6 class="disable">Password*</h6>
                      <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                      {{-- <label for="password">Password</label> --}}
                      @error('password')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <input type="hidden" name="is_admin" id="is_admin" value="0" required>

                    <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register Account</button>
                    <small class="d-block text-center mt-3">Do you already have an account? <a href="/login">Log in</a> </small>
                  </form>
              </main>
          </div>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<!-- {{-- @extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="tel" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" placeholder="+628123456789" required value="{{ old('no_telp') }}">
                <label for="no_telp">Nomor Telepon</label>
                @error('no_telp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="jk_input">
                <label for="jk">Jenis Kelamin</label>
                <div class="form-check">
                  <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="L" {{ old('jk') == 'L' ? 'checked' : '' }}>
                  <label class="form-check-label" for="jk">
                    L
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input @error('jk') is-invalid @enderror" type="radio" name="jk" id="jk" required value="P" {{ old('jk') == 'P' ? 'checked' : '' }}>
                  <label class="form-check-label" for="jk">
                    P
                  </label>
                </div>
                @error('jk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login Now!</a></small>
          </main>
    </div>
</div>
@endsection --}} -->
