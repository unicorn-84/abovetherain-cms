@php
  if (isset($training->bg_color) && isset($training->text_color)) {
    $bg = 'background-color: ' . $training->bg_color . ';';
    $color = 'color: ' . $training->text_color . ';';
    $style = 'style="background-color: ' . $training->bg_color . '; color: ' . $training->text_color . ';"';
  } else if (isset($training->bg_color)) {
    $style = 'style="background-color: ' . $training->bg_color . ';"';
  } else if (isset($training->text_color)) {
    $style = 'style="color: ' . $training->text_color . ';"';
  }
@endphp
<div class="text-left p-2"{!! isset($style) ? ' ' . $style : '' !!}>
  <div class="h5 text-truncate mb-1">
    <a href="{{ url('/services/' . $training->service->slug) }}" class="text-reset">{{ $training->service->title }}</a>
  </div>
  <div class="mb-1">{{ $training->start_time }}-{{ $training->end_time }}</div>
  @isset($training->coach)
    <div class="h6 text-truncate mb-1">
      <a href="{{ url('/coaches/' . $training->coach->slug) }}" class="text-reset">{{ $training->coach->title }}</a>
    </div>
  @endisset
  @isset($training->content)
    {!! $training->content !!}
  @endisset
</div>
