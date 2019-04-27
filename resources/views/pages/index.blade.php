@component('layouts.app', ['pageSelector' => $pageSelector, 'title' => $title])

  {{--customMeta--}}
  @slot('customMeta')
    @isset($customMeta)
      <meta name="{{ Arr::get($customMeta, 'name') }}" content="{{ Arr::get($customMeta, 'content') }}">
    @endisset
  @endSlot

  {{--Styles--}}
  @slot('styles')
    <style>html.fon-loaded::before {background-image: url({{ mix('images/fon/mobile-index-fon.jpg') }});}@media (min-width: 992px) {html.fon-loaded::before {background-image: url({{ mix('images/fon/index-fon.jpg') }});}}</style>
  @endslot

  {{--CustomStyles--}}
  @slot('customStyles')
    @isset($customStyles)
      <style>{{ $customStyles }}</style>
    @endisset
  @endslot

  {{--Title--}}
  @slot('title')
    <title>{{ $title }}</title>
  @endslot

  {{--Description--}}
  @slot('description')
    <meta name="description" content="{{ $description }}">
  @endslot

  {{--Header--}}
  @component('inc.header')
  @endcomponent
  {{--Content--}}
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
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
