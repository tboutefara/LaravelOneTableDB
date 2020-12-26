<html>
<header>
    <title>People Management System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
</header>
<body>
    @include('header')

    <div class="content my-5 py-5">
    @yield('content')
    </div>
    
    @include('footer')
</body>
</html>