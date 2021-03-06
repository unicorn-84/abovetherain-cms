<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Permission;

class ServicesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    //Создание BREAD

    //Data Type
    $dataType = $this->dataType('slug', 'services');
    if (!$dataType->exists) {
      $dataType->fill([
        'name' => 'services',
        'display_name_singular' => __('voyager::seeders.data_types.service.singular'),
        'display_name_plural' => __('voyager::seeders.data_types.service.plural'),
        'icon' => 'voyager-window-list',
        'model_name' => 'App\\Service',
        'controller' => '',
        'generate_permissions' => 1,
        'description' => '',
      ])->save();
    }

    //Data Rows
    $serviceDataType = DataType::where('slug', 'services')->firstOrFail();

    $dataRow = $this->dataRow($serviceDataType, 'id');
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

    $dataRow = $this->dataRow($serviceDataType, 'title');
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

    $dataRow = $this->dataRow($serviceDataType, 'slug');
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

    $dataRow = $this->dataRow($serviceDataType, 'seo_title');
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

    $dataRow = $this->dataRow($serviceDataType, 'seo_description');
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
        'order' => 6,
        'details' => [
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($serviceDataType, 'subtitle'); // 4
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'tinymce_base',
        'display_name' => __('voyager::seeders.data_rows.subtitle'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 7,
        'details' => [
          'display' => [
            'width' => '6',
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($serviceDataType, 'description');
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
        'order' => 8,
        'details' => [
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }


    $dataRow = $this->dataRow($serviceDataType, 'poster');
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
            'rule' => 'image',
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

    $dataRow = $this->dataRow($serviceDataType, 'service_belongstomany_coach_relationship');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'relationship',
        'display_name' => __('voyager::seeders.data_rows.coaches'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 0,
        'details' => [
          'model' => 'App\\Coach',
          'table' => 'coaches',
          'type' => 'belongsToMany',
          'column' => 'id',
          'key' => 'id',
          'label' => 'title',
          'pivot_table' => 'coach_service',
          'pivot' => 1,
          'taggable' => '0',
          'display' => [
            'width' => '6'
          ],
        ],
        'order' => 10,
      ])->save();
    }

    $dataRow = $this->dataRow($serviceDataType, 'position');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'number',
        'display_name' => __('voyager::seeders.data_rows.position'),
        'required' => 0,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 11,
        'details' => [
          'validation' => [
            'rule' => 'numeric|nullable'
          ],
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($serviceDataType, 'content');
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

    $dataRow = $this->dataRow($serviceDataType, 'created_at');
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

    $dataRow = $this->dataRow($serviceDataType, 'updated_at');
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

    //Пункт в админ-меню
    $menu = Menu::where('name', 'Admin')->firstOrFail();
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu->id,
      'title' => __('voyager::seeders.menu_items.services'),
      'url' => null,
      'route' => 'voyager.services.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-window-list',
        'order' => 2,
      ])->save();
    }

    //Permissions
    Permission::generateFor('services');

    //Фабрика
//    factory(\App\Service::class, 12)->create();
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
