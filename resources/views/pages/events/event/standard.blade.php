@extends('layouts.app')

@section('custom') @endsection

@section('title')
  @if(isset($event->seo_title))
    <title>{{ $event->seo_title }}</title>
  @elseif(Voyager::setting('common.seo_title'))
    <title>{{ Voyager::setting('common.seo_title') }}</title>
  @endif
@endsection

@section('description')
  @if(isset($event->seo_description))
    <meta name="description" content="{{ $event->seo_description }}">
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
    @component('inc.page-title', ['title' => $event->title])
      {{ Breadcrumbs::render('event', $event) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    @isset($event->content)
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card atr-card-page">
              @isset($event->poster)
                <img class="card-img-top img-thumbnail border-0 pb-0" src="{{ Voyager::image($event->poster) }}"
                     alt="{{ $event->title }}">
              @endisset
              <div class="card-body">
                <h2 class="card-title mb-0 text-md-center">
                  {{ $event->title }}
                </h2>
                @if($event->local_date)
                  <h4 class="card-subtitle mt-3"><span class="badge bg-transparent border border-info text-info badge-info">{{ $event->local_date }}</span></h4>
                @endif
                <div class="atr-card-content mt-3">
                  {!! $event->content !!}
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
