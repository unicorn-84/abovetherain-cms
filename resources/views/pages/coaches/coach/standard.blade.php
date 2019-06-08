@extends('layouts.app')

@section('custom') @endsection

@section('title')
  @if(isset($service->seo_title))
    <title>{{ $service->seo_title }}</title>
  @elseif(Voyager::setting('common.seo_title'))
    <title>{{ Voyager::setting('common.seo_title') }}</title>
  @endif
@endsection

@section('description')
  @if(isset($service->seo_description))
    <meta name="description" content="{{ $service->seo_description }}">
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
    @component('inc.page-title', ['title' => $coach->title])
      {{ Breadcrumbs::render('coach', $coach) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    @isset($coach->content)
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card atr-card-page p-0">
              @isset($coach->poster)
                <img class="card-img-top img-thumbnail border-0 pb-0" src="{{ Voyager::image($coach->poster) }}"
                     alt="{{ $coach->title }}">
              @endisset
              <div class="card-body">
                <h1 class="card-title mb-0 text-md-center">
                  {{ $coach->title }}
                </h1>
                <div class="atr-card-content mt-3">
                  {!! $coach->content !!}
                </div>
              </div>
              @if(isset($coach->services) && count($coach->services) > 0 || isset($coach->trainings) && count($coach->trainings) > 0)
                <div class="card-footer p-4 d-lg-flex justify-content-lg-between">
                  <ul class="list-unstyled m-0">
                    @foreach($coach->services as $service)
                      <li{!! $loop->last ? '' : ' class="mb-2"' !!}>
                        <i class="far fa-list-alt h5 mb-0"></i>&nbsp;
                        <a href="{{ route('service', $service->slug) }}"
                           class="text-reset font-weight-bold h5">{{ $service->title }}</a>
                      </li>
                    @endforeach
                  </ul>
                  @if(count($coach->trainings) > 0)
                    <a href="{{ route('schedule', 'coach=' . $coach->slug) }}"
                       class="d-inline-block h5 text-reset text-decoration-none font-weight-bold mb-0 my-lg-0{{ count($coach->services) > 0 ? ' mt-4' : '' }}">
                      <i class="far fa-calendar-alt fa-lg"></i>&nbsp;Расписание занятий
                    </a>
                  @endif
                </div>
              @endif
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
