<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <nav class="navbar navbar-expand-lg border-bottom ">
    <div class="container-fluid">
    <img src="/img/logo.png" alt="" class="img-fluid" style="width: 150px; height: auto;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
          <form class="d-flex" role="search">
        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold mt-2" href="#donasi">Donation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold mt-2" href="#border">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " aria-disabled="true" href="{{route('sedekah.form')}}">
          <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
          </a>
        </li>
      </ul>
      
    </div>

  </div>
</nav>
  <body>
<section id="form">   
  <form action="{{route('sedekah.formproses')}}" method="POST">
    @csrf
    @method('POST')
    <div class="container border mt-3">
        <p class="fw-bold p-3" style="font-size :3rem; ">Daftarkan Akun Anda </p>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama </label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Kami tidak akan pernah membagikan email Anda dengan orang lain.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
            <input name="kata_sandi" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputTelepon" class="form-label">Telepon</label>
          <input name="telepon" type="text" class="form-control" id="exampleInputTelepon">
      </div>
      <div class="mb-3">
          <label for="exampleInputAlamat" class="form-label">Alamat</label>
          <input name="alamat" type="text" class="form-control" id="exampleInputAlamat">
      </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="mb-3 btn btn-primary">Daftar</button>
        <a href="{{ route('login')}}"> Sudah punya Akun ? </a >
  </div>
</form>
</section>
<section id="border">
    <div class="container mt-5">
        <div class="row border rounded  justify-content-center text-white" style="background-color:#950000;" >
            <div class="col">
            <p class="fw-bold mt-3 fs-2 text-white">SedekahIn</p>
                    <p class="text-white">Kami telah memiliki izin pengumpulan uang dan barang
                        untuk Non-Bencana di 
                        Kementerian Sosial Republik Indonesia
                        dengan surat izin 341/HUK-PS/2023
                    </p>
                    <i class="bi bi-facebook" style="font-size :2rem; p-3"></i>
                    <i class="bi bi-instagram" style="font-size :2rem;" ></i>
            </div>

            <div class="col">
                <p class="fw-bold mt-3 fs-2 text-white text-end pe-5">Tentang</p>
                <p class="text-white">
                    <ul class="text-white text-end pe-5">Syarat dan Ketentuan</ul>
                    <ul class="text-white text-end pe-5">SedekahIn</ul>
                    <ul class="text-white text-end pe-5">Hubungi Kami</ul>
                    <ul class="text-white text-end pe-5">Partner kami</ul>
                </p>
            </div>
        </div>
    </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>