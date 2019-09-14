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
        <title>Report</title>
        <!-- Custom CSS -->
        <link href="assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
        <link href="assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet">

        <link href="assets/libs/morris.js/morris.css" rel="stylesheet">

        <!-- Calendar onlince CSS-->
        <link href="assets/extra-libs/calendar/calendar2.css" rel="stylesheet" />

        <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="assets/libs/daterangepicker/daterangepicker.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header border-right">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="/home">
                        <b class="logo-icon">
                            <img src="../../assets/images/logos/radio-icon.png" alt="homepage" class="light-logo" style="margin-left:5px;" />
                        </b>
                        <span class="logo-text">
                           <img src="../../assets/images/logos/dxgn-logo.png" class="light-logo" alt="homepage" style="width:120px;margin-left:30px;"/>
                       </span>
                   </a>
               </div>
               <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto">
                    <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-18"></i></a></li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        @if(isset(Auth::user()->email))
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/users/user.png" alt="user" class="rounded-circle" width="36">

                            <span class="ml-2 font-medium">{{ Auth::user()->name }}</span><span class="fas fa-angle-down ml-2"></span>
                        </a>
                        @endif
                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                    <div class="d-flex no-block align-items-center p-3 mb-2 border-bottom">
                        <div class=""><img src="../../assets/images/users/user.png" alt="user" class="rounded" width="80"></div>
                                <div class="ml-2">
                                    @if(isset(Auth::user()->email))
                                    <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                                    <p class=" mb-0 text-muted">{{ Auth::user()->email }}</p>
                                    @endif
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger text-white mt-2 btn-rounded">View Profile</a>
                                </div>
                            </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left Sidebar -->
    <aside class="left-sidebar">
        <div class="scroll-sidebar">
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
                                        <a href="/product" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Products </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/supplier" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Suppliers </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                            <a href="/damage" class="sidebar-link">
                                            <i class="mdi mdi-adjust"></i>
                                            <span class="hide-menu"> Damages </span>
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
    </div>
