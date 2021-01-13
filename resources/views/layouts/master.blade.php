<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SEMAR | {{ $subtitle }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- third party css -->
    @yield('required_css')

    <!-- App css -->
    {!! config('constant.resources.css.app') !!}
</head>

<body>

    <!-- Navigation Bar-->
    <header id="topnav">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small
                                            class="text-muted">1 min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours
                                            ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small
                                            class="text-muted">3 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small
                                            class="text-muted">4 days ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-purple"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">7 days
                                            ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small
                                            class="text-muted">13 days ago</small></p>
                                </a>

                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ profile_picture(Auth::user()->photo) }}" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                                {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i> <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i> <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-help-circle"></i> <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i> <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="{{ route('auth.logout') }}" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="/" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{ asset('images/semar-logo-dark.png') }}" alt="" height="40">
                            <!-- <span class="logo-lg-text-light">UBold</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">U</span> -->
                            <img src="{{ asset('images/logo-sm.png') }}" alt="" height="26">
                        </span>
                    </a>
                </div>

            </div> <!-- end container-fluid-->
        </div>
        <!-- end Topbar -->

        <div class="topbar-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                        <li class="has-submenu">
                            <a href="/"><i class="icon-speedometer"></i>Dashboard</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('polyclinic.index') }}"><i class="icon-home"></i> Poliklinik<div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li><a href="{{ route('visits.index') }}">Kunjungan</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('queues.index') }}"><i class="icon-hourglass"></i>Antrean</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('patients.index') }}"><i class="icon-shield"></i>Pasien</a>
                        </li>

                        <li class="has-submenu">
                            <a href="{{ route('medical-records.index') }}"><i class="icon-layers"></i>Rekam Medis</a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="icon-people"></i> SDM <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li><a href="{{ route('hr.index', 'doctor') }}">Dokter</a></li>
                                <li><a href="{{ route('hr.index', 'nurse') }}">Perawat</a></li>
                                <li><a href="{{ route('hr.index', 'staff') }}">Staf Administrasi</a></li>
                                <li><a href="{{ route('hr.index', 'admin') }}">Administrator</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="icon-chemistry"></i> Apotek <div class="arrow-down"></div></a>
                            <ul class="submenu">
                                <li><a href="{{ route('drugs.index') }}">Obat</a></li>
                                <li><a href="{{ route('prescriptions.index') }}">Resep</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="icon-credit-card"></i>Tagihan</a>
                        </li>

                        <li class="has-submenu">
                            <a href="#"><i class="icon-notebook"></i>Laporan</a>
                        </li>

                    </ul>
                    <!-- End navigation menu -->

                    <div class="clearfix"></div>
                </div>
                <!-- end #navigation -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navbar-custom -->

    </header>
    <!-- End Navigation Bar-->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">SEMAR</a></li>
                                @foreach ($breadcrumbs as $breadcrumb)
                                <li class="breadcrumb-item @if ($breadcrumb === Arr::last($breadcrumbs)) active @endif">
                                    @if ($breadcrumb === Arr::last($breadcrumbs))
                                    {{ $breadcrumb }}
                                    @else
                                    <a href="javascript: void(0);">{{ $breadcrumb }}</a>
                                    @endif
                                </li>
                                @endforeach
                            </ol>
                        </div>
                        <h4 class="page-title">{{ $subtitle }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            @yield('content')

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    2018 - 2019 &copy; Highdmin theme by <a href="#">Coderthemes</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    {!! config('constant.resources.js.vendor') !!}

    @yield('required_js')

    <!-- App js -->
    {!! config('constant.resources.js.app') !!}

</body>

</html>
