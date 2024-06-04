@extends('frontend.destination.layout.main')
@section('detail')
<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="destination_info">
                    <h3>Susunan</h3>
                    <p>{{ $destinations->deskripsi }}</p>
                    @foreach ($destinations->destinationDetails as $item)
                        <div class="single_destination">
                            <h4>{{ $item->jam_mulai }}-{{ $item->jam_selesai }}</h4>
                            <p>
                                {{ $item->informasi }}
                            </p>
                        </div>
                    @endforeach
                </div>
                <div class="bordered_1px"></div>
                <div class="contact_join">
                    <h3 class="text-center">Booking</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{ route('order.create', $destinations->id) }}" class="btn btn-primary btn-block btn-lg">Book Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection