<div>
  <input id="transparent_checkbox" type="checkbox" name="transparent" value="transparent" {!! old($row->field, $dataTypeContent->{$row->field}) ? '' : 'checked' !!} onchange="this.checked ? document.querySelector('#training_fon_color').disabled = true : document.querySelector('#training_fon_color').disabled = false;">&nbsp;
  <label style="" for="transparent_checkbox">Прозрачный</label>
</div>
<input id="training_fon_color" type="color" class="form-control" name="{{ $row->field }}"
       value="{{ old($row->field, $dataTypeContent->{$row->field}) }}" {{ old($row->field, $dataTypeContent->{$row->field}) ? '' : 'disabled' }}>
