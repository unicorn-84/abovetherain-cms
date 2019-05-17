@extends('layouts.app')

@section('head_code')
  @isset($page->head_code)
    {!! $page->head_code !!}
  @endisset
@endsection

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
              @if(isset($coach->services) && count($coach->services) > 0)
                <div class="card-footer p-4 d-lg-flex justify-content-lg-between">
                  <ul class="list-unstyled m-0">
                    @foreach($coach->services as $service)
                      <li{!! $loop->last ? '' : ' class="mb-2"' !!}>
                        <a href="{{ url('/services/' . $service->slug) }}" class="text-reset text-decoration-none font-weight-bold h5">
                          <i class="far fa-list-alt fs-sm"></i>&nbsp;{{ $service->title }}
                        </a>
                      </li>
                    @endforeach
                  </ul>
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