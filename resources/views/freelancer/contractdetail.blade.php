<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contract details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('FreeAssets/images/favicon.ico>')}}">
    <script src="{{asset('FreeAssets/js/layout.js')}}"></script>
    <link href="{{asset('FreeAssets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('FreeAssets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('FreeAssets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('FreeAssets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Contract details</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row justify-content-center">
        <div class="col-xxl-9">
            <div class="card" id="demo">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header border-bottom-dashed p-4">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="mt-sm-5 mt-4">
                                        <h6 class="text-muted text-uppercase fw-semibold">Address</h6>
                                        <p class="text-muted mb-1" id="address-details">{{$contrat->first()->adresse_client}}</p>
                                        <p class="text-muted mb-0" id="zip-code"><span>Zip-code:</span>{{$contrat->first()->code_postal_client}}</p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0 mt-sm-0 mt-3">
                                    <h6><span class="text-muted fw-normal">Legal Registration No:</span><span id="legal-register-no">{{$contrat->first()->legal}}</span></h6>
                                    <h6><span class="text-muted fw-normal">Email:</span><span id="email">{{$contrat->first()->email_client}}</span></h6>
                                    <h6><span class="text-muted fw-normal">Website:</span> <a href="https://themesbrand.com/" class="link-primary" target="_blank" id="website">{{$contrat->first()->web_site_client}}</a></h6>
                                    <h6 class="mb-0"><span class="text-muted fw-normal">Contact No: </span><span id="contact-no">{{$contrat->first()->phone_client}}</span></h6>
                                </div>
                            </div>
                        </div>
                        <!--end card-header-->
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="row g-3">
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">contract No</p>
                                    <h5 class="fs-14 mb-0">#VL<span id="invoice-no">{{$contrat->first()->num_facture}}</span></h5>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Date</p>
                                    <h5 class="fs-14 mb-0"><span id="invoice-date">{{$contrat->first()->date}}</span> <small class="text-muted" id="invoice-time">02:36PM</small></h5>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Payment Status</p>
                                    <span class="badge badge-soft-success fs-11" id="payment-status">{{$contrat->first()->payement_status}}</span>
                                </div>
                                <!--end col-->
                                <div class="col-lg-3 col-6">
                                    <p class="text-muted mb-2 text-uppercase fw-semibold">Total Amount</p>
                                    <h5 class="fs-14 mb-0">$<span id="total-amount">{{$contrat->first()->total_amount}}</span></h5>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4 border-top border-top-dashed">
                            <div class="row g-3">
                                <div class="col-6">
                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Client Address</h6>
                                    <p class="fw-medium mb-2" id="billing-name">{{$contrat->first()->name_client}}</p>
                                    <p class="text-muted mb-1" id="billing-address-line-1">{{$contrat->first()->adresse_client}}</p>
                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="billing-phone-no">{{$contrat->first()->phone_client}}</span></p>
                                    <p class="text-muted mb-0"><span>Country </span><span id="billing-tax-no">{{$contrat->first()->country_client}}</span> </p>
                                    <p class="text-muted mb-0"><span>Ville </span><span id="billing-tax-no">{{$contrat->first()->ville_client}}</span> </p>
                                </div>

                                <div class="col-6">
                                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Freelancer Address</h6>
                                    <p class="fw-medium mb-2" id="shipping-name">{{$contrat->first()->name_freelancer}}</p>
                                    <p class="text-muted mb-1" id="shipping-address-line-1">{{$contrat->first()->adresse_freelancer}}</p>
                                    <p class="text-muted mb-1"><span>Phone: +</span><span id="shipping-phone-no">{{$contrat->first()->phone_freelancer}}</span></p>
                                    <p class="text-muted mb-0"><span>Country </span><span id="billing-tax-no">{{$contrat->first()->country_freelancer}}</span> </p>
                                    <p class="text-muted mb-0"><span>Ville </span><span id="billing-tax-no">{{$contrat->first()->ville_freelancer}}</span> </p>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-lg-12">
                        <div class="card-body p-4">
                            <div class="table-responsive">
                                <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                    <thead>
                                    <tr class="table-active">

                                        <th scope="col">Project details </th>
                                        <th scope="col">Categoery</th>
                                        <th scope="col">Sub Category</th>
                                        <th scope="col" class="text-end">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody id="products-list">
                                    <tr>

                                        <td class="text-start">
                                            <span class="fw-medium">{{$contrat->first()->title_projet}}</span>
                                            <p class="text-muted mb-0">{{$contrat->first()->price_categorie}}</p>
                                            <p class="text-muted mb-0">@if($contrat->first()->semaine==null) Date: {{$contrat->first()->data}}@else Weeks : {{$contrat->first()->semaine}}@endif</p>
                                        </td>
                                        <td>{{$contrat->first()->categorie}}</td>
                                        <td>{{$contrat->first()->sous_categorie}}</td>
                                        <td class="text-end">{{$contrat->first()->price}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>
                            <div class="border-top border-top-dashed mt-2">
                                <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                    <tbody>
                                    <tr>
                                        <td>Sub Total</td>
                                        <td class="text-end">{{$contrat->first()->total_amount}}</td>
                                    </tr>
                                    <tr>
                                        <td>deadline</td>
                                        <td class="text-end">@if($contrat->first()->semaine==null){{$contrat->first()->data}}@else After {{$contrat->first()->semaine}} Weeks @endif</td>
                                    </tr>
                                    <tr>
                                        <td>paiment type</td>
                                        <td class="text-end">{{$contrat->first()->payment_details}}</td>
                                    </tr>
                                    <tr class="border-top border-top-dashed fs-15">
                                        <th scope="row">Total Amount</th>
                                        <th class="text-end">{{$contrat->first()->total_amount}}</th>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--end table-->
                            </div>
                            <div class="mt-3">
                                <h6 class="text-muted text-uppercase fw-semibold mb-3">Payment Details:</h6>
                                <p class="text-muted mb-1">Payment Method: <span class="fw-medium" id="payment-method">{{$contrat->first()->payment_details}}</span></p>
                                <p class="text-muted mb-1">Card Holder: <span class="fw-medium" id="card-holder-name">{{$contrat->first()->card_holder_name}}</span></p>
                                <p class="text-muted mb-1">Card Number: <span class="fw-medium" id="card-number">{{$contrat->first()->number_card}}</span></p>
                                <p class="text-muted">Total Amount: <span class="fw-medium" id="">$ </span><span id="card-total-amount">{{$contrat->first()->total_amount}}</span></p>
                            </div>
                            <div class="mt-4">
                                <div class="alert alert-info">
                                    <p class="mb-0"><span class="fw-semibold">NOTES:</span>
                                        <span id="note">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or
                                                            credit card or direct payment online. If account is not paid within 7
                                                            days the credits details supplied as confirmation of work undertaken
                                                            will be charged the agreed quoted fee noted above.
                                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="hstack gap-2 justify-content-end d-print-none mt-4">
                                <a href="javascript:window.print()" class="btn btn-success"><i class="ri-printer-line align-bottom me-1"></i> Print</a>
                                <a href="javascript:void(0);" class="btn btn-primary"><i class="ri-download-2-line align-bottom me-1"></i> Download</a>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div><!--end col-->
                </div><!--end row-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

</div>
<script src="{{asset('FreeAssets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('FreeAssets/js/plugins.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/invoicedetails.js')}}"></script>
<script src="{{asset('FreeAssets/js/app.js')}}"></script>
</body>
</html>
