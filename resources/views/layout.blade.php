<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="csrf-param" content="_token" />
  <meta name="turbolinks-cache-control" content="no-preview">
  <link rel="stylesheet" type="text/css" href="{{ elixir('css/app.css') }}" data-turbolinks-track="reload">
  <script type="text/javascript" src="{{ elixir('js/app.js') }}" data-turbolinks-track="reload"></script>
  <title> @yield('title') </title>
</head>
<body>

@yield('body')

</body>
</html>
