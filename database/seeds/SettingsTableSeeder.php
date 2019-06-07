<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
  /**
   * Auto generated seed file.
   */
  public function run()
  {
    //Faker
    $faker = Faker\Factory::create();

    //Common
    $setting = $this->findSetting('common.title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.title'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 1,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.description');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Описание сайта',
        'value' => '',
        'details' => '',
        'type' => 'text_area',
        'order' => 2,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.seo_title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.seo_title'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 3,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.seo_description');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.seo_description'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 4,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.icon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.icon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 5,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.logo');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.logo'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 6,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.fon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.fon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 7,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.mobile_fon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.mobile_fon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 8,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.fon_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.fon_color'),
        'value' => '#ddd',
        'details' => '',
        'type' => 'text',
        'order' => 9,
        'group' => 'Common',
      ])->save();

      $setting = $this->findSetting('common.ya_id');
      if (!$setting->exists) {
        $setting->fill([
          'display_name' => __('voyager::seeders.settings.site.ya_id'),
          'value' => '',
          'details' => '',
          'type' => 'text',
          'order' => 10,
          'group' => 'Common',
        ])->save();
      }
    }

    $setting = $this->findSetting('commomn.email');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Email',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 11,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.phone');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.phone'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 12,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.address');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.address'),
        'value' => '',
        'details' => '',
        'type' => 'text_area',
        'order' => 13,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.vk');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'VK',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 14,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.instagram');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Instagram',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 15,
        'group' => 'Common',
      ])->save();
    }

    $setting = $this->findSetting('common.facebook');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Facebook',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 16,
        'group' => 'Common',
      ])->save();
    }

    // Услуги
    $setting = $this->findSetting('services.layout');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Макет',
        'type' => 'radio_btn',
        'order' => 1,
        'value' => 'grid',
        'group' => 'Services',
        'details' => '{"default":"grid","options":{"grid": "Сетка","masonry":"Каменная кладка"}}',
      ])->save();
    }

    $setting = $this->findSetting('services.columns');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Колонки',
        'type' => 'radio_btn',
        'order' => 2,
        'group' => 'Services',
        'details' => '{"default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6","12":"12"}}',
      ])->save();
    }

    $setting = $this->findSetting('services.template');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Шаблон записи',
        'value' => 'standard',
        'type' => 'radio_btn',
        'order' => 2,
        'group' => 'Services',
        'details' => '{"default":"standard","options":{"standard":"Стандартная запись","empty":"Пустая страница"}}',
      ])->save();
    }

    // Расписание
    $setting = $this->findSetting('schedule.schedule_fon_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.schedule_fon_color'),
        'value' => 'rgba(0,0,0,0.95)',
        'details' => '',
        'type' => 'text',
        'order' => 1,
        'group' => 'Schedule',
      ])->save();
    }

    $setting = $this->findSetting('schedule.schedule_text_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.schedule_text_color'),
        'value' => '#e1e1e1',
        'details' => '',
        'type' => 'text',
        'order' => 7,
        'group' => 'Schedule',
      ])->save();
    }

    $setting = $this->findSetting('schedule.vk_sign_up');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Записаться в VK',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 7,
        'group' => 'Schedule',
      ])->save();
    }

    // События
    $setting = $this->findSetting('events.layout');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Макет',
        'type' => 'radio_btn',
        'order' => 1,
        'value' => 'grid',
        'group' => 'Events',
        'details' => '{"default":"grid","options":{"grid": "Сетка","masonry":"Каменная кладка"}}',
      ])->save();
    }

    $setting = $this->findSetting('events.columns');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Колонки',
        'type' => 'radio_btn',
        'order' => 2,
        'group' => 'Events',
        'details' => '{"default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6","12":"12"}}',
      ])->save();
    }

    $setting = $this->findSetting('events.template');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Шаблон записи',
        'value' => 'standard',
        'type' => 'radio_btn',
        'order' => 2,
        'group' => 'Events',
        'details' => '{"default":"standard","options":{"standard":"Стандартная запись","empty":"Пустая страница"}}',
      ])->save();
    }

    // Тренеры
    $setting = $this->findSetting('coaches.layout');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Макет',
        'type' => 'radio_btn',
        'order' => 1,
        'value' => 'grid',
        'group' => 'Coaches',
        'details' => '{"default":"grid","options":{"grid": "Сетка","masonry":"Каменная кладка"}}',
      ])->save();
    }

    $setting = $this->findSetting('coaches.columns');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Колонки',
        'type' => 'radio_btn',
        'order' => 2,
        'group' => 'Coaches',
        'details' => '{"default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6","12":"12"}}',
      ])->save();
    }

    $setting = $this->findSetting('coaches.template');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Шаблон записи',
        'value' => 'standard',
        'type' => 'radio_btn',
        'order' => 2,
        'group' => 'Coaches',
        'details' => '{"default":"standard","options":{"standard":"Стандартная запись","empty":"Пустая страница"}}',
      ])->save();
    }

    // Галерея
    $setting = $this->findSetting('gallery.layout');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Макет',
        'type' => 'radio_btn',
        'order' => 1,
        'group' => 'Gallery',
        'details' => '{"default":"grid","options":{"grid": "Сетка","masonry":"Каменная кладка"}}',
      ])->save();
    }

    $setting = $this->findSetting('gallery.columns');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Колонки',
        'type' => 'radio_btn',
        'order' => 2,
        'group' => 'Gallery',
        'details' => '{"default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6","12":"12"}}',
      ])->save();
    }

    //Admin
//    $setting = $this->findSetting('admin.fon');
//    if (!$setting->exists) {
//      $setting->fill([
//        'display_name' => __('voyager::seeders.settings.admin.fon'),
//        'value' => '',
//        'details' => '',
//        'type' => 'image',
//        'order' => 3,
//        'group' => 'Admin',
//      ])->save();
//    }
//
//    $setting = $this->findSetting('admin.loader');
//    if (!$setting->exists) {
//      $setting->fill([
//        'display_name' => __('voyager::seeders.settings.admin.loader'),
//        'value' => '',
//        'details' => '',
//        'type' => 'image',
//        'order' => 4,
//        'group' => 'Admin',
//      ])->save();
//    }
//
//    $setting = $this->findSetting('admin.logo');
//    if (!$setting->exists) {
//      $setting->fill([
//        'display_name' => __('voyager::seeders.settings.admin.logo'),
//        'value' => '',
//        'details' => '',
//        'type' => 'image',
//        'order' => 5,
//        'group' => 'Admin',
//      ])->save();
//    }
  }

  /**
   * [setting description].
   *
   * @param [type] $key [description]
   *
   * @return [type] [description]
   */
  protected function findSetting($key)
  {
    return Setting::firstOrNew(['key' => $key]);
  }
}
