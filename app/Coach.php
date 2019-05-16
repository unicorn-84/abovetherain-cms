<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
  public function services()
  {
    return $this->belongsToMany('App\Service');
  }

  public function trainings()
  {
    return $this->hasMany('App\Training');
  }
}
