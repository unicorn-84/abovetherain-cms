<input title="color" type="color" class="form-control" name="{{ $row->field }}"
       value="{{ old($row->field, $dataTypeContent->{$row->field}) ?? Voyager::setting('schedule.schedule_text_color') }}">
