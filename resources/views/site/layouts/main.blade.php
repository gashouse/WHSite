@include('site.document.head')

<body class="loading">

	<div id="App" class="app">
<?php
// --------------------------------------------------------------------------------
// Header
// --------------------------------------------------------------------------------
?>
		<div id="Header" class="header">
			@include('site.components.nav.nav__main')
		</div>
		<nav id="Nav" class="nav">
			@include('site.components.nav.nav__menu')
		</nav>
<?php
// --------------------------------------------------------------------------------
// Content
// --------------------------------------------------------------------------------
?>

		<div id="Content" class="content">
			@yield('content')
		</div>

		<div id="Footer" class="footer">
			@include('site.components.footer.footer')
		</div>

</div>

<?php
// --------------------------------------------------------------------------------
// Scripts
// --------------------------------------------------------------------------------
?>

@if (has_data($js_components))
	<script>
		window.components = window.components || {};
		components.active = {!! $js_components !!};
	</script>
@endif

	<script src="/js/app.js"></script>
	@stack('scripts')
</body>
</html>
