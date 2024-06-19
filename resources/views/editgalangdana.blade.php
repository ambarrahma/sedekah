<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Galang Dana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg border-bottom">
    <div class="container-fluid">
        <img src="/img/logo.png" alt="" class="img-fluid" style="width: 150px; height: auto;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link fw-bold mt-2" href="/homeverifikasi">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold mt-2" href="#donasi">Donation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold mt-2" href="#border">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="/verifikasi">
                        <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 border">
    <h2 class="text-center mb-5 mt-3 border text-white" style="background-color:#950000;">Edit Galang Dana Anda</h2>
    <div class="row">
        <div class="col-md-8">
            <h4>Formulir Edit Galang Dana</h4>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('galang_dana.update', $galangDana->id) }}" method="POST" id="editDonationForm">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nama_galang_dana" class="form-label">Nama Galang Dana</label>
                    <input type="text" class="form-control" id="nama_galang_dana" name="nama_galang_dana" value="{{ $galangDana->nama_galang_dana }}" required>
                </div>
                <div class="mb-3">
                    <label for="nama_organisasi" class="form-label">Nama Organisasi</label>
                    <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" value="{{ $galangDana->nama_organisasi }}" required>
                </div>
                <div class="mb-3">
                    <label for="kategori_donasi" class="form-label">Kategori Donasi</label>
                    <select class="form-select" id="kategori_donasi" name="kategori_donasi" required>
                        <option value="Pendidikan" {{ $galangDana->kategori_donasi == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                        <option value="Kesehatan" {{ $galangDana->kategori_donasi == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                        <option value="Bencana Alam" {{ $galangDana->kategori_donasi == 'Bencana Alam' ? 'selected' : '' }}>Bencana Alam</option>
                        <option value="Sosial" {{ $galangDana->kategori_donasi == 'Sosial' ? 'selected' : '' }}>Sosial</option>
                        <option value="Lingkungan" {{ $galangDana->kategori_donasi == 'Lingkungan' ? 'selected' : '' }}>Lingkungan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="target_donasi" class="form-label">Target Donasi (Rp)</label>
                    <input type="number" class="form-control" id="target_donasi" name="target_donasi" value="{{ $galangDana->target_donasi }}" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $galangDana->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-3"><i class="bi bi-send-fill"></i> Update</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
