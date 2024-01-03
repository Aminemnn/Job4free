<!-- Proposal history page -->
<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">


<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 04:14:23 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Proposal history</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('FreeAssets/images/favicon.ico')}}">

    <!-- plugin css -->
    <link href="{{asset('FreeAssets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{asset('FreeAssets/js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('FreeAssets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('FreeAssets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('FreeAssets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{asset('FreeAssets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<x-freelancer-layout>
<!-- Begin page -->
<div id="layout-wrapper" >
    <div class="main-content">

        <div class="page-content">
            <!-- container-fluid -->
            <div class="container-fluid" style="position: relative;bottom: 160px">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Proposals</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">page1</a></li>
                                    <li class="breadcrumb-item active">to page 2</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" id="orderList">
                            <div class="card-header border-0">
                                <div class="row align-items-center gy-3">
                                    <div class="col-sm">
                                        <h5 class="card-title mb-0">Proposals History</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body border border-dashed border-end-0 border-start-0">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-xxl-5 col-sm-6">
                                            <div class="search-box">
                                                <input type="text" class="form-control search"  id="myInput" onkeyup="myFunction()" placeholder="Search for Proposal ID, customer, status or date " >
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->

                                        <!--end col-->

                                        <!--end col-->

                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <div class="card-body pt-0">
                                <div>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active All py-3" data-bs-toggle="tab" id="All" href="#home1" role="tab" aria-selected="false" onclick="orders()" >
                                                <i class="ri-store-2-fill me-1 align-bottom"></i> All Orders
                                            </a>
                                        </li>
                                        <li class="nav-item" >
                                            <a class="nav-link py-3 Delivered" data-bs-toggle="tab" id="Delivered" href="#delivered" role="tab" aria-selected="false" onclick="accept()" >
                                                <i class="ri-checkbox-circle-line me-1 align-bottom"></i> Accept
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-3 Pickups" data-bs-toggle="tab" id="Pickups" href="#pickups" role="tab" aria-selected="false" onclick="progress()">
                                                <i class="ri-truck-line me-1 align-bottom"></i> In Progress <span class="badge bg-danger align-middle ms-1" id="nb_progress"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link py-3 Cancelled" data-bs-toggle="tab" id="Cancelled" href="#cancelled" role="tab" aria-selected="false" onclick="refuser()">
                                                <i class="ri-close-circle-line me-1 align-bottom"></i> Refuse
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="table-responsive table-card mb-1">
                                        <table class="table table-nowrap align-middle" id="orderTable">
                                            <thead class="text-muted table-light">
                                            <tr class="text-uppercase">
                                                <th scope="col" style="width: 25px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th class="sort" data-sort="id">Proposal ID</th>
                                                <th class="sort" data-sort="customer_name">Customer</th>
                                                <th class="sort" data-sort="product_name">Title</th>
                                                <th class="sort" data-sort="date">Order Date</th>
                                                <th class="sort" data-sort="amount">Amount</th>
                                                <th class="sort" data-sort="payment">Payment Method</th>
                                                <th class="sort" data-sort="status"> Status</th>
                                            </tr>
                                            </thead>
                                            <tbody class="list form-check-all" id="list">

                                                @foreach($proposition as $proposition)
                                                    <tr>
                                                    <th scope="row">#</th>
                                                    <td class="id" data-search="{{$proposition->id}}"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">{{$proposition->id}}</a></td>
                                                    <td class="customer_name" data-search="{{$proposition->name_user}}">{{$proposition->name_user}}</td>
                                                    <td class="product_name">{{$proposition->title_projet}}</td>
                                                    <td class="date" data-search="{{$proposition->created_at}}">{{$proposition->created_at}}</td>
                                                    <td class="amount">{{$proposition->price}}</td>
                                                    <td class="payment">{{$proposition->price_categorie}}</td>
                                                    <td class="status" data-search="{{$proposition->etat}}">
                                                          @if($proposition->etat=='Refuser')
                                                            <span class="badge badge-soft-danger text-uppercase">
                                                                Refuser <i class="fa-solid fa-x" style="margin-left: 5px"></i>
                                                            </span>
                                                            @elseif($proposition->etat=='Accept')
                                                            <span class="badge badge-soft-success text-uppercase">
                                                                Accept<i class="fa-solid fa-check" style="margin-left: 5px"></i>
                                                            </span>
                                                            @else
                                                            <span class="badge badge-soft-warning text-uppercase">
                                                                In Progress
                                                            </span>
                                                            @endif
                                                           </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <!-- Modal -->
                                <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-body p-5 text-center">
                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                <div class="mt-4 text-center">
                                                    <h4>You are about to delete a order ?</h4>
                                                    <p class="text-muted fs-15 mb-4">Deleting your order will remove all of your information from our database.</p>
                                                    <div class="hstack gap-2 justify-content-center remove">
                                                        <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                        <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end modal -->
                            </div>
                        </div>

                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
        </div>
        <!-- End Page-content -->

    </div>
    <!-- end main content-->

</div>

</x-freelancer-layout>
<!-- JAVASCRIPT -->
<script src="{{asset('FreeAssets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('FreeAssets/js/plugins.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('FreeAssets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- Vector map-->
<script src="{{asset('FreeAssets/libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/jsvectormap/maps/world-merc.js')}}"></script>

