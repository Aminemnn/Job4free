<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js
"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('homeAssets/css/style.css')}}">
    <link href="{{asset('FreeAssets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        @media only screen and (max-width: 820px) {
            #posted{
                position: relative;
                left: 1px;
            }

        }



        /* Add Animation */
        @-webkit-keyframes slideIn {
            from {bottom: -300px; opacity: 0}
            to {bottom: 0; opacity: 1}
        }

        @keyframes slideIn {
            from {bottom: -300px; opacity: 0}
            to {bottom: 0; opacity: 1}
        }

        @-webkit-keyframes fadeIn {
            from {opacity: 0}
            to {opacity: 1}
        }

        @keyframes fadeIn {
            from {opacity: 0}
            to {opacity: 1}
        }
        #animate{
            --animate-duration: 1s;
        }
        #animate1{
            --animate-duration: 1.1s;
        }
        #animate2{
            --animate-duration: 1.2s;
        }
        #animate3{
            --animate-duration: 1.3s;
        }
        #category{
            --animate-duration: 1.4s;
        }
        #animate4{
            --animate-duration: 1.5s;
        }
        #animate5{
            --animate-duration: 1.6s;
        }
        #animate6{
            --animate-duration: 1.7s;
        }
        #animate7{
            --animate-duration: 1.8s;
        }
        /* Slideshow container */
        .slideshow-container {
            position: relative;
            background: #F7CC7E;

        }

        /* Slides */
        .mySlides {
            display: none;
            padding: 80px;
            text-align: center;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -30px;
            padding: 16px;
            color: #888;
            font-weight: bold;
            font-size: 20px;
            border-radius: 0 3px 3px 0;
            user-select: none;

        }

        /* Position the "next button" to the right */
        .next {
            position: absolute;
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            color: white;
        }

        /* The dot/bullet/indicator container */
        .dot-container {
            text-align: center;
            padding: 20px;
            background: #ddd;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* Add a background color to the active dot/circle */

        /* Add an italic font style to all quotes */
        q {font-style: italic;}

        /* Add a blue color to the author */
        .author {color: cornflowerblue;}
        .col-3{
            margin-left: 126px;
            transform: scale(1.1);
            position: relative;
            right: 23px;
        }
        #myBtn a{
            text-decoration: none;
            color: white;
        }

    </style>
    <style>
        h1 {
            text-align: center;
        }
        h2 {
            margin: 0;
        }
        #multi-step-form-container {
            margin-top: 5rem;
        }
        .text-center {
            text-align: center;
        }
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }
        .pl-0 {
            padding-left: 0;
        }
        .button {
            padding: 0.7rem 1.5rem;
            border: 1px solid #4361ee;
            background-color: #4361ee;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn {
            border: 1px solid #0e9594;
            background-color: #0e9594;
        }
        .mt-3 {
            margin-top: 2rem;
        }
        .d-none {
            display: none;
        }
        .form-step {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem;
        }
        .font-normal {
            font-weight: normal;
        }
        ul.form-stepper {
            counter-reset: section;
            margin-bottom: 3rem;
            position: relative;
            left: 18px;
        }
        ul.form-stepper .form-stepper-circle {
            position: relative;
        }
        ul.form-stepper .form-stepper-circle span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
        }
        .form-stepper-horizontal {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        ul.form-stepper > li:not(:last-of-type) {
            margin-bottom: 0.625rem;
            -webkit-transition: margin-bottom 0.4s;
            -o-transition: margin-bottom 0.4s;
            transition: margin-bottom 0.4s;
        }
        .form-stepper-horizontal > li:not(:last-of-type) {
            margin-bottom: 0 !important;
        }
        .form-stepper-horizontal li {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: start;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }
        .form-stepper-horizontal li:not(:last-child):after {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 1px;
            content: "";
            top: 32%;
        }
        .form-stepper-horizontal li:after {
            background-color: #dee2e6;
        }
        .form-stepper-horizontal li.form-stepper-completed:after {
            background-color: #4da3ff;
        }
        .form-stepper-horizontal li:last-child {
            flex: unset;
        }
        ul.form-stepper li a .form-stepper-circle {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 0;
            line-height: 1.7rem;
            text-align: center;
            background: rgba(0, 0, 0, 0.38);
            border-radius: 50%;
        }
        .form-stepper .form-stepper-active .form-stepper-circle {
            background-color: #4361ee !important;
            color: #fff;
        }
        .form-stepper .form-stepper-active .label {
            color: #4361ee !important;
        }
        .form-stepper .form-stepper-active .form-stepper-circle:hover {
            background-color: #4361ee !important;
            color: #fff !important;
        }
        .form-stepper .form-stepper-unfinished .form-stepper-circle {
            background-color: #f8f7ff;
        }
        .form-stepper .form-stepper-completed .form-stepper-circle {
            background-color: #0e9594 !important;
            color: #fff;
        }
        .form-stepper .form-stepper-completed .label {
            color: #0e9594 !important;
        }
        .form-stepper .form-stepper-completed .form-stepper-circle:hover {
            background-color: #0e9594 !important;
            color: #fff !important;
        }
        .form-stepper .form-stepper-active span.text-muted {
            color: #fff !important;
        }
        .form-stepper .form-stepper-completed span.text-muted {
            color: #fff !important;
        }
        .form-stepper .label {
            font-size: 1rem;
            margin-top: 0.5rem;
        }
        .form-stepper a {
            cursor: default;
        }

    </style>
    <style>e.cssCSS
            /* Code By Webdevtrick ( https://webdevtrick.com ) */
        .container {
            padding: 50px 10%;
        }

        .box {
            position: relative;
            background: #ffffff;
            width: 100%;
        }

        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative;
            border-bottom: 1px solid #f4f4f4;
            margin-bottom: 10px;
        }

        .box-tools {
            position: absolute;
            right: 10px;
            top: 5px;
        }

        .dropzone-wrapper {
            border: 2px dashed #91b0b3;
            color: #92b0b3;
            position: relative;
            height: 150px;
        }

        .dropzone-desc {
            position: absolute;
            margin: 0 auto;
            left: 0;
            right: 0;
            text-align: center;
            width: 40%;
            top: 50px;
            font-size: 16px;
        }

        .dropzone,
        .dropzone:focus {
            position: absolute;
            outline: none !important;
            width: 100%;
            height: 150px;
            cursor: pointer;
            opacity: 0;
        }

        .dropzone-wrapper:hover,
        .dropzone-wrapper.dragover {
            background: #ecf0f5;
        }

        .preview-zone {
            text-align: center;
        }

        .preview-zone .box {
            box-shadow: none;
            border-radius: 0;
            margin-bottom: 0;
        }

        .btn-primary {
            background-color: crimson;
            border: 1px solid #212121;
        }
    </style>
    <style>
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<x-freelancer-layout>
    <div class="py-12">
        <div class="card text-center" style="width: 80%;height: 200px;margin:auto;border-radius: 56px;background-color: #E1ECFE;border-color: #E1ECFE" id="card">
            <div class="card-body">
                <h5 class="card-title" style="color: #F19B01">Hi ! <h5>{{Auth::user()->name}}</h5></h5>
                <p class="card-text" style="margin-top: 23px">You can publish your work here</p>
                <button type="button" class="btn btn-primary" id="myBtn" style="margin-top: 3px;background-color: #F19B01;border-color: #F19B01;color: white">
                    <a href="{{route('addPoste')}}" id="posted">Posted a Work
                    </a>
                </button>
            </div>
        </div>
    </div>
    <section class="latest-podcast-section section-padding" id="section_2">
        <div class="container">
            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Lastest job offres</h4>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($annonces as $annonces)
                    <div class="col-lg-12" style="margin: 13px">
                        <div class="custom-block d-flex">
                            <div class="custom-block-info">

                                <h4 class="mb-2">
                                    <a href="{{route('detailannonce',['id'=>$annonces->id])}}">
                                        {{$annonces->title}}
                                    </a>
                                </h4>
                                <p class="mb-0" style="position: relative;right: 13px;">{{$annonces->price_categorie}} - {{$annonces->type_price}} - <span class="badge badge-soft-info mb-3 fs-12"><i class="ri-eye-line me-1 align-bottom"></i> {{$annonces->views}} people views this</span></p>
                                <div class="profile-block d-flex">
                                    <img src="{{asset('../../../uploads/photouser/'.$annonces->img_user)}}" class="profile-block-image img-fluid" alt="">
                                    <p style="position: relative; right: 13px;top: 2px;display: inline-flex;">
                                        {{$annonces->name_user}}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" style="color: blue;margin-left: 7px;margin-top: 3px" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
                                        </svg>
                                    </p>
                                </div>
                                <p style="margin-left: 64px;margin-bottom: 0px;margin-top: -16px">
                                    {{$annonces->created_at}}
                                </p>
                                <p class="mb-0" style="position: relative;right: 13px;top: 10px"><strong>{{$annonces->description}}</strong></p>

                                <p class="mb-0" style="position: relative;right: 13px;top: 10px">Proposals: <span><strong>{{$annonces->nombre_proposition}}</strong></span></p>
                                <button type="button" class="btn btn-warning" style="margin-top: 23px">{{$annonces->catgorie}}</button>
                                <button type="button" class="btn btn-warning" style="margin-top: 23px">{{$annonces->sous_categorie}}</button>
                                <hr>
                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a style="color: #a8ccfb">
                                        <span style="color: black"><span style="color: black;font-family: 'Trebuchet MS';font-size: small">Starting At :</span><i class="fa-solid fa-dollar-sign" style="color: #0983b7"></i>{{substr($annonces->price, 1)}}</span>
                                    </a>
                                </div>
                            </div>
                            <div class="social-share d-flex flex-column ms-auto">
                                @php
                                    $favoriExiste = false;
                                @endphp
                                @foreach($favoris as $favori)
                                    @if($annonces->id==$favori->id_ann)
                                        @php
                                            $favoriExiste = true;
                                        @endphp
                                        <form method="POST" action="{{route('freelancer_favoris_delete')}}" id="form1">
                                            @csrf
                                            <input type="hidden" name="delete" value="{{$annonces->id}}">
                                            <button type="submit" id="favorite-btn"><i class="fa-solid fa-heart-o animate__animated animate__bounceIn" style="font-size: 26px;color: red"></i></button>
                                        </form>
                                    @endif
                                @endforeach
                                @if(!$favoriExiste)
                                    <form method="POST" action="{{route('freelancer_favoris')}}" id="form2">
                                        @csrf
                                        <input type="hidden" name="id_ann" value="{{$annonces->id}}">
                                        <input type="hidden" name="title" value="{{$annonces->title}}">
                                        <input type="hidden" name="category" value="{{$annonces->catgorie}}">
                                        <input type="hidden" name="sous_category" value="{{$annonces->sous_categorie}}">
                                        <input type="hidden" name="price_categorie" value="{{$annonces->price_categorie}}">
                                        <input type="hidden" name="price" value="{{$annonces->price}}">
                                        <input type="hidden" name="type_price" value="{{$annonces->type_price}}">
                                        <input type="hidden" name="semaine" value="{{$annonces->semaine}}">
                                        <input type="hidden" name="date" value="{{$annonces->date}}">
                                        <input type="hidden" name="description" value="{{$annonces->description}}">
                                        <input type="hidden" name="img_user" value="{{$annonces->img_user}}">
                                        <input type="hidden" name="name_client" value="{{$annonces->name_user}}">
                                        <input type="hidden" name="id_client" value="{{$annonces->id_user}}">
                                        <button type="submit" id="favorite-btn"><i class="fa-solid fa-heart-o animate__animated animate__bounceIn" style="font-size: 26px;color: darkgrey"></i></button>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <br>
    <section class="trending-podcast-section section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-10">
                    <div class="section-title-wrap mb-5">
                        <h4 class="section-title">your projects</h4>
                    </div>
                </div>
