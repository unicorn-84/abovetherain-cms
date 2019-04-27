@component('layouts.app', ['pageSelector' => $pageSelector, 'title' => $title])
  {{--Header--}}
  @component('inc.header')
  @endcomponent
  {{--Content--}}
  @component('inc.content')
    <div class="caption">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="text-white">
              <span><span>Школа&nbsp;танцев</span></span>
              <span><span>«Над&nbsp;дождём»</span></span>
            </h1>
          </div>
        </div>
      </div>
    </div>
  @endcomponent
  {{--Footer--}}
  @component('inc.footer')
  @endcomponent
@endcomponent
