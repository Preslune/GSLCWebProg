<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/home.css') }}" >
    <title>@yield('title')</title> 
</head>
<body>
    @yield('header')
    @yield('content')
</body>
</html>
