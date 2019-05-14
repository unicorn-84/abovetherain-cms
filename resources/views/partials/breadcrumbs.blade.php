@if (count($breadcrumbs))
  <ol class="breadcrumb m-0 p-0 bg-transparent text-center justify-content-center">
    @foreach ($breadcrumbs as $breadcrumb)
      @if ($breadcrumb->url && !$loop->last)
        <li class="breadcrumb-item text-truncate"><a href="{{ $breadcrumb->url }}" class="text-reset" title="{{ $breadcrumb->title }}">{{ $breadcrumb->title }}</a></li>
      @else
        <li class="breadcrumb-item active text-truncate text-reset">{{ $breadcrumb->title }}</li>
      @endif
    @endforeach
  </ol>
@endif
