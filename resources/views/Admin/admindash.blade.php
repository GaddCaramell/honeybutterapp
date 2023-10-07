<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aadmin</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        #sidebar{
            width: 250px;
        }
        #content{
            width: calc(100% - 250px);
        }
    </style>
</head>
<body>
    <div id="maindiv" class="d-flex vh-100">
        <div id="sidebar" class="d-flex justify-content-center vh-100 align-items-center">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link fs-4" href="#"><i class="bi bi-house-door-fill"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="#"><i class="bi bi-pencil-fill"> </i>Tanggapan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="#"><i class="bi bi-keyboard-fill"> </i>Validasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="#"><i class="bi bi-card-list"> </i>Registerasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="#"><i class="bi bi-box-arrow-in-right"> </i>Login</a>
                </li>
            </ul>
        </div>
        <div id="content">
            @yield('konten')
        </div>
    </div>
    <script src="js\bootstrap.bundle.min.js"></script>

</body>
</html>