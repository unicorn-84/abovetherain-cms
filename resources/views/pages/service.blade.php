@extends('layouts.app')

@section('custom') @endsection

@section('title')
  @if(isset($service->seo_title))
    <title>{{ $service->seo_title }}</title>
  @elseif(Voyager::setting("site.seo_title"))
    <title>{{ Voyager::setting("site.seo_title") }}</title>
  @endif
@endsection

@section('description')
  @if(isset($service->seo_description))
    <meta name="description" content="{{ $service->seo_description }}">
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
    @component('inc.page-title', ['title' => $service->title])
      {{ Breadcrumbs::render('service', $service) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    @isset($service->content)
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                {!! $service->content !!}
              </div>
              @if(isset($service->coaches) && count($service->coaches) > 0 || isset($service->trainings) && count($service->trainings) > 0)
                <div class="card-footer p-4 d-lg-flex justify-content-lg-between">
                  <ul class="list-unstyled m-0">
                    @foreach($service->coaches as $coach)
                      <li{!! $loop->last ? '' : ' class="mb-2"' !!}>
                        <a href="{{ url('/coaches/' . $coach->slug) }}" class="text-reset text-decoration-none font-weight-bold h5">
                          <i class="far fa-user"></i>&nbsp{{ $coach->title }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
                  @if(count($service->trainings) > 0)
                    <a href="{{ route('schedule', 'training=' . $service->slug) }}" class="d-inline-block h5 text-reset text-decoration-none font-weight-bold mb-0 my-lg-0{{ count($service->coaches) > 0 ? ' mt-4' : '' }}">
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
