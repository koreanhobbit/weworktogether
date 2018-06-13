<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li {{ (Request::is('/' . Auth::user()->id . '/dashboard/' . Auth::user()->name . '/*') ? 'class="active"' : '') }}>
                <a href="{{ route('guide.dashboard.index', ['user' => Auth::user()->id, 'name' => Auth::user()->name]) }}"><i class="fa fa-dashboard fa-fw"></i>&nbsp;Dashboard</a>
            </li>

            <li {{ (Request::is('/' . Auth::user()->id . '/profile/' . Auth::user()->name) . '/*' ? 'class="active"' : '') }}>
                <a href="{{ route('guide.profile.index', ['user' => Auth::user()->id, 'name' => Auth::user()->name]) }}"> <i class="fa fa-user fa-fw"></i>&nbsp;Profile</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->