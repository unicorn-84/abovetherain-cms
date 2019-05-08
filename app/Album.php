<?php

namespace App;
use TCG\Voyager\Traits\Resizable;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  protected $guarded = [];
  use Resizable;
}
