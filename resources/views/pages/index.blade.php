@component('layouts.app', ['pageSelector' => $pageSelector, 'title' => $title])
  {{--Header--}}
  @component('inc.header')
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
