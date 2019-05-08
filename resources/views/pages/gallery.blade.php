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
    <div class="container">
      <div class="row">
        @foreach($albums as $album)
          <div class="col-md-6 col-lg-4">
            <div class="card mb-4 w-100">
              @isset($album->poster)
                <a href="{{ url('/gallery/' . $album->slug) }}">
                  <img class="card-image-top img-thumbnail border-0" src="{{ Voyager::image($album->poster) }}" alt="{{ $album->title }}">
                </a>
              @endisset
              <div class="card-body">
                <a href="{{ url('/gallery/' . $album->slug) }}" class="text-reset">
                  <h2 class="card-title text-center m-0">
                    {{ $album->title }}
                  </h2>
                </a>
                @isset($album->description)
                  <p class="card-text mt-2 mb-0">{{ $album->description }}</p>
                @endisset
              </div>
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
