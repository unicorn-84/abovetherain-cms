<td class="align-middle border p-4 p-lg-3 {{ $training->mobile_text_align ?? 'text-lg-center' }} {{ $training->laptop_text_align ?? 'text-lg-center' }}" style="background-color: {{ $training->fon_color ?? 'transparent' }}">
  <div class="h5 my-2">
    @if($training->service_content)
      <a href="{{ route('service', $training->service_slug) }}" class="text-reset" style="color: {{ $training->direction_color ?? Voyager::setting('schedule.schedule_text_color') }}!important;">{{ $training->service_title }}</a>
    @else
      <div class="text-reset h5 mb-0" style="color: {{ $training->direction_color ?? Voyager::setting('schedule.schedule_text_color') }}!important;">{{ $training->service_title }}</div>
    @endif
  </div>
  <div class="my-1" style="color: {{ $training->time_color ?? Voyager::setting('schedule.schedule_text_color') }}!important;">{{ $training->start_time }}-{{ $training->end_time }}</div>
  <div class="my-2 h6">
    @if($training->coach_content)
      <a href="{{ route('coach', $training->coach_slug) }}" class="text-reset" style="color: {{ $training->coach_color ?? Voyager::setting('schedule.schedule_text_color') }}!important;">{{ $training->coach_title }}</a>
    @else
      <div class="text-reset h6 mb-0" style="color: {{ $training->coach_color ?? Voyager::setting('schedule.schedule_text_color') }}!important;">{{ $training->coach_title }}</div>
    @endif
  </div>
  @if(isset($training->info))
    <div>
      {!! $training->info !!}
    </div>
  @endif
</td>
