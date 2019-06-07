<!--MARKUP-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      @isset($page->slug) id="{{ config('app.name') . '__' . $page->slug }}" @endisset>

<!--HEAD-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!--TITLE-->
@yield('title')

<!--DESCRIPTION-->
@yield('description')

<!--FONTS-->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i&amp;subset=cyrillic">

  <!--ICONS-->
  @if(Voyager::setting('obshchie.icon'))
    <link rel="icon" type="image/png" href="{{ Voyager::image(Voyager::setting('obshchie.icon')) }}">
  @endif

<!--FONT AWESOME-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- STYLES -->
  <link href="{{ mix('css/main.css') }}" rel="stylesheet">

  <!--MOBILE FON-->
  @if(isset($page->mobile_fon))
    <style>@media (max-width: 991px) {
        html::before {
          background-image: url({{ Voyager::image($page->mobile_fon) }});
        }
      }</style>
  @elseif(Voyager::setting('obshchie.mobile_fon'))
    <style>@media (max-width: 991px) {
        html::before {
          background-image: url({{ Voyager::image(Voyager::setting('obshchie.mobile_fon')) }});
        }
      }</style>
  @endif

<!--FON-->
  @if(isset($page->fon))
    <style>@media (min-width: 992px) {
        html::before {
          background-image: url({{ Voyager::image($page->fon) }});
        }
      }</style>
  @elseif(Voyager::setting('obshchie.fon'))
    <style>@media (min-width: 992px) {
        html::before {
          background-image: url({{ Voyager::image(Voyager::setting('obshchie.fon')) }});
        }
      }</style>
  @endif

<!--FON COLOR-->
  @if(Voyager::setting('obshchie.fon_color'))
    <style>body {
        background-color: {{ Voyager::setting('obshchie.fon_color') }}   !important;
      }</style>
  @endif

<!--CUSTOM-->
  @yield('custom')
</head>
<!--Body-->
<body class="d-flex flex-column">
@if(Voyager::setting('obshchie.ya_id'))
<!--Yandex.Metrika counter-->
<script>
  (function (d, w, c) {
    (w[c] = w[c] || []).push(function () {
      try {
        w.yaCounter{{ Voyager::setting('obshchie.ya_id') }} = new Ya.Metrika2({
          id: {{ Voyager::setting('obshchie.ya_id') }},
          clickmap: true,
          trackLinks: true,
          accurateTrackBounce: true,
          webvisor: true
        });
      } catch (e) {
      }
    });

    var n = d.getElementsByTagName('script')[0],
      s = d.createElement('script'),
      f = function () {
        n.parentNode.insertBefore(s, n);
      };
    s.type = 'text/javascript';
    s.async = true;
    s.src = 'https://mc.yandex.ru/metrika/tag.js';

    if (w.opera == '[object Opera]') {
      d.addEventListener('DOMContentLoaded', f, false);
    } else {
      f();
    }
  })(document, window, 'yandex_metrika_callbacks2');
</script>
<noscript>
  <div>
    <img src="https://mc.yandex.ru/watch/{{ Voyager::setting('obshchie.ya_id') }}" style="position:absolute; left:-9999px;" alt="">
  </div>
</noscript>
@endif
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
