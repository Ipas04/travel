@extends('frontend.layout.main')
@section('content')
<div class="d-flex justify-center align-items-center">
    <div class="container text-center">
        <h1 class="my-5">Terima Kasih</h1>
        <p class="mb-4">Terima kasih telah melakukan transaksi. Silakan menunggu konfirmasi oleh admin melalui WhatsApp dengan nomor yang telah Anda inputkan.</p>
        <a href="{{ route('dashboard.index') }}" class="btn btn-primary mb-5">Kembali ke Dashboard</a>
    </div>
</div>
@endsection