@foreach($postes as $postes)
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-full">
                        <div class="custom-block-image-wrap">
                            <a href="detail-page.html">
                                <img src="{{asset('uploads/poste/'.$postes->image)}}" class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                        <div class="custom-block-info">
                            <h5 class="mb-2">
                                <a href="detail-page.html">
                                    {{$postes->title}}
                                </a>
                            </h5>

                            <div class="profile-block d-flex">
                                <img src="{{asset('uploads/photouser/'.$postes->img_user)}}" class="profile-block-image img-fluid" alt="">

                                <p>{{$postes->name_user}}
                                    <strong>{{$postes->bio_user}}</strong></p>
                            </div>

                            <p class="mb-0" style="position: relative;right: 13px;top: 13px">{{$postes->description}}</p>
                            <button type="button" class="btn btn-warning" style="margin-top: 23px">{{$postes->category}}</button>
                            <button type="button" class="btn btn-warning" style="margin-top: 23px">{{$postes->sous_category}}</button>
                            <hr>
                            <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                <a style="color: #a8ccfb">
                                    <span style="color: black"><span style="color: black;font-family: 'Trebuchet MS';font-size: small">Starting At :</span><i class="fa-solid fa-dollar-sign" style="color: #0983b7"></i>{{substr($postes->price, 1)}}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


