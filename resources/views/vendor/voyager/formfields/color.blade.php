@php
  $color = '#ffffff';
  if($row->field === 'text_color') {
    $color = '#00be9f';
  } else if ($row->field === 'badge_color') {
    $color = '#28a745';
  }
@endphp
<input type="color" class="form-control" name="{{ $row->field }}"
       value="{{ $dataTypeContent->{$row->field} ? old($row->field) : $color }}">
