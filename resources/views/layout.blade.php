<html>
<header>
    <title>Perons' Management</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
</header>
<body>
    @include('header')

    @yield('content')
    
    @include('footer')
</body>
</html>