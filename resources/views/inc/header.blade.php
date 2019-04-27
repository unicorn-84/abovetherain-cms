<header id="abovetherain-cms__header">
  <nav class="navbar navbar-expand-lg bg-beige navbar-light shadow-sm">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between w-100">
        <div class="d-flex align-items-center w-100 d-lg-none">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start w-100">
          <a class="navbar-brand m-0" href="{{ url('/') }}" title="Главная">
            <img src="{{ mix('images/logo/logo.png') }}" alt="Логотип | Над Дождём">
          </a>
        </div>
        <div class="w-100 d-lg-none"></div>
      </div>
      <div id='navbarSupportedContent' class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto text-uppercase">
          <li class="{{ Request::is('services') ? 'active ' : '' }}nav-item px-lg-3">
            <a href="{{ url('services') }}" class="nav-link py-lg-1 px-lg-0" title="Услуги">Услуги</a>
          </li>
          <li class="{{ Request::is('schedule') ? 'active ' : '' }}nav-item px-lg-3">
            <a href="{{ url('schedule') }}" class="nav-link py-lg-1 px-lg-0" title="Расписание">Расписание</a>
          </li>
          <li class="{{ Request::is('events') ? 'active ' : '' }}nav-item px-lg-3">
            <a href="{{ url('events') }}" class="nav-link py-lg-1 px-lg-0" title="События">События</a>
          </li>
          <li class="{{ Request::is('team') ? 'active ' : '' }}nav-item px-lg-3">
            <a href="{{ url('team') }}" class="nav-link py-lg-1 px-lg-0" title="Мы">Мы</a>
          </li>
          <li class="{{ Request::is('coaches') ? 'active ' : '' }}nav-item px-lg-3">
            <a href="{{ url('coaches') }}" class="nav-link py-lg-1 px-lg-0" title="Тренеры">Тренеры</a>
          </li>
          <li class="{{ Request::is('gallery') ? 'active ' : '' }}nav-item px-lg-3">
            <a href="{{ url('gallery') }}" class="nav-link py-lg-1 px-lg-0" title="Галерея">Галерея</a>
          </li>
          <li class="{{ Request::is('contacts') ? 'active ' : '' }}nav-item px-lg-3">
            <a href="{{ url('contacts') }}" class="nav-link py-lg-1 px-lg-0" title="Контакты">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