</aside>
        <!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="page-breadcrumb border-bottom">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                <h5 class="font-medium text-uppercase mb-0">Dashboard</h5>
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
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style=" margin-bottom: 10px;"> Generate Report</button>

                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Daily Sales</h5>
                                <div class="text-right">
                                    <span class="text-muted">Today's Income</span>
                                    <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-success"></i></sup>$12,000</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Weekly Sales</h5>
                                <div class="text-right">
                                    <span class="text-muted">Weekly Income</span>
                                    <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-info"></i></sup>$5,000</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Monthly Sales</h5>
                                <div class="text-right">
                                    <span class="text-muted">Monthly Income</span>
                                    <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-info"></i></sup>$10,000</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Yearly Sales</h5>
                                <div class="text-right">
                                    <span class="text-muted">Yearly Income</span>
                                    <h2 class="mt-2 display-7"><sup><i class="ti-arrow-up text-inverse"></i></sup>$9,000</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="exampleModalLabel1">Generate Report</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>

                            <div class="modal-body">
                                <form>

                                    <h6 class="card-subtitle">Transactions Between (start date) and (end date)</h6>
                                    <div class='input-group mb-3'>
                                        <input type='text' class="form-control shawCalRanges" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="material-card card">
                                                <div class="card-body">

                                                    <div class="table-responsive">
                                                        <table id="file_export" class="table table-striped border display">
                                                            <thead>
                                                                <tr>
                                                                    <th>Customer Name</th>
                                                                    <th>TIN</th>
                                                                    <th>Business Style</th>
                                                                    <th>Address</th>
                                                                    <th>OSCA PWD No.</th>
                                                                    <th>Transaction Type</th>
                                                                    <th>Amount</th>
                                                                    <th>Mode of Payment</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Donna Snider</td>
                                                                    <td>01234567</td>
                                                                    <td>Insurance Company</td>
                                                                    <td>Davao City</td>
                                                                    <td>1234</td>
                                                                    <td>Program Sponsorship</td>
                                                                    <td>$5000</td>
                                                                    <td>Cash</td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                 <th>Customer Name</th>
                                                                 <th>TIN</th>
                                                                 <th>Business Style</th>
                                                                 <th>Address</th>
                                                                 <th>OSCA PWD No.</th>
                                                                 <th>Transaction Type</th>
                                                                 <th>Amount</th>
                                                                 <th>Mode of Payment</th>
                                                             </tr>
                                                         </tfoot>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>

                         <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                            <!--<button type="button" class="btn btn-primary">Print</button>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bar Chart</h4>
                            <div id="morris-bar-chart"></div>

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
                                            <th class="border-0">Transaction Type</th>
                                            <th class="border-0">Status</th>
                                            <th class="border-0">Date</th>
                                            <th class="border-0">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td class="txt-oflo">Elite admin</td>
                                            <td class="txt-oflo">Program Advertisement</td>
                                            <td><span class="badge badge-pill text-uppercase text-white font-medium badge-success label-rouded">PARTIAL PAYMENT</span> </td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td class="txt-oflo">Real Homes WP Theme</td>
                                            <td class="txt-oflo">Program Sponsorship</td>
                                            <td><span class="badge badge-pill text-uppercase text-white font-medium badge-info label-rouded">FULLY PAID</span></td>
                                            <td class="txt-oflo">April 19, 2017</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td class="txt-oflo">Ample Admin</td>
                                            <td class="txt-oflo">Program Sponsorship</td>
                                            <td><span class="badge badge-pill text-uppercase text-white font-medium badge-info label-rouded">FULLY PAID</span></td>
                                            <td class="txt-oflo">April 19, 2017</td>
                                            <td><span class="text-info">$1250</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td class="txt-oflo">Medical Pro WP Theme</td>
                                            <td class="txt-oflo">Program Advertisement</td>
                                            <td><span class="badge badge-pill text-uppercase text-white font-medium badge-success label-rouded">PARTIAL PAYMENT</span></td>
                                            <td class="txt-oflo">April 20, 2017</td>
                                            <td><span class="text-danger">-$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td class="txt-oflo">Hosting press html</td>
                                            <td class="txt-oflo">Program Sponsorship</td>
                                            <td><span class="badge badge-pill text-uppercase text-white font-medium badge-info label-rouded">FULLY PAID</span></td>
                                            <td class="txt-oflo">April 21, 2017</td>
                                            <td><span class="text-success">$24</span></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td class="txt-oflo">Digital Agency PSD</td>
                                            <td class="txt-oflo">Program Advertisement</td>
                                            <td><span class="badge badge-pill text-uppercase text-white font-medium badge-success label-rouded">PARTIAL PAYMENT</span> </td>
                                            <td class="txt-oflo">April 23, 2017</td>
                                            <td><span class="text-danger">-$14</span></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td class="txt-oflo">Helping Hands WP Theme</td>
                                            <td class="txt-oflo">Program Sponsorship</td>
                                            <td><span class="badge badge-pill text-uppercase text-white font-medium badge-info label-rouded">FULLY PAID</span></td>
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
            <div class="row">
                <!-- column -->
                <div class="col-lg-6" style="
                width: 40px;
                height: 10px;
                ">
                <div class="invisible">
                    <div class="card-body">
                        <h4 class="card-title">Product line Chart</h4>
                        <ul class="list-inline text-right">
                            <li class="list-inline-item">
                                <h5><i class="fa fa-circle mr-1 text-inverse"></i>iPhone</h5>
                            </li>
                            <li class="list-inline-item">
                                <h5><i class="fa fa-circle mr-1 text-info"></i>iPad</h5>
                            </li>
                            <li class="list-inline-item">
                                <h5><i class="fa fa-circle mr-1 text-success"></i>iPod</h5>
                            </li>
                        </ul>
                        <div id="morris-area-chart"></div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <!-- column -->
            <div class="col-lg-6" style="
            width: 40px;
            height: 10px;
            ">
            <div class="invisible">
                <div class="card-body">
                    <h4 class="card-title">Site visit Chart</h4>
                    <ul class="list-inline text-right">
                        <li class="list-inline-item">
                            <h5><i class="fa fa-circle mr-1 text-info"></i>Site A View</h5>
                        </li>
                        <li class="list-inline-item">
                            <h5><i class="fa fa-circle mr-1 text-inverse"></i>Site B View</h5>
                        </li>
                    </ul>
                    <div id="morris-area-chart2"></div>
                </div>
            </div>
        </div>
        <!-- column -->
        <!-- column -->
        <div class="col-lg-6" style="
        width: 40px;
        height: 10px;
        ">
        <div class="invisible">
            <div class="card-body">
                <h4 class="card-title">Line Chart</h4>
                <div id="morris-line-chart"></div>
            </div>
        </div>
    </div>
    <!-- column -->
    <!-- column -->
    <div class="col-lg-6" style="
    width: 40px;
    height: 10px;
    ">
    <div class="invisible">
        <div class="card-body">
            <h4 class="card-title">Donute Chart</h4>
            <div id="morris-donut-chart"></div>
        </div>
    </div>
