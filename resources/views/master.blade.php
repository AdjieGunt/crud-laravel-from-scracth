<!-- master.blade.php -->

<!doctype html>

<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> CRUD Operations</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
  </head>
  <body>
    <br><br>
    @yield('content')
  </body>
</html>