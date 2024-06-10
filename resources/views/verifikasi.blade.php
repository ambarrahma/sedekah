<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand fw-bold" href="#">SedekahIn</a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">SedekahIn</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex flex-column justify-content-between">
        <ul class="navbar-nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#total">Pencairan Dana</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#daftar">Riwayat Donasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#buatdonasi">Buat Donasi</a>
          </li>
        </ul>
        <ul class="navbar-nav flex-column mt-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Kembali ke Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<section id="dashboard">
    <div class="container justify-content-center p-4 mt-5">
        <div class="row border rounded  justify-content-center text-white"  >
            <div class="col " style=background-color:#DEEBFB;>
                    <p class="text-white">Dapatkan "Hadiah Kebaikan berupa Saldo Peduli dengan membagikan kode referral. 
                        Yuk #bantutakgentar dan terus kumpulin "Hadiah Kebaikan" yang melimpah dari Ayobantu" 
                    </p>
            </div>
        </div>
    </div>
    <div class="container justify-content-center mt-2">
        <div class="row border rounded justify-content-center mt-2">
            <div class="col justify-content-center ">
                    <p class="text-dark " style="font-size : 5rem;">HELLO, DEWI DINI</p>
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
                <p style="font-size: 1.5rem; margin: 0;">Buat Donasi Anda</p>
                <a href="{{route('buat.form')}}" 
                    class="btn" 
                    style="background-color: #ffcc00; color: #950000; border: none; padding: 10px 20px; font-size: 1rem; border-radius: 5px; margin-top: 20px;">
                        Mulai Donasi
                </a>

            </div>
        </div>
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
                <div class="col-12 mb-3 donation-item" data-date="2024-06-01">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Donasi untuk Pendidikan</h5>
                            <p class="card-text">Tanggal Donasi: 2024-06-01</p>
                            <p class="card-text">Jumlah: Rp 500.000</p>
                        </div>
                        <div class="col" style="position: relative; height: 100px; border: 1px solid #ccc;">
                            <button class="btn m-4" style="position: absolute; bottom: 0; right: 60px; background-color: green;">
                                <i class="bi bi-repeat" style="color: white; font-size: 32px;"></i>
                            </button>
                            <button class="btn m-4" style="position: absolute; bottom: 0; right: 0; background-color: red;">
                                <i class="bi bi-trash3" style="color: white; font-size: 32px;"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col-12 mb-3 donation-item" data-date="2024-06-08">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Donasi untuk Kesehatan</h5>
                            <p class="card-text">Tanggal Donasi: 2024-06-08</p>
                            <p class="card-text">Jumlah: Rp 300.000</p>
                        </div>
                        <div class="col" style="position: relative; height: 100px; border: 1px solid #ccc;">
                            <button class="btn m-4" style="position: absolute; bottom: 0; right: 60px; background-color: green;">
                                <i class="bi bi-repeat" style="color: white; font-size: 32px;"></i>
                            </button>
                            <button class="btn m-4" style="position: absolute; bottom: 0; right: 0; background-color: red;">
                                <i class="bi bi-trash3" style="color: white; font-size: 32px;"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3 donation-item" data-date="2024-06-15">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Donasi untuk Bencana Alam</h5>
                            <p class="card-text">Tanggal Donasi: 2024-06-15</p>
                            <p class="card-text">Jumlah: Rp 700.000</p>
                        </div>
                        <div class="col" style="position: relative; height: 100px; border: 1px solid #ccc;">
                            <button class="btn m-4" style="position: absolute; bottom: 0; right: 60px; background-color: green;">
                                <i class="bi bi-repeat" style="color: white; font-size: 32px;"></i>
                            </button>
                            <button class="btn m-4" style="position: absolute; bottom: 0; right: 0; background-color: red;">
                                <i class="bi bi-trash3" style="color: white; font-size: 32px;"></i>
                            </button>
                        </div>
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