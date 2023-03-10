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
		                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Multipurpose</h1>
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
															<th class="min-w-150px">Campaign Name</th>
															<th class="min-w-140px">Number</th>
															<th class="min-w-120px">ForwardTo</th>
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
														@if( count($campaigns) > 0)
														@foreach($campaigns as $campaign)	
															<tr>
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bold text-hover-primary fs-6">{{ $campaign->title }}</a>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $campaign->phone_number }}</a>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $campaign->forward_to}}</a>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $campaign->created_at }}</a>
																	
																</td>
																<td class="text-dark fw-bold text-hover-primary fs-6">{{ $campaign->total_calls }}</td>
																<td>
																	<span class="badge badge-light-success">{{ $campaign->total_leads }}</span>
																</td>
																<td class="text-end">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		{{ $campaign->con_leads }}
																	</a>
																</td>
																<td class="text-end">
																	<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
																		{{ $campaign->conversion }}
																	</a>
																</td>
															</tr>
														@endforeach
														@endif
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