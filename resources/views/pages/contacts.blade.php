@component('layouts.app', [
  'title' => 'Контакты'
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Контакты'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Контакты'])
    {{ Breadcrumbs::render('contacts') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
