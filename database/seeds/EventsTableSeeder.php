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
        'display_name_singular' => __('voyager::seeders.data_types.events.singular'),
        'display_name_plural' => __('voyager::seeders.data_types.events.plural'),
        'icon' => 'voyager-news',
        'model_name' => 'App\\Event',
        'controller' => '',
        'generate_permissions' => 1,
        'description' => '',
      ])->save();
    }

    //Data Rows
    $eventDataType = DataType::where('slug', 'events')->firstOrFail();

    $dataRow = $this->dataRow($eventDataType, 'id');
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

    $dataRow = $this->dataRow($eventDataType, 'title');
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
          ]
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'slug');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.slug'),
        'required' => 0,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 3,
        'details' => [
          'slugify' => [
            'origin' => 'title',
            'forceUpdate' => true
          ]
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'seo_title');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.seo_title'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 4,
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'description');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.description'),
        'required' => 0,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 5,
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'seo_description');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.seo_description'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 6,
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'poster');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'image',
        'display_name' => __('voyager::seeders.data_rows.poster'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 7,
        'details' => [
          'validation' => [
            'rule' => 'image'
          ],
          'upsize' => true,
          'resize' => [
            'width' => '800',
            'height' => '533',
          ],
        ],
      ])->save();
    }


    $dataRow = $this->dataRow($eventDataType, 'content');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'rich_text_box',
        'display_name' => __('voyager::seeders.data_rows.content'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 9,
        'details' => '',
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'created_at');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'timestamp',
        'display_name' => __('voyager::seeders.data_rows.created_at'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 0,
        'add' => 0,
        'delete' => 0,
        'order' => 9,
      ])->save();
    }

    $dataRow = $this->dataRow($eventDataType, 'updated_at');
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
        'order' => 10,
      ])->save();
    }

    //Menu Item
    $menu = Menu::where('name', 'Admin')->firstOrFail();
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu->id,
      'title' => __('voyager::seeders.menu_items.events'),
      'url' => '',
      'route' => 'voyager.events.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-news',
        'color' => null,
        'parent_id' => null,
        'order' => 7,
      ])->save();
    }

    //Permissions
    Permission::generateFor('events');

    $event = Event::firstOrNew([
      'title' => 'Мастер-класс',
      'slug' => 'master-class',
    ]);
    if (!$event->exists) {
      $event->fill([
        'seo_title' => 'Мастер-класс',
        'poster' => 'demo/events/poster.jpg',
        'content' => '
          <h1 class="text-center">Мастер-класс</h1>
        '
      ])->save();
    }
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
