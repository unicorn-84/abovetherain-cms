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
      {{ Breadcrumbs::render('services', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    <div class="container">
      <div class="row">
        @foreach($services as $service)
          <div class="col-md-6 col-lg-4{{ $service->poster ? ' d-flex' : '' }}">
            <div class="card mb-4 w-100">
              @isset($service->poster)
                <a href="{{ url('/services/' . $service->slug) }}">
                  <img class="card-img-top img-thumbnail border-0" src="{{ Voyager::image($service->poster) }}" alt="{{ $service->title }}">
                </a>
              @endisset
              <div class="card-body">
                <a href="{{ url('/services/' . $service->slug) }}" class="text-reset">
                  <h3 class="card-title">
                    {{ $service->title }}
                  </h3>
                </a>
                @isset($service->description)
                  <p class="card-text mt-2 mb-0">{{ $service->description }}</p>
                @endisset
              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="{{ url('/services/' . $service->slug) }}" class="text-reset font-weight-bold">Подробнее...</a>
                </div>
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
