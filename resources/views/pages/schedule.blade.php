@extends('layouts.app')

@section('custom')
  @if(Voyager::setting("schedule.schedule_fon_color") || Voyager::setting("schedule.schedule_text_color"))
    <style>
      @if(Voyager::setting("schedule.schedule_fon_color"))
        table {
        background-color: {{ Voyager::setting("schedule.schedule_fon_color") }}   !important;
      }

      @endif
      @if(Voyager::setting("schedule.schedule_text_color"))
        table {
        color: {{ Voyager::setting("schedule.schedule_text_color") }}   !important;
      }
      @endif
    </style>
  @endif
@endsection

@section('title')
  @if(isset($page->seo_title))
    <title>{{ $page->seo_title }}</title>
  @elseif(Voyager::setting('common.seo_title'))
    <title>{{ Voyager::setting('common.seo_title') }}</title>
  @endif
@endsection

@section('description')
  @if(isset($page->seo_description))
    <meta name="description" content="{{ $page->seo_description }}">
  @elseif(Voyager::setting('common.seo_description'))
    <meta name="description" content="{{ Voyager::setting('common.seo_description') }}">
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
      @if(Voyager::setting("schedule.vk_sign_up"))
        <div class="row">
          <div class="col-md-5 col-lg-4 col-xl-3">
            <a href="{{ Voyager::setting("schedule.vk_sign_up") }}" class="btn btn-primary btn-block mb-4"
               role="button"
               aria-disabled="true">
              Записаться на занятие&nbsp;
              <i class="fab fa-vk fa-sm"></i>
            </a>
          </div>
        </div>
      @endif
      <div class="row mb-3">

        <div class="col-md-4 col-xl-3">
          <select title="Тренировки" class="custom-select mb-2" onchange="top.location.href = this.options[this.selectedIndex].value">
            <option value="{{ route('schedule') }}"{{ Request()->query('training') === null ? ' selected' : '' }}>Все
              тренировки
            </option>
            @foreach($services as $slug => $service)
              <option
                value="{{ route('schedule', 'training=' . $slug) }}"{{ Request()->query('training') === $slug ? ' selected' : '' }}>{{ $service }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-4 col-xl-3">
          <select title="Тренеры" class="custom-select mb-2" onchange="top.location.href = this.options[this.selectedIndex].value">
            <option value="{{ route('schedule') }}"{{ Request()->query('coach') === null ? ' selected' : '' }}>Все
              тренеры
            </option>
            @foreach($coaches as $slug => $coach)
              <option
                value="{{ route('schedule', 'coach=' . $slug) }}"{{ Request()->query('coach') === $slug ? ' selected' : '' }}>{{ $coach }}</option>
            @endforeach
          </select>
        </div>

        <div class="col-md-4 col-xl-3">
          <select title="Дни недели" class="custom-select mb-2" onchange="top.location.href = this.options[this.selectedIndex].value">
            <option value="{{ route('schedule') }}"{{ Request()->query('day') === null ? ' selected' : '' }}>Все дни
            </option>
            @foreach($days as $day)
              <option
                value="{{ route('schedule', 'day=' . $day) }}"{{ Request()->query('day') == $day ? ' selected' : '' }}>{{ getDayAbbr($day)['name'] }}</option>
            @endforeach
          </select>
        </div>

      </div>

      <div class="row">
        <div class="col">
          {{--Desktop--}}
          <div class="d-none d-lg-block">
            <table class="table text-center mb-0" style="border-radius: 0.25rem; overflow: hidden;">
              <thead>
              <tr>
                <th class="border-top-0 border-bottom border-right"></th>
                @foreach($days as $day)
                  <th
                    class="d-none d-xl-table-cell p-3 border-top-0 border-bottom{{ $loop->last ? '' : ' border-right' }}">{{ getDayAbbr($day)['name'] }}</th>
                  <th
                    class="d-xl-none p-3 border-top-0 border-bottom{{ $loop->last ? '' : ' border-right' }}">{{ getDayAbbr($day)['abbr'] }}</th>
                @endforeach
              </tr>
              </thead>
              <tbody>
              @if(count($trainingsOfTheTime) > 0)
                @foreach($trainingsOfTheTime as $time => $daysOfTheTime)
                  <tr>
                    <th
                      class="align-middle border-top-0 border-right{{ $loop->last ? ' border-bottom-0' : ' border-bottom' }}">{{ $time }}</th>

                    @foreach($days as $weekDay)
                      @php $emptyDay = true; @endphp
                      @php $emptyDay = true; @endphp
                      @foreach($daysOfTheTime as $day => $trainings)

                        @if($day == $weekDay)
                          @php $emptyDay = false; @endphp
                          @component('partials.training', ['training' => $trainings[0]])
                          @endcomponent
                          @break
                        @endif
                      @endforeach

                      @if($emptyDay)
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

            @if(count($trainingsOfTheDay) > 0)

            @foreach($trainingsOfTheDay as $day => $timesOfTheDay)

              <table class="table text-center{{ $loop->last ? ' mb-0' : ' mb-3' }}"
                     style="border-radius: 0.25rem; overflow: hidden;">
                <thead>
                <tr>
                  <th class="border-top-0 border-right-0 border-bottom border-left-0">{{ getDayAbbr($day)['name'] }}</th>
                </tr>
                </thead>
                <tbody>

                @foreach($timesOfTheDay as $time => $trainings)

                  <tr>

                    @component('partials.training', ['training' => $trainings[0]])
                    @endcomponent

                  </tr>

                @endforeach

                </tbody>
              </table>

            @endforeach

            @else

              <table class="table text-center mb-0"
                     style="border-radius: 0.25rem; overflow: hidden;">
                <thead>
                <tr>
                  <th class="border-0">Тренировки отсутствуют</th>
                </tr>
                </thead>
              </table>

            @endif

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
