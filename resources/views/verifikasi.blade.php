<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEDEKAH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <nav class="navbar navbar-expand-lg border-bottom ">
        <div class="container-fluid">
        <img src="/img/logo.png" alt="" class="img-fluid" style="width: 150px; height: auto;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link fw-bold mt-2" href="{{ route('homeverifikasi') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fw-bold mt-2" href="{{ route('campaign.page') }}">Donation</a>
            </li>
              <li class="nav-item">
                <a class="nav-link fw-bold mt-2" href="#border">About</a>
              </li>
            <li class="nav-item">
                <a class="nav-link fw-bold mt-2" style="background-color: red; color: white; border-radius: 10px;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </ul>
        </div>
      </div>
    </nav>

<section id="dashboard">
    <div class="container justify-content-center mt-2">
        <div class="row border rounded justify-content-center mt-2">
            <div class="col justify-content-center ">
                <p class="text-dark" style="font-size: 5rem;">HELLO, {{ auth()->user()->nama }}</p>
                    <p class="text-secondary">Platform yang membantu #TemanPeduli untuk menggalang dana.</p>
            </div>
            <div class="row border justify-content-center mt-2" style="background-color: #DEEBFB; color: #0D6EFD;">
                <p class="text-center m-0"> Akun anda sudah terverifikasi</p>
            </div>

        </div>
    </div>
</section>
<section id="total">
    <div class="container ">
        <div class="row  p-4">
            <div class="col border mt-4 me-4 p-3">
                <div class="col">
                    <i class="bi bi-currency-exchange" style="font-size: 3rem; color: red;" ></i>
                </div>
                <div class="col">
                    <a href="{{ route ('donations-chart') }}" class="btn btn-primary mt-3">Total Donasi</a>
                </div>            
            </div>
            <div class="col border mt-4 me-4 p-3">
            <div class="col">
                    <i class="bi bi-currency-exchange" style="font-size: 3rem; color: red;"></i>
                </div>
                <div class="col">
                    <a href="{{ route('total_campaign') }}" class="btn btn-primary">Total Campaign</a>
                </div>
            </div>
            <div class="col border mt-4 me-4 p-3">
            <div class="col">
                    <i class="bi bi-currency-exchange" style="font-size: 3rem; color: red;"></i>
                </div>
                <div class="col">
                    <p class="fw-bold" style="font-size: 1rem;">Total Pencairan Donasi</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="buatdonasi">
    <div class="con">
    <div class="container mt-5">
        <div class="row">
            <div class="col text-center" style="background-color: #950000; color: white; padding: 20px; border-radius: 5px;">
                <p style="font-size: 1.5rem; margin: 0;">Buat Galang Dana Anda</p>
                <a href="{{route('buat.form')}}" 
                    class="btn" 
                    style="background-color: #ffcc00; color: #950000; border: none; padding: 10px 20px; font-size: 1rem; border-radius: 5px; margin-top: 20px;">
                        Mulai Galang Dana
                </a>

            </div>
        </div>
    </div>
    </div>
</section>


<section id="border">
    <div class="container mt-3">
        <div class="row border rounded  justify-content-center text-white" style="background-color:#950000;" >
            <div class="col">
            <p class="fw-bold mt-3 fs-2 text-white">SedekahIn</p>
                    <p class="text-white">Kami telah memiliki izin pengumpulan uang dan barang
                        untuk Non-Bencana di Kementerian Sosial Republik Indonesia
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