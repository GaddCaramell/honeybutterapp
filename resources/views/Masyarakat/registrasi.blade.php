<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width : 400px;">
                <div class="card-body">
                    <h4 class="h4">Daftarkan Diri Anda</h4>
                    
                    @if (session('notif'))
                    
                    <div class="alert alert-success" role="alert">
                        {{session('notif')}}
                    </div>

                    @endif
                    {{-- Jika Validasi Gagal --}}
                    @if ($errors->any())
                    
                    <div class="alert alert-success" role="alert">
                        Yah Sorry Lo Gagal Bro..
                    </div>

                    @endif

                    <form action="{{ url('simpan') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                            @error('nik')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Nama Lengkap">
                                @error('nama')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" class="form-control" name="username" id="username"
                                placeholder="Username">
                                @error('username')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                                @error('password')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <label for="telpon" class="form-label">No Telpon</label>
                            <input type="text" class="form-control" name="telpon" id="telpon"
                                placeholder="08XXXXXXXXXX">
                                @error('telpon')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror    
                        </div>
                        <div class="mb-3">
                            <button class="btn form-control btn-primary mb-2">Registrasi</button>
                            <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                            <button class="btn form-control mb-2 mt-3"><a href="login">Sudah Punya Akun??</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
    