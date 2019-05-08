<?php

namespace App;
use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $guarded = [];
  use Resizable;
}
