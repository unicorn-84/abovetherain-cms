<ul class="list-unstyled m-0">
  @foreach($items as $item)
    <li class="nav-item px-lg-3{{ $loop->last ? '' : ' mb-2' }}">
      <a target="{{ $item->target }}" href="{{ $item->link() }}" class="text-white mb-0"
         title="{{ $item->title }}">{{ $item->title }}</a>
    </li>
  @endforeach
</ul>
