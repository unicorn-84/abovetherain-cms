<?php

use Illuminate\Database\Seeder;
use App\Video;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class VideosTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //Data Type
    $dataType = $this->dataType('slug', 'videos');
    if (!$dataType->exists) {
      $dataType->fill([
        'name' => 'videos',
        'display_name_singular' => __('voyager::seeders.data_types.video.singular'),
        'display_name_plural' => __('voyager::seeders.data_types.video.plural'),
        'icon' => 'voyager-video',
        'model_name' => 'App\\Video',
        'controller' => '',
        'generate_permissions' => 1,
        'description' => '',
      ])->save();
    }

    //Data Rows
    $videoDataType = DataType::where('slug', 'videos')->firstOrFail();

    $dataRow = $this->dataRow($videoDataType, 'id'); // ID
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'number',
        'display_name' => __('voyager::seeders.data_rows.id'),
        'required' => 1,
        'browse' => 0,
        'read' => 0,
        'edit' => 0,
        'add' => 0,
        'delete' => 0,
        'order' => 1,
      ])->save();
    }

    $dataRow = $this->dataRow($videoDataType, 'title'); // TITLE
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.title'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 2,
        'details' => [
          'validation' => [
            'rule' => 'required|unique:videos|max:255'
          ],
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($videoDataType, 'aspect_ratio'); // RATIO
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'select_dropdown',
        'display_name' => __('voyager::seeders.data_rows.aspect_ratio'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 3,
        'details' => [
          'validation' => [
            'rule' => 'required|max:255'
          ],
          'display' => [
            'width' => '6'
          ],
          'default' => '16:9',
          'options' => [
            '16by9' => '16:9',
            '4by3' => '4:3',
            '1by1' => '1:1',
            '21by9' => '21:9',
          ],
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($videoDataType, 'video_uri'); // VIDEO URI
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'video',
        'display_name' => __('voyager::seeders.data_rows.video'),
        'required' => 1,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 4,
        'details' => [
          'validation' => [
            'rule' => 'unique:videos|max:200000'
          ],
          'display' => [
            'width' => '6'
          ],
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($videoDataType, 'poster'); // Poster
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'image',
        'display_name' => __('voyager::seeders.data_rows.poster'),
        'required' => 0,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 5,
        'details' => [
          'validation' => [
            'rule' => 'image'
          ],
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    //Menu Item
    $menu = Menu::where('name', 'Admin')->firstOrFail();
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu->id,
      'title' => __('voyager::seeders.menu_items.videos'),
      'url' => '',
      'route' => 'voyager.videos.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-video',
        'color' => null,
        'parent_id' => null,
        'order' => 8,
      ])->save();
    }

    //Permissions
    Permission::generateFor('videos');
  }

  /**
   * [dataRow description].
   *
   * @param [type] $type  [description]
   * @param [type] $field [description]
   *
   * @return [type] [description]
   */
  protected function dataRow($type, $field)
  {
    return DataRow::firstOrNew([
      'data_type_id' => $type->id,
      'field' => $field,
    ]);
  }

  /**
   * [dataType description].
   *
   * @param [type] $field [description]
   * @param [type] $for   [description]
   *
   * @return [type] [description]
   */
  protected function dataType($field, $for)
  {
    return DataType::firstOrNew([$field => $for]);
  }
}
