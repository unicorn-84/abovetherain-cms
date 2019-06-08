@if(isset($dataTypeContent->{$row->field}))
  @if(json_decode($dataTypeContent->{$row->field}) !== null)
    @foreach(json_decode($dataTypeContent->{$row->field}) as $file)
      <div data-field-name="{{ $row->field }}">
        <a class="fileType" target="_blank"
           href="{{ Storage::disk(config('voyager.storage.disk'))->url($file) ?: '' }}"
           data-file-name="{{ $file }}" data-id="{{ $dataTypeContent->id }}">
          {{ $file ?: '' }}
        </a>
        <a href="#" class="voyager-x remove-multi-file"></a>
      </div>
    @endforeach
  @endif
@endif
<div class="clearfix"></div>
<input @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file"
       name="{{ $row->field }}[]" multiple="multiple" accept="video/*">
