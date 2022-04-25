<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    {{-- Bootstrap Icons--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@500&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/fb85f1a3b6.js" crossorigin="anonymous"></script>
    
    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>CLITICK | {{ $title }}</title>
  </head>

  <body>
    <!-- navbar -->
    @include('template.navbar')
    
    <!-- Content -->
    <div class="container">
        <div class="row justify-content-md-center" id="poster">
            <div class="col-md-8">
                <h2 style="text-align:center;">Detail</h2>
                <table class="table" cellpadding="0">
                <tr>
                    <th>Nama</th>
                    <td>{{ $events->user->name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $events->user->email }}</td>
                </tr>
                <tr>
                    <th>No Telepon</th>
                    <td>{{ $events->user->no_telp }}</td>
                    </tr>
                    <tr>
                        <th>Nama Event</th>
                        <td>{{ $events->nama_event }}</td>
                    </tr>
                    <tr>
                        <th>Institusi Penyelenggara</th>
                        <td>{{ $events->institusi_penyelenggara }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td><p style="text-align: justify">
                            {!! $events->deskripsi_event !!}
                        </p></td>
                    </tr>
                    <tr>
                        <th>Link Registrasi</th>
                        <td><p style="text-align: justify">
                            {{ $events->link_reg }}
                        </p></td>
                    </tr>
                    <tr>
                        <th>Tanggal Event</th>
                        <td>{{ $events->tgl_event }}</td>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <td>{{ $events->category->nama_kategori }}</td>
                    </tr>
                    <tr>
                        <th>Domisili</th>
                        <td>{{ $events->domisili->nama_domisili }}</td>
                    </tr>
                    <tr>
                        <th>Poster</th>
                        <td><img src="{{ asset('storage/' . $events->poster) }}" width=300px alt="#"></td>
                    </tr>
                    <tr>
                        <th>Status Event</th>
                        <td>{{ $events->status_event }}</td>
                    </tr>

                    <!-- kalo udah accepted, muncul status pembayaran -->
                    <tr>
                        <th>Status Pembayaran</th>
                        @if($events->payment_id !=NULL)
                        <td>{{ $events->payment->status_pembayaran }}</td>
                        @else
                        <td>Belum Dibayar</td>
                        @endif
                    </tr>
                    @if($events->payment_id != NULL && $events->payment->status_pembayaran == 'Sudah Dibayar')
                    <tr>
                        <th>Bukti Pembayaran</th>
                        <td><img src="{{ asset('storage/' . $events->payment->bukti_bayar) }}" width=300px alt="#"></td>
                    </tr>
                    @endif

                    <tr>
                        <th>Action</th>
                        <td>
                            <!-- kalo blm accepted, ada tombol ini -->
                            @if($events->status_event == "Requested")
                            <form method="POST" action="/dashboard/request/{{ $events->slug }}/accept">
                            @csrf
                            <input type="hidden" name="event_id" id="event_id" value="{{ $events->id }}">
                            <input type="hidden" name="status_event" id="status_event" value="Payment">
                            <button class="btn btn-success tombol2" type="submit">Confirm</button>
                            </form>
                            <form method="POST" action="/dashboard/request/{{ $events->slug }}/accept">
                            @csrf
                            <input type="hidden" name="event_id" id="event_id" value="{{ $events->id }}">
                            <input type="hidden" name="status_event" id="status_event" value="Rejected">
                            <button class="btn btn-danger mt-3 tombol2" type="submit">Reject</button>
                            </form>
                            @elseif($events->payment_id != NULL )
                            <form method="POST" action="/dashboard/request/{{ $events->slug }}/accept">
                            @csrf
                            <input type="hidden" name="event_id" id="event_id" value="{{ $events->id }}">
                            <input type="hidden" name="status_event" id="status_event" value="Accepted">
                            <button class="btn btn-success tombol2" type="submit">Accept</button>
                            </form>
                            <form method="POST" action="/dashboard/request/{{ $events->slug }}/accept">
                            @csrf
                            <input type="hidden" name="event_id" id="event_id" value="{{ $events->id }}">
                            <input type="hidden" name="status_event" id="status_event" value="Rejected">
                            <button class="btn btn-danger mt-3 tombol2" type="submit">Reject</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
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