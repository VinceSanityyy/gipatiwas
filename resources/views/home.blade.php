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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/radio.png">
    <title>DXGN Homepage</title>
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
                        <h5 class="card-title text-uppercase mb-0">Sales</h5>
                        <div class="ml-auto">
                            <ul class="list-inline dl mb-0">
                                <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Advertisement</li>
                                <li class="list-inline-item text-danger"><i class="fa fa-circle"></i> Program Sponsorship</li>
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
                                <h4>Program Sponsorship</h4>
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
                                <h4>Advertisement</h4>
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
                                <h4>Souvenir Products</h4>
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
            <div class="invisible">
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