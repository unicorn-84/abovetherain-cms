@component('layouts.app', [
  'title' => 'Расписание'
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Расписание'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Расписание'])
    {{ Breadcrumbs::render('schedule') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
