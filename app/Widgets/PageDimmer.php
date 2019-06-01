<?php

namespace App\Widgets;

use App\Page;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class PageDimmer extends BaseDimmer
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
    $count = Page::count();
    $string = trans_choice('voyager::dimmer.page', $count);

    return view('voyager::dimmer', array_merge($this->config, [
      'icon'   => 'voyager-file-text',
      'title'  => "{$count} {$string}",
      'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
      'button' => [
        'text' => __('voyager::dimmer.page_link_text'),
        'link' => route('voyager.pages.index'),
      ],
      'image' => 'images/widgets/pages-bg.jpg',
    ]));
  }

  /**
   * Determine if the widget should be displayed.
   *
   * @return bool
   */
  public function shouldBeDisplayed()
  {
    return app('VoyagerAuth')->user()->can('browse', app(Page::class));
  }
}
