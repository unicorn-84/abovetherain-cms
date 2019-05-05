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
            @if(isset($page->logo))
              <img src="{{ Voyager::image($page->logo) }}" alt="Логотип">
            @else
              <img src="{{ mix('images/empty.png') }}">
            @endif
          </a>
        </div>
        <div class="w-100 d-lg-none"></div>
      </div>
      <div id='navbarSupportedContent' class="collapse navbar-collapse">
        {{ menu('Main', 'menu') }}
      </div>
    </div>
  </nav>
</header>
