@component('layouts.app', ['pageSelector' => $pageSelector, 'title' => $title])
  {{--Header--}}
  @component('inc.header')
  @endcomponent
  @component('inc.page-title', ['name' => $name])
    {{ Breadcrumbs::render('services') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
