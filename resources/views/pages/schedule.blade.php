@extends('layouts.app')

@section('custom')
  @if(Voyager::setting("content.schedule_fon_color") || Voyager::setting("content.schedule_text_color"))
    <style>
      @if(Voyager::setting("content.schedule_fon_color"))
        table{background-color:{{ Voyager::setting("content.schedule_fon_color") }}!important;}
      @endif
      @if(Voyager::setting("content.schedule_text_color"))
        table{color:{{ Voyager::setting("content.schedule_text_color") }}!important;}
      @endif
    </style>
  @endif
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

  <main class="py-5 flex-fill" id="app">
    <div class="container">
      @if(Voyager::setting("content.vk_sign_up"))
        <div class="row">
          <div class="col-md-4 col-lg-3">
            <a href="{{ Voyager::setting("content.vk_sign_up") }}" class="btn btn-primary btn-block mb-4"
               role="button"
               aria-disabled="true">
              Записаться на занятие&nbsp;
              <i class="fab fa-vk fa-sm"></i>
            </a>
          </div>
        </div>
      @endif
      <div class="row mb-3">

        <div class="col-md-4 col-lg-3">
          <select class="custom-select mb-2" onchange="top.location.href = this.options[this.selectedIndex].value">
            <option value="{{ route('schedule') }}"{{ Request()->query('training') === null ? ' selected' : '' }}>Все
              тренировки
            </option>
            @foreach($services as $slug => $service)
              <option
                value="{{ route('schedule', 'training=' . $slug) }}"{{ Request()->query('training') === $slug ? ' selected' : '' }}>{{ $service }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-4 col-lg-3">
          <select class="custom-select mb-2" onchange="top.location.href = this.options[this.selectedIndex].value">
            <option value="{{ route('schedule') }}"{{ Request()->query('coach') === null ? ' selected' : '' }}>Все
              тренеры
            </option>
            @foreach($coaches as $slug => $coach)
              <option
                value="{{ route('schedule', 'coach=' . $slug) }}"{{ Request()->query('coach') === $slug ? ' selected' : '' }}>{{ $coach }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-4 col-lg-3">
          <select class="custom-select mb-2" onchange="top.location.href = this.options[this.selectedIndex].value">
            <option value="{{ route('schedule') }}"{{ Request()->query('day') === null ? ' selected' : '' }}>Все дни
            </option>
            @foreach($days as $slug => $day)
              <option
                value="{{ route('schedule', 'day=' . $slug) }}"{{ Request()->query('day') === $slug ? ' selected' : '' }}>{{ $day }}</option>
            @endforeach
          </select>
        </div>

      </div>

      <div class="row">
        <div class="col">

          {{--Desktop--}}
          <div class="d-none d-lg-block">
            <table class="table border-0 text-center mb-0" style="border-radius: 0.25rem; overflow: hidden;">
              <thead>
              <tr>
                <th class="border-top-0 border-bottom border-right"></th>
                @foreach($days as $slug => $day)
                  <th
                    class="d-none d-xl-table-cell p-3 border-top-0 border-bottom{{ $loop->last ? '' : ' border-right' }}">{{ $day }}</th>
                  <th
                    class="d-xl-none p-3 border-top-0 border-bottom{{ $loop->last ? '' : ' border-right' }}">{{ getDayAbbr($day) }}</th>
                @endforeach
              </tr>
              </thead>
              <tbody>
              @if(count($trainings) > 0)
                @foreach($trainings as $training)
                  <tr>
                    <th
                      class="align-middle border-top-0 border-right{{ $loop->last ? ' border-bottom-0' : ' border-bottom' }}">{{ $training->start_time }}</th>

                    @foreach($days as $slug => $day)
                      @if($training->day === $day)
                        @component('partials.training', ['training' => $training])
                        @endcomponent
                      @else
                        <td class="border-0"></td>
                      @endif
                    @endforeach

                  </tr>
                @endforeach
              @else
                <tr>
                  <td class="align-middle border-0 p-3" colspan="{{ count($days) + 1 }}">Тренировки отсутствуют</td>
                </tr>
              @endif

              </tbody>
            </table>
          </div>


          {{--Mobile--}}
          <div class="d-lg-none">

            @foreach($days as $slug => $day)

              <table class="table border-0 text-center{{ $loop->last ? ' mb-0' : ' mb-3' }}"
                     style="border-radius: 0.25rem; overflow: hidden;">
                <thead>
                <tr>
                  <th class="border-0">{{ $day }}</th>
                </tr>
                </thead>
                <tbody>

                @foreach($trainings as $training)

                  @if($training->day === $day)

                  <tr>

                    @component('partials.training', ['training' => $training])
                    @endcomponent

                  </tr>

                  @endif

                @endforeach

                </tbody>
              </table>

            @endforeach

          </div>

        </div>
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
