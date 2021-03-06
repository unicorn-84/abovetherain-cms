<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use App\Event;
use TCG\Voyager\Models\Permission;

class EventsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //Data Type
    $dataType = $this->dataType('slug', 'events');
    if (!$dataType->exists) {
      $dataType->fill([
        'name' => 'events',
        'display_name_singular' => __('voyager::seeders.data_types.event.singular'),
        'display_name_plural' => __('voyager::seeders.data_types.event.plural'),
        'icon' => 'voyager-news',
        'model_name' => 'App\\Event',
        'controller' => '',
        'generate_permissions' => 1,
        'description' => '',
      ])->save();
    }

    //Data Rows
    $eventDataType = DataType::where('slug', 'events')->firstOrFail();

    $dataRow = $this->dataRow($eventDataType, 'id'); // 1
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

    $dataRow = $this->dataRow($eventDataType, 'title'); // 2
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
            'rule' => 'required'
          ],
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'slug'); // 3
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.slug'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 3,
        'details' => [
          'slugify' => [
            'origin' => 'title',
            'forceUpdate' => true
          ],
          'validation' => [
            'rule' => 'required|unique:coaches|max:255'
          ],
          'display' => [
            'width' => '6'
          ],
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'seo_title'); // 4
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text_area',
        'display_name' => __('voyager::seeders.data_rows.seo_title'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 4,
        'details' => [
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'seo_description'); // 5
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text_area',
        'display_name' => __('voyager::seeders.data_rows.seo_description'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 5,
        'details' => [
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'description'); // 6
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'tinymce_base',
        'display_name' => __('voyager::seeders.data_rows.description'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 6,
        'details' => [
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'date'); // 7
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'date',
        'display_name' => __('voyager::seeders.data_rows.date'),
        'required' => 0,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 7,
        'details' => [
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'position'); // 8
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'number',
        'display_name' => __('voyager::seeders.data_rows.position'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 8,
        'details' => [
          'validation' => [
            'rule' => 'numeric|nullable'
          ],
          'display' => [
            'width' => '6',
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'poster'); // 9
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
        'order' => 9,
        'details' => [
          'validation' => [
            'rule' => 'image'
          ],
          'quality' => '75',
          'resize' => [
            'width' => '1200',
            'height' => null
          ],
          'thumbnails' => [
            [
              'name' => 'resize-800',
              'quality' => '75',
              'resize' => [
                'width' => '800',
                'height' => null
              ],
            ],
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'content'); // 18
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'tinymce_full',
        'display_name' => __('voyager::seeders.data_rows.content'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 18,
        'details' => '',
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'created_at'); // 19
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'timestamp',
        'display_name' => __('voyager::seeders.data_rows.created_at'),
        'required' => 1,
        'browse' => 0,
        'read' => 1,
        'edit' => 0,
        'add' => 0,
        'delete' => 0,
        'order' => 19,
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'updated_at'); // 20
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'timestamp',
        'display_name' => __('voyager::seeders.data_rows.updated_at'),
        'required' => 1,
        'browse' => 0,
        'read' => 0,
        'edit' => 0,
        'add' => 0,
        'delete' => 0,
        'order' => 20,
      ])->save();
    }

    //Menu Item
    $menu = Menu::where('name', 'Admin')->firstOrFail();
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu->id,
      'title' => __('voyager::seeders.menu_items.events'),
      'url' => null,
      'route' => 'voyager.events.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-news',
        'order' => 3,
      ])->save();
    }

    //Permissions
    Permission::generateFor('events');

    //Фабрика
//    factory(Event::class, 6)->create();
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
