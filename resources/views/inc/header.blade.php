<header id="abovetherain__header">
  <nav class="navbar navbar-expand-lg bg-beige navbar-light shadow-sm">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between w-100">
        <div class="d-flex align-items-center w-100 d-lg-none">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start w-100">
          <a class="navbar-brand m-0" href="{{ url('/') }}" title={{ $title }}>
            <img src="{{ asset('images/logo.png') }}" alt="Логотип">
          </a>
        </div>
        <div class="w-100 d-lg-none"></div>
      </div>
      <div id='navbarSupportedContent' class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto text-uppercase">
          <li class="{{ Request::is('services') ? 'active ' : '' }}nav-item">
            <a href="{{ url('services') }}" class="nav-link px-lg-3">Услуги</a>
          </li>
          <li class="{{ Request::is('schedule') ? 'active ' : '' }}nav-item">
            <a href="{{ url('schedule') }}" class="nav-link px-lg-3">Расписание</a>
          </li>
          <li class="{{ Request::is('events') ? 'active ' : '' }}nav-item">
            <a href="{{ url('events') }}" class="nav-link px-lg-3">Афиша</a>
          </li>
          <li class="{{ Request::is('team') ? 'active ' : '' }}nav-item">
            <a href="{{ url('team') }}" class="nav-link px-lg-3">Мы</a>
          </li>
          <li class="{{ Request::is('coaches') ? 'active ' : '' }}nav-item">
            <a href="{{ url('coaches') }}" class="nav-link px-lg-3">Тренеры</a>
          </li>
          <li class="{{ Request::is('gallery') ? 'active ' : '' }}nav-item">
            <a href="{{ url('gallery') }}" class="nav-link px-lg-3">Галерея</a>
          </li>
          <li class="{{ Request::is('contacts') ? 'active ' : '' }}nav-item">
            <a href="{{ url('contacts') }}" class="nav-link px-lg-3">Контакты</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
