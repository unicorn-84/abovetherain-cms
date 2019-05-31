<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use App\Training;
use TCG\Voyager\Models\Permission;

class TrainingsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //Data Type
    $dataType = $this->dataType('slug', 'trainings');
    if (!$dataType->exists) {
      $dataType->fill([
        'name' => 'trainings',
        'display_name_singular' => __('voyager::seeders.data_types.training.singular'),
        'display_name_plural' => __('voyager::seeders.data_types.training.plural'),
        'icon' => 'voyager-barbell',
        'model_name' => 'App\\Training',
        'controller' => '',
        'generate_permissions' => 1,
        'description' => '',
      ])->save();
    }

    //Data Rows
    $trainingDataType = DataType::where('slug', 'trainings')->firstOrFail();

    $dataRow = $this->dataRow($trainingDataType, 'id');
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

    $dataRow = $this->dataRow($trainingDataType, 'service_id');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.service'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 2,
        'details' => [
          'display' => [
            'width' => '6'
          ],
          'validation' => [
            'rule' => 'required'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($trainingDataType, 'training_belongsto_service_relationship');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'relationship',
        'display_name' => __('voyager::seeders.data_rows.service'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 0,
        'details' => [
          'model' => 'App\\Service',
          'table' => 'services',
          'type' => 'belongsTo',
          'column' => 'service_id',
          'key' => 'id',
          'label' => 'title',
//          'pivot_table' => 'coach_service',
          'pivot' => 0,
          'taggable' => '0',
          'display' => [
            'width' => '6'
          ],
        ],
        'order' => 2,
      ])->save();
    }

    $dataRow = $this->dataRow($trainingDataType, 'coach_id');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.coach'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 3,
        'details' => [
          'display' => [
            'width' => '6'
          ],
          'validation' => [
            'rule' => 'required'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($trainingDataType, 'training_belongsto_coach_relationship');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'relationship',
        'display_name' => __('voyager::seeders.data_rows.coach'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 0,
        'details' => [
          'model' => 'App\\Coach',
          'table' => 'coaches',
          'type' => 'belongsTo',
          'column' => 'coach_id',
          'key' => 'id',
          'label' => 'title',
//          'pivot_table' => 'coach_service',
          'pivot' => 0,
          'taggable' => '0',
          'display' => [
            'width' => '6'
          ],
        ],
        'order' => 3,
      ])->save();
    }

    $dataRow = $this->dataRow($trainingDataType, 'day');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.day'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 4,
        'details' => [
          'options' => [
            __('days.Monday'),
            __('days.Tuesday'),
            __('days.Wednesday'),
            __('days.Thursday'),
            __('days.Friday'),
            __('days.Saturday'),
            __('days.Sunday'),
          ],
          'validation' => [
            'rule' => 'required'
          ],
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($trainingDataType, 'start_time');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.start_time'),
        'required' => 0,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 5,
        'details' => [
          'validation' => [
            'rule' => 'required|date_format:H:i'
          ],
          'display' => [
            'width' => "6",
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($trainingDataType, 'end_time');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.end_time'),
        'required' => 0,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 6,
        'details' => [
          'validation' => [
            'rule' => 'required|date_format:H:i'
          ],
          'display' => [
            'width' => "6",
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($trainingDataType, 'created_at');
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

    $dataRow = $this->dataRow($trainingDataType, 'updated_at');
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
      'title' => __('voyager::seeders.menu_items.trainings'),
      'url' => '',
      'route' => 'voyager.trainings.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-barbell',
        'color' => null,
        'parent_id' => null,
        'order' => 2,
      ])->save();
    }

    //Permissions
    Permission::generateFor('trainings');

    //Фабрика
    factory(\App\Training::class, 15)->create();
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
