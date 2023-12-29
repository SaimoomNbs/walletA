<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="{{asset('asset/static/media/favicon.ico')}}" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;1,100&amp;family=Roboto:ital,wght@0,300;1,100&amp;display=swap"
    rel="stylesheet" />
  <title>Portal-Crosschaindefi</title>
  <link rel="stylesheet" href="{{asset('asset/static/css/main.19fc93e5.css')}}">
  <script src="{{asset('asset/static/js/main.037871e0.js')}}"></script>
</head>

<body>
    @yield('content')
</body>
</html>