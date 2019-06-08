<footer id="abovetherain-cms__footer" class="border-beige border-top text-white p-3">
  <div class="py-5">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
        @if(Voyager::setting('common.phone'))
          <div class="d-flex justify-content-center mb-4 mb-lg-0 w-100 order-lg-last">
            <a href="tel:{{ Voyager::setting('common.phone') }}" class="text-reset text-decoration-none lead"
               title="{{ Voyager::setting('common.phone') }}">
              <i class="fas fa-phone fa-rotate-90"></i>&nbsp;&nbsp;{{ Voyager::setting('common.phone') }}</a>
          </div>
        @endif

        @if(Voyager::setting('common.vk') || Voyager::setting('common.instagram') || Voyager::setting('common.facebook'))
          <div class="d-flex justify-content-center w-100 mb-4 mb-lg-0">
            @if(Voyager::setting('common.vk'))
              <a href="{{ Voyager::setting('common.vk') }}" class="mx-3 text-decoration-none text-reset"
                 title="VKontakte">
                <i class="fab fa-vk fa-2x"></i>
              </a>
            @endif
            @if(Voyager::setting('common.instagram'))
              <a href="{{ Voyager::setting('common.instagram') }}" class="mx-3 text-decoration-none text-reset"
                 title="Instagram">
                <i class="fab fa-instagram fa-2x"></i>
              </a>
            @endif
            @if(Voyager::setting('common.facebook'))
              <a href="{{ Voyager::setting('common.facebook') }}" class="mx-3 text-decoration-none text-reset"
                 title="Facebook">
                <i class="fab fa-facebook fa-2x"></i>
              </a>
            @endif
          </div>
        @endif
        <div class="d-flex justify-content-center w-100 order-lg-first">
          {{ menu('bottom', 'bottom_menu') }}
        </div>
      </div>
    </div>
  </div>
  @if(Voyager::setting('common.title'))
    <div class="text-center pb-3"><span>{{ now()->year }}&nbsp;<i
          class="far fa-copyright fa-fw"></i>&nbsp;{{ Voyager::setting('common.title') }}</span></div>
  @endif
</footer>
