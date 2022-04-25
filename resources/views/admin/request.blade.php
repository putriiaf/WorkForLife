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
    {{-- <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300;500&display=swap" rel="stylesheet"> --}}
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb85f1a3b6.js" crossorigin="anonymous"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <title>CLITICK | {{ $title }}</title>
  </head>
  <body>
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <!-- User Profile -->
    <div class="container">
        <div class="row justify-content-md-center">
            <h2 style="text-align:center">Request Events</h2>
        </div>
        <div class="row justify-content-md-center">
            @if($events->count())
            <table class="table table-striped table-bordered table-responsive-md css-serial" style="text-align:center">
                <tr class="table-warning">
                    <th>No</th>
                    <th>Nama Event</th>
                    <th>Institusi Penyelenggara</th>
                    <th>Tanggal Event</th>
                    <th>Status Event</th>
                    <th>Status Pembayaran</th>
                    <th>Detail</th>
                </tr>
                @foreach($events as $event)
                <tr>
                    <td></td>
                    <td>{{ $event->nama_event }}</td>
                    <td>{{ $event->institusi_penyelenggara }}</td>
                    <td>{{ $event->tgl_event }}</td>
                    <td>{{ $event->status_event }}</td>
                    @if($event->payment_id == NULL)
                    <td>Belum Dibayar</td>
                    @else
                    <td>{{ $event->payment->status_pembayaran }}</td>
                    @endif
                    <td>
                        <a href="/dashboard/request/{{ $event->slug }}" class="btn btn-primary tombol2">Detail</a>
                    </td>
                </tr>
                @endforeach
            </table>
            @else
            <div class="content" id="no-data">
                <img src="/images/no-data.png" width="280px" alt="no-data">
                <p>Sepertinya belum ada yang mengajukan publikasi event.</p>
            </div>
            @endif
        </div>
    </div>


    <!-- Footer -->
    @include('template.footer')

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