<td class="align-middle border text-left text-lg-center p-4 py-lg-2 px-lg-1">
  <div class="h6 text-truncate my-1">
    <a href="{{ url('/services/' . $training->service_slug) }}" class="text-reset" {!! isset($training->text_color) ? ' style="color:' . $training->text_color . '!important"' : '' !!}>{{ $training->service_title }}</a>
  </div>
  <div class="my-1"><small>{{ $training->start_time }}-{{ $training->end_time }}</small></div>
  <div class="text-truncate my-1">
    <a href="{{ url('/coaches/' . $training->coach_slug) }}" class="text-reset" {!! isset($training->text_color) ? ' style="color:' . $training->text_color . '!important"' : '' !!}>{{ $training->coach_title }}</a>
  </div>
  @if(isset($training->badge_text))
    <div>
      <span class="badge badge-pill"{!! isset($training->badge_color) ? ' style="background-color:' . $training->badge_color . '"' : '' !!}>{{ $training->badge_text }}</span>
    </div>
  @endif
</td>
