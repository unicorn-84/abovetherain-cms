<!--MARKUP-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="{{ $pageSelector }}">
<!--HEAD-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $title ?? 'Над Дождём' }}</title>
  <meta name="description" content="{{ $description ?? 'Школа танцев в Санкт-Петербурге' }}">
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i&amp;subset=cyrillic" rel="stylesheet" type="text/css">
  <!--Icons-->
  <link rel='icon' type='image/x-icon' href={{  asset('images/favicon.ico') }}>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">
  <!-- Styles -->
  <link href="{{ mix('css/main.css') }}" rel="stylesheet">
</head>
<!--Body-->
<body class="d-flex flex-column bg-dark">
{{ $slot }}
<!-- Scripts -->
<script src="{{ mix('js/main.js') }}"></script>
</body>
</html>
