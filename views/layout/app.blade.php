<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	@css('/assets/css/bootstrap-reboot.min')
	@css('/assets/css/bootstrap-grid.min')
	@css('/assets/css/owl.carousel.min')
	@css('/assets/css/slider-radio')
	@css('/assets/css/select2.min')
	@css('/assets/css/magnific-popup')
	@css('/assets/css/plyr')
	@css('/assets/css/main')

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<title>@yield('title')</title>

</head>

<body>

	@include('layout.header')
	@yield('content')
	@include('layout.footer')

	@js('/assets/js/jquery-3.5.1.min')
	@js('/assets/js/bootstrap.bundle.min')
	@js('/assets/js/owl.carousel.min')
	@js('/assets/js/slider-radio')
	@js('/assets/js/select2.min')
	@js('/assets/js/smooth-scrollbar')
	@js('/assets/js/jquery.magnific-popup.min')
	@js('/assets/js/plyr.min')
	@js('/assets/js/main')
</body>
</html>