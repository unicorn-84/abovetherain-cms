@if(isset($dataTypeContent->{$row->field}))
  <div class="clearfix"></div>
    <div data-field-name="{{ $row->field }}" style="display: inline-block; position: relative; margin-bottom: 0.5rem">
        <a href="#" class="voyager-x remove-single-image" style="font-size: 1.2rem; position: absolute; top: 0.2rem; right: 0.2rem;"></a>
        <img src="@if( !filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $dataTypeContent->{$row->field} ) }}@else{{ $dataTypeContent->{$row->field} }}@endif"
          data-file-name="{{ $dataTypeContent->{$row->field} }}" data-id="{{ $dataTypeContent->id }}" class="img-thumbnail"
          style="height: 100px;">
    </div>
@endif
<input @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}" accept="image/*">
