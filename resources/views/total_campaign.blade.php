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
                <div class="col-12 mb-3 donation-item" >
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Galang Dana</th>
                                <th scope="col">Nama Organisasi</th>
                                <th scope="col">Kategori Donasi</th>
                                <th scope="col">Target Donasi (Rp)</th>
                                <th scope="col">Donasi Terkumpul (Rp)</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galangDanaList as $index => $galangDana)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $galangDana->nama_galang_dana }}</td>
                                <td>{{ $galangDana->nama_organisasi }}</td>
                                <td>{{ $galangDana->kategori_donasi }}</td>
                                <td>{{ number_format($galangDana->target_donasi, 0, ',', '.') }}</td>
                                <td>{{ number_format($galangDana->terkumpul, 0, ',', '.') }}</td>
                                <td>{{ $galangDana->deskripsi }}</td>
                                <td>
                                    @if($galangDana->gambar)
                                    <img src="{{ asset('storage/images/' . $galangDana->gambar) }}" alt="Gambar" style="width: 100px; height: auto;">
                                    @else
                                    Tidak ada gambar
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('galang_dana.edit', $galangDana->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('galang_dana.destroy', $galangDana->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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