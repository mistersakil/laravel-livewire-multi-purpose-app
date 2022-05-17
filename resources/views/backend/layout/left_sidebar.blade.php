<div class="main-menu menu-fixed menu-dark menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="navigation-header">
                <span data-i18n="nav.category.layouts">Operations</span>
            </li>
            <li class="nav-item @if (request()->is('admin')) active @endif">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Dashboard</span>
                </a>
            </li>
            <li class="nav-item @if (request()->is('admin/users')) active @endif">
                <a href="{{ route('admin.users') }}">
                    <i class="fas fa-users"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Users</span>
                </a>
            </li>
            <li class=" navigation-header">
                <span dta-i18n="nav.category.layouts">System</span>
                <i class="ft-more-horizontal ft-minus" data-toggle="tooltip" data-placement="right"
                    data-original-title="Layouts"></i>
            </li>
            <li class="nav-item"><a href="#">
                    <i class="icon-layers"></i>
                    <span class="menu-title" data-i18n="nav.page_layouts.main">Page layouts</span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="layout-1-column.html" data-i18n="nav.page_layouts.1_column">1
                            columns</a>
                    </li>
                    <li>
                        <a class="menu-item" href="layout-2-columns.html" data-i18n="nav.page_layouts.2_columns">2
                            columns</a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</div>
