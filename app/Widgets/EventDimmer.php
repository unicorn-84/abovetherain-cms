<?php

namespace App\Widgets;

use App\Event;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class EventDimmer extends BaseDimmer
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
    $count = Event::count();
    $string = trans_choice('voyager::dimmer.event', $count);

    return view('voyager::dimmer', array_merge($this->config, [
      'icon'   => 'voyager-news',
      'title'  => "{$count} {$string}",
      'text'   => __('voyager::dimmer.event_text', ['count' => $count, 'string' => Str::lower($string)]),
      'button' => [
        'text' => __('voyager::dimmer.event_link_text'),
        'link' => route('voyager.events.index'),
      ],
      'image' => 'images/widgets/events-bg.jpg',
    ]));
  }

  /**
   * Determine if the widget should be displayed.
   *
   * @return bool
   */
  public function shouldBeDisplayed()
  {
    return app('VoyagerAuth')->user()->can('browse', app(Event::class));
  }
}
