<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
  public function setDescriptionAttribute($value)
  {
    $truncated = Str::limit($value, 100, '...');
    $this->attributes['description'] = $truncated;
  }
}
