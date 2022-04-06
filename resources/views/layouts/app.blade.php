<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>iGreen</title>

    <meta name="description" content="iGreen">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="iGreen">
    <meta property="og:site_name" content="iGreen">
    <meta property="og:description" content="iGreen">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('/')}}assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/')}}assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{asset('/')}}assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <link rel="stylesheet" id="css-theme" href="{{asset('/')}}assets/css/themes/xeco.min.css">
    <!-- END Stylesheets -->
    @livewireStyles

</head>
<body>
<!-- Page Container -->
<!--
    Available classes for #page-container:

GENERIC

    'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

SIDEBAR & SIDE OVERLAY

    'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
    'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
    'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
    'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
    'sidebar-dark'                              Dark themed sidebar

    'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
    'side-overlay-o'                            Visible Side Overlay by default

    'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

    'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

HEADER

    ''                                          Static Header if no class is added
    'page-header-fixed'                         Fixed Header


Footer

    ''                                          Static Footer if no class is added
    'page-footer-fixed'                         Fixed Footer (please have in mind that the footer has a specific height when is fixed)

HEADER STYLE

    ''                                          Classic Header style if no class is added
    'page-header-dark'                          Dark themed Header
    'page-header-glass'                         Light themed Header with transparency by default
                                                (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
    'page-header-glass page-header-dark'         Dark themed Header with transparency by default
                                                (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

MAIN CONTENT LAYOUT

    ''                                          Full width Main Content if no class is added
    'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
    'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
-->
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
    <!-- Sidebar -->
    <!--
        Sidebar Mini Mode - Display Helper classes

        Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

        Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
        Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
        Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
    -->
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="bg-header-dark">
            <div class="content-header bg-white-10">
                <!-- Logo -->
                <a class="font-w600 text-w  hite tracking-wide" href="">
                            <span class="smini-visible">
                                i<span class="opacity-75">G</span>
                            </span>
                    <span class="smini-hidden">
                                i<span class="opacity-75">Green</span>
                            </span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div>
                    <!-- Toggle Sidebar Style -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                    <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');" href="javascript:void(0)">
                        <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                    </a>
                    <!-- END Toggle Sidebar Style -->

                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-times-circle"></i>
                    </a>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{url('/dashboard')}}">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Menu</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{url('/dashboard/frontmenu/add')}}">
                            <i class="nav-main-link-icon fa fa-plus"></i>
                            <span class="nav-main-link-name">Tambah Menu</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{url('/dashboard/frontmenu')}}">
                            <i class="nav-main-link-icon fa fa-book"></i>
                            <span class="nav-main-link-name">List Menu</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">File Peraturan</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{url('/dashboard/fileperaturan/add')}}">
                            <i class="nav-main-link-icon fa fa-plus"></i>
                            <span class="nav-main-link-name">Tambah File Peraturan</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{url('/dashboard/fileperaturan')}}">
                            <i class="nav-main-link-icon fa fa-book"></i>
                            <span class="nav-main-link-name">List File Peraturan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div>
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-dual mr-1" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <!-- END Toggle Sidebar -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">Admin</span>
                        <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary rounded-top font-w600 text-white text-center p-3">
                            User Options
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="far fa-fw fa-user mr-1"></i> Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span><i class="far fa-fw fa-envelope mr-1"></i> Inbox</span>
                                <span class="badge badge-primary badge-pill">3</span>
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="far fa-fw fa-file-alt mr-1"></i> Invoices
                            </a>
                            <div role="separator" class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="far fa-fw fa-building mr-1"></i> Settings
                            </a>
                            <!-- END Side Overlay -->

                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="badge badge-secondary badge-pill">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="bg-primary rounded-top font-w600 text-white text-center p-3">
                            Notifications
                        </div>
                        <ul class="nav-items my-2">
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">App was updated to v5.6!</div>
                                        <div class="text-muted font-italic">3 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-user-plus text-info"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">New Subscriber was added! You now have 2580!</div>
                                        <div class="text-muted font-italic">10 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">Server backup failed to complete!</div>
                                        <div class="text-muted font-italic">30 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-exclamation-circle text-warning"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">You are running out of space. Please consider upgrading your plan.</div>
                                        <div class="text-muted font-italic">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-dark media py-2" href="javascript:void(0)">
                                    <div class="mx-3">
                                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                    </div>
                                    <div class="media-body font-size-sm pr-2">
                                        <div class="font-w600">New Sale! + $30</div>
                                        <div class="text-muted font-italic">2 hours ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="p-2 border-top">
                            <a class="btn btn-light btn-block text-center" href="javascript:void(0)">
                                <i class="fa fa-fw fa-eye mr-1"></i> View All
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END Notifications Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-darker">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
@yield('content')
{{ $slot ?? '' }}

<!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-light">
        <div class="content py-0">
            <div class="row font-size-sm">
                <div class="col-sm-6 order-sm-1 text-center text-sm-left">
                    <a class="font-w600" href="{{asset('/')}}" target="_blank">iGreen</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Dashmix JS -->
@livewireScripts

<script src="{{asset('/')}}assets/js/dashmix.core.min.js"></script>
<script src="{{asset('/')}}assets/js/dashmix.app.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />
</body>
</html>
