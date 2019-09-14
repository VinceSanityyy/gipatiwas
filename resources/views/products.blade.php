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
    <title>Products</title>
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
                <button style="float: right" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Register New Product</button>
                <br><br><br>
                <table id="productsTable" class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">Product ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">Supplier</th>
                      <th scope="col">Description</th>
                      <th scope="col">Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Actions</th>

                  </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td>{{$product->product_name}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->price}}</td>
                  <td>{{$product->quantity}}</td>
                  <td>


                    <button id="{{$product->id}}"  class="btn btn-warning editButton" data-toggle="modal" data-target="#exampleModalCenter_edit"><i class="fa fa-edit"></i></button>
                     <button id="{{$product->id}}" class="btn btn-danger delete-data"  data-toggle="modal" data-target="#exampleModalCenter_delete"><i class="fa fa-trash"></i></button>
                     <button id="{{$product->id}}" class="btn btn-success addQty" data-toggle="modal" data-target="#exampleModalCenter_qty"><i class="fa fa-plus"></i></button>
                     <button id="{{$product->id}}" class="btn btn-info addDmg" data-toggle="modal" data-target="#exampleModalCenter_dmg"><i class="fa fa-minus"></i></button>
                  </td>
                     @endforeach
              </tr>
                </tbody>
              </table>
            </div>

                  {{-- add to damaged --}}
                  <div class="modal fade" id="exampleModalCenter_dmg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalCenterTitle">Add to damaged products</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                            <p style="font-weight: bold;">Number of damaged products</p>
                              <input    type="text" class="form-control" id="remove_quantity"/>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-success" id="addtoDmg">Update</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    {{-- damaged --}}

             <!-- modal create -->
             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Register New Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p style="font-weight: bold;">Name </p>
                          <input   type="text" class="form-control" id="product_name"/>
                          <p style="font-weight: bold;">Description </p>
                          <input   type="text" class="form-control" id="description"/>
                          <p style="font-weight: bold;">Supplier </p>
                          {{-- <input style="text-transform:uppercase"   type="text" class="form-control" id="supplier_id"/> --}}
                          <select class="form-control"  id="supplier_id"  >
                              @foreach ($suppliers as $supplier)
                          <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                              @endforeach
                              </select>
                              <p style="font-weight: bold;">Price </p>
                              <input   type="text" class="form-control" id="price"/>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" id="add_product">Add</button>
                        </div>
                      </div>
                    </div>
                  </div>
              <!-- modal -->
            </div>
                   <!-- delete -->
            <div class="modal fade bd-example-modal-sm" id="exampleModalCenter_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  </div>
                  <!-- delete -->

            </div>
                    {{-- edit --}}
            <div class="modal fade" id="exampleModalCenter_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Edit Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p style="font-weight: bold;">New Name </p>
                          <input    type="text" class="form-control" id="update_product"/>
                          <p style="font-weight: bold;">New Description </p>
                          <input    type="text" class="form-control" id="update_description"/>
                          <p style="font-weight: bold;">New Supplier </p>

                          <select class="form-control"  id="update_supplier"  >
                                @foreach ($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                                </select>
                                <p style="font-weight: bold;">New Price </p>
                                <input   type="text" class="form-control" id="update_price"/>
                        </div>


                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success" id="edit_product">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- edit --}}

            </div>


                             {{-- add qty --}}
            <div class="modal fade" id="exampleModalCenter_qty" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalCenterTitle">Add Quantity</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <p style="font-weight: bold;">Enter Quantity to be added</p>
                          <input    type="text" class="form-control" id="add_quantity"/>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success" id="stockIn">Update</button>
                        </div>
                      </div>
                    </div>
                  </div>
                {{-- add qty --}}









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
                //add
                $('#add_product').click(function(e){
                    e.preventDefault();
                    var name = $('#product_name').val();
                    var description = $('#description').val();
                    var price = $('#price').val();
                    var supplier_id = $('#supplier_id').val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: "{{    url('/product')     }}",
                        method: 'post',
                        data:{
                            product_name: name,
                            description: description,
                            price: price,
                            supplier_id: supplier_id
                        },
                        success: function (res){
                            console.log(res);
                            window.location.href = '{{route("product.index")}}'
                        }
                    });

                });
                //add

                     // delete
                     $('.delete-data').click(function(e) {
                    e.preventDefault();
                    const myValue = $(this).attr('id');


                    $('#delete-button').click(function(e) {
                        $.ajaxSetup({
                          headers:{
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                        $.ajax({
                          url: "{{ url('/product') }}" + '/'+ myValue,
                          type: 'DELETE',
                          data: {},
                          success: function(res){
                           window.location.href='{{route("product.index")}}';
                       }
                       });
                    });
                 });

                // delete

                //edit
                $('.editButton').on('click',function(e){

                    const myValue = $(this).attr('id');

                      let pname = $(this).closest('tr').find('td:eq(1)').text();
                      let sname = $(this).closest('tr').find('td:eq(2)').text();
                      let des = $(this).closest('tr').find('td:eq(3)').text();
                      let pr = $(this).closest('tr').find('td:eq(4)').text();

                      $('#update_product').val(pname);
                      $('#update_description').val(des);
                      $('#update_supplier').val(sname);
                      $('#update_price').val(pr);


                      $('#edit_product').click(function(e){
                        e.preventDefault();

                        let product_name = $('#update_product').val();
                        let description = $('#update_description').val();
                        let supplier_id = $('#update_supplier').val();
                        let price = $('#update_price').val();
                        console.log(name);
                        $.ajaxSetup({
                            headers:{
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "{{url('/product')}}" + '/'+ myValue,
                            method: 'put',
                            data: {
                                product_name: product_name,
                                description: description,
                                supplier_id: supplier_id,
                                price: price
                            },
                            success: function(res){
                                console.log(this.data);
                                window.location.href = "{{route('product.index')}}"
                            }
                        });

                      });


                });

                     //addqty
            $('.addQty').on('click', function(e) {
 			 	const myValue = $(this).attr('id');


 			 	$('#add_quantity').val();


 			 	 $('#stockIn').click(function(e) {
 			 	 	e.preventDefault();

 			 	 	let quantity = $('#add_quantity').val();

 			 	 	$.ajaxSetup({
 			 		headers:{
 			 				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 			 			}
 			 		});

 			 		$.ajax({
 			 			url: "{{ url('/addStocks') }}" + '/'+ myValue,
 			 			method: 'put',
 			 			data: {
 			 				quantity: quantity
 			 			},
 			 			success: function(res){
                            console.log(res);
 			 				 window.location.href='{{route("product.index")}}';
 			 			}
 			 		})

 			 	 });
              });
              //

                       //addDmg
            $('.addDmg').on('click', function(e) {
 			 	const myValue = $(this).attr('id');


 			 	$('#remove_quantity').val();


 			 	 $('#addtoDmg').click(function(e) {
 			 	 	e.preventDefault();

 			 	 	let quantity = $('#remove_quantity').val();

 			 	 	$.ajaxSetup({
 			 		headers:{
 			 				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 			 			}
 			 		});

 			 		$.ajax({
 			 			url: "{{ url('/addDamage') }}" + '/'+ myValue,
 			 			method: 'put',
 			 			data: {
 			 				quantity: quantity
 			 			},
 			 			success: function(res){
                            console.log(res);
 			 				 window.location.href='{{route("product.index")}}';
 			 			}
 			 		})

 			 	 });
              });


            });

            </script>









            <script>
                    $(document).ready(function() {
                        $('#productsTable').DataTable();
                    } );
                </script>


            </html>
