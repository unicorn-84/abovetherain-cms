<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataRow;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
use App\Page;
use TCG\Voyager\Models\Permission;

class PagesTableSeeder extends Seeder
{
  /**
   * Auto generated seed file.
   *
   * @return void
   */
  public function run()
  {
    //Data Type
    $dataType = $this->dataType('slug', 'pages');
    if (!$dataType->exists) {
      $dataType->fill([
        'name' => 'pages',
        'display_name_singular' => __('voyager::seeders.data_types.page.singular'),
        'display_name_plural' => __('voyager::seeders.data_types.page.plural'),
        'icon' => 'voyager-file-text',
        'model_name' => 'App\\Page',
        'controller' => '',
        'generate_permissions' => 1,
        'description' => '',
      ])->save();
    }

    //Data Rows
    $pageDataType = DataType::where('slug', 'pages')->firstOrFail();
    $dataRow = $this->dataRow($pageDataType, 'id');
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

    $dataRow = $this->dataRow($pageDataType, 'title');
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
          'display' => [
            'width' => '6'
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'slug');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.slug'),
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
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'seo_title');
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

    $dataRow = $this->dataRow($pageDataType, 'seo_description');
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

    $dataRow = $this->dataRow($pageDataType, 'fon');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'image',
        'display_name' => __('voyager::seeders.data_rows.fon'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 6,
        'details' => [
          'validation' => [
            'rule' => 'image'
          ],
          'quality' => '75',
          'resize' => [
            'width' => '1920',
            'height' => null
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'mobile_fon');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'image',
        'display_name' => __('voyager::seeders.data_rows.mobile_fon'),
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
          'quality' => '75',
          'resize' => [
            'width' => '800',
            'height' => null
          ],
        ],
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'has_header');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'checkbox',
        'display_name' => __('voyager::seeders.data_rows.has_header'),
        'required' => 1,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 8,
        'details' => [
          'on' => __('voyager::seeders.data_rows.on'),
          'off' => __('voyager::seeders.data_rows.off'),
          'checked' => true,
          'display' => [
            'width' => '4',
          ],
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'has_pagetitle');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'checkbox',
        'display_name' => __('voyager::seeders.data_rows.has_pagetitle'),
        'required' => 1,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 9,
        'details' => [
          'on' => __('voyager::seeders.data_rows.on'),
          'off' => __('voyager::seeders.data_rows.off'),
          'checked' => true,
          'display' => [
            'width' => '4',
          ],
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'has_footer');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'checkbox',
        'display_name' => __('voyager::seeders.data_rows.has_footer'),
        'required' => 1,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 10,
        'details' => [
          'on' => __('voyager::seeders.data_rows.on'),
          'off' => __('voyager::seeders.data_rows.off'),
          'checked' => true,
          'display' => [
            'width' => '4',
          ],
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'content');
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
        'details' => [],
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'created_at');
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

    $dataRow = $this->dataRow($pageDataType, 'updated_at');
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
      'title' => __('voyager::seeders.menu_items.pages'),
      'url' => null,
      'route' => 'voyager.pages.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-file-text',
        'order' => 1,
      ])->save();
    }

    //Permissions
    Permission::generateFor('pages');

    //Content
    $faker = Faker\Factory::create();

    //Index
    $page = Page::firstOrNew([
      'slug' => 'index',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Главная',
        'slug' => 'index',
        'content' => '<p>Школа&nbsp;танцев</p><p>&laquo;Над&nbsp;Дождём&raquo;</p>',
        'has_pagetitle' => false,
        'has_footer' => false,
      ])->save();
    }

    //Services
    $page = Page::firstOrNew([
      'slug' => 'services',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Услуги',
        'slug' => 'services',
      ])->save();
    }

    //Schedule
    $page = Page::firstOrNew([
      'slug' => 'schedule',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Расписание',
        'slug' => 'schedule',
      ])->save();
    }

    //События
    $page = Page::firstOrNew([
      'slug' => 'events',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'События',
        'slug' => 'events',
      ])->save();
    }

    //Мы
    $page = Page::firstOrNew([
      'slug' => 'team',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Мы',
        'slug' => 'team',
//        'content' => $faker->text($maxNbChars = 1000),
      ])->save();
    }

    //Тренеры
    $page = Page::firstOrNew([
      'slug' => 'coaches',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Тренеры',
        'slug' => 'coaches',
      ])->save();
    }

    //Галерея
    $page = Page::firstOrNew([
      'slug' => 'gallery',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Галерея',
        'slug' => 'gallery',
      ])->save();
    }

    //Контакты
    $page = Page::firstOrNew([
      'slug' => 'contacts',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Контакты',
        'slug' => 'contacts',
      ])->save();
    }

    //Реквизиты
    $page = Page::firstOrNew([
      'slug' => 'requisites',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Реквизиты',
        'slug' => 'requisites',
//        'content' => $faker->text($maxNbChars = 1000),
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
