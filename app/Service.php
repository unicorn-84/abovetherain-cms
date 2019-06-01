<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
//  public function setDescriptionAttribute($value)
//  {
//    $truncated = Str::limit($value, 100, '...');
//    $this->attributes['description'] = $truncated;
//  }

  public function coaches()
  {
    return $this->belongsToMany('App\Coach');
  }

  public function trainings()
  {
    return $this->hasMany('App\Training');
  }
}
