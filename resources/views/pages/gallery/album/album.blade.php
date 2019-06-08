@extends('layouts.app')

@section('custom')
  <style>
    .card-columns {
      column-count: 1;
    }

    @media (min-width: 768px) {
      .card-columns {
        column-count: 2;
      }
    }

    @media (min-width: 992px) {
      .card-columns {
        column-count: 3;
      }
    }
  </style>
@endsection

@section('title')
  @if(isset($album->seo_title))
    <title>{{ $album->seo_title }}</title>
  @elseif(Voyager::setting('common.seo_title'))
    <title>{{ Voyager::setting('common.seo_title') }}</title>
  @endif
@endsection

@section('description')
  @if(isset($album->seo_description))
    <meta name="description" content="{{ $album->seo_description }}">
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
    @component('inc.page-title', ['title' => $album->title])
      {{ Breadcrumbs::render('album', $album) }}
    @endcomponent
  @endif
@endsection

@php
  $images = json_decode($album->images);
  //dd($images);
@endphp

@section('content')
  <main class="py-5 flex-fill">
    @if($album->videos->count() > 0)
      <div class="container">
        <div class="row{{ isset($images) && count($images) > 0 ? ' mb-5' : '' }}">
          @foreach($album->videos as $video)
            <div class="сol-md-6 col-lg-4{{ $loop->last ? '' : ' mb-4' }}">
              <div class="shadow-lg embed-responsive embed-responsive-{{ isset($video->aspect_ratio) ? $video->aspect_ratio : '16by9' }}">
                <video src="{{ Storage::disk(config('voyager.storage.disk'))->url($video->video_uri) }}" class="embed-responsive-item" controls{!! isset($video->poster) ? ' poster="' . Storage::disk(config('voyager.storage.disk'))->url($video->poster) . '"' : '' !!}></video>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endif
    @if($images)
      <div class="container">
        <div class="card-columns">
          @foreach($images as $image)
            <div class="card mb-4">
              <a href={{ Voyager::image($image) }}>
                <img src="{{ Voyager::image($album->getThumbnail($image, 'resize-800')) }}" alt="{{ $album->title }}" class="img-thumbnail border-0">
              </a>
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
