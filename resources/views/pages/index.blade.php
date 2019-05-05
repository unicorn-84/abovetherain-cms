@extends('layouts.app')

@section('head_code')
  @isset($page->head_code)
    {!! $page->head_code !!}
  @endisset
@endsection

@section('header')
  @if($page->has_header)
    @component('inc.header', ['page' => $page])
    @endcomponent
  @endif
@endsection

@section('page-title')
  @if($page->has_pagetitle)
    @component('inc.page-title', ['page' => $page])
      {{ Breadcrumbs::render('page', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    @isset($page->content)
      {!! $page->content !!}
    @endisset
    <div class="caption">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="text-white">
              <span><span>Школа&nbsp;танцев</span></span>
              <span><span>«Над&nbsp;дождём»</span></span>
            </h1>
          </div>
        </div>
      </div>
    </div>
    @if(Voyager::setting("site.phone_number"))
      <footer id="abovetherain-cms__footer" class="text-white px-3">
        <div class="py-5">
          <div class="container">
            <div class="row">
              <div class="col d-flex justify-content-end d-lg-none">
                <a href="tel:{{ Voyager::setting("site.phone_number") }}" class="text-decoration-none text-reset" title="{{ Voyager::setting("site.phone_number") }}">
                  <i class="fas fa-phone-square fa-3x"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    @endif
  </main>
@endsection

@section('footer')
  @if($page->has_footer))
    @component('inc.footer')
    @endcomponent
  @endif
@endsection
