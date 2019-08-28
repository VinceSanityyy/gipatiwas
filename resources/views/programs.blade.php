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
               <title>Programs</title>
               <!-- This page plugin CSS -->
               <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
               <!-- Custom CSS -->
               <link href="dist/css/style.min.css" rel="stylesheet">


               <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
               <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
                    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->


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
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{ route('inventory') }}" aria-expanded="false">
                                <i class="mdi mdi-account-box"></i>
                                <span class="hide-menu">Inventory</span>
                            </a>

                                <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('products') }}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Products </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('supplier') }}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Suppliers </span>
                                    </a>
                                </li>
                                    <li class="sidebar-item">
                                    <a href="{{ route('customer') }}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Customers </span>
                                    </a>
                                </li>

                            </ul>
                            
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
                                    <h5 class="font-medium text-uppercase mb-0">Programs Segments</h5>
                                </div>
                                <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">

                                    <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                        <ol class="breadcrumb mb-0 justify-content-end p-0">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            
                                            <li class="breadcrumb-item active" aria-current="page">Program Segments</li>
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

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style=" margin-bottom: 10px;"><i class="fa fa-plus"></i> New Program Segment</button>

                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="exampleModalLabel1">Program Details</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Program Name:</label>
                                                    <input type="text" class="form-control" id="recipient-name1">
                                                </div>

                                                <div class="form-group">
                                                    <label for="message-text" class="control-label">Program Description:</label>
                                                    <textarea class="form-control" id="message-text1"></textarea>
                                                </div>

                                                <div class="email-repeater form-group">
                                                    <div data-repeater-list="repeater-group">
                                                        <div data-repeater-item class="row mb-3">
                                                            <div class="col-md-10" style="
                                                            height: 60px;
                                                            ">
                                                            <form class="mt-4">
                                                                <div class="form-group mb-4">
                                                                    <label for="exampleFormControlSelect1">Select Anchor</label>
                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                    </select>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-md-2" style="
                                                        margin-top: 28px;
                                                        ">
                                                        <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button"><i class="ti-close" style="

                                                        margin-top: 28px;
                                                        "></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">Add Anchor
                                        </button>
                                    </div>


                                    <div class="form-group bg-light">
                                        <label for="message-text" class="control-label">Schedule Days:</label>

                                        <div class="row" style="margin-left: 50px;">        
                                            <div class="form-check form-check-inline">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Mon</label>
                                                </div>
                                            </div>


                                            <div class="form-check form-check-inline">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                    <label class="custom-control-label" for="customCheck2">Tue</label>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label" for="customCheck3">Wed</label>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                    <label class="custom-control-label" for="customCheck4">Th</label>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                    <label class="custom-control-label" for="customCheck5">Fri</label>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                    <label class="custom-control-label" for="customCheck6">Sat</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row pb-3" style="
                                        margin-top: 0px;
                                        margin-right: 90px;
                                        margin-left: -50;
                                        ">
                                        <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Start Time</label>
                                        <div class="col-sm-9">
                                            <input type="time" class="form-control" id="inputEmail3" placeholder="Start Time Here" style="
                                            width: 126px;
                                            ">
                                        </div>
                                    </div>
                                    <div class="form-group row pb-3" style="
                                    margin-right: 90px;
                                    margin-left: -50;
                                    ">
                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">End Time</label>
                                    <div class="col-sm-9">
                                        <input type="time" class="form-control" id="inputEmail3" placeholder="End Time Here" style="
                                        width: 126px;
                                        ">
                                    </div>
                                </div>
                            </div>



                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->


        <!-- order table -->
        <div class="row">
            <div class="col-12">
                <div class="material-card card">
                    <div class="card-body">
                        <h4 class="card-title">Program Segments</h4>
                        <h6 class="card-subtitle"></h6>
                        <div class="table-responsive">
                            <table id="default_order" class="table table-striped border display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Program Name</th>
                                        <th>Program Description</th>
                                        <th>Anchor</th>
                                        <th>Days</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Status</th>
                                        <th>Manage</th>

                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach ($programs as $programs)
                                    <tr>
                                        <td>{{$programs->program_name}}</td>
                                        <td>{{$programs->program_desc}}</td>
                                        <td>{{$programs->anchor_name}}</td>
                                        <td>{{$programs->program_days}}</td>
                                        <td>{{$programs->start_time}}</td>
                                        <td>{{$programs->end_time}}</td>
                                        <td>
                                            @if($programs->program_status === 1)
                                            Active
                                            @else
                                            Inactive
                                            @endif
                                        </td>
                                        <td>

                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#programModal" data-whatever="@mdo">  View</button>
                                            <button type="button" class="btn btn-danger">  Delete</button>

                                            <div class="modal fade" id="programModal" tabindex="-1" role="dialog" aria-labelledby="programModalLabel1">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel1">Program Details</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="recipient-name" class="control-label">Program Name:</label>
                                                                    <input type="text" class="form-control" id="recipient-name1">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="message-text" class="control-label">Program Description:</label>
                                                                    <textarea class="form-control" id="message-text1"></textarea>
                                                                </div>

                                                                <div class="email-repeater form-group">
                                                                    <div data-repeater-list="repeater-group">
                                                                        <div data-repeater-item class="row mb-3">
                                                                            <div class="col-md-10" style="
                                                                            height: 60px;
                                                                            ">
                                                                            <form class="mt-4">
                                                                                <div class="form-group mb-4">
                                                                                    <label for="exampleFormControlSelect1">Select Anchor</label>
                                                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option>4</option>
                                                                                        <option>5</option>
                                                                                    </select>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="col-md-2" style="
                                                                        margin-top: 28px;
                                                                        ">
                                                                        <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button"><i class="ti-close" style="

                                                                        margin-top: 28px;
                                                                        "></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">Add Anchor
                                                        </button>
                                                    </div>


                                                    <div class="form-group bg-light">
                                                        <label for="message-text" class="control-label">Schedule Days:</label>

                                                        <div class="row" style="margin-left: 50px;">        
                                                            <div class="form-check form-check-inline">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                    <label class="custom-control-label" for="customCheck1">Mon</label>
                                                                </div>
                                                            </div>


                                                            <div class="form-check form-check-inline">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">Tue</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                    <label class="custom-control-label" for="customCheck3">Wed</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                    <label class="custom-control-label" for="customCheck4">Th</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                    <label class="custom-control-label" for="customCheck5">Fri</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                                    <label class="custom-control-label" for="customCheck6">Sat</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row pb-3" style="
                                                        margin-top: 0px;
                                                        margin-right: 90px;
                                                        margin-left: -50;
                                                        ">
                                                        <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">Start Time</label>
                                                        <div class="col-sm-9">
                                                            <input type="time" class="form-control" id="inputEmail3" placeholder="Start Time Here" style="
                                                            width: 126px;
                                                            ">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row pb-3" style="
                                                    margin-right: 90px;
                                                    margin-left: -50;
                                                    ">
                                                    <label for="inputEmail3" class="col-sm-3 text-right control-label col-form-label">End Time</label>
                                                    <div class="col-sm-9">
                                                        <input type="time" class="form-control" id="inputEmail3" placeholder="End Time Here" style="
                                                        width: 126px;
                                                        ">
                                                    </div>
                                                </div>
                                            </div>



                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>    

                    </td>
                </tr>

            @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <th>Program Name</th>
                    <th>Program Description</th>
                    <th>Anchor</th>
                    <th>Days</th>
                    <th>Start Time</th>
                    <th>End Time</th>
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
<!-- multi-column ordering -->




<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right sidebar -->
<!-- ============================================================== -->
<!-- .right-sidebar -->
<!-- ============================================================== -->
<!-- End Right sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- Yearly Sales Charts Row  -->
<!-- ============================================================== -->


<!-- ============================================================== -->
<!-- Recent Comment & Sales Chart Row  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Profile Card & Email App Row  -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Earnings & Feed Row  -->
<!-- ============================================================== -->

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

        <!--repeaters javascript-->
        <script src="assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
        <script src="assets/extra-libs/jquery.repeater/repeater-init.js"></script>
        <script src="assets/extra-libs/jquery.repeater/dff.js"></script>


        </html>