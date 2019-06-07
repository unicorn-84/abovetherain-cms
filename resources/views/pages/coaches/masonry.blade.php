@extends('layouts.app')

@section('custom')
  <style>
    .card-columns {
      column-count: 1;
    }

    @media (min-width: 768px) {
      .card-columns {
        column-count: {{ ceil($layoutColumns / 3) }};
      }
    }

    @media (min-width: 992px) {
      .card-columns {
        column-count: {{ ceil($layoutColumns / 1.5) }};
      }
    }

    @media (min-width: 1200px) {
      .card-columns {
        column-count: {{ $layoutColumns }};
      }
    }
  </style>
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
      {{ Breadcrumbs::render('coaches', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    <div class="container">
      <div class="card-columns">
        @foreach($coaches as $coach)
          <div class="card mb-4 w-100"{!!  isset($coach->poster) ? 'style="color:#fff;"' : '' !!}>
            @isset($coach->poster)
              <div>
                <img class="card-img-top" src="{{ Voyager::image($coach->poster) }}" alt="{{ $coach->title }}">
              </div>
            @endisset
            <div class="card-img-overlay h-100 d-flex flex-column justify-content-end p-4">
              @if(isset($coach->content))
                <h2 class="card-title mb-0">
                  <a href="{{ route('coach', $coach->slug) }}" class="text-reset">
                    {{ $coach->title }}
                  </a>
                </h2>
              @else
                <h2 class="card-title mb-0">
                  {{ $coach->title }}
                </h2>
              @endif
              @if(count($coach->services) > 0)
                <ul class="list-unstyled m-0 mt-3">
                  @foreach($coach->services as $service)
                    <li{!! $loop->last ? null : ' class="mb-2"' !!}>
                      @if($service->content)
                        <a href="{{ route('service', $service->slug) }}" class="text-reset mb-0 h5">{{ $service->title }}</a>
                      @else
                        <span class="mb-0 h5{{ isset($coach->poster) ? ' text-white-50' : ' text-muted' }}">{{ $service->title }}</span>
                      @endif
                    </li>
                  @endforeach
                </ul>
              @endif
              @if(count($coach->trainings) > 0)
                <div class="mt-4">
                  <a href="{{ route('schedule', 'coach=' . $coach->slug) }}" class="text-decoration-none text-reset">
                    <i class="far fa-calendar-alt fa-2x"></i>
                  </a>
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
