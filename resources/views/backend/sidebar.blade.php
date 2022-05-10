@section('sidebar')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.home')}}" class="brand-link">
            <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">   {{ Auth::user()->name }}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Quản lý bài viết
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        @if(Auth::user()->can('add_user'))
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.home')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quản lý bài viết</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm tin mới</p>
                                    </a>
                                </li>
                            </ul>
                        @endif
                        @if(Auth::user()->can('is_author'))
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{route('admin.author.home')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quản lý bài viết</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                        <a href="{{route('admin.author.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm tin mới</p>
                                    </a>
                                </li>
                            </ul>
                            @endif
                    </li>
                        @can('add_topic')
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Quản lý danh mục
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.topic')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Quản lý danh mục</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.topic.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm danh mục mới</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                        @can('add_user')
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Quản lý thành viên
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.user')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách thành viên</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('admin.user.create')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm thành viên</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                    @can('add_user')
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Danh sách quyền trong hệ thống
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('admin.role')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách quyền hạn</p>
                                    </a>
                                </li>
                                @endcan
                                {{--đăng xuất--}}
                                <li class="nav-item menu-open">
                                    <p>
                                        <a class="nav-link btn-danger " href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt"></i>
                                            {{ __('Đăng xuất') }}
                                        </a>
                                    </p>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                </ul>
            </nav>

            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
@endsection

