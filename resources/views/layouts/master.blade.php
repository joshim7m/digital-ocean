<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posty Laravel - v9.0</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">

 @include('layouts.header')

  @yield('content')

 @include('layouts.footer')

</body>
</html>