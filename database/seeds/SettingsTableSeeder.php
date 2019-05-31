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

    //Site
    $setting = $this->findSetting('site.title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.title'),
        'value' => substr($faker->sentence(2), 0, -1),
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
        'value' => $faker->sentence(10),
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
        'value' => $faker->text($maxNbChars = 20),
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
        'value' => 'demo/logo.png',
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
        'value' => 'demo/logo.png',
        'details' => '',
        'type' => 'image',
        'order' => 5,
        'group' => 'Site',
      ])->save();
    }

    $setting = $this->findSetting('site.fon');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.fon'),
        'value' => '/demo/14.jpg',
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
        'value' => 'demo/14-cropped.jpg',
        'details' => '',
        'type' => 'image',
        'order' => 7,
        'group' => 'Site',
      ])->save();
    }

    $setting = $this->findSetting('site.fon_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.site.fon_color'),
        'value' => '#ddd',
        'details' => '',
        'type' => 'text',
        'order' => 7,
        'group' => 'Site',
      ])->save();
    }

    //Content
    $setting = $this->findSetting('content.email');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Email',
        'value' => $faker->email,
        'details' => '',
        'type' => 'text',
        'order' => 1,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.phone');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.phone'),
        'value' => $faker->e164PhoneNumber,
        'details' => '',
        'type' => 'text',
        'order' => 2,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.address');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.address'),
        'value' => $faker->address,
        'details' => '',
        'type' => 'text_area',
        'order' => 3,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.vk');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'VK',
        'value' => '#',
        'details' => '',
        'type' => 'text',
        'order' => 4,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.instagram');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Instagram',
        'value' => '#',
        'details' => '',
        'type' => 'text',
        'order' => 5,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.facebook');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => 'Facebook',
        'value' => '#',
        'details' => '',
        'type' => 'text',
        'order' => 6,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.schedule_fon_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.schedule_fon_color'),
        'value' => 'rgba(0,0,0,0.9)',
        'details' => '',
        'type' => 'text',
        'order' => 6,
        'group' => 'Content',
      ])->save();
    }

    $setting = $this->findSetting('content.schedule_text_color');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.content.schedule_text_color'),
        'value' => '#e1e1e1',
        'details' => '',
        'type' => 'text',
        'order' => 7,
        'group' => 'Content',
      ])->save();
    }

    //Admin
    $setting = $this->findSetting('admin.title');
    if (!$setting->exists) {
      $setting->fill([
        'display_name' => __('voyager::seeders.settings.admin.title'),
        'value' => substr($faker->sentence(2), 0, -1),
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
        'value' => $faker->text($maxNbChars = 10),
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
        'value' => 'demo/14.jpg',
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
        'value' => 'demo/logo.png',
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
        'value' => 'demo/logo.png',
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
