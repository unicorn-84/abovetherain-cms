<ul class="navbar-nav ml-auto text-uppercase">
  @foreach($items as $item)
    @if($item->children()->count() > 0)

      <li class="nav-item dropdown px-lg-3">
        <a class="nav-link dropdown-toggle py-lg-1 px-lg-0" href="#" title="{{ $item->title }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $item->title }}</a>
        <div class="dropdown-menu p-0 p-lg-3 border-0">

          @foreach($item->children()->get() as $subitem)
            <div class="px-3 px-lg-1{{ $loop->last ? '' : ' mb-2' }}">
              <a target="{{ $subitem->target }}" href="{{ $subitem->link() }}" class="dropdown-item d-inline px-0"
                 title="{{ $subitem->title }}">{{ $subitem->title }}</a>
            </div>
          @endforeach

        </div>
      </li>
    @else

      <li class="nav-item px-lg-3{{ '/' . Request::path() === $item->url ? ' active' : '' }}">
        <a target="{{ $item->target }}" href="{{ $item->link() }}" class="nav-link py-lg-1 px-lg-0"
           title="{{ $item->title }}">{{ $item->title }}</a>
      </li>

    @endif
  @endforeach
</ul>
