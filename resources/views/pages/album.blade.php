@extends('layouts.app')

@section('head_code')
  @isset($page->head_code)
    {!! $page->head_code !!}
  @endisset
@endsection

@section('title')
  @if(isset($album->seo_title))
    <title>{{ $album->seo_title }}</title>
  @elseif(Voyager::setting("site.seo_title"))
    <title>{{ Voyager::setting("site.seo_title") }}</title>
  @endif
@endsection

@section('description')
  @if(isset($album->seo_description))
    <meta name="description" content="{{ $album->seo_description }}">
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
    @component('inc.page-title', ['title' => $album->title])
      {{ Breadcrumbs::render('album', $album) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    <div class="container">
      <div class="row">
        @php
          $images = json_decode($album->images);
          $videos = json_decode($album->videos);
        @endphp
        @if($videos)
          @foreach($videos as $video)
            <div class="сol-md-6 col-lg-4{{ count($images) > 0 ? ' mb-5' : '' }}">
              <div class="embed-responsive embed-responsive-16by9">
                <video src="{{ Voyager::image($video->download_link) }}" class="embed-responsive-item" controls></video>
              </div>
            </div>
          @endforeach
        @endif
      </div>
      <div class="row">
        @if($images)
          @foreach($images as $image)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card mb-2">
                <a href={{ Voyager::image($image) }}>
                  <img src="{{ Voyager::image($album->getThumbnail($image, 'cropped')) }}" alt="{{ $album->title }}" class="img-thumbnail border-0">
                </a>
              </div>
            </div>
          @endforeach
        @endif
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
