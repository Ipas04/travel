@extends('frontend.destination.layout.main')
@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Destinations</h3>
                        <p>Pilih Liburan Anda Sesuai yang Diinginkan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($destinations as $destination)
                        <div class="col-lg-4">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{asset('frontend/img/Bromo/'.$destination->id.'.jpg')}}" alt="" />
                                </div>
                                <div class="place_info">
                                    <h3>{{ $destination->nama }}</h3>
                                    <p>{{ $destination->deskripsi }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="">
                                            <a href="#" class="btn btn-primary">Rp {{ number_format($destination->harga, 0, ',', '.') }}</a>
                                        </div>
                                        <div class="">
                                            <a href="{{ route('destination.show', $destination->id) }}" class="btn btn-primary">Book Now! <span><i class="fa fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection