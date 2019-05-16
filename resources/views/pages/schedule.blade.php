@extends('layouts.app')

@section('head_code')
  @isset($page->head_code)
    {!! $page->head_code !!}
  @endisset
@endsection

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
      {{ Breadcrumbs::render('schedule', $page) }}
    @endcomponent
  @endif
@endsection

@section('content')
  <main class="py-5 flex-fill">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-5 col-xl-3">
          <a href="https://vk.com/naddozhdem?w=app5708398_-168182015" class="btn btn-info btn-block mb-4" role="button"
             aria-disabled="true">
            Записаться на занятие&nbsp;
            <i class="fab fa-vk fa-sm"></i>
          </a>
        </div>
      </div>
      @if(isset($virtTable) && count($virtTable) > 0)
        <div class="row">
          <div class="col-md-4 col-xl-3">
            <select name="" id="direction-select" class="abovetherain__schedule-select custom-select mb-2">
              <option value="all" selected>
                Все направления
              </option>
            </select>
          </div>
          <div class="col-md-4 col-xl-3">
            <select name="" id="coach-select" class="abovetherain__schedule-select custom-select mb-2">
              <option value="all" selected>
                Все тренеры
              </option>
            </select>
          </div>
          <div class="col-md-4 col-xl-3">
            <select name="" id="day-select" class="abovetherain__schedule-select custom-select mb-2">
              <option value="all" selected>
                Все дни
              </option>
            </select>
          </div>
        </div>
        @if(count($columns) > 0 && count($times) > 0)
          <div class="row">
            <div class="col">
              <div id="abovetherain__schedule-table" class="mt-2">
                <table class="table table-bordered table-dark text-center">
                  <thead>
                  <tr>
                    <th></th>
                    @foreach($columns as $column)
                      <th>{{ $column }}</th>
                    @endforeach
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($times as $time)
                    <tr>
                      <th class="align-middle">{{ $time }}</th>
                      @for($i = 0; $i < count($columns); $i += 1)
                        @if($virtTable[($loop->iteration) - 1][$i])
                          <td class="align-middle p-0">
                            @component('partials.training', ['training' => $virtTable[($loop->iteration) - 1][$i]])
                            @endcomponent
                          </td>
                        @else
                          <td></td>
                        @endif
                      @endfor
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        @endif
      @endif
    </div>
  </main>
@endsection

@section('footer')
  @if($page->has_footer)
    @component('inc.footer')
    @endcomponent
  @endif
@endsection
