<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ URL::asset('/css/app.css?ver=1') }}" rel="stylesheet" type="text/css">
        @yield('head')
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

        @yield('footer')
        <script src="{{ URL::asset('/js/app.js?ver=1') }}"></script>
    </body>
</html>