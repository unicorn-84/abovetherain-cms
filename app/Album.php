<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Album extends Model
{
  use Resizable;

  public function getCountImagesAttribute()
  {
    if ($this->images) {
      return count(json_decode($this->images));
    }
    return 0;
  }

  public function getCountVideosAttribute()
  {
    if ($this->videos) {
      return count(json_decode($this->videos));
    }
    return 0;
  }
}
