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

    //Панель
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.dashboard'),
      'url' => null,
      'route' => 'voyager.dashboard',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-dashboard',
        'order' => 0,
      ])->save();
    }

    //Медиа
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.media'),
      'url' => null,
      'route' => 'voyager.media.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-images',
        'order' => 6,
      ])->save();
    }

    //Пользователи
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.users'),
      'icon_class' => 'voyager-group',
      'url' => null,
      'route' => 'voyager.users.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-person',
        'order' => 7,
      ])->save();
    }

    //Роли
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.roles'),
      'url' => null,
      'route' => 'voyager.roles.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-lock',
        'order' => 8,
      ])->save();
    }

    //Инструменты
    $toolsMenuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.tools'),
      'url' => null,
    ]);
    if (!$toolsMenuItem->exists) {
      $toolsMenuItem->fill([
        'icon_class' => 'voyager-tools',
        'order' => 9,
      ])->save();
    }

    //Конструктор меню
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.menu_builder'),
      'url' => null,
      'route' => 'voyager.menus.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-list',
        'parent_id' => $toolsMenuItem->id,
        'order' => 10,
      ])->save();
    }

    //Базы
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.database'),
      'url' => null,
      'route' => 'voyager.database.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-data',
        'parent_id' => $toolsMenuItem->id,
        'order' => 11,
      ])->save();
    }

    //Компас
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.compass'),
      'url' => null,
      'route' => 'voyager.compass.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-compass',
        'parent_id' => $toolsMenuItem->id,
        'order' => 12,
      ])->save();
    }

    //Хлеб
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.bread'),
      'url' => null,
      'route' => 'voyager.bread.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-bread',
        'parent_id' => $toolsMenuItem->id,
        'order' => 13,
      ])->save();
    }

    //Настройки
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_admin->id,
      'title' => __('voyager::seeders.menu_items.settings'),
      'url' => null,
      'route' => 'voyager.settings.index',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'icon_class' => 'voyager-settings',
        'order' => 14,
      ])->save();
    }

    //MAIN
    //Услуги
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_main->id,
      'title' => 'Услуги',
      'url' => '/services',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'order' => 1,
      ])->save();
    }

    //Расписание
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_main->id,
      'title' => 'Расписание',
      'url' => '/schedule',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'order' => 2,
      ])->save();
    }

    //События
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_main->id,
      'title' => 'События',
      'url' => '/events',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'order' => 3,
      ])->save();
    }

    //Мы
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_main->id,
      'title' => 'Мы',
      'url' => '/team',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'order' => 4,
      ])->save();
    }

    //Тренеры
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_main->id,
      'title' => 'Тренеры',
      'url' => '/coaches',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'order' => 5,
      ])->save();
    }

    //Галерея
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_main->id,
      'title' => 'Галерея',
      'url' => '/gallery',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'order' => 6,
      ])->save();
    }

    //Контакты
    $menuItem = MenuItem::firstOrNew([
      'menu_id' => $menu_main->id,
      'title' => 'Контакты',
      'url' => '/contacts',
    ]);
    if (!$menuItem->exists) {
      $menuItem->fill([
        'order' => 7,
      ])->save();
    }
  }
}
