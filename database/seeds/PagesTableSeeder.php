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
        'fon' => 'demo\pages\index\fon.jpg',
        'mobile_fon' => 'demo\pages\index\mobile_fon.jpg'
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
        'content' => '
          <p><img class="w-100" src="http://localhost:10000/storage/demo/pages/team/team.jpg" alt="Над Дождём" /></p>
          <h1 style="text-align: center;">Мы</h1>
          <p>Мы приглашаем в творческий замок "Над дождём" который обладает особой аурой и собирает под своей крышей особенных людей.</p>
          <p>Наша цель, создание благоприятных условий для обучения мастерству воздушного искусства наряду с особой атмосферой раскрытия внешней красоты и силы, а также безграничности эмоционального и чувственного внутреннего мира.</p>
          <p>Пластика каждого отдельного человека уникальна, это результат жизненных решений и взглядов, мы стремимся развить ее природные данные и дать уверенность в себе. Мы делаем танец выражением личности, отражением неповторимой человеческой индивидуальности и инструментом самопознания.</p>
          <p>Приходите к нам не только за знаниями, но и за яркими эмоциями.</p>
          <p>Все наши педагоги это талантливые тренера со спортивным и хореографическим образованием.</p>
          <p>По мимо тренировочной деятельности активно учувствуют в соревнованиях и показательных выступлениях. Только такой тренер способен вдохновить, показать, как надо и передать знания.</p>
          <p>В конце года мы устраиваем не просто отчетные концерты, а настоящее шоу для наших учеников и их гостей, в уютной дружеской атмосфере они всегда яркие и впечатляющие. Приходите к нам не только за знаниями, но и за яркими эмоциями. Двери нашей студии открыты для учеников всех возрастов начиная от 8 лет.</p>
          <h2 style="text-align: center;">Наш подход к занятиям по хореографии и спорту</h2>
          <p>Все танцевальные направления нашей студии на сегодняшний день являются лучшим и элегантным фитнесс решением для успешных и творческих людей.</p>
          <p>Занятия по хореографии проходят по специально разработанным программам от малого к большему, поэтапному развитию навыка. На уроках вы будете плавно погружаться в процесс физического развития и знакомиться с возможностями своего тела. Опытный тренер проанализирует уровень вашей физической подготовки и составит тренировочный план, который возможно осуществлять на общих и индивидуальных тренировках. В небольших группах по выбранному направлению вы сможете добиться поставленных результатов или просто заниматься для удовольствия.</p>
          <h2 style="text-align: center;">Программа тренировки Pole Dance</h2>
          <p>Ученик каждое занятие проходит поэтапную нагрузку, которая включает:</p>
          <ul>
            <li>Разминка + кардио нагрузка</li>
            <li>Силовая часть для укрепления всех групп мышц</li>
            <li>Разучивание элементов</li>
            <li>Связка из разученных элементов</li>
            <li>Растяжка</li>
            <li>Подготовка к импровизации</li>
          </ul>
          <p>Чтобы познакомить вас с атмосферой нашей студии мы подготовили для просмотра материал занятий и выступлений:</p>
          <ul>
            <li>
              <a href="/gallery">Фото и видео материал</a>
            </li>
          </ul>
          <h2 style="text-align: center;">Раскройте свою силу и красоту с помощью танцев</h2>
          <p>Наслаждайтесь движением своего тела.</p>
          <h2 style="text-align: center;">Погрузитесь в дружескую атмосферу и получайте удовольствие от спортивных занятий в просторном, оборудованном зале</h2>
          <p>Профессиональное световое и звуковое оборудование, теплый пол, быстровозводимая сцена, акустический потолок.</p>
          <p>Приглашаем вас на пробное занятие.</p>
          <p>Запишитесь на него:</p>
          <p><a href="tel:+7 952 3999930" title="+7 952 3999930"><b>+7 952 3999930</b></a></p>
          <p>Опытные тренеры помогут раскрыть ваш талант.</p>
          <p>Мы стремимся сделать танец выражением личности и инструментом самопознания.</p>
        '
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
        'content' => '
          <h1 style="text-align: center;">Реквизиты для перечисления платежей</h1>
          <p>ООО «Технологии управления»</p>
          <p>ИНН 7816450800<br>КПП 781301001</p>
          <p>БАНК: СЕВЕРО-ЗАПАДНЫЙ БАНК ПАО СБЕРБАНК Г. САНКТ-ПЕТЕРБУРГ<br>БИК 044030653<br>К/С 30101810500000000653<br>Р/С 40702.810.5.55000034772</p>
          <p><b>В назначении платежа указать:<br>«Оплата за участие в мероприятии ___(указать дату мероприятия)___. НДС не облагается»</b></p>
        '
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
