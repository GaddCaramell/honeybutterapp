<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengaduan</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <style>
        .headertabel{
            background-color: #662121;
            color: white
        }
        .buton{
            background-color: #a8a3a3;
            color: black
        }
        .judul{
          font-family: fantasy;
        }
    </style>
</head>
<body>
      {{-- Awal Navbar --}}
      <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light" style="background-color : #a8a3a3;">
        <div class="container-fluid">
          <a class="navbar-brand judul" href="Dashboard">LAPORKAN!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item" >
                <a class="nav-link active" aria-current="page" href="Mengadu">Pengaduan</a>
            </ul>
          </div>
        </div>
      </nav>
      {{-- Akhir Navbar --}}
      {{-- nambah konten --}}
      <div class="container pt-5 my-4">
        <div class="card shadow">
            <div class="card" >
                <h5 class="card-header headertabel">Pengaduan</h5>
                <div class="card-body">
                    {{-- <h5 class="card-title"></h5> --}}
                    <div class="mb-3">
                        <input type="text" class="form-control" id="id_pengaduan" placeholder="ID Pengaduan">
                      </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nik" placeholder="NIK">
                      </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="date" placeholder="DD/MM/YY">
                      </div>
                      <div class="mb-3" class="position-absolute top-0 end-0">
                        <textarea class="form-control" id="isi_lapoan" rows="5" placeholder="Isi Laporan"></textarea>
                      </div>
                      <div class="mb-3 w-50">
                        <input class="form-control" type="file" id="foto" placeholder="Place an Image">
                      </div>
                      <button class="btn form-control btn-primary mb-2 mt-3 buton" type="submit">Buat Laporan</button>
                </div>
            </div>
        </div>
        </div>
      {{-- akhir nambah konten --}}
      <script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>