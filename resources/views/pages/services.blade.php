@component('layouts.app', [
  'title' => 'Услуги'
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Услуги'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Услуги'])
    {{ Breadcrumbs::render('services') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
