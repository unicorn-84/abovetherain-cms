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
  @if($page->has_pagetitle))
    @component('inc.page-title', ['page' => $page])
      {{ Breadcrumbs::render('page', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')

  <main class="py-5 flex-fill">
    @isset($page->content)
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-body">
                {!! $page->content !!}
              </div>
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
