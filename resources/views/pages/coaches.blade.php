@component('layouts.app', [
  'title' => 'Тренеры'
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Тренеры'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Тренеры'])
    {{ Breadcrumbs::render('coaches') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
