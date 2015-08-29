<!doctype html>
<html lang="en">
<head>
    @include('partials.header_meta')
</head>

<body>
    @include('partials.navbar')
     <main id="content">
        @yield('content')
    </main>
	@include('partials.footer')
</body>
</html>