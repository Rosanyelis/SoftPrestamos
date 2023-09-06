<!doctype html>
<html lang="en">
	
	<head>
        <base href="../../">
        <meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="" />
		<link rel="canonical" href="" />
        <title>Felo Auto Import | @yield('titulo')</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />

        @yield('styles')
    </head>

    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
                <!--Aside-->
				@include('layouts.navigation')
				<!--Aside-->
                <!--Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--Header-->
                    @include('layouts.top-navigation')
                    <!--Header-->
                    <!--Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        @yield('contenido')
					</div>
					<!--end::Content-->
					<!--Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-bold me-1">2023 ©</span>
								<span class="text-gray-800 text-hover-primary">Felo Auto Import</span>
							</div>
							<!--end::Copyright-->
							<!--Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
								<li class="menu-item">
									<a href="javascript:void(0)" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="javascript:void(0)" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="javascript:void(0)" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
                </div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
    <!--Javascript-->
    <script>var hostUrl = "assets/";</script>
    <!--Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    @yield('scripts')
    </body>
	<!--end::Body-->
</html>