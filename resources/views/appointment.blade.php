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
       <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
       <title>Ample admin Template - The Ultimate Multipurpose admin template</title>
       <!-- This page plugin CSS -->
       <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
       <!-- Custom CSS -->
       <link href="dist/css/style.min.css" rel="stylesheet">

       <link rel="stylesheet" type="text/css" href="assets/extra-libs/css-chart/css-chart.css">

       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
       <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>

        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">


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
                                                    @if(isset(Auth::user()->email))
                                                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="36">

                                                        <span class="ml-2 font-medium">{{ Auth::user()->name }}</span><span class="fas fa-angle-down ml-2"></span>
                                                    </a>
                                                    @endif
                                                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                                        <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                                            <div class=""><img src="../../assets/images/users/1.jpg" alt="user" class="rounded" width="80"></div>

                                        <!--

                                            @if(isset(Auth::user()->email))
                                            <a href="#" class="waves-effect"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}</span>
                                            </a>

                                            @endif -->
                                            <div class="ml-2">
                                                @if(isset(Auth::user()->email))
                                                <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                                <p class=" mb-0 text-muted">{{ Auth::user()->email }}</p>
                                                @endif
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
                                    @if(isset(Auth::user()->email))
                                    <a class="sidebar-link has-arrow waves-effect waves-dark profile-dd" href="javascript:void(0)" aria-expanded="false">
                                        <img src="assets/images/users/1.jpg" class="rounded-circle ml-2" width="30">
                                        <span class="hide-menu">{{ Auth::user()->name }} </span>
                                    </a>
                                    @endif
                                <!--

                                @if(isset(Auth::user()->email))
                                <a href="#" class="waves-effect"><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}</span>
                                </a>
                                @endif -->
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
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark" href="{{ route('home') }}" aria-expanded="false">
                                    <i class="mdi mdi-av-timer"></i>
                                    <span class="hide-menu">Dashboard</span> 

                                </a>

                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{ route('transactions') }}" aria-expanded="false">
                                    <i class="mdi mdi-square-inc-cash"></i>
                                    <span class="hide-menu">Sales</span>
                                </a>

                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="{{ route('transactions') }}" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Transactions </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{ route('report') }}" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Reports </span>
                                        </a>
                                    </li>

                                </ul>



                            </li>


                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="mdi mdi-clipboard"></i>
                                    <span class="hide-menu">Inventory</span>
                                </a>

                            </li>


                            


                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{ route('guest') }}" aria-expanded="false">
                                    <i class="mdi mdi-account-box"></i>
                                    <span class="hide-menu">Guest</span>
                                </a>

                                <ul aria-expanded="false" class="collapse  first-level">
                                    <li class="sidebar-item">
                                        <a href="{{ route('guest') }}" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Create Guest</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="{{ route('appointment') }}" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Guest Appointments </span>
                                        </a>
                                    </li>

                                </ul>



                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark" href="{{ route('programs') }}" aria-expanded="false">
                                    <i class="mdi mdi-radio"></i>
                                    <span class="hide-menu">Program Segments</span>
                                </a>

                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark" href="{{ route('anchor') }}" aria-expanded="false">
                                    <i class="mdi mdi-account-multiple"></i>
                                    <span class="hide-menu">Anchors </span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" <a href="{{ route('calendar') }}" aria-expanded="false">
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
                            <h5 class="font-medium text-uppercase mb-0">Appointments</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">

                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="index.html">Guest Management</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment List</li>
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



                    <div class="button-group">
                        <button type="button" class="btn waves-effect waves-light btn-primary">Upcoming</button>
                        <button type="button" class="btn waves-effect waves-light btn-secondary">Past</button>
                    </div>

                    <div class="owl-carousel owl-theme">

                        <div class="card border-info">
                            <div class="card-header bg-info">
                                <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                <div class="card-body">
                                    <h3 class="card-title">Ambit DXGN</h3>
                                    <p class="card-text">10:00-11:00 PM</p>
                                    <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                    <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                </div>
                            </div>

                            <div class="card border-info">
                                <div class="card-header bg-info">
                                    <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                    <div class="card-body">
                                        <h3 class="card-title">Ambit DXGN</h3>
                                        <p class="card-text">10:00-11:00 PM</p>
                                        <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                        <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </div>

                                <div class="card border-info">
                                    <div class="card-header bg-info">
                                        <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                        <div class="card-body">
                                            <h3 class="card-title">Ambit DXGN</h3>
                                            <p class="card-text">10:00-11:00 PM</p>
                                            <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                            <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                        </div>
                                    </div>

                                    <div class="card border-info">
                                        <div class="card-header bg-info">
                                            <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                            <div class="card-body">
                                                <h3 class="card-title">Ambit DXGN</h3>
                                                <p class="card-text">10:00-11:00 PM</p>
                                                <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                            </div>
                                        </div>

                                        <div class="card border-info">
                                            <div class="card-header bg-info">
                                                <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                                <div class="card-body">
                                                    <h3 class="card-title">Ambit DXGN</h3>
                                                    <p class="card-text">10:00-11:00 PM</p>
                                                    <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                    <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                                </div>
                                            </div>

                                            <div class="card border-info">
                                                <div class="card-header bg-info">
                                                    <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                                    <div class="card-body">
                                                        <h3 class="card-title">Ambit DXGN</h3>
                                                        <p class="card-text">10:00-11:00 PM</p>
                                                        <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                        <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                                    </div>
                                                </div>

                                                <div class="card border-info">
                                                    <div class="card-header bg-info">
                                                        <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                                        <div class="card-body">
                                                            <h3 class="card-title">Ambit DXGN</h3>
                                                            <p class="card-text">10:00-11:00 PM</p>
                                                            <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                            <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                                        </div>
                                                    </div>

                                                    <div class="card border-info">
                                                        <div class="card-header bg-info">
                                                            <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                                            <div class="card-body">
                                                                <h3 class="card-title">Ambit DXGN</h3>
                                                                <p class="card-text">10:00-11:00 PM</p>
                                                                <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                                <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                                            </div>
                                                        </div>

                                                        <div class="card border-info">
                                                            <div class="card-header bg-info">
                                                                <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                                                <div class="card-body">
                                                                    <h3 class="card-title">Ambit DXGN</h3>
                                                                    <p class="card-text">10:00-11:00 PM</p>
                                                                    <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                                    <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                                                </div>
                                                            </div>

                                                            <div class="card border-info">
                                                                <div class="card-header bg-info">
                                                                    <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                                                    <div class="card-body">
                                                                        <h3 class="card-title">Ambit DXGN</h3>
                                                                        <p class="card-text">10:00-11:00 PM</p>
                                                                        <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                                        <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                                                    </div>
                                                                </div>

                                                                <div class="card border-info">
                                                                    <div class="card-header bg-info">
                                                                        <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                                                        <div class="card-body">
                                                                            <h3 class="card-title">Ambit DXGN</h3>
                                                                            <p class="card-text">10:00-11:00 PM</p>
                                                                            <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                                            <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="card border-info">
                                                                        <div class="card-header bg-info">
                                                                            <h4 class="mb-0 text-white">Henry Sy</h4></div>
                                                                            <div class="card-body">
                                                                                <h3 class="card-title">Ambit DXGN</h3>
                                                                                <p class="card-text">10:00-11:00 PM</p>
                                                                                <a href="javascript:void(0)" class="btn btn-info">Edit</a>
                                                                                <a href="javascript:void(0)" class="btn btn-inverse">Cancel</a>
                                                                            </div>
                                                                        </div> 

                                                                    </div>

                                                                    <div class="row">
                                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 10px;margin-left: 15px;"><i class="fa fa-plus"></i> New Appointment</button>

                                                                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="exampleModalLabel1">Guest Details:</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <form>
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="customer-name" class="control-label">First Name:</label>
                                                                                                    <input type="text" class="form-control" id="customer-name1">
                                                                                                </div>


                                                                                            </div>

                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="recipient-name" class="control-label">Last Name:</label>
                                                                                                    <input type="text" class="form-control" id="recipient-name1">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-md-8">
                                                                                                <div class="form-group">
                                                                                                    <label for="customer-name" class="control-label">Email:</label>
                                                                                                    <input type="email" class="form-control" id="customer-name1" style="
                                                                                                    width: 386px;
                                                                                                    ">
                                                                                                </div>


                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="customer-name" class="control-label">Contact Number:</label>
                                                                                                    <input type="tel" class="form-control" id="customer-name1">
                                                                                                </div>


                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                         <div class="col-md-5">
                                                                                            <div class="form-group">
                                                                                                <label for="recipient-name" class="control-label">Address:
                                                                                                    <textarea class="form-control" id="address2" style="
                                                                                                    width: 226px;
                                                                                                    "></textarea>

                                                                                                </div>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="customer-name" class="control-label">Company/Organization:</label>
                                                                                                    <input type="text" class="form-control" id="customer-name1"  style="
                                                                                                    width: 376px;
                                                                                                    ">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>




                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                            <button type="button" class="btn btn-primary">Create</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="material-card card">
                                                                            <div class="card-body">
                                                                                <h4 class="card-title">List of Appointments</h4>
                                                                                <h6 class="card-subtitle"></h6>
                                                                                <div class="table-responsive">
                                                                                    <table id="default_order" class="table table-striped border display">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Program Segment</th>
                                                                                                <th>Guest Name</th>
                                                                                                <th>Date</th>
                                                                                                <th>Time</th>
                                                                                                <th>Status</th>
                                                                                                <th>Manage</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>Ambit DXGN</td>
                                                                                                <td>Henry Sy</td>
                                                                                                <td>Dec 25, 2018</td>
                                                                                                <td>Active</td>
                                                                                                <td>10:00-11:00PM</td>

                                                                                                <td>
                                                                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#guestModal" data-whatever="@mdo">  View</button>

                                                                                                    <div class="modal fade" id="guestModal" tabindex="-1" role="dialog" aria-labelledby="guestModalLabel1">
                                                                                                        <div class="modal-dialog modal modal-dialog-centered" role="document">
                                                                                                            <div class="modal-content">
                                                                                                                <div class="modal-header">
                                                                                                                    <h4 class="modal-title" id="exampleModalLabel1">Appointment Details:</h4>
                                                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                                                </div>

                                                                                                                <div class="modal-body">
                                                                                                                    <form>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-5">
                                                                                                                                <div class="form-group">
                                                                                                                                    <label for="customer-name" class="control-label">Program Segment:</label>
                                                                                                                                    <input type="text" class="form-control" id="customer-name1">
                                                                                                                                </div>


                                                                                                                            </div>

                                                                                                                            <div class="col-md-5">
                                                                                                                                <div class="form-group">
                                                                                                                                    <label for="recipient-name" class="control-label">Guest Name:</label>
                                                                                                                                    <input type="text" class="form-control" id="recipient-name1">
                                                                                                                                </div>
                                                                                                                            </div>


                                                                                                                        </div>

                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-8">
                                                                                                                                <div class="form-group">
                                                                                                                                    <label for="customer-name" class="control-label">Date:</label>
                                                                                                                                    <input type="date" class="form-control" id="customer-name1">
                                                                                                                                </div>


                                                                                                                            </div>

                                                                                                                        </div>

                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-4">
                                                                                                                                <div class="form-group">


                                                                                                                                    <label for="address2" class="control-label">Time:</label>
                                                                                                                                    <input type="time" class="form-control" id="recipient-name1">


                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>

                                                                                                                        <div class="row">
                                                                                                                            <div class="col-md-5">
                                                                                                                                <div class="form-group">
                                                                                                                                    <label for="customer-name" class="control-label">Status:</label>
                                                                                                                                    <input type="text" class="form-control" id="recipient-name1">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>


                                                                                                                        <div class="modal-footer">
                                                                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                                                            <button type="button" class="btn btn-info">Edit</button>
                                                                                                                        </div>
                                                                                                                    </form>


                                                                                                                </div>


                                                                                                            </div>
                                                                                                        </div>

                                                                                                    </td>
                                                                                                </tr>

                                                                                            </tbody>
                                                                                            <tfoot>
                                                                                                <tr>
                                                                                                    <th>Program Segment</th>
                                                                                                    <th>Guest Name</th>
                                                                                                    <th>Date</th>
                                                                                                    <th>Time</th>
                                                                                                    <th>Status</th>
                                                                                                    <th>Manage</th>
                                                                                                </tr>
                                                                                            </tfoot>
                                                                                        </table>
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
                                                                <!--This page plugins -->
                                                                <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
                                                                <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>

                                                                <script type="text/javascript" src="slick/slick/slick.min.js"></script>

                                                                <script src="owlcarousel/jquery.min.js"></script>
                                                                <script src="owlcarousel/owl.carousel.min.js"></script>

                                                                <script type="text/javascript">
                                                                 $('.owl-carousel').owlCarousel({
                                                                    loop:true,
                                                                    margin:17,
                                                                    nav:true,
                                                                    responsive:{
                                                                        0:{
                                                                            items:1
                                                                        },
                                                                        600:{
                                                                            items:3
                                                                        },
                                                                        1000:{
                                                                            items:5
                                                                        }
                                                                    }
                                                                });
                                                            </script>


                                                            </html>