</x-freelancer-layout>
@if(session('success2'))
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
            title: '{{session("success2")}}'
        })
    </script>
@endif
@if(session('delete'))
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
            title: '{{session("delete")}}'
        })
    </script>
@endif
@if (session('status'))
    <script>
        Swal.fire(
            'Good job!',
            'Your data has been registered successfully!',
            'success'
        )
    </script>
@endif
@if (session('success'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif
@if(Auth::user()->categorie==null)
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div id="multi-step-form-container">
                            <!-- Form Steps / Progress Bar -->
                            <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                                <!-- Step 1 -->
                                <li class="form-stepper-active text-center form-stepper-list" step="1">
                                    <a class="mx-2">
                        <span class="form-stepper-circle">
                            <span>1</span>
                        </span>
                                        <div class="label">Account Basic Details</div>
                                    </a>
                                </li>
                                <!-- Step 2 -->
                                <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>2</span>
                        </span>
                                        <div class="label text-muted">Social Profiles</div>
                                    </a>
                                </li>
                                <!-- Step 3 -->
                                <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                                    <a class="mx-2">
                        <span class="form-stepper-circle text-muted">
                            <span>3</span>
                        </span>
                                        <div class="label text-muted">Personal Details</div>
                                    </a>
                                </li>
                            </ul>
                            <!-- Step Wise Form Content -->
                            <form id="userAccountSetupForm" action="{{route('freelancer')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Step 1 Content -->
                                <section id="step-1" class="form-step">
                                    <h2 class="font-normal">Account Basic Details</h2>
                                    <!-- Step 1 input fields -->
                                    <div class="mt-3">
                                        <label style="font-family: 'Trebuchet MS'">Category</label><span style="color: red !important; display: inline; float: none;">*</span>
                                        <select class="form-select" aria-label="Default select example" name="categorie" value="none" id="category" onchange="change()">
                                            <option value="">Select category</option>
                                            @foreach ($categories as $category)
                                                <option >{{ $category->nom }}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                        <label style="font-family: 'Trebuchet MS'" id="labelcategory">Sub Category</label>
                                        <select class="form-select" aria-label="Default select example" name="subcategory1" id="sub_category_graphics_design" onchange="change2()" >
                                            <option value="">Select subcategory</option>
                                            @foreach ($graphics_design as $graphics_design)
                                                <option value="{{ $graphics_design->nom }}" >{{ $graphics_design->nom }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                        <select class="form-select" aria-label="Default select example" name="subcategory2" id="sub_category_digital_marketing" onchange="change2()" >
                                            <option value="">Select subcategory</option>
                                            @foreach ($digital_marketing as $digital_marketing)
                                                <option value="{{ $digital_marketing->nom }}" >{{ $digital_marketing->nom }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                        <select class="form-select" aria-label="Default select example" name="subcategory3" id="sub_category_writing_translation" onchange="change2()" >
                                            <option value="">Select subcategory</option>
                                            @foreach ($writing_translation as $writing_translation)
                                                <option value="{{ $writing_translation->nom }}" >{{ $writing_translation->nom }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                        </select>
                                        <select class="form-select" aria-label="Default select example" name="subcategory4" id="sub_category_vedio_annimation" onchange="change2()" >
                                            <option value="">Select subcategory</option>
                                            @foreach ($video_annimation as $video_annimation)
                                                <option value="{{ $video_annimation->nom }}" >{{ $video_annimation->nom }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                        <select class="form-select" aria-label="Default select example" name="subcategory5" id="sub_category_music_audio" onchange="change2()">
                                            <option value="">Select subcategory</option>
                                            @foreach ($music_audio as $music_audio)
                                                <option value="{{ $music_audio->nom }}" >{{ $music_audio->nom }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                        <select class="form-select" aria-label="Default select example" name="subcategory6" id="sub_category_programming_tech" onchange="change2()">
                                            <option value="">Select subcategory</option>
                                            @foreach ($programming_tech as $programming_tech)
                                                <option value="{{ $programming_tech->nom }}" >{{ $programming_tech->nom }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                        <select class="form-select" aria-label="Default select example" name="subcategory7" id="sub_category_business" onchange="change2()">
                                            <option value="">Select subcategory</option>
                                            @foreach ($business as $business)
                                                <option value="{{ $business->nom }}" >{{ $business->nom }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                        <select class="form-select" aria-label="Default select example" name="subcategory8" id="sub_category_life_style" onchange="change2()">
                                            <option value="">Select subcategory</option>
                                            @foreach ($life_style as $life_style)
                                                <option value="{{ $life_style->nom }}" >{{ $life_style->nom }}</option>
                                            @endforeach
                                            <option value="Other">Other</option>
                                        </select>
                                        <br>
                                        <input class="form-control" type="text"  aria-label="default input example" name="other" id="other" placeholder="enter your subcategory here" style="border-color: gray; border-radius: 5px">
                                        <br>
                                        <label for="country" style="font-family: 'Trebuchet MS'">Country</label><span style="color: red !important; display: inline; float: none;">*</span>
                                        <select id="country" name="country" class="form-control" >
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                        <br>
                                        <label>Phone</label><span style="color: red !important; display: inline; float: none;">*</span>
                                        <input class="form-control" type="text"  aria-label="default input example" name="phone" required style="border-color: gray; border-radius: 5px">
                                        <br>
                                        <label>City</label><span style="color: red !important; display: inline; float: none;">*</span>
                                        <input class="form-control" type="text"  aria-label="default input example" name="ville" required style="border-color: gray; border-radius: 5px">
                                        <br>
                                        <label>Adress</label><span style="color: red !important; display: inline; float: none;">*</span>
                                        <input class="form-control" type="text"  aria-label="default input example" name="adresse" required style="border-color: gray; border-radius: 5px">
                                        <br>
                                        <label>Postal code</label><span style="color: red !important; display: inline; float: none;">*</span>
                                        <input class="form-control" type="number"  aria-label="default input example" name="code" required style="border-color: gray; border-radius: 5px">
                                    </div>
                                    <div class="mt-3">
                                        <button class="button btn-navigate-form-step" type="button" step_number="2" style="background-color: #1099cf;border-color: #1099cf">Next</button>
                                    </div>
                                </section>
                                <!-- Step 2 Content, default hidden on page load. -->
                                <section id="step-2" class="form-step d-none">
                                    <h2 class="font-normal">Social Profiles</h2>
                                    <!-- Step 2 input fields -->
                                    <div class="mt-3">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Upload File</label>
                                                        <div class="preview-zone hidden">
                                                            <div class="box box-solid">
                                                                <div class="box-header with-border">
                                                                    <div class="box-tools pull-right">
                                                                        <button type="button" class="btn btn-danger btn-xs remove-preview" style="position: relative;bottom: 36px;background-color: red;border-color: red">
                                                                            <i class="fa fa-times"></i> Reset The Field
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="box-body"></div>
                                                            </div>
                                                        </div>
                                                        <div class="dropzone-wrapper">
                                                            <div class="dropzone-desc">
                                                                <i class="glyphicon glyphicon-download-alt"></i>
                                                                <p>Choose an image file or drag it here.</p>
                                                            </div>
                                                            <input type="file" name="img" class="dropzone" id="imageUpload" accept="Image/*" required>
                                                        </div>
                                                        <p id="result1" class="text-success"></p>
                                                        <p id="result2" class="text-danger" ></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="button btn-navigate-form-step" type="button" step_number="1" style="background-color: #0e9594;border-color: #0e9594">Prev</button>
                                        <br>
                                        <br>
                                        <button class="button btn-navigate-form-step" type="button" step_number="3" id="next" style="background-color: #1099cf;border-color: #1099cf">Next</button>
                                    </div>
                                </section>
                                <!-- Step 3 Content, default hidden on page load. -->
                                <section id="step-3" class="form-step d-none">
                                    <h2 class="font-normal">Personal Details</h2>
                                    <!-- Step 3 input fields -->
                                    <div class="mt-3">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control"  name="bio" placeholder="Leave a comment here" id="floatingTextareaDisabled"></textarea>
                                            <label for="floatingTextareaDisabled">Bio</label>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="button btn-navigate-form-step" type="button" step_number="2" style="background-color: #0e9594;border-color: #0e9594">Prev</button>
                                        <button class="button submit-btn" type="submit" style="background-color: #F19B01;border-color: #F19B01">Save</button>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modal = new bootstrap.Modal(document.getElementById("staticBackdrop"), {backdrop: 'static', keyboard: false});
            modal.show();
        });
    </script>
@endif
<script>

    function change() {
        var selectElement = document.getElementById("category");
        var displaytext = selectElement.options[selectElement.selectedIndex].text;
        if(displaytext=="Other"){
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("labelcategory").style.display="none";
            document.getElementById("other").style.display="block";
        }
        if (displaytext=="Select category"){
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("labelcategory").style.display="none";
            document.getElementById("span").style.display="none";
            document.getElementById("other").style.display="none";
        }
        if (displaytext=="Graphics & Design"){
            document.getElementById("sub_category_graphics_design").style.display="block";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("labelcategory").style.display="block";
            document.getElementById("span").style.display="block";
            document.getElementById("other").style.display="none";

        }
        if (displaytext=="Digital Marketing"){
            document.getElementById("sub_category_digital_marketing").style.display="block";
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("labelcategory").style.display="block";
            document.getElementById("other").style.display="none";
        }
        if (displaytext=="Writing & Translation"){
            document.getElementById("sub_category_writing_translation").style.display="block";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("labelcategory").style.display="block";
            document.getElementById("other").style.display="none";
        }
        if (displaytext=="Video & Animation"){
            document.getElementById("sub_category_vedio_annimation").style.display="block";
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("labelcategory").style.display="block";
            document.getElementById("other").style.display="none";
        }
        if (displaytext=="Music & Audio"){
            document.getElementById("sub_category_music_audio").style.display="block";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("labelcategory").style.display="block";
            document.getElementById("other").style.display="none";

        }
        if (displaytext=="Programming & Tech"){
            document.getElementById("sub_category_programming_tech").style.display="block";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("labelcategory").style.display="block";
            document.getElementById("other").style.display="none";
        }
        if (displaytext=="Business"){
            document.getElementById("sub_category_business").style.display="block";
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("labelcategory").style.display="block";
            document.getElementById("other").style.display="none";
        }

        if (displaytext=="Lifestyle"){
            document.getElementById("sub_category_life_style").style.display="block";
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("labelcategory").style.display="block";
            document.getElementById("other").style.display="none";
        }


    }
    function change2(){
        var graphics=document.getElementById("sub_category_graphics_design");
        var marketing=document.getElementById("sub_category_digital_marketing");
        var writing=document.getElementById("sub_category_writing_translation");
        var video=document.getElementById("sub_category_vedio_annimation");
        var music=document.getElementById("sub_category_music_audio");
        var programming=document.getElementById("sub_category_programming_tech");
        var business=document.getElementById("sub_category_business");
        var lifestyle=document.getElementById("sub_category_life_style");

        var displaygraphics = graphics.options[graphics.selectedIndex].text;
        var displaymarketing=marketing.options[marketing.selectedIndex].text;
        var displaymwriting=writing.options[writing.selectedIndex].text;
        var displayvideo=video.options[video.selectedIndex].text;
        var displaymusic=music.options[music.selectedIndex].text;
        var displayprogramming=programming.options[programming.selectedIndex].text;
        var displaybusiness=business.options[business.selectedIndex].text;
        var displaylifestyle=lifestyle.options[lifestyle.selectedIndex].text;

        if(displaymarketing=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaygraphics=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaymwriting=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displayvideo=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaymusic=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displayprogramming=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaybusiness=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaylifestyle=="Other"){
            document.getElementById("other").style.display="block";
        }

        if(displaymarketing=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaygraphics=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaymwriting=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displayvideo=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaymusic=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displayprogramming=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaybusiness=="Other"){
            document.getElementById("other").style.display="block";
        }
        if(displaylifestyle=="Other"){
            document.getElementById("other").style.display="block";
        }

    }
    document.getElementById("other").style.display="none";
    document.getElementById("sub_category_graphics_design").style.display="none";
    document.getElementById("sub_category_digital_marketing").style.display="none";
    document.getElementById("sub_category_writing_translation").style.display="none";
    document.getElementById("sub_category_vedio_annimation").style.display="none";
    document.getElementById("sub_category_music_audio").style.display="none";
    document.getElementById("sub_category_programming_tech").style.display="none";
    document.getElementById("sub_category_business").style.display="none";
    document.getElementById("sub_category_life_style").style.display="none";
    document.getElementById("labelcategory").style.display="none";
    document.getElementById("span").style.display="none";

</script>
<script>
    function change1() {
        var selectElement = document.getElementById("category");
        var displaytext = selectElement.options[selectElement.selectedIndex].text;
        if (displaytext=="Select category"){
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";

        }
        if (displaytext=="Graphics & Design"){
            document.getElementById("sub_category_graphics_design1").style.display="block";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }
        if (displaytext=="Digital Marketing"){
            document.getElementById("sub_category_digital_marketing1").style.display="block";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }
        if (displaytext=="Writing & Translation"){
            document.getElementById("sub_category_writing_translation1").style.display="block";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }
        if (displaytext=="Video & Animation"){
            document.getElementById("sub_category_vedio_annimation1").style.display="block";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }
        if (displaytext=="Music & Audio"){
            document.getElementById("sub_category_music_audio1").style.display="block";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";



        }
        if (displaytext=="Programming & Tech"){
            document.getElementById("sub_category_programming_tech1").style.display="block";
            document.getElementById("sub_category_business1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";


        }
        if (displaytext=="Business"){
            document.getElementById("sub_category_business1").style.display="block";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_life_style1").style.display="none";


        }

        if (displaytext=="Lifestyle"){
            document.getElementById("sub_category_life_style1").style.display="block";
            document.getElementById("sub_category_graphics_design1").style.display="none";
            document.getElementById("sub_category_digital_marketing1").style.display="none";
            document.getElementById("sub_category_writing_translation1").style.display="none";
            document.getElementById("sub_category_vedio_annimation1").style.display="none";
            document.getElementById("sub_category_music_audio1").style.display="none";
            document.getElementById("sub_category_programming_tech1").style.display="none";
            document.getElementById("sub_category_business1").style.display="none";


        }
    }
    document.getElementById("sub_category_graphics_design1").style.display="none";
    document.getElementById("sub_category_digital_marketing1").style.display="none";
    document.getElementById("sub_category_writing_translation1").style.display="none";
    document.getElementById("sub_category_vedio_annimation1").style.display="none";
    document.getElementById("sub_category_music_audio1").style.display="none";
    document.getElementById("sub_category_programming_tech1").style.display="none";
    document.getElementById("sub_category_business1").style.display="none";
    document.getElementById("sub_category_life_style1").style.display="none";

</script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    /**
     * Define a function to navigate betweens form steps.
     * It accepts one parameter. That is - step number.
     */
    const navigateToFormStep = (stepNumber) => {
        /**
         * Hide all form steps.
         */
        document.querySelectorAll(".form-step").forEach((formStepElement) => {
            formStepElement.classList.add("d-none");
        });
        /**
         * Mark all form steps as unfinished.
         */
        document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
            formStepHeader.classList.add("form-stepper-unfinished");
            formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
        });
        /**
         * Show the current form step (as passed to the function).
         */
        document.querySelector("#step-" + stepNumber).classList.remove("d-none");
        /**
         * Select the form step circle (progress bar).
         */
        const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
        /**
         * Mark the current form step as active.
         */
        formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
        formStepCircle.classList.add("form-stepper-active");
        /**
         * Loop through each form step circles.
         * This loop will continue up to the current step number.
         * Example: If the current step is 3,
         * then the loop will perform operations for step 1 and 2.
         */
        for (let index = 0; index < stepNumber; index++) {
            /**
             * Select the form step circle (progress bar).
             */
            const formStepCircle = document.querySelector('li[step="' + index + '"]');
            /**
             * Check if the element exist. If yes, then proceed.
             */
            if (formStepCircle) {
                /**
                 * Mark the form step as completed.
                 */
                formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
                formStepCircle.classList.add("form-stepper-completed");
            }
        }
    };
    /**
     * Select all form navigation buttons, and loop through them.
     */
    document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
        /**
         * Add a click event listener to the button.
         */
        formNavigationBtn.addEventListener("click", () => {
            /**
             * Get the value of the step.
             */
            const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
            /**
             * Call the function to navigate to the target form step.
             */
            navigateToFormStep(stepNumber);
        });
    });
</script>
<script>
    // Code By Webdevtrick ( https://webdevtrick.com )
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var htmlPreview =
                    '<img width="200" src="' + e.target.result + '" style="margin: auto" />' +
                    '<p>' + input.files[0].name + '</p>';
                var wrapperZone = $(input).parent();
                var previewZone = $(input).parent().parent().find('.preview-zone');
                var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

                wrapperZone.removeClass('dragover');
                previewZone.removeClass('hidden');
                boxZone.empty();
                boxZone.append(htmlPreview);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function reset(e) {
        e.wrap('<form>').closest('form').get(0).reset();
        e.unwrap();
    }

    $(".dropzone").change(function() {
        readFile(this);
    });

    $('.dropzone-wrapper').on('dragover', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('dragover');
    });

    $('.dropzone-wrapper').on('dragleave', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragover');
    });

    $('.remove-preview').on('click', function() {
        var boxZone = $(this).parents('.preview-zone').find('.box-body');
        var previewZone = $(this).parents('.preview-zone');
        var dropzone = $(this).parents('.form-group').find('.dropzone');
        boxZone.empty();
        previewZone.addClass('hidden');
        reset(dropzone);
    });
</script>
<script>
    const imageUpload = document.getElementById('imageUpload');
    const result1 = document.getElementById('result1');
    const result2 = document.getElementById('result2');
    const nextstep=document.getElementById('next');
    imageUpload.addEventListener('change',function (){
        const file = this.files[0];
        const image = new Image();
        const reader = new FileReader();
        reader.onload=function (e){
            image.src=e.target.result;
            image.onload=function (){
                if (this.width===626 && this.height===626){
                    result1.textContent = "L'image est de la bonne taille";
                    nextstep.style.display="block";
                } else {
                    result2.textContent = "L'image doit être de taille égale 626x626";
                    nextstep.style.display="none";
                }
            };
        }
        reader.readAsDataURL(file);
    });
</script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>
