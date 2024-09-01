{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html> --}}



<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" data-layout="fluid"
    data-sidebar-theme="dark" data-sidebar-position="left" data-sidebar-behavior="sticky">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>Point of Sale</title>

    {{-- <link rel="canonical" href="https://appstack.bootlab.io/ecommerce-products.html" /> --}}
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <link href="css/app.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script> --}}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Q3ZYEKLQ68');
    </script>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            <div class="sidebar-content js-simplebar">
                <a class='sidebar-brand' href='/'>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20"
                        enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
              C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z" />
                        <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z" />
                        <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
              c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z" />
                    </svg>

                    <span class="align-middle me-3">Point of Sale</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Navigation
                    </li>
                    <li class="sidebar-item">
                        <a href="{{ route('dashboard') }}" class="sidebar-link">
                            <i class="align-middle" data-lucide="sliders"></i> <span
                                class="align-middle">Dashboards</span>
                            <span class="badge badge-sidebar-primary">5</span>
                        </a>
                        {{-- <ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/dashboard-default'>Default</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/dashboard-analytics'>Analytics</a>
                            </li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/dashboard-saas'>SaaS</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/dashboard-social'>Social</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/dashboard-crypto'>Crypto</a></li>
                        </ul> --}}
                    </li>
                    <li class="sidebar-header">
                        Apps
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#ecommerce" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="shopping-bag"></i> <span class="align-middle">Manage Products</span>
                        </a>
                        <ul id="ecommerce" class="sidebar-dropdown list-unstyled collapse show"
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='{{ route('product.index') }}'>
                                    Products <span class="badge badge-sidebar-primary">New</span>
                                </a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-products-details'>
                                    Product Details <span class="badge badge-sidebar-primary">New</span>
                                </a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-orders'>
                                    Orders <span class="badge badge-sidebar-primary">New</span>
                                </a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-customers'>Customers</a>
                            </li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-invoice'>Invoice</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ecommerce-pricing'>Pricing</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#projects" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="layout"></i> <span class="align-middle">Projects</span>
                        </a>
                        <ul id="projects" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/projects-overview'>Overview</a>
                            </li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/projects-details'>Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class='sidebar-link' href='/chat'>
                            <i class="align-middle" data-lucide="list"></i> <span class="align-middle">Chat</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class='sidebar-link' href='/file-manager'>
                            <i class="align-middle" data-lucide="files"></i> <span class="align-middle">File
                                Manager</span>
                            <span class="badge badge-sidebar-primary">New</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class='sidebar-link' href='/calendar'>
                            <i class="align-middle" data-lucide="calendar"></i> <span
                                class="align-middle">Calendar</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#email" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="mail"></i> <span class="align-middle">Email</span>
                            <span class="badge badge-sidebar-primary">New</span>
                        </a>
                        <ul id="email" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/email-inbox'>Inbox</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/email-details'>Details</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#tasks" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="trello"></i> <span class="align-middle">Tasks</span>
                        </a>
                        <ul id="tasks" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/tasks-list'>
                                    List
                                    <span class="badge badge-sidebar-primary">New</span>
                                </a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/tasks-kanban'>Kanban</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                        Pages
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="layout"></i> <span class="align-middle">Pages</span>
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/pages-profile'>Profile</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/pages-settings'>Settings</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/pages-blank'>Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="users"></i> <span class="align-middle">Auth</span>
                            <span class="badge badge-sidebar-secondary">Special</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-sign-in'>Sign In</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-sign-in-cover'>Sign In
                                    Cover</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-sign-up'>Sign Up</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-sign-up-cover'>Sign Up
                                    Cover</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-reset-password'>Reset
                                    Password</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-reset-password-cover'>Reset
                                    Password Cover</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-lock-screen'>Lock Screen</a>
                            </li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-lock-screen-cover'>Lock
                                    Screen Cover</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-2fa'>2FA</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-2fa-cover'>2FA Cover</a>
                            </li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-404'>404 Page</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/auth-500'>500 Page</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class='sidebar-link' href='/landing' target='_blank'>
                            <i class="align-middle" data-lucide="layout-template"></i> <span
                                class="align-middle">Landing</span>
                            <span class="badge badge-sidebar-primary">New</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#docs" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="book-open"></i> <span
                                class="align-middle">Documentation</span>
                        </a>
                        <ul id="docs" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link'
                                    href='/docs-introduction'>Introduction</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/docs-installation'>Getting
                                    Started</a></li>
                            <li class="sidebar-item"><a class='sidebar-link'
                                    href='/docs-customization'>Customization</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/docs-plugins'>Plugins</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/docs-changelog'>Changelog</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-header">
                        Plugins & Addons
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#forms-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="check-square"></i> <span class="align-middle">Form
                                Plugins</span>
                        </a>
                        <ul id="forms-plugins" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/forms-advanced-inputs'>Advanced
                                    Inputs</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/forms-editors'>Editors</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/forms-validation'>Validation</a>
                            </li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/forms-wizard'>Wizard</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="list"></i> <span
                                class="align-middle">DataTables</span>
                        </a>
                        <ul id="datatables" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/datatables-responsive'>Responsive
                                    Table</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/datatables-buttons'>Table with
                                    Buttons</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/datatables-column-search'>Column
                                    Search</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/datatables-fixed-header'>Fixed
                                    Header</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/datatables-multi'>Multi
                                    Selection</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/datatables-ajax'>Ajax Sourced
                                    Data</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-item">
                        <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="pie-chart"></i> <span
                                class="align-middle">Charts</span>
                            <span class="badge badge-sidebar-primary">New</span>
                        </a>
                        <ul id="charts" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/charts-chartjs'>Chart.js</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/charts-apexcharts'>ApexCharts
                                    <span class="badge badge-sidebar-primary">New</span></a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class='sidebar-link' href='/notifications'>
                            <i class="align-middle" data-lucide="bell"></i> <span
                                class="align-middle">Notifications</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="map-pin"></i> <span class="align-middle">Maps</span>
                        </a>
                        <ul id="maps" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/maps-google'>Google Maps</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/maps-vector'>Vector Maps</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-header">
                        Tools & Components
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="grid"></i> <span class="align-middle">UI
                                Elements</span>
                        </a>
                        <ul id="ui" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-alerts'>Alerts</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-buttons'>Buttons</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-cards'>Cards</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-carousel'>Carousel</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-embed-video'>Embed Video</a>
                            </li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-general'>General <span
                                        class="badge badge-sidebar-primary">10+</span></a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-grid'>Grid</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-modals'>Modals</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-offcanvas'>Offcanvas</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-placeholders'>Placeholders</a>
                            </li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-tabs'>Tabs</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/ui-typography'>Typography</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="heart"></i> <span class="align-middle">Icons</span>
                            <span class="badge badge-sidebar-primary">1500+</span>
                        </a>
                        <ul id="icons" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/icons-lucide'>Lucide</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/icons-font-awesome'>Font
                                    Awesome</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="check-square"></i> <span
                                class="align-middle">Forms</span>
                        </a>
                        <ul id="forms" class="sidebar-dropdown list-unstyled collapse "
                            data-bs-parent="#sidebar">
                            <li class="sidebar-item"><a class='sidebar-link' href='/forms-layouts'>Layouts</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/forms-basic-inputs'>Basic
                                    Inputs</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/forms-input-groups'>Input
                                    Groups</a></li>
                            <li class="sidebar-item"><a class='sidebar-link' href='/forms-floating-labels'>Floating
                                    Labels</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a class='sidebar-link' href='/tables'>
                            <i class="align-middle" data-lucide="list"></i> <span class="align-middle">Tables</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a data-bs-target="#multi" data-bs-toggle="collapse" class="sidebar-link collapsed">
                            <i class="align-middle" data-lucide="share-2"></i> <span class="align-middle">Multi
                                Level</span>
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a data-bs-target="#multi-2" data-bs-toggle="collapse"
                                    class="sidebar-link collapsed">
                                    Two Levels
                                </a>
                                <ul id="multi-2" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" data-bs-target="#">Item 1</a>
                                        <a class="sidebar-link" data-bs-target="#">Item 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a data-bs-target="#multi-3" data-bs-toggle="collapse"
                                    class="sidebar-link collapsed">
                                    Three Levels
                                </a>
                                <ul id="multi-3" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a data-bs-target="#multi-3-1" data-bs-toggle="collapse"
                                            class="sidebar-link collapsed">
                                            Item 1
                                        </a>
                                        <ul id="multi-3-1" class="sidebar-dropdown list-unstyled collapse">
                                            <li class="sidebar-item">
                                                <a class="sidebar-link" data-bs-target="#">Item 1</a>
                                                <a class="sidebar-link" data-bs-target="#">Item 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-item">
                                        <a class="sidebar-link" data-bs-target="#">Item 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <strong class="d-inline-block mb-2">Monthly Sales Report</strong>
                        <div class="mb-3 text-sm">
                            Your monthly sales report is ready for download!
                        </div>

                        <div class="d-grid">
                            <a href="https://themes.getbootstrap.com/product/appstack-responsive-admin-template/"
                                class="btn btn-primary" target="_blank">Download</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-bg">
                <a class="sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                {{-- <form class="d-none d-sm-inline-block">
                    <div class="input-group input-group-navbar">
                        <input type="text" class="form-control" placeholder="Search projects…"
                            aria-label="Search">
                        <button class="btn" type="button">
                            <i class="align-middle" data-lucide="search"></i>
                        </button>
                    </div>
                </form> --}}

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle text-body" data-lucide="message-circle"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-5.jpg" class="img-fluid rounded-circle"
                                                    alt="Ashley Briggs" width="40" height="40">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div>Ashley Briggs</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis
                                                    arcu tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg" class="img-fluid rounded-circle"
                                                    alt="Carl Jenkins" width="40" height="40">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div>Carl Jenkins</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-4.jpg" class="img-fluid rounded-circle"
                                                    alt="Stacie Hall" width="40" height="40">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div>Stacie Hall</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-3.jpg" class="img-fluid rounded-circle"
                                                    alt="Bertha Martin" width="40" height="40">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div>Bertha Martin</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle text-body" data-lucide="bell-off"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-lucide="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div>Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-lucide="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div>Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">6h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-lucide="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div>Login from 192.186.1.1</div>
                                                <div class="text-muted small mt-1">8h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-lucide="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div>New connection</div>
                                                <div class="text-muted small mt-1">Anna accepted your request.</div>
                                                <div class="text-muted small mt-1">12h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item nav-theme-toggle dropdown">
                            <a class="nav-icon js-theme-toggle" href="#">
                                <div class="position-relative">
                                    <i class="align-middle text-body nav-theme-toggle-light" data-lucide="sun"></i>
                                    <i class="align-middle text-body nav-theme-toggle-dark" data-lucide="moon"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-lucide="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}"
                                    class="rounded-circle me-1 mt-n2 mb-n2" alt="{{ Auth::user()->firstname }}"
                                    width="40" height="40" />


                                <span>{{ Auth::user()->firstname }}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class='dropdown-item' href="{{ route('profile.edit') }}"><i
                                        class="align-middle me-1" data-lucide="user"></i> Profile</a>
                                <a class="dropdown-item" href="{{ route('dashboard') }}"><i class="align-middle me-1"
                                        data-lucide="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class='dropdown-item' href='/pages-settings'>Settings & Privacy</a>
                                <a class="dropdown-item" href="#">Help</a>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Sign out
                                    </a>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content">
                {{ $slot }}
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="#">Terms of Service</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 text-end">
                            <p class="mb-0">
                                &copy; 2024 - <a class='text-muted' href='/'>Hunter</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $("#datatables-products").DataTable({
                destroy: true,
                responsive: true,
                order: [
                    [1, "asc"]
                ],
                pageLength: 6,
                columnDefs: [{
                        targets: 0,
                        orderable: false,
                        width: "18px"
                    },
                    {
                        targets: 6,
                        orderable: false
                    }
                ],
                layout: {
                    topStart: null,
                    topEnd: null,
                    bottomStart: 'info',
                    bottomEnd: 'paging'
                }
            });
            $("#datatables-products-check-all").click(function() {
                if ($(this).prop("checked")) {
                    $("input[type='checkbox']").prop("checked", true);
                } else {
                    $("input[type='checkbox']").prop("checked", false);
                }
            });
            $("#datatables-products-search").keyup(function() {
                $("#datatables-products").DataTable().search($(this).val()).draw();
            });
        });
    </script>

</body>

</html>
