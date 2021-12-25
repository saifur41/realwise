<!--begin::Header-->
<div id="kt_header" class="header">
        <!--begin::Container-->
        <div class="container-fluid d-flex flex-stack">
                <!--begin::Brand-->
                <div class="d-flex align-items-center me-5">
                        <!--begin::Aside toggle-->
                        <div class="d-lg-none btn btn-icon btn-active-color-white w-30px h-30px ms-n2 me-3" id="kt_aside_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                        </svg>
                                </span>
                                <!--end::Svg Icon-->
                        </div>
                        <!--end::Aside  toggle-->
                        <!--begin::Logo-->
                        <a href="../../demo14/dist/index.html">
                                <img alt="Logo" src="{{asset('public/assets/media/logos/logo-2.svg')}}" class="h-25px h-lg-30px" />
                        </a>
                        <!--end::Logo-->

                </div>
                <!--end::Brand-->
                <!--begin::Topbar-->
                <div class="d-flex align-items-center">
                        <!--begin::Topbar-->
                        <div class="d-flex align-items-center flex-shrink-0">

                                <!--begin::User-->
                                <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                                        <!--begin::User info-->
                                        <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                                <!--begin::Name-->
                                                <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                                                        <span class="text-muted fs-8 fw-bold lh-1 mb-1">Max</span>
                                                        <span class="text-white fs-8 fw-bolder lh-1">UX Designer</span>
                                                </div>
                                                <!--end::Name-->
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px symbol-md-40px">
                                                        <img src="{{asset('public/assets/media/avatars/150-26.jpg')}}" alt="image" />
                                                </div>
                                                <!--end::Symbol-->
                                        </div>
                                        <!--end::User info-->
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                        <div class="menu-content d-flex align-items-center px-3">
                                                                <!--begin::Avatar-->
                                                                <div class="symbol symbol-50px me-5">
                                                                        <img alt="Logo" src="{{asset('public/assets/media/avatars/150-26.jpg')}}" />
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <!--begin::Username-->
                                                                <div class="d-flex flex-column">
                                                                        <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
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
                                                        <a href="../../demo14/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5">
                                                        <a href="../../demo14/dist/apps/projects/list.html" class="menu-link px-5">
                                                                <span class="menu-text">My Projects</span>
                                                                <span class="menu-badge">
                                                                        <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                                                                </span>
                                                        </a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                        <a href="#" class="menu-link px-5">
                                                                <span class="menu-title">My Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                        </a>
                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/billing.html" class="menu-link px-5">Billing</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/statements.html" class="menu-link px-5">Payments</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu separator-->
                                                                <div class="separator my-2"></div>
                                                                <!--end::Menu separator-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <div class="menu-content px-3">
                                                                                <label class="form-check form-switch form-check-custom form-check-solid">
                                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                                        <span class="form-check-label text-muted fs-7">Notifications</span>
                                                                                </label>
                                                                        </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5">
                                                        <a href="../../demo14/dist/account/statements.html" class="menu-link px-5">My Statements</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                        <a href="#" class="menu-link px-5">
                                                                <span class="menu-title position-relative">Language
                                                                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                                <img class="w-15px h-15px rounded-1 ms-2" src="{{asset('public/assets/media/flags/united-states.svg')}}" alt="" /></span></span>
                                                        </a>
                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/settings.html" class="menu-link d-flex px-5 active">
                                                                        <span class="symbol symbol-20px me-4">
                                                                                <img class="rounded-1" src="{{asset('public/assets/media/flags/united-states.svg')}}" alt="" />
                                                                        </span>English</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/settings.html" class="menu-link d-flex px-5">
                                                                        <span class="symbol symbol-20px me-4">
                                                                                <img class="rounded-1" src="{{asset('public/assets/media/flags/spain.svg')}}" alt="" />
                                                                        </span>Spanish</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/settings.html" class="menu-link d-flex px-5">
                                                                        <span class="symbol symbol-20px me-4">
                                                                                <img class="rounded-1" src="{{asset('public/assets/media/flags/germany.svg')}}" alt="" />
                                                                        </span>German</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/settings.html" class="menu-link d-flex px-5">
                                                                        <span class="symbol symbol-20px me-4">
                                                                                <img class="rounded-1" src="{{asset('public/assets/media/flags/japan.svg')}}" alt="" />
                                                                        </span>Japanese</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                        <a href="../../demo14/dist/account/settings.html" class="menu-link d-flex px-5">
                                                                        <span class="symbol symbol-20px me-4">
                                                                                <img class="rounded-1" src="{{asset('public/assets/media/flags/france.svg')}}" alt="" />
                                                                        </span>French</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5 my-1">
                                                        <a href="../../demo14/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5">
                                                        <a href="../../demo14/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu separator-->
                                                <div class="separator my-2"></div>
                                                <!--end::Menu separator-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-5">
                                                        <div class="menu-content px-5">
                                                                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo14/dist/index.html" />
                                                                        <span class="pulse-ring ms-n1"></span>
                                                                        <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                                                </label>
                                                        </div>
                                                </div>
                                                <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                </div>
                                <!--end::User -->
                        </div>
                        <!--end::Topbar-->
                </div>
                <!--end::Topbar-->
        </div>
        <!--end::Container-->
</div>
<!--end::Header-->