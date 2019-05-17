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
      {{--<div class="row">--}}
      {{--<div class="col-sm-6 col-lg-4 col-xl-3">--}}
      {{--<a href="https://vk.com/naddozhdem?w=app5708398_-168182015" class="btn btn-primary btn-block mb-4"--}}
      {{--role="button"--}}
      {{--aria-disabled="true">--}}
      {{--Записаться на занятие&nbsp;--}}
      {{--<i class="fab fa-vk fa-sm"></i>--}}
      {{--</a>--}}
      {{--</div>--}}
      {{--</div>--}}
      @if(isset($virtTable) && count($virtTable) > 0)
        @if(count($columns) > 0 && count($times) > 0)
          <div class="row">
            <div class="col">
              {{--Desktop--}}
              <div class="d-none d-lg-block">
                <table class="table table-dark table-bordered text-center">
                  <thead>
                  <tr>
                    <th></th>
                    @foreach($columns as $column)
                      <th class="d-none d-xl-table-cell">{{ $column }}</th>
                      <th class="d-xl-none">{{ getDayAbbr($column) }}</th>
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

              {{--Mobile--}}
              <ul class="nav nav-pills mb-3 d-flex justify-content-between justify-content-sm-start d-lg-none"
                  role="tablist">

                @foreach($trainingsOfTheDay as $day => $trainings)

                  <li class="nav-item">
                    <a
                      class="nav-link text-white px-2 px-sm-3{{ Date::now()->format('l') === mb_strtolower($day) ? ' active' : '' }}"
                      data-toggle="pill" href="{{ '#pills-' . Str::slug($day) }}" role="tab"
                      aria-selected="true">{{ getDayAbbr($day) }}</a>
                  </li>

                @endforeach

              </ul>

              <div class="tab-content d-lg-none">

                @foreach($trainingsOfTheDay as $day => $trainings)

                  <div
                    class="tab-pane fade show{{ Date::now()->format('l') === mb_strtolower($day) ? ' active' : '' }}"
                    id="{{ 'pills-' . Str::slug($day) }}" role="tabpanel">

                    @if(count($trainings) > 0)

                      <table class="table text-center mb-0 border-0" style="border-radius: 0.25rem; overflow: hidden;">
                        <thead>
                        <tr>
                          <th class="border-0 bg-light">{{ $day }}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($trainings as $training)

                          <tr>

                            <td class="align-middle p-0 border-0">
                              @component('partials.training', ['training' => $training])
                              @endcomponent
                            </td>

                          </tr>

                        @endforeach

                        </tbody>
                      </table>

                    @else

                      <table class="table text-center mb-0 border-0" style="border-radius: 0.25rem; overflow: hidden;">
                        <thead>
                        <tr>
                          <th class="border-0 bg-light">Нет тренировок</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>

                    @endif

                  </div>

                @endforeach

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
