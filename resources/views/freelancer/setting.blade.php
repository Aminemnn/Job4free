<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('FreeAssets/images/favicon.ico')}}">
    <!-- swiper css -->
    <link rel="stylesheet"  href="{{asset('FreeAssets/libs/swiper/swiper-bundle.min.css')}}">
    <!-- Layout config Js -->

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
<style>
    .range-wrap {
        position: relative;
        margin: 0 auto 3rem;
    }
    .range {
        width: 100%;
    }
    .bubble {
        background: red;
        color: white;
        padding: 4px 12px;
        position: absolute;
        border-radius: 4px;
        left: 50%;
        transform: translateX(-50%);
        top: 18px;
    }
    .bubble::after {
        content: "";
        position: absolute;
        width: 2px;
        height: 2px;
        background: red;
        top: -1px;
        left: 50%;
    }
</style>
<body>
<x-freelancer-layout>
    <section style="background-color: #eee;">
        <div class="page-content">
            <div class="container-fluid">

                <div class="position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg profile-setting-img">
                        <img src="{{asset('uploads/photouser/'.Auth::user()->coverture_img)}}" class="profile-wid-img" alt="">
                        <div class="overlay-content">
                            <div class="text-end p-3">
                                <form method="post" action="{{route('changecov')}}" enctype="multipart/form-data">
                                    @csrf
                                <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                    <input id="profile-foreground-img-file-input" type="file" accept="Image/*" name="photocov" class="profile-foreground-img-file-input">
                                    <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                        <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                    </label>

                                </div>
                                    <button type="submit" id="Changebtn" class="btn btn-warning" style="width: 100%" disabled>Change</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-3">
                        <div class="card mt-n5">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                        <img src="{{asset('uploads/photouser/'.Auth::user()->image)}}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                        <form method="post" action="{{route('changepro')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                               <input id="profile-img-file-input" name="photopro" type="file" class="profile-img-file-input">
                                                 <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                   <span class="avatar-title rounded-circle bg-light text-body">
                                                    <i class="ri-camera-fill"></i>
                                                    </span>
                                                 </label>
                                                <div class="flex-shrink-0">
                                                <button type="submit" id="change2btnn" class="btn btn-warning" disabled style="margin-top: 37px;position: relative;right: 66px">Change</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <h5 class="fs-16 mb-1" style="margin-top: 27px">{{Auth::user()->name}}</h5>
                                    <p class="text-muted mb-0">{{Auth::user()->categorie}}</p>
                                </div>
                            </div>
                        </div>
                        <!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-5">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-0">Your Skills</h5>
                                    </div>
                                </div>
                                @foreach($skills as $skills)
                                    <p>{{$skills->name}}</p>
                                <div class="progress animated-progress custom-progress progress-label">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{$skills->level}}%" aria-valuenow="{{$skills->level}}" aria-valuemin="0" aria-valuemax="100">
                                        <div class="label">{{$skills->level}}</div>
                                    </div>
                                </div>
                                    <br>
                                @endforeach

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-0">Portfolio</h5>
                                    </div>
                                </div>
                                <form method="post" action="{{route('update_account')}}">
                                    @csrf
                                <div class="mb-3 d-flex">
                                    <div class="avatar-xs d-block flex-shrink-0 me-3">
                                       <span class="avatar-title rounded-circle fs-16 bg-dark text-light">
                                          <i class="ri-github-fill"></i>
                                        </span>
                                    </div>
                                    <input type="url" class="form-control" name="github" id="gitUsername" placeholder="Username" >
                                </div>
                                <div class="mb-3 d-flex">
                                    <div class="avatar-xs d-block flex-shrink-0 me-3">
                                       <span class="avatar-title rounded-circle fs-16 bg-primary">
                                          <i class="ri-global-fill"></i>
                                       </span>
                                    </div>
                                    <input type="text" pattern="[a-zA-Z0-9:/._-]+" name="website" class="form-control" id="websiteInput" placeholder="www.example.com" >
                                </div>
                                <div class="mb-3 d-flex">
                                    <div class="avatar-xs d-block flex-shrink-0 me-3">
                                       <span class="avatar-title rounded-circle fs-16 bg-primary">
                                          <i class="ri-facebook-fill"></i>
                                       </span>
                                    </div>
                                    <input type="url" class="form-control" name="facebook" id="dribbleName" placeholder="Username" >
                                </div>
                                <div class="d-flex">
                                    <div class="avatar-xs d-block flex-shrink-0 me-3">
                                       <span class="avatar-title rounded-circle fs-16 bg-danger">
                                           <i class="ri-linkedin-fill"></i>
                                       </span>
                                    </div>
                                    <input type="url" class="form-control" name="linkedin" id="pinterestName" placeholder="Username">
                                </div>
                                    <br>
                                    <button type="submit" class="btn btn-warning" style="width: 100%">Save</button>
                                </form>
                                <br>

                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-xxl-9">
                        <div class="card mt-xxl-n5">
                            <div class="card-header">
                                <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                            <i class="fas fa-home"></i> Personal Details
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                            <i class="far fa-user"></i> Change Password
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#experience" role="tab">
                                            <i class="far fa-envelope"></i> Experience
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#diplome" role="tab">
                                            <i class="far fa-envelope"></i>Diplome
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#skill" role="tab">
                                            <i class="far fa-envelope"></i>Skills
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                                            <i class="far fa-envelope"></i> Privacy Policy
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-4">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <form action="">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="firstnameInput" class="form-label">First Name</label>
                                                        <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your firstname" value="{{Auth::user()->name}}">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                        <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="{{Auth::user()->phone}}">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="emailInput" class="form-label">Email Address</label>
                                                        <input type="email" class="form-control" disabled id="emailInput" placeholder="Enter your email" value="daveadame@velzon.com">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="JoiningdatInput" class="form-label">Joining Date</label>
                                                        <input type="text" class="form-control" disabled data-provider="flatpickr" id="JoiningdatInput" data-date-format="d M, Y" data-deafult-date="24 Nov, 2021" placeholder="Select date" />
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="designationInput" class="form-label">Designation</label>
                                                        <input type="text" class="form-control" id="designationInput" placeholder="Designation" value="{{Auth::user()->categorie }} / {{Auth::user()->sous_categorie }}">
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="cityInput" class="form-label">City</label>
                                                        <input type="text" class="form-control" id="cityInput" placeholder="City" value="{{Auth::user()->ville}}" />
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="countryInput" class="form-label">Country</label>
                                                        <input type="text" class="form-control"  id="countryInput" placeholder="Country" value="{{Auth::user()->country}}" />
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div class="mb-3">
                                                        <label for="zipcodeInput" class="form-label">Zip Code</label>
                                                        <input type="text" class="form-control" minlength="5" maxlength="6" id="zipcodeInput" placeholder="Enter zipcode" value="{{Auth::user()->codepostal}}">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3 pb-2">
                                                        <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                                        <textarea class="form-control" id="exampleFormControlTextarea" placeholder="{{Auth::user()->bio}}" rows="3"></textarea>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <button type="submit" class="btn btn-primary">Updates</button>
                                                        <button type="button" class="btn btn-soft-success">Cancel</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="changePassword" role="tabpanel">
                                        <form action="javascript:void(0);">
                                            <div class="row g-2">
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                        <input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="newpasswordInput" class="form-label">New Password*</label>
                                                        <input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-4">
                                                    <div>
                                                        <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                        <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <a href="javascript:void(0);" class="link-primary text-decoration-underline">Forgot Password ?</a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success">Change Password</button>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                        <div class="mt-4 mb-3 border-bottom pb-2">
                                            <div class="float-end">
                                                <a href="javascript:void(0);" class="link-primary">All Logout</a>
                                            </div>
                                            <h5 class="card-title">Login History</h5>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                    <i class="ri-smartphone-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>iPhone 12 Pro</h6>
                                                <p class="text-muted mb-0">Los Angeles, United States - March 16 at 2:47PM</p>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);">Logout</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                    <i class="ri-tablet-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Apple iPad Pro</h6>
                                                <p class="text-muted mb-0">Washington, United States - November 06 at 10:43AM</p>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);">Logout</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                    <i class="ri-smartphone-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Galaxy S21 Ultra 5G</h6>
                                                <p class="text-muted mb-0">Conneticut, United States - June 12 at 3:24PM</p>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);">Logout</a>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 avatar-sm">
                                                <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                    <i class="ri-macbook-line"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6>Dell Inspiron 14</h6>
                                                <p class="text-muted mb-0">Phoenix, United States - July 26 at 8:10AM</p>
                                            </div>
                                            <div>
                                                <a href="javascript:void(0);">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="experience" role="tabpanel">
                                        <form>
                                            <div id="newlink">
                                                <div id="1">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="jobTitle" class="form-label">Job Title</label>
                                                                <input type="text" class="form-control" id="jobTitle" placeholder="Job title" value="Lead Designer / Developer">
                                                            </div>
                                                        </div>

                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="companyName" class="form-label">Company Name</label>
                                                                <input type="text" class="form-control" id="companyName" placeholder="Company name" value="Themesbrand">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="experienceYear" class="form-label">Experience Years</label>
                                                                <div class="row">
                                                                    <div class="col-lg-5">
                                                                        <select class="form-control" data-choices data-choices-search-false name="experienceYear" id="experienceYear">
                                                                            <option value="">Select years</option>
                                                                            <option value="Choice 1">2001</option>
                                                                            <option value="Choice 2">2002</option>
                                                                            <option value="Choice 3">2003</option>
                                                                            <option value="Choice 4">2004</option>
                                                                            <option value="Choice 5">2005</option>
                                                                            <option value="Choice 6">2006</option>
                                                                            <option value="Choice 7">2007</option>
                                                                            <option value="Choice 8">2008</option>
                                                                            <option value="Choice 9">2009</option>
                                                                            <option value="Choice 10">2010</option>
                                                                            <option value="Choice 11">2011</option>
                                                                            <option value="Choice 12">2012</option>
                                                                            <option value="Choice 13">2013</option>
                                                                            <option value="Choice 14">2014</option>
                                                                            <option value="Choice 15">2015</option>
                                                                            <option value="Choice 16">2016</option>
                                                                            <option value="Choice 17" selected>2017</option>
                                                                            <option value="Choice 18">2018</option>
                                                                            <option value="Choice 19">2019</option>
                                                                            <option value="Choice 20">2020</option>
                                                                            <option value="Choice 21">2021</option>
                                                                            <option value="Choice 22">2022</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-auto align-self-center">
                                                                        to
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-5">
                                                                        <select class="form-control" data-choices data-choices-search-false name="choices-single-default2">
                                                                            <option value="">Select years</option>
                                                                            <option value="Choice 1">2001</option>
                                                                            <option value="Choice 2">2002</option>
                                                                            <option value="Choice 3">2003</option>
                                                                            <option value="Choice 4">2004</option>
                                                                            <option value="Choice 5">2005</option>
                                                                            <option value="Choice 6">2006</option>
                                                                            <option value="Choice 7">2007</option>
                                                                            <option value="Choice 8">2008</option>
                                                                            <option value="Choice 9">2009</option>
                                                                            <option value="Choice 10">2010</option>
                                                                            <option value="Choice 11">2011</option>
                                                                            <option value="Choice 12">2012</option>
                                                                            <option value="Choice 13">2013</option>
                                                                            <option value="Choice 14">2014</option>
                                                                            <option value="Choice 15">2015</option>
                                                                            <option value="Choice 16">2016</option>
                                                                            <option value="Choice 17">2017</option>
                                                                            <option value="Choice 18">2018</option>
                                                                            <option value="Choice 19">2019</option>
                                                                            <option value="Choice 20" selected>2020</option>
                                                                            <option value="Choice 21">2021</option>
                                                                            <option value="Choice 22">2022</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="jobDescription" class="form-label">Job Description</label>
                                                                <textarea class="form-control" id="jobDescription" rows="3" placeholder="Enter description">You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you're working with reputable font websites. </textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <a class="btn btn-success" href="javascript:deleteEl(1)">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <div id="newForm" style="display: none;">

                                            </div>
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                    <a href="javascript:new_link()" class="btn btn-primary">Add New</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="diplome" role="tabpanel">
                                        <form>
                                            <div id="newlink">
                                                <div id="1">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="jobTitle" class="form-label">Job Title</label>
                                                                <input type="text" class="form-control" id="jobTitle" placeholder="Job title" value="Lead Designer / Developer">
                                                            </div>
                                                        </div>

                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="companyName" class="form-label">Company Name</label>
                                                                <input type="text" class="form-control" id="companyName" placeholder="Company name" value="Themesbrand">
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="experienceYear" class="form-label">Experience Years</label>
                                                                <div class="row">
                                                                    <div class="col-lg-5">
                                                                        <select class="form-control" data-choices data-choices-search-false name="experienceYear" id="experienceYear">
                                                                            <option value="">Select years</option>
                                                                            <option value="Choice 1">2001</option>
                                                                            <option value="Choice 2">2002</option>
                                                                            <option value="Choice 3">2003</option>
                                                                            <option value="Choice 4">2004</option>
                                                                            <option value="Choice 5">2005</option>
                                                                            <option value="Choice 6">2006</option>
                                                                            <option value="Choice 7">2007</option>
                                                                            <option value="Choice 8">2008</option>
                                                                            <option value="Choice 9">2009</option>
                                                                            <option value="Choice 10">2010</option>
                                                                            <option value="Choice 11">2011</option>
                                                                            <option value="Choice 12">2012</option>
                                                                            <option value="Choice 13">2013</option>
                                                                            <option value="Choice 14">2014</option>
                                                                            <option value="Choice 15">2015</option>
                                                                            <option value="Choice 16">2016</option>
                                                                            <option value="Choice 17" selected>2017</option>
                                                                            <option value="Choice 18">2018</option>
                                                                            <option value="Choice 19">2019</option>
                                                                            <option value="Choice 20">2020</option>
                                                                            <option value="Choice 21">2021</option>
                                                                            <option value="Choice 22">2022</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-auto align-self-center">
                                                                        to
                                                                    </div>
                                                                    <!--end col-->
                                                                    <div class="col-lg-5">
                                                                        <select class="form-control" data-choices data-choices-search-false name="choices-single-default2">
                                                                            <option value="">Select years</option>
                                                                            <option value="Choice 1">2001</option>
                                                                            <option value="Choice 2">2002</option>
                                                                            <option value="Choice 3">2003</option>
                                                                            <option value="Choice 4">2004</option>
                                                                            <option value="Choice 5">2005</option>
                                                                            <option value="Choice 6">2006</option>
                                                                            <option value="Choice 7">2007</option>
                                                                            <option value="Choice 8">2008</option>
                                                                            <option value="Choice 9">2009</option>
                                                                            <option value="Choice 10">2010</option>
                                                                            <option value="Choice 11">2011</option>
                                                                            <option value="Choice 12">2012</option>
                                                                            <option value="Choice 13">2013</option>
                                                                            <option value="Choice 14">2014</option>
                                                                            <option value="Choice 15">2015</option>
                                                                            <option value="Choice 16">2016</option>
                                                                            <option value="Choice 17">2017</option>
                                                                            <option value="Choice 18">2018</option>
                                                                            <option value="Choice 19">2019</option>
                                                                            <option value="Choice 20" selected>2020</option>
                                                                            <option value="Choice 21">2021</option>
                                                                            <option value="Choice 22">2022</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--end col-->
                                                                </div>
                                                                <!--end row-->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="jobDescription" class="form-label">Job Description</label>
                                                                <textarea class="form-control" id="jobDescription" rows="3" placeholder="Enter description">You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you're working with reputable font websites. </textarea>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <a class="btn btn-success" href="javascript:deleteEl(1)">Delete</a>
                                                        </div>
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <div id="newForm" style="display: none;">

                                            </div>
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                    <a href="javascript:new_link()" class="btn btn-primary">Add New</a>
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="skill" role="tabpanel">
                                        <form method="POST" action="{{route('addskill')}}">
                                            @csrf
                                            <div class="mb-3">
                                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Add Skill (e.g. Voice Talent)" aria-describedby="emailHelp" style="width: 90%;margin: auto">
                                                @error('name')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                                <br>
                                                <select class="form-select" aria-label="Default select example" name="etat" id="range" style="width: 90%;margin: auto" onchange="change()">
                                                    <option value="Beginner">Beginner</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Expert">Expert</option>
                                                </select>
                                                @error('etat')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                                <br>
                                                <p id="demo"></p>
                                                <input type="range" class="form-range" min="0" max="100" name="level" id="myRange" style="display: block">
                                                <br>
                                                <br>
                                                <button type="submit" class="btn btn-warning" style="margin-left: 17px ; width: 90%;color: whitesmoke">Add</button>
                                            </div>
                                        </form>

                                    </div>
                                    <!--end tab-pane-->
                                    <div class="tab-pane" id="privacy" role="tabpanel">
                                        <div class="mb-4 pb-2">
                                            <h5 class="card-title text-decoration-underline mb-3">Security:</h5>
                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-14 mb-1">Two-factor Authentication</h6>
                                                    <p class="text-muted">Two-factor authentication is an enhanced security meansur. Once enabled, you'll be required to give two types of identification when you log into Google Authentication and SMS are Supported.</p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Enable Two-facor Authentication</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-14 mb-1">Secondary Verification</h6>
                                                    <p class="text-muted">The first factor is a password and the second commonly includes a text with a code sent to your smartphone, or biometrics using your fingerprint, face, or retina.</p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set up secondary method</a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                                <div class="flex-grow-1">
                                                    <h6 class="fs-14 mb-1">Backup Codes</h6>
                                                    <p class="text-muted mb-sm-0">A backup code is automatically generated for you when you turn on two-factor authentication through your iOS or Android Twitter app. You can also generate a backup code on twitter.com.</p>
                                                </div>
                                                <div class="flex-shrink-0 ms-sm-3">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Generate backup codes</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="card-title text-decoration-underline mb-3">Application Notifications:</h5>
                                            <ul class="list-unstyled mb-0">
                                                <li class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <label for="directMessage" class="form-check-label fs-14">Direct messages</label>
                                                        <p class="text-muted">Messages from people you follow</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="directMessage" checked />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="desktopNotification">
                                                            Show desktop notifications
                                                        </label>
                                                        <p class="text-muted">Choose the option you want as your default setting. Block a site: Next to "Not allowed to send notifications," click Add.</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="emailNotification">
                                                            Show email notifications
                                                        </label>
                                                        <p class="text-muted"> Under Settings, choose Notifications. Under Select an account, choose the account to enable notifications for. </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="emailNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="chatNotification">
                                                            Show chat notifications
                                                        </label>
                                                        <p class="text-muted">To prevent duplicate mobile notifications from the Gmail and Chat apps, in settings, turn off Chat notifications.</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="chatNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="d-flex mt-2">
                                                    <div class="flex-grow-1">
                                                        <label class="form-check-label fs-14" for="purchaesNotification">
                                                            Show purchase notifications
                                                        </label>
                                                        <p class="text-muted">Get real-time purchase alerts to protect yourself from fraudulent charges.</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="purchaesNotification" />
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div>
                                            <h5 class="card-title text-decoration-underline mb-3">Delete This Account:</h5>
                                            <p class="text-muted">Go to the Data & Privacy section of your profile Account. Scroll to "Your data & privacy options." Delete your Profile Account. Follow the instructions to delete your account :</p>
                                            <div>
                                                <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password" value="make@321654987" style="max-width: 265px;">
                                            </div>
                                            <div class="hstack gap-2 mt-3">
                                                <a href="javascript:void(0);" class="btn btn-soft-danger">Close & Delete This Account</a>
                                                <a href="javascript:void(0);" class="btn btn-light">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
        </div>

    </section>
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

</x-freelancer-layout>
<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;
    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>

<script>
    const allRanges = document.querySelectorAll(".range-wrap");
    allRanges.forEach(wrap => {
        const range = wrap.querySelector(".range");
        const bubble = wrap.querySelector(".bubble");

        range.addEventListener("input", () => {
            setBubble(range, bubble);
        });
        setBubble(range, bubble);
    });

    function setBubble(range, bubble) {
        const val = range.value;
        const min = range.min ? range.min : 0;
        const max = range.max ? range.max : 100;
        const newVal = Number(((val - min) * 100) / (max - min));
        bubble.innerHTML = val;

        // Sorta magic numbers based on size of the native UI thumb
        bubble.style.left = `calc(${newVal}% + (${8 - newVal * 0.15}px))`;
    }
</script>
<!-- JAVASCRIPT -->
<script src="{{asset('FreeAssets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('FreeAssets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('FreeAssets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('FreeAssets/js/plugins.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('FreeAssets/libs/swiper/swiper-bundle.min.js')}}"></script>
<!-- profile init js -->
<script src="{{asset('FreeAssets/js/pages/profile-setting.init.js')}}"></script>
<!-- App js -->
<script src="{{asset('FreeAssets/js/app.js')}}"></script>
</body>
</html>
