<?php

namespace App\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class MultipleVideosHandler extends AbstractHandler
{
  protected $codename = 'multiple_videos';

  public function createContent($row, $dataType, $dataTypeContent, $options)
  {
    return view('formfields.multiple_videos', [
      'row' => $row,
      'options' => $options,
      'dataType' => $dataType,
      'dataTypeContent' => $dataTypeContent
    ]);
  }
}
