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
		                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Campaign</h1>
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
												<span class="card-label fw-bold fs-3 mb-1">Campaign Details</span>
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
											<!--begin::Hero-->
											<div class="position-relative mb-17">
												<!--begin::Overlay-->
												<div class="overlay overlay-show">
													<!--begin::Image-->
													<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px" style="background-image:url('assets/media/stock/1600x800/img-1.jpg')"></div>
													<!--end::Image-->
													<!--begin::layer-->
													<div class="overlay-layer rounded bg-black" style="opacity: 0.4"></div>
													<!--end::layer-->
												</div>
												<!--end::Overlay-->
												<!--begin::Heading-->
												<div class="position-absolute text-white mb-8 ms-10 bottom-0">
													<!--begin::Title-->
													<h3 class="text-white fs-2qx fw-bold mb-3 m">Careers at KeenThemes</h3>
													<!--end::Title-->
													<!--begin::Text-->
													<div class="fs-5 fw-semibold">You sit down. You stare at your screen. The cursor blinks.</div>
													<!--end::Text-->
												</div>
												<!--end::Heading-->
											</div>
											<!--end::-->
											<!--begin::Layout-->
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
																<label class="required fs-5 fw-semibold mb-2">Category</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
																	<option value="Web Developer">Web Developer</option>
																	<option value="Web Designer">Web Designer</option>
																	<option value="Art Director">Art Director</option>
																	<option value="Finance Manager">Finance Manager</option>
																	<option value="Project Manager">Project Manager</option>
																	<option value="System Administrator">System Administrator</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--end::Label-->
																<label class="required fs-5 fw-semibold mb-2">Campaign Name</label>
																<!--end::Label-->
																<!--end::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="last_name" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="required fs-5 fw-semibold mb-2">Phone Number</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="email" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--end::Label-->
																<label class="fs-5 fw-semibold mb-2">Forward To</label>
																<!--end::Label-->
																<!--end::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="mobileno" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="required fs-5 fw-semibold mb-2">Record Calls</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
																	<option value="Web Developer">Yes</option>
																	<option value="Web Designer">No</option>Administrator</option>
																</select>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<label class="required fs-5 fw-semibold mb-2">Call Recording Message</label>
																<select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
																	<option value="Web Developer">Yes</option>
																	<option value="Web Designer">No</option>Administrator</option>
																</select>
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-5 fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																<span class="required">Create Leads</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Your payment statements may very based on selected position"></i>
															</label>
															<!--end::Label-->
															<!--begin::Select-->
															<select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
																<option value="Web Developer">Web Developer</option>
																<option value="Web Designer">Web Designer</option>
																<option value="Art Director">Art Director</option>
																<option value="Finance Manager">Finance Manager</option>
																<option value="Project Manager">Project Manager</option>
																<option value="System Administrator">System Administrator</option>
															</select>
															<!--end::Select-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-5">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="required fs-5 fw-semibold mb-2">Email Notification For</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-solid" placeholder="" name="salary" />
																<!--end::Input-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<label class="required fs-5 fw-semibold mb-2">Whisper Message</label>
																<select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
																	<option value="Web Developer">Yes</option>
																	<option value="Web Designer">No</option>Administrator</option>
																</select>
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-5 fv-row">
															<label class="fs-5 fw-semibold mb-2">Advertising Cost</label>
															<select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
																<option value="Web Developer">--None--</option>
																<option value="Web Designer">No</option>Administrator</option>
															</select>
														</div>
														<!--end::Input group-->
														
														<!--begin::Submit-->
														<button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
															<!--begin::Indicator label-->
															<span class="indicator-label">Apply Now</span>
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
													<!--begin::Careers about-->
													<div class="card bg-light">
														<!--begin::Body-->
														<div class="card-body">
															<!--begin::Top-->
															<div class="mb-7">
																<!--begin::Title-->
																<h2 class="fs-1 text-gray-800 w-bolder mb-6">About Us</h2>
																<!--end::Title-->
																<!--begin::Text-->
																<p class="fw-semibold fs-6 text-gray-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
																<!--end::Text-->
															</div>
															<!--end::Top-->
															<!--begin::Item-->
															<div class="mb-8">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">Requirements</h4>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="my-2">
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																	<!--begin::Row-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="mb-8">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">Our Achievements</h4>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="my-2">
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																	<!--begin::Row-->
																	<div class="d-flex align-items-center">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Item-->
															<!--begin::Link-->
															<a href="../../demo1/dist/pages/blog/post.html" class="link-primary fs-6 fw-semibold">Explore More</a>
															<!--end::Link-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Careers about-->
												</div>
												<!--end::Sidebar-->
											</div>
											<!--end::Layout-->
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