<!--MARKUP-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="">
<!--HEAD-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? 'Над Дождём' }}</title>
  <meta name="description" content="{{ $description ?? 'Школа танцев в Санкт-Петербурге' }}">
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet", href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i&amp;subset=cyrillic">
  <!--Icons-->
  <link rel='icon' type='image/x-icon' href={{  asset('images/favicon.ico') }}>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ mix('css/main.css') }}" rel="stylesheet">
</head>
<!--Body-->
<body class="d-flex flex-column bg-dark">
{{ $slot }}
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.0.min.js", integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=", crossorigin="anonymous"></script>
<script src="{{ mix('js/main.js') }}"></script>
</body>
</html>
