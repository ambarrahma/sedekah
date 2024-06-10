<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5 border">
        <h2 class="text-center mb-5 mt-3 border text-white" style="background-color:#950000;">Buat Donasi Anda</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <h4>Kategori Donasi</h4>
                <ul class="list-group category-list">
                    <li class="list-group-item">
                        <a href="#"><i class="bi bi-bookmark-fill"></i> Pendidikan</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="bi bi-heart-fill"></i> Kesehatan</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="bi bi-life-preserver"></i> Bencana Alam</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="bi bi-people-fill"></i> Sosial</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#"><i class="bi bi-tree-fill"></i> Lingkungan</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">
                <h4>Formulir Donasi</h4>
                <form id="donationForm">
                    <div class="mb-3">
                        <label for="donorName" class="form-label">Nama Donatur</label>
                        <input type="text" class="form-control" id="donorName" required>
                    </div>
                    <div class="mb-3">
                        <label for="donorEmail" class="form-label">Email Donatur</label>
                        <input type="email" class="form-control" id="donorEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="donationCategory" class="form-label">Kategori Donasi</label>
                        <select class="form-select" id="donationCategory" required>
                            <option value="">Pilih Kategori</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Bencana Alam">Bencana Alam</option>
                            <option value="Sosial">Sosial</option>
                            <option value="Lingkungan">Lingkungan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="donationAmount" class="form-label">Jumlah Donasi (Rp)</label>
                        <input type="number" class="form-control" id="donationAmount" required>
                    </div>
                    <div class="mb-3">
                        <label for="donationMessage" class="form-label">Pesan untuk Penerima</label>
                        <textarea class="form-control" id="donationMessage" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3"><i class="bi bi-send-fill"></i> Donasi</button>
                </form>
            </div>
        </div>
    </div>

<section id="border">
    <div class="container mt-5">
        <div class="row border rounded  justify-content-center text-white" style="background-color:#950000;" >
            <div class="col">
            <p class="fw-bold mt-3 fs-2 text-white">ayobantu.com</p>
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
                    <ul class="text-white text-end pe-5">AyoBantu</ul>
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