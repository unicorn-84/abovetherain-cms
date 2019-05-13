@extends('layouts.app')

@section('head_code')
  @isset($page->head_code)
    {!! $page->head_code !!}
  @endisset
@endsection

@section('title')
  @if(isset($page->seo_title))
    <title>{{ $page->seo_title }}</title>
  @elseif(Voyager::setting("site.seo_title"))
    <title>{{ Voyager::setting("site.seo_title") }}</title>
  @endif
@endsection

@section('description')
  @if(isset($page->seo_description))
    <meta name="description" content="{{ $page->seo_description }}">
  @elseif(Voyager::setting("site.seo_description"))
    <meta name="description" content="{{ Voyager::setting("site.seo_description") }}">
  @endif
@endsection

@section('header')
  @if($page->has_header)
    @component('inc.header')
    @endcomponent
  @endif
@endsection

@section('page-title')
  @if($page->has_pagetitle)
    @component('inc.page-title', ['title' => $page->title])
      {{ Breadcrumbs::render('page', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    <div class="caption">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="text-white">
              <span><span>Школа&nbsp;танцев</span></span>
              <span><span>«Lorem ipsum»</span></span>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </main>
  @if(Voyager::setting("content.phone"))
    <footer id="abovetherain-cms__footer" class="text-white px-3">
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col d-flex justify-content-end d-lg-none">
              <a href="tel:{{ Voyager::setting("content.phone") }}" class="text-decoration-none text-reset" title="{{ Voyager::setting("content.phone") }}">
                <i class="fas fa-phone-square fa-3x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  @endif
@endsection

@section('footer')
  @if($page->has_footer))
    @component('inc.footer')
    @endcomponent
  @endif
@endsection
