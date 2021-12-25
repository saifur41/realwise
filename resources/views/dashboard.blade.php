@extends('layouts.app')

@section('content')

						
							<!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Row-->
								<div class="row g-5 g-lg-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::Mixed Widget 18-->
										<div class="card h-md-100">
											<!--begin::Beader-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Weekly Sales Stats</span>
													<span class="text-muted fw-bold fs-7">890,344 Sales</span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 1-->
													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61bc3a434f50c">
														<!--begin::Header-->
														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bolder">Filter Options</div>
														</div>
														<!--end::Header-->
														<!--begin::Menu separator-->
														<div class="separator border-gray-200"></div>
														<!--end::Menu separator-->
														<!--begin::Form-->
														<div class="px-7 py-5">
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-bold">Status:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<div>
																	<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61bc3a434f50c" data-allow-clear="true">
																		<option></option>
																		<option value="1">Approved</option>
																		<option value="2">Pending</option>
																		<option value="2">In Process</option>
																		<option value="2">Rejected</option>
																	</select>
																</div>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-bold">Member Type:</label>
																<!--end::Label-->
																<!--begin::Options-->
																<div class="d-flex">
																	<!--begin::Options-->
																	<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" value="1" />
																		<span class="form-check-label">Author</span>
																	</label>
																	<!--end::Options-->
																	<!--begin::Options-->
																	<label class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																		<span class="form-check-label">Customer</span>
																	</label>
																	<!--end::Options-->
																</div>
																<!--end::Options-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-bold">Notifications:</label>
																<!--end::Label-->
																<!--begin::Switch-->
																<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																	<label class="form-check-label">Enabled</label>
																</div>
																<!--end::Switch-->
															</div>
															<!--end::Input group-->
															<!--begin::Actions-->
															<div class="d-flex justify-content-end">
																<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
															</div>
															<!--end::Actions-->
														</div>
														<!--end::Form-->
													</div>
													<!--end::Menu 1-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 d-flex flex-column">
												<!--begin::Items-->
												<div class="card-px pt-5 pb-10 flex-grow-1">
													<!--begin::Item-->
													<div class="d-flex align-items-sm-center mb-7">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-5">
															<span class="symbol-label">
																<img src="{{asset('public/assets/media/svg/brand-logos/plurk.svg')}}" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
																<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
															</div>
															<span class="badge badge-light fw-bolder my-2">+82$</span>
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-sm-center mb-7">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-5">
															<span class="symbol-label">
																<img src="{{asset('public/assets/media/svg/brand-logos/telegram.svg')}}" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
																<span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
															</div>
															<span class="badge badge-light fw-bolder my-2">+280$</span>
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-sm-center mb-7">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-5">
															<span class="symbol-label">
																<img src="{{asset('public/assets/media/svg/brand-logos/vimeo.svg')}}" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
																<span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
															</div>
															<span class="badge badge-light fw-bolder my-2">+4500$</span>
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-sm-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-5">
															<span class="symbol-label">
																<img src="{{asset('public/assets/media/svg/brand-logos/bebo.svg')}}" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
																<span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
															</div>
															<span class="badge badge-light fw-bolder my-2">+686$</span>
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::Chart-->
												<div id="kt_charts_mixed_widget_18_chart" class="card-rounded-bottom" style="height: 150px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 18-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Row-->
										<div class="row g-5 g-lg-10">
											<!--begin::Col-->
											<div class="col-lg-6 mb-5 mb-lg-10">
												<!--begin::Tiles Widget 1-->
												<div class="card h-150px bgi-no-repeat bgi-size-cover h-150px mb-5 mb-lg-10" style="background-image:url('public/assets/media/stock/600x600/img-12.jpg')">
													<!--begin::Body-->
													<div class="card-body p-6">
														<!--begin::Title-->
														<a href="#" class="text-black text-hover-primary fw-bolder fs-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Roofing</a>
														<!--end::Title-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::Tiles Widget 1-->
												<!--begin::Tiles Widget 5-->
												<a href="#" class="card bg-body h-150px">
													<!--begin::Body-->
													<div class="card-body d-flex flex-column justify-content-between">
														<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
														<span class="svg-icon svg-icon-dark svg-icon-2hx ms-n1 flex-grow-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<div class="d-flex flex-column">
															<div class="text-dark fw-bolder fs-1 mb-0 mt-5">8,600</div>
															<div class="text-muted fw-bold fs-6">New Customers</div>
														</div>
													</div>
													<!--end::Body-->
												</a>
												<!--end::Tiles Widget 5-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-6 mb-5 mb-lg-10">
												<!--begin::Mixed Widget 3-->
												<div class="card h-100 bgi-no-repeat bgi-size-cover h-lg-100" style="background-image:url('public/assets/media/misc/bg-2.jpg')">
													<!--begin::Body-->
													<div class="card-body d-flex flex-column justify-content-between">
														<!--begin::Title-->
														<div class="text-white fw-bolder fs-2">
														<h2 class="fw-bolder text-white mb-2">Create Reports</h2>With App</div>
														<!--end::Title-->
														<!--begin::Link-->
														<a href='#' class="text-warning fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Create Report
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-warning">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon--></a>
														<!--end::Link-->
													</div>
													<!--end::Body-->
												</div>
												<!--end::Mixed Widget 3-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Tiles Widget 2-->
										<div class="card h-175px bgi-no-repeat bgi-size-contain h-200px mb-5 mb-lg-10" style="background-color: #1B283F; background-position: right; background-image:url('public/assets/media/svg/misc/taieri.svg')">
											<!--begin::Body-->
											<div class="card-body d-flex flex-column justify-content-between">
												<!--begin::Title-->
												<h2 class="text-white fw-bolder mb-5">
													<span class="lh-lg">Brilliant Ideas
													<br />for Your Web Application</span>
												</h2>
												<!--end::Title-->
												<!--begin::Action-->
												<div class="m-0">
													<a href='#' class="btn btn-danger fw-bold px-6 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Create Campaign</a>
												</div>
												<!--begin::Action-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tiles Widget 2-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-lg-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::List Widget 3-->
										<div class="card h-xl-100">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title fw-bolder text-dark">Todo</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Create Invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Generate Bill</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Plans</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																			<!--end::Input-->
																			<!--end::Label-->
																			<span class="form-check-label text-muted fs-6">Recuring</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2">
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-8">
													<!--begin::Bullet-->
													<span class="bullet bullet-vertical h-40px bg-success"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<div class="form-check form-check-custom form-check-solid mx-5">
														<input class="form-check-input" type="checkbox" value="" />
													</div>
													<!--end::Checkbox-->
													<!--begin::Description-->
													<div class="flex-grow-1">
														<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Create FireStone Logo</a>
														<span class="text-muted fw-bold d-block">Due in 2 Days</span>
													</div>
													<!--end::Description-->
													<span class="badge badge-light-success fs-8 fw-bolder">New</span>
												</div>
												<!--end:Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-8">
													<!--begin::Bullet-->
													<span class="bullet bullet-vertical h-40px bg-primary"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<div class="form-check form-check-custom form-check-solid mx-5">
														<input class="form-check-input" type="checkbox" value="" />
													</div>
													<!--end::Checkbox-->
													<!--begin::Description-->
													<div class="flex-grow-1">
														<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder Meeting</a>
														<span class="text-muted fw-bold d-block">Due in 3 Days</span>
													</div>
													<!--end::Description-->
													<span class="badge badge-light-primary fs-8 fw-bolder">New</span>
												</div>
												<!--end:Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-8">
													<!--begin::Bullet-->
													<span class="bullet bullet-vertical h-40px bg-warning"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<div class="form-check form-check-custom form-check-solid mx-5">
														<input class="form-check-input" type="checkbox" value="" />
													</div>
													<!--end::Checkbox-->
													<!--begin::Description-->
													<div class="flex-grow-1">
														<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping &amp; Estimations</a>
														<span class="text-muted fw-bold d-block">Due in 5 Days</span>
													</div>
													<!--end::Description-->
													<span class="badge badge-light-warning fs-8 fw-bolder">New</span>
												</div>
												<!--end:Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-8">
													<!--begin::Bullet-->
													<span class="bullet bullet-vertical h-40px bg-primary"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<div class="form-check form-check-custom form-check-solid mx-5">
														<input class="form-check-input" type="checkbox" value="" />
													</div>
													<!--end::Checkbox-->
													<!--begin::Description-->
													<div class="flex-grow-1">
														<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">KPI App Showcase</a>
														<span class="text-muted fw-bold d-block">Due in 2 Days</span>
													</div>
													<!--end::Description-->
													<span class="badge badge-light-primary fs-8 fw-bolder">New</span>
												</div>
												<!--end:Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center mb-8">
													<!--begin::Bullet-->
													<span class="bullet bullet-vertical h-40px bg-danger"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<div class="form-check form-check-custom form-check-solid mx-5">
														<input class="form-check-input" type="checkbox" value="" />
													</div>
													<!--end::Checkbox-->
													<!--begin::Description-->
													<div class="flex-grow-1">
														<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Project Meeting</a>
														<span class="text-muted fw-bold d-block">Due in 12 Days</span>
													</div>
													<!--end::Description-->
													<span class="badge badge-light-danger fs-8 fw-bolder">New</span>
												</div>
												<!--end:Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center">
													<!--begin::Bullet-->
													<span class="bullet bullet-vertical h-40px bg-success"></span>
													<!--end::Bullet-->
													<!--begin::Checkbox-->
													<div class="form-check form-check-custom form-check-solid mx-5">
														<input class="form-check-input" type="checkbox" value="" />
													</div>
													<!--end::Checkbox-->
													<!--begin::Description-->
													<div class="flex-grow-1">
														<a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Customers Update</a>
														<span class="text-muted fw-bold d-block">Due in 1 week</span>
													</div>
													<!--end::Description-->
													<span class="badge badge-light-success fs-8 fw-bolder">New</span>
												</div>
												<!--end:Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end:List Widget 3-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::List Widget 5-->
										<div class="card h-xl-100">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-4">
												<h3 class="card-title align-items-start flex-column">
													<span class="fw-bolder mb-2 text-dark">Activities</span>
													<span class="text-muted fw-bold fs-7">890,344 Sales</span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 1-->
													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61bc3a435131c">
														<!--begin::Header-->
														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bolder">Filter Options</div>
														</div>
														<!--end::Header-->
														<!--begin::Menu separator-->
														<div class="separator border-gray-200"></div>
														<!--end::Menu separator-->
														<!--begin::Form-->
														<div class="px-7 py-5">
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-bold">Status:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<div>
																	<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_61bc3a435131c" data-allow-clear="true">
																		<option></option>
																		<option value="1">Approved</option>
																		<option value="2">Pending</option>
																		<option value="2">In Process</option>
																		<option value="2">Rejected</option>
																	</select>
																</div>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-bold">Member Type:</label>
																<!--end::Label-->
																<!--begin::Options-->
																<div class="d-flex">
																	<!--begin::Options-->
																	<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="checkbox" value="1" />
																		<span class="form-check-label">Author</span>
																	</label>
																	<!--end::Options-->
																	<!--begin::Options-->
																	<label class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																		<span class="form-check-label">Customer</span>
																	</label>
																	<!--end::Options-->
																</div>
																<!--end::Options-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="mb-10">
																<!--begin::Label-->
																<label class="form-label fw-bold">Notifications:</label>
																<!--end::Label-->
																<!--begin::Switch-->
																<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																	<label class="form-check-label">Enabled</label>
																</div>
																<!--end::Switch-->
															</div>
															<!--end::Input group-->
															<!--begin::Actions-->
															<div class="d-flex justify-content-end">
																<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
															</div>
															<!--end::Actions-->
														</div>
														<!--end::Form-->
													</div>
													<!--end::Menu 1-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Timeline-->
												<div class="timeline-label">
													<!--begin::Item-->
													<div class="timeline-item">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="fw-mormal timeline-content text-muted ps-3">Outlines keep you honest. And keep structure</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="fw-bolder text-gray-800 ps-3">AEOL meeting</span>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit
														<a href="#" class="text-primary">USD 700</a>. to ESL</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-primary fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
														<a href="#" class="text-primary">#XF-2356</a>.</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-primary fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
														<a href="#" class="text-primary">#XF-2356</a>.</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Timeline-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end: List Widget 5-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
										<!--begin::List Widget 6-->
										<div class="card h-xl-100">
											<!--begin::Header-->
											<div class="card-header border-0">
												<h3 class="card-title fw-bolder text-dark">Notifications</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Create Invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Generate Bill</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Plans</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																			<!--end::Input-->
																			<!--end::Label-->
																			<span class="form-check-label text-muted fs-6">Recuring</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-warning me-5">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="flex-grow-1 me-2">
														<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
														<span class="text-muted fw-bold d-block">Due in 2 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="fw-bolder text-warning py-1">+28%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-success me-5">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="flex-grow-1 me-2">
														<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
														<span class="text-muted fw-bold d-block">Due in 2 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="fw-bolder text-success py-1">+50%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-danger me-5">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="flex-grow-1 me-2">
														<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Rebrand strategy planning</a>
														<span class="text-muted fw-bold d-block">Due in 5 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="fw-bolder text-danger py-1">-27%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center bg-light-info rounded p-5">
													<!--begin::Icon-->
													<span class="svg-icon svg-icon-info me-5">
														<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<!--end::Icon-->
													<!--begin::Title-->
													<div class="flex-grow-1 me-2">
														<a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Product goals strategy</a>
														<span class="text-muted fw-bold d-block">Due in 7 Days</span>
													</div>
													<!--end::Title-->
													<!--begin::Lable-->
													<span class="fw-bolder text-info py-1">+8%</span>
													<!--end::Lable-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List Widget 6-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-lg-10">
									<!--begin::Col-->
									<div class="col-xl-6 mb-5 mb-xl-10">
										<!--begin::Tables Widget 3-->
										<div class="card h-xl-100">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Files</span>
													<span class="text-muted mt-1 fw-bold fs-7">Over 100 pending files</span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 3-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
														<!--begin::Heading-->
														<div class="menu-item px-3">
															<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
														</div>
														<!--end::Heading-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Create Invoice</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link flex-stack px-3">Create Payment
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Generate Bill</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Subscription</span>
																<span class="menu-arrow"></span>
															</a>
															<!--begin::Menu sub-->
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Plans</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Billing</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Statements</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator my-2"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3">
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<!--begin::Input-->
																			<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																			<!--end::Input-->
																			<!--end::Label-->
																			<span class="form-check-label text-muted fs-6">Recuring</span>
																			<!--end::Label-->
																		</label>
																		<!--end::Switch-->
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu sub-->
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3 my-1">
															<a href="#" class="menu-link px-3">Settings</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 3-->
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-3">
												<!--begin::Table container-->
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table align-middle gs-0 gy-3">
														<!--begin::Table head-->
														<thead>
															<tr>
																<th class="p-0 w-50px"></th>
																<th class="p-0 min-w-150px"></th>
																<th class="p-0 min-w-140px"></th>
																<th class="p-0 min-w-120px"></th>
																<th class="p-0 min-w-40px"></th>
															</tr>
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody>
															<tr>
																<td>
																	<div class="symbol symbol-50px me-2">
																		<span class="symbol-label bg-light-success">
																			<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
																			<span class="svg-icon svg-icon-2x svg-icon-success">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
																					<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
																					<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top Authors</a>
																</td>
																<td class="text-end text-muted fw-bold">ReactJs, HTML</td>
																<td class="text-end text-muted fw-bold">4600 Users</td>
																<td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
															</tr>
															<tr>
																<td>
																	<div class="symbol symbol-50px me-2">
																		<span class="symbol-label bg-light-danger">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																			<span class="svg-icon svg-icon-2x svg-icon-danger">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																					<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																					<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																					<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
																</td>
																<td class="text-end text-muted fw-bold">Python, MySQL</td>
																<td class="text-end text-muted fw-bold">7200 Users</td>
																<td class="text-end text-dark fw-bolder fs-6 pe-0">2.8MB</td>
															</tr>
															<tr>
																<td>
																	<div class="symbol symbol-50px me-2">
																		<span class="symbol-label bg-light-info">
																			<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																			<span class="svg-icon svg-icon-2x svg-icon-info">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																					<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
																</td>
																<td class="text-end text-muted fw-bold">Laravel, Metronic</td>
																<td class="text-end text-muted fw-bold">890 Users</td>
																<td class="text-end text-dark fw-bolder fs-6 pe-0">1.5MB</td>
															</tr>
															<tr>
																<td>
																	<div class="symbol symbol-50px me-2">
																		<span class="symbol-label bg-light-warning">
																			<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																			<span class="svg-icon svg-icon-2x svg-icon-warning">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
																					<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																</td>
																<td class="text-end text-muted fw-bold">AngularJS, C#</td>
																<td class="text-end text-muted fw-bold">4600 Users</td>
																<td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
															</tr>
															<tr>
																<td>
																	<div class="symbol symbol-50px me-2">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																			<span class="svg-icon svg-icon-2x svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="black" />
																					<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																</td>
																<td>
																	<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
																</td>
																<td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
																<td class="text-end text-muted fw-bold">354 Users</td>
																<td class="text-end text-dark fw-bolder fs-6 pe-0">500KB</td>
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
										<!--end::Tables Widget 3-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-6 mb-5 mb-xl-10">
										<!--begin::Table Widget 6-->
										<div class="card h-xl-100">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Authors Earnings</span>
													<span class="text-muted mt-1 fw-bold fs-7">More than 400 new authors</span>
												</h3>
												<div class="card-toolbar">
													<ul class="nav">
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_6_tab_1">Month</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_6_tab_2">Week</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 active" data-bs-toggle="tab" href="#kt_table_widget_6_tab_3">Day</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body py-3">
												<div class="tab-content">
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_table_widget_6_tab_1">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle gs-0 gy-3">
																<!--begin::Table head-->
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-120px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																			<span class="text-muted fw-bold d-block">Successful Fellas</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$200,500</span>
																		</td>
																		<td class="text-end">
																			<span class="text-primary fs-7 fw-bolder">+28%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																			<span class="text-muted fw-bold d-block">HTML, CSS Coding</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$1,200,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-warning fs-7 fw-bolder">+52%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																			<span class="text-muted fw-bold d-block">PHP, Laravel, VueJS</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$1,200,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-danger fs-7 fw-bolder">+52%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
																			<span class="text-muted fw-bold d-block">UI/UX Designer</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$3,400,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-success fs-7 fw-bolder">-34%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin Leonard</a>
																			<span class="text-muted fw-bold d-block">Art Director</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$35,600,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-info fs-7 fw-bolder">+230%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_table_widget_6_tab_2">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle gs-0 gy-3">
																<!--begin::Table head-->
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-120px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																			<span class="text-muted fw-bold d-block">HTML, CSS Coding</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$1,200,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-warning fs-7 fw-bolder">+52%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
																			<span class="text-muted fw-bold d-block">UI/UX Designer</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$3,400,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-success fs-7 fw-bolder">-34%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																			<span class="text-muted fw-bold d-block">Successful Fellas</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$200,500</span>
																		</td>
																		<td class="text-end">
																			<span class="text-primary fs-7 fw-bolder">+28%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_table_widget_6_tab_3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle gs-0 gy-3">
																<!--begin::Table head-->
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-120px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
																			<span class="text-muted fw-bold d-block">HTML, CSS Coding</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$1,200,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-danger fs-7 fw-bolder">+52%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
																			<span class="text-muted fw-bold d-block">UI/UX Designer</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$3,400,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-success fs-7 fw-bolder">-34%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/043-boy-18.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin Leonard</a>
																			<span class="text-muted fw-bold d-block">Art Director</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$35,600,000</span>
																		</td>
																		<td class="text-end">
																			<span class="text-info fs-7 fw-bolder">+230%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-50px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
																			<span class="text-muted fw-bold d-block">Successful Fellas</span>
																		</td>
																		<td>
																			<span class="text-muted fw-bold d-block fs-7">Paid</span>
																			<span class="text-dark fw-bolder d-block fs-5">$200,500</span>
																		</td>
																		<td class="text-end">
																			<span class="text-primary fs-7 fw-bolder">+28%</span>
																		</td>
																		<td class="text-end">
																			<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																						<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::Tables Widget 6-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Post-->
							
						
					
@endsection