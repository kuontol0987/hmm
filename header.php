<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>DSTAT.PRO</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="DSTAT.PRO | Your best choice for online network and hacking tools, we have best Layer 4 and Layer 7 dstat graphs to provide you best precision for testing your power!" name="description" />
        <meta content="DSTAT.PRO" name="author" />
        <meta name="keywords" content="hack tools, hack tool, hacking tools , dstat, dstat.pro, skypegrab, skype resolver, resolver skype, ip logger, iplogger, cloudflare resolver, ip to skype, hacking, hacker, hack, network tools, ip grabber, dstat, layer7 dstat, layer4, ddos graph, ddos dstat, discord resolver, free dstat, dstat layer4 free, dstat online,layer4,l4,layer4 dstat,dstat,graph,layer7,layer7 dstat,ddos,monitor">
        <meta name="robots" content="index, follow">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/fav.png">
        <!-- Bootstrap Css -->
        <link href="assets/css/jquery.toast.min.css" rel="stylesheet" type="text/css"></link>
        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/custom.css?<?php echo time(); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
        <script src="/assets/libs/jquery/jquery.min.js"></script>

    </head>

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="/home" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="/home" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-light.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo.png" alt="" height="24">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                  
                    </div>
                    

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search input">
                                
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>s
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img id="header-lang-img" src="assets/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                                    <img src="assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div> -->

                        <?php if ($User->IsLoged() != true) { ?>
                            <div class="d-inline-block">
                            <a href="/login">
                            <button type="button" class="btn header-item waves-effect">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Login</span>
                                <i class="mdi mdi-login d-none d-xl-inline-block"></i>
                            </button>
                            </a>
                        </div>
                        <?php } else { ?>
                            <!-- notifications -->
                            <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell bx-tada"></i>
                                <span class="badge bg-danger rounded-pill">1</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small" key="t-view-all"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="bx bx-smile"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1" key="t-your-order">Welcome!</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1" key="t-grammer">Welcome to dstat.pro, now you can discover all our functions!</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago"><?php echo $Secure->timeAgoSmall($User->UserData()['registerdate']); ?></span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View more..</span> 
                                    </a>
                                </div>
                            </div>
                        </div>

                            <!-- profile -->
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/user.png"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo $User->UserData()['username']; ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="/profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">Billing (soon)</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>
                        <?php } ?>

            
                    </div>
                </div>
            </header>
    
            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link arrow-none" href="/home" role="button">
                                        <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Home</span>
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                    >
                                        <i class="bx bx-bar-chart me-2"></i><span key="t-components">Live graphs</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-components">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                                role="button">
                                                <span key="t-forms">Layer 4</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                <a href="/layer4.php?server=1" class="dropdown-item" key="t-form-elements">Yudun China #1</a>
                                                <a href="/layer4.php?server=2" class="dropdown-item" key="t-form-elements">Yudun China #2</a>
                                                <a href="/layer4.php?server=3" class="dropdown-item" key="t-form-elements">Yudun China #3</a>
                                                <a href="/layer4.php?server=4" class="dropdown-item" key="t-form-elements">Yudun China #4</a>
                                                <a href="/layer4.php?server=5" class="dropdown-item" key="t-form-elements">Yudun China #5</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                role="button">
                                                <span key="t-tables">Layer 7</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                <a href="/layer7.php?server=1" class="dropdown-item" key="t-form-elements">Cogent</a>
                                                <a href="/layer7.php?server=2" class="dropdown-item" key="t-form-elements">Hetzner #1</a>
                                                <a href="/layer7.php?server=3" class="dropdown-item" key="t-form-elements">Hetzner #2</a>
                                                <a href="/layer7.php?server=4" class="dropdown-item" key="t-form-elements">FDCServers</a>
                                                <a href="/layer7.php?server=5" class="dropdown-item" key="t-form-elements">Scaleway #1</a>
                                                <a href="/layer7.php?server=6" class="dropdown-item" key="t-form-elements">Scaleway #2</a>
                                                <a href="/layer7.php?server=7" class="dropdown-item" key="t-form-elements">Selectel</a>
                                                <a href="/layer7.php?server=8" class="dropdown-item" key="t-form-elements">Tencent</a>
                                                <a href="/layer7.php?server=9" class="dropdown-item" key="t-form-elements">NForce</a>
                                                <a href="/layer7.php?server=10" class="dropdown-item" key="t-form-elements">Google Cloud</a>
                                                <a href="/layer7.php?server=11" class="dropdown-item" key="t-form-elements">Limestone</a>
                                                <a href="/layer7.php?server=12" class="dropdown-item" key="t-form-elements">Superonline</a>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                    >
                                        <i class="bx bx-rss me-2"></i>
                                        <span key="t-ui-elements"> Web tools</span> 
                                        <div class="arrow-down"></div>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <a href="ping.php" class="dropdown-item" key="t-calendar">Ping adress</a>
                                        <!-- <a href="dns_resolver.php" class="dropdown-item" key="t-calendar">DNS Resolver</a> -->
                                        <a href="whois.php" class="dropdown-item" key="t-calendar">Whois lookup</a>
                                        <a href="geoip.php" class="dropdown-item" key="t-calendar">GeoIP</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                    >
                                        <i class="bx bx-dots-horizontal-rounded me-2"></i>
                                        <span key="t-ui-elements"> Other tools</span> 
                                        <div class="arrow-down"></div>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <a href="passgen.php" class="dropdown-item" key="t-calendar">Password generator</a>
                                        <!-- <a href="dns_resolver.php" class="dropdown-item" key="t-calendar">Hash identifier</a> -->
                                        <a href="hashgen.php" class="dropdown-item" key="t-calendar">Hash generator</a>
                                        <a href="stringbefore.php" class="dropdown-item" key="t-calendar">Get string before</a>
                                        <a href="stringafter.php" class="dropdown-item" key="t-calendar">Get string after</a>
                                        <a href="delduplicates.php" class="dropdown-item" key="t-calendar">Delete duplicate lines</a>
                                    </div>
                                </li>
                                <?php if ($User->IsLoged() == true) { ?>
                                    <?php if ($User->UserData()['rank'] == 5) { ?>
                                        <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                    >
                                        <i class="bx bx-shield-quarter me-2"></i>
                                        <span key="t-ui-elements"> Admin</span> 
                                        <div class="arrow-down"></div>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <a href="admin_tlogs.php" class="dropdown-item" key="t-calendar">Tools logs</a>
                                        <a href="admin_ulogs.php" class="dropdown-item" key="t-calendar">User logs</a>
                                        <a href="admin_users.php" class="dropdown-item" key="t-calendar">Manage users</a>
                                        <a href="admin_banners.php" class="dropdown-item" key="t-calendar">Manage advertisments</a>
                                        <a href="admin_newslist.php" class="dropdown-item" key="t-calendar">Manage news</a>
                                        <a href="admin_notify.php" class="dropdown-item" key="t-calendar">Send notification to user/s</a>
                                    </div>
                                </li>
                            <?php } } ?>
                    
                              
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
