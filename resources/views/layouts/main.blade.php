<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>RefilMe | {{ $title }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta content="bismillah4350@gmail.com" name="dicoding:email">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <img src="/assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">RefilMe</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                @auth
                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="/storage/{{ Auth::user()->image }}" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>{{ Auth::user()->name }}</h6>
                                <span>{{ Auth::user()->role }}</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/profile/{{ Auth::user()->id }}">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="/logout">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>
                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->
                @endauth

                @guest
                    <nav class="header-nav ms-auto">
                        <a href="/login"><button type="button" class="btn btn-primary">Login</button></a> |
                        <a href="/register"><button type="button" class="btn btn-secondary">Register</button></a>
                    </nav>
                @endguest


            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link @if ($section == 'dashboard') @else
                    collapsed @endif"
                    href="/">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            @if (Auth::user())
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link @if ($section == 'Admin') @else collapsed @endif"
                            data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                            <i class="bi bi-menu-button-wide"></i><span>Admin</span><i
                                class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="components-nav"
                            class="nav-content collapse @if ($section == 'Admin') show @endif"
                            data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="/barang">
                                    <i class="bi bi-circle"></i><span>Data Barang</span>
                                </a>
                            </li>
                            <li>
                                <a href="/user">
                                    <i class="bi bi-circle"></i><span>Data Penguna</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Components Nav -->
                @endif

                @if (Auth::user()->role == 'pembeli')
                    <li class="nav-item">
                        <a class="nav-link @if ($section == 'pembeli') @else collapsed @endif"
                            data-bs-target="#pembeli" data-bs-toggle="collapse" href="#">
                            <i class="bi bi-menu-button-wide"></i><span>Pembeli</span><i
                                class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="pembeli" class="nav-content collapse @if ($section == 'pembeli') show @endif"
                            data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="/pesan">
                                    <i class="bi bi-circle"></i><span>Pesan Produk</span>
                                </a>
                            </li>
                            <li>
                                <a href="/keranjang">
                                    <i class="bi bi-circle"></i><span>Keranjang</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Components Nav -->
                @endif
                @if (Auth::user()->role == 'kurir')
                    <li class="nav-item">
                        <a class="nav-link @if ($section == 'Kurir') @else collapsed @endif"
                            data-bs-target="#kurir" data-bs-toggle="collapse" href="#">
                            <i class="bi bi-menu-button-wide"></i><span>Kurir</span><i
                                class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <ul id="kurir" class="nav-content collapse @if ($section == 'kurir') show @endif"
                            data-bs-parent="#sidebar-nav">
                            <li>
                                <a href="/antar">
                                    <i class="bi bi-circle"></i><span>Antarkan Barang</span>
                                </a>
                            </li>
                            <li>
                                <a href="/mineantar">
                                    <i class="bi bi-circle"></i><span>Barangku</span>
                                </a>
                            </li>
                        </ul>
                    </li><!-- End Components Nav -->
                @endif
            @endif

        </ul>

    </aside><!-- End Sidebar-->


    @yield('content')


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Team Capstone C22-233</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Team Capstone C22-233</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/chart.js/chart.min.js"></script>
    <script src="/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/assets/vendor/quill/quill.min.js"></script>
    <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

</body>

</html>
