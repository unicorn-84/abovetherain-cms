<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class TinymceBaseFormField extends AbstractHandler
{
  protected $codename = 'tinymce_base';

  public function createContent($row, $dataType, $dataTypeContent, $options)
  {
    return view('formfields.tinymce_base', [
      'row' => $row,
      'options' => $options,
      'dataType' => $dataType,
      'dataTypeContent' => $dataTypeContent
    ]);
  }
}
