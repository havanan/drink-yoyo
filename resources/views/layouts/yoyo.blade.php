<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Trà Chanh YoYo</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="Anhv">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="{{asset('yoyo')}}/stylesheets/bootstrap.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="{{asset('yoyo')}}/stylesheets/style.css">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('yoyo')}}/stylesheets/responsive.css">

    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/sweet-alert/sweetalert.min.css')}}">

    <link rel="shortcut icon" href="{{asset('yoyo')}}/favicon/favicon.png">

    @yield('css')

</head>
<body class="header_sticky">
<div class="boxed">

    <div class="overlay"></div>

    <!-- Preloader -->
    <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div><!-- /.preloader -->
    <section id="header" class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <ul class="flat-unstyled">
                            <li class="account">
                                <a href="#" title="">{{Auth::user()->name}}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="unstyled">
                                    <li>
                                        <a href="{{ route('logout') }}" title="">Đăng Xuất</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul><!-- /.unstyled -->
                            </li>
                        </ul><!-- /.flat-unstyled -->
                    </div><!-- /.col-md-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->
        <div class="header-middle">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div id="logo" class="logo">
                            <a href="{{route('home')}}" title="">
                                <img src="{{asset('img/yoyo.jpg')}}" alt="" style="width: 50%;">
                            </a>
                        </div><!-- /#logo -->
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-6">
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-middle -->
        <div class="header-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9 col-10">
                        <div class="today-deal mr-3">
                            <a href="{{route('home')}}" title="">Bán Hàng</a>
                        </div><!-- /.today-deal -->
                        <div class="today-deal">
                            <a href="{{route('billList')}}" title="">Bill Trong Ngày </a>
                        </div><!-- /.today-deal -->
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                    </div><!-- /.col-md-9 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-bottom -->
    </section><!-- /#header -->
    @yield('content')
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright"> Trà chanh YoYo - 72 Núi Vàng - Phường Trung Sơn - 035 337 3135 </p>
                    <p class="btn-scroll">
                        <a href="#" title="">
                            <img src="{{asset('yoyo')}}/images/icons/top.png" alt="">
                        </a>
                    </p>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.footer-bottom -->

</div><!-- /.boxed -->

<!-- Javascript -->
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/tether.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/waypoints.min.js"></script>
<!-- <script type="text/javascript" src="javascript/jquery.circlechart.js"></script> -->
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/easing.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/jquery.zoom.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/owl.carousel.js"></script>
{{--<script type="text/javascript" src="{{asset('yoyo')}}/javascript/smoothscroll.js"></script>--}}
<!-- <script type="text/javascript" src="javascript/jquery-ui.js"></script> -->
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/waves.min.js"></script>
<script type="text/javascript" src="{{asset('yoyo')}}/javascript/main.js"></script>
<script type="text/javascript" src="{{asset('admin/assets/sweet-alert/sweetalert.min.js')}}"></script>

@yield('js')

</body>

</html>