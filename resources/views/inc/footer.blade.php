@if(Request::segment(1))
  <footer id="abovetherain-cms__footer" class="border-beige border-top text-white p-3">
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4 d-flex justify-content-center mb-4 mb-lg-0 order-lg-last">
            <a href="tel:+7 952 3999930" class="text-reset text-decoration-none lead" title="+7 952 3999930">
              <i class="fas fa-phone fa-rotate-90"></i>&nbsp;&nbsp;+7 952 3999930</a>
          </div>
          <div class="col-sm-6 col-lg-4 d-flex justify-content-center mb-4 mb-lg-0">
            <a href="" class="mx-3 text-decoration-none text-reset" title="Instagram">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
            <a href="" class="mx-3 text-decoration-none text-reset" title="VKontakte">
              <i class="fab fa-vk fa-2x"></i>
            </a>
            <a href="" class="mx-3 text-decoration-none text-reset" title="Facebook">
              <i class="fab fa-facebook fa-2x"></i>
            </a>
          </div>
          <div class="col-sm-6 col-lg-4 d-flex justify-content-center order-lg-first">
            <ul class="list-unstyled text-left p-0 m-0">
              <li class="mb-2"><a href="{{ url('requisites') }}" class="text-reset" title="Реквизиты для оплаты ">Реквизиты для оплаты</a></li>
              <li><a href="{{ url('login') }}" class="text-reset" title="Вход на сайт">Вход</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center pb-3"><span>{{ now()->year }}&nbsp;<i class="far fa-copyright fa-fw"></i>&nbsp;Над Дождём</span></div>
  </footer>
@else
  <footer id="abovetherain-cms__footer" class="text-white px-3">
    <div class="py-5">
      <div class="container">
        <div class="row">
          <div class="col d-flex justify-content-end d-lg-none">
            <a href="tel:+7 952 3999930" class="text-decoration-none text-reset" title="+7 952 3999930">
              <i class="fas fa-phone-square fa-3x"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endif
