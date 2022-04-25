<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Craft</title>

    <meta name="description"
        content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.">
    <meta name="keywords"
        content="Craft, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @includeIf('backend.layout.header')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">

    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-default aside-hoverable" data-kt-drawer="true"
                data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:&#39;200px&#39;, &#39;300px&#39;: &#39;250px&#39;}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto pt-9 pb-5" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="/">
                        <img alt="Logo" src="{{asset('backend/images')}}/logo-default.svg"
                            class="max-h-50px logo-default">
                        <img alt="Logo" src="{{asset('backend/images')}}/logo-minimize.svg"
                            class="max-h-50px logo-minimize">
                    </a>
                    <!--end::Logo-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::Aside Menu-->
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 my-5 mt-lg-2 mb-lg-0"
                        id="kt_aside_menu" data-kt-menu="true">
                        <div class="menu-fit hover-scroll-y me-lg-n5 pe-lg-5" id="kt_aside_menu_wrapper"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_menu"
                            data-kt-scroll-offset="20px" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
                            style="height: 465px;">
                            <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                                <span class="menu-link">
                                    <span class="menu-icon">

                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        {{-- <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                    fill="black"></rect>
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                    fill="black"></rect>
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                    fill="black"></rect>
                                            </svg>
                                        </span> --}}
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">
                                        Dashboards
                                    </span>
                                    <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link active"
                                            href="https://preview.keenthemes.com/craft/index.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Multipurpose</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link"
                                            href="https://preview.keenthemes.com/craft/dashboards/store-analytics.html">
                                            <span class="menu-bullet">
                                                <span class="bullet bullet-dot"></span>
                                            </span>
                                            <span class="menu-title">Store Analytics</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item pt-5">
                                <div class="menu-content">
                                    <span class="fw-bold text-muted text-uppercase fs-7">Crafted</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside menu-->
                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto pb-5 d-none" id="kt_aside_footer">
                    <a href="https://preview.keenthemes.com/craft/index.html"
                        class="btn btn-light-primary w-100">Button</a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{default: &#39;200px&#39;, lg: &#39;300px&#39;}"
                    style="animation-duration: 0.3s;">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex align-items-stretch justify-content-between">
                        <!--begin::Logo bar-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <!--begin::Aside Toggle-->
                            <div class="d-flex align-items-center d-lg-none">
                                <div class="btn btn-icon btn-active-color-primary ms-n2 me-1" id="kt_aside_toggle">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                fill="black"></path>
                                            <path opacity="0.3"
                                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Aside Toggle-->
                            <!--begin::Logo-->
                            <a href="https://preview.keenthemes.com/craft/index.html" class="d-lg-none">
                                <img alt="Logo" src="{{asset('backend/images')}}/logo-compact.svg" class="mh-40px">
                            </a>
                            <!--end::Logo-->
                            <!--begin::Aside toggler-->
                            <div class="btn btn-icon w-auto ps-0 btn-active-color-primary d-none d-lg-inline-flex me-2 me-lg-5"
                                data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                                data-kt-toggle-name="aside-minimize">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr060.svg-->
                                <span class="svg-icon svg-icon-2 rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z"
                                            fill="black"></path>
                                        <path
                                            d="M6.2238 13.2561C5.54282 12.5572 5.54281 11.4429 6.22379 10.7439L10.377 6.48107C10.8779 5.96697 11.75 6.32158 11.75 7.03934V16.9607C11.75 17.6785 10.8779 18.0331 10.377 17.519L6.2238 13.2561Z"
                                            fill="black"></path>
                                        <rect opacity="0.3" x="2" y="4" width="2" height="16" rx="1" fill="black">
                                        </rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Aside toggler-->
                        </div>
                        <!--end::Logo bar-->
                        <!--begin::Topbar-->
                        @includeIf('backend.layout.topbar')
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Breadcrumb-->
                    @includeIf('backend.layout.breadcrumb')
                    <!--end::Breadcrumb-->

                    <!--start::Main content-->
                    @yield('main_content')
                    <!--end::Main content-->



                </div>
                <!--end::Content-->
                <!--begin::Footer-->

                @includeIf('backend.layout.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--Start::Footer Script-->
    @includeIf('backend.layout.footer_scripts')

    <!--end::Footer Script-->

</body>

</html>