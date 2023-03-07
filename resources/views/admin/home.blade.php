<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head>
    @include('admin.partials.head')   
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
          <!--begin::Header-->
          @include('admin.partials.navbar')
          <!--end::Header-->
          <!--begin::Wrapper-->
          <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
        @include('admin.partials.sidebar')
        <!--begin::Main-->
              <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                  <!--begin::Toolbar-->
                  <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                      <!--begin::Page title-->
                      <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">CREATE NEW LEAD</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                          <!--begin::Item-->
                          <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                          </li>
                          <!--end::Item-->
                          <!--begin::Item-->
                          <li class="breadcrumb-item text-muted">Dashboards</li>
                          <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                      </div>
                      <!--end::Page title-->
                      <!--begin::Actions-->
                      <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Secondary button-->
                        <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Rollover</a>
                        <!--end::Secondary button-->
                        <!--begin::Primary button-->
                        <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
                        <!--end::Primary button-->
                      </div>
                      <!--end::Actions-->
                    </div>
                    <!--end::Toolbar container-->
                  </div>
                  <!--end::Toolbar-->
                  <!--begin::Content-->
                  <div id="kt_app_content" class="app-content flex-column-fluid">
                    <!--begin::Content container-->
                    <div id="kt_app_content_container" class="app-container container-fluid">
                      
                      <!--begin::Row-->
                      <div class="row gx-12 gx-xl-12">
                        <!--begin::Col-->
                        <div class="col-xl-12">
                          <!--begin::Chart widget 24-->
                            <!--begin::Tables Widget 13-->
                  <div class="card mb-5 mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                      <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Campaigns</span>
                        <span class="text-muted mt-1 fw-semibold fs-7">Over 500 campaigns</span>
                      </h3>
                      <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                          <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                          <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              </g>
                            </svg>
                          </span>
                          <!--end::Svg Icon-->
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu separator-->
                          <div class="separator mb-3 opacity-75"></div>
                          <!--end::Menu separator-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Ticket</a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Customer</a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                            <!--begin::Menu item-->
                            <a href="#" class="menu-link px-3">
                              <span class="menu-title">New Group</span>
                              <span class="menu-arrow"></span>
                            </a>
                            <!--end::Menu item-->
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Admin Group</a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Staff Group</a>
                              </div>
                              <!--end::Menu item-->
                              <!--begin::Menu item-->
                              <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">Member Group</a>
                              </div>
                              <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">New Contact</a>
                          </div>
                          <!--end::Menu item-->
                          <!--begin::Menu separator-->
                          <div class="separator mt-3 opacity-75"></div>
                          <!--end::Menu separator-->
                          <!--begin::Menu item-->
                          <div class="menu-item px-3">
                            <div class="menu-content px-3 py-3">
                              <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                            </div>
                          </div>
                          <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                      </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-3">
                      <!--begin::Table container-->
                      <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                          <!--begin::Table head-->
                          <thead>
                            <tr class="fw-bold text-muted">
                              <th class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                  <input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-13-check" />
                                </div>
                              </th>
                              <th class="min-w-150px">Campaing Name</th>
                              <th class="min-w-140px">Number</th>
                              <th class="min-w-120px">FOrwardTo</th>
                              <th class="min-w-120px">Created</th>
                              <th class="min-w-120px">Total Calls</th>
                              <th class="min-w-120px">Total Loads</th>
                              <th class="min-w-100px text-end">Converted Leads</th>
                              <th class="min-w-100px text-end">Conversion</th>
                            </tr>
                          </thead>
                          <!--end::Table head-->
                          <!--begin::Table body-->
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                  <input class="form-check-input widget-13-check" type="checkbox" value="1" />
                                </div>
                              </td>
                              <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-6">56037-XDER</a>
                              </td>
                              <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Brasil</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Code: PH</span>
                              </td>
                              <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">05/28/2020</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Code: Paid</span>
                              </td>
                              <td>
                                <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">Intertico</a>
                                <span class="text-muted fw-semibold text-muted d-block fs-7">Web, UI/UX Design</span>
                              </td>
                              <td class="text-dark fw-bold text-hover-primary fs-6">$3560</td>
                              <td>
                                <span class="badge badge-light-success">Approved</span>
                              </td>
                              <td class="text-end">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                  <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                  <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                      <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                  <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                  <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                      <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                  <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                  <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                                      <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                                      <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                                    </svg>
                                  </span>
                                  <!--end::Svg Icon-->
                                </a>
                              </td>
                            </tr>
                          </tbody>
                          <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                      </div>
                      <!--end::Table container-->
                    </div>
                    <!--begin::Body-->
                  </div>
                  <!--end::Tables Widget 13-->
                          <!--end::Chart widget 24-->
                        </div>
                        <!--end::Col-->
                      </div>
                      <!--end::Row-->
                    </div>
                    <!--end::Content container-->
                  </div>
                  <!--end::Content-->
                </div>
                <!--end::Content wrapper-->
                </div>
                <!--end::Footer-->
              </div>
            <!--end:::Main-->
          </div>
          <!--end::Wrapper-->
        </div>
        <!--end::Page-->
      </div>
    <!--begin::Javascript-->
    @include('admin.partials.footer')
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>