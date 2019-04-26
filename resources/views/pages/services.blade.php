@component('layouts.app', [
  'title' => 'Услуги',
  'bgi' => 'images/mobile-common-fon.jpg',
  'bgiLaptop' => 'images/laptop-common-fon.jpg',
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Услуги'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Услуги'])
    {{ Breadcrumbs::render('services') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
