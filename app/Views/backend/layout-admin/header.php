<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | Admin - Dikominfo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/seleksi/img/header-logo1.png') ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/bootstrap.min.css') ?>">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/font-awesome.min.css') ?>">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/owl.theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/owl.transitions.css') ?>">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/animate.css') ?>">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/normalize.css') ?>">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/meanmenu.min.css') ?>">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/main.css') ?>">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/morrisjs/morris.css') ?>">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="assets/backend/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/metisMenu/metisMenu.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/metisMenu/metisMenu-vertical.css') ?>">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/data-table/bootstrap-table.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/data-table/bootstrap-editable.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/calendar/fullcalendar.min.css') ?>">
    <link rel="stylesheet" href="assets/backend/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/style.css') ?>">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/responsive.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/buttons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/modals.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/notifications/Lobibox.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/notifications.css') ?>">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url('assets/backend/js/vendor/modernizr-2.8.3.min.js') ?>"></script>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="<?= base_url('admin-index') ?>"><img class="main-logo" src="<?= base_url('') ?>" alt="" /></a>
                <strong><img src="<?= base_url('assets/backend/img/logo/logosn.png') ?>" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="<?= base_url('backend/admin') ?>"><i class="fa big-icon fa-home icon-wrap"></i><span span class="mini-click-non">Home</span></a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard" href="<?= base_url('backend/admin') ?>"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dashboard</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?= base_url('backend/profil') ?>" aria-expanded="false"><i class="fa big-icon fa-desktop icon-wrap"></i> <span class="mini-click-non">Umum</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Notifications" href="<?= base_url('backend/profil') ?>"><i class="fa fa-external-link-square sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Profil</span></a></li>
                                <li><a title="Alerts" href="<?= base_url('backend/domain_bolmut') ?>"><i class="fa fa-crop sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Domain</span></a></li>
                                <li><a title="Modals" href="<?= base_url('backend/aplikasi') ?>"><i class="fa fa-building sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Aplikasi</span></a></li>
                                <li><a title="Tabs" href="<?= base_url('backend/Dpa_admin') ?>"><i class="fa fa-eye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">DPA & RKA</span></a></li>
                                <li><a title="Accordion" href="<?= base_url('backend/hukum') ?>"><i class="fa fa-life-ring sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Produk Hukum</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?= base_url('backend/pegawai') ?>" aria-expanded="false"><i class="fa big-icon fa-user-plus icon-wrap"></i> <span class="mini-click-non">Pegawai</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="<?= base_url('backend/pegawai') ?>"><i class="fa fa-pencil sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pegawai</span></a></li>
                                <li><a title="Password Meter" href="<?= base_url('backend/pegawai/duk') ?>"><i class="fa fa-hourglass sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">DUK</span></a></li>
                                <li><a title="Buttons" href="<?= base_url('backend/pegawai/struktur') ?>"><i class="fa fa-adjust sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Struktur</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?= base_url('backend/pendaftaran') ?>" aria-expanded="false"><i class="fa big-icon fa fa-television icon-wrap"></i> <span class="mini-click-non">Layanan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="<?= base_url('backend/seleksi_syarat') ?>"><i class="fa fa-inbox sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Persyaratan</span></a></li>
                                <li><a title="Inbox" href="<?= base_url('backend/pendaftaran') ?>"><i class="fa fa-inbox sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Pendaftar</span></a></li>
                                <li><a title="View Mail" href=""><i class="fa fa-television sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Berkas</span></a></li>
                                <li><a title="View Mail" href=""><i class="fa fa-television sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Seleksi</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?= base_url('mailbox') ?>" aria-expanded="false"><i class="fa big-icon fa-table icon-wrap"></i> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="<?= base_url('mailbox') ?>"><i class="fa fa-table sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Static Table</span></a></li>
                                <li><a title="Data Table" href="<?= base_url('mailbox2') ?>"><i class="fa fa-th sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Data Table</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?= base_url('filemanager') ?>" aria-expanded="false"><i class="fa big-icon fa-file icon-wrap"></i> <span class="mini-click-non">Berkas</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="<?= base_url('filemanager') ?>"><i class="fa fa-folder sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">File Manager</span></a></li>
                                <li><a title="Multi Upload" href="multi-upload.php"><i class="fa fa-hdd-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">File Upload</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="<?= base_url('auth') ?>" aria-expanded="false"><i class="fa big-icon fa-user icon-wrap"></i> <span class="mini-click-non"> User Management</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="<?= base_url('auth') ?>"><i class="fa fa-user-plus sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">User</span></a></li>
                                <li><a title="Multi Upload" href="<?= base_url('backend/register') ?>"><i class="fa fa-user-plus sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">User Group </span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="<?= base_url('assets/backend/img/logo/logo.png') ?>" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-envelope-o adminpro-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <!-- <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?= base_url('assets/backend/img/contact/1.jpg') ?>" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?= base_url('assets/backend/img/contact/4.jpg') ?>" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?= base_url('assets/backend/img/contact/3.jpg') ?>" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="<?= base_url('img/contact/2.jpg') ?>" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li> -->
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">View All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <!-- <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Advanda Cro</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-cloud adminpro-cloud-computing-down" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Sulaiman din</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-eraser adminpro-shield" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-line-chart adminpro-analytics-arrow" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <span class="notification-date">16 Sept</span>
                                                                        <h2>Victor Jara</h2>
                                                                        <p>Please done this project as soon possible.</p>
                                                                    </div>
                                                                </a>
                                                            </li> -->
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="#">View All Notification</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name">Admin Diskminfo</span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.php"><span class="fa fa-home author-log-ic"></span>Register</a></li>
                                                        <li><a href="#"><span class="fa fa-user author-log-ic"></span>My Profile</a></li>
                                                        <li><a href="lock.php"><span class="fa fa-diamond author-log-ic"></span> Lock</a></li>
                                                        <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Settings</a></li>
                                                        <li><a href="<?= base_url('auth/logout')?>"><span class="fa fa-lock author-log-ic"></span>Log Out</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>
                                                    <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                        <ul class="nav nav-tabs custon-set-tab">
                                                            <li class="active"><a data-toggle="tab" href="#Notes">News</a></li>
                                                            <li><a data-toggle="tab" href="#Projects">Activity</a></li>
                                                            <li><a data-toggle="tab" href="#Settings">Settings</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('backend/admin') ?>">Dashboard</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="">Umum<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('backend/profil') ?>">Profil</a></li>
                                                <li><a href="<?= base_url('backend/domain_bolmut') ?>">Domain</a></li>
                                                <li><a href="<?= base_url('backend/aplikasi') ?>">Aplikasi</a></li>
                                                <li><a href="<?= base_url('backend/Dpa_admin') ?>">DPA & RKA</a></li>
                                                <li><a href="<?= base_url('backend/hukum') ?>">Produk Hukum</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="">Pegawai <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="others" class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('backend/pegawai') ?>">Pegawai</a></li>
                                                <li><a href="<?= base_url('backend/pegawai/duk') ?>">DUK</a></li>
                                                <li><a href="<?= base_url('backend/pegawai/struktur') ?>">Struktur</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="">Layanan <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('backend/seleksi_syarat') ?>">Persyaratan</a></li>
                                                <li><a href="<?= base_url('backend/pendaftaran') ?>">Data Pendaftar</a></li>
                                                <li><a href="<?= base_url('') ?>">Data Berkas</a></li>
                                                <li><a href="<?= base_url('') ?>">Seleksi</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="">Tables <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('mailbox') ?>">Static Table</a>
                                                </li>
                                                <li><a href="<?= base_url('mailbox2') ?>">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="">Berkas<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('filemanager') ?>">File Manager</a></li>
                                                <li><a href="<?= base_url('') ?>">File Upload</a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="">User Management<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="<?= base_url('auth') ?>">User</a></li>
                                                <li><a href="<?= base_url('backend/register') ?>">User Group</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                                <input type="hidden" class="url-ajax" value="<?= isset($url) ? site_url("$url") : ''; ?>" />
                                                <input type="hidden" id="token" value="<?= csrf_token(); ?>" />
                                                <input type="hidden" id="csrf_hash" value="<?= csrf_hash(); ?>" />
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Table</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>