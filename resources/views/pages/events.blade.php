@extends('layouts.app')

@section('custom-styles') @endsection

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
        @foreach($events as $event)
          <div class="col-md-6{{ $event->poster ? ' d-flex' : '' }}">
            <div class="card mb-4 w-100">
              @isset($event->poster)
                @if(isset($event->content))
                  <a href="{{ url('/events/' . $event->slug) }}">
                    <img class="card-img-top img-thumbnail border-0" src="{{ Voyager::image($event->poster) }}" alt="{{ $event->title }}">
                  </a>
                @else
                  <img class="card-img-top img-thumbnail border-0" src="{{ Voyager::image($event->poster) }}" alt="{{ $event->title }}">
                @endif
              @endisset
              <div class="card-body">
                @if(isset($event->content))
                  <a href="{{ url('/events/' . $event->slug) }}" class="text-reset">
                    {{--todo: Добавить mt--}}
                    <h2 class="card-title m-0">
                      {{ $event->title }}
                    </h2>
                  </a>
                @else
                  <h2 class="card-title m-0">
                    {{ $event->title }}
                  </h2>
                @endif
                @if($event->local_date)
                  {{--todo: Изменить на mt-3--}}
                  {{--todo: Изменить badge--}}
                  <h4 class="card-subtitle mt-0"><span class="badge bg-transparent border border-info text-info badge-info mt-3">{{ $event->local_date }}</span></h4>
                @endif
                @isset($event->description)
                  <p class="card-text mt-3 mb-0">{{ $event->description }}</p>
                @endisset
              </div>
              @if(isset($event->content))
                <div class="card-footer">
                  <div class="text-right">
                    {{--todo: Изменить на named routes--}}
                    <a href="{{ route('event', $event->slug) }}"
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
