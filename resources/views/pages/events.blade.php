@component('layouts.app', [
  'title' => 'Афиша',
  'bgi' => 'images/mobile-common-fon.jpg',
  'bgiLaptop' => 'images/laptop-common-fon.jpg',
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Афиша'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Афиша'])
    {{ Breadcrumbs::render('events') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
