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
    <title>Inventory</title>
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
                                    <a class="dropdown-item" href="{{ route('logout') }}"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
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
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="page-content container-fluid">


  <div class="row" id="topmostBanner">
    <div class="col-2">
      User Info
    </div>

    <div class="col-8">
      <center>DXGN</center>
    </div>

    <div class="col-2">
      <span id="datetime"></span>

      <script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>
    </div>
  </div>

    <br>

  <div class="row" id="forOptions">
    <div class="col-4" data-toggle="modal" data-target="#itemsModal" style="cursor:pointer;">
      <img src="{{ asset('img/items.png') }}" style="width:60px;"></img><br>
      PRODUCTS
    </div>

<!-- Modal -->
<div class="modal fade" id="itemsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
               <a href="/prod" target="_blank"><button type="button" class="btn btn-primary">Add New Product</button></a>
<!--                <button type="button" class="btn btn-secondary">Add New Category</button> -->
               <br><br>
               <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">SKU</th>
                      <th scope="col">Product</th>
                      <th scope="col">Category</th>
                      <th scope="col">Information</th>
                      <th scope="col">Quantity</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </form>
      </div>
      <div class="modal-footer">
<!--         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<!--     <div class="modal fade" id="itemsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Manage Products</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

    <div class="col-4" data-toggle="modal" data-target="#customerModal" style="cursor:pointer;">
      <img src="{{ asset('img/customer.png') }}" style="width:60px;"></img><br>
      CUSTOMERS
    </div>

    <div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Customers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
        <a href="/cust" target="_blank"><button type="button" class="btn btn-primary">Add New Customer</button></a>
        <a href="/cust" target="_blank"><button type="button" class="btn btn-primary">View Customers List</button></a>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <div class="col-4" style="cursor:pointer;">
      <img src="{{ asset('img/supplier.png') }}" style="width:60px;"></img><br>
      SUPPLIERS
    </div>    
  </div>

  <br>
  <center>
  <div class="row">
    <div class="col-3" id="forForm">
        <form>
      Item Code: <input type="text" name="code">

      <br><br>
      
      Item Name: <input type="text" name="name">

      <br><br>
      
      Description: <input type="text" name="desc">

      <br><br>
      
      Category: <select name="category">
                    <option selected hidden></option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="fiat">Fiat</option>
                    <option value="audi">Audi</option>
                  </select>

      <br><br>
      
      Price: <input type="text" name="price">

      <br><br>
      
      Stock: <input type="text" name="stock">

<br><br><br>
      <input type="button" value="Edit Item">
      <input type="button" value="Delete Item">
      <input type="button" value="Cancel">
        </form>
    </div>



    <div class="col-8" id="forTable">

    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

    </div>
  </div>
</center>

                
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