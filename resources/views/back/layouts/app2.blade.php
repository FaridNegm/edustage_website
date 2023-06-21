<!DOCTYPE html>
@if (app()->getLocale() == 'en')
	<html lang="en">
@elseif (app()->getLocale() == 'ar')
	<html lang="ar" dir="ltr">
@endif
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="utf-8" />
	<title>
		@yield('title')
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta content="Premium Multipurpose back & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<link rel="shortcut icon" href="{{ url('back') }}/assets/images/favicon.ico">

	<link href="{{ url('back') }}/assets/css/alertify.min.css" rel="stylesheet" type="text/css" />
	<link href="{{ url('back') }}/assets/css/semantic.min.css" rel="stylesheet" type="text/css" />

	<link href="{{ url('back') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.f0" rel="stylesheet" type="text/css" />
    <link href="{{ url('back') }}/assets/libs/datatables.net-buttons-bs4/c/buttons.bootstrap4.min" rel="stylesheet" type="text/css" />
	<link href="{{ url('back') }}/assets/libs/datatables.net-responsive-bs/responsive.bootstrap4.m" rel="stylesheet" type="text/css" />

	<link href="{{ url('back') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<link href="{{ url('back') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

	@yield('header')

	<link href="{{ url('back') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	<link href="{{ url('back') }}/assets/css/customize.css" />




	<style>
		li::marker{
			display: none;
		}
		form .require_input {
			color: red;
			font-size: 8px;
			float: right;
			top: 6px;
			position: relative;
			right: 3px;
		}
		form .text-danger {
			font-weight: bold;
			font-size: 12px;
			margin-top: 7px;
			display: block;
		}
		.input-group-text{
			width: 38px;
			text-align: center;
		}
		.ajs-button {
			border: 0px;
			font-weight: bold;
		}
		.ajs-cancel{
			background: rgb(209, 56, 56);
			color: #fff;
		}
	</style>
</head>

<body data-topbar="colored" data-layout="horizontal" data-layout-size="boxed">
	<!-- Begin page -->
	<div id="layout-wrapper">
		{{-- Navbar --}}
		@include('back/layouts/navbar')

		{{-- Sidebar --}}
		@include('back/layouts/sidebar')

		{{-- Content --}}
		@yield('content')
	</div>

	<div class="rightbar-overlay"></div>

	<script src="{{ url('back') }}/assets/libs/jquery/jquery.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/simplebar/simplebar.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/node-waves/waves.min.js"></script>

	<script src="{{ url('back') }}/assets/js/alertify.min.js"></script>

	<!-- apexcharts -->
	<script src="{{ url('back') }}/assets/libs/apexcharts/apexcharts.min.js"></script>
	<!-- dashboard init -->
	<script src="{{ url('back') }}/assets/js/pages/dashboard.init.js"></script>


	<script src="{{ url('back') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.f3.d"></script>
	<!-- Buttons examples -->
	<script src="{{ url('back') }}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.14e"></script>
	<script src="{{ url('back') }}/assets/libs/datatables.net-buttons-bs4/j/buttons.bootstrap4.min"></script>
	<script src="{{ url('back') }}/assets/libs/datatables.net-buttons/js/buttons.html5.min.153.dela"></script>
	<script src="{{ url('back') }}/assets/libs/datatables.net-buttons/js/buttons.print.min.154.dela"></script>
	<script src="{{ url('back') }}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.155.del"></script>
	<script src="{{ url('back') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.m"></script>
	<script src="{{ url('back') }}/assets/libs/datatables.net-responsive-bs/responsive.bootstrap4-2.m"></script>
	<script src="{{ url('back') }}/assets/js/pages/datatables.init.js"></script>

	<!-- App js -->
	<script src="{{ url('back') }}/assets/js/app.js"></script>

	@yield('footer')

	<script>
		$(window).scroll(function() {
			if($(this).scrollTop() > 0) {
				$('#page-topbar').css('margin-top', '-100px').css('scroll-behavior', 'smooth');
				$('.topnav').css('margin-top', '0px');
			} else {
				$('#page-topbar').css('margin-top', '0px');
				$('.topnav').css('margin-top', '70px');

			}
		});
	</script>


</body>


</html>
