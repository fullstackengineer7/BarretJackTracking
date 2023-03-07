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
		                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">CREATE NEW CAMPAIGN</h1>
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
		                      
									<div class="card card-flush">
										<!-- <div class="card-header pt-7">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-gray-800">Shipment History</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6">59 Active Shipments</span>
											</h3>
											<div class="card-toolbar">
												<a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="Logistics App is coming soon">View All</a>
											</div>
										</div> -->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Nav-->
											<ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
												<!--begin::Item-->
												<li class="nav-item col-4 mx-0 p-0">
													<!--begin::Link-->
													<a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
														<!--begin::Subtitle-->
														<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Local</span>
														<!--end::Subtitle-->
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
														<!--end::Bullet-->
													</a>
													<!--end::Link-->
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item col-4 mx-0 px-0">
													<!--begin::Link-->
													<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
														<!--begin::Subtitle-->
														<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Toll Free</span>
														<!--end::Subtitle-->
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
														<!--end::Bullet-->
													</a>
													<!--end::Link-->
												</li>
												<!--end::Item-->
												<!--begin::Bullet-->
												<span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
												<!--end::Bullet-->
											</ul>
											<!--end::Nav-->
											<!--begin::Tab Content-->
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
													<!--begin::Item-->
													<div class="m-0">
														<div class="d-flex flex-column flex-lg-row mb-17">
															<!--begin::Content-->
															<div class="flex-lg-row-fluid me-0 me-lg-20">
																<!--begin::Form-->
																<form action="m-0" class="form mb-15" method="post" id="kt_careers_form">
																	<!--begin::Input group-->
																	<div class="row mb-5">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<!--begin::Label-->
																			<label class="required fs-5 fw-semibold mb-2">Area Code</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" class="form-control form-control-solid" placeholder="" name="first_name" />
																			<!--end::Input-->
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<label class="fs-5 fw-semibold mb-2"></label>
																				<p class="fw-semibold fs-6 text-gray-600">Enter area code where you want to advertise this number.(for example 516 is New York City area code)</p>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--begin::Submit-->
																	<button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
																		<!--begin::Indicator label-->
																		<span class="indicator-label">Search</span>
																		<!--end::Indicator label-->
																		<!--begin::Indicator progress-->
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		<!--end::Indicator progress-->
																	</button>
																	<!--end::Submit-->
																</form>
																<!--end::Form-->
															</div>
															<!--end::Content-->
															<!--begin::Sidebar-->
															<div class="flex-lg-row-auto w-100 w-lg-275px w-xxl-350px">
																
															</div>
															<!--end::Sidebar-->
														</div>
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-6"></div>
													<!--end::Separator-->
													<div class="m-0">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-sm-center mb-5">
															<h3>Search Result</h3>
														</div>
														<!--end::Wrapper-->
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
																		<th class="min-w-140px">Number</th>
																		<th class="min-w-120px">Monthly Cost</th>
																		<th class="min-w-120px">Amount Collected Today</th>
																		<th class="min-w-120px">Included Minutes</th>
																		<th class="min-w-120px">Average Cost</th>
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
																			<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">(912)380-3245</a>
																			<span class="text-muted fw-semibold text-muted d-block fs-7">GA</span>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary fs-6">$1.50/month</a>
																		</td>
																		<td>
																			<span class="badge badge-light-success">$0.50</span>
																		</td>
																		<td class="text-dark fw-bold text-hover-primary fs-6">0 minutes/month</td>
																		<td class="text-dark fw-bold text-hover-primary fs-6">$0.03/month</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Register</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
													</div>
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_list_widget_10_tab_2">
													<!--begin::Item-->
													<div class="m-0">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-sm-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px me-4">
																<span class="symbol-label bg-primary">
																	<i class="text-inverse-primary fs-1 lh-0 fonticon-offline"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Section-->
															<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																<div class="flex-grow-1 me-2">
																	<a href="#" class="text-gray-400 fs-6 fw-semibold">Plane Freight</a>
																	<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																</div>
																<span class="badge badge-lg badge-light-success fw-bold my-2">Delivered</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Timeline-->
														<div class="timeline">
															<!--begin::Timeline item-->
															<div class="timeline-item align-items-center mb-7">
																<!--begin::Timeline line-->
																<div class="timeline-line w-40px mt-6 mb-n12"></div>
																<!--end::Timeline line-->
																<!--begin::Timeline icon-->
																<div class="timeline-icon" style="margin-left: 11px">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-danger">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
																			<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Timeline icon-->
																<!--begin::Timeline content-->
																<div class="timeline-content m-0">
																	<!--begin::Title-->
																	<span class="fs-6 text-gray-400 fw-semibold d-block">KLM Cargo</span>
																	<!--end::Title-->
																	<!--begin::Title-->
																	<span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
																	<!--end::Title-->
																</div>
																<!--end::Timeline content-->
															</div>
															<!--end::Timeline item-->
															<!--begin::Timeline item-->
															<div class="timeline-item align-items-center">
																<!--begin::Timeline line-->
																<div class="timeline-line w-40px"></div>
																<!--end::Timeline line-->
																<!--begin::Timeline icon-->
																<div class="timeline-icon" style="margin-left: 11px">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-info">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
																			<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Timeline icon-->
																<!--begin::Timeline content-->
																<div class="timeline-content m-0">
																	<!--begin::Title-->
																	<span class="fs-6 text-gray-400 fw-semibold d-block">Singapore Cargo</span>
																	<!--end::Title-->
																	<!--begin::Title-->
																	<span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
																	<!--end::Title-->
																</div>
																<!--end::Timeline content-->
															</div>
															<!--end::Timeline item-->
														</div>
														<!--end::Timeline-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-6"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="m-0">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-sm-center mb-5">
															<!--begin::Symbol-->
															<div class="symbol symbol-45px me-4">
																<span class="symbol-label bg-primary">
																	<i class="text-inverse-primary fs-1 lh-0 fonticon-truck"></i>
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Section-->
															<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																<div class="flex-grow-1 me-2">
																	<a href="#" class="text-gray-400 fs-6 fw-semibold">Truck Freight</a>
																	<span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
																</div>
																<span class="badge badge-lg badge-light-success fw-bold my-2">Delivered</span>
															</div>
															<!--end::Section-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Timeline-->
														<div class="timeline">
															<!--begin::Timeline item-->
															<div class="timeline-item align-items-center mb-7">
																<!--begin::Timeline line-->
																<div class="timeline-line w-40px mt-6 mb-n12"></div>
																<!--end::Timeline line-->
																<!--begin::Timeline icon-->
																<div class="timeline-icon" style="margin-left: 11px">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-danger">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z" fill="currentColor" />
																			<path d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Timeline icon-->
																<!--begin::Timeline content-->
																<div class="timeline-content m-0">
																	<!--begin::Title-->
																	<span class="fs-6 text-gray-400 fw-semibold d-block">Haven van Rotterdam</span>
																	<!--end::Title-->
																	<!--begin::Title-->
																	<span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
																	<!--end::Title-->
																</div>
																<!--end::Timeline content-->
															</div>
															<!--end::Timeline item-->
															<!--begin::Timeline item-->
															<div class="timeline-item align-items-center">
																<!--begin::Timeline line-->
																<div class="timeline-line w-40px"></div>
																<!--end::Timeline line-->
																<!--begin::Timeline icon-->
																<div class="timeline-icon" style="margin-left: 11px">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-info">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
																			<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Timeline icon-->
																<!--begin::Timeline content-->
																<div class="timeline-content m-0">
																	<!--begin::Title-->
																	<span class="fs-6 text-gray-400 fw-semibold d-block">Forest-Midi</span>
																	<!--end::Title-->
																	<!--begin::Title-->
																	<span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
																	<!--end::Title-->
																</div>
																<!--end::Timeline content-->
															</div>
															<!--end::Timeline item-->
														</div>
														<!--end::Timeline-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Tap pane-->
											</div>
											<!--end::Tab Content-->
										</div>
										<!--end: Card Body-->
									</div>
									
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