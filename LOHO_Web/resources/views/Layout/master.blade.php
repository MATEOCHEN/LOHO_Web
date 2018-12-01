<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('Partials.head')
    @section('head')
    @show    
</head>
<body>
    @include('Partials.nav')
    @section('content')
    @show   
</body>
<footer>
    @include('Partials.footer')
    @show    
</footer>
</html>
