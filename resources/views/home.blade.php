<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Ample admin Template - The Ultimate Multipurpose admin template</title>
    <!-- chartist CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--morris CSS -->
    <link href="assets/libs/morris.js/morris.css" rel="stylesheet">
    <!-- needed css -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header border-right">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../../assets/images/logos/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../../assets/images/logos/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="../../assets/images/logos/logo-text.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->    
                             <img src="../../assets/images/logos/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-18"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-18 mdi mdi-gmail"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title border-bottom">You have 4 new messanges</div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle"> <span class="profile-status online pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle"> <span class="profile-status busy pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle"> <span class="profile-status away pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="user-img"> <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle"> <span class="profile-status offline pull-right"></span> </span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link text-dark" href="javascript:void(0);"> <b>See all Notifications</b> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-check-circle font-18"></i>
                                <div class="notify">
                                    <span class="heartbit"></span>
                                    <span class="point"></span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left mailbox animated bounceInDown">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title border-bottom">You have 3 new Tasks</div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </span>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="message-item">
                                                <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                <span class="mail-contnet">
                                                    <h5 class="message-title">Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center mb-1 text-dark" href="javascript:void(0);"> <strong>See all Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-md-block">Mega <i class="icon-options-vertical"></i></span>
                             <span class="d-block d-md-none"><i class="mdi mdi-dialpad font-24"></i></span>
                            </a>
                            <div class="dropdown-menu animated bounceInDown">
                                <div class="mega-dropdown-menu row">
                                    <div class="col-lg-3 col-xlg-2 mb-4">
                                        <h5 class="mb-3">CAROUSEL</h5>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container p-0"> <img class="d-block img-fluid" src="../../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container p-0"><img class="d-block img-fluid" src="../../assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container p-0"><img class="d-block img-fluid" src="../../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </div>
                                    <div class="col-lg-3 mb-4">
                                        <h5 class="mb-3">ACCORDION</h5>
                                        <!-- Accordian -->
                                        <div id="accordion" class="accordion">
                                            <div class="card mb-1">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Collapsible Group Item #1
                                                </button>
                                              </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-1">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </button>
                                              </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-1">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </button>
                                              </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3  mb-4">
                                        <h5 class="mb-3">CONTACT US</h5>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </div>
                                    <div class="col-lg-3 col-xlg-4 mb-4">
                                        <h5 class="mb-3">LIST STYLE</h5>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> 
                            <form class="app-search d-none d-lg-block">
                                <input type="text" class="form-control" placeholder="Search...">
                                <a href="" class="active"><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="36">
                                <span class="ml-2 font-medium">Steve</span><span class="fas fa-angle-down ml-2"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                    <div class=""><img src="../../assets/images/users/1.jpg" alt="user" class="rounded" width="80"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0">Steave Jobs</h4>
                                        <p class=" mb-0 text-muted">varun@gmail.com</p>
                                        <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">View Profile</a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark profile-dd" href="javascript:void(0)" aria-expanded="false">
                                <img src="assets/images/users/1.jpg" class="rounded-circle ml-2" width="30">
                                <span class="hide-menu">Steve Jection </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti-user"></i>
                                        <span class="hide-menu"> My Profile </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti-wallet"></i>
                                        <span class="hide-menu"> My Balance </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti-email"></i>
                                        <span class="hide-menu"> Inbox </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="ti-settings"></i>
                                        <span class="hide-menu"> Account Setting </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <i class="fas fa-power-off"></i>
                                        <span class="hide-menu"> Logout </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item selected">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link active" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard</span> 
                                
                            </a>
                           
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-cart-outline"></i>
                                <span class="hide-menu">Sales</span>
                            </a>
                            
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-cart-outline"></i>
                                <span class="hide-menu">Program Segments</span>
                            </a>
                            
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-cart-outline"></i>
                                <span class="hide-menu">Inventory</span>
                            </a>
                            
                        </li>


                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-format-color-fill"></i>
                                <span class="hide-menu">Guest </span>
                                
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-buttons.html" class="sidebar-link">
                                        <i class="mdi mdi-toggle-switch"></i>
                                        <span class="hide-menu"> Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-modals.html" class="sidebar-link">
                                        <i class="mdi mdi-tablet"></i>
                                        <span class="hide-menu"> Modals</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tab.html" class="sidebar-link">
                                        <i class="mdi mdi-sort-variant"></i>
                                        <span class="hide-menu"> Tab</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tooltip-popover.html" class="sidebar-link">
                                        <i class="mdi mdi-image-filter-vintage"></i>
                                        <span class="hide-menu"> Tooltip &amp; Popover</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-notification.html" class="sidebar-link">
                                        <i class="mdi mdi-message-bulleted"></i>
                                        <span class="hide-menu"> Notification</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-progressbar.html" class="sidebar-link">
                                        <i class="mdi mdi-poll"></i>
                                        <span class="hide-menu"> Progressbar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-typography.html" class="sidebar-link">
                                        <i class="mdi mdi-format-line-spacing"></i>
                                        <span class="hide-menu"> Typography</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-bootstrap.html" class="sidebar-link">
                                        <i class="mdi mdi-bootstrap"></i>
                                        <span class="hide-menu"> Bootstrap Ui</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-breadcrumb.html" class="sidebar-link">
                                        <i class="mdi mdi-equal"></i>
                                        <span class="hide-menu"> Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-list-media.html" class="sidebar-link">
                                        <i class="mdi mdi-file-video"></i>
                                        <span class="hide-menu"> List Media</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-grid.html" class="sidebar-link">
                                        <i class="mdi mdi-view-module"></i>
                                        <span class="hide-menu"> Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-carousel.html" class="sidebar-link">
                                        <i class="mdi mdi-view-carousel"></i>
                                        <span class="hide-menu"> Carousel</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-scrollspy.html" class="sidebar-link">
                                        <i class="mdi mdi-crop-free"></i>
                                        <span class="hide-menu"> Scrollspy</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-spinner.html" class="sidebar-link">
                                        <i class="mdi mdi-application"></i>
                                        <span class="hide-menu"> Spinner</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-toasts.html" class="sidebar-link">
                                        <i class="mdi mdi-apple-safari"></i>
                                        <span class="hide-menu"> Toasts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                       
                        
                       
                        
                        
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="app-calendar.html" aria-expanded="false">
                                <i class="mdi mdi-calendar-check"></i>
                                <span class="hide-menu">Calendar of Activities</span>
                            </a>
                        </li>
                        
                        <div class="devider"></div>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="authentication-login1.html" aria-expanded="false">
                                <i class="mdi mdi-adjust text-info"></i>
                                <span class="hide-menu">Log Out</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb border-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                        <h5 class="font-medium text-uppercase mb-0">Dashboard 5</h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                        
                        <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                            <ol class="breadcrumb mb-0 justify-content-end p-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Yearly Sales Charts Row  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="font-medium">$354.50</h2>
                                        <h5 class="text-muted mb-0">Total Income</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="" id="ravenue"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h2 class="font-medium">3456</h2>
                                        <h5 class="text-muted mb-0">Yearly Sales</h5>
                                    </div>
                                    <div class="col-6">
                                        <div id="ct-main-bal" style="height: 57px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <h2 class="font-medium">356</h2>
                                        <h5 class="text-muted mb-0">Monthly Sales</h5>
                                    </div>
                                    <div class="col-6">
                                        <div id="ct-extra" style="height: 57px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales, Expance & Finance Charts Row  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="p-3">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title text-uppercase mb-0">Expance</h5>
                                    <div class="ml-auto">
                                        <ul class="list-inline dl mb-0">
                                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Xtreme</li>
                                            <li class="list-inline-item text-danger"><i class="fa fa-circle"></i> Ample</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="ct-visits" style="height: 265px;"></div>
                            </div>
                            <div class="row no-gutters border-top">
                                <div class="col-md-6 border-right border-bottom">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <h2 class="mb-0 text-info display-7">
                                            <i class="ti-headphone-alt"></i>
                                        </h2>
                                        <div class="ml-4">
                                            <h2 class="font-normal">$250</h2>
                                            <h4>Entertainment</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 border-bottom">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <h2 class="mb-0 text-info display-7">
                                            <i class="ti-home"></i>
                                        </h2>
                                        <div class="ml-4">
                                            <h2 class="font-normal">$60.50</h2>
                                            <h4>House Rent</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 border-right">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <h2 class="mb-0 text-info display-7">
                                            <i class="far fa-paper-plane"></i>
                                        </h2>
                                        <div class="ml-4">
                                            <h2 class="font-normal">$28</h2>
                                            <h4>Travel</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 border-sm-top">
                                    <div class="d-flex align-items-center px-4 py-3">
                                        <h2 class="mb-0 text-info display-7">
                                            <i class="ti-shopping-cart"></i>
                                        </h2>
                                        <div class="ml-4">
                                            <h2 class="font-normal">$70</h2>
                                            <h4>Shopping</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Sales</h5>
                                <div class="mt-3">
                                    <div id="morris-donut-chart" style="height:350px; padding-top: 50px;"></div>
                                </div>
                                <div class="d-flex align-items-center mt-4">
                                    <div>
                                        <h3 class="font-medium text-uppercase">Total Sales</h3>
                                        <h5 class="text-muted">160 sales monthly</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="btn btn-info btn-circle btn-lg text-white">
                                            <i class="ti-shopping-cart"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Chart && Calendar App Row  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Yearly Sales Charts  Row  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Yearly Sales Charts  Row  -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body border-bottom">
                                
                                    <canvas id="foo" class="gaugejs">guage</canvas>
                                
                            </div>
                            <div class="d-flex align-items-center p-3">
                                <div>
                                    <span class="mb-0 display-7"><span class="font-medium">26.30</span></span>
                                    <h4 class="mb-0 font-light">AMps Used</h4>
                                </div>
                                <div class="ml-auto">
                                    <button class="btn btn-info btn-circle btn-lg text-white">
                                        <i class="icon-speedometer"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Recent Comment & Sales Chart Row  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Recent Comments</h5>
                            </div>
                            <div class="comment-widgets scrollable" style="height:531px;">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0 mb-0">
                                    <div class="p-2">
                                        <img src="assets/images/users/1.jpg" alt="user" width="40" class="rounded-circle">
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5 class="font-normal mb-1">Pavan kumar</h5>
                                        <span class="text-muted mr-2 font-12">10:20 AM 20 may 2016</span>
                                        <span class="badge badge-info badge-rounded text-uppercase font-medium">Pending</span>
                                        <span class="mb-2 d-block font-14 text-muted font-light mt-3">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo </span>
                                        <div class="mt-3">
                                            <a href="javacript:void(0)" class="btn btn btn-rounded btn-outline-success mr-2 btn-sm"><i class="ti-check mr-1"></i>Approve</a>
                                            <a href="javacript:void(0)" class="btn-rounded btn btn-outline-danger btn-sm"><i class="ti-close mr-1"></i> Reject</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0 mb-0">
                                    <div class="p-2">
                                        <img src="assets/images/users/2.jpg" alt="user" width="40" class="rounded-circle">
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5 class="font-normal mb-1">Sonu Nigam</h5>
                                        <span class="text-muted mr-2 font-12">10:20 AM 20 may 2016</span>
                                        <span class="badge badge-success badge-rounded text-uppercase font-medium text-white">Approved</span>
                                        <span class="mb-2 d-block font-14 text-muted font-light mt-3">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo </span>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0 mb-0">
                                    <div class="p-2">
                                        <img src="assets/images/users/3.jpg" alt="user" width="40" class="rounded-circle">
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5 class="font-normal mb-1">Sonu Nigam</h5>
                                        <span class="text-muted mr-2 font-12">10:20 AM 20 may 2016</span>
                                        <span class="badge badge-danger badge-rounded text-uppercase font-medium text-white">Rejected</span>
                                        <span class="mb-2 d-block font-14 text-muted font-light mt-3">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo </span>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0 mb-0">
                                    <div class="p-2">
                                        <img src="assets/images/users/1.jpg" alt="user" width="40" class="rounded-circle">
                                    </div>
                                    <div class="comment-text w-100">
                                        <h5 class="font-normal mb-1">Pavan kumar</h5>
                                        <span class="text-muted mr-2 font-12">10:20 AM 20 may 2016</span>
                                        <span class="badge badge-info badge-rounded text-uppercase font-medium">Pending</span>
                                        <span class="mb-2 d-block font-14 text-muted font-light mt-3">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo </span>
                                        <div class="mt-3">
                                            <a href="javacript:void(0)" class="btn btn btn-rounded btn-outline-success mr-2 btn-sm"><i class="ti-check mr-1"></i>Approve</a>
                                            <a href="javacript:void(0)" class="btn-rounded btn btn-outline-danger btn-sm"><i class="ti-close mr-1"></i> Reject</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment Row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="d-flex align-items-center p-3">
                                <h5 class="card-title mb-0 text-uppercase">Recent Sales</h5>
                                <div class="ml-auto">
                                    <select class="form-control">
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                    </select>
                                </div>
                            </div>
                            <div class="p-3 bg-light">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="font-normal">March 2017</h2>
                                        <p class="mb-2 text-uppercase font-14 font-light">Sales Report</p>
                                    </div>
                                    <div class="ml-auto">
                                        <h1 class="text-info mb-0 font-light">$3,690</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="table-responsive">
                                    <table class="table text-muted mb-0 no-wrap recent-table font-light">
                                        <thead>
                                            <tr class="text-uppercase">
                                                <th class="border-0">#</th>
                                                <th class="border-0">Name</th>
                                                <th class="border-0">Status</th>
                                                <th class="border-0">Date</th>
                                                <th class="border-0">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="txt-oflo">Elite admin</td>
                                                <td><span class="badge badge-pill text-uppercase text-white font-medium badge-success label-rouded">SALE</span> </td>
                                                <td class="txt-oflo">April 18, 2017</td>
                                                <td><span class="text-success">$24</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="txt-oflo">Real Homes WP Theme</td>
                                                <td><span class="badge badge-pill text-uppercase text-white font-medium badge-info label-rouded">EXTENDED</span></td>
                                                <td class="txt-oflo">April 19, 2017</td>
                                                <td><span class="text-info">$1250</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="txt-oflo">Ample Admin</td>
                                                <td><span class="badge badge-pill text-uppercase text-white font-medium badge-info label-rouded">EXTENDED</span></td>
                                                <td class="txt-oflo">April 19, 2017</td>
                                                <td><span class="text-info">$1250</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="txt-oflo">Medical Pro WP Theme</td>
                                                <td><span class="badge badge-pill text-uppercase text-white font-medium badge-danger label-rouded">TAX</span></td>
                                                <td class="txt-oflo">April 20, 2017</td>
                                                <td><span class="text-danger">-$24</span></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td class="txt-oflo">Hosting press html</td>
                                                <td><span class="badge badge-pill text-uppercase text-white font-medium badge-warning label-rouded">SALE</span></td>
                                                <td class="txt-oflo">April 21, 2017</td>
                                                <td><span class="text-success">$24</span></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td class="txt-oflo">Digital Agency PSD</td>
                                                <td><span class="badge badge-pill text-uppercase text-white font-medium badge-success label-rouded">SALE</span> </td>
                                                <td class="txt-oflo">April 23, 2017</td>
                                                <td><span class="text-danger">-$14</span></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td class="txt-oflo">Helping Hands WP Theme</td>
                                                <td><span class="badge badge-pill text-uppercase text-white font-medium badge-warning label-rouded">member</span></td>
                                                <td class="txt-oflo">April 22, 2017</td>
                                                <td><span class="text-success">$64</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Profile Card & Email App Row  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="card">
                            <div class="p-4">
                                <div class="d-flex flex-row">
                                    <div class=""><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="100" /></div>
                                    <div class="pl-4">
                                        <h3>Daniel Kristeen</h3>
                                        <h4>UIUX Designer</h4>
                                        <button class="btn btn-success btn-rounded text-white text-uppercase font-14"><i class="ti-plus mr-2"></i> Follow</button>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col border-right text-center">
                                        <h2 class="font-light">14</h2>
                                        <h4 class="text-uppercase">Photos</h4></div>
                                    <div class="col border-right text-center">
                                        <h2 class="font-light">54</h2>
                                        <h4 class="text-uppercase">Videos</h4></div>
                                    <div class="col text-center">
                                        <h2 class="font-light">145</h2>
                                        <h4 class="text-uppercase">Tasks</h4></div>
                                </div>
                            </div>
                            <div class="card-body border-top">
                                <p class="text-center aboutscroll">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                </p>
                                <hr>
                                <h4 class="font-medium text-center mt-4">Followers</h4>
                                <ul class="list-style-none list-icons d-flex flex-item text-center pt-2">
                                    <li class="col px-2">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Shaina Chhatraliya">
                                            <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="50" />
                                        </a>
                                    </li>
                                    <li class="col px-2">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Nirav Joshi">
                                            <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle" width="50" />
                                        </a>
                                    </li>
                                    <li class="col px-2">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Vishal Bhatt">
                                            <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle" width="50" />
                                        </a>
                                    </li>
                                    <li class="col px-2">
                                        <a href="javascript:void(0)" data-toggle="tooltip" title="More">
                                            <button class="btn btn-circle btn-info text-white btn-lg" href="javascript:void(0)">
                                                5 +
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body border-top">
                                <ul class="list-style-none list-icons d-flex flex-item text-center">
                                    <li class="col"><a href="javascript:void(0)" class="text-muted" data-toggle="tooltip" title="Website"><i class="fa fa-globe font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" class="text-muted" data-toggle="tooltip" title="twitter"><i class="fab fa-twitter font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" class="text-muted" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-square font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" class="text-muted" data-toggle="tooltip" title="Youtube"><i class="fab fa-youtube font-20"></i></a></li>
                                    <li class="col"><a href="javascript:void(0)" class="text-muted" data-toggle="tooltip" title="Linkdin"><i class="fab fa-linkedin font-20"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="card">
                            <div class="card-body bg-info text-white mailbox-widget pb-0">
                                <h2 class="text-white pb-3">Your Mailbox</h2>
                                <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox" href="#inbox" role="tab" aria-selected="true">
                                        <span class="d-block d-md-none"><i class="ti-email"></i></span>
                                        <span class="d-none d-md-block"> INBOX</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="sent-tab" data-toggle="tab" aria-controls="sent" href="#sent" role="tab" aria-selected="false">
                                        <span class="d-block d-md-none"><i class="ti-export"></i></span> 
                                        <span class="d-none d-md-block">SENT</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="spam-tab" data-toggle="tab" aria-controls="spam" href="#spam" role="tab" aria-selected="false">
                                        <span class="d-block d-md-none"><i class="ti-panel"></i></span> 
                                        <span class="d-none d-md-block">SPAM</span>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="delete-tab" data-toggle="tab" aria-controls="delete" href="#delete" role="tab" aria-selected="false">
                                        <span class="d-block d-md-none"><i class="ti-trash"></i></span> 
                                        <span class="d-none d-md-block">DELETED</span>
                                    </a>
                                  </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                                    <div>
                                        <div class="row p-4 no-gutters align-items-center">
                                            <div class="col-sm-12 col-md-6">
                                                <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>350 Unread emails</h3>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <ul class="list-inline dl mb-0 float-left float-md-right">
                                                    <li class="list-inline-item text-info mr-3">
                                                        <a href="#">
                                                            <button class="btn btn-circle btn-success text-white" href="javascript:void(0)">
                                                                <i class="ti-plus"></i>
                                                            </button>
                                                            <span class="ml-2 font-normal text-dark">Compose</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item text-danger">
                                                        <a href="#">
                                                            <button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
                                                                <i class="ti-trash"></i>
                                                            </button>
                                                            <span class="ml-2 font-normal text-dark">Delete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Mail list-->
                                        <div class="table-responsive">
                                            <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                                <tbody>
                                                    <!-- row -->
                                                    <tr>
                                                        <!-- label -->
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cst1">
                                                                <label class="custom-control-label" for="cst1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <!-- star -->
                                                        <td><i class="fas fa-star text-warning"></i></td>
                                                        <td>
                                                            <span class="mb-0 text-muted">Hritik Roshan</span>
                                                        </td>
                                                        <!-- Message -->
                                                        <td> 
                                                            <a class="link" href="javascript: void(0)">
                                                                <span class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span> 
                                                                <span class="text-dark">Lorem ipsum perspiciatis-</span>
                                                            </a>
                                                        </td>
                                                        <!-- Attachment -->
                                                        <td><i class="fa fa-paperclip text-muted"></i></td>
                                                        <!-- Time -->
                                                        <td class="text-muted">  May 13  </td>
                                                    </tr>
                                                    <!-- row -->
                                                    <tr>
                                                        <!-- label -->
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cst2">
                                                                <label class="custom-control-label" for="cst2">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <!-- star -->
                                                        <td><i class="far fa-star"></i></td>
                                                        <!-- User -->
                                                        <td>
                                                            <span class="mb-0 text-muted">Genelia Roshan</span>
                                                        </td>
                                                        <!-- Message -->
                                                        <td> 
                                                            <a class="link" href="javascript: void(0)">
                                                                <span class="badge badge-pill text-white font-medium badge-info mr-2">Business</span> 
                                                                <span class="text-dark">Inquiry about license for Admin </span> 
                                                            </a>
                                                        </td>
                                                        <!-- Attachment -->
                                                        <td><i class="fa fa-paperclip text-muted"></i></td>
                                                        <!-- Time -->
                                                        <td class="text-muted">  May 13  </td>
                                                    </tr>
                                                    <!-- row -->
                                                    <tr>
                                                        <!-- label -->
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cst3">
                                                                <label class="custom-control-label" for="cst3">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <!-- star -->
                                                        <td><i class="fas fa-star text-warning"></i></td>
                                                        <!-- User -->
                                                        <td class="user-name max-texts">
                                                            <span class="mb-0 text-muted font-light">Ritesh Deshmukh</span>
                                                        </td>
                                                        <!-- Message -->
                                                        <td> 
                                                            <a class="link" href="javascript: void(0)">
                                                                <span class="badge badge-pill text-white font-medium badge-warning  mr-2">Friend</span> 
                                                                <span class="font-light text-dark">Bitbucket (commit Pushed) by Ritesh</span>
                                                            </a>
                                                        </td>
                                                        <!-- Attachment -->
                                                        <td><i class="fa fa-paperclip text-muted"></i></td>
                                                        <!-- Time -->
                                                        <td class="text-muted font-light">  May 13  </td>
                                                    </tr>
                                                    <!-- row -->
                                                    <tr class="">
                                                        <!-- label -->
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cst4">
                                                                <label class="custom-control-label" for="cst4">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <!-- star -->
                                                        <td><i class="far fa-star"></i></td>
                                                        <!-- User -->
                                                        <td>
                                                            <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                                                        </td>
                                                        <!-- Message -->
                                                        <td> 
                                                            <a class="link" href="javascript: void(0)">
                                                                <span class="badge badge-pill text-white font-medium badge-info mr-2">Work</span><span class="font-light text-dark">Perspiciatis unde omnis- iste Lorem ipsum</span>
                                                            </a>
                                                        </td>
                                                        <!-- Attachment -->
                                                        <td><i class="fa fa-paperclip text-muted"></i></td>
                                                        <!-- Time -->
                                                        <td class="text-muted font-light">  May 9  </td>
                                                    </tr>
                                                    <!-- row -->
                                                    <tr class="">
                                                        <!-- label -->
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cst5">
                                                                <label class="custom-control-label" for="cst5">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <!-- star -->
                                                        <td><i class="far fa-star"></i></td>
                                                        <!-- User -->
                                                        <td>
                                                            <span class="mb-0 text-muted font-light">John Abraham</span>
                                                        </td>
                                                        <!-- Message -->
                                                        <td> 
                                                            <a class="link" href="javascript: void(0)">
                                                                <span class="badge badge-pill text-white font-medium badge-success mr-2">Work</span> <span class="font-light text-dark">Lorem ipsum perspiciatis- unde omnis</span>
                                                            </a>
                                                        </td>
                                                        <!-- Attachment -->
                                                        <td><i class="fa fa-paperclip text-muted"></i></td>
                                                        <!-- Time -->
                                                        <td class="text-muted font-light"> Mar 10 </td>
                                                    </tr>
                                                    <!-- row -->
                                                    <tr class="">
                                                        <!-- label -->
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cst6">
                                                                <label class="custom-control-label" for="cst6">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <!-- star -->
                                                        <td><i class="fas fa-star text-warning"></i></td>
                                                        <!-- User -->
                                                        <td>
                                                            <span class="mb-0 text-muted font-light">Akshay Kumar</span>
                                                        </td>
                                                        <!-- Message -->
                                                        <td> 
                                                            <a class="link" href="javascript: void(0)">
                                                                <span class="badge badge-pill text-white font-medium badge-success mr-2">Work</span> <span class="font-light text-dark">Lorem ipsum perspiciatis - unde</span>
                                                            </a>
                                                        </td>
                                                        <!-- Attachment -->
                                                        <td><i class="fa fa-paperclip text-muted"></i></td>
                                                        <!-- Time -->
                                                        <td class="text-muted font-light"> Mar 09 </td>
                                                    </tr>
                                                    <!-- row -->
                                                    <tr class="">
                                                        <!-- label -->
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="cst7">
                                                                <label class="custom-control-label" for="cst7">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        <!-- star -->
                                                        <td><i class="fas fa-star text-warning"></i></td>
                                                        <!-- User -->
                                                        <td>
                                                            <span class="mb-0 text-muted font-light">Hanna Gover</span>
                                                        </td>
                                                        <!-- Message -->
                                                        <td> 
                                                            <a class="link" href="javascript: void(0)">
                                                                <span class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span><span class="font-light text-dark"> Unde omnis Lorem ipsum perspiciatis</span>
                                                            </a>
                                                        </td>
                                                        <!-- Attachment -->
                                                        <td><i class="fa fa-paperclip text-muted"></i></td>
                                                        <!-- Time -->
                                                        <td class="text-muted font-light"> Mar 09 </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Lets check profile</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Come on you have a lot message</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Just do Settings</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Earnings & Feed Row  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="p-4 border-bottom">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h4 class="mb-0 font-light">Total Earnings</h4>
                                        <h2 class="mb-0 font-medium">$580.50</h2>
                                    </div>
                                    <div class="ml-auto">
                                        <select class="form-control">
                                            <option>January 2018</option>
                                            <option>February 2018</option>
                                            <option>March 2018</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                <div class="d-flex align-items-center py-3">
                                    <img src="assets/images/users/1.jpg" class="rounded-circle" width="60">
                                    <div class="ml-3">
                                        <h4 class="font-normal mb-0">Andrew Simon</h4>
                                        <span class="text-muted">10-11-2016</span>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="mb-0 text-info font-medium">$46</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center py-3">
                                    <img src="assets/images/users/2.jpg" class="rounded-circle" width="60">
                                    <div class="ml-3">
                                        <h4 class="font-normal mb-0">John Deo</h4>
                                        <span class="text-muted">01-11-2018</span>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="mb-0 text-info font-medium">$56</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center py-3">
                                    <img src="assets/images/users/3.jpg" class="rounded-circle" width="60">
                                    <div class="ml-3">
                                        <h4 class="font-normal mb-0">Shaina Nehwal</h4>
                                        <span class="text-muted">26-03-2018</span>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="mb-0 text-info font-medium">$78</h2>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center py-3">
                                    <img src="assets/images/users/1.jpg" class="rounded-circle" width="60">
                                    <div class="ml-3">
                                        <h4 class="font-normal mb-0">Emily Sion</h4>
                                        <span class="text-muted">14-04-2018</span>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="mb-0 text-info font-medium">$12</h2>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <button type="button" class="btn btn-danger text-white btn-rounded btn-block">Withdrow Money</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase mb-1">Feeds</h5>
                                <div class="feed-widget">
                                    <ul class="feed-body list-style-none">
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-info btn-circle">
                                                <i class="far fa-bell text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">You have 4 pending tasks.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">Just Now</span>
                                            </div>
                                        </li>
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-success btn-circle">
                                                <i class="ti-server text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">Server #1 overloaded.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">2 Hours ago</span>
                                            </div>
                                        </li>
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-warning btn-circle">
                                                <i class="ti-shopping-cart text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">New order received.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">31 May</span>
                                            </div>
                                        </li>
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-danger btn-circle">
                                                <i class="ti-user text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">New user registered.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">30 May</span>
                                            </div>
                                        </li>
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-inverse btn-circle">
                                                <i class="ti-user text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">New Version just arrived.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">27 May</span>
                                            </div>
                                        </li>
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-info btn-circle">
                                                <i class="far fa-bell text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">You have 4 pending tasks.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">Just Now</span>
                                            </div>
                                        </li>
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-danger btn-circle">
                                                <i class="ti-user text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">New user registered.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">30 May</span>
                                            </div>
                                        </li>
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-inverse btn-circle">
                                                <i class="far fa-bell text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">New Version just arrived.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">27 May</span>
                                            </div>
                                        </li>
                                        <li class="feed-item d-flex align-items-center py-2">
                                            <button class="btn btn-primary btn-circle">
                                                <i class="far fa-bell text-white"></i>
                                            </button>
                                            <span class="ml-3 font-light">You have 4 pending tasks.</span>
                                            <div class="ml-auto">
                                                <span class="text-muted font-light">27 May</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Ample admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle">
            <i class="fa fa-spin fa-cog"></i>
        </a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                        aria-selected="true">
                        <i class="mdi mdi-wrench font-20"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                        <i class="mdi mdi-message-reply font-20"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                        aria-selected="false">
                        <i class="mdi mdi-star-circle font-20"></i>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-medium mb-2 mt-2">Layout Settings</h5>
                        
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                            <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                            <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                            <label class="custom-control-label" for="header-position">Fixed Header</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                            <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium mb-2 mt-2">Logo Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-medium mb-2 mt-2">Navbar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                        <ul class="theme-color">
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item">
                                <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll">
                                <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                    <span class="user-img">
                                        <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status online pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:30 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                    <span class="user-img">
                                        <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status busy pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sonu Nigam</h5>
                                        <span class="mail-desc">I've sung a song! See you at</span>
                                        <span class="time">9:10 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                    <span class="user-img">
                                        <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status away pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Arijit Sinh</h5>
                                        <span class="mail-desc">I am a singer!</span>
                                        <span class="time">9:08 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                    <span class="user-img">
                                        <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Nirav Joshi</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                    <span class="user-img">
                                        <img src="assets/images/users/5.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Sunil Joshi</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                    <span class="user-img">
                                        <img src="assets/images/users/6.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Akshay Kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                    <span class="user-img">
                                        <img src="assets/images/users/7.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Pavan kumar</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                    <span class="user-img">
                                        <img src="assets/images/users/8.jpg" alt="user" class="rounded-circle">
                                        <span class="profile-status offline pull-right"></span>
                                    </span>
                                    <div class="mail-contnet">
                                        <h5 class="message-title">Varun Dhavan</h5>
                                        <span class="mail-desc">Just see the my admin!</span>
                                        <span class="time">9:02 AM</span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline</h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success">
                                <i class="ti-user"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today
                                    <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="assets/images/users/2.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="assets/images/users/1.jpg"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary">
                                <i class="ti-user"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today
                                    <span class="sl-date"> 5pm</span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info">
                                <i class="fas fa-image"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="assets/images/users/4.jpg"> </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="assets/images/users/6.jpg"> </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen</a>
                                    <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Approve meeting with tiger</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="dist/js/pages/chartist/chartist-plugin-tooltip.js"></script>
    <!-- Morris Js -->
    <script src="assets/libs/morris.js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>
    <!-- Animated skill bar -->
    <script src="assets/libs/gaugeJS/dist/gauge.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard5.js"></script>
</html>