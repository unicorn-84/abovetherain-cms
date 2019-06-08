<?php

namespace App\Http\Controllers\Voyager\ContentTypes;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\File;
use TCG\Voyager\Http\Controllers\ContentTypes\BaseType;

class MultipleVideo extends BaseType
{
  /**
   * @return string
   */
  public function handle()
  {
    $filesPath = [];
    $files = $this->request->file($this->row->field);

    if (!$files) {
      return null;
    }

    foreach ($files as $file) {
      if (!$file->isValid()) {
        continue;
      }

      $path = $this->slug . DIRECTORY_SEPARATOR . $this->request->slug . DIRECTORY_SEPARATOR;

      $filePath = Storage::disk(config('voyager.storage.disk'))->putFile($path, new File($file), 'public');
      array_push($filesPath, $filePath);
    }

    return json_encode($filesPath);
  }
}
