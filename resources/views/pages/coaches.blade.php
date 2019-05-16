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
      {{ Breadcrumbs::render('coaches', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    <div class="container">
      <div class="row">
        @foreach($coaches as $coach)
          <div class="col-sm-6 col-lg-4">
            <div class="card mb-4">
              @isset($coach->poster)
                <div>
                  <img class="card-img-top" src="{{ Voyager::image($coach->poster) }}" alt="{{ $coach->title }}">
                </div>
              @endisset
              <div class="card-img-overlay h-100 d-flex flex-column justify-content-end text-white">
                <a href="{{ url('/coaches/' . $coach->slug) }}" class="text-reset">
                  <h3 class="card-title">
                    {{ $coach->title }}
                  </h3>
                </a>
                @if(count($coach->services) > 0)
                  <ul class="list-unstyled m-2">
                    @foreach($coach->services as $service)
                      <li>
                        <a href="{{ url('/services/' . $service->slug) }}" class="text-reset">{{ $service->title }}</a>
                      </li>
                    @endforeach
                  </ul>
                @endif
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
