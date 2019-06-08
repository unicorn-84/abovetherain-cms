<div>
  @if(isset($dataTypeContent->{$row->field}))
    <div class="clearfix"></div>
    <div data-field-name="{{ $row->field }}">
      <img
        src="@if( !filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL)){{ Voyager::image( $dataTypeContent->{$row->field} ) }}@else{{ $dataTypeContent->{$row->field} }}@endif"
        data-file-name="{{ $dataTypeContent->{$row->field} }}" data-id="{{ $dataTypeContent->id }}"
        style="max-width: 320px; margin-bottom: 0.5rem;" class="img-thumbnail">
      <a href="#" class="voyager-x remove-single-image" style="font-size: 2rem;"></a>
    </div>
  @endif
  <input @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file"
         name="{{ $row->field }}" accept="image/*">
</div>
