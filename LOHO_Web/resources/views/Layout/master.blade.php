<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @include('Partials.head')
    @section('head')
    @show    
</head>
<body>
    @include('partials.nav')
    @section('content')
    @show   
</body>
</html>
