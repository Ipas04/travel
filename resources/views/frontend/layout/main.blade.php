<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>ngalam.id</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/gijgo.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/slick.css')}}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css')}}    " />
        <link
            rel="stylesheet"
            href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"
            />
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}" />
    </head>
    <body>
        <header>
            <div class="header-area">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid">
                        <div class="header_bottom_border">
                            <div class="row align-items-center">
                                <div class="col-xl-2 col-lg-2">
                                    <div class="logo">
                                        <a href="/">
                                            <!-- <img src="{{ asset('frontend/img/logo1.png') }}" alt="Logo" width="100" height="100" /> -->
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li>
                                                    <a href="{{ route('dashboard.index') }}">home</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('about.index') }}">About</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('destination.index') }}">Destination</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('contact.index') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                    <div
                                        class="social_wrap d-flex align-items-center justify-content-end"
                                        >
                                        <div class="number">
                                            <p>
                                                <i class="fa fa-phone"></i>
                                                +62 812 8084 5753
                                            </p>
                                        </div>
                                        <div class="social_links d-none d-xl-block">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="seach_icon">
                                    <a
                                        data-toggle="modal"
                                        data-target="#exampleModalCenter"
                                        href="#"
                                        >
                                    <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-lg-4">
                            <div class="footer_widget">
                                <div class="footer_logo">
                                    <a href="#">
                                    <img src="img/footer_logo.png" alt="" />
                                    </a>
                                </div>
                                <p>
                                    5th flora, 700/D Jalan Sudirman, jakarta <br />
                                    Since Jakarta 2030 <br />
                                    <a href="#">+62 812 8084 5753</a> <br />
                                    <a href="#">ngalamindo@gmail.com</a>
                                </p>
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                            <i class="ti-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-lg-2">
                            <div class="footer_widget">
                                <h3 class="footer_title">Company</h3>
                                <ul class="links">
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#"> Gallery</a></li>
                                    <li><a href="#"> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <h3 class="footer_title">Popular destination</h3>
                                <ul class="links double_links">
                                    <li><a href="#">Kawah Bromo</a></li>
                                    <li><a href="#">Savana</a></li>
                                    <li><a href="#">Pura Luhur</a></li>
                                    <li><a href="#">Penanjakan</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-md-6 col-lg-3">
                            <div class="footer_widget">
                                <div class="single_insta">
                                <a href="#">
                                    <img src="{{ asset('frontend/img/instagram/1.png')}}" alt="" />
                                </a>
                                </div>
                                <div class="single_insta">
                                <a href="#">
                                    <img src="{{ asset('frontend/img/instagram/2.png')}}" alt="" />
                                </a>
                                </div>
                                <div class="single_insta">
                                <a href="#">
                                    <img src="{{ asset('frontend/img/instagram/3.png')}}" alt="" />
                                </a>
                                </div>
                                <div class="single_insta">
                                <a href="#">
                                    <img src="{{ asset('frontend/img/instagram/4.png')}}" alt="" />
                                </a>
                                </div>
                                <div class="single_insta">
                                <a href="#">
                                    <img src="{{ asset('frontend/img/instagram/5.png')}}" alt="" />
                                </a>
                                </div>
                                <div class="single_insta">
                                <a href="#">
                                    <img src="{{ asset('frontend/img/instagram/6.png')}}" alt="" />
                                </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div
            class="modal fade custom_search_pop"
            id="exampleModalCenter"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true"
            >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="serch_form">
                        <input type="text" placeholder="Search" />
                        <button type="submit">search</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{ asset('frontend/js/popper.min.js')}}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('frontend/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{ asset('frontend/js/ajax-form.js')}}"></script>
        <script src="{{ asset('frontend/js/waypoints.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('frontend/js/scrollIt.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
        <script src="{{ asset('frontend/js/nice-select.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.slicknav.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('frontend/js/plugins.js')}}"></script>
        <script src="{{ asset('frontend/js/gijgo.min.js')}}"></script>
        <script src="{{ asset('frontend/js/slick.min.js')}}"></script>
        <script src="{{ asset('frontend/js/contact.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.form.js')}}"></script>
        <script src="{{ asset('frontend/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('frontend/js/mail-script.js')}}"></script>
        <script src="{{ asset('frontend/js/main.js')}}"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                    rightIcon: '<span class="fa fa-caret-down"></span>',
                },
            });
        </script>
    </body>
</html>