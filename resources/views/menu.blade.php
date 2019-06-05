<ul class="navbar-nav ml-auto text-uppercase">
  @foreach($items as $item)
    @if($item->route)
      <li class="nav-item px-lg-3{{ Request::route()->getName() === $item->route ? ' active' : '' }}">
        <a href="{{ $item->link() }}" class="nav-link py-lg-1 px-lg-0" title="{{ $item->title }}">{{ $item->title }}</a>
      </li>
    @elseif($item->url)
      <li class="nav-item px-lg-3{{ Request::segment(1) === $item->url ? ' active' : '' }}">
        <a href="{{ $item->link() }}" class="nav-link py-lg-1 px-lg-0" title="{{ $item->title }}">{{ $item->title }}</a>
      </li>
    @endif
  @endforeach
</ul>
