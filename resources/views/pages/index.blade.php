@extends('layouts.app')

@section('custom')
  <meta name="google-site-verification" content="Gc5zQB4yQ5s8ZvDI5WoD2yXp5Hrza3OmX-qsy8A2hig">
  <meta name="yandex-verification" content="f196debf2583cee4">
  <style>.atr-slogan{opacity: 0}</style>
@endsection

@section('title')
  @if(isset($page->seo_title))
    <title>{{ $page->seo_title }}</title>
  @elseif(Voyager::setting('common.seo_title'))
    <title>{{ Voyager::setting('common.seo_title') }}</title>
  @endif
@endsection

@section('description')
  @if(isset($page->seo_description))
    <meta name="description" content="{{ $page->seo_description }}">
  @elseif(Voyager::setting('common.seo_description'))
    <meta name="description" content="{{ Voyager::setting('common.seo_description') }}">
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
            <div class="atr-slogan text-white">
              {!! $page->content !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  @if(Voyager::setting('common.phone'))
    <footer id="abovetherain-cms__footer" class="text-white px-3">
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col d-flex justify-content-end d-lg-none">
              <a href="tel:{{ Voyager::setting('common.phone') }}" class="text-decoration-none text-reset" title="{{ Voyager::setting('common.phone') }}">
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
