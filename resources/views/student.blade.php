<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji Kompetensi</title>
<!-- Preconnect untuk Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.min.css">

<!-- CSS Bootstrap -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

<!-- Iconly -->
<link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">

<!-- Perfect Scrollbar -->
<link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">

<!-- App CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">


</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="/img/logo smk ypc.png" alt="Logo" srcset="" style="width: 80px; height:80px; margin-left: 70px;">UjiKompetensi</a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item active ">
                            <a href="/admin" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/pdf" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Melihat Hasil Ujian</span>
                            </a>
                        </li>










                        <li class="sidebar-title">Pages</li>


                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/">Login</a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>



            <div class="d-flex justify-content-end p-4" style="margin-top: -50px;">
                <div class="dropdown">
                  <a href="#" class="d-flex align-items-center text-decoration-none" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/img/download.jpg" alt="Profile Picture" class="rounded-circle me-2" style="width: 50px; height:50px;">
                    <span class="me-1" style="color: black">Salma Nuraeni</span>
                    <i class="bi bi-chevron-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="dropdownMenuButton">
                    <li>
                      <div class="dropdown-header">
                        <strong>Salma</strong><br>
                        <small>salma@gmail.com</small>
                      </div>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> View Profile</a></li>
                    {{-- <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Account Settings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-bell me-2"></i> Notifications</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill me-2"></i> Switch Account</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-question-circle me-2"></i> Help Center</a></li> --}}
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="/logout"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
                  </ul>
                </div>
              </div>
        </div>


            <div class="">
                @yield('content')
            </div>




            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com"></a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>



    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
