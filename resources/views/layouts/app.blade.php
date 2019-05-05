<!--MARKUP-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @isset($page->name) id="{{ config('app.name') . '__' . $page->name }}" @endisset>

<!--HEAD-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!--TITLE-->
  @if(isset($page->seo_title))
    <title>{{ $page->seo_title }}</title>
  @elseif(Voyager::setting("site.seo_title"))
    <title>{{ Voyager::setting("site.seo_title") }}</title>
  @endif

  <!--DESCRIPTION-->
  @if(isset($page->seo_description))
    <meta name="description" content="{{ $page->seo_description }}">
  @elseif(Voyager::setting("site.seo_description"))
    <meta name="description" content="{{ Voyager::setting("site.seo_description") }}">
  @endif

  <!--FONTS-->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i&amp;subset=cyrillic">

  <!--ICONS-->
  @if(Voyager::setting("site.icon"))
    <link rel="icon" type="image/png" href="{{ Voyager::image(Voyager::setting("site.icon")) }}">
  @endif

  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- STYLES -->
  <link href="{{ mix('css/main.css') }}" rel="stylesheet">

  <!--MOBILE FON-->
  @if(isset($page->mobile_fon))
    <style>html.fon-loaded::before {background-image: url({{ Voyager::image($page->mobile_fon) }});}</style>
  @elseif(Voyager::setting("site.mobile_fon"))
    <style>html.fon-loaded::before {background-image: url({{ Voyager::image(Voyager::setting("site.mobile_fon")) }});}</style>
  @endif

  <!--FON-->
  @if(isset($page->fon))
    <style>@media (min-width: 992px) {html.fon-loaded::before {background-image: url({{ Voyager::image($page->fon) }});}}</style>
  @elseif(Voyager::setting("site.fon"))
    <style>@media (min-width: 992px) {html.fon-loaded::before {background-image: url({{ Voyager::image(Voyager::setting("site.fon")) }});}}</style>
  @endif

  @yield('head_code')
</head>
<!--Body-->
<body class="d-flex flex-column bg-dark">
  @yield('header')
  @yield('page-title')
  @yield('content')
  @yield('footer')
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"></script>
<script src="{{ mix('js/main.js') }}"></script>
</body>
</html>
