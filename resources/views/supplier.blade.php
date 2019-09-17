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
    <title>Supplier</title>
    <!-- chartist CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="dist/js/pages/chartist/chartist-init.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--morris CSS -->
    <link href="assets/libs/morris.js/morris.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

    <!-- needed css -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                <a href="{{ route('suppliers') }}" class="sidebar-link">
                                    <i class="mdi mdi-adjust"></i>
                                    <span class="hide-menu"> Suppliers </span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('damages') }}" class="sidebar-link">
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

                 <button style="float: right;" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                     Add Supplier
                </button>

                <br><br><br>
                <table id="suppliersTable" class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col"> ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Address</th>
                      <th scope="col">Contact Number</th>
                      <th scope="col">Email</th>
                      <th scope="col">Status</th>
                      <th scope="col">Actions</th>


                  </tr>
              </thead>
              <tbody>
                @foreach($suppliers as $supplier)
                <tr>
                  <td>{{$supplier->id}}</td>
                  <td>{{$supplier->name}}</td>
                  <td>{{$supplier->address}}</td>
                  <td>{{$supplier->contact}}</td>
                  <td>{{$supplier->email}}</td>
                  <td>{{$supplier->status}}</td>
                  <td>


                     <button id="{{$supplier->id}}"  class="btn btn-warning editButton" data-toggle="modal" data-target="#exampleModalCenter_edit"><i class="fa fa-edit"></i></button>
                  <!--    <button id="{{$supplier->id}}" class="btn btn-danger delete-data"  data-toggle="modal" data-target="#exampleModalCenter_delete"><i class="fa fa-trash"></i></button> -->
                  </td>
                     @endforeach
              </tr>
                </tbody>
              </table>
        </div>

        <!-- modal create -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Supplier</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <p style="font-weight: bold;">Name </p>
                        <input    type="text" class="form-control" id="supplier"/>
                          <p style="font-weight: bold;">Address </p>
                        <input    type="text" class="form-control" id="address"/>
                          <p style="font-weight: bold;">Contact Number </p>
                        <input    type="text" class="form-control" id="contact"/>
                          <p style="font-weight: bold;">Email </p>
                        <input    type="email" class="form-control" id="email"/>
                       
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="add_supplier">Add</button>
                      </div>
                    </div>
                  </div>
                </div>
            <!-- modal -->

            <!-- delete -->
      <!--       <div class="modal fade bd-example-modal-sm" id="exampleModalCenter_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                <p style="font-weight: bold; text-align: center;"> Do you want to delete? </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-danger" id="delete-button">Delete</button>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- delete -->

            {{-- edit --}}
            <div class="modal fade" id="exampleModalCenter_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Edit Supplier</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <p style="font-weight: bold;">Name </p>
                        <input    type="text" class="form-control" id="update_supplier"/>
                    <p style="font-weight: bold;">Address </p>
                        <input    type="text" class="form-control" id="update_address"/>
                    <p style="font-weight: bold;">Contact Number </p>
                       <input    type="text" class="form-control" id="update_contact"/>
                    <p style="font-weight: bold;">Email </p>
                        <input   type="email" class="form-control" id="update_email"/>
                         <p style="font-weight: bold;">Status </p>  
                    <select class="form-control" id="update_status">

                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                    
                    </select>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-success" id="edit_supplier">Update</button>
                    </div>
                  </div>
                </div>
              </div>
              {{-- edit --}}


            <footer class="footer text-center">
                All Rights Reserved by Ample admin. Designed and Developed by
                <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>

        </div>

    </div>


            <div class="chat-windows"></div>

            <!-- ============================================================== -->
            <!-- All Jquery -->
            <!-- ============================================================== -->

        {{-- datatables --}}
           <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
         {{-- datatables --}}



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



            <script type="text/javascript">

            $(document).ready(function(){
                // add
                $('#add_supplier').click(function(e){
                    e.preventDefault();
                    var input = $('#supplier').val();

                    var input_email = $('#email').val();
                    var input_contact = $('#contact').val();
                    var input_address = $('#address').val();


                    $.ajaxSetup({
                        headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{    url('/supplier')    }}",
                        method: 'post',
                        data: {
                            name: input,
                            contact: input_contact,
                            address: input_address,
                            email: input_email,
                            status: 'active'
                        },
                        success: function (res){
                            console.log(res);
                            window.location.href = '{{route("suppliers")}}';
                        }
                    });
                });
                // add



                // delete 
                // UPDATED: REMOVED DELETE FUNCTIONALITY

                // $('.delete-data').click(function(e) {
                //     e.preventDefault();
                //     const myValue = $(this).attr('id');


                //     $('#delete-button').click(function(e) {
                //         $.ajaxSetup({
                //           headers:{
                //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //         }
                //     });

                //         $.ajax({
                //           url: "{{ url('/supplier') }}" + '/'+ myValue,
                //           type: 'DELETE',
                //           data: {},
                //           success: function(res){
                //            window.location.href='{{route("suppliers")}}';
                //        }
                //        });
                //     });
                //  });

                // delete

                 //edit
                $('.editButton').on('click', function(e) {
                const myValue = $(this).attr('id');


                let curr_name = $(this).closest('tr').find('td:eq(1)').text();
                let curr_address = $(this).closest('tr').find('td:eq(2)').text();
                let curr_contact = $(this).closest('tr').find('td:eq(3)').text();
                let curr_email = $(this).closest('tr').find('td:eq(4)').text();
                let curr_status = $(this).closest('tr').find('td:eq(5)').text();

                $('#update_supplier').val(curr_name);
                $('#update_address').val(curr_address);
                $('#update_contact').val(curr_contact);
                $('#update_email').val(curr_email);
                $('#update_status').val(curr_status);


                 $('#edit_supplier').click(function(e) {
                    e.preventDefault();

                    let new_name = $('#update_supplier').val();
                    let new_address = $('#update_address').val();
                    let new_contact = $('#update_contact').val();
                    let new_email = $('#update_email').val();
                    let new_status = $('#update_status').val();

                    $.ajaxSetup({
                    headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{ url('/supplier') }}" + '/'+ myValue,
                        method: 'put',
                        data: {
                            name: new_name,
                            address: new_address,
                            contact: new_contact,
                            email: new_email,
                            status: new_status
                        },
                        success: function(res){
                             window.location.href='{{route("suppliers")}}';
                        }
                    })

                 });
              });

              //edit


            });



            </script>

            <script>
                $(document).ready(function() {
                    $('#suppliersTable').DataTable();
                } );
            </script>



            </html>
