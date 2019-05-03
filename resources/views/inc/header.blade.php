<header id="abovetherain-cms__header">
  <nav class="navbar navbar-expand-lg bg-beige navbar-light shadow-sm">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between w-100">
        @isset($page->menu_name)
          <div class="d-flex align-items-center w-100 d-lg-none">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        @endisset
        <div class="d-flex align-items-center justify-content-center justify-content-lg-start w-100">
          <a class="navbar-brand m-0" href="{{ url('/') }}" title="Главная">
            @if(isset($page->logo))
              <img src="{{ Voyager::image($page->logo) }}" alt="Логотип">
            @else
              <img src="{{ mix('images/empty.png') }}">
            @endif
          </a>
        </div>
        @isset($page->menu_name)
          <div class="w-100 d-lg-none"></div>
        @endisset
      </div>
      @isset($page->menu_name)
        <div id='navbarSupportedContent' class="collapse navbar-collapse">
          {{ menu($page->menu_name, 'menu') }}
        </div>
      @endisset
    </div>
  </nav>
</header>
