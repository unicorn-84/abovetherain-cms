<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <!-- <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('voyager.dashboard') }}">
                    <div class="logo-icon-container"> -->
                        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
                        @if($admin_logo_img)
                            <!-- <img src="{{ Voyager::image($admin_logo_img) }}" alt="{{ Voyager::setting('admin.name', '') }}"> -->
                        @endif
                    <!-- </div>
                    <div class="title">{{ Voyager::setting('obshchie.title', 'VOYAGER') }}</div>
                </a>
            </div> -->
            <!-- .navbar-header -->

            <div class="panel widget center bgimage"
                 style="background: center center url({{ Voyager::image( Voyager::setting('admin.fon', '')) }}); background-size: cover;">
                <div class="dimmer"></div>
                <div class="panel-content">
                    <img src="{{ $user_avatar }}" class="avatar" alt="{{ app('VoyagerAuth')->user()->name }} avatar">
                    <h4>{{ ucwords(app('VoyagerAuth')->user()->name) }}</h4>
                    <p>{{ app('VoyagerAuth')->user()->email }}</p>

                    <a href="{{ route('voyager.profile') }}" class="btn btn-primary">{{ __('voyager::generic.profile') }}</a>
                    <div style="clear:both"></div>
                </div>
            </div>

        </div>
        <div id="adminmenu">
            <admin-menu :items="{{ menu('admin', '_json') }}"></admin-menu>
        </div>
    </nav>
</div>
