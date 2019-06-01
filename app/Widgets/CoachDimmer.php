<?php

namespace App\Widgets;

use App\Coach;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class CoachDimmer extends BaseDimmer
{
  /**
   * The configuration array.
   *
   * @var array
   */
  protected $config = [];

  /**
   * Treat this method as a controller action.
   * Return view() or other content to display.
   */
  public function run()
  {
    $count = Coach::count();
    $string = trans_choice('voyager::dimmer.coach', $count);

    return view('voyager::dimmer', array_merge($this->config, [
      'icon'   => 'voyager-people',
      'title'  => "{$count} {$string}",
      'text'   => __('voyager::dimmer.coach_text', ['count' => $count, 'string' => Str::lower($string)]),
      'button' => [
        'text' => __('voyager::dimmer.coach_link_text'),
        'link' => route('voyager.coaches.index'),
      ],
      'image' => 'images/widgets/coaches-bg.jpg',
    ]));
  }

  /**
   * Determine if the widget should be displayed.
   *
   * @return bool
   */
  public function shouldBeDisplayed()
  {
    return app('VoyagerAuth')->user()->can('browse', app(Coach::class));
  }
}
