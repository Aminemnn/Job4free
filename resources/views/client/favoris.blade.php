<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>
<section class="trending-podcast-section section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-10">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title">Lastest job offres</h4>
                </div>
            </div>
            @foreach($favoris as $favoris)
                <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                    <div class="custom-block custom-block-full">
                        <div class="custom-block-image-wrap">
                            <a href="detail-page.html">
                                <img src="{{asset('../../../uploads/poste/'.$favoris->image)}}" class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>

                        <div class="custom-block-info">
                            <h5 class="mb-2">
                                <a href="{{route('detailposte',['id'=>$favoris->id_poste])}}">
                                    {{$favoris->title}}
                                </a>
                            </h5>

                            <div class="profile-block d-flex">
                                <img src="{{asset('../../../uploads/photouser/'.$favoris->img_user)}}" class="profile-block-image img-fluid" alt="">
                                <p>{{$favoris->name_freelancer}}
                            </div>

                            <p class="mb-0" style="position: relative;right: 13px;top: 13px">{{$favoris->description}}</p>
                            <p class="mb-0" style="position: relative;right: 13px;top: 13px"><strong>{{$favoris->etat}}</strong></p>
                            <button type="button" class="btn btn-warning" style="margin-top: 23px">{{$favoris->category}}</button>
                            <button type="button" class="btn btn-warning" style="margin-top: 23px">{{$favoris->sous_category}}</button>
                            <hr>
                            <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                <a style="color: #a8ccfb">
                                    <span style="color: black"><span style="color: black;font-family: 'Trebuchet MS';font-size: small">Starting At :</span><i class="fa-solid fa-dollar-sign" style="color: #0983b7"></i>{{substr($favoris->price, 1)}}</span>
                                </a>
                            </div>
                        </div>

                        <div class="social-share d-flex flex-column ms-auto">
                            @php
                                $favoriExiste = false;
                            @endphp
                            @foreach($postes as $poste)
                                @if($poste->id==$favoris->id_poste)
                                    @php
                                        $favoriExiste = true;
                                    @endphp
                                    <form method="POST" action="{{route('client_favoris_delete')}}" id="form1">
                                        @csrf
                                        <input type="hidden" name="delete" value="{{$favoris->id_poste}}">
                                        <button type="submit" id="favorite-btn"><i class="fa-solid fa-heart-o animate__animated animate__bounceIn" style="font-size: 26px;color: red"></i></button>
                                    </form>
                                @endif
                            @endforeach
                            @if(!$favoriExiste)
                                <form method="POST" action="{{route('client_favoris')}}" id="form2">
                                    @csrf
                                    <input type="hidden" name="title" value="{{$favoris->title}}">
                                    <input type="hidden" name="category" value="{{$favoris->category}}">
                                    <input type="hidden" name="sous_category" value="{{$favoris->sous_category}}">
                                    <input type="hidden" name="image" value="{{$favoris->image}}">
                                    <input type="hidden" name="price" value="{{$favoris->price}}">
                                    <input type="hidden" name="etat" value="{{$favoris->etat}}">
                                    <input type="hidden" name="description" value="{{$favoris->description}}">
                                    <input type="hidden" name="user_id" value="{{$favoris->user_id }}">
                                    <input type="hidden" name="name_freelancer" value="{{$favoris->name_user}}">
                                    <input type="hidden" name="img_freelancer" value="{{$favoris->img_user}}">
                                    <button type="submit" id="favorite-btn"><i class="fa-solid fa-heart-o animate__animated animate__bounceIn" style="font-size: 26px;color: darkgrey"></i></button>
                                </form>
                            @endif
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
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
</body>
</html>
