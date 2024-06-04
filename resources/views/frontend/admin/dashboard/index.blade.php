@extends('frontend.admin.layout.main')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header text-white bg-primary">Destinations</div>
                <div class="card-body">
                    <h5 class="card-title">Total Destinations</h5>
                    <p class="card-text">{{ $destinationCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header text-white bg-warning">Orders</div>
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <p class="card-text">{{ $orderCount }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header text-white bg-secondary">Order Pending</div>
                <div class="card-body">
                    <h5 class="card-title">Total Orders Pending</h5>
                    <p class="card-text">{{ $pendingCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header text-white bg-success">Order Success</div>
                <div class="card-body">
                    <h5 class="card-title">Total Orders Success</h5>
                    <p class="card-text">{{ $successCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header text-white bg-danger">Order Cancel</div>
                <div class="card-body">
                    <h5 class="card-title">Total Orders Cancel</h5>
                    <p class="card-text">{{ $cancelCount }}</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection