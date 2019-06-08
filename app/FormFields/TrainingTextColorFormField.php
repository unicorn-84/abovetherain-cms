<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class TrainingTextColorFormField extends AbstractHandler
{
  protected $codename = 'training_text_color';

  public function createContent($row, $dataType, $dataTypeContent, $options)
  {
    return view('formfields.training_text_color', [
      'row' => $row,
      'options' => $options,
      'dataType' => $dataType,
      'dataTypeContent' => $dataTypeContent
    ]);
  }
}
