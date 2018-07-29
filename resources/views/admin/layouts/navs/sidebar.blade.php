<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                <a href="{{ route('manage.index') }}"><i class="fa fa-dashboard fa-fw"></i>&nbsp;Dashboard</a>
            </li>

            @role('superadministrator')
                <li>
                    <a href="#">
                        <i class="fa fa-users fa-fw"></i>&nbsp;User Management<span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('/manage/user/*') ? 'class="active"' : '') }}>
                            <a href="{{ route('user.index') }}"> <i class="fa fa-user fa-fw"></i>&nbsp;User</a>
                        </li>
                        <li {{ (Request::is('/manage/role/*') ? 'class="active"' : '') }}>
                            <a href="{{ route('role.index') }}"><i class="fa fa-user-secret fa-fw"></i>&nbsp;Role</a>
                        </li>
                        <li {{ (Request::is('/manage/permission/*') ? 'class="active"' : '') }}>
                            <a href="{{ route('permission.index') }}"><i class="fa fa-thumbs-up fa-fw"></i>&nbsp;Permission</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>

                {{-- media management menu --}}
                <li>
                    <a href="#">
                        <i class="fa fa-files-o fa-fw"></i>&nbsp;Media Management<span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level">
                        <li {{ (Request::is('/manage/image/*') ? 'class="active"' : '') }}>
                            <a href="{{ route('image.index') }}"> <i class="fa fa-picture-o fa-fw"></i>&nbsp;Images</a>
                        </li>
                        <li {{ (Request::is('/manage/file/*') ? 'class="active"' : '') }}>
                            <a href="{{ route('file.index') }}"> <i class="fa fa-file-pdf-o fa-fw"></i>&nbsp;Files</a>
                        </li>
                        <li {{ (Request::is('/manage/scanned-file/*') ? 'class="active"' : '') }}>
                            <a href="{{ route('scannedfile.index') }}"> <i class="fa fa-file-image-o fa-fw"></i>&nbsp;Scanned Files</a>
                        </li>
                    </ul>
                </li>
            @endrole

            {{-- testimony management menu --}}
            
            <li {{ (Request::is('/manage/testimony/*') ? 'class="active"' : '') }}>
                <a href="{{ route('testimony.index') }}"> <i class="fa fa-comments-o fa-fw"></i>&nbsp;Testimony List</a>
            </li>
            
            @role('superadministrator')
                {{-- Company Service --}}
                 <li {{ (Request::is('/manage/service/*') ? 'class="active"' : '') }}>
                    <a href="{{ route('service.index') }}">
                        <i class="fa fa-hand-o-right fa-fw"></i>&nbsp;Service
                    </a>
                </li>


                {{-- blog --}}
                <li {{ (Request::is('/manage/blog/*') ? 'class="active"' : '') }}>
                    <a href="{{ route('blog.index') }}"><i class="fa fa-newspaper-o fa-fw"></i>&nbsp;Blog</a>
                </li>

            @endrole

            {{-- Product --}}
            <li {{ (Request::is('/manage/product/*') ? 'class="active"' : '') }}>
                <a href="{{ route('product.index') }}"><i class="fa fa-shopping-bag fa-fw"></i>&nbsp;Project</a>
            </li>

            {{-- Product Type --}}
            <li {{ (Request::is('/manage/producttype/*') ? 'class="active"' : '') }}>
                <a href="{{ route('productcategory.index') }}"><i class="fa fa-list fa-fw"></i>&nbsp;Project Category</a>
            </li>
            
          
            {{-- General Settings --}}
           
            <li>
                <a href="#">
                    <i class="fa fa-gears"></i>&nbsp;Setting<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li {{ Request::is('/manage/setting/*') ? 'class="active"' : '' }}>
                        <a href="{{ route('setting.index', ['set' => 1]) }}"><i class="fa fa-gear fa-fw"></i>&nbsp;Setting</a>
                    </li>
                    <li {{ Request::is('/manage/partner/*') ? 'class="active"' : '' }}>
                        <a href="{{ route('partner.index') }}"><i class="fa fa-hand-spock-o fa-fw"></i>&nbsp;Partner</a>
                    </li>
                </ul>
            </li>
            
            
         
          
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->