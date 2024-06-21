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
                    <p  class="fw-bold" style="font-size: 1rem;">Total donasi</p>
                </div>
            </div>
            <div class="col border mt-4 me-4 p-3">
            <div class="col">
                    <i class="bi bi-currency-exchange" style="font-size: 3rem; color: red;"></i>
                </div>
                <div class="col">
                    <p class="fw-bold" style="font-size: 1rem;">Total Campaign</p>
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

<section id="daftar">
    <div class="container border mt-5">
        <h2 class="text-center pt-2 mt-3 border pb-2 text-white" style="background-color:#950000;">Daftar Galang Dana Anda</h2>
        <div class="row mt-4">
            <div class="col-md-3">
                <label for="filter" class="form-label">Filter Per Minggu</label>
                <input type="week" class="form-control" id="filter" onchange="filterDonations()">
            </div>
        </div>
        <div class="row mt-4" id="donation-list">
            <!-- Daftar Galang Dana -->
            @foreach ($galangDanaList as $galangDana)
                <div class="col-12 mb-3 donation-item" data-date="{{ $galangDana->created_at->format('Y-m-d') }}">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('storage/images/'.$galangDana->gambar) }}" alt="Gambar Galang Dana" style="max-width: 200px; max-height: 200px;">
                            <h5 class="card-title">{{ $galangDana->nama_galang_dana }}</h5>
                            <p class="card-text">Nama Organisasi: {{ $galangDana->nama_organisasi }}</p>
                            <p class="card-text">Kategori Donasi: {{ $galangDana->kategori_donasi }}</p>
                            <p class="card-text">Tanggal Donasi: {{ $galangDana->created_at->format('Y-m-d') }}</p>
                            <p class="card-text">Jumlah: Rp {{ number_format($galangDana->target_donasi, 0, ',', '.') }}</p>
                            <p class="card-text">Deskripsi: {{ $galangDana->deskripsi }}</p>
                            <a href="{{ route('galang_dana.edit', $galangDana->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('galang_dana.destroy', $galangDana->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



<section id="daftar">
    <div class="container  border mt-5">
        <h2 class="text-center pt-2 mt-3 border pb-2 text-white" style="background-color:#950000;":>Daftar Donasi Anda</h2>
            <div class="row mt-4">
                <div class="col-md-3">
                    <label for="filter" class="form-label">Filter Per Minggu</label>
                    <input type="week" class="form-control" id="filter" onchange="filterDonations()">
                </div>
            </div>
            <div class="row mt-4" id="donation-list">
                <!-- Daftar Donasi -->

                <div class="container">
                    {{-- @foreach($donasis as $donasi)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $donasi->nama }}</h5>
                            <p class="card-text">Email: {{ $donasi->email }}</p>
                            <p class="card-text">Nominal Donasi: {{ $donasi->nominal_donasi }}</p>
                            <p class="card-text">Metode Pembayaran: {{ $donasi->metode_pembayaran }}</p>
                            <p class="card-text">Pesan: {{ $donasi->pesan }}</p>
                        </div>
                    </div>
                @endforeach --}}
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