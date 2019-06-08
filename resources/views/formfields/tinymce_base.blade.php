<textarea title="{{ $row->field }}" class="form-control tinymce_base" name="{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>
