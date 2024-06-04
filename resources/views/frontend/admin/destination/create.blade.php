@extends('frontend.admin.layout.main')
@section('content')
<div class="d-flex justify-center align-items-center">
    <div class="container">
        <h1 class="my-5">Buat Destinasi Baru</h1>
        <form action="{{ route('admin.destination.store') }}" method="POST">
            @csrf
            <div class="row mb-4">
                <div class="col-lg-6">
                    <div class=form-group>
                        <h5 class="form-label">Destinasi Wisata</h5>
                        <input type="text" class="form-control" name="nama" value="" required/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <h5 class="form-label required">Harga</h5>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="harga" class="form-control" value="" required/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class=form-group>
                        <h5 class="form-label">Deskripsi</h5>
                        <textarea type="text" name="deskripsi" class="form-control" value="" required></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end mb-5">
                <div class="m-2">
                    <a href="{{ route('admin.destination.index') }}" class="btn btn-secondary">Batal</a>
                </div>
                <div class="m-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection