<header id="abovetherain-cms__header">
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between w-100">
        <div class="d-flex align-items-center w-100 d-lg-none">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start w-100">
          <a class="navbar-brand m-0" href="{{ url('/') }}" title="Главная">
            @if(Voyager::setting('common.logo'))
              <img src="{{ Voyager::image(Voyager::setting('common.logo')) }}" alt="Логотип">
            @else
              <img src="{{ asset('images/icons/empty.png') }}">
            @endif
          </a>
        </div>
        <div class="w-100 d-lg-none"></div>
      </div>
      <div id='navbarSupportedContent' class="collapse navbar-collapse">
        {{ menu('main', 'main_menu') }}
      </div>
    </div>
  </nav>
</header>
