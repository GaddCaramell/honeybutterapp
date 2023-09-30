<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <style>
        .headertabel{
            background-color: #662121;
            color: white
        }
    </style>
</head>
<body>
      {{-- Awal Navbar --}}
      <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light" style="background-color : #a8a3a3;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PPM  </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="#">Pengaduan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Validasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Tanggapan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Laporan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- Akhir Navbar --}}
      {{-- nambah konten --}}
      <div class="container pt-5 my-4">
        <div class="card shadow">
            <div class="card" >
                <h5 class="card-header headertabel">Status Pengaduan</h5>
                <div class="card-body">
                    {{-- <h5 class="card-title"></h5> --}}
                    <table class=" table table-striped-columns">
                        <thead>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Telpon</th>
                            <th></th>
                        </thead>
                        <tbody>
                        @foreach($bebas as $item)
                        <tr>
                          <td>{{$item->nik}}</td>
                          <td>{{$item->nama}}</td>
                          <td>{{$item->telpon}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table></p>
                </div>
            </div>
        </div>
        </div>
      {{-- akhir nambah konten --}}
      <script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>