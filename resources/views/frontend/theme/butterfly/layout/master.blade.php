<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<title>test</title>
	<link rel="icon" href="{{ asset('images/icon.png') }}" type="image/png">
	<link href="{{ asset('frontend/butterfly/css/app.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/butterfly/css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/butterfly/css/linecons.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/butterfly/css/responsive.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('frontend/butterfly/css/animate.css') }}" rel="stylesheet" type="text/css">
	@yield('style')
</head>

<body>

	<!--Header_section-->
	@yield('nav')
	<!--Header_section-->
	@yield('section')
	
	{{-- footer section --}}
	@include('frontend.theme.butterfly.layout.footer')
	{{-- end of footer --}}
	<script type="text/javascript" src="{{ asset('frontend/butterfly/js/app.js') }}"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<script type="text/javascript" src="{{ asset('frontend/butterfly/js/style.js') }}"></script>
	@yield('script')
</body>
</html>
