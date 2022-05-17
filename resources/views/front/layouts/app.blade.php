<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Educa - Education HTML Theme</title>


	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	

	<link rel="stylesheet" href="{{ asset("css/bootstrap.css") }}">
	<link rel="stylesheet" href="{{ asset("css/animate.css") }}">
	<link rel="stylesheet" href="{{ asset("css/jquery-ui.css") }}">
	<link rel="stylesheet" href="{{ asset("css/simple-line-icons.css") }}">
	<link rel="stylesheet" href="{{ asset("css/font-awesome.min.css") }}">
	<link rel="stylesheet" href="{{ asset("css/icon-font.css") }}">
	<link rel="stylesheet" href="{{ asset("css/educa.css") }}">

	<link rel="stylesheet" href="{{ asset("rs-plugin/css/settings.css") }}">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

    
	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

			@include('front.partials.header')
			@yield('content')	
			@include('front.partials.footer')
				
			</div>

		</div>

		@yield('responsiveContent')

	</div>


	

	<script type="text/javascript" src="{{ asset("js/jquery-1.11.1.min.js") }}"></script>
	<script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{ asset("rs-plugin/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset("rs-plugin/js/jquery.themepunch.revolution.min.js") }}"></script>

	<script type="text/javascript" src="{{ asset("js/plugins.js") }}"></script>
	<script type="text/javascript" src="{{ asset("js/custom.js") }}"></script>

</body>
</html>