<?php

namespace App\Widgets;

use App\Service;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class ServiceDimmer extends BaseDimmer
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
    $count = Service::count();
    $string = trans_choice('voyager::dimmer.service', $count);

    return view('voyager::dimmer', array_merge($this->config, [
      'icon'   => 'voyager-window-list',
      'title'  => "{$count} {$string}",
      'text'   => __('voyager::dimmer.service_text', ['count' => $count, 'string' => Str::lower($string)]),
      'button' => [
        'text' => __('voyager::dimmer.service_link_text'),
        'link' => route('voyager.services.index'),
      ],
      'image' => 'images/widgets/services-bg.jpg',
    ]));
  }

  /**
   * Determine if the widget should be displayed.
   *
   * @return bool
   */
  public function shouldBeDisplayed()
  {
    return app('VoyagerAuth')->user()->can('browse', app(Service::class));
  }
}
