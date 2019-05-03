@component('layouts.app', $page)
  {{--Header--}}
  @component('inc.header')
  @endcomponent
  @component('inc.page-title', ['name' => $name])
    {{ Breadcrumbs::render('coaches') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
