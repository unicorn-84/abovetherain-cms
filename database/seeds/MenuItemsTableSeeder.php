<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
  /**
   * Auto generated seed file.
   *
   * @return void
   */
  public function run()
  {
    $menu_admin = Menu::where('name', 'admin')->firstOrFail();
    $menu_main = Menu::where('name', 'main')->firstOrFail();

//        Панель
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.dashboard'),
      'url' => '',
      'route' => 'voyager.dashboard',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-dashboard',
        'color' => null,
        'parent_id' => null,
        'order' => 0,
      ])->save();
    }

//        Медиа
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.media'),
      'url' => '',
      'route' => 'voyager.media.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-images',
        'color' => null,
        'parent_id' => null,
        'order' => 5,
      ])->save();
    }

//        Пользователи
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.users'),
      'url' => '',
      'route' => 'voyager.users.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-person',
        'color' => null,
        'parent_id' => null,
        'order' => 10,
      ])->save();
    }

//        Роли
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.roles'),
      'url' => '',
      'route' => 'voyager.roles.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-lock',
        'color' => null,
        'parent_id' => null,
        'order' => 15,
      ])->save();
    }

//        Инструменты
    $toolsMenuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.tools'),
      'url' => '',
    ]);
    if (!$toolsMenuItem->exists) {
      $toolsMenuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-tools',
        'color' => null,
        'parent_id' => null,
        'order' => 20,
      ])->save();
    }

//        Конструктор меню
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.menu_builder'),
      'url' => '',
      'route' => 'voyager.menus.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-list',
        'color' => null,
        'parent_id' => $toolsMenuItem->id,
        'order' => 25,
      ])->save();
    }

//        Базы
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.database'),
      'url' => '',
      'route' => 'voyager.database.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-data',
        'color' => null,
        'parent_id' => $toolsMenuItem->id,
        'order' => 30,
      ])->save();
    }

//        Компас
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.compass'),
      'url' => '',
      'route' => 'voyager.compass.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-compass',
        'color' => null,
        'parent_id' => $toolsMenuItem->id,
        'order' => 35,
      ])->save();
    }

//        Хлеб
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.bread'),
      'url' => '',
      'route' => 'voyager.bread.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-bread',
        'color' => null,
        'parent_id' => $toolsMenuItem->id,
        'order' => 40,
      ])->save();
    }

//        Настройки
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.settings'),
      'url' => '',
      'route' => 'voyager.settings.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target' => '_self',
        'icon_class' => 'voyager-settings',
        'color' => null,
        'parent_id' => null,
        'order' => 45,
      ])->save();
    }

//        MAIN
//    Услуги
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_main->id,
      'title'   => 'Услуги',
      'url'     => '',
      'route'   => 'services',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'target'     => '_self',
        'icon_class' => '',
        'color'      => null,
        'parent_id'  => null,
        'order'      => 1,
      ])->save();
    }
  }
}
