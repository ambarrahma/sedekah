<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEDEKAH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg border-bottom ">
    <div class="container-fluid">
        <img href="{{ route('homeverifikasi') }}" src="/img/logo.png" alt="" class="img-fluid" style="width: 150px; height: auto;">
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
                    <a class="nav-link  " aria-disabled="true" href="/verifikasi">
                    <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 border">
    <h2 class="text-center mb-5 mt-3 border text-white" style="background-color:#950000;">Buat Galang Dana Anda</h2>
    <div class="row">
        
        <div class="col-md-8">
            <h4>Formulir Galang Dana</h4>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('galang_dana.store') }}" method="POST" id="donationForm" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="nama_galang_dana" class="form-label">Nama Galang Dana</label>
                    <input type="text" class="form-control" id="nama_galang_dana" name="nama_galang_dana" required>
                </div>
                <div class="mb-3">
                    <label for="nama_organisasi" class="form-label">Nama Organisasi</label>
                    <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" required>
                </div>
                <div class="mb-3">
                    <label for="kategori_donasi" class="form-label">Kategori Donasi</label>
                    <select class="form-select" id="kategori_donasi" name="kategori_donasi" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Bencana Alam">Bencana Alam</option>
                        <option value="Sosial">Sosial</option>
                        <option value="Lingkungan">Lingkungan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="target_donasi" class="form-label">Target Donasi (Rp)</label>
                    <input type="number" class="form-control" id="target_donasi" name="target_donasi" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-3"><i class="bi bi-send-fill"></i> Buat</button>
            </form>
        </div>
    </div>
</div>

<section id="border">
    <div class="container mt-5">
        <div class="row border rounded justify-content-center text-white" style="background-color:#950000;">
            <div class="col">
                <p class="fw-bold mt-3 fs-2 text-white">SedekahIn</p>
                <p class="text-white">Kami telah memiliki izin pengumpulan uang dan barang
                    untuk Non-Bencana di Kementerian Sosial Republik Indonesia
                    dengan surat izin 341/HUK-PS/2023
                </p>
                <i class="bi bi-facebook" style="font-size :2rem; p-3"></i>
                <i class="bi bi-instagram" style="font-size :2rem;"></i>
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
