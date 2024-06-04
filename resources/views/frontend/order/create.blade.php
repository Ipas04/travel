@extends('frontend.layout.main')
@section('content')
<div class="d-flex justify-center align-items-center">
    <div class="container">
        <h1 class="my-5">Formulir Pemesanan</h1>
        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <input type="hidden" name="destination_id" value="{{ $destination->id }}"/>
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class=form-group>
                        <h5 class="form-label">Paket Trip</h5>
                        <input type="text" class="form-control" value="{{ $destination->nama }}" readonly/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class=form-group>
                        <h5 class="form-label">Harga /pax</h5>
                        <input type="text" name="harga" class="form-control" value="Rp {{ number_format($destination->harga, 0, ',', '.') }}" readonly/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-8">
                    <div class="form-group">
                        <h5 class="form-label required">Nama</h5>
                        <input type="text" name="nama" class="form-control" value="" required/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <h5 class="form-label required">Jumlah Pax</h5>
                        <input type="number" name="jumlah_orang" class="form-control" value="" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-4">
                    <div class="form-group">
                        <h5 class="form-label required">No. Telpon</h5>
                        <input type="text" name="nomor_telepon" class="form-control" value="" required/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <h5 class="form-label required">Alamat</h5>
                        <input type="text" name="alamat" class="form-control" value="" required/>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <h5 class="form-label required">Tanggal</h5>
                        <input type="date" name="tanggal" class="form-control" value="" id="tanggal" required/>
                    </div>
                </div>
            </div>
            <div class="form-group mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="dokumentasi"/>
                    <h5 class="ms-2 fw-bold">Dokumentasi (add Rp 100.000)</h5>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-5">
                <div class="m-2">
                    <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Batal</a>
                </div>
                <div class="m-2">
                    <button type="submit" class="btn btn-primary">Lanjutkan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection