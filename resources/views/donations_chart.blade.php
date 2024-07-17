<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations Chart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

    <div class="container mt-5">
        <h2>Total Donasi per Bulan</h2>
        <canvas id="donationsChart" width="400" height="200"></canvas>
    </div>

    {{-- <div class="container mt-5">
        <h2>Daftar Donasi</h2>
        <div class="row mt-4" id="donation-list">
            <!-- Daftar Donasi -->
            <div class="col-12 mb-3 donation-item">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nominal Donasi (Rp)</th>
                            <th scope="col">Metode Pembayaran</th>
                            <th scope="col">Pesan</th>
                            <th scope="col">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($donasis as $index => $donasi)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{ $donasi->nama }}</td>
                            <td>{{ $donasi->email }}</td>
                            <td>{{ number_format($donasi->nominal_donasi, 0, ',', '.') }}</td>
                            <td>{{ $donasi->metode_pembayaran }}</td>
                            <td>{{ $donasi->pesan }}</td>
                            <td>{{ $donasi->created_at->format('d-m-Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/donations-data')
                .then(response => response.json())
                .then(data => {
                    const labels = data.map(item => `Bulan ${item.month}`);
                    const totalDonasi = data.map(item => item.total);

                    const ctx = document.getElementById('donationsChart').getContext('2d');
                    const donationsChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Total Donasi',
                                data: totalDonasi,
                                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                borderColor: 'rgba(54, 162, 235, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
        });
    </script>
</body>
</html>
