@extends('frontend.layout.main')
@section('content')
<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div
            style="background-image: url({{asset('frontend/img/bromo/bromo.jpg')}})"
            class="single_slider d-flex align-items-center overlay"
            >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Bromo</h3>
                            <p>Menggambarkan kemegahan pemandangan Gunung Bromo yang mengesankan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            style="background-image: url({{asset('frontend/img/bromo/Teletubies.jpg')}})"
            class="single_slider d-flex align-items-center overlay"
            >
            <style>
            </style>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Pura Luhur</h3>
                            <p>pesona pantai pasir putih yang memukau hingga aroma bunga-bunga tropis yang menyejukkan hati</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            style="background-image: url({{asset('frontend/img/bromo/rajaampat.jpg')}})"
            class="single_slider d-flex align-items-center overlay"
            >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Savana</h3>
                            <p></p>
                            <p>warna-warni terumbu karang bertemu dengan air laut yang biru jernih</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->
<!-- destination -->
<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_title text-center mb_70">
                    <h3>Popular Destination</h3>
                    <p>
                        Destinasi populer ini memikat para pengunjung dengan keindahan alamnya yang memukau, kekayaan budayanya yang mempesona, dan pengalaman yang tak terlupakan yang menanti di setiap sudutnya.
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($destinations as $destination)
                <div class="col-lg-4">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{asset('frontend/img/Bromo/'.$destination->id.'.jpg')}}" alt="" />
                        </div>
                        <div class="place_info">
                            <h3>{{ $destination->nama }}</h3>
                            <p>{{ strlen($destination->deskripsi) > 50 ? substr($destination->deskripsi, 0, 50) . '...' : $destination->deskripsi }}</p>
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
<!-- end -->
<div class="travel_variation_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="img/svg_icon/1.svg" alt="" />
                    </div>
                    <h3>Comfortable Journey</h3>
                    <p>
                        Dengan menggunakan layanan travel kami kita akan memberikan perjalanan yang sangat nyaman dengan memberikan fasilitas-fasilitas terbaik yang bisa kita berikan untuk anda.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="img/svg_icon/2.svg" alt="" />
                    </div>
                    <h3>Luxuries Hotel</h3>
                    <p>
                        Travel kami juga memberikan salah satu pelayanan terbaik kami yaitu menyediakan hotel dengan fasilitas yang sangat baik yang tentunya dapat membuat anda nyaman untuk istirahat.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="img/svg_icon/3.svg" alt="" />
                    </div>
                    <h3>Travel Guide</h3>
                    <p>
                        Kami juga memberikan pemandu - pemandu wisata terbaik kami kepada anda untuk memandu perjalanan kalian agar liburan kalian berjalan dengan baik dan lebih aman. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial_area  -->
<div class="testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="img/testmonial/author.png" alt="" />
                                    </div>
                                    <p>
                                        “Manusia tidak dapat menemukan samudra baru kecuali ia memiliki keberanian untuk melupakan pantai.“
                                    </p>
                                    <div class="testmonial_author">
                                        <h3>- Andre Gide</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="img/testmonial/author.png" alt="" />
                                    </div>
                                    <p>
                                        “Kebahagiaan adalah melepaskan apa yang menurut Anda hidup Anda seharusnya terlihat dan merayakannya untuk semua yang ada.”
                                    </p>
                                    <div class="testmonial_author">
                                        <h3>- Mandy Hale</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="img/testmonial/author.png" alt="" />
                                    </div>
                                    <p>
                                        “Dunia adalah sebuah buku, dan mereka yang tidak bepergian hanya membaca satu halaman.”
                                    </p>
                                    <div class="testmonial_author">
                                        <h3>- Santo Agustinus</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->
@endsection