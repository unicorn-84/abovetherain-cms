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
    <main class="py-5 flex-fill" id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    {{--todo: Сделать настройкой--}}
                    <a href="https://vk.com/naddozhdem?w=app5708398_-168182015" class="btn btn-primary btn-block mb-4"
                       role="button"
                       aria-disabled="true">
                        Записаться на занятие&nbsp;
                        <i class="fab fa-vk fa-sm"></i>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col">

                    {{--Desktop--}}
                    <div class="d-none d-lg-block">
                        <table class="table border-0 bg-light text-center" style="border-radius: 0.25rem; overflow: hidden;">
                            <thead>
                            <tr>
                                <th class="border-top-0 border-bottom border-right"></th>
                                @foreach($days as $day)
                                    <th class="d-none d-xl-table-cell p-3 border-top-0 border-bottom{{ $loop->last ? '' : ' border-right' }}">{{ $day }}</th>
                                    <th class="d-xl-none p-3 border-top-0 border-bottom{{ $loop->last ? '' : ' border-right' }}">{{ getDayAbbr($day) }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($events) > 0)
                                @foreach($events as $time => $event)
                                    <tr>
                                        <th class="align-middle border-top-0 border-right{{ $loop->last ? ' border-bottom-0' : ' border-bottom' }}">{{ $time }}</th>

                                        @foreach($event as $item)
                                            @if($item)
                                                @component('partials.training', ['training' => $item])
                                                @endcomponent
                                            @else
                                                <td class="border-0"></td>
                                            @endif
                                        @endforeach

                                        {{--@for($i = 0; $i < count($days); $i += 1)--}}
                                        {{--@if($events[($loop->iteration) - 1][$i])--}}
                                        {{----}}
                                        {{--@else--}}
                                        {{--<td class="border-0"></td>--}}
                                        {{--@endif--}}
                                        {{--@endfor--}}
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

                    @foreach($days as $day)

                        <table class="table table-light border-0 text-center mb-3"
                               style="border-radius: 0.25rem; overflow: hidden;">
                            <thead>
                            <tr>
                                <th class="border-0">{{ $day }}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php
                                $isTrainings = false;
                            @endphp

                            @foreach($events as $event)

                                @if($event[$day])

                                    @php
                                        $isTrainings = true;
                                    @endphp

                                    <tr>

                                    @component('partials.training', ['training' => $event[$day]])
                                    @endcomponent

                                    </tr>

                                @endif

                            @endforeach

                            @if($isTrainings === false)
                                <tr>
                                    <td class="border-top">Тренировки отсутствуют</td>
                                </tr>
                            @endif


                            </tbody>
                        </table>

                    @endforeach

                    </div>




                    {{--<table class="table text-center mb-0 border-0"--}}
                    {{--style="border-radius: 0.25rem; overflow: hidden;">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th class="border-0 bg-light">{{ $day }}</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}

                    {{--@foreach($trainings as $training)--}}

                    {{--<tr>--}}

                    {{--@component('partials.training', ['training' => $training])--}}
                    {{--@endcomponent--}}

                    {{--</tr>--}}

                    {{--@endforeach--}}

                    {{--</tbody>--}}
                    {{--</table>--}}


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
