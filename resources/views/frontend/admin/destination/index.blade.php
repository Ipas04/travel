@extends('frontend.admin.layout.main')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between my-5">
        <h1>Destinasi Wisata</h1>
        <a href="{{ route('admin.destination.create') }}" class="btn btn-primary">Tambah Destinasi</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $index => $destination)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $destination->nama }}</td>
                    <td>{{ strlen($destination->deskripsi) > 100 ? substr($destination->deskripsi, 0, 50) . '...' : $destination->deskripsi }}</td>
                    <td>Rp {{ number_format($destination->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('admin.destination.edit', $destination->id) }}" class="btn btn-dark">Edit</a>
                        <form action="{{ route('admin.destination.destroy', $destination->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection