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
        .judul{
          font-family: fantasy
        }
        .korsel{
          padding-left: 20% ;
          padding-right: 20%;
          padding-top: 2%;
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
          </li>
        </ul>
      </div>
    </div>
  </nav>
  {{-- Akhir Navbar --}}  
      {{-- nambah konten --}}
      <div id="carouselExampleCaptions" class="carousel slide korsel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/gambar/Adel1 PC.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Reva Fidela</h5>
              <p>Bagai kucing yang kalem, Tapi akan selalu memikat hati kamu,Haii aku Adell</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/gambar/Floraaa PC.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Flora Shatiqa</h5>
              <p>Siapa yang mau ikut aku kedunia FLORAAAA</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/gambar/Shani PC.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Shani Indira</h5>
              <p>Semanis Coklat Selembut Sutra</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
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