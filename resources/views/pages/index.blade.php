@extends('layouts.app')

@section('header')
  @if($page->menu_name || $page->logo)
    @component('inc.header', ['page' => $page])
    @endcomponent
  @endif
@endsection

@section('content')
  @component('inc.content')
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
  @endcomponent
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
@endsection
