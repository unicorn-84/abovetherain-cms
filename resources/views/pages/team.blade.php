@component('layouts.app', ['pageSelector' => $pageSelector, 'title' => $title])

  {{--customMeta--}}
  @slot('customMeta')
    @isset($customMeta)
      <meta name="{{ Arr::get($customMeta, 'name') }}" content="{{ Arr::get($customMeta, 'content') }}">
    @endisset
  @endSlot

  {{--Styles--}}
  @slot('styles')
    <style>html.fon-loaded::before {background-image: url({{ mix('images/fon/mobile-common-fon.jpg') }});}@media (min-width: 992px) {html.fon-loaded::before {background-image: url({{ mix('images/fon/common-fon.jpg') }});}}</style>
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
  @component('inc.page-title', ['name' => $name])
    {{ Breadcrumbs::render('team') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
