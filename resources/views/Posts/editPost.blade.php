<!doctype html>
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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>WorkForLife | {{ $title }}</title>
  </head>
  <body class="bg">
    
    <!-- Content -->
    <div class="row justify-content-md-center" style="margin-top:50px">
        @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div class="container bg-dark text-white col-md-8 justify-content-center py-3 my-3 ">
        <h4 style="text-align: center">Upload Postingan</h4> <br>    
        <form method="POST" action="/posts/{{ $posts->id }}" class="offset-md-1" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group row col-md-11">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" value="{{ old('judul', $posts->judul) }}">
            </div>
            <div class="form-group row col-md-11 mt-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input id="deskripsi" type="text" name="deskripsi" value="{{ old('judul', $posts->deskripsi) }}">
            </div>
            @auth
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            @endauth
            <div class="form-submit col-sm-11 py-3">
                <button style="float: right" class="btn btn-primary" type="submit">Submit</button>
                <br><br>
            </div>

        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
