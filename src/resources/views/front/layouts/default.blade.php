<html>
    <head>
        <title>{{ $title }}</title>
        <meta charset="UTF-8">
        <link href='//use.fontawesome.com/releases/v5.6.1/css/all.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
    <body>
        @include('front.globals.header')
        @include('front.globals.sidemenu')
        <div class="container">
            @yield('content')
        </div>
        @include('front.globals.footer')
    </body>
</html>