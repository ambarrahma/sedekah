<!-- resources/views/donasi-edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('donasi.update', $donasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $donasi->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $donasi->email }}" required>
        </div>
        <div class="mb-3">
            <label for="nominal_donasi" class="form-label">Nominal Donasi</label>
            <input type="number" class="form-control" id="nominal_donasi" name="nominal_donasi" value="{{ $donasi->nominal_donasi }}" required>
        </div>
        <div class="mb-3">
            <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
            <select class="form-select" id="metode_pembayaran" name="metode_pembayaran" required>
                <option value="transfer_bank" {{ $donasi->metode_pembayaran == 'transfer_bank' ? 'selected' : '' }}>Transfer Bank</option>
                <option value="gopay" {{ $donasi->metode_pembayaran == 'gopay' ? 'selected' : '' }}>GoPay</option>
                <option value="ovo" {{ $donasi->metode_pembayaran == 'ovo' ? 'selected' : '' }}>OVO</option>
                <option value="dana" {{ $donasi->metode_pembayaran == 'dana' ? 'selected' : '' }}>DANA</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan (opsional)</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3">{{ $donasi->pesan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Donasi</button>
    </form>
</div>
@endsection
