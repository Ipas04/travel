@extends('frontend.admin.layout.main')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between my-5">
        <h1>Pesanan</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Destinasi</th>
                <th>Dokumentasi</th>
                <th>Jumlah Orang</th>
                <th>Total Pembayaran</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->nama }}</td>
                    <td>{{ $order->nomor_telepon }}</td>
                    <td>{{ $order->alamat }}</td>
                    <td>{{  \Carbon\Carbon::parse($order->tanggal)->format('d-m-y') }}</td>
                    <td>{{ $order->destination->nama }}</td>
                    <td>{{ $order->dokumentasi ? 'Iya' : 'Tidak' }}</td>
                    <td>{{ $order->jumlah_orang }}</td>
                    <td>Rp {{ number_format($order->total_pembayaran, 0, ',', '.') }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="Cancel">
                                <div class="d-flex justify-content-end">
                                    <div class="m-2">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="Success">
                                <div class="d-flex justify-content-end">
                                    <div class="m-2">
                                        <button type="submit" class="btn btn-success btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection