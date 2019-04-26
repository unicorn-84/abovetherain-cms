@component('layouts.app', [
  'title' => 'Расписание',
  'bgi' => 'images/mobile-common-fon.jpg',
  'bgiLaptop' => 'images/laptop-common-fon.jpg',
])
  {{--Header--}}
  @component('inc.header', ['title' => 'Расписание'])
  @endcomponent
  @component('inc.page-title', ['title' => 'Расписание'])
    {{ Breadcrumbs::render('schedule') }}
  @endcomponent
  {{--Content--}}
  @component('inc.content')
    <div class="container">
      <table class="table table-bordered" style="table-layout: fixed; width: 100%; border-collapse: collapse; text-align: center;">
        <thead class="thead-dark">
        <tr>
          <th scope="col" style="width: 10%;"></th>
          <th scope="col">Понедельник</th>
          <th scope="col">Вторник</th>
          <th scope="col">Среда</th>
          <th scope="col">Четверг</th>
          <th scope="col">Пятница</th>
          <th scope="col">Суббота</th>
          <th scope="col">Воскресенье</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <th scope="row">9:00</th>
          <td>
            @auth()
              <button class="btn btn-outline-primary btn-sm btn-block">Создать</button>
            @endauth
          </td>
          <td rowspan="2">
            <h6>Растяжка</h6>
            <p class="mb-0">9:00-10:00</p>
            <p class="">Яна Белякова</p>
            @auth()
              <button class="btn btn-info  btn-sm btn-block">Редактировать</button>
              <button class="btn btn-danger  btn-sm btn-block">Удалить</button>
            @endauth
          </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">9:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">10:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">10:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">11:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">11:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">12:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">12:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">13:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">13:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">14:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">14:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">15:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">15:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">16:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">16:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">17:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">17:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">18:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">18:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">19:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">19:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">20:00</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <th scope="row">20:30</th>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        </tbody>
      </table>
    </div>
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
