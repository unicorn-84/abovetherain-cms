@extends('layouts.app')

@section('head_code')
  @isset($page->head_code)
    {!! $page->head_code !!}
  @endisset
@endsection

@section('header')
  @if($page->has_header)
    @component('inc.header', ['page' => $page, 'has_menu' => $has_menu])
    @endcomponent
  @endif
@endsection

@section('page-title')
  @if($page->has_pagetitle))
    @component('inc.page-title', ['page' => $page])
      {{ Breadcrumbs::render('page', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    @isset($page->content_code)
      {!! $page->content_code !!}
    @endisset
  </main>
@endsection

@section('footer')
  @if($page->has_footer))
    @component('inc.footer')
    @endcomponent
  @endif
@endsection
