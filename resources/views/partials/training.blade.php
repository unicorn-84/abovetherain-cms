{{--todo: добавить выравнивание--}}
{{--todo: добавить цвет фона--}}
<td class="align-middle border text-left text-lg-center p-4 py-lg-2 px-lg-2">
  <div class="h5 my-2">
    @if($training->service_content)
      <a href="{{ route('service', $training->service_slug) }}" class="text-reset" {!! isset($training->text_color) ? ' style="color:' . $training->text_color . '!important;"' : '' !!}>{{ $training->service_title }}</a>
    @else
      <div class="text-reset h5 mb-0" {!! isset($training->text_color) ? ' style="color:' . $training->text_color . '!important;"' : '' !!}>{{ $training->service_title }}</div>
    @endif
  </div>
  {{--todo: добавить цвет времени--}}
  <div class="my-1">{{ $training->start_time }}-{{ $training->end_time }}</div>
  <div class="my-2 h6">
    @if($training->coach_content)
      <a href="{{ route('coach', $training->coach_slug) }}" class="text-reset" {!! isset($training->text_color) ? ' style="color:' . $training->text_color . '!important;"' : '' !!}>{{ $training->coach_title }}</a>
    @else
      <div class="text-reset h6 mb-0" {!! isset($training->text_color) ? ' style="color:' . $training->text_color . '!important;"' : '' !!}>{{ $training->coach_title }}</div>
    @endif
  </div>
  {{--todo: добавить content вместо badge--}}
  @if(isset($training->badge_text))
    <div>
      <span class="badge badge-pill"{!! isset($training->badge_color) ? ' style="background-color:' . $training->badge_color . '"' : '' !!}>{{ $training->badge_text }}</span>
    </div>
  @endif
</td>
