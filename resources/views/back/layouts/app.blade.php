<!doctype html>
@if (app()->getLocale() == 'en')
	<html lang="en">
@elseif (app()->getLocale() == 'ar')
	<html lang="ar" dir="rtl">
@endif
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="shortcut icon" href="{{ url('back') }}/assets/images/favicon.ico">

	{{----------------------------------- all styles --------------------------------}}
	{{----------------------------------- ----------- --------------------------------}}
	@yield('header')
	@if (app()->getLocale() == 'en')
		{{-- bootstrap --}}
		<link href="{{ url('back') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
		{{-- alertify --}}
		<link href="{{ url('back') }}/assets/css/alertify.min.css" rel="stylesheet" type="text/css" />
	@elseif (app()->getLocale() == 'ar')
		{{-- bootstrap --}}
        <link href="{{ url('back') }}/assets/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
		{{-- alertify --}}
		<link href="{{ url('back') }}/assets/css/alertify.rtl.min.css" rel="stylesheet" type="text/css" />
	@endif
	
	{{-- icons --}}
	<link href="{{ url('back') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

	@if (app()->getLocale() == 'en')
		<link href="{{ url('back') }}/assets/css/cust.css" />
		<link href="{{ url('back') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
		{{-- <link href="{{ url('back') }}/assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css" /> --}}
	@elseif (app()->getLocale() == 'ar')
		<link href="{{ url('back') }}/assets/css/cust-ar.css" />
		<link href="{{ url('back') }}/assets/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css" />
	@endif

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,400;1,700;1,900&family=Nunito:ital,wght@0,200;0,400;0,600;1,200;1,400;1,700;1,900&family=PT+Serif:ital,wght@0,400;1,400;1,700&family=Secular+One&family=Signika+Negative:wght@300;400;700&family=Tajawal:wght@200;400;700&family=Titillium+Web:ital,wght@0,200;0,300;0,600;0,700;1,200;1,400;1,700&display=swap" rel="stylesheet">


	@include('back.layouts.app_style')
</head>

<body data-sidebar="colored" data-keep-enlarged="true" class="vertical-collpsed">
    {{-- <body data-sidebar="dark" > --}}
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    {{-- <div id="layout-wrapper" style="background: rgb(242,242,242);background: linear-gradient(184deg, rgba(242,242,242,1) 0%, rgb(231 232 235 / 80%) 100%);"> --}}
    
	<div id="layout-wrapper" style="background: #f3f5fa;box-shadow: 0px;">
		{{-- Navbar --}}
		@include('back/layouts/navbar')
		{{-- Sidebar --}}
		@include('back/layouts/sidebar')
		{{-- Content --}}
		@yield('content')
	</div>

	<div class="rightbar-overlay"></div>




	{{----------------------------------- all scripts --------------------------------}}
	{{----------------------------------- ----------- --------------------------------}}
	<script src="{{ url('back') }}/assets/libs/jquery/jquery.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/metismenu/metisMenu.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/simplebar/simplebar.min.js"></script>
	<script src="{{ url('back') }}/assets/libs/node-waves/waves.min.js"></script>
	<!-- dashboard init -->
	{{-- <script src="{{ url('back') }}/assets/js/pages/dashboard.init.js"></script> --}}
	<!-- alertify -->
	<script src="{{ url('back') }}/assets/js/alertify.min.js"></script>
	@yield('footer')
	<!-- App js -->
	<script src="{{ url('back') }}/assets/js/app.js"></script>

	@include('back.layouts.app_script')
</body>
</html>
