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

    //Общие
    $setting = $this->findSetting('obshchie.title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.title'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 1,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.description');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Описание сайта',
        'value' => '',
        'details' => '',
        'type' => 'text_area',
        'order' => 2,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.seo_title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.seo_title'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 3,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.seo_description');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.seo_description'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 4,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.icon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.icon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 5,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.logo');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.logo'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 6,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.fon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.fon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 7,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.mobile_fon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.mobile_fon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 8,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.fon_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.fon_color'),
        'value' => '#ddd',
        'details' => '',
        'type' => 'text',
        'order' => 9,
        'group' => 'Общие',
      ])->save();

      $setting = $this->findSetting('obshchie.ya_id');
      if (!$setting->exists) {
        $setting->fill([
          'display_name' => __('voyager::seeders.settings.site.ya_id'),
          'value' => '',
          'details' => '',
          'type' => 'text',
          'order' => 10,
          'group' => 'Общие',
        ])->save();
      }
    }

    $setting = $this->findSetting('obshchie.email');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Email',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 11,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.phone');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.phone'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 12,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.address');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.address'),
        'value' => '',
        'details' => '',
        'type' => 'text_area',
        'order' => 13,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.vk');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'VK',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 14,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.instagram');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Instagram',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 15,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.facebook');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Facebook',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 16,
        'group' => 'Общие',
      ])->save();
    }

    $setting = $this->findSetting('content.schedule_fon_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.schedule_fon_color'),
        'value' => 'rgba(0,0,0,0.95)',
        'details' => '',
        'type' => 'text',
        'order' => 6,
        'group' => 'Расписание',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.schedule_text_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.schedule_text_color'),
        'value' => '#e1e1e1',
        'details' => '',
        'type' => 'text',
        'order' => 7,
        'group' => 'Расписание',
      ])->save();
    }

    $setting = $this->findSetting('obshchie.vk_sign_up');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Записаться в VK',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 7,
        'group' => 'Расписание',
      ])->save();
    }

    // Gallery
    $setting = $this->findSetting('galereya.layout');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Макет',
        'value' => '',
        'type' => 'radio_btn',
        'order' => 1,
        'group' => 'Галерея',
        'details' => '{"default":"grid","options":{"grid": "Сетка","masonry":"Каменная кладка"}}',
      ])->save();
    }

    $setting = $this->findSetting('galereya.columns');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Колонки',
        'value' => '',
        'type' => 'radio_btn',
        'order' => 2,
        'group' => 'Галерея',
        'details' => '{"default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6","12":"12"}}',
      ])->save();
    }

    //Admin
    $setting = $this->findSetting('admin.fon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.admin.fon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 3,
        'group' => 'Admin',
      ])->save();
    }

    $setting = $this->findSetting('admin.loader');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.admin.loader'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 4,
        'group' => 'Admin',
      ])->save();
    }

    $setting = $this->findSetting('admin.logo');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.admin.logo'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 5,
        'group' => 'Admin',
      ])->save();
    }
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
