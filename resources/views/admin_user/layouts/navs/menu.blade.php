<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ route('mainpage.index') }}">
        <img src="{{ !empty($setting->logoImage()) ? asset($setting->logoImage()->location) : asset('images/astrologo.png') }}" title="{{ !empty($setting->logoImage()) ? $setting->logoImage()->name : 'Astro Logo' }}" width="150" height="30" />
    </a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a href="{{ route('user.profile.index', ['user' => Auth::user()->id, 'name' => Auth::user()->name]) }}"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li class="divider"></li>
            <li>
                <form action="{{ route('logout') }}" method="post" id="logoutForm">
                    {{ csrf_field() }}
                    <a class="btn" href="javascript:" onclick="document.forms['logoutForm'].submit(); return false;"> 
                        <i class="fa fa-sign-out fa-fw"></i> Logout
                    </a>
                </form>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->