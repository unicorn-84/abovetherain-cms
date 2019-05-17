<br>
@if(isset($dataTypeContent->{$row->field}))
    <?php $images = json_decode($dataTypeContent->{$row->field}); ?>
    @if($images != null)
        @foreach($images as $image)
            <div class="img_settings_container" data-field-name="{{ $row->field }}" style="position: relative; float: left; margin-right: 1rem; margin-bottom: 0.5rem">
                <img src="{{ Voyager::image( $image ) }}" data-file-name="{{ $image }}" data-id="{{ $dataTypeContent->id }}" class="img-thumbnail" style="width: 320px;">
              <a href="#" class="voyager-x remove-multi-image" style="font-size: 2rem;"></a>
            </div>
        @endforeach
    @endif
@endif
<div class="clearfix"></div>
<input @if($row->required == 1 && !isset($dataTypeContent->{$row->field})) required @endif type="file" name="{{ $row->field }}[]" multiple="multiple" accept="image/*">
