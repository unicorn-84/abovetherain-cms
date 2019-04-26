@component('layouts.app', [
  'title' => 'Мы'
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Мы'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Мы'])
    {{ Breadcrumbs::render('team') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
