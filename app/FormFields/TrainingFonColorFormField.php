<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class TrainingFonColorFormField extends AbstractHandler
{
  protected $codename = 'training_fon_color';

  public function createContent($row, $dataType, $dataTypeContent, $options)
  {
    return view('formfields.training_fon_color', [
      'row' => $row,
      'options' => $options,
      'dataType' => $dataType,
      'dataTypeContent' => $dataTypeContent
    ]);
  }
}
