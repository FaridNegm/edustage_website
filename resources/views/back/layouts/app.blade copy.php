<!DOCTYPE html>
<html lang="en" dir="rtl">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Dashfox - Laravel Admin & Dashboard Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework"/>

	<title>
		@yield('title')
	</title>

		<link rel="icon" href="{{ url('back') }}/images/settings/fiv.png" type="image/x-icon"/>
		<link href="{{ url('back') }}/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
		<link href="{{ url('back') }}/assets/plugins/icons/icons.css" rel="stylesheet">
		<link href="{{ url('back') }}/assets/plugins/sidebar/sidebar.css" rel="stylesheet">
		<link rel="stylesheet" href="{{ url('back') }}/assets/css-rtl/sidemenu.css">
		<link href="{{ url('back') }}/assets/css-rtl/style.css" rel="stylesheet">
		<link href="{{ url('back') }}/assets/css-rtl/style-dark.css" rel="stylesheet">
		<link id="theme" href="{{ url('back') }}/assets/css-rtl/colors/color.css" rel="stylesheet">
		<link href="{{ url('back') }}/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />
		<link href="{{ url('back') }}/assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">
        <link href="{{ url('back') }}/assets/plugins/jqvmap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
		<link href="{{ url('back') }}/assets/css-rtl/skin-modes.css" rel="stylesheet" />
		<link href="{{ url('back') }}/assets/css-rtl/animate.css" rel="stylesheet">
		<link href="{{ url('back') }}/assets/switcher/css/switcher-rtl.css" rel="stylesheet">
		<link href="{{ url('back') }}/assets/switcher/demo.css" rel="stylesheet">
		<link href="{{ url('back') }}/assets/plugins/notify/css/notifIt.css" rel="stylesheet"/>

		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

		@yield('header')

		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600&display=swap" rel="stylesheet">
        <link href="{{ url('back') }}/assets/css/custom.css" rel="stylesheet" />
		<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">

        {{-- <link href="{{ url('back') }}/assets/css/skin-modes.css" rel="stylesheet" />
        <link href="{{ url('back') }}/assets/css/animate.css" rel="stylesheet">
        <link href="{{ url('back') }}/assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="{{ url('back') }}/assets/switcher/demo.css" rel="stylesheet"> --}}

		<style>
			.modal{
				z-index: 100000;
			}
			td, th{
				vertical-align: middle !important;
			}
			@media only screen and (max-width: 600px){
				.noti_to_parent, .noti_to_class {
					display: none;
				}
			}
		</style>

</head>

<body  class="main-body light-theme app sidebar-mini active leftmenu-color">

    <!-- Start Switcher -->
	<div class="switcher-wrapper ">
		<div class="demo_changer">
			<div class="form_holder sidebar-right1">
				<div class="tabs-menu">
					<ul class="nav panel-tabs">
						<li><a class="active" title="Themes" href="#switcher1" data-toggle="tab"><i class="fe fe-droplet mr-1"></i> Themes</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" id="switcher1">
						<div class="row">
							<div class="predefined_styles">
								<div class="swichermainleft border-top  mt-2 text-center">
									<div class="p-3">
										<a href="index.html" class="btn btn-primary btn-block mt-0">LTR VERSION</a>
										<a href="../rtl/index-2.html" class="btn btn-success btn-block ">RTL VERSION</a>
									</div>
								</div>
								<div class="swichermainleft border-top  mt-2 text-center">
									<div class="p-3">
										<a href="https://laravel.spruko.com/dashfox" class="btn btn-primary btn-block mt-0">View Demo</a>
										<a href="https://themeforest.net/item/dashfox-dashboard-html-template/28122999" class="btn btn-secondary btn-block">Buy Now</a>
										<a href="https://themeforest.net/user/sprukosoft/portfolio" class="btn btn-success btn-block">Our Portfolio</a>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Body Skins</h4>
									<div class="switch_section">
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Default Body</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch" id="myonoffswitch7" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch7" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Body Style1</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch" id="myonoffswitch6" class="onoffswitch2-checkbox">
												<label for="myonoffswitch6" class="onoffswitch2-label"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Leftmenu Styles</h4>
									<div class="switch_section">
										<div class="switch-toggle horizontal-light-switcher d-flex">
											<span class="mr-auto">Leftmenu Light</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch9" class="onoffswitch2-checkbox">
												<label for="myonoffswitch9" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Leftmenu Color</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch10" class="onoffswitch2-checkbox" checked>
												<label for="myonoffswitch10" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle horizontal-Dark-switcher d-flex">
											<span class="mr-auto">Leftmenu Dark</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch11" class="onoffswitch2-checkbox">
												<label for="myonoffswitch11" class="onoffswitch2-label"></label>
											</div>
										</div>
										<div class="switch-toggle d-flex">
											<span class="mr-auto">Reset Leftmenu Styles</span>
											<div class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch13" class="onoffswitch2-checkbox">
												<label for="myonoffswitch13" class="onoffswitch2-label"></label>
											</div>
										</div>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Color Skins</h4>
									<div class="skin-body">
										<a class="wscolorcode1 blackborder color1" data-theme="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color.css" href="#"></a>
										<a class="wscolorcode1 blackborder color2" data-theme="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color2.css" href="#"></a>
										<a class="wscolorcode1 blackborder color3" data-theme="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color3.css" href="#"></a>
										<a class="wscolorcode1 blackborder color4" data-theme="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color4.css" href="#"></a>
										<a class="wscolorcode1 blackborder color5" data-theme="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color5.css" href="#"></a>
										<a class="wscolorcode1 blackborder color6" data-theme="https://laravel.spruko.com/dashfox/ltr/assets/css/colors/color6.css" href="#"></a>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Skin Modes</h4>
									<div class="skin-body light-pattern">
										<a class="" href = "#"><img class="theme-image1 mb-3" id="myonoffswitchimg1" src="assets/switcher/images/themes/1.jpg" alt="img"></a>
										<a class="" href = "#"><img class="theme-image1 mb-3" id="myonoffswitchimg2" src="assets/switcher/images/themes/2.jpg" alt="img"></a>
									</div>
								</div>
								<div class="swichermainleft">
									<h4>Navigation</h4>
									<div class="skin-body light-pattern">
										<p class="font-weight-semibold">Leftmenu Navigation</p>
										<a class="" href="vertical.html"><img class="theme-image1 mb-3" src="assets/switcher/images/themes/3.jpg" alt="img"></a>
										<p class="font-weight-semibold mt-4">Horizontal Navigation</p>
										<a class="" href="horizontal.html"><img class="theme-image1 mb-3" src="assets/switcher/images/themes/1.jpg" alt="img"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Switcher -->

    <!-- Loader -->
	<div id="global-loader">
		<img src="{{ url('back') }}/assets/img/loader-2.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

    <!-- main-sidebar -->
        @include('back.layouts.sidebar')
	<!-- main-sidebar -->
	<!-- main-content -->
	<div class="main-content app-content">

    <!-- main-header -->
        @include('back.layouts.navbar')
    <!-- /main-header -->
        <!-- container -->
        <div class="container-fluid mg-t-20">

            @yield('content')

        </div>
        <!-- Container closed -->

	</div>
	<!-- main-content closed -->

    <!-- Sidebar-right-->
	<div class="sidebar sidebar-right sidebar-animate">
		<div class="panel panel-primary card mb-0 box-shadow">
			<div class="tab-menu-heading border-0 p-3">
				<div class="card-title mb-0">Notifications</div>
				<div class="card-options ml-auto">
					<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
				</div>
			</div>
			<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
				<div class="tabs-menu border-bottom">
					<!-- Tabs -->
					<ul class="nav panel-tabs">
						<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="fe fe-user mr-1"></i> Profile</a></li>
						<li><a href="#side2" data-toggle="tab"><i class="fe fe-users mr-1"></i> Contacts</a></li>
						<li><a href="#side3" data-toggle="tab"><i class="fe fe-settings mr-1"></i> Settings</a></li>
					</ul>
				</div>
				                    <div class="tab-content">
					<div class="tab-pane active" id="side1">
						<div class="card-body text-center">
							<div class="dropdown user-pro-body">
								<div class="">
									<img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="assets/img/faces/6.jpg"><span class="avatar-status profile-status bg-green"></span>
								</div>
								<div class="user-info mg-t-20">
									<h6 class="font-weight-semibold  mt-2 mb-0">Mintrona Pechon</h6>
									<span class="mb-0 text-muted">Premium Member</span>
								</div>
							</div>
						</div>
						<a class="dropdown-item d-flex pd-y-15 border-bottom border-top" href="#">
							<div class="d-flex"><i class="far fa-user mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">My Profile</h6>
									<p class="tx-12 mb-0 text-muted">Profile Personal information</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="#">
							<div class="d-flex"><i class="far fa-edit mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Edit Profile</h6>
									<p class="tx-12 mb-0 text-muted">Profile Edit information</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="#">
							<div class="d-flex"><i class="far fa-clock mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Activity Logs</h6>
									<p class="tx-12 mb-0 text-muted">Activity information</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="#">
							<div class="d-flex"><i class="fas fa-sliders-h mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Account Settings</h6>
									<p class="tx-12 mb-0 text-muted">Settings Information</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
						<a class="dropdown-item d-flex pd-y-15 border-bottom" href="signin.html">
							<div class="d-flex"><i class="fas fa-sign-out-alt mr-3 tx-20 mg-t-5 text-muted"></i>
								<div>
									<h6 class="mb-0">Sign Out</h6>
									<p class="tx-12 mb-0 text-muted">Account Signout</p>
								</div>
							</div>
							<div class="ml-auto mg-t-8"><i class="fe fe-chevron-right"></i></div>
						</a>
					</div>
					<div class="tab-pane" id="side2">
						<div class="list-group list-group-flush ">
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
									<p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									<p class="mb-0 tx-12 text-muted">alinaaernier@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/13.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
									<p class="mb-0 tx-12 text-muted">mozellebelt@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/7.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									<p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/2.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/11.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
									<p class="mb-0 tx-12 text-muted">florindacarasco@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/9.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
									<p class="mb-0 tx-12 text-muted">alinabernier@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
									<p class="mb-0 tx-12 text-muted">zulamclaughin@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="assets/img/faces/4.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
									<p class="mb-0 tx-12 text-muted">isidroheide@gmail.com</p>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="side3">
						<a class="dropdown-item bg-gray-100 pd-y-10" href="#">
							Account Settings
						</a>
						<div class="card-body">
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Updates Automatically</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Allow Location Map</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Contacts</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Notication</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Tasks Statistics</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Email Notification</span>
								</label>
							</div>
						</div>
						<a class="dropdown-item bg-gray-100 pd-y-10" href="#">
							General Settings
						</a>
						<div class="card-body">
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show User Online</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Website Notication</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Show Recent activity</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Logout Automatically</span>
								</label>
							</div>
							<div class="form-group mg-b-10">
								<label class="custom-switch pl-0">
									<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description mg-l-10">Aloow All Notifications</span>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/Sidebar-right-->

    <!-- Footer opened -->
        @include('back.layouts.footer')
	<!-- Footer closed -->
    <!-- Back-to-top -->

	<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

	<!-- Jquery js-->
	<script src="{{ url('back') }}/assets/plugins/jquery/jquery.min.js"></script>

	<!-- Bootstrap4 js-->
	<script src="{{ url('back') }}/assets/plugins/bootstrap/popper.min.js"></script>
	<script src="{{ url('back') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Ionicons js-->
	<script src="{{ url('back') }}/assets/plugins/ionicons/ionicons.js"></script>

	<!-- Moment js -->
	<script src="{{ url('back') }}/assets/plugins/moment/moment.js"></script>

	<!-- P-scroll js -->
	<script src="{{ url('back') }}/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="{{ url('back') }}/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

	<!-- Sidebar js -->
	<script src="{{ url('back') }}/assets/plugins/side-menu/sidemenu.js"></script>

	<!-- Rating js-->
	<script src="{{ url('back') }}/assets/plugins/rating/jquery.rating-stars.js"></script>
	<script src="{{ url('back') }}/assets/plugins/rating/jquery.barrating.js"></script>

	<!-- Suggestion js-->
	<script src="{{ url('back') }}/assets/plugins/suggestion/jquery.input-dropdown.js"></script>
	<script src="{{ url('back') }}/assets/js/search.js"></script>

	<!-- Right-sidebar js -->
	<script src="{{ url('back') }}/assets/plugins/sidebar/sidebar.js"></script>
	<script src="{{ url('back') }}/assets/plugins/sidebar/sidebar-custom.js"></script>

	<!-- Sticky js-->
	<script src="{{ url('back') }}/assets/js/sticky.js"></script>

	<!-- eva-icons js -->
	<script src="{{ url('back') }}/assets/plugins/eva-icons/eva-icons.min.js"></script>


	<!--Internal  Chart.bundle js -->
	<script src="{{ url('back') }}/assets/plugins/chart.js/Chart.bundle.min.js"></script>

	<!--Internal Sparkline js -->
	<script src="{{ url('back') }}/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

	<!-- Moment js -->
	<script src="{{ url('back') }}/assets/plugins/raphael/raphael.min.js"></script>

	<!--Internal  Flot js-->
	<script src="{{ url('back') }}/assets/plugins/jquery.flot/jquery.flot.js"></script>
	<script src="{{ url('back') }}/assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
	<script src="{{ url('back') }}/assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
	<script src="{{ url('back') }}/assets/plugins/jquery.flot/jquery.flot.categories.js"></script>
	<script src="{{ url('back') }}/assets/js/dashboard.sampledata.js"></script>
	<script src="{{ url('back') }}/assets/js/chart.flot.sampledata.js"></script>

	<!-- Chart-circle js -->
	<script src="{{ url('back') }}/assets/plugins/circle-progress/circle-progress.min.js"></script>
	<script src="{{ url('back') }}/assets/plugins/chart-circle/chart-circle.js"></script>

	<!-- ECharts js-->
	<script src="{{ url('back') }}/assets/plugins/echart/echart.js"></script>
	<script src="{{ url('back') }}/assets/plugins/apexcharts/apexcharts.js"></script>
	<script src="{{ url('back') }}/assets/js/index.js"></script>

	<script src="{{ url('back') }}/assets/plugins/notify/js/notifIt.js"></script>
    <script src="{{ url('back') }}/assets/plugins/notify/js/notifit-custom.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

	@yield('footer')

	<!-- custom js -->
	<script src="{{ url('back') }}/assets/js/custom.js"></script>
	<script src="{{ url('back') }}/assets/js/custom2.js"></script>
	<!-- Switcher js -->
	<script src="{{ url('back') }}/assets/switcher/js/switcher.js"></script>
</body>
</html>
