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

					            <!--begin:Menu item-->
					            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
						              <span class="menu-link">
						                <span class="menu-title">You're currently in your trial period. Add your credit card to keep your lead tracking and settings. <br>You won't be billed until your trial ends on Mar 25.</span>
						              </span>
					            </div>					            
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
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('client.home') }}">Home</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{ route('client.activity') }}">Activity</a>
												</li>
												<!--end::Nav item-->
												<!--begin::Nav item-->
												<li class="nav-item mt-2">
													<a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{ route('client.reports')}}">Reports</a>
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
									<!--begin::Row-->
									<div class="row gy-5 g-xl-10">
										<!--begin::Col-->
										<div class="col-xxl-6">
											<!--begin::Row-->
											<div class="row gx-5 gx-xl-10">
												<!--begin::Col-->
												<div class="col-sm-6 mb-5 mb-xl-10">
													<!--begin::List widget 1-->
													<div class="card card-flush h-lg-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-dark">Total Calls</span>
																<span class="text-gray-400 mt-1 fw-semibold fs-6">Latest 7days</span>
															</h3>
															<!--end::Title-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body pt-5">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-success me-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
																			<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">7.8</span>
																	<!--end::Number-->
																	<span class="text-gray-400 fw-bold fs-6">/10</span>
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Instagram Followers</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr093.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-danger me-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="7.05026" y="15.5355" width="13" height="2" rx="1" transform="rotate(-45 7.05026 15.5355)" fill="currentColor" />
																			<path d="M9.17158 14.0284L9.17158 8.11091C9.17158 7.52513 8.6967 7.05025 8.11092 7.05025C7.52513 7.05025 7.05026 7.52512 7.05026 8.11091L7.05026 15.9497C7.05026 16.502 7.49797 16.9497 8.05026 16.9497L15.8891 16.9497C16.4749 16.9497 16.9498 16.4749 16.9498 15.8891C16.9498 15.3033 16.4749 14.8284 15.8891 14.8284L9.97158 14.8284C9.52975 14.8284 9.17158 14.4703 9.17158 14.0284Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">730k</span>
																	<!--end::Number-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Google Ads CPC</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-success me-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
																			<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">$2.09</span>
																	<!--end::Number-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::LIst widget 1-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-sm-6 mb-5 mb-xl-10">
													<!--begin::List widget 2-->
													<div class="card card-flush h-lg-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-dark">New Leads</span>
																<span class="text-gray-400 mt-1 fw-semibold fs-6">Last 7 days</span>
															</h3>
															<!--end::Title-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body pt-5">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Google Analytics</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																			<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																			<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Facebook Ads</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																			<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																			<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Seranking</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																			<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																			<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::List widget 2-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Table widget 1-->
											<div class="card card-flush mb-xxl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Converted Leds</span>
														<span class="text-gray-400 pt-2 fw-semibold fs-6">Last 7 days</span>
													</h3>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom mb-3">
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_1">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/beats-electronics.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Beats</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_2">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="Logo" src="assets/media/svg/brand-logos/amazon.svg" class="theme-light-show" />
																	<img alt="Logo" src="assets/media/svg/brand-logos/amazon-dark.svg" class="theme-dark-show" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Amazon</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_3">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/bp-2.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">BP</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_4">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/slack-icon.svg" class="nav-icon" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Slack</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3">
															<!--begin::Link-->
															<a class="nav-link d-flex flex-center overflow-hidden w-80px h-85px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign" href="#">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon svg-icon-2hx svg-icon-gray-400">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_2">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_3">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_4">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-6">
											<!--begin::Row-->
											<div class="row gx-5 gx-xl-10">
												<!--begin::Col-->
												<div class="col-sm-6 mb-5 mb-xl-10">
													<!--begin::List widget 1-->
													<div class="card card-flush h-lg-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-dark">Converted Leads</span>
																<span class="text-gray-400 mt-1 fw-semibold fs-6">Last 7 days</span>
															</h3>
															<!--end::Title-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body pt-5">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Avg. Client Rating</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-success me-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
																			<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">7.8</span>
																	<!--end::Number-->
																	<span class="text-gray-400 fw-bold fs-6">/10</span>
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Instagram Followers</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr093.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-danger me-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="7.05026" y="15.5355" width="13" height="2" rx="1" transform="rotate(-45 7.05026 15.5355)" fill="currentColor" />
																			<path d="M9.17158 14.0284L9.17158 8.11091C9.17158 7.52513 8.6967 7.05025 8.11092 7.05025C7.52513 7.05025 7.05026 7.52512 7.05026 8.11091L7.05026 15.9497C7.05026 16.502 7.49797 16.9497 8.05026 16.9497L15.8891 16.9497C16.4749 16.9497 16.9498 16.4749 16.9498 15.8891C16.9498 15.3033 16.4749 14.8284 15.8891 14.8284L9.97158 14.8284C9.52975 14.8284 9.17158 14.4703 9.17158 14.0284Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">730k</span>
																	<!--end::Number-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Section-->
																<div class="text-gray-700 fw-semibold fs-6 me-2">Google Ads CPC</div>
																<!--end::Section-->
																<!--begin::Statistics-->
																<div class="d-flex align-items-senter">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
																	<span class="svg-icon svg-icon-2 svg-icon-success me-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
																			<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Number-->
																	<span class="text-gray-900 fw-bolder fs-6">$2.09</span>
																	<!--end::Number-->
																</div>
																<!--end::Statistics-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::LIst widget 1-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-sm-6 mb-5 mb-xl-10">
													<!--begin::List widget 2-->
													<div class="card card-flush h-lg-100">
														<!--begin::Header-->
														<div class="card-header pt-5">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-dark">Users Didn't Login</span>
																<span class="text-gray-400 mt-1 fw-semibold fs-6">Last 7 days</span>
															</h3>
															<!--end::Title-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body pt-5">
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Google Analytics</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																			<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																			<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Facebook Ads</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																			<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																			<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
															<!--begin::Separator-->
															<div class="separator separator-dashed my-3"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="d-flex flex-stack">
																<!--begin::Title-->
																<a href="#" class="text-primary opacity-75-hover fs-6 fw-semibold">Seranking</a>
																<!--end::Title-->
																<!--begin::Action-->
																<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																			<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																			<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--end::Action-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::List widget 2-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Table widget 1-->
											<div class="card card-flush mb-xxl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">Featured Campaigns</span>
														<span class="text-gray-400 pt-2 fw-semibold fs-6">75% activity growth</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
																	<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
																	<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
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
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom mb-3">
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_1">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/beats-electronics.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Beats</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_2">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="Logo" src="assets/media/svg/brand-logos/amazon.svg" class="theme-light-show" />
																	<img alt="Logo" src="assets/media/svg/brand-logos/amazon-dark.svg" class="theme-dark-show" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Amazon</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_3">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/bp-2.svg" class="" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">BP</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3 me-3 me-lg-6">
															<!--begin::Link-->
															<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="#kt_stats_widget_1_tab_4">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<img alt="" src="assets/media/svg/brand-logos/slack-icon.svg" class="nav-icon" />
																</div>
																<!--end::Icon-->
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Slack</span>
																<!--end::Subtitle-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
														<!--begin::Item-->
														<li class="nav-item mb-3">
															<!--begin::Link-->
															<a class="nav-link d-flex flex-center overflow-hidden w-80px h-85px" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign" href="#">
																<!--begin::Icon-->
																<div class="nav-icon">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon svg-icon-2hx svg-icon-gray-400">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
																<!--end::Bullet-->
															</a>
															<!--end::Link-->
														</li>
														<!--end::Item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_stats_widget_1_tab_1">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_2">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_3">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">2022 Spring Conference by Beats</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_stats_widget_1_tab_4">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table class="table align-middle gs-0 gy-4 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="fs-7 fw-bold text-gray-500">
																			<th class="p-0 min-w-150px d-block pt-3">EMAIL TITLE</th>
																			<th class="text-end min-w-140px pt-3">STATUS</th>
																			<th class="pe-0 text-end min-w-120px pt-3">CONVERSION</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-warning fs-7 fw-bold">In Queue</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0%(0)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Headsets Giveaway</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">37%(247)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Best Rated Headsets of 2022</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-success fs-7 fw-bold">Sent</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">18%(6.4k)</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">New Model BS 2000 X</a>
																			</td>
																			<td class="text-end">
																				<span class="badge badge-light-primary fs-7 fw-bold">In Draft</span>
																			</td>
																			<td class="text-end">
																				<span class="text-gray-800 fw-bold d-block fs-6">0.01%(1)</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end::Table-->
															</div>
															<!--end::Table container-->
														</div>
														<!--end::Tap pane-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Table widget 1-->
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