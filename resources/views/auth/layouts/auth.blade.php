<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Styles -->
	<link href="/css/app.css" rel="stylesheet">

	<!-- Scripts -->
	<script>
		window.Laravel = <?php echo json_encode([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>
</head>

<body class="loading">

	<div id="Auth" class="auth">
<?php
// --------------------------------------------------------------------------------
// Header
// --------------------------------------------------------------------------------
?>
		{{-- <div id="Header" class="header">
			@include('site.components.nav.nav__main')
		</div>
		<nav id="Nav" class="nav">
			@include('site.components.nav.nav__menu')
		</nav> --}}
<?php
// --------------------------------------------------------------------------------
// Content
// --------------------------------------------------------------------------------
?>

		<div id="Content" class="content">
			@yield('content')
		</div>

		{{-- <div id="Footer" class="footer">
			@include('site.components.footer.footer')
		</div> --}}


<?php
// --------------------------------------------------------------------------------
// Admin Link
// --------------------------------------------------------------------------------
?>
	@if (Route::has('login'))
		<div>
			@if (Auth::check())
				<a href="{{ route('dashboard') }}" class="button">App Dashboard</a>
			@else
				<a href="{{ url('/login') }}" class="button">Login</a>
				<a href="{{ url('/register') }}" class="button">Register</a>
			@endif
				<a href="{{ url('/') }}" class="button">Website</a>
		</div>
	@endif
</div>

<?php
// --------------------------------------------------------------------------------
// Scripts
// --------------------------------------------------------------------------------
?>

	<script src="/js/app.js"></script>
	@stack('scripts')

</body>
</html>
