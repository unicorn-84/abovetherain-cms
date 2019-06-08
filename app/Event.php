<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use TCG\Voyager\Traits\Resizable;


class Event extends Model
{

  use Resizable;

  public function getLocalDateAttribute()
  {
    Date::setLocale('ru');
    if ($this->date) {
      return Date::parse($this->date)->format('j F Y');
    }
    return null;
  }
}
