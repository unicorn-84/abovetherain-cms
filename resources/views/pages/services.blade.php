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
        @foreach($services as $service)
          <div class="col-md-6 col-lg-4{{ $service->poster ? ' d-flex' : '' }}">
            <div class="card mb-4 w-100">
              @isset($service->poster)
                @if(isset($service->content))
                  <a href="{{ route('service', $service->slug) }}">
                    <img class="card-img-top img-thumbnail border-0" src="{{ Voyager::image($service->poster) }}"
                         alt="{{ $service->title }}">
                  </a>
                @else
                  <img class="card-img-top img-thumbnail border-0" src="{{ Voyager::image($service->poster) }}"
                       alt="{{ $service->title }}">
                @endif
              @endisset
              <div class="card-body">
                @if(isset($service->content))
                  <a href="{{ route('service', $service->slug) }}" class="text-reset">
                    <h3 class="card-title mb-0">
                      {{ $service->title }}
                    </h3>
                  </a>
                @else
                  <h3 class="card-title mb-0">
                    {{ $service->title }}
                  </h3>
                @endif
                @if(isset($service->subtitle))
                  <div class="card-subtitle text-muted mt-2 pl-2">
                    {!! $service->subtitle !!}
                  </div>
                @endif
                @isset($service->description)
                  <p class="card-text mt-2 mb-0">{!! $service->description !!}</p>
                @endisset
              </div>
              @if(isset($service->content))
                <div class="card-footer">
                  <div class="text-right">
                    <a href="{{ route('service', $service->slug) }}"
                       class="text-reset font-weight-bold">Подробнее...</a>
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
