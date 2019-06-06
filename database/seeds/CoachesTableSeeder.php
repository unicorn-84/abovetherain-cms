<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use App\Coach;
use TCG\Voyager\Models\Permission;

class CoachesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //Data Type
    $dataType = $this->dataType('slug', 'coaches');
    if (!$dataType->exists) {
      $dataType->fill([
        'name' => 'coaches',
        'display_name_singular' => __('voyager::seeders.data_types.coach.singular'),
        'display_name_plural' => __('voyager::seeders.data_types.coach.plural'),
        'icon' => 'voyager-people',
        'model_name' => 'App\\Coach',
        'controller' => '',
        'generate_permissions' => 1,
        'description' => '',
      ])->save();
    }

    //Data Rows
    $coachDataType = DataType::where('slug', 'coaches')->firstOrFail();

    $dataRow = $this->dataRow($coachDataType, 'id');
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

    $dataRow = $this->dataRow($coachDataType, 'title');
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
            'width' => '6',
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($coachDataType, 'slug');
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
            'width' => '6',
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($coachDataType, 'seo_title');
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
            'width' => '6',
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($coachDataType, 'seo_description');
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
            'width' => '6',
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($coachDataType, 'poster');
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
        'order' => 6,
        'details' => [
          'validation' => [
            'rule' => 'image',
          ],
          'resize' => [
            'width' => '1200',
            'height' => null
          ],
          'thumbnails' => [
            [
              'name' => 'resize-800',
              'resize' => [
                'width' => '800',
              ],
            ],
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($coachDataType, 'coach_belongstomany_service_relationship');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'relationship',
        'display_name' => __('voyager::seeders.data_rows.services'),
        'required' => 0,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 0,
        'details' => [
          'model' => 'App\\Service',
          'table' => 'services',
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
        'order' => 18,
      ])->save();
    }

    $dataRow = $this->dataRow($coachDataType, 'order');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'number',
        'display_name' => __('voyager::seeders.data_rows.order'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 17,
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

    $dataRow = $this->dataRow($coachDataType, 'content');
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
        'order' => 19,
        'details' => '',
      ])->save();
    }

    $dataRow = $this->dataRow($coachDataType, 'created_at');
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
        'order' => 20,
      ])->save();
    }

    $dataRow = $this->dataRow($coachDataType, 'updated_at');
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
      'title' => __('voyager::seeders.menu_items.coaches'),
      'url' => null,
      'route' => 'voyager.coaches.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-people',
        'order' => 4,
      ])->save();
    }

    //Permissions
    Permission::generateFor('coaches');

    //Фабрика
//    factory(App\Coach::class, 4)->create();
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
