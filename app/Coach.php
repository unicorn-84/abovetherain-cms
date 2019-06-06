<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Coach extends Model
{
  use Resizable;

  public function services()
  {
    return $this->belongsToMany('App\Service');
  }

  public function trainings()
  {
    return $this->hasMany('App\Training');
  }
}
