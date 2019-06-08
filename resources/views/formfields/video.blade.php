@if(isset($dataTypeContent->{$row->field}))
  <div data-field-name="{{ $row->field }}">
    <div class="embed-responsive embed-responsive-{{ isset($dataTypeContent->aspect_ratio) ? $dataTypeContent->aspect_ratio : '16by9' }}">
      <video src="{{ Storage::disk(config('voyager.storage.disk'))->url($dataTypeContent->{$row->field}) }}" class="embed-responsive-item fileType" data-file-name="{{ $dataTypeContent->{$row->field} }}" data-id="{{ $dataTypeContent->id }}" controls{!! isset($dataTypeContent->poster) ? ' poster="' . Storage::disk(config('voyager.storage.disk'))->url($dataTypeContent->poster) . '"' : '' !!}></video>
    </div>
  </div>
@endif
<input @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file"
       name="{{ $row->field }}" accept="video/*">
