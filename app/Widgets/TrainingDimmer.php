<?php

namespace App\Widgets;

use App\Training;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class TrainingDimmer extends BaseDimmer
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
    $count = Training::count();
    $string = trans_choice('voyager::dimmer.training', $count);

    return view('voyager::dimmer', array_merge($this->config, [
      'icon'   => 'voyager-barbell',
      'title'  => "{$count} {$string}",
      'text'   => __('voyager::dimmer.training_text', ['count' => $count, 'string' => Str::lower($string)]),
      'button' => [
        'text' => __('voyager::dimmer.training_link_text'),
        'link' => route('voyager.trainings.index'),
      ],
      'image' => 'images/widgets/trainings-bg.jpg',
    ]));
  }

  /**
   * Determine if the widget should be displayed.
   *
   * @return bool
   */
  public function shouldBeDisplayed()
  {
    return app('VoyagerAuth')->user()->can('browse', app(Training::class));
  }
}
