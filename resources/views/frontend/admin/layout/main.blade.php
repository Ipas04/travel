<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>ngalam.id | Admin</title>
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
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css"/>
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Bromo Tour Admin
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard.index') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.destination.index') }}">Destinations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.order.index') }}">Orders</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </body>
</html>