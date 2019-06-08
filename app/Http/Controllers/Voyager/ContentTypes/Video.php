<?php

namespace App\Http\Controllers\Voyager\ContentTypes;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use TCG\Voyager\Http\Controllers\ContentTypes\BaseType;

class Video extends BaseType
{
  /**
   * @return string
   */
  public function handle()
  {
    if (!$this->request->hasFile($this->row->field)) {
      return null;
    }

    $file = $this->request->file($this->row->field);

    if (!$file->isValid()) {
      return null;
    }

    $path = $this->slug . DIRECTORY_SEPARATOR . $this->request->slug . DIRECTORY_SEPARATOR;

    $filePath = Storage::disk(config('voyager.storage.disk'))->putFile($path, new File($file), 'public');

    return $filePath;
  }
}
