<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;


class Event extends Model
{

  public function getLocalDateAttribute()
  {
    Date::setLocale('ru');
    if ($this->date) {
      return Date::parse($this->date)->format('j F');
    }
    return null;
  }
}
