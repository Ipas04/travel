@extends('frontend.layout.main')
@section('content')
<div class="destination_banner_wrap overlay" style="background-image: url('{{ asset('frontend/img/bromo/ijen.jpg')}}');">
  <div class="destination_text text-center">
    <h3>Bromo</h3>
    <p>Nikmati Liburanmu Bersama Kami</p>
  </div>
</div>
@yield('detail')
@endsection

