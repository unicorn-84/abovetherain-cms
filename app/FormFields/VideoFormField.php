<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class VideoFormField extends AbstractHandler
{
  protected $codename = 'video';

  public function createContent($row, $dataType, $dataTypeContent, $options)
  {
    return view('formfields.video', [
      'row' => $row,
      'options' => $options,
      'dataType' => $dataType,
      'dataTypeContent' => $dataTypeContent
    ]);
  }
}
