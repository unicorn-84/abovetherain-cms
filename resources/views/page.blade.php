@extends('layouts.app')

@section('custom')
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
    @isset($page->content)
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card atr-card-page">
              <div class="card-body">
                <div class="atr-card-content">
                  {!! $page->content !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endisset
  </main>
@endsection

@section('footer')
  @if($page->has_footer)
    @component('inc.footer')
    @endcomponent
  @endif
@endsection
