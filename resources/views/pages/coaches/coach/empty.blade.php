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
            <div class="card">
              <div class="card-body">
                {!! $coach->content !!}
              </div>
              @if(isset($coach->services) && count($coach->services) > 0 || isset($coach->trainings) && count($coach->trainings) > 0)
                <div class="card-footer p-4 d-lg-flex justify-content-lg-between">
                  <ul class="list-unstyled m-0">
                    @foreach($coach->services as $service)
                      <li{!! $loop->last ? '' : ' class="mb-2"' !!}>
                        @if($service->content)
                          <i class="far fa-list-alt h5 mb-0"></i>&nbsp;
                          <a href="{{ route('service', $service->slug) }}"
                             class="text-reset font-weight-bold h5">{{ $service->title }}</a>
                        @else
                          <i class="far fa-list-alt h5 text-muted mb-0"></i>&nbsp;
                          <span class="text-muted font-weight-bold h5 mb-0">{{ $service->title }}</span>
                        @endif
                      </li>
                    @endforeach
                  </ul>
                  @if(count($coach->trainings) > 0)
                    <div>
                      <i class="far fa-calendar-alt h5 mb-0"></i>&nbsp;
                      <a href="{{ route('schedule', 'coach=' . $coach->slug) }}"
                         class="d-inline-block h5 text-reset font-weight-bold mb-0 my-lg-0{{ count($coach->services) > 0 ? ' mt-3' : '' }}">Расписание занятий
                      </a>
                    </div>
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
