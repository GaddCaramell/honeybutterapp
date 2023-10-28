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
        .judul{
          font-family: fantasy
        }
        .korsel{
          padding-left: 20% ;
          padding-right: 20%;
          padding-top: 2%;
        }
        .buton{
          background-color: red;
          color: white;
          font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .c{
          width: 70%;
          display : flex;
          justify-content: center;
        }
        .w{
          width: 70%;
          display : flex;
          justify-content: center;
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
  </nav>
  {{-- Akhir Navbar --}}  
      {{-- nambah konten --}}
      <div class="alert alert-success" role="alert">
        {{session('notif')}}
      </div>
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
      <div class="container pt-5 c">
                  <a href="{{url('Mengadu')}}" class="btn btn-secondary w">Buat Laporan!!</a>
                    </div>
                  </div>
      {{-- akhir nambah konten --}}
      {{-- Footer --}}
      <div class="container pt-5">
        <footer class="py-3 my-4">
          <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary"> Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
          </ul>
          <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
        </footer>
      </div>
      
      <script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>