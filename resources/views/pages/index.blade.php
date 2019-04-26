@component('layouts.app', [
  'title' => 'Главная',
  'pageSelector' => $pageSelector
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Главная'])
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
