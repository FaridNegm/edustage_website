<!doctype html>
<html lang="en">


<!-- Mirrored from skote-v-light.codeigniter.themesbrand.com/auth-login-2 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 12:23:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>

    <meta charset="utf-8" />
    <title>
        @lang('app.Login')
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('back') }}/assets/images/favicon.ico">

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ url('back') }}/assets/libs/owl.carousel/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ url('back') }}/assets/libs/owl.carousel/assets/owl.theme.default.min.css">

    <!-- Bootstrap Css -->
    <link href="{{ url('back') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ url('back') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ url('back') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


    <style>
        .auth-full-bg .bg-overlay{
            background-image: url("{{ url('back/images/settings/login7.jpg') }}");
            /* background-image: none; */
            /* background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; */
        }
    </style>

</head>

<body class="auth-body-bg">

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-8">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-50 flex-column">

                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center"  style="margin-top: 140px;">
                                                <h4 class="mb-3">
                                                    <span style="color: rgb(85 110 232);border: 1px solid rgb(85 110 232);padding: 3px 0px 3px 3px;margin: 0px 5px;"> R-Plus </span> For Software
                                                </h4>
                                                <div dir="ltr">
                                                    <div>
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4" style="color:#FFF;background: #788def;padding: 10px;opacity: .5;">
                                                                    @lang('app.please  enter your correct email and password to login work style application')
                                                                </p>
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
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-4">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="{{ url('back') }}/assets/images/logo-dark.png" alt="" height="18" class="auth-logo-dark">
                                        <img src="{{ url('back') }}/assets/images/logo-light.png" alt="" height="18" class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto">

                                    <div>
                                        <h5 class="text-primary">@lang('app.Welcome Back') !</h5>
                                        <p class="text-muted">@lang('app.Sign in to continue to R-Plus Work Style').</p>
                                    </div>

                                    <div class="mt-4">
                                        <form action="http://skote-v-light.codeigniter.themesbrand.com/">

                                            <div class="mb-3">
                                                <label for="email" class="form-label">@lang('app.email')</label>
                                                <input type="email" class="form-control" id="email" placeholder="@lang('app.email')">
                                            </div>

                                            <div class="mb-3">
                                                <div class="float-end">
                                                    <a href="{{ url('admin/forget_password') }}" class="text-danger">@lang('app.Forgot password')</a>
                                                </div>
                                                <label class="form-label">@lang('app.password')</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" placeholder="@lang('app.password')" aria-label="Password" aria-describedby="password-addon">
                                                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-check">
                                                <label class="form-check-label" for="remember-check">
                                                    @lang('app.Remember me')
                                                </label>
                                            </div>

                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">@lang('app.Log In')</button>
                                            </div>

{{--
                                            <div class="mt-4 text-center">
                                                <h5 class="font-size-14 mb-3">Sign in with</h5>

                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <a href="javascript::void()" class="social-list-item bg-primary text-white border-primary">
                                                            <i class="mdi mdi-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript::void()" class="social-list-item bg-info text-white border-info">
                                                            <i class="mdi mdi-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript::void()" class="social-list-item bg-danger text-white border-danger">
                                                            <i class="mdi mdi-google"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> --}}

                                        </form>
                                    </div>
                                </div>

                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>  R-Plus For Software <i class="mdi mdi-heart text-danger"></i></p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ url('back') }}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{ url('back') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('back') }}/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="{{ url('back') }}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ url('back') }}/assets/libs/node-waves/waves.min.js"></script>
    <!-- owl.carousel js -->
    <script src="{{ url('back') }}/assets/libs/owl.carousel/owl.carousel.min.js"></script>

    <!-- auth-2-carousel init -->
    <script src="{{ url('back') }}/assets/js/pages/auth-2-carousel.init.js"></script>

    <!-- App js -->
    <script src="{{ url('back') }}/assets/js/app.js"></script>

</body>


<!-- Mirrored from skote-v-light.codeigniter.themesbrand.com/auth-login-2 by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Sep 2021 12:23:43 GMT -->

</html>