</div>
<!-- column -->
<!-- column -->


<!-- column -->
</div>
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

                                <script src="assets/libs/raphael/raphael.min.js"></script>
                                <script src="assets/libs/morris.js/morris.min.js"></script>
                                <script src="dist/js/pages/morris/morris-data.js"></script>

                                <script src="assets/libs/moment/moment.js"></script>
                                <script src="assets/libs/daterangepicker/daterangepicker.js"></script>

                                <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
                                <!-- start - This is for export functionality only -->
                                <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
                                <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
                                <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
                                <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
                                <script src="dist/js/pages/datatable/datatable-advanced.init.js"></script>

                                <script src="dist/js/pages/chartjs/chartjs.init.js"></script>
                                <script src="assets/libs/Chart.js/dist/Chart.min.js"></script>

                                <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
                                <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
                                <script>
                                    /*******************************************/
    // Basic Date Range Picker
    /*******************************************/
    $('.daterange').daterangepicker();

    /*******************************************/
    // Date & Time
    /*******************************************/
    $('.datetime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });

    /*******************************************/
    //Calendars are not linked
    /*******************************************/
    $('.timeseconds').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        timePicker24Hour: true,
        timePickerSeconds: true,
        locale: {
            format: 'MM-DD-YYYY h:mm:ss'
        }
    });

    /*******************************************/
    // Single Date Range Picker
    /*******************************************/
    $('.singledate').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });

    /*******************************************/
    // Auto Apply Date Range
    /*******************************************/
    $('.autoapply').daterangepicker({
        autoApply: true,
    });

    /*******************************************/
    // Calendars are not linked
    /*******************************************/
    $('.linkedCalendars').daterangepicker({
        linkedCalendars: false,
    });

    /*******************************************/
    // Date Limit
    /*******************************************/
    $('.dateLimit').daterangepicker({
        dateLimit: {
            days: 7
        },
    });

    /*******************************************/
    // Show Dropdowns
    /*******************************************/
    $('.showdropdowns').daterangepicker({
        showDropdowns: true,
    });

    /*******************************************/
    // Show Week Numbers
    /*******************************************/
    $('.showweeknumbers').daterangepicker({
        showWeekNumbers: true,
    });

    /*******************************************/
    // Date Ranges
    /*******************************************/
    $('.dateranges').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    });

    /*******************************************/
    // Always Show Calendar on Ranges
    /*******************************************/
    $('.shawCalRanges').daterangepicker({
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        alwaysShowCalendars: true,
    });

    /*******************************************/
    // Top of the form-control open alignment
    /*******************************************/
    $('.drops').daterangepicker({
        drops: "up" // up/down
    });

    /*******************************************/
    // Custom button options
    /*******************************************/
    $('.buttonClass').daterangepicker({
        drops: "up",
        buttonClasses: "btn",
        applyClass: "btn-info",
        cancelClass: "btn-danger"
    });

    /*******************************************/
    // Language
    /*******************************************/
    $('.localeRange').daterangepicker({
        ranges: {
            "Aujourd'hui": [moment(), moment()],
            'Hier': [moment().subtract('days', 1), moment().subtract('days', 1)],
            'Les 7 derniers jours': [moment().subtract('days', 6), moment()],
            'Les 30 derniers jours': [moment().subtract('days', 29), moment()],
            'Ce mois-ci': [moment().startOf('month'), moment().endOf('month')],
            'le mois dernier': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        },
        locale: {
            applyLabel: "Vers l'avant",
            cancelLabel: 'Annulation',
            startLabel: 'Date initiale',
            endLabel: 'Date limite',
            customRangeLabel: 'SÃ©lectionner une date',
            // daysOfWeek: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi','Samedi'],
            daysOfWeek: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
            monthNames: ['Janvier', 'fÃ©vrier', 'Mars', 'Avril', 'ÐœÐ°i', 'Juin', 'Juillet', 'AoÃ»t', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
            firstDay: 1
        }
    });
</script>
</body>

</html>
