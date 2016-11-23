@include('admin.document.head')

<body>
    <div id="admin">

		@include('admin.components.nav.nav__top-bar')

        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="/js/admin.js"></script>
</body>
</html>
