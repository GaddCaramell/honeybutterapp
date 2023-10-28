<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NGADU!!</title>
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
              <li class="nav-item">
            </ul>
          </div>
        </div>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Menu</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Choose one 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Login</button>
              <a href="login">
                <button type="button" class="btn btn-primary">Logout</button>
              </a>
            </div>
          </div>
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
                    <form action="{{'simpanPengaduan'}}" method="post" enctype="multipart/form-data">
                      @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
                      </div>
                    <div class="mb-3">
                        <input type="date" class="form-control" id="tanggal_pengaduan" name="tanggal_pengaduan" placeholder="YY/MM/DD">
                      </div>
                      <div class="mb-3" class="position-absolute top-0 end-0">
                        <textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="5" placeholder="Isi Laporan"></textarea>
                      </div>
                      <div class="mb-3 w-50">
                        <input class="form-control" type="file" id="foto" name="foto" placeholder="Place an Image">
                      </div>
                      @if (session('notifikasi'))
                    
                    <div class="alert alert-success" role="alert">
                        {{session('notifikasi')}}
                    </div>

                    @endif
                    {{-- Jika Validasi Gagal --}}
                    @if ($errors->any())
                    
                    <div class="alert alert-success" role="alert">
                        Laporan Gagal Dibuat
                    </div>

                    @endif
                    <div>
                      <button class="btn form-control btn-primary mb-2 mt-3 buton">Buat Laporan</button>
                      <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
      {{-- akhir nambah konten --}}
      <script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>