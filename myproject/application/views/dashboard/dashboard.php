<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Tanzania Posts Corporation | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700"]},
                active: function() {
	sessionStorage.fonts = true;
}
            });
        </script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="<?php echo base_url() ;?> /assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="<?php echo base_url() ;?> /assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?php echo base_url(); ?>/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="<?php echo base_url(); ?>/assets/demo/demo4/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/demo4/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->

		<!--end::Layout Skins -->
		<!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/media/logos/favicon.ico" /> -->

		<style>
			.kt-portlet--height-fluid-fifteenth {
    height: 30%;
}

.row-full-height {
    margin-bottom: -20px;
  }
  .row-full-height > div[class*="col-"] {
    padding-bottom: 10px;
  }
		</style>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body style="background-image: url(<?php echo base_url(); ?>/assets/demo/demo4/media/bg/header.jpg)" class="kt-page--loading-enabled kt-page--loading kt-page--fixed kt-header--fixed kt-header--minimize-menu kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		<!-- begin::Page loader -->

		<!-- end::Page Loader -->

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__logo">
				<a href="../index.html">
					<img alt="Logo" src="<?php echo base_url(); ?>/assets/media/logos/logo-4-sm.png" />
				</a>
			</div>
			<div class="kt-header-mobile__toolbar">
				<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more-1"></i></button>
			</div>
		</div>

		<!-- end:: Header Mobile -->
		
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">

					<!-- begin:: Header -->
					<div id="kt_header" class="kt-header  kt-header--fixed " data-ktheader-minimize="on">
						<div class="kt-container">

							<!-- begin:: Brand -->
							<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
								<a class="kt-header__brand-logo" href="../index.html">
									<img alt="Logo" src="<?php echo base_url() ;?> /assets/media/logos/logo-4.png" class="kt-header__brand-logo-default" />
									<img alt="Logo" src="<?php echo base_url() ;?> /assets/media/logos/logo-4-sm.png" class="kt-header__brand-logo-sticky" />
								</a>
							</div>

							<!-- end:: Brand -->

							<!-- begin: Header Menu -->
							<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
								<div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
									<ul class="kt-menu__nav ">
										<li class="kt-menu__item  kt-menu__item--open kt-menu__item--here kt-menu__item--submenu kt-menu__item--rel kt-menu__item--open kt-menu__item--here" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-text">Tanzania Posts Corporation Dashboard</span></a>
											<div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--left">
												<ul class="kt-menu__subnav">
													<li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a href="../index.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Default Dashboard</span></a></li>
													<li class="kt-menu__item " aria-haspopup="true"><a href="dashboards/fluid.html" class="kt-menu__link "><i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i><span class="kt-menu__link-text">Fluid Dashboard</span></a></li>
												</ul>
											</div>
										</li>
										
										
										
									</ul>
								</div>
							</div>

							<!-- end: Header Menu -->

						</div>
					</div>

					<!-- end:: Header -->
					<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch">
						<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
							<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

								<!-- begin:: Subheader -->
								<div class="kt-subheader   kt-grid__item" id="kt_subheader">
									<div class="kt-subheader__main">
										<h3 class="kt-subheader__title text-danger"> Posta Dashboard</h3>
										<h4 class="kt-subheader__desc">Latest updates and statistic charts</h4>
									</div>
								</div>

								<!-- end:: Subheader -->

								<!-- begin:: Content -->
								<div class="kt-content kt-grid__item kt-grid__item--fluid">

									<!--Begin::Dashboard 4-->

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-6">

											<!--begin:: Widgets/Quick Stats-->
											<div class="row row-full-height">
												<div class="col-sm-12 col-md-12 col-lg-6">
												<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-danger">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta HQ</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<!-- <span class="btn btn-success btn-sm btn-bold btn-font-md">23 new</span> -->
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-danger">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Arusha</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<!-- <span class="btn btn-success btn-sm btn-bold btn-font-md">23 new</span> -->
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-success">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Dar Es Salaam</span>
																	<span class="kt-widget26__desc">Total Branches: </span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_3"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-warning">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Dodoma</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_4"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Quick Stats-->
										</div>
										<div class="col-xl-6">

											<!--begin:: Widgets/Order Statistics-->
											<div class="row row-full-height">
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-brand">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Geita</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_1"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-danger">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Iringa</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-success">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Kagera</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_3"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-warning">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Katavi</span>
																	<span class="kt-widget26__desc">Total Branches: </span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Order Statistics-->
										</div>
									</div>

									<!--End::Section-->	
									
									

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-6">

											<!--begin:: Widgets/Quick Stats-->
											<div class="row row-full-height">
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-brand">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Kigoma</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_1"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-danger">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Kilimanjaro</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-success">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Lindi</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_3"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-warning">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Manyara</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_4"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Quick Stats-->
										</div>
										<div class="col-xl-6">

											<!--begin:: Widgets/Order Statistics-->
											<div class="row row-full-height">
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-brand">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Manyara</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_1"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-danger">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Mara</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-success">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Mbeya</span>
																	<span class="kt-widget26__desc">Tatal Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_3"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-warning">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Morogoro</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_4"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Order Statistics-->
										</div>
									</div>

									<!--End::Section-->	

									<!--Begin::Section-->
									<div class="row">
										<div class="col-xl-6">

											<!--begin:: Widgets/Quick Stats-->
											<div class="row row-full-height">
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-brand">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Mtwara</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_1"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-danger">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Mwanza</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-success">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Mzizima</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_3"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-warning">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Njombe Tz</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_4"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<!--end:: Widgets/Quick Stats-->
										</div>
										<div class="col-xl-6">

											<!--begin:: Widgets/Order Statistics-->
											<div class="row row-full-height">
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-brand">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Njombedff</span>
																	<span class="kt-widget26__desc">Total Branches</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_1"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-danger">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Pwani</span>
																	<span class="kt-widget26__desc">Total Branches:</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_2"></canvas>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-12 col-lg-6">
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-success">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Rukwa</span>
																	<span class="kt-widget26__desc">Total Branches</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_3"></canvas>
																</div>
															</div>
														</div>
													</div>
													<div class="kt-space-20"></div>
													<div class="kt-portlet kt-portlet--height-fluid-fifteenth kt-portlet--border-bottom-warning">
														<div class="kt-portlet__body kt-portlet__body--fluid">
															<div class="kt-widget26">
																<div class="kt-widget26__content">
																	<span class="kt-widget26__number">Posta Ruvuma</span>
																	<span class="kt-widget26__desc">Total Branches</span>
																</div>
																<div class="kt-widget26__chart" style="height:100px; width: 230px;">
																	<canvas id="kt_chart_quick_stats_4"></canvas>
																</div>
															</div>
														</div>
													</div>
													<a href="<?php echo base_url('index.php/Dashboard/users');?>">LINK</a>
												</div>
											</div>

											<!--end:: Widgets/Order Statistics-->
										</div>
									</div>
  									
									<!--End::Section-->	
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		<!-- <ul class="kt-sticky-toolbar" style="margin-top: 30px;">
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--success" id="kt_demo_panel_toggle" data-toggle="kt-tooltip" title="Check out more demos" data-placement="right">
				<a href="#" class=""><i class="flaticon2-drop"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--brand" data-toggle="kt-tooltip" title="Layout Builder" data-placement="left">
				<a href="https://keenthemes.com/metronic/preview/demo4/builder.html" target="_blank"><i class="flaticon2-gear"></i></a>
			</li>
			<li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--warning" data-toggle="kt-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/?page=docs" target="_blank"><i class="flaticon2-telegram-logo"></i></a>
			</li>
		</ul> -->

		<!-- end::Sticky Toolbar -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#366cf3",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?php echo base_url() ;?> /assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ;?> /assets/demo/demo4/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="<?php echo base_url() ;?> /assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="<?php echo base_url() ;?> /assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?php echo base_url() ;?> /assets/app/custom/general/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle(used by all pages) -->
		<script src="<?php echo base_url() ;?> /assets/app/bundle/app.bundle.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>
