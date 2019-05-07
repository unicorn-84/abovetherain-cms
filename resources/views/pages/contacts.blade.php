@extends('layouts.app')

@section('head_code')
  @isset($page->head_code)
    {!! $page->head_code !!}
  @endisset
@endsection

@section('header')
  @if($page->has_header)
    @component('inc.header', ['page' => $page])
    @endcomponent
  @endif
@endsection

@section('page-title')
  @if($page->has_pagetitle)
    @component('inc.page-title', ['page' => $page])
      {{ Breadcrumbs::render('page', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    @isset($page->content)
      {!! $page->content !!}
    @endisset
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="list-unstyled font-weight-bold text-white mb-4">
            @if(Voyager::setting('content.address'))
              <li class="mb-3 h4">
                <i class="fas fa-map-marker-alt fa-fw"></i>&nbsp;{{ Voyager::setting('content.address') }}
              </li>
            @endif
            @if(Voyager::setting('content.phone'))
              <li class="mb-3 h4">
                <a href="tel:{{ Voyager::setting('content.phone') }}" class="text-reset text-decoration-none" title="{{ Voyager::setting('content.phone') }}"><i class="fas fa-phone fa-rotate-90 fa-fw"></i>&nbsp;{{ Voyager::setting('content.phone') }}</a>
              </li>
            @endif
            @if(Voyager::setting('content.email'))
              <li class="mb-3 h4">
                <i class="fas fa-envelope fa-fw"></i>&nbsp;{{ Voyager::setting('content.email') }}
              </li>
            @endif
          </ul>
        </div>
        <div class="col-12" id="yandex-map" style="height: 40rem;"></div>
      </div>
    </div>
  </main>
  <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
  <script>
    function yandexMapInit() {
      const map = new window.ymaps.Map('yandex-map', {
        center: [59.9636, 30.2732],
        zoom: 16,
      });
      map.behaviors.disable('scrollZoom');
      const mark = new window.ymaps.Placemark([59.964280, 30.273500], {},
        {
          iconLayout: 'default#image',
          iconImageHref: "{{ asset('images/icons/icon.png') }}",
          iconImageSize: [80, 80],
          iconImageOffset: [-60, -40],
          cursor: 'auto',
        });
      const route1 = new window.ymaps.Polyline([
        [59.964280, 30.2731],
        [59.964358, 30.273876],
        [59.963719, 30.274693],
        [59.963260, 30.273519],
      ], {}, {
        strokeColor: '#8b887d',
        strokeWidth: 2,
        strokeStyle: 'dot',
      });
      const route2 = new window.ymaps.Polyline([
        [59.963882, 30.275045],
        [59.963763, 30.274640],
      ], {}, {
        strokeColor: '#8b887d',
        strokeWidth: 2,
        strokeStyle: 'dot',
      });
      const route3 = new window.ymaps.Polyline([
        [59.964196, 30.274412],
        [59.964140, 30.274154],
      ], {}, {
        strokeColor: '#8b887d',
        strokeWidth: 2,
        strokeStyle: 'dot',
      });
      const evacuator = new window.ymaps.Placemark([59.9625, 30.2743],
        {},
        {
          iconLayout: 'default#image',
          iconImageHref: "{{ asset('images/icons/evacuator.png') }}",
          iconImageSize: [50, 30],
          iconImageOffset: [-25, -30],
          cursor: 'auto',
        });
      map.geoObjects
        .add(route1)
        .add(route2)
        .add(route3)
        .add(evacuator)
        .add(mark);
    }
    window.ymaps.ready(yandexMapInit);
  </script>
@endsection

@section('footer')
  @if($page->has_footer))
  @component('inc.footer')
  @endcomponent
  @endif
@endsection
