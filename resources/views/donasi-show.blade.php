<!-- resources/views/donasi-show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach($donasis as $donasi)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $donasi->nama }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $donasi->email }}</p>
                    <p class="card-text"><strong>Nominal Donasi:</strong> {{ $donasi->nominal_donasi }}</p>
                    <p class="card-text"><strong>Metode Pembayaran:</strong> {{ $donasi->metode_pembayaran }}</p>
                    <p class="card-text"><strong>Pesan:</strong> {{ $donasi->pesan }}</p>
                    <a href="{{ route('donasi.edit', $donasi->id) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
