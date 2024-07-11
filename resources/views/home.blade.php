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
    <img href="{{ route('home') }}" src="/img/logo.png" alt="" class="img-fluid" style="width: 150px; height: auto;">
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
            <a class="nav-link fw-bold mt-2" href="{{ route('campaign.page') }}">Donation</a>
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

<section id="header">
    <div class="container-fluid mt-3">
        <img src="/img/sedekah1.png" alt="" class="img-fluid">
    </div>
</section>

<section id="kategori">
    <div class="container mt-4 ">
        <div class="row border rounded justify-content-center">
            <p class="fw-bold mt-3">KATEGORI DONASI</p>
            <div class="col text-center">
                <p style="font-size : 5rem;">
                <img src="/img/icon2.png" alt="" class="img-fluid" style="width: 100px; height: auto;">
                </p>
                <p class="fw-bold p-2">Lingkungan</p>
            </div>
            <div class="col text-center">
            <p style="font-size : 5rem;">
            <img src="/img/icon3.png" alt="" class="img-fluid" style="width: 100px; height: auto;">
                </p>
                <p class="fw-bold p-2">Pendidikan</p>
            </div>
            <div class="col text-center">
            <p style="font-size : 5rem;">
            <img src="/img/icon1.png" alt="" class="img-fluid" style="width: 100px; height: auto;">
                </p>
                <p class="fw-bold p-2">Kesehatan</p>
            </div>
            <div class="col text-center">
            <p style="font-size : 5rem;">
            <img src="/img/icon4.png" alt="" class="img-fluid" style="width: 100px; height: auto;">
                </p>
                <p class="fw-bold p-2">Sosial</p>
            </div>
        </div>
    </div>
</section>


<section id="campaign_tetap">
    <div class="container mt-5 p-3 ">
        <p>Donasi bersama SedekahIn </p>

        <div class="row" id="galangDanaContainer">
            
        </div>
    </div>
</section>

<section id="campaign"> 
    <div class="container mt-2 p-2">
        <p>Donasi Umum</p>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
            <div class="card" style="width: 18rem;">
                <img src="/img/gambarsedekah.jpeg" class="card-img-top image-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('donasi.form')}} " class="btn btn-primary">Donasi Sekarang</a>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
            <div class="card" style="width: 18rem;">
                <img src="/img/gambarsedekah.jpeg" class="card-img-top image-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('donasi.form')}} " class="btn btn-primary">Donasi Sekarang</a>
                </div>
            </div>

            </div>
            <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
            <div class="card" style="width: 18rem;">
                <img src="/img/gambarsedekah.jpeg" class="card-img-top image-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{route('donasi.form')}} " class="btn btn-primary">Donasi Sekarang</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section id="donasi">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5 border rounded  me-5">
                <div class="row pb-3">
                    <div class="col-2 text-center pt-3">
                    <i class="bi bi-calendar2-heart " style="font-size :3rem;"></i>
                    </div>
                    <div class="col-9 pt-3">
                        <p class="fw-medium ">Masih ingin berdonasi untuk mereka ?</p>
                        <a href="{{route('campaign.page')}}" class="btn btn-primary"> donasi sekarang</a>
                    </div>
                </div>
            </div>
            <div class="col-5 border rounded">
            <div class="row pb-3">
                    <div class="col-2 text-center pt-3">
                    <i class="bi bi-calendar2-heart " style="font-size :3rem;"></i>
                    </div>
                    <div class="col-9 pt-3">
                        <p class="fw-medium ">Ayo galang dana bagi mereka</p>
                        <a href="{{route('register')}}" class="btn btn-primary">galang dana</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="riwayat">
    <div class="container mt-5">
        <div class="row border rounded  justify-content-center" style="background-color:#950000;">
            <div class="col-5  me-5">
                <div class="row pb-3 text-white">
                    <div class="col-2 text-center pt-3">
                    <i class="bi bi-calendar2-heart " style="font-size :3rem;"></i>
                    </div>
                    <div class="col-9 pt-3 ">
                        <p class="fw-bold fs-3 ">60.000</p>
                        <p>#TemanPeduli yang telah berdonasi</p>
                    </div>
                </div>
            </div>
            <div class="col-5 ">
            <div class="row pb-3 text-white">
                    <div class="col-2 text-center pt-3">
                    <i class="bi bi-calendar2-heart " style="font-size :3rem;"></i>
                    </div>
                    <div class="col-9 pt-3">
                        <p class="fw-bold fs-3">Rp. 50.000.000</p>
                        <p>Dana Terkumpul</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="container mt-5">
    <div class="container">
        <h1>Donasi</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @foreach($donasis as $donasi)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $donasi->nama }}</h5>
                    {{-- <p class="card-text">Email: {{ $donasi->email }}</p> --}}
                    <p class="card-text">Donasi: {{ $donasi->nominal_donasi }}</p>
                    <p class="card-text">Pesan: {{ $donasi->pesan }}</p>
                    {{-- <p class="card-text">Metode Pembayaran: {{ $donasi->metode_pembayaran }}</p> --}}

                </div>
            </div>
        @endforeach
    </div>
</div>





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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                url: "https://gist.githubusercontent.com/ambarrahma/15c9bebae0c2b3a7a2d34222f3f29123/raw/81ad782db6a724b286aecb02dbff03b206919247/galang_dana.json",
                method: "GET",
                dataType: "json",
                success: function(data) {
                    var container = $('#galangDanaContainer');
                    data.forEach(function(item) {
                        var html = '<div class="col-12 col-md-6 col-lg-4 text-center mb-5">' +
                            '<div class="card" style="width: 18rem;">' +
                            '<img src="/img/gambarsedekah.jpeg" class="card-img-top image-fluid" alt="...">' +
                            '<div class="card-body">' +
                            '<h5 class="card-title">' + item.nama_galang_dana + '</h5>' +
                            '<p class="card-text">' + item.deskripsi + '</p>' +
                            '<a href="{{route('donasi.tetap')}}?id='+item.id+'" class="btn btn-primary">Donasi Sekarang</a>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        container.append(html);
                    });
                },
                error: function(xhr, status, error) {
                    console.error("Terjadi kesalahan saat mengambil data: ", status, error);
                }
            });
        });
    </script>


</body>
</html>