<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class TinymceFullFormField extends AbstractHandler
{
  protected $codename = 'tinymce_full';

  public function createContent($row, $dataType, $dataTypeContent, $options)
  {
    return view('formfields.tinymce_full', [
      'row' => $row,
      'options' => $options,
      'dataType' => $dataType,
      'dataTypeContent' => $dataTypeContent
    ]);
  }
}
