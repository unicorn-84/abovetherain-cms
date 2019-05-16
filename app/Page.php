<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string|null $seo_title
 * @property string|null $seo_description
 * @property string|null $fon
 * @property string|null $mobile_fon
 * @property int $has_header
 * @property int $has_pagetitle
 * @property int $has_footer
 * @property string|null $head_code
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereContentCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereFon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereHeadCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereIsFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereIsHeader($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereIsPageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereMobileFon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereSeoDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereSeoTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Page whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Page extends Model
{
  protected $guarded = [];
}
