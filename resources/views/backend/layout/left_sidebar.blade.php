<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ request()->is('admin') ? '' : 'collapsed' }}"
                href="{{ route('admin.dashboard') }}">
                <i class="bx bxs-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- /.nav-item -->
        <li class="nav-item ">
            <a class="nav-link {{ request()->is('admin/users') ? '' : 'collapsed' }}"
                href="{{ route('admin.users') }}">
                <i class="bx bxs-user"></i>
                <span>Users</span>
            </a>
        </li>
        <!-- /.nav-item -->

    </ul>
    <!-- /.sidebar-nav -->
</aside>
<!-- /.sidebar -->
