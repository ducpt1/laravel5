<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style type="text/css">
        #wrapper{
            width: 980px;
            height: auto;
            margin:0px auto;
        }
        #header{
            width: auto;
            height: 200px;
            background: red;
        }
        #content{
            width: auto;
            height: 500px;
            background: blue;
        }
        #footer{
            width: auto;
            height: 100px;
            background: green;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <div id="header">
        @section('slidebar')
            Menu
        @show
    </div>
    <div id="content">
        @yield('noidung')
    </div>
    <div id="footer"></div>
</div>

</body>
</html>