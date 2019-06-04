<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  public function albums()
  {
    return $this->belongsToMany('App\Album');
  }
}
