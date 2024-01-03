<!-- Details page -->
<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">


<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 04:14:23 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Annonce details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('FreeAssets/images/favicon.ico')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- plugin css -->
    <link href="{{asset('FreeAssets/libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
<x-freelancer-layout>
            <!-- container-fluid -->
            <div class="card">
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div>
                                <div class="dropdown float-end">
                                    <button class="btn btn-ghost-primary btn-icon dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-fill align-middle fs-16"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                                        <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                        <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                    </ul>
                                </div>
                                <span class="badge badge-soft-info mb-3 fs-12"><i class="ri-eye-line me-1 align-bottom"></i> {{$annonce->first()->views}} people views this</span>
                                <h4>{{$annonce->first()->title}}</h4>
                                <div class="hstack gap-3 flex-wrap">
                                    <div class="text-muted">Client : <a href="{{route('userdetail',['id'=>$annonce->first()->id_user])}}" class="text-primary fw-medium">{{$annonce->first()->name_user}}</a></div>
                                    <div class="vr"></div>
                                    <div class="text-muted">Published : <span class="text-body fw-medium">{{$annonce->first()->created_at}}</span></div>

                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded text-center">
                                        <div>
                                            <p class="text-muted fw-medium mb-1">Price :</p>
                                            <h5 class="fs-17 text-success mb-0"><i class="fa-solid fa-dollar-sign" style="color: #0983b7"></i>{{$annonce->first()->price}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded text-center">
                                        <div>
                                            <p class="text-muted fw-medium mb-1">Category</p>
                                            <h5 class="fs-17 mb-0">{{$annonce->first()->catgorie}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded text-center">
                                        <div>
                                            <p class="text-muted fw-medium mb-1">Price Categorie</p>
                                            <h5 class="fs-17 mb-0">
                                                {{$annonce->first()->price_categorie}}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded text-center">
                                        <div>
                                            <p class="text-muted fw-medium mb-1">Type Price</p>
                                            <h5 id="auction-time-1" class="mb-0">{{$annonce->first()->type_price}}</h5>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!--end row-->
                            <div class="mt-4 text-muted">
                                <h5 class="fs-14">Description :</h5>
                                <p>{{$annonce->first()->description}}</p>
                            </div>
                            <div class="product-content mt-5">
                                <h5 class="fs-14 mb-3">Annonce Description : </h5>
                                <nav>
                                    <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="nav-additional-tab" data-bs-toggle="tab" href="#nav-additional" role="tab" aria-controls="nav-additional" aria-selected="false">Proposal information</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab" href="#nav-detail" role="tab" aria-controls="nav-detail" aria-selected="false">Details</a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="tab-content border border-top-0 p-4" id="nav-tabContent" style="display: contents">
                                    <div class="tab-pane fade" id="nav-additional" role="tabpanel" aria-labelledby="nav-additional-tab">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <tbody>
                                                <tr>
                                                    <th scope="row" style="width: 200px;">Number of proposal disponible : </th>
                                                    <td>{{$annonce->first()->nombre_proposition}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Rest</th>
                                                    <td>{{$annonce->first()->propostion}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Token</th>
                                                    <td>{{$annonce->first()->nombre_proposition-$annonce->first()->propostion}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Proposal</th>
                                                    <td>{{$annonce->first()->nombre_proposition-$annonce->first()->propostion}}/{{$annonce->first()->nombre_proposition}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-detail" role="tabpanel" aria-labelledby="nav-detail-tab">
                                        <div style="margin-top: 13px">
                                            <h5 class="font-size-16 mb-3">{{$annonce->first()->title}}</h5>
                                            <p>{{$annonce->first()->description}}</p>
                                            <div>
                                                <p class="mb-2"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>Category : <span style="color: #4b9bff">{{$annonce->first()->catgorie}}</span></p>
                                                <p class="mb-2"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>Sub Category : <span style="color: #4b9bff">{{$annonce->first()->sous_categorie }}</span></p>
                                                <p class="mb-2"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>Price Category : <span style="color: #4b9bff">{{$annonce->first()->price_categorie }}</span></p>
                                                <p class="mb-0"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>Price : <span style="color: #4b9bff"><i class="fa-solid fa-dollar-sign" style="color: #0983b7"></i>{{$annonce->first()->price }}</span></p>
                                                <p class="mb-0"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>Type Price :<span style="color: #4b9bff">{{$annonce->first()->type_price }}</span></p>
                                                <p class="mb-0"><i class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>Value :<span style="color: #4b9bff">@if($annonce->first()->semaine==null) {{$annonce->first()->date}}@else{{$annonce->first()->semaine}}@endif</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @php
                                $existing_order = App\Models\order::where('id_user', Auth::user()->id)
                                    ->where('id_projet',$annonce->first()->id)
                                    ->first();
                            @endphp
                               @if($annonce->first()->propostion==$annonce->first()->nombre_proposition)
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" disabled style="margin-top: 40px;width: 100%;background-color: #4b9bff;border-color: #4b9bff">
                                    Send Request
                                </button>
                                   <p class="text-danger">You Cannot Send an Offer To This Project Because its owner gets the Specified number of offers</p>
                            @elseif($existing_order)
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" disabled style="margin-top: 40px;width: 100%;background-color: #4b9bff;border-color: #4b9bff">
                                    Send Request
                                </button>
                                <p class="text-danger">You have already submitted an order for this project.</p>
                            @else
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" style="margin-top: 40px;width: 100%;background-color: #4b9bff;border-color: #4b9bff">
                                    Send Request
                                </button>
                            @endif

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" action="{{route('order.store')}}">
                                                @csrf
                                                <div class="modal-body">
                                                <input type="hidden" name="id_projet" value="{{$annonce->first()->id}}">
                                                <input type="hidden" name="title_projet" value="{{$annonce->first()->title}}">
                                                <input type="hidden" name="categorie" value="{{$annonce->first()->catgorie }}">
                                                <input type="hidden" name="sous_categorie" value="{{$annonce->first()->sous_categorie}}">
                                                <input type="hidden" name="description" value="{{$annonce->first()->description }}">
                                                <input type="hidden" name="id_user" value="{{$annonce->first()->id_user}}">

                                                    <select class="form-select" aria-label="Default select example" name="price_categorie">
                                                    <option value="{{$annonce->first()->price_categorie }}" selected>{{$annonce->first()->price_categorie }}</option>
                                                    <option value="@if($annonce->first()->price_categorie=='Fixed Price') Per /hour @else Fixed Price @endif">@if($annonce->first()->price_categorie=="Fixed Price") Per /hour @else Fixed Price @endif</option>
                                                </select>
                                                <br>
                                                <input type="number" class="form-control" name="price" id="price" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="{{$annonce->first()->price}}" data-type="currency" placeholder="$1,000,000.00">
                                                <br>
                                                <select class="form-select" aria-label="Default select example" name="type_price" id="Price_type" required onchange="change3()">
                                                    <option value="{{$annonce->first()->type_price }}" selected>{{$annonce->first()->type_price }}</option>
                                                    <option value="@if($annonce->first()->type_price=='Per semaine') Specific date @else Per semaine @endif">@if($annonce->first()->type_price=='Per semaine') Specific date @else Per semaine @endif</option>
                                                </select>
                                                <br>
                                                @if($annonce->first()->type_price=='Per semaine')
                                                <div class="form-group" id="semaine" style="display: block;">
                                                    <select class="form-select" id="exampleFormControlSelect1" name="semaine">
                                                        <option value="{{$annonce->first()->semaine}}" selected>{{$annonce->first()->semaine}}</option>
                                                        @for($i=1;$i<=156;$i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                    <div class="form-group" id="date" style="display: none">
                                                        <input type="date" class="form-control" id="date" aria-describedby="emailHelp" name="date" value="{{$annonce->first()->date}}">
                                                    </div>
                                                @else
                                                    <div class="form-group" id="semaine" style="display: none;">
                                                        <select class="form-select" id="exampleFormControlSelect1" name="semaine">
                                                            <option value="0" selected>0</option>
                                                            @for($i=1;$i<=156;$i++)
                                                                <option value="{{$i}}">{{$i}}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                <div class="form-group" id="date" style="display: block">
                                                    <input type="date" class="form-control" id="date" aria-describedby="emailHelp" name="date" value="{{$annonce->first()->date}}">
                                                </div>
                                                @endif
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                                </form>
                                        </div>
                                    </div>
                                </div>
                            @if(session('order_success'))
                                <script>
                                    const Toast = Swal.mixin({
                                        toast: true,
                                        position: 'top-end',
                                        showConfirmButton: false,
                                        timer: 3000,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                            toast.addEventListener('mouseenter', Swal.stopTimer)
                                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                                        }
                                    })

                                    Toast.fire({
                                        icon: 'success',
                                        title: '{{session('order_success')}}'
                                    })
                                </script>
                            @endif

                        </div>
                    </div>

                    <!--end col-->
                </div>
                <!--end row-->
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
<script>
    function change3(){
        var selectElement = document.getElementById("Price_type");
        var displaytext = selectElement.options[selectElement.selectedIndex].text;
        if (displaytext=="Per semaine"){
            document.getElementById("semaine").style.display="block";
            document.getElementById("date").style.display="none";
        }
        if (displaytext=="Specific date"){
            document.getElementById("date").style.display="block";
            document.getElementById("semaine").style.display="none";
        }
        if (displaytext=="---"){
            document.getElementById("semaine").style.display="none";
            document.getElementById("date").style.display="none";
        }
    }
</script>
<script>
    // Jquery Dependency

    $("input[data-type='currency']").on({
        keyup: function() {
            formatCurrency($(this));
        },
        blur: function() {
            formatCurrency($(this), "blur");
        }
    });


    function formatNumber(n) {
        // format number 1000000 to 1,234,567
        return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    }


    function formatCurrency(input, blur) {
        // appends $ to value, validates decimal side
        // and puts cursor back in right position.

        // get input value
        var input_val = input.val();

        // don't validate empty input
        if (input_val === "") { return; }

        // original length
        var original_len = input_val.length;

        // initial caret position
        var caret_pos = input.prop("selectionStart");

        // check for decimal
        if (input_val.indexOf(".") >= 0) {

            // get position of first decimal
            // this prevents multiple decimals from
            // being entered
            var decimal_pos = input_val.indexOf(".");

            // split number by decimal point
            var left_side = input_val.substring(0, decimal_pos);
            var right_side = input_val.substring(decimal_pos);

            // add commas to left side of number
            left_side = formatNumber(left_side);

            // validate right side
            right_side = formatNumber(right_side);

            // On blur make sure 2 numbers after decimal
            if (blur === "blur") {
                right_side += "00";
            }

            // Limit decimal to only 2 digits
            right_side = right_side.substring(0, 2);

            // join number by .
            input_val = "$" + left_side + "." + right_side;

        } else {
            // no decimal entered
            // add commas to number
            // remove all non-digits
            input_val = formatNumber(input_val);
            input_val = "$" + input_val;

            // final formatting
            if (blur === "blur") {
                input_val += ".00";
            }
        }

        // send updated string to input
        input.val(input_val);

        // put caret back in the right position
        var updated_len = input_val.length;
        caret_pos = updated_len - original_len + caret_pos;
        input[0].setSelectionRange(caret_pos, caret_pos);
    }

</script>
</body>
<!-- Mirrored from themesbrand.com/velzon/html/default/layouts-horizontal.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Apr 2023 04:14:23 GMT -->
</html>
