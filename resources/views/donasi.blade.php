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
<section id="form">
    <div class="container justify-content-center border mt-3">
    <div class="row justify-content-center m-3">
        <div class="col m-3 ">
        <img src="/img/gambarsedekah.jpeg" alt="" class="img-fluid">
        </div>
         <div class="col-md-6 align-items-center">
         <form >
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
            </div>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal Donasi</label>
                <input type="number" class="form-control" id="nominal" name="nominal" placeholder="Masukkan nominal donasi" required>
            </div>
            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
                    <option value="">Pilih metode pembayaran</option>
                    <option value="transfer_bank">Transfer Bank</option>
                    <option value="gopay">GoPay</option>
                    <option value="ovo">OVO</option>
                    <option value="dana">DANA</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan (opsional)</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="3" placeholder="Tambahkan pesan atau catatan (opsional)"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Donasi</button>
        </form>

            </div>
        </div>
    </div>
    <div class="container border mt-3 ">
    <div class="mt-3 justify-content-center ">
    <h2 class="fw-bold">Sedekah Jumat</h2>
    <p>
    Marilah kita sambut Jumat Berkah dengan penuh kebaikan dan keberkahan. Mari kita bersama-sama melangkah 
    untuk memberikan sedekah kepada sesama yang membutuhkan. Setiap rupiah yang kita berikan akan menjadi 
    sinar harapan bagi yang tengah mengalami kesulitan. Ingatlah, sedekah bukan hanya tentang memberi,
    tetapi juga tentang mempererat hubungan kita dengan Allah dan memperluas keberkahan dalam hidup kita.
    Bersama-sama, mari kita jadikan setiap Jumat Berkah sebagai kesempatan untuk berbagi dan menjadikan 
    dunia ini tempat yang lebih hangat bagi semua orang. Ayo, mari kita berikan yang terbaik dari diri kita 
    untuk meringankan beban sesama. Sampaikan sedekahmu dengan tulus dan ikhlas, karena setiap sedekah akan
    menjadi investasi terbaik untuk masa depan yang lebih baik.
    </p>
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