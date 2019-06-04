@extends('layouts.app')

@section('custom')
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

@php
  $images = json_decode($album->images);
  $videos = json_decode($album->videos);
  //dd($images);
@endphp

@section('content')
  <main class="py-5 flex-fill">
    @if($videos)
      <div class="container">
        <div class="row">
          @foreach($videos as $video)
            <div class="сol-md-6 col-lg-4{{ isset($images) && count($images) > 0 ? ' mb-5' : '' }}">
              <div class="embed-responsive embed-responsive-16by9">
                <video src="{{ Voyager::image($video) }}" class="embed-responsive-item" controls></video>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endif
    @if($images)
      <div class="container">
        <div class="row">
          @foreach($images as $image)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card mb-4">
                <a href={{ Voyager::image($image) }}>
                  <img src="{{ Voyager::image($album->getThumbnail($image, 'cropped')) }}" alt="{{ $album->title }}" class="img-thumbnail border-0">
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endif
  </main>
@endsection

@section('footer')
  @if($page->has_footer)
    @component('inc.footer')
    @endcomponent
  @endif
@endsection
