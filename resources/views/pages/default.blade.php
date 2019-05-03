@extends('layouts.app')

@section('header')
  @if(isset($page->menu_name) || isset($page->logo))
    @component('inc.header', ['page' => $page])
    @endcomponent
  @endif
@endsection

@section('page-title')
  @component('inc.page-title', ['page' => $page])
    {{ Breadcrumbs::render('page', $page) }}
  @endcomponent
@endsection

@section('content')
  @component('inc.content')
  @endcomponent
@endsection

@section('footer')
  @component('inc.footer')
  @endcomponent
@endsection
