{{--@php--}}
  {{--if (isset($training->bg_color) && isset($training->text_color)) {--}}
    {{--$bg = 'background-color: ' . $training->bg_color . ';';--}}
    {{--$color = 'color: ' . $training->text_color . ';';--}}
    {{--$style = 'style="border-width: 0 !important; background-color: ' . $training->bg_color . ' !important; color: ' . $training->text_color . ';"';--}}
  {{--} else if (isset($training->bg_color)) {--}}
    {{--$style = 'style="border-width: 0 !important; background-color: ' . $training->bg_color . ';"';--}}
  {{--} else if (isset($training->text_color)) {--}}
    {{--$style = 'style="color: ' . $training->text_color . ';"';--}}
  {{--}--}}
{{--@endphp--}}
<td class="align-middle border text-left p-4 p-lg-2"{!! isset($style) ? ' ' . $style : '' !!}>
  <div class="h5 text-truncate mb-1">
    <a href="{{ url('/services/' . $training->service_slug) }}" class="text-reset">{{ $training->service_title }}</a>
  </div>
  <div class="mb-1">{{ $training->start_time }}-{{ $training->end_time }}</div>
  <div class="h6 text-truncate mb-1">
    <a href="{{ url('/coaches/' . $training->coach_slug) }}" class="text-reset">{{ $training->coach_title }}</a>
  </div>
  @if(isset($training->badge_text))
    <div>
      <span class="badge badge-pill {{ $training->badge }}">{{ $training->badge_text }}</span>
    </div>
  @endif
</td>
