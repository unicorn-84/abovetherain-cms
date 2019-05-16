<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{

  protected $guarded = [];

  public function coach()
  {
    return $this->belongsTo('App\Coach');
  }

  public function service()
  {
    return $this->belongsTo('App\Service');
  }
}
