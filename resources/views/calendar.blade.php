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
            <title>Calendar of Activities</title>
            <!-- Custom CSS -->
            <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
            <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
            <!-- Custom CSS -->
            <link href="dist/css/style.min.css" rel="stylesheet">

            <!-- Calendar onlince CSS-->
            <link href="assets/extra-libs/calendar/calendar2.css" rel="stylesheet" />

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
                                <img src="assets/images/logos/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="assets/images/logos/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="assets/images/logos/logo-text.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo text -->    
                             <img src="assets/images/logos/logo-light-text.png" class="light-logo" alt="homepage" />
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
                                                @if(isset(Auth::user()->email))
                                                <li class="nav-item dropdown">

                                                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="36">

                                                        <span class="ml-2 font-medium">{{ Auth::user()->name }}</span><span class="fas fa-angle-down ml-2"></span>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                                        <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                                                            <div class=""><img src="assets/images/users/1.jpg" alt="user" class="rounded" width="80"></div>
                                                            <div class="ml-2">
                                                                <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                                                <p class=" mb-0 text-muted">{{ Auth::user()->email }}</p>
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
                                                @endif
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
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{ route('inventory') }}" aria-expanded="false">
                                <i class="mdi mdi-account-box"></i>
                                <span class="hide-menu">Inventory</span>
                            </a>

                                <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('guest') }}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Products </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('appointment') }}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Suppliers </span>
                                    </a>
                                </li>
                                    <li class="sidebar-item">
                                    <a href="{{ route('appointment') }}" class="sidebar-link">
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
                            <h5 class="font-medium text-uppercase mb-0">Calendar of Activities</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">

                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Calendar of Activities</li>
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

                    <!--



                    -->    

                    <div class="page-content container-fluid" style="padding-top: 10px;">



                        <div class="row">
                            <div class="col-md-12">

                                <div class="row">

                                    <div class="col-lg-3">

                                        <div class="card" style="
                                        margin-left: 20px;
                                        margin-top: 40px;
                                        ">
                                        <div class="card-body border-bottom">
                                            <h4 class="card-title mt-2">Drag & Drop Event</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="calendar-events" class="">
                                                        <div class="calendar-events mb-3" data-class="bg-info"><i class="fa fa-circle text-info mr-2"></i>Event One</div>
                                                        <div class="calendar-events mb-3" data-class="bg-success"><i class="fa fa-circle text-success mr-2"></i> Event Two</div>
                                                        <div class="calendar-events mb-3" data-class="bg-danger"><i class="fa fa-circle text-danger mr-2"></i>Event Three</div>
                                                        <div class="calendar-events mb-3" data-class="bg-warning"><i class="fa fa-circle text-warning mr-2"></i>Event Four</div>
                                                    </div>
                                                    <!-- checkbox -->
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="drop-remove">
                                                        <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                                    </div>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn mt-3 btn-info btn-block waves-effect waves-light">
                                                        <i class="ti-plus"></i> Add New Event
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container" style="margin-top: 15px;">
                                        <div class="calendar light" style="
                                        width: 360px;
                                        margin-left: 5px;
                                        ">
                                        <div class="calendar_header">
                                            <h1 class = "header_title">Today</h1>
                                            <p class="header_copy"> Calendar Plan</p>
                                        </div>

                                        <div class="calendar_plan">
                                            <div class="cl_plan">
                                                <div class="cl_title">Today</div>
                                                <div class="cl_copy">22nd  April  2018</div>

                                            </div>
                                        </div>
                                        <div class="calendar_events">
                                            <p class="ce_title">Upcoming Events</p>

                                            <div class="event_item">
                                                <div class="ei_Dot dot_active"></div>
                                                <div class="ei_Title">10:30 am</div>
                                                <div class="ei_Copy">Monday briefing with the team</div>
                                            </div>
                                            <div class="event_item">
                                                <div class="ei_Dot"></div>
                                                <div class="ei_Title">12:00 pm</div>
                                                <div class="ei_Copy">Lunch for with the besties</div>
                                            </div>
                                            <div class="event_item">
                                                <div class="ei_Dot"></div>
                                                <div class="ei_Title">13:00 pm</div>
                                                <div class="ei_Copy">Meet with the client for final design <br> @foofinder</div>
                                            </div>

                                        </div>
                                        </div>
                                    </div>


                            </div>


                            <div class="col-lg-9">
                                <div class="btn-group" role="group" aria-label="Basic example" style="padding-bottom: 5px;">

                                    <button type="button" class="btn btn-secondary">ALL</button>
                                    <button type="button" class="btn btn-secondary">AGRI-MENT</button>
                                    <button type="button" class="btn btn-secondary">COVERAGES/EVENTS</button>
                                </div>

                                <div class="btn-group" aria-label="Basic example">

                                </div>    

                                <div class="card" style="
                                height: 985px;
                                ">
                                <div class="card-body calender-sidebar" style="
                                height: 850.24px;
                                ">
                                <div id="calendar" style="
                                height: 850px;
                                "></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- BEGIN MODAL -->
        <div class="modal none-border" id="my-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Add Event</strong></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                        <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Add Category -->
        <div class="modal fade none-border" id="add-new-event">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>Add</strong> a category</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="control-label">Choose Event Type</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                        <option value="success">Select...</option>
                                        <option value="danger">Agri-ment</option>
                                        <option value="info">Coverages</option>
                                        
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="control-label">Choose Category Color</label>
                                    <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                        <option value="success">Success</option>
                                        <option value="danger">Danger</option>
                                        <option value="info">Info</option>
                                        <option value="primary">Primary</option>
                                        <option value="warning">Warning</option>
                                        <option value="inverse">Inverse</option>
                                    </select>
                                </div>


                            </div>
                            <div class="row" style="
                            margin-top: 10px;
                            ">
                            <div class="col-md-6">
                                <label class="control-label">Category Name</label>
                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                            </div>


                            <div class="col-md-6">
                                <label class="control-label">Event Time</label>
                                <input type="time" class="form-control" value="22:33:00">
                            </div>


                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    All Rights Reserved by Ample admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
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
                                <script src="assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
                                <script src="assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
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
                                <!--This page JavaScript -->
                                <script src="assets/libs/moment/min/moment.min.js"></script>
                                <script src="assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
                                <script src="dist/js/pages/calendar/cal-init.js"></script>
                                <script>
                                </script>
                            </body>

                            </html>