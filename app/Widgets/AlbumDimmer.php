<?php

namespace App\Widgets;

use App\Album;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class AlbumDimmer extends BaseDimmer
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
    $count = Album::count();
    $string = trans_choice('voyager::dimmer.album', $count);

    return view('voyager::dimmer', array_merge($this->config, [
      'icon'   => 'voyager-photos',
      'title'  => "{$count} {$string}",
      'text'   => __('voyager::dimmer.album_text', ['count' => $count, 'string' => Str::lower($string)]),
      'button' => [
        'text' => __('voyager::dimmer.album_link_text'),
        'link' => route('voyager.albums.index'),
      ],
      'image' => 'images/widgets/albums-bg.jpg',
    ]));
  }

  /**
   * Determine if the widget should be displayed.
   *
   * @return bool
   */
  public function shouldBeDisplayed()
  {
    return app('VoyagerAuth')->user()->can('browse', app(Album::class));
  }
}