<!-- Dashboard init -->
<script src="{{asset('FreeAssets/js/pages/dashboard-analytics.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('Freeassets/js/app.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function accept() {
        $(document).ready(function() {
            $.ajax({
                url: '/accept',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    var accept='';
                    for (var i=0;i< data.length;i++) {
                       accept+= '<tr>'
                            accept+='<th scope="row">#</th>'
                            accept+='<td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">' +data[i].id +'</a></td>'
                            accept+='<td class="customer_name">' +data[i].name_user +'</td>'
                            accept+='<td class="product_name">' +data[i].title_projet +'</td>'
                            accept+='<td class="date"> '+data[i].created_at +'</td>'
                            accept+='<td class="amount">'+data[i].price +'</td>'
                            accept+='<td class="payment">'+data[i].price_categorie+'</td>'
                            accept+='<td class="status">'
                            accept+= '<span class="badge badge-soft-success text-uppercase">'+data[i].etat+'<i class="fa-solid fa-check" style="margin-left: 5px"></i></span>'
                            accept+='</td>'
                        accept+='</tr>'
                    }
                    $("#list").html(accept);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    }

</script>
<script>
    function orders(){
        $(document).ready(function() {
            $.ajax({
                url: '/all',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log("amine");
                    var accept='';
                    for (var i=0;i< data.length;i++) {
                        accept+= '<tr>'
                        accept+='<th scope="row">#</th>'
                        accept+='<td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">' +data[i].id +'</a></td>'
                        accept+='<td class="customer_name">' +data[i].name_user +'</td>'
                        accept+='<td class="product_name">' +data[i].title_projet +'</td>'
                        accept+='<td class="date"> '+data[i].created_at +'</td>'
                        accept+='<td class="amount">'+data[i].price +'</td>'
                        accept+='<td class="payment">'+data[i].price_categorie+'</td>'
                        accept+='<td class="status">'
                        if (data[i].etat=='Refuser') {
                            accept += '<span class="badge badge-soft-danger text-uppercase">' + data[i].etat + '<i class="fa-solid fa-x" style="margin-left: 5px"></span>'
                        }else if(data[i].etat=='Accept'){
                            accept+= '<span class="badge badge-soft-success text-uppercase">'+data[i].etat+'<i class="fa-solid fa-check" style="margin-left: 5px"></i></span>'
                        }else {
                            accept += '<span class="badge badge-soft-warning text-uppercase">' + data[i].etat + '</span>'
                        }
                        accept+='</td>'
                        accept+='</tr>'
                    }
                    $("#list").html(accept);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    }
</script>
<script>
    function refuser(){
        $(document).ready(function() {
            $.ajax({
                url: '/refuse',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var accept='';
                    for (var i=0;i< data.length;i++) {
                        accept+= '<tr>'
                        accept+='<th scope="row">#</th>'
                        accept+='<td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">' +data[i].id +'</a></td>'
                        accept+='<td class="customer_name">' +data[i].name_user +'</td>'
                        accept+='<td class="product_name">' +data[i].title_projet +'</td>'
                        accept+='<td class="date"> '+data[i].created_at +'</td>'
                        accept+='<td class="amount">'+data[i].price +'</td>'
                        accept+='<td class="payment">'+data[i].price_categorie+'</td>'
                        accept+='<td class="status">'
                        if (data[i].etat=='Refuser') {
                            accept += '<span class="badge badge-soft-danger text-uppercase">' + data[i].etat + '<i class="fa-solid fa-x" style="margin-left: 5px"></span>'
                        }else if(data[i].etat=='Accept'){
                            accept+= '<span class="badge badge-soft-success text-uppercase">'+data[i].etat+'<i class="fa-solid fa-check" style="margin-left: 5px"></i></span>'
                        }else {
                            accept += '<span class="badge badge-soft-warning text-uppercase">' + data[i].etat + '</span>'
                        }
                        accept+='</td>'
                        accept+='</tr>'
                    }
                    $("#list").html(accept);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    }
</script>
<script>
    function progress(){
        $(document).ready(function() {
            $.ajax({
                url: '/progress',
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    var accept='';
                    for (var i=0;i< data.length;i++) {
                        accept+= '<tr>'
                        accept+='<th scope="row">#</th>'
                        accept+='<td class="id"><a href="apps-ecommerce-order-details.html" class="fw-medium link-primary">' +data[i].id +'</a></td>'
                        accept+='<td class="customer_name">' +data[i].name_user +'</td>'
                        accept+='<td class="product_name">' +data[i].title_projet +'</td>'
                        accept+='<td class="date"> '+data[i].created_at +'</td>'
                        accept+='<td class="amount">'+data[i].price +'</td>'
                        accept+='<td class="payment">'+data[i].price_categorie+'</td>'
                        accept+='<td class="status">'
                        if (data[i].etat=='Refuser') {
                            accept += '<span class="badge badge-soft-danger text-uppercase">' + data[i].etat + '<i class="fa-solid fa-x" style="margin-left: 5px"></span>'
                        }else if(data[i].etat=='Accept'){
                            accept+= '<span class="badge badge-soft-success text-uppercase">'+data[i].etat+'<i class="fa-solid fa-check" style="margin-left: 5px"></i></span>'
                        }else {
                            accept += '<span class="badge badge-soft-warning text-uppercase">' + data[i].etat + '</span>'
                        }
                        accept+='</td>'
                        accept+='</tr>'
                    }
                    $("#list").html(accept);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });
    }
</script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: '/nb-progress',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
              document.getElementById('nb_progress').innerHTML=data;
            }
        });
    });
</script>
<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("list");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td_id = tr[i].querySelector('td.id');
            td_customer = tr[i].querySelector('td.customer_name');
            td_status = tr[i].querySelector('td.status');
            td_date = tr[i].querySelector('td.date');
            if (td_id || td_customer || td_status || td_date) {
                txtValue_id = td_id.getAttribute('data-search');
                txtValue_customer = td_customer.textContent || td_customer.innerText;
                txtValue_status = td_status.textContent || td_status.innerText;
                txtValue_date = td_date.getAttribute('data-search');
                txtValue = txtValue_id + txtValue_customer + txtValue_status + txtValue_date;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 04:14:23 GMT -->
</html>
