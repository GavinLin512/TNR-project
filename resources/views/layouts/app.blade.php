<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    {{-- font CDN --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- datatable CDN --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.min.css">

    <link rel="stylesheet" href="/css/ionicons.css">
    <link rel="stylesheet" href="/css/flag-icon.min.css">
    <link rel="stylesheet" href="/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/css/demo_1_style.css">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    @yield('css')
</head>

<body>
    <div id="app">
        <div class="container-scroller">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-start">
                    <a class="navbar-brand brand-logo p-0" href="{{ asset('/TNR-index') }}">
                        <img src="{{ asset('img/nav/white-logo.png') }}" alt="logo" class="w-100 px-2 mt-4"
                            style="" /> </a>
                    <a class="navbar-brand brand-logo-mini" href="{{ asset('/TNR-index') }}">
                        <img src="{{ asset('img/nav/logo-mini.svg') }}" alt="logo" class="w-100 px-2" /> </a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center">
                    {{-- <ul class="navbar-nav">
                <li class="nav-item font-weight-semibold d-none d-lg-block"></li>
                <li class="nav-item dropdown language-dropdown">

                </li> --}}
                    </ul>
                    {{-- <form class="ml-auto search-form d-none d-md-block" action="#">
                        <div class="form-group">
                            <input type="search" class="form-control" placeholder="??????...">
                        </div>
                    </form> --}}
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="count">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                                aria-labelledby="notificationDropdown">
                                <a class="dropdown-item py-3 border-bottom">
                                    <p class="mb-0 font-weight-medium float-left">?????? 3 ????????? </p>
                                    <span class="badge badge-pill badge-primary float-right">????????????</span>
                                </a>
                                <a class="dropdown-item preview-item py-3">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-alert m-auto text-primary"></i>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">??????????????????
                                        </h6>
                                        <p class="font-weight-light small-text mb-0"> ????????????????????? </p>
                                    </div>
                                </a>
                                {{-- <a class="dropdown-item preview-item py-3">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-settings m-auto text-primary"></i>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">??????</h6>
                                        <p class="font-weight-light small-text mb-0"> ???????????? </p>
                                    </div>
                                </a> --}}
                                <a class="dropdown-item preview-item py-3">
                                    <div class="preview-thumbnail">
                                        <i class="mdi mdi-airballoon m-auto text-primary"></i>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal text-dark mb-1">???????????????
                                        </h6>
                                        <p class="font-weight-light small-text mb-0"> 2 ?????? </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link count-indicator" id="notificationDropdown" href="#"
                                data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="count bg-success">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
                                aria-labelledby="messageDropdown">
                                <a class="dropdown-item py-3">
                                    <p class="mb-0 font-weight-medium float-left">?????? 3 ??????????????? </p>
                                    <span class="badge badge-pill badge-primary float-right">????????????</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('img/nav/face/face10.jpg') }}" alt="image"
                                            class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">?????????
                                        </p>
                                        <p class="font-weight-light small-text">2021-07-06 ???????????????</p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('img/nav/face/face12.jpg') }}" alt="image"
                                            class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">?????????</p>
                                        <p class="font-weight-light small-text">??????????????????...</p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('img/nav/face/face1.jpg') }}" alt="image"
                                            class="img-sm profile-pic">
                                    </div>
                                    <div class="preview-item-content flex-grow py-2">
                                        <p class="preview-subject ellipsis font-weight-medium text-dark">?????????
                                        </p>
                                        <p class="font-weight-light small-text">??????????????????...</p>
                                    </div>
                                </a>
                            </div>
                        </li> --}}
                        <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown"
                                aria-expanded="false">
                                <img class="img-xs rounded-circle" src="{{ asset('img/nav/face/face8.jpg') }}"
                                    alt="Profile image"> </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="UserDropdown">
                                <div class="dropdown-header text-center">
                                    <img class="img-md rounded-circle" src="{{ asset('img/nav/face/face8.jpg') }}"
                                        alt="Profile image">
                                    <p class="mb-1 mt-3 font-weight-semibold">?????????</p>
                                    <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                                </div>
                                <a class="dropdown-item">?????????????????? <span class="badge badge-pill badge-danger">1</span><i
                                        class="dropdown-item-icon ti-dashboard"></i></a>
                                <a class="dropdown-item">??????<i class="dropdown-item-icon ti-comment-alt"></i></a>
                                <a class="dropdown-item">??????<i class="dropdown-item-icon ti-location-arrow"></i></a>
                                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Sign out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_sidebar.html -->
                <nav class="sidebar sidebar-offcanvas" id="sidebar" style="position: fixed">
                    <ul class="nav">
                        <li class="nav-item nav-profile">
                            <a href="#" class="nav-link">
                                <div class="profile-image">
                                    <img class="img-xs rounded-circle" src="{{ asset('img/nav/face/face8.jpg') }}"
                                        alt="profile image">
                                    <div class="dot-indicator bg-success"></div>
                                </div>
                                <div class="text-wrapper">
                                    <p class="profile-name">?????????</p>
                                    <p class="designation">Admin user</p>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item nav-category mbz-2">Main Menu</li>
                        </li>
                        {{-- all --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('/TNR-admin/dashboard') }}" aria-controls="all">
                                <i class="menu-icon typcn typcn-document-text"></i>
                                <span class="menu-title">????????????</span>
                            </a>
                        </li>
                        {{-- user --}}

                        {{-- @if (Request::has('/user*')) true @else false @endif --}}
                        {{-- @if (Request::has('/user*')) show @endif --}}
                        {{-- @if (Request::has('/user*')) active @endif --}}
                        {{-- @if (Request::has('/user')) active @endif --}}
                        {{-- @if (Request::has('/user/create')) active @endif --}}
                        {{-- @if (Request::has('/user/edit*')) active @endif --}}
                        @php
                            //  $current = URL::current();
                            //  dd(Request::is('TNR-admin/user*'));
                            //  $current = Request::url();
                            // $uri = $request->path();
                            // dd(asset('/TNR-admin/user/create'));
                            // dd($current);

                        @endphp
                        {{-- @if ($current == (asset('/TNR-admin/user/'))) true @else false @endif --}}
                        {{-- @php echo $current == (asset('/TNR-admin/user/')) ? 'true' : 'false'; @endphp --}}
                        {{-- URL::current(); --}}
                        <li class="nav-item ">
                            <a class="nav-link" data-toggle="collapse" href="#user" @if (Request::is('TNR-admin/user*'))aria-expanded="true"@endif aria-controls="user">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">????????????</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse @if (Request::is('TNR-admin/user*'))show @endif" id="user">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        {{-- @php
                                            dd($request->path());
                                        @endphp --}}
                                        <a class="nav-link " href="{{ asset('/TNR-admin/user') }}">????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('/TNR-admin/user/create') }}">????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{ asset('/TNR-admin/user/edit') }}">????????????</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- news --}}
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#news" @if (Request::is('TNR-admin/news*'))aria-expanded="true"@endif
                                aria-controls="news">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">??????????????????</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse @if (Request::is('TNR-admin/news*'))show @endif" id="news">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/news') }}">??????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/news/create') }}">??????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/news/edit') }}">??????????????????</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- assistant
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#assistant" aria-expanded="false"
                                aria-controls="assistant">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">??????????????????</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="assistant">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/assistant/category') }}">??????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ asset('/assistant/category/create') }}">??????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/assistant/category/edit') }}">??????????????????</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        {{-- sponsored_cat --}}
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#sponsored_cat" @if (Request::is('TNR-admin/sponsored_cat*'))aria-expanded="true"@endif
                                aria-controls="sponsored_cat">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">?????????????????????</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse @if (Request::is('TNR-admin/sponsored_cat*'))show @endif" id="sponsored_cat">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/sponsored_cat') }}">?????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/sponsored_cat/create') }}">?????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/sponsored_cat/edit') }}">?????????????????????</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- adopted_cat --}}
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#adopted_cat" aria-expanded="false"
                                aria-controls="adopted_cat">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">?????????????????????</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="adopted_cat">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/adopted_cat') }}">?????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/adopted_cat/create') }}">?????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/adopted_cat/edit') }}">?????????????????????</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- donated_cat --}}
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#donated_cat" aria-expanded="false"
                                aria-controls="donated_cat">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">?????????????????????</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="donated_cat">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/donated_cat') }}">?????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/donated_cat/create') }}">?????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/donated_cat/edit') }}">?????????????????????</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- diary --}}
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#diary" @if (Request::is('TNR-admin/diary*'))aria-expanded="true"@endif
                                aria-controls="diary">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">??????????????????</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse @if (Request::is('TNR-admin/diary*'))show @endif" id="diary">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/diary') }}">??????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/diary/create') }}">??????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/TNR-admin/diary/edit') }}">??????????????????</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- product --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false"
                                aria-controls="product">
                                <i class="menu-icon typcn typcn-coffee"></i>
                                <span class="menu-title">??????????????????</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="product">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/product') }}">??????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/product/create') }}">??????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/product/edit') }}">????????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/product/category') }}">????????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ asset('/product/category/create') }}">????????????????????????</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ asset('/product/category/edit') }}">????????????????????????</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                    </ul>
                </nav>
                <!-- partial -->
                <main class="main-panel">
                    <!-- Page Title Header Starts-->
                    <div class="content-wrapper">
                        <div class="row page-title-header">
                            <div class="col-12">
                                {{-- breadcrumb --}}
                                <div class="page-header">
                                    @yield('page-header')
                                    {{-- <h4 class="page-title">????????????</h4>
                                    <div class="quick-link-wrapper w-100 d-md-flex flex-md-wrap">
                                        <ul class="quick-links">
                                            <li><a href="#">ICE Market data</a></li>
                                            <li><a href="#">Own analysis</a></li>
                                            <li><a href="#">Historic market data</a></li>
                                        </ul>
                                        <ul class="quick-links ml-auto">
                                            <li><a href="#">??????</a></li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-md-12">
                                {{-- <div class="page-header-toolbar">
                                    <div class="btn-group toolbar-item" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-secondary"><i
                                                class="mdi mdi-chevron-left"></i></button>
                                        <button type="button" class="btn btn-secondary">03/02/2019 - 20/08/2019</button>
                                        <button type="button" class="btn btn-secondary"><i
                                                class="mdi mdi-chevron-right"></i></button>
                                    </div>
                                    <div class="filter-wrapper">
                                        <div class="dropdown toolbar-item">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownsorting" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">All Day</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownsorting">
                                                <a class="dropdown-item" href="#">Last Day</a>
                                                <a class="dropdown-item" href="#">Last Month</a>
                                                <a class="dropdown-item" href="#">Last Year</a>
                                            </div>
                                        </div>
                                        <a href="#" class="advanced-link toolbar-item">Advanced Options</a>
                                    </div>
                                    <div class="sort-wrapper">
                                        <button type="button" class="btn btn-primary toolbar-item">New</button>
                                        <div class="dropdown ml-lg-auto ml-3 toolbar-item">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownexport" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Export</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownexport">
                                                <a class="dropdown-item" href="#">Export as PDF</a>
                                                <a class="dropdown-item" href="#">Export as DOCX</a>
                                                <a class="dropdown-item" href="#">Export as CDR</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- main area --}}
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        @yield('main')
                        @yield('content')
                    </div>
                    <!-- Page Title Header Ends-->
                </main>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}"></script>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/vendor.bundle.addons.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- End custom js for this page-->
    <script src="jquery.cookie.js" type="text/javascript"></script>

    {{-- Data Table --}}
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    @yield('js')
    </div>
</body>

</html>
