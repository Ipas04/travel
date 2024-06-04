@extends('frontend.admin.layout.main')
@section('content')
<div class="d-flex justify-center align-items-center">
    <div class="container">
        <h1 class="my-5">Detail Pemesanan</h1>
        <div class="card rounded shadow mb-5">
            <div class="card-body">
                <form action="{{ route('admin.order.edit', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="pb-3 my-auto">
                                <h5>Destinasi</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>Jumlah Pax</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>Nama Pemesan</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>Nomor Telepon</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>Alamat Penjemputan</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>Tanggal Penjemputan</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>Dokumentasi</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h3>Total Pembayaran</h3>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="pb-3 my-auto">
                                <h5>{{ $order->destination->nama }}</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>{{ $order->jumlah_orang }} orang</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>{{ $order->nama }}</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>{{ $order->nomor_telepon }}</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>{{ $order->alamat }}</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>{{ \Carbon\Carbon::parse($order->tanggal)->format('d F Y') }}</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h5>{{ $order->dokumentasi ? 'Iya' : 'Tidak' }}</h5>
                            </div>
                            <div class="pb-3 my-auto">
                                <h3>Rp {{ number_format($order->total_pembayaran, 0, '.', '.') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="m-2">
                            <button type="submit" class="btn btn-danger">Tolak Pesanan</button>
                        </div>
                        <div class="m-2">
                            <a href="{{ route('order.index') }}" class="btn btn-success">Terima Pesanan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection