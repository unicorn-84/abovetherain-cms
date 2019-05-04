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
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'is_header');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'checkbox',
        'display_name' => __('voyager::seeders.data_rows.is_header'),
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

    $dataRow = $this->dataRow($pageDataType, 'is_page-title');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'checkbox',
        'display_name' => __('voyager::seeders.data_rows.is_page-title'),
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

    $dataRow = $this->dataRow($pageDataType, 'is_footer');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'checkbox',
        'display_name' => __('voyager::seeders.data_rows.is_footer'),
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
        'order' => 11,
      ])->save();
    }

    $dataRow = $this->dataRow($pageDataType, 'content_code');
    if (!$dataRow->exists) {
      $dataRow->fill([
        'type' => 'code_editor',
        'display_name' => __('voyager::seeders.data_rows.content_code'),
        'required' => 0,
        'browse' => 0,
        'read' => 1,
        'edit' => 1,
        'add' => 1,
        'delete' => 1,
        'order' => 12,
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
//    $page = Page::firstOrNew([
//      'slug' => 'hello-world',
//    ]);
//    if (!$page->exists) {
//      $page->fill([
//        'author_id' => 0,
//        'title' => 'Hello World',
//        'excerpt' => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
//        'body' => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
//<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
//        'image' => 'pages/page1.jpg',
//        'meta_description' => 'Yar Meta Description',
//        'meta_keywords' => 'Keyword1, Keyword2',
//        'status' => 'ACTIVE',
//      ])->save();
//    }
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
