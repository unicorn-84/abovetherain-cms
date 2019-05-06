@extends('voyager::master')

@section('css')
    <style>
        .user-email {
            font-size: .85rem;
            margin-bottom: 1.5em;
        }
    </style>
@stop

@section('content')
  @if(Voyager::setting('admin.fon'))
    <div style="background: center center url({{ Voyager::image( Voyager::setting('admin.fon'), '') }}) no-repeat; position:absolute; top:0; left:0; width:100%; height:300px; background-size: cover;"></div>
  @endif
    <div style="height:160px; display:block; width:100%"></div>
    <div style="position:relative; z-index:9; text-align:center;">
        <img src="@if( !filter_var(app('VoyagerAuth')->user()->avatar, FILTER_VALIDATE_URL)){{ Voyager::image( app('VoyagerAuth')->user()->avatar ) }}@else{{ app('VoyagerAuth')->user()->avatar }}@endif"
             class="avatar"
             style="border-radius:50%; width:150px; height:150px; border:5px solid #fff;"
             alt="{{ app('VoyagerAuth')->user()->name }} avatar">
        <h4>{{ ucwords(app('VoyagerAuth')->user()->name) }}</h4>
        <div class="user-email text-muted">{{ app('VoyagerAuth')->user()->email }}</div>
        <p>{{ app('VoyagerAuth')->user()->bio }}</p>
        <a href="{{ route('voyager.users.edit', app('VoyagerAuth')->user()->getKey()) }}" class="btn btn-primary">{{ __('voyager::profile.edit') }}</a>
    </div>
@stop
