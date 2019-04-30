@component('layouts.app', ['pageSelector' => $pageSelector])

  {{--Styles--}}
  @slot('styles')
    <style>html.fon-loaded::before {background-image: url({{ mix('images/fon/mobile-common-fon.jpg') }});}@media (min-width: 992px) {html.fon-loaded::before {background-image: url({{ mix('images/fon/common-fon.jpg') }});}}</style>
  @endslot

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
