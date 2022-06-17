<div class="page-main-header">
    <div class="main-header-left">
        <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}">
                <img class="blur-up lazyloaded" src="{{ asset('backend') }}/assets/images/layout-2/logo/logo.png"
                    alt="profile_picture"></a>
        </div>
        <!-- /.logo-wrapper -->
    </div>
    <!-- /.main-header-left -->

    <div class="main-header-right ">
        <div class="mobile-sidebar">
            <div class="media-body text-end switch-sm">
                <label class="switch">
                    <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
                </label>
            </div>
        </div>
        <!-- /.mobile-sidebar -->

        <div class="nav-right col">
            <ul class="nav-menus">
                <li>
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                                class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                        </div>
                    </form>
                </li>

                <li>
                    <a class="text-dark" href="javascript:void(0)" onclick="javascript:toggleFullScreen()">
                        <i data-feather="maximize"></i>
                    </a>
                </li>

                <li class="onhover-dropdown"><i data-feather="bell"></i><span
                        class="badge badge-pill badge-primary pull-right notification-badge">3</span><span
                        class="dot"></span>
                    <ul class="notification-dropdown custom-scrollbar onhover-show-div p-0">
                        <li>
                            <div class="media">
                                <div class="notification-icons bg-success me-3"><i data-feather="thumbs-up"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="font-success">Someone Likes Your Posts</h6>
                                    <p class="mb-0"> 2 Hours Ago</p>
                                </div>
                            </div>
                        </li>


                        <li class="bg-light txt-dark"><a href="javascript:void(0)" data-original-title=""
                                title="">All </a> notification</li>
                    </ul>
                </li>
                <!-- /.onhover-dropdown -->

                <li class="onhover-dropdown">
                    <div class="media align-items-center">
                        <img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded"
                            src="{{ asset('backend') }}/assets/images/dashboard/man.png" alt="header-user">
                        <div class="dotted-animation">
                            <span class="animate-circle"></span>
                            <span class="main-circle"></span>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                        <li>
                            <a href="javascript:void(0)">Profile<span class="pull-right">
                                    <i data-feather="user"></i></span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript:void(0)">
                                Settings
                                <span class="pull-right">
                                    <i data-feather="settings"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                Logout
                                <span class="pull-right">
                                    <i data-feather="mail"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- /.onhover-dropdown -->
            </ul>
            <!-- /.nav-menus -->
            <div class="d-lg-none mobile-toggle pull-right">
                <i data-feather="more-horizontal"></i>
            </div>
            <!-- /.mobile-toggle -->
        </div>
        <!-- /.nav-right col -->
    </div>
    <!-- /.main-header-right -->
</div>
<!-- /.page-main-header -->
