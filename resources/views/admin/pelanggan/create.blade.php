<!--

=========================================================
* Volt Free - Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Primary Meta Tags -->
	<title>Volt - Free Bootstrap 5 Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
	<meta name="author" content="Themesberg">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

	<!-- Volt CSS -->
	<link type="text/css" href="{{ asset('assets-admin/css/volt.css')}}" rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
		<a class="navbar-brand me-lg-5" href="../../index.html">
			<img class="navbar-brand-dark" src="{{asset('/assets-admin/img/brand/light.svg')}}" alt="Volt logo" />
			<img class="navbar-brand-light" src="{{asset('assets-admin/img/brand/dark.svg')}}" alt="Volt logo" />
		</a>
		<div class="d-flex align-items-center">
			<button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse"
				data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="avatar-lg me-4">
                        <img src="{{ asset('assets-admin/img/team/profile-picture-3.jpg')}}" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
                    </div>
                    <div class="d-block">
                        <h2 class="h5 mb-3">Hi, Jane</h2>
                        <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
                            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                </path>
                            </svg>
                            Sign Out
                        </a>
                    </div>
                </div>
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="../../index.html" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="{{ asset('assets-admin/img/brand/light.svg')}}" height="20" width="20" alt="Volt Logo">
                        </span>
                        <span class="mt-1 ms-1 sidebar-text">Volt Overview</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item  active ">
                    <a href="{{ route('pelanggan.list') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Pelanggan</span>
                    </a>
                </li>



                <li class="nav-item">
                    <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#submenu-app">
                        <span>
                            <span class="sidebar-icon">
                                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path>
                                </svg>
                            </span>
                            <span class="sidebar-text">Tables</span>
                        </span>
                        <span class="link-arrow">
                            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                    </span>
                    <div class="multi-level collapse " role="list" id="submenu-app" aria-expanded="false">
                        <ul class="flex-column nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="../../pages/tables/bootstrap-tables.html">
                                    <span class="sidebar-text">Bootstrap Tables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
                <li class="nav-item">
                    <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span class="sidebar-text">Documentation <span class="badge badge-sm bg-secondary ms-1 text-gray-800">v1.4</span></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../pages/upgrade-to-pro.html" class="btn btn-secondary d-flex align-items-center justify-content-center btn-upgrade-pro">
                        <span class="sidebar-icon d-inline-flex align-items-center justify-content-center">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <span>Upgrade to Pro</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

	<main class="content">

		<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
			<div class="container-fluid px-0">
				<div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
					<div class="d-flex align-items-center">
						<!-- Search form -->
						<form class="navbar-search form-inline" id="navbar-search-main">
							<div class="input-group input-group-merge search-bar">
								<span class="input-group-text" id="topbar-addon">
									<svg class="icon icon-xs" x-description="Heroicon name: solid/search"
										xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
										aria-hidden="true">
										<path fill-rule="evenodd"
											d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
											clip-rule="evenodd"></path>
									</svg>
								</span>
								<input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
									aria-label="Search" aria-describedby="topbar-addon">
							</div>
						</form>
						<!-- / Search form -->
					</div>
					<!-- Navbar links -->
					<ul class="navbar-nav align-items-center">
						<li class="nav-item dropdown">
							<a class="nav-link text-dark notification-bell unread dropdown-toggle"
								data-unread-notifications="true" href="#" role="button" data-bs-toggle="dropdown"
								data-bs-display="static" aria-expanded="false">
								<svg class="icon icon-sm text-gray-900" fill="currentColor" viewBox="0 0 20 20"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
									</path>
								</svg>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-center mt-2 py-0">
								<div class="list-group list-group-flush">
									<a href="#"
										class="text-center text-primary fw-bold border-bottom border-light py-3">Notifications</a>
									<a href="#" class="list-group-item list-group-item-action border-bottom">
										<div class="row align-items-center">
											<div class="col-auto">
												<!-- Avatar -->
												<img alt="Image placeholder"
													src="../../assets/img/team/profile-picture-1.jpg"
													class="avatar-md rounded">
											</div>
											<div class="col ps-0 ms-2">
												<div class="d-flex justify-content-between align-items-center">
													<div>
														<h4 class="h6 mb-0 text-small">Jose Leos</h4>
													</div>
													<div class="text-end">
														<small class="text-danger">a few moments ago</small>
													</div>
												</div>
												<p class="font-small mt-1 mb-0">Added you to an event "Project stand-up"
													tomorrow at 12:30 AM.
												</p>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item list-group-item-action border-bottom">
										<div class="row align-items-center">
											<div class="col-auto">
												<!-- Avatar -->
												<img alt="Image placeholder"
													src="../../assets/img/team/profile-picture-2.jpg"
													class="avatar-md rounded">
											</div>
											<div class="col ps-0 ms-2">
												<div class="d-flex justify-content-between align-items-center">
													<div>
														<h4 class="h6 mb-0 text-small">Neil Sims</h4>
													</div>
													<div class="text-end">
														<small class="text-danger">2 hrs ago</small>
													</div>
												</div>
												<p class="font-small mt-1 mb-0">You've been assigned a task for "Awesome
													new project".</p>
											</div>
										</div>
									</a>
									<a href="#" class="dropdown-item text-center fw-bold rounded-bottom py-3">
										<svg class="icon icon-xxs text-gray-400 me-1" fill="currentColor"
											viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
											<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
											<path fill-rule="evenodd"
												d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
												clip-rule="evenodd"></path>
										</svg>
										View all
									</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown ms-lg-3">
							<a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								<div class="media d-flex align-items-center">
									<img class="avatar rounded-circle" alt="Image placeholder"
										src="../../assets/img/team/profile-picture-3.jpg">
									<div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
										<span class="mb-0 font-small fw-bold text-gray-900">Bonnie Green</span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
								<a class="dropdown-item d-flex align-items-center" href="#">
									<svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
										viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
											clip-rule="evenodd"></path>
									</svg>
									My Profile
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
										viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
											clip-rule="evenodd"></path>
									</svg>
									Settings
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
										viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z"
											clip-rule="evenodd"></path>
									</svg>
									Messages
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<svg class="dropdown-icon text-gray-400 me-2" fill="currentColor"
										viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd"
											d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
											clip-rule="evenodd"></path>
									</svg>
									Support
								</a>
								<div role="separator" class="dropdown-divider my-1"></div>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor"
										viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
											d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
										</path>
									</svg>
									Logout
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        {{--BREADCRUMB--}}
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                            </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item ">Pelanggan</li>
                          <li class="breadcrumb-item active" aria-current="page">Tambah Pelanggan</li>
                    </ol>
                </nav>
                <h2 class="h4">Tambah Pelanggan</h2>
                <p class="mb-0">Form Penambahan Pelanggan Baru</p>
            </div>
            <div class="btn-toolbar mb-2 mb-md-0">
                <a href="{{route('pelanggan.list')}}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                    Kembali
                </a>
                <div class="btn-group ms-2 ms-lg-3">
                    <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
                    <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
                </div>
            </div>
        </div>

        {{--Form section--}}
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">General information</h2>
            <form action="{{route('pelanggan.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="first_name">First Name</label>
                            <input class="form-control" id="first_name" type="text" placeholder="Enter your first name" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="last_name">Last Name</label>
                            <input class="form-control" id="last_name" type="text" placeholder="Also your last name" required="">
                        </div>
                    </div>
                </div>
            </form>
                <div class="row align-items-center">
                    <div class="col-md-6 mb-3">
                        <label for="birthday">Birthday</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                            </span>
                            <input data-datepicker="" class="form-control datepicker-input" id="birthday" type="text" placeholder="dd/mm/yyyy" required=""><div class="datepicker datepicker-dropdown datepicker-orient-left datepicker-orient-bottom" style="left: 341px; top: 375px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="btn prev-btn">«</button><button type="button" class="btn view-switch">October 2024</button><button type="button" class="btn next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1727542800000">29</span><span class="datepicker-cell day prev" data-date="1727629200000">30</span><span class="datepicker-cell day" data-date="1727715600000">1</span><span class="datepicker-cell day" data-date="1727802000000">2</span><span class="datepicker-cell day" data-date="1727888400000">3</span><span class="datepicker-cell day" data-date="1727974800000">4</span><span class="datepicker-cell day" data-date="1728061200000">5</span><span class="datepicker-cell day" data-date="1728147600000">6</span><span class="datepicker-cell day" data-date="1728234000000">7</span><span class="datepicker-cell day" data-date="1728320400000">8</span><span class="datepicker-cell day" data-date="1728406800000">9</span><span class="datepicker-cell day" data-date="1728493200000">10</span><span class="datepicker-cell day" data-date="1728579600000">11</span><span class="datepicker-cell day" data-date="1728666000000">12</span><span class="datepicker-cell day" data-date="1728752400000">13</span><span class="datepicker-cell day" data-date="1728838800000">14</span><span class="datepicker-cell day focused" data-date="1728925200000">15</span><span class="datepicker-cell day" data-date="1729011600000">16</span><span class="datepicker-cell day" data-date="1729098000000">17</span><span class="datepicker-cell day" data-date="1729184400000">18</span><span class="datepicker-cell day" data-date="1729270800000">19</span><span class="datepicker-cell day" data-date="1729357200000">20</span><span class="datepicker-cell day" data-date="1729443600000">21</span><span class="datepicker-cell day" data-date="1729530000000">22</span><span class="datepicker-cell day" data-date="1729616400000">23</span><span class="datepicker-cell day" data-date="1729702800000">24</span><span class="datepicker-cell day" data-date="1729789200000">25</span><span class="datepicker-cell day" data-date="1729875600000">26</span><span class="datepicker-cell day" data-date="1729962000000">27</span><span class="datepicker-cell day" data-date="1730048400000">28</span><span class="datepicker-cell day" data-date="1730134800000">29</span><span class="datepicker-cell day" data-date="1730221200000">30</span><span class="datepicker-cell day" data-date="1730307600000">31</span><span class="datepicker-cell day next" data-date="1730394000000">1</span><span class="datepicker-cell day next" data-date="1730480400000">2</span><span class="datepicker-cell day next" data-date="1730566800000">3</span><span class="datepicker-cell day next" data-date="1730653200000">4</span><span class="datepicker-cell day next" data-date="1730739600000">5</span><span class="datepicker-cell day next" data-date="1730826000000">6</span><span class="datepicker-cell day next" data-date="1730912400000">7</span><span class="datepicker-cell day next" data-date="1730998800000">8</span><span class="datepicker-cell day next" data-date="1731085200000">9</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="btn today-btn" style="display: none;">Today</button><button type="button" class="btn clear-btn" style="display: none;">Clear</button></div></div></div></div>
                         </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gender">Gender</label>
                        <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                            <option selected="">Gender</option>
                            <option value="1">Female</option>
                            <option value="2">Male</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" type="email" placeholder="name@company.com" required="">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required="">
                        </div>
                    </div>
                </div>


                </div>

                <div class="mt-3">
                    <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Save all</button>
                </div>
            </form>
        </div>

		<footer class="bg-white rounded shadow p-5 mb-4 mt-4">
			<div class="row">
				<div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
					<p class="mb-0 text-center text-lg-start">© 2019-<span class="current-year"></span> <a
							class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Themesberg</a>
					</p>
				</div>
				<div class="col-12 col-md-8 col-xl-6 text-center text-lg-start">
					<!-- List -->
					<ul class="list-inline list-group-flush list-group-borderless text-md-end mb-0">
						<li class="list-inline-item px-0 px-sm-2">
							<a href="https://themesberg.com/about">About</a>
						</li>
						<li class="list-inline-item px-0 px-sm-2">
							<a href="https://themesberg.com/themes">Themes</a>
						</li>
						<li class="list-inline-item px-0 px-sm-2">
							<a href="https://themesberg.com/blog">Blog</a>
						</li>
						<li class="list-inline-item px-0 px-sm-2">
							<a href="https://themesberg.com/contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</footer>
	</main>

	<!-- Core -->
	<script src="{{asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
	<script src="{{asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

	<!-- Vendor JS -->
	<script src="{{asset('assets-admin/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
</body>

</html>