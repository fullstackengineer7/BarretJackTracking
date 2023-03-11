<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.7
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
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
			
					<div id="kt_app_header" class="app-header">
					    <!--begin::Header container-->
					    <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
					      <!--begin::Sidebar mobile toggle-->
					      <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
					        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
					          <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
					          <span class="svg-icon svg-icon-2 svg-icon-md-1">
					            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					              <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
					              <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
					            </svg>
					          </span>
					          <!--end::Svg Icon-->
					        </div>
					      </div>
					      <!--end::Sidebar mobile toggle-->
					      <!--begin::Mobile logo-->
					      <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
					        <a href="../../demo1/dist/index.html" class="d-lg-none">
					          <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
					        </a>
					      </div>
					      <!--end::Mobile logo-->
					      <!--begin::Header wrapper-->
					      <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
					        <!--begin::Menu wrapper-->
					        <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
					          <!--begin::Menu-->
					          <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">

					           <!--begin::Menu-->
					          <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">

					            <!--begin:Menu item-->
					            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
						              <span class="menu-link">
						                <span class="menu-title">You're currently in your trial period. Add your credit card to keep your lead tracking and settings.<br>You won't be billed until your trial ends on Mar 25.</span>
						              </span>
					            </div>					            
					          </div>
					          <!--end::Menu-->
					            
					          </div>
					          <!--end::Menu-->
					        </div>
					        <!--end::Menu wrapper-->
					        
					      </div>
					      <!--end::Header wrapper-->
					    </div>
					    <!--end::Header container-->
					    @include('admin.partials.navbar')
					</div>
				<!--end::Header-->
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					@include('admin.partials.sidebar')
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('client.agent-view') }}">Agent View</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('client.team-view') }}">Team View</a>
												</li>
												<!--end::Nav item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Secondary button-->
										<a href="../../demo1/dist/apps/customers/view.html" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary" style="font-size: 14px;">Add Credit Card</a>
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<a href="{{ route('create-new-campaign') }}" class="btn btn-sm fw-bold btn-primary" style="font-size: 14px;">New Campaign</a>
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
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Contacts App- View Contact-->
									<div class="row g-7">
										<!--begin::Contact groups-->
										<div class="col-lg-6 col-xl-3">
											<!--begin::Contact group wrapper-->
											<div class="card card-flush">
												<!-- <div class="card-header pt-7" id="kt_chat_contacts_header">
													<div class="card-title">
														<h2>Calls</h2>
													</div>
												</div> -->
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Contact groups-->
													<div class="d-flex flex-column gap-5">
														<h2>ACQUISITION</h2>
														<!--begin::Contact group-->
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Lead Attribution</a>
															<div class="badge badge-light-primary">9</div>
														</div>
														<!--begin::Contact group-->
														<!--begin::Contact group-->
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Leads</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<!--begin::Contact group-->
														<!--begin::Contact group-->
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Multi-Touch CPL</a>
															<div class="badge badge-light-primary">1</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Call Attribution</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Text Attribution</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Form Attribution</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Calls by Number</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Calls by Company</a>
															<div class="badge badge-light-primary">3</div>
														</div>
													</div>
													<div class="separator my-7"></div>
													<!--end::Contact groups-->
													<!--begin::Contact groups-->
													<div class="d-flex flex-column gap-5">
														<h2>BEHAVIOR</h2>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Calls by Agent</a>
															<div class="badge badge-light-primary">9</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Calls by Tag</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Forms by Tag</a>
															<div class="badge badge-light-primary">9</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Calls by Day & Time</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Call Highlights</a>
															<div class="badge badge-light-primary">9</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Key Terms Spotted</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Unanwered Calls</a>
															<div class="badge badge-light-primary">9</div>
														</div>
													</div>
													<!--end::Contact groups-->
													<!--begin::Separator-->
													<div class="separator my-7"></div>
													<!--begin::Separator-->
													<!--begin::Contact groups-->
													<div class="d-flex flex-column gap-5">
														<h2>CUSTOM</h2>
														<!--begin::Contact group-->
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Create Report</a>
															<div class="badge badge-light-primary">9</div>
														</div>
													</div>
													<!--end::Contact groups-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Contact group wrapper-->
										</div>
										<!--end::Contact groups-->
										<!--end::Search-->
										<!--begin::Content-->
										<div class="col-xl-6">
											<!--begin::Contacts-->
											<div class="card card-flush h-lg-100" id="kt_contacts_main">
												<!--begin::Card header-->
												<div class="card-header pt-7" id="kt_chat_contacts_header">
													<!--begin::Card title-->
													<div class="card-title">
														<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
														<span class="svg-icon svg-icon-1 me-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
																<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<h2>Call Flows</h2>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar gap-3">
														<!--begin::Chat-->
														<button class="btn btn-sm btn-light btn-active-light-primary" data-kt-drawer-show="true" data-kt-drawer-target="#kt_drawer_chat">
														<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
														<span class="svg-icon svg-icon-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
																<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
																<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Chat</button>
														<!--end::Chat-->
														<!--begin::Chat-->
														<a href="../../demo1/dist/apps/inbox/reply.html" class="btn btn-sm btn-light btn-active-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/communication/com007.svg-->
														<span class="svg-icon svg-icon-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M8 8C8 7.4 8.4 7 9 7H16V3C16 2.4 15.6 2 15 2H3C2.4 2 2 2.4 2 3V13C2 13.6 2.4 14 3 14H5V16.1C5 16.8 5.79999 17.1 6.29999 16.6L8 14.9V8Z" fill="currentColor" />
																<path d="M22 8V18C22 18.6 21.6 19 21 19H19V21.1C19 21.8 18.2 22.1 17.7 21.6L15 18.9H9C8.4 18.9 8 18.5 8 17.9V7.90002C8 7.30002 8.4 6.90002 9 6.90002H21C21.6 7.00002 22 7.4 22 8ZM19 11C19 10.4 18.6 10 18 10H12C11.4 10 11 10.4 11 11C11 11.6 11.4 12 12 12H18C18.6 12 19 11.6 19 11ZM17 15C17 14.4 16.6 14 16 14H12C11.4 14 11 14.4 11 15C11 15.6 11.4 16 12 16H16C16.6 16 17 15.6 17 15Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Message</a>
														<!--end::Chat-->
														<!--begin::Action menu-->
														<a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor" />
																	<rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor" />
																	<rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/contacts/edit-contact.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" id="kt_contact_delete" data-kt-redirect="../../demo1/dist/apps/contacts/getting-started.html">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
														<!--end::Action menu-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-5">
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Contacts-->
										</div>
										<!--end::Content-->
										<div class="col-lg-6 col-xl-3">
											<!--begin::Contact group wrapper-->
											<div class="card card-flush">
												<div class="card-header pt-7" id="kt_chat_contacts_header">
													<div class="card-title">
														<h2>Set up Lead Center</h2>
													</div>
												</div>
												<!--begin::Card body-->
												<div class="card-body pt-5">
													<!--begin::Contact groups-->
													<div class="d-flex flex-column gap-5">
														<!--begin::Contact group-->
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Lead Attribution</a>
															<div class="badge badge-light-primary">9</div>
														</div>
														<!--begin::Contact group-->
														<!--begin::Contact group-->
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Leads</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<!--begin::Contact group-->
														<!--begin::Contact group-->
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Multi-Touch CPL</a>
															<div class="badge badge-light-primary">1</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Call Attribution</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Text Attribution</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Form Attribution</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Calls by Number</a>
															<div class="badge badge-light-primary">3</div>
														</div>
														<div class="d-flex flex-stack">
															<a href="../../demo1/dist/apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Calls by Company</a>
															<div class="badge badge-light-primary">3</div>
														</div>
													</div>
													<div class="separator my-7"></div>
													<!--end::Contact groups-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Contact group wrapper-->
										</div>
										<!--end::Contact groups-->
									</div>
									<!--end::Contacts App- View Contact-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--begin::Javascript-->
		@include('admin.partials.footer')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>