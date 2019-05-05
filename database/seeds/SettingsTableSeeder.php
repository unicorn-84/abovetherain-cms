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
    //Site
    //name
    $setting = $this->findSetting('site.title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.title'),
        'value' => 'Над Дождём',
        'details' => '',
        'type' => 'text',
        'order' => 1,
        'group' => 'Site',
      ])->save();
    }
    $setting = $this->findSetting('site.seo_title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.seo_title'),
        'value' => 'Над Дождём',
        'details' => '',
        'type' => 'text',
        'order' => 2,
        'group' => 'Site',
      ])->save();
    }

    $setting = $this->findSetting('site.seo_description');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.seo_description'),
        'value' => 'Школа танцев в Санкт-Петербурге',
        'details' => '',
        'type' => 'text',
        'order' => 3,
        'group' => 'Site',
      ])->save();
    }

    $setting = $this->findSetting('site.icon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.icon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 4,
        'group' => 'Site',
      ])->save();
    }

    $setting = $this->findSetting('site.logo');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.logo'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 5,
        'group' => 'Site',
      ])->save();
    }

//    $setting = $this->findSetting('site.google_analytics_tracking_id');
//    if (!$setting->exists) {
//      $setting->fill([
//        'display_name' => __('voyager::seeders.settings.site.google_analytics_tracking_id'),
//        'value' => '',
//        'details' => '',
//        'type' => 'text',
//        'order' => 4,
//        'group' => 'Site',
//      ])->save();
//    }

    $setting = $this->findSetting('site.fon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.fon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 6,
        'group' => 'Site',
      ])->save();
    }

    $setting = $this->findSetting('site.mobile_fon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.mobile_fon'),
        'value' => '',
        'details' => '',
        'type' => 'image',
        'order' => 7,
        'group' => 'Site',
      ])->save();
    }

    //Content
    $setting = $this->findSetting('content.phone');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.phone'),
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 1,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.address');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.address'),
        'value' => '',
        'details' => '',
        'type' => 'text_area',
        'order' => 2,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.facebook');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Facebook',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 3,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.instagram');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Instagram',
        'value' => '',
        'details' => '',
        'type' => 'text',
        'order' => 4,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.vk');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'VK',
        'value' => '',
        'details' => '',
        'type' => 'text_area',
        'order' => 5,
        'group' => 'Content',
      ])->save();
    }

    //Admin
    $setting = $this->findSetting('admin.title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.admin.title'),
        'value' => 'Над Дождём',
        'details' => '',
        'type' => 'text',
        'order' => 1,
        'group' => 'Admin',
      ])->save();
    }

    $setting = $this->findSetting('admin.description');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.admin.description'),
        'value' => 'Школа танцев в Санкт-Петербурге',
        'details' => '',
        'type' => 'text',
        'order' => 2,
        'group' => 'Admin',
      ])->save();
    }

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

//    $setting = $this->findSetting('admin.google_analytics_client_id');
//    if (!$setting->exists) {
//      $setting->fill([
//        'display_name' => __('voyager::seeders.settings.admin.google_analytics_client_id'),
//        'value' => '',
//        'details' => '',
//        'type' => 'text',
//        'order' => 1,
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
