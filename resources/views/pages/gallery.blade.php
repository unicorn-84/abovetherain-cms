@component('layouts.app', [
  'title' => 'Галерея',
  'bgi' => 'images/mobile-common-fon.jpg',
  'bgiLaptop' => 'images/laptop-common-fon.jpg',
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Галерея'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Галерея'])
    {{ Breadcrumbs::render('gallery') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
