<textarea title="{{ $row->field }}" class="form-control tinymce_full" name="{{ $row->field }}">
    {{ old($row->field, $dataTypeContent->{$row->field} ?? '') }}
</textarea>
