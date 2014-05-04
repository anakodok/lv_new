<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="{{ $description }}">
    <title>{{ $title }}</title>
    
    <link rel="stylesheet" href="{{ URL:: asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL:: asset('css/bootstrap.css') }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>