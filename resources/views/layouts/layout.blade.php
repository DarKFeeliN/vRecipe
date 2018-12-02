<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', 'vRecipe')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script src="main.js"></script>
</head>

<body>
    @include('inc.navbar')

    <div class="container">
        @yield('content')
    </div>
</body>

</html>