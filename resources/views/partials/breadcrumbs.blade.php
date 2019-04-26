@if (count($breadcrumbs))

  <ol class="breadcrumb m-0 p-0 bg-transparent">
    @foreach ($breadcrumbs as $breadcrumb)

      @if ($breadcrumb->url && !$loop->last)
        <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}" class="text-reset">{{ $breadcrumb->title }}</a></li>
      @else
        <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
      @endif

    @endforeach
  </ol>

@endif
