<!Doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('src/css/main.css')}}">
    @yield('styles')
</head>
<body>
@include('includes.header')
    <div class="container">

        @yield('content')


    </div>

</body>

</html>
