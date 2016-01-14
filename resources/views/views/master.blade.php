<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/template/css/mystyle.css')}}">
</head>
<body>
<div id="wrapper">
    @include('views.marquee',['mar_content' => 'Welcome to Laravel 5.x'])
    {{--
    <div id="header">
        @section('slidebar')
            Menu
        @show
    </div> --}}
    <div id="content">
        @yield('noidung')
    </div>
    <div id="footer"></div>
</div>

</body>
</html>