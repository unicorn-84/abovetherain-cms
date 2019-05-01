@component('layouts.app', ['pageSelector' => $pageSelector])
  {{--Header--}}
  @component('inc.header')
  @endcomponent
  @component('inc.page-title', ['name' => $name])
    {{ Breadcrumbs::render('gallery') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
