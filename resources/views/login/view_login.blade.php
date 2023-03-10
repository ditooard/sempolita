<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Login Sempolita</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <h1><strong>S E M P O L I T A</strong></h1>
        <p>Sistem Monitoring Posyandu Lansia dan Balita</p>
    </div>
    <div class="card-body">
        <p class="login-box-msg">Silahkan login untuk mengakses <b>SEMPOLITA</b></p>
        <form action="{{ url('login/proses') }}" method="post">
        @csrf
        <div class="input-group mb-3">
            <input autofocus type="text" class="form-control
            @error('username')
                is-invalid
            @enderror
            " placeholder="Username" name="username" value="{{ old('username') }}">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        
        <div class="input-group mb-3">
            <input type="password" class="form-control 
            @error('password')
                is-invalid
            @enderror" placeholder="Password" name="password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }} 
            </div>
            @enderror
        </div>
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
    </div>
</form>

<!-- jQuery -->
<script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
</body>
</html>
