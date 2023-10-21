<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="bi bi-person-circle"></i>
            </button>
      <!-- Modal -->
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

      <div class="row">

        <div class="col-lg-3 col-md-6">
        <div class="count-box">

          <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
          <p>Lembaga</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">

          <span data-purecounter-start="0" data-purecounter-end="180" data-purecounter-duration="1" class="purecounter"></span>
          <p>DPRD</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="count-box">

          <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
          <p>Masyarakat Yang Puas</p>
        </div>
      </div>

      </div>
      {{-- <div class="container pt-5 my-4">
        <div class="card shadow">
            <div class="card" >
                <h5 class="card-header headertabel">Status Pengaduan</h5>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <table class=" table table-striped-columns">
                        <thead>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Telpon</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                        </tbody>
                      </table></p>
                </div>
            </div>
        </div>
        </div> --}}
      {{-- akhir nambah konten --}}
      <script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>