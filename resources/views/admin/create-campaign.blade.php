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
																<form  class="form mb-15" method="post" id="kt_careers_form" action={{ route('get-local-phones') }}>
																	@csrf
																	<!--begin::Input group-->
																	<div class="row mb-5">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<!--begin::Label-->
																			<label class="required fs-5 fw-semibold mb-2">Area Code</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" class="form-control form-control-solid" placeholder="" name="area_code" />
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
																	<button id="areacodeSubmit" class="btn btn-primary" id="kt_careers_submit_button">
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
																<tbody id="localPhonesTable">
																	@if(  count($localPhones) > 0 )
																	@foreach($localPhones as $localPhone)
																		<tr>
																			<td>
																				<div class="form-check form-check-sm form-check-custom form-check-solid">
																					<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																				</div>
																			</td>

																			<td>
																				<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $localPhone->friendlyName }}</a>
																				<span class="text-muted fw-semibold text-muted d-block fs-7"></span>
																			</td>
																			<td>
																				${{ $us_local_pri }}/month
																			</td>
																			<td>
																				<span class="badge badge-light-success"></span>
																			</td>
																			<td class="text-dark fw-bold text-hover-primary fs-6">0 minutes/month</td>
																			<td class="text-dark fw-bold text-hover-primary fs-6"></td>
																			<td class="text-end">
																				
																				<a href="/api/campaign_detail/{{ $localPhone->phoneNumber }}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Register</a>
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
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_list_widget_10_tab_2">
													<!--begin::Item-->
													<div class="m-0">
														<!--begin::Wrapper-->
														<div class="d-flex align-items-sm-center mb-5">
															<h3>Toll Free Phone Numbers in USA</h3>
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
																	@foreach($tollFrees as $tollFree)
																	<tr>
																		<td>
																			<div class="form-check form-check-sm form-check-custom form-check-solid">
																				<input class="form-check-input widget-13-check" type="checkbox" value="1" />
																			</div>
																		</td>

																		<td>
																			<a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">{{ $tollFree->friendlyName }}</a>
																			<span class="text-muted fw-semibold text-muted d-block fs-7"></span>
																		</td>
																		<td>
																			${{ $us_tollfree_pri }}/month
																		</td>
																		<td>
																			<span class="badge badge-light-success"></span>
																		</td>
																		<td class="text-dark fw-bold text-hover-primary fs-6">0 minutes/month</td>
																		<td class="text-dark fw-bold text-hover-primary fs-6"></td>
																		<td class="text-end">
																			<a href="/api/campaign_detail/{{ $tollFree->phoneNumber }}" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4">Register</a>
																		</td>
																	</tr>
																	@endforeach

																	<!-- <tr>
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
																	</tr> -->
																</tbody>
																<!--end::Table body-->
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table container-->
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
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>		
		@include('admin.partials.footer')
	<!-- 	<script type="text/javascript">
			$(document).ready(function(){
				$("#areacodeSubmit").click(function(e){
					e.preventDefault();					
					let area_code = $('#area-code').val();
			        $.ajaxSetup({
			            headers: {
			                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			            }
			        });

			        let row = "";
			        let i = 0;
			        let localPhones;
					$.post({ 
		                url:'/api/getLocalPhones',
		                data:{ area_code: area_code },
		                success: function(result){
		                    if(result.status === true){
		                          	console.log(result.localPhones);
		                          	localPhones = result.localPhones;
			                       	for( i = 0  ; i < localPhones.length; i++){
				      					row += "<tr>"
										row += "<td>"
											row += "<div class='form-check form-check-sm form-check-custom form-check-solid'>"
												row += "<input class='form-check-input widget-13-check' type='checkbox' value='1' />"
											row += "</div>"
										row += "</td>"
										row += "<td>"
											row += "<a href='#' class='text-dark fw-bold text-hover-primary d-block mb-1 fs-6'>"
											row += localPhones[i]->friendlyName + "</a>"
											row += "<span class='text-muted fw-semibold text-muted d-block fs-7'>GA</span>"
										row += "</td>"
										row += "<td>"
											row += "<a href='#' class='text-dark fw-bold text-hover-primary fs-6'>$1.50/month</a>"
										row += "</td>"
										row += "<td>"
											row += "<span class='badge badge-light-success'>$0.50</span>"
										row += "</td>"
										row += "<td class='text-dark fw-bold text-hover-primary fs-6'>0 minutes/month</td>"
										row += "<td class='text-dark fw-bold text-hover-primary fs-6'>$0.03/month</td>"
										row += "<td class='text-end'>"
											row += "<a href='#' class='btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4'>Register</a>"
										row += "</td>"
										row += "</tr>"
									    
									    $("#localPhonesTable").append(row);
									    row = "";
			                       	}    
									console.log(row);

		                    } else {
		                        
		                    }
		                }                 
		            });
				});
			});

		</script> -->
	</body>
	<!--end::Body-->
</html>