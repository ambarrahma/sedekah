<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <form class="d-flex" role="search">
                        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold mt-2" href="#donasi">Donation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold mt-2" href="#border">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                        <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="form">
  <form method="POST" action="{{ route('login.post') }}">
    @csrf
    <div class="container border mt-3">
        <p class="fw-bold p-3" style="font-size: 3rem;">Login</p>
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <button type="submit" class="mb-3 btn btn-primary">Masuk</button>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</form>
</section>

<section id="border">
    <div class="container mt-5">
        <div class="row border rounded justify-content-center text-white" style="background-color:#950000;">
            <div class="col">
                <p class="fw-bold mt-3 fs-2 text-white">ayobantu.com</p>
                <p class="text-white">Kami telah memiliki izin pengumpulan uang dan barang
                    untuk Non-Bencana di Kementerian Sosial Republik Indonesia
                    dengan surat izin 341/HUK-PS/2023
                </p>
                <i class="bi bi-facebook" style="font-size: 2rem;"></i>
                <i class="bi bi-instagram" style="font-size: 2rem;"></i>
            </div>
            <div class="col">
                <p class="fw-bold mt-3 fs-2 text-white text-end pe-5">Tentang</p>
                <p class="text-white">
                    <ul class="text-white text-end pe-5">Syarat dan Ketentuan</ul>
                    <ul class="text-white text-end pe-5">AyoBantu</ul>
                    <ul class="text-white text-end pe-5">Hubungi Kami</ul>
                    <ul class="text-white text-end pe-5">Partner kami</ul>
                </p>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
