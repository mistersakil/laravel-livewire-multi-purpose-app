<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
    <!--begin::Search-->
    <div class="d-flex align-items-stretch me-1">
        <!--begin::Search-->
        <div id="kt_header_search" class="d-flex align-items-center w-100 w-lg-300px" data-kt-search-keypress="true"
            data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu"
            data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true"
            data-kt-menu-placement="bottom-start" data-kt-search="true">
            <!--begin::Tablet and mobile search toggle-->
            <div data-kt-search-element="toggle" class="d-flex d-lg-none align-items-center">
                <div class="">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
            </div>
            <!--end::Tablet and mobile search toggle-->
            <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
            <form data-kt-search-element="form" class="d-none d-lg-block w-100 mb-5 mb-lg-0" autocomplete="off">
                <div class="position-relative d-flex align-items-center">
                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                    <input type="hidden">
                    <!--end::Hidden input-->
                    <!--begin::Icon-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span
                        class="svg-icon svg-icon-2 svg-icon-lg-3 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Icon-->
                    <!--begin::Input-->
                    <input type="text" class="search-input form-control form-control-transparent ps-8" name="search"
                        value="" placeholder="Search..." data-kt-search-element="input">
                    <!--end::Input-->
                    <!--begin::Spinner-->
                    <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                        data-kt-search-element="spinner">
                        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                    </span>
                    <!--end::Spinner-->
                    <!--begin::Reset-->
                    <span
                        class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-0"
                        data-kt-search-element="clear">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black">
                                </rect>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black"></rect>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <!--end::Reset-->
                </div>
                <!--begin::Separator-->
                <div class="separator mt-1 d-block d-lg-none"></div>
                <!--end::Separator-->
            </form>
            <!--end::Form-->

        </div>
        <!--end::Search-->
    </div>
    <!--end::Search-->
    <!--begin::Toolbar wrapper-->
    <div class="d-flex align-items-stretch flex-shrink-0">
        <!--begin::User-->
        <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-35px symbol-lg-35px" data-kt-menu-trigger="click"
                data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                <img alt="Pic" src="{{asset('backend/images')}}/300-1.jpg">
            </div>
            <!--begin::User account menu-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="{{asset('backend/images')}}/300-1.jpg">
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                            </div>
                            <a href="https://preview.keenthemes.com/craft/index.html#"
                                class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="https://preview.keenthemes.com/craft/account/overview.html" class="menu-link px-5">My
                        Profile</a>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::User account menu-->
            <!--end::Menu wrapper-->
        </div>
        <!--end::User -->
    </div>
    <!--end::Toolbar wrapper-->
</div>