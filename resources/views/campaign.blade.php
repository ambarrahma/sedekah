<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
          <a class="nav-link  " aria-disabled="true" href="{{route('register')}}">
          <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
          </a>
        </li>
      </ul>
      
    </div>

  </div>
</nav>

  <section id="campaign">
        <div class="container mt-5 p-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="/img/gambarsedekah.jpeg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('donasi.form')}}" class="btn btn-primary">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="/img/gambarsedekah.jpeg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('donasi.form')}}" class="btn btn-primary">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="/img/gambarsedekah.jpeg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title 3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('donasi.form')}}" class="btn btn-primary">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="/img/gambarsedekah.jpeg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title 4</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('donasi.form')}}" class="btn btn-primary">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="/img/gambarsedekah.jpeg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title 5</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('donasi.form')}}" class="btn btn-primary">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="/img/gambarsedekah.jpeg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title 6</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('donasi.form')}}" class="btn btn-primary">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="border">
    <div class="container mt-5">
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