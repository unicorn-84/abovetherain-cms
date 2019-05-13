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

    $dataRow = $this->dataRow($pageDataType, 'name');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'text',
        'display_name' => __('voyager::seeders.data_rows.name'),
        'required' => 1,
        'browse' => 1,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 2,
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
        'order' => 3,
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'seo_title');
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

    $dataRow = $this->dataRow($pageDataType, 'seo_description');
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
        'order' => 5,
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
          ]
        ]
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
          ]
        ]
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
          'checked' => true
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
          'checked' => true
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
          'checked' => true
        ]
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'content');
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
        'order' => 11,
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'head_code');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'code_editor',
        'display_name' => __('voyager::seeders.data_rows.head_code'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 12,
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'created_at');
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
        'order' => 13,
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
        'order' => 14,
      ])->save();
    }

    //Menu Item
    $menu = Menu::where('name', 'Admin')->firstOrFail();
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu->id,
      'title' => __('voyager::seeders.menu_items.pages'),
      'url' => '',
      'route' => 'voyager.pages.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-file-text',
        'color' => null,
        'parent_id' => null,
        'order' => 2,
      ])->save();
    }

    //Permissions
    Permission::generateFor('pages');

    //Content
    //Index
    $page = Page::firstOrNew([
      'name' => 'index',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Главная',
        'has_pagetitle' => false,
        'has_footer' => false,
        'fon' => 'https://picsum.photos/1920/1080?blur=10&random=1',
        'mobile_fon' => 'https://picsum.photos/1200/1600?blur=10&random=2'
      ])->save();
    }

    //Services
    $page = Page::firstOrNew([
      'name' => 'services',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Услуги',
      ])->save();
    }

    //Schedule
    $page = Page::firstOrNew([
      'name' => 'schedule',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Расписание',
      ])->save();
    }

    //События
    $page = Page::firstOrNew([
      'name' => 'events',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'События',
      ])->save();
    }

    //Мы
    $page = Page::firstOrNew([
      'name' => 'team',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Мы',
        'content' => '<img class="w-100 mb-4" src="http://lorempixel.com/grey/800/533/"/><h1 class="text-center mb-3">Lorem ipsum</h1><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quaerat, velit. Aut beatae eius harum iure libero natus quis suscipit vero! Accusamus architecto autem nulla voluptates. Accusantium consectetur fugit, minima natus nesciunt possimus sit tempora temporibus ullam vero! A ad aliquam aliquid beatae cumque dignissimos ducimus ea, eius enim est eum excepturi expedita fuga harum hic incidunt ipsa labore mollitia, nostrum nulla numquam obcaecati odio officiis omnis placeat quaerat qui quo quos recusandae ullam ut veniam voluptas voluptate? Alias amet dolores eius eligendi eos error, eum exercitationem harum impedit in ipsam iste labore laudantium magni obcaecati, placeat quae quia rem repudiandae similique sit temporibus totam, voluptatum. Asperiores aut blanditiis dicta, dolor doloremque, eum excepturi fugiat harum id iusto magni maxime natus nemo nesciunt odio omnis perferendis quas quasi quos reiciendis rerum sint, tenetur? Aliquid amet aut commodi dolor facere laboriosam, unde? Accusantium assumenda consequuntur, corporis cumque, debitis deleniti, dolor dolorum eum expedita explicabo facere fugit illo laborum laudantium maxime natus necessitatibus perferendis possimus praesentium repellat repudiandae totam ullam vel velit veritatis vitae voluptatem! Blanditiis ducimus explicabo ipsa iusto magnam nesciunt officia pariatur, perspiciatis quisquam voluptatem? Accusantium autem beatae dolorem et harum incidunt labore minima, natus praesentium repellat rerum ullam vitae?</p>',
      ])->save();
    }

    //Тренеры
    $page = Page::firstOrNew([
      'name' => 'coaches',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Тренеры',
      ])->save();
    }

    //Галерея
    $page = Page::firstOrNew([
      'name' => 'gallery',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Галерея',
      ])->save();
    }

    //Контакты
    $page = Page::firstOrNew([
      'name' => 'contacts',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Контакты',
      ])->save();
    }

    //Реквизиты
    $page = Page::firstOrNew([
      'name' => 'requisites',
    ]);
    if (!$page->exists) {
      $page->fill([
        'title' => 'Реквизиты',
        'content' => '<img class="w-100 mb-4" src="http://lorempixel.com/grey/800/533/"/><h1 class="text-center mb-3">Lorem ipsum</h1><p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quaerat, velit. Aut beatae eius harum iure libero natus quis suscipit vero! Accusamus architecto autem nulla voluptates. Accusantium consectetur fugit, minima natus nesciunt possimus sit tempora temporibus ullam vero! A ad aliquam aliquid beatae cumque dignissimos ducimus ea, eius enim est eum excepturi expedita fuga harum hic incidunt ipsa labore mollitia, nostrum nulla numquam obcaecati odio officiis omnis placeat quaerat qui quo quos recusandae ullam ut veniam voluptas voluptate? Alias amet dolores eius eligendi eos error, eum exercitationem harum impedit in ipsam iste labore laudantium magni obcaecati, placeat quae quia rem repudiandae similique sit temporibus totam, voluptatum. Asperiores aut blanditiis dicta, dolor doloremque, eum excepturi fugiat harum id iusto magni maxime natus nemo nesciunt odio omnis perferendis quas quasi quos reiciendis rerum sint, tenetur? Aliquid amet aut commodi dolor facere laboriosam, unde? Accusantium assumenda consequuntur, corporis cumque, debitis deleniti, dolor dolorum eum expedita explicabo facere fugit illo laborum laudantium maxime natus necessitatibus perferendis possimus praesentium repellat repudiandae totam ullam vel velit veritatis vitae voluptatem! Blanditiis ducimus explicabo ipsa iusto magnam nesciunt officia pariatur, perspiciatis quisquam voluptatem? Accusantium autem beatae dolorem et harum incidunt labore minima, natus praesentium repellat rerum ullam vitae?</p>',
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
