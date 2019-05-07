<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use App\Album;
use TCG\Voyager\Models\Permission;

class AlbumsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //Data Type
    $dataType = $this->dataType('slug', 'albums');
    if (!$dataType->exists) {
      $dataType->fill([
        'name' => 'albums',
        'display_name_singular' => __('voyager::seeders.data_types.albums.singular'),
        'display_name_plural' => __('voyager::seeders.data_types.albums.plural'),
        'icon' => 'voyager-photo',
        'model_name' => 'App\\Album',
        'controller' => '',
        'generate_permissions' => 1,
        'description' => '',
      ])->save();
    }

    //Data Rows
    $albumDataType = DataType::where('slug', 'albums')->firstOrFail();

    $dataRow = $this->dataRow($albumDataType, 'id');
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

    $dataRow = $this->dataRow($albumDataType, 'title');
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

    $dataRow = $this->dataRow($albumDataType, 'slug');
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
          ]
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($albumDataType, 'seo_title');
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

    $dataRow = $this->dataRow($albumDataType, 'description');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.description'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 5,
      ])->save();
    }

    $dataRow = $this->dataRow($albumDataType, 'seo_description');
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

    $dataRow = $this->dataRow($albumDataType, 'poster');
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
          'resize' => [
            'width' => '320',
            'height' => 'null',
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($albumDataType, 'images');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'multiple_images',
        'display_name' => __('voyager::seeders.data_rows.images'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 8,
        'details' => [
          'resize' => [
            'width' => '1200',
            'height' => 'null',
          ],
          'quality' => '100%',
          'thumbnails' => [
            [
              'name' => 'fit',
              'fit' => [
                'width' => '300',
                'height' => '250',
                'position' => 'center'
              ],
            ],
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($albumDataType, 'videos');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'file',
        'display_name' => __('voyager::seeders.data_rows.video'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 9,
        'details' => [
          'validation' => [
            'rule' => 'mimetypes:video/avi,video/mpeg,video/quicktime'
          ]
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($albumDataType, 'created_at');
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

    $dataRow = $this->dataRow($albumDataType, 'updated_at');
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
      'title' => __('voyager::seeders.menu_items.albums'),
      'url' => '',
      'route' => 'voyager.albums.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-photos',
        'color' => null,
        'parent_id' => null,
        'order' => 6,
      ])->save();
    }

    //Permissions
    Permission::generateFor('albums');
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
