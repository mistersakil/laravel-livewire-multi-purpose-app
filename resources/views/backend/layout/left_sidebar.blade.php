<div class="page-sidebar">
    <div class="sidebar custom-scrollbar">
        <ul class="sidebar-menu">
            <li>
                <a class="sidebar-header @if (request()->is('admin')) active @endif "
                    href="{{ route('admin.dashboard') }}">
                    <i data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- li -->

            <li>
                <a class="sidebar-header @if (request()->is('admin/users')) active @endif "
                    href="{{ route('admin.users') }}">
                    <i data-feather="users"></i>
                    <span>Users</span>
                </a>
            </li>
            <!-- li -->

            <li>
                <a class="sidebar-header @if (request()->is('admin/appointments')) active @endif "
                    href="{{ route('admin.appointments') }}">
                    <i data-feather="users"></i>
                    <span>Appointments</span>
                </a>
            </li>
            <!-- li -->

            <li class="active">
                <a class="sidebar-header" href="#">
                    <i data-feather="dollar-sign"></i>
                    <span>Sales</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu">
                    <li class="active">
                        <a href="{{ route('admin.users') }}" class="active">
                            <i class="fa fa-circle"></i>
                            Orders
                        </a>
                    </li>
                </ul>
                <!-- /.sidebar-submenu -->
            </li>
            <!-- li -->
        </ul>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</div>
<!-- /.page-sidebar -->
