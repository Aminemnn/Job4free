<!--          ***** Contract list  ********* -->
<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">
<head>
    <meta charset="utf-8" />
    <title>Contract list  | Job4Free</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon"  href="{{asset('FreeAssets/images/favicon.ico')}}">
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

</head>

<body>
<x-freelancer-layout>
<div class="main-content" >

    <div class="page-content" >
        <div class="container-fluid" style="position: relative;bottom: 90px;" >

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">contract List</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contracts</a></li>
                                <li class="breadcrumb-item active">contractList</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="text-uppercase fw-medium text-muted mb-0">Contracts received</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <h5 class="text-success fs-14 mb-0">

                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="{{$sum_contrat}}">0</span></h4>
                                    <span class="badge bg-warning me-1">{{$count_contrat}}</span> <span class="text-muted">Contracts received</span>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="file-text" class="text-success icon-dual-success"></i>
                                        </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="text-uppercase fw-medium text-muted mb-0">Paid Contracts</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <h5 class="text-danger fs-14 mb-0">

                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="{{$sum_paid}}">0</span></h4>
                                    <span class="badge bg-warning me-1">{{$count_paid}}</span> <span class="text-muted">Paid by clients</span>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="check-square" class="text-success icon-dual-success"></i>
                                        </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="text-uppercase fw-medium text-muted mb-0">Unpaid Contracts</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <h5 class="text-danger fs-14 mb-0">

                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="{{$sum_unpaid}}">0</span></h4>
                                    <span class="badge bg-warning me-1">{{$count_unpaid}}</span> <span class="text-muted">Unpaid by clients</span>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="clock" class="text-success icon-dual-success"></i>
                                        </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <p class="text-uppercase fw-medium text-muted mb-0">Cancelled Contracts</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <h5 class="text-success fs-14 mb-0">
                                    </h5>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h4 class="fs-22 fw-semibold ff-secondary mb-4">$<span class="counter-value" data-target="{{$sum_cancel}}">0</span></h4>
                                    <span class="badge bg-warning me-1">{{$count_cancel}}</span> <span class="text-muted">Cancelled by clients</span>
                                </div>
                                <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-light rounded fs-3">
                                            <i data-feather="x-octagon" class="text-success icon-dual-success"></i>
                                        </span>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div> <!-- end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card" id="invoiceList">
                        <div class="card-header border-0">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title mb-0 flex-grow-1">Contracts</h5>
                            </div>
                        </div>
                        <div class="card-body bg-soft-light border border-dashed border-start-0 border-end-0">
                            <form>
                                <div class="row g-3">
                                    <div class="col-xxl-5 col-sm-12">
                                        <div class="search-box">
                                            <input type="text" class="form-control search bg-light border-light" placeholder="Search for customer, email, country, status or something...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-4">
                                        <input type="text" class="form-control bg-light border-light" id="datepicker-range" placeholder="Select date">
                                    </div>
                                    <!--end col-->
                                    <div class="col-xxl-3 col-sm-4">
                                        <div class="input-light">
                                            <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                                <option value="">Status</option>
                                                <option value="all" selected>All</option>
                                                <option value="Unpaid">Unpaid</option>
                                                <option value="Paid">Paid</option>
                                                <option value="Cancel">Cancel</option>
                                                <option value="Refund">Refund</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-xxl-1 col-sm-4">
                                        <button type="button" class="btn btn-primary w-100" onclick="SearchData();">
                                            <i class="ri-equalizer-fill me-1 align-bottom"></i> Filters
                                        </button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="table-responsive table-card">
                                    <table class="table align-middle table-nowrap" id="invoiceTable">
                                        <thead class="text-muted">
                                        <tr>
                                            <th class="sort text-uppercase" data-sort="invoice_id">ID</th>
                                            <th class="sort text-uppercase" data-sort="customer_name">Customer</th>
                                            <th class="sort text-uppercase" data-sort="email">Email</th>
                                            <th class="sort text-uppercase" data-sort="country">Country</th>
                                            <th class="sort text-uppercase" data-sort="date">Date</th>
                                            <th class="sort text-uppercase" data-sort="invoice_amount">Amount</th>
                                            <th class="sort text-uppercase" data-sort="status">Payment Status</th>
                                            <th class="sort text-uppercase" data-sort="action">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all" id="invoice-list-data">
                                        @foreach($contract as $contract)
                                        <tr >
                                            <td class="id">
                                                <a href="javascript:void(0);" onclick="ViewInvoice(this);" class="fw-medium link-primary"> {{$contract->legal}} </a>
                                            </td>
                                            <td class="customer_name">
                                                <div class="d-flex align-items-center">
                                                     {{$contract->name_client}}
                                                </div>
                                            </td>
                                            <td  class="email">
                                                {{$contract->email_client}}
                                            </td>
                                            <td class="country">
                                                {{$contract->country_client}}
                                            </td>
                                            <td  class="date">
                                                {{$contract->created_at}}
                                            </td>
                                            <td class="invoice_amount">{{$contract->total_amount}}</td>
                                            <td class="status">
                                                <span class="badge badge-soft-success text-uppercase">{{$contract->payement_status}}</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <button class="dropdown-item"  onclick="ViewInvoice(this);" data-id="25000351">
                                                                <a href="{{route('contratdetail',['id'=>$contract->id])}}"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View</a>
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <button class="dropdown-item" href="javascript:void(0);" onclick="EditInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="javascript:void(0);">
                                                                <i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                Download
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn" href="javascript:void(0);" data-bs-toggle="modal" data-bs-toggle="modal" href="#deleteOrder">
                                                                <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Cancel
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ contracts We did not find any contract for you search.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
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
                            <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-labelledby="deleteOrderLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body p-5 text-center">
                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                            <div class="mt-4 text-center">
                                                <h4>You are about to cancel a contract ?</h4>
                                                <p class="text-muted fs-15 mb-4">Cnaceling your contract will remove all of your contract information from our database and we inform customer.</p>
                                                <div class="hstack gap-2 justify-content-center remove">
                                                    <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                    <button class="btn btn-danger" id="delete-record">Yes, cancel It</button>
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

        </div><!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> ©Job4Free
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Job4Free
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

<!--preloader-->

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
<script src="{{asset('FreeAssets/js/app.js')}}"></script>
</body>

</html>
