<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Trà chanh yoyo" />
    <meta name="author" content="Anhv" />
    <title>Admin | @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('admin')}}/assets/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--bootstrap -->

    <link href="{{asset('admin')}}/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/material/material.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/css/material_style.css">
    <!-- Theme Styles -->
    <link href="{{asset('admin')}}/css/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{asset('admin')}}/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/formlayout.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin')}}/css/theme-color.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/sweet-alert/sweetalert.min.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}" />
    @yield('css')
<!-- start js include path -->
    <script src="{{asset('admin/assets/jquery.min.js')}}" ></script>
    <script src="{{asset('admin/assets/popper/popper.js')}}" ></script>
    <script src="{{asset('admin/assets/jquery.blockui.min.js')}}" ></script>
    <script src="{{asset('admin/assets/jquery.slimscroll.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('admin/assets/bootstrap/js/bootstrap.min.js')}}" ></script>
    <!-- Common js-->
    <script src="{{asset('admin/assets/app.js')}}" ></script>
    <script src="{{asset('admin/assets/layout.js')}}" ></script>
    <script src="{{asset('admin/assets/theme-color.js')}}" ></script>
    <!-- material -->
    <script src="{{asset('admin/assets/material/material.min.js')}}"></script>
    <script src="{{asset('admin/js/home.js')}}" ></script>
    @yield('js-top')
</head>
<!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
<div class="page-wrapper">
    <!-- start header -->
    <div class="page-header navbar navbar-fixed-top">
        <div class="page-header-inner ">
            <!-- logo start -->
            <div class="page-logo">
                <a href="index.html">
                    <span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
                    <span class="logo-default" >{{ config('app.name', 'YOYO') }}</span> </a>
            </div>
            <!-- logo end -->
            <ul class="nav navbar-nav navbar-left in">
                <li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
            </ul>
            <form class="search-form-opened" action="#" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search..." name="query">
                    <span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
                </div>
            </form>
            <!-- start mobile menu -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- end mobile menu -->
            <!-- start header menu -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- start language menu -->
                    <li class="dropdown language-switch">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="{{asset('admin')}}/img/flags/gb.png" class="position-left" alt=""> English <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="deutsch"><img src="{{asset('admin')}}/img/flags/vn.png" alt="Cờ Việt Nam"> Việt Nam</a>
                            </li>
                            <li>
                                <a class="deutsch"><img src="{{asset('admin')}}/img/flags/gb.png" alt=""> English</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end language menu -->
                    <!-- start notification dropdown -->
                    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge headerBadgeColor1"> 6 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Notifications</span></h3>
                                <span class="notification-label purple-bgcolor">New 6</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
                                            <span class="details">
                                                <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                                <b>John Micle </b>is now following you. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">7 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                                <b>Sneha Jogi </b>sent you a message. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">12 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                                <b>Ravi Patel </b>like your photo. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">15 mins</span>
                                            <span class="details">
                                                <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 hrs</span>
                                            <span class="details">
                                                <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="javascript:void(0)"> All notifications </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end notification dropdown -->
                    <!-- start message dropdown -->
                    <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge headerBadgeColor2"> 2 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3><span class="bold">Messages</span></h3>
                                <span class="notification-label cyan-bgcolor">New 2</span>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                    <li>
                                        <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('admin')}}/img/doc/doc2.jpg" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                	<span class="from"> Sarah Smith </span>
                                                	<span class="time">Just Now </span>
                                                </span>
                                            <span class="message"> Jatin I found you on LinkedIn... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('admin')}}/img/doc/doc3.jpg" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                	<span class="from"> John Deo </span>
                                                	<span class="time">16 mins </span>
                                                </span>
                                            <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('admin')}}/img/doc/doc1.jpg" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                	<span class="from"> Rajesh </span>
                                                	<span class="time">2 hrs </span>
                                                </span>
                                            <span class="message"> pls take a print of attachments. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('admin')}}/img/doc/doc8.jpg" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                	<span class="from"> Lina Smith </span>
                                                	<span class="time">40 mins </span>
                                                </span>
                                            <span class="message"> Apply for Ortho Surgeon </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                                <span class="photo">
                                                	<img src="{{asset('admin')}}/img/doc/doc5.jpg" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                	<span class="from"> Jacob Ryan </span>
                                                	<span class="time">46 mins </span>
                                                </span>
                                            <span class="message"> Request for leave application. </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-menu-footer">
                                    <a href="#"> All Messages </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- end message dropdown -->
                    <!-- start manage user dropdown -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle " src="{{asset('admin')}}/img/dp.jpg" />
                            <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{route('admin.user.profile')}}">
                                    <i class="icon-user"></i> Profile </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#changePassModalCenter">
                                    <i class="icon-settings"></i> Đổi mật khẩu
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="icon-logout"></i> Đăng xuất
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    <!-- end manage user dropdown -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                            <i class="material-icons">more_vert</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end header -->
    <!-- start color quick setting -->
    {{--@include('layouts.admin-quick-setting')--}}
    <!-- end color quick setting -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
        @include('layouts.admin-sidebar-left')
        <!-- end sidebar menu -->
        <!-- start page content -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title">@yield('breadcrumb')</div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('admin.index')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">@yield('breadcrumb')</li>
                        </ol>
                    </div>
                </div>
                @yield('content')

            </div>
        </div>
        <!-- end page content -->
        <!-- start chat sidebar -->
        @include('layouts.admin-sidebar-right')
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->

    <!--start change pass modal -->
    <div class="modal fade" id="changePassModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Đổi Mật Khẩu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="simpleFormEmail">Mật khẩu cũ</label>
                            <input type="password" class="form-control" id="oldPass" placeholder="Mật khẩu hiện tại">
                        </div>
                        <div class="form-group">
                            <label for="simpleFormPassword">Mật khẩu mới</label>
                            <input type="password" class="form-control" id="newPass" placeholder="Mật khẩu mới">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" onclick="changePass()">Lưu thay đổi</button>
                </div>
            </div>
        </div>
    </div>
    <!--end change pass modal -->
    <!-- start footer -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2019 &copy; Trà chanh YoYo - 72 Núi Vàng - Phường Trung Sơn - 035 337 3135
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- end footer -->
</div>

<script type="text/javascript" src="{{asset('admin/assets/sweet-alert/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    var url = '{{url()->current()}}'
    activeMenu(url);
</script>
@yield('js')
</body>
</html>