@extends('layouts.app')

@section('custom') @endsection

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
    <div class="container">
      <div class="row">
        @foreach($albums as $album)
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4 w-100">
              @isset($album->poster)
                @if($album->count_images > 0 || $album->videos->count() > 0)
                  <a href="{{ route('album', $album->slug) }}">
                    <img class="card-img-top img-thumbnail border-0" src="{{ Voyager::image($album->poster) }}"
                         alt="{{ $album->title }}">
                  </a>
                @else
                  <img class="card-img-top img-thumbnail border-0" src="{{ Voyager::image($album->poster) }}"
                       alt="{{ $album->title }}">
                @endif
              @endisset
              <div class="card-body">
                @if($album->count_images > 0 || $album->videos->count() > 0)
                  <a href="{{ route('album', $album->slug) }}" class="text-reset">
                    <h2 class="card-title m-0">
                      {{ $album->title }}
                    </h2>
                  </a>
                @else
                  <h2 class="card-title m-0">
                    {{ $album->title }}
                  </h2>
                @endif
                @if($album->count_images > 0)
                  <span class="badge bg-transparent border border-info text-info badge-info mt-3">{{ $album->count_images }} фото</span>&nbsp;
                @endif
                @if($album->videos->count() > 0)
                  <span class="badge bg-transparent border border-primary text-primary badge-primary mt-3">{{ $album->videos->count() }} видео</span>
                @endif
                @isset($album->description)
                  <div class="atr-card-description mt-3 mb-0">{!! $album->description !!}</div>
                @endisset
              </div>
              @if($album->videos->count() > 0 || $album->count_images > 0)
                <div class="card-footer">
                  <div class="text-right">
                    <a href="{{ route('album', $album->slug) }}"
                       class="text-reset font-weight-bold">Просмотр альбома</a>
                  </div>
                </div>
              @endif
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </main>
@endsection

@section('footer')
  @if($page->has_footer)
    @component('inc.footer')
    @endcomponent
  @endif
@endsection
