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
                 <title>Anchor</title>
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
                            <div class="page-content container-fluid">



                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newAnchorModal" data-whatever="@mdo" style=" margin-bottom: 10px;"><i class="fa fa-plus"></i>  New Anchor</button>

                                <div class="modal fade" id="newAnchorModal" tabindex="-1" role="dialog" aria-labelledby="anchorModalLabel1">
                                    <div class="modal-dialog modal modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="anchorModalLabel1">Anchor Details:</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>

                                            <div class="modal-body">
                                                <form method="post" action="{{ route('anchor.store') }}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="anchor-fname" class="control-label">First Name:</label>
                                                                <input type="text" class="form-control" name="anchor_fname">
                                                            </div>


                                                        </div>

                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="anchor-lname" class="control-label">Last Name:</label>
                                                                <input type="text" class="form-control" name="anchor_lname">
                                                            </div>
                                                        </div>


                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="anchor-email" class="control-label">Email:</label>
                                                                <input type="email" class="form-control" name="anchor_email">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="form-group">
                                                                <label for="anchor-cnumber" class="control-label">Contact No.:</label>
                                                                <input type="tel" class="form-control" name="anchor_cnumber">
                                                            </div>


                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="anchor-bdate" class="control-label">Birthdate:</label>
                                                                <input type="date" class="form-control" value="2018-05-13" name="anchor_bdate">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="anchor-sex" class="control-label">Sex:</label>
                                                                <div class="btn-group" data-toggle="buttons">

                                                                    <label class="btn btn-primary">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="radioSexM" name="radioSex" class="custom-control-input" value="male">
                                                                            <label class="custom-control-label" for="radioSexM">Male</label>
                                                                        </div>
                                                                    </label>
                                                                    <label class="btn btn-primary">
                                                                        <div class="custom-control custom-radio">
                                                                            <input type="radio" id="radioSexF" name="radioSex" class="custom-control-input" value="female">
                                                                            <label class="custom-control-label" for="radioSexF">Female</label>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-success" value="Add">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- Start Page Content -->
                                <!-- ============================================================== -->
                                @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                                @endif


                                <!-- order table -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="material-card card">
                                            <div class="card-body">
                                                <h4 class="card-title">List of Anchors</h4>
                                                <h6 class="card-subtitle"></h6>
                                                <div class="table-responsive">
                                                    <table id="default_order" class="table table-striped border display" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Email</th>
                                                                <th>Contact Number</th>
                                                                <th>Birthdate</th>
                                                                <th>Sex</th>
                                                                <th>Status</th>
                                                                <th>Manage</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($anchors as $anchors)
                                                            <tr>
                                                                <td>
                                                                    {{$anchors->anchor_fname}}
                                                                </td>
                                                                <td>
                                                                    {{$anchors->anchor_lname}}
                                                                </td>
                                                                <td>
                                                                    {{$anchors->anchor_email}}
                                                                </td>
                                                                <td>
                                                                    {{$anchors->anchor_cnumber}}
                                                                </td>
                                                                <td>
                                                                    {{$anchors->anchor_bdate}}
                                                                </td>
                                                                <td>
                                                                    {{$anchors->anchor_sex}}
                                                                </td>
                                                                <td>
                                                                    {{$anchors->anchor_status}}
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#anchorModal{{$anchors->anchor_id}}" data-whatever="{{$anchors->anchor_id}}">  View</button>
                                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#anchorModalInac{{$anchors->anchor_id}}" data-whatever="{{$anchors->anchor_id}}">  Mark Inactive</button>

                                                                    <div class="modal fade" id="anchorModalInac{{$anchors->anchor_id}}" tabindex="-1" role="dialog">
                                                                        <div class="modal-dialog modal modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="anchorModalInacLabel{{$anchors->anchor_id}}">Inactive Anchor:</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <form method="POST" action="{{ route('anchor.inactive', $anchors->anchor_id) }}">
                                                                                        @method('PATCH')
                                                                                        @csrf

                                                                                        <div>Are you sure you want to mark this anchor inactive?</div>

                                                                                        <input type="submit" class="btn btn-danger" value="Inactive">
                                                                                    </form>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>

                                                                    <div class="modal fade" id="anchorModal{{$anchors->anchor_id}}" tabindex="-1" role="dialog" aria-labelledby="anchorModalLabel{{$anchors->anchor_id}}">
                                                                        <div class="modal-dialog modal modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title" id="anchorModalLabel{{$anchors->anchor_id}}">Anchor Details:</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                </div>

                                                                                <div class="modal-body">
                                                                                    <form method="POST" action="{{ route('anchor.update', $anchors->anchor_id) }}">
                                                                                        @method('PATCH')
                                                                                        @csrf
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-fname" class="control-label">First Name:</label>
                                                                                                    <input type="text" class="form-control" name="anchor_fname" value="{{$anchors->anchor_fname}}">
                                                                                                </div>


                                                                                            </div>

                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-lname" class="control-label">Last Name:</label>
                                                                                                    <input type="text" class="form-control" name="anchor_lname" value="{{$anchors->anchor_lname}}">
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-email" class="control-label">Email:</label>
                                                                                                    <input type="email" class="form-control" name="anchor_email" value="{{$anchors->anchor_email}}">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-md-8">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-cnumber" class="control-label">Contact No.:</label>
                                                                                                    <input type="tel" class="form-control" name="anchor_cnumber" value="{{$anchors->anchor_cnumber}}">
                                                                                                </div>


                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-bdate" class="control-label">Birthdate:</label>
                                                                                                    <input type="date" class="form-control" value="{{$anchors->anchor_bdate}}" name="anchor_bdate">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        @if ($anchors->anchor_sex == 'Male')
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-sex" class="control-label">Sex:</label>
                                                                                                    <div class="btn-group" data-toggle="buttons">

                                                                                                        <label class="btn btn-primary active">
                                                                                                            <div class="custom-control custom-radio">
                                                                                                                <input type="radio" id="radioSexM" name="radioSex" class="custom-control-input" value="male"checked>
                                                                                                                <label class="custom-control-label" for="radioSexM">Male</label>
                                                                                                            </div>
                                                                                                        </label>
                                                                                                        <label class="btn btn-primary">
                                                                                                            <div class="custom-control custom-radio">
                                                                                                                <input type="radio" id="radioSexF" name="radioSex" class="custom-control-input" value="female">
                                                                                                                <label class="custom-control-label" for="radioSexF">Female</label>
                                                                                                            </div>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        @else
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-sex" class="control-label">Sex:</label>
                                                                                                    <div class="btn-group" data-toggle="buttons">

                                                                                                        <label class="btn btn-primary">
                                                                                                            <div class="custom-control custom-radio">
                                                                                                                <input type="radio" id="radioSexM" name="radioSex" class="custom-control-input" value="male">
                                                                                                                <label class="custom-control-label" for="radioSexM">Male</label>
                                                                                                            </div>
                                                                                                        </label>
                                                                                                        <label class="btn btn-primary active">
                                                                                                            <div class="custom-control custom-radio">
                                                                                                                <input type="radio" id="radioSexF" name="radioSex" class="custom-control-input" value="female"checked>
                                                                                                                <label class="custom-control-label" for="radioSexF">Female</label>
                                                                                                            </div>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        @endif

                                                                                        @if ($anchors->anchor_status == 'Active')

                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-status" class="control-label">Status:</label>
                                                                                                    <input type="checkbox" class="" name="anchor_status" checked> Active
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        @else
                                                                                        <div class="row">
                                                                                            <div class="col-md-5">
                                                                                                <div class="form-group">
                                                                                                    <label for="anchor-status" class="control-label">Status:</label>
                                                                                                    <input type="checkbox" class="" name="anchor_status"> Active
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        @endif

                                                                                    </div>


                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                        <input type="submit" class="btn btn-success" value="Edit">
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            @endforeach

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th>First Name</th>
                                                                <th>Last Name</th>
                                                                <th>Email</th>
                                                                <th>Contact Number</th>
                                                                <th>Birthdate</th>
                                                                <th>Sex</th>
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

                        </div>
                        <!-- ============================================================== -->
                        <!-- End Container fluid  -->

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


                        </html>
