<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>

<body>

    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width:400px">
                <div class="card-body">
                    <h4 class="h4">Welcome</h4>
                    <form action="{{ url('simpanLoginAdmin') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" class="form-control" name="username" id="username"
                                placeholder="Username">
                            @error('username')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                            @error('password')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <button class="btn form-control btn-primary mb-2 mt-3" type="submit">LOGIN</button>
                                <button class="btn form-control mb-2 mt-3"><a href="registrasi">Register</a></button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    </form>


    <script src="js\bootstrap.bundle.min.js"></script>
</body>

</html>
