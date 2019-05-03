@extends('layouts.app')

@section('header')
  @if($page->menu_name || Voyager::setting('site.logo'))
    @component('inc.header', ['page' => $page])
    @endcomponent
  @endif
@endsection

  @component('inc.page-title', ['name' => $page->name])
    {{ Breadcrumbs::render($page->slug) }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
