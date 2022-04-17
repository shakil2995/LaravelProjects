<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>My Website</title>
  {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> --}}
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}" />
  <link href=./styles/main.css rel="stylesheet" type="text/css">
</head>
<body>
    <main>
        @yield('content')
    </main>
    <footer>
    </footer>       
</body>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>