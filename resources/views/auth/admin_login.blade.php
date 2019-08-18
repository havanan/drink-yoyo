<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Admin Login" />
    <meta name="author" content="Anhv" />
    <title>Admin Login</title>
    <!-- google font -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('admin/assets/iconic/css/material-design-iconic-font.min.css')}}">
    <!-- bootstrap -->
    <link href="{{asset('admin/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{asset('admin/css/extra_pages.css')}}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}" />
</head>
<body>
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post" action="{{route('admin.login.submit')}}">
                @csrf
					<span class="login100-form-logo">
						<img alt="" src="{{asset('admin/img/hospital.png')}}">
					</span>
                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                @include('layouts.message')
                <div class="wrap-input100 validate-input" data-validate = "Enter Email">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100" ></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter Password">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" ></span>
                </div>
                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
{{--                <div class="text-center p-t-30">--}}
{{--                    <a class="txt1" href="forgot_password.html">--}}
{{--                        Forgot Password?--}}
{{--                    </a>--}}
{{--                </div>--}}
            </form>
        </div>
    </div>
</div>
<!-- start js include path -->
<script src="{{asset('admin')}}/assets/jquery.min.js" ></script>
<!-- bootstrap -->
<script src="{{asset('admin')}}/assets/bootstrap/js/bootstrap.min.js" ></script>
<script src="{{asset('admin')}}/assets/login.js"></script>
<!-- end js include path -->
</body>

</html>