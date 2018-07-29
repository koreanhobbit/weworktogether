<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li {{ (Request::is('/user/' . Auth::user()->id . '/profile/' . Auth::user()->name) . '/*' ? 'class="active"' : '') }}>
                <a href="{{ route('user.profile.index', ['user' => Auth::user()->id, 'name' => Auth::user()->name]) }}"> <i class="fa fa-user fa-fw"></i>&nbsp;Profile</a>
            </li>
    
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->