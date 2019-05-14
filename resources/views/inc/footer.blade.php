<footer id="abovetherain-cms__footer" class="border-beige border-top text-white p-3">
  <div class="py-5">
    <div class="container">
      <div class="row">
        @if(Voyager::setting("content.phone"))
          <div class="col-sm-6 col-lg-4 d-flex justify-content-center mb-4 mb-lg-0 order-lg-last">
            <a href="tel:{{ Voyager::setting("content.phone") }}" class="text-reset text-decoration-none lead"
               title="{{ Voyager::setting("content.phone") }}">
              <i class="fas fa-phone fa-rotate-90"></i>&nbsp;&nbsp;{{ Voyager::setting("content.phone") }}</a>
          </div>
        @endif

        <div class="col-sm-6 col-lg-4 d-flex justify-content-center mb-4 mb-lg-0">
          @if(Voyager::setting("content.vk"))
            <a href="{{ Voyager::setting("content.vk") }}" class="mx-3 text-decoration-none text-reset" title="VKontakte">
              <i class="fab fa-vk fa-2x"></i>
            </a>
          @endif
          @if(Voyager::setting("content.instagram"))
            <a href="{{ Voyager::setting("content.instagram") }}" class="mx-3 text-decoration-none text-reset" title="Instagram">
              <i class="fab fa-instagram fa-2x"></i>
            </a>
          @endif
          @if(Voyager::setting("content.facebook"))
            <a href="{{ Voyager::setting("content.facebook") }}" class="mx-3 text-decoration-none text-reset" title="Facebook">
              <i class="fab fa-facebook fa-2x"></i>
            </a>
          @endif
        </div>
        <div class="col-sm-6 col-lg-4 d-flex justify-content-center order-lg-first">
          <ul class="list-unstyled text-left p-0 m-0">
            <li class="mb-2"><a href="{{ url('requisites') }}" class="text-reset" title="Реквизиты для оплаты ">Реквизиты</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center pb-3"><span>{{ now()->year }}&nbsp;<i
        class="far fa-copyright fa-fw"></i>&nbsp;{{ Voyager::setting("site.title") }}</span></div>
</footer>
