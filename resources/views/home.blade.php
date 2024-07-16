<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEDEKAH</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .progress {
            height: 30px;
        }
        .progress-bar {
            transition: background-color 0.5s;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            <form id="searchForm" class="d-flex mb-3">
                <input class="form-control me-2" type="search" id="searchQuery" placeholder="Cari campaign" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div id="searchResults"></div>
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
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/sedekah1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/sedekah1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/sedekah1.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
        <h1 class="row justify-content-center">Donasi bersama SedekahIn </h1>
        <hr>
        <div class="row" id="galangDanaContainer">
            
        </div>
    </div>
</section>

<section id="campaign">
    <div class="container mt-5 p-3">
        <h1 class="row justify-content-center">Donasi Umum </h1>
        <hr>
        <div class="row justify-content-center">
            @foreach ($galangDanaList as $galangDana)
                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url('images/' . $galangDana->gambar) }}" class="card-img-top image-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $galangDana->nama_galang_dana }}</h5>
                            <div class="progress">
                                <div id="progress-bar" class="progress-bar" role="progressbar" style="width: {{ $galangDana->target_donasi / 50000000 * 100 }}%;" aria-valuenow="{{ $galangDana->target_donasi / 50000000 * 100 }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p class="mt-2">Rp {{ number_format($galangDana->target_donasi, 0, ',', '.') }} terkumpul dari Rp 50.000.000</p>
                            <p class="text-muted">{{ $galangDana->nama_organisasi }}</p>
                            <a href="{{ route('donasi.form') }}" class="btn btn-primary">Donasi Sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@if(isset($galangDanaList))
    @foreach ($galangDanaList as $galangDana)
        <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
            <!-- Your campaign content goes here -->
        </div>
    @endforeach
@else
    <p>No campaigns found.</p>
@endif



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
                    <div class="col-9 pt-3">
                        <p class="fw-bold fs-3">{{ \App\Models\Donasi::count() }}</p>
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
                        <p class="fw-bold fs-3">Rp. {{ number_format(\App\Models\Donasi::sum('nominal_donasi'), 0, ',', '.') }}</p>
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

        <!-- Carousel untuk Donasi -->
        <div id="donasiCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($donasis as $index => $donasi)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $donasi->nama }}</h5>
                                <p class="card-text">Donasi: Rp {{ number_format($donasi->nominal_donasi, 0, ',', '.') }}</p>
                                <p class="card-text">Pesan: {{ $donasi->pesan }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#donasiCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#donasiCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var progressBar = document.getElementById('progress-bar');
            var progress = parseInt(progressBar.getAttribute('aria-valuenow'));

            if (progress < 100) {
                progressBar.classList.add('bg-warning');
            } else {
                progressBar.classList.add('bg-success');
            }
        });
    </script>
    
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
                            '<p class="card-text">' + item.deskripsiutama + '</p>' +
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (e) {
        $('#searchForm').on('submit', function (e) {
            e.preventDefault();

            var query = $('#searchQuery').val();

            $.ajax({
                type: 'GET',
                url: '{{ route('api.galang_dana.search') }}',
                data: { query: query },
                success: function (response) {
                    $('#searchResults').empty();

                    if (response.results.length > 0) {
                        response.results.forEach(function (item) {
                            $('#searchResults').append(`
                                <div class="col-12 col-md-6 col-lg-4 text-center mb-5">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('storage/images') }}/` + item.gambar + `" class="card-img-top image-fluid" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">` + item.nama_galang_dana + `</h5>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: ` + (item.target_donasi > 0 ? (100 * item.terkumpul / item.target_donasi) : 0) + `%;" aria-valuenow="` + item.terkumpul + `" aria-valuemin="0" aria-valuemax="` + item.target_donasi + `"></div>
                                            </div>
                                            <p class="mt-2">Rp ` + item.terkumpul.toLocaleString() + ` terkumpul dari Rp ` + item.target_donasi.toLocaleString() + `</p>
                                            <p class="text-muted">` + item.nama_organisasi + `</p>
                                            <a href="{{ route('donasi.form') }}" class="btn btn-primary">Donasi Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            `);
                        });
                    } else {
                        $('#searchResults').append('<p>No results found</p>');
                    }
                },
                error: function (response) {
                    alert('Error: ' + response.responseJSON.message);
                }
            });
        });
    });
</script>



</body>
</html>