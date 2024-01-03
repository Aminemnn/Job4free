<!DOCTYPE html>
<html>

<head>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%;

    }

    h2{
        color: #2F8D46;
    }
    #form {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #form fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .finish {
        text-align: center
    }

    #form fieldset:not(:first-of-type) {
        display: none
    }

    #form .previous-step, .next-step {
        width: 100px;
        justify-content: center;
        text-align: center;
        align-items: center;
        color: white;
        border: 0 none;
        border-radius: 20px;
        cursor: pointer;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        margin: 10px 5px 10px 0px;
        float: right;
        padding-left: 2px;
    }

    .form, .previous-step {
        background: #1bc7de;
        padding: 20px;
        padding-left: 18px;
        border-radius: 20px;
        font-family: 'Times New Roman', Times, serif;
        justify-content: center;
        text-align: center;
        padding-left: 13px;
    }

    .form, .next-step {
        background: #2F8D46;
        padding: 20px;
        padding-left: 18px;
        border-radius: 20px;
        justify-content: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    #form .previous-step:hover,
    #form .previous-step:focus {
        background-color: #000000
    }

    #form .next-step:hover,
    #form .next-step:focus {
        background-color: #2F8D46
    }

    .text {
        color: #2F8D46;
        font-weight: normal
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
        width: 1200px;
        position: relative;
        right: 370px;


    }

    #progressbar .active {
        color: #2F8D46
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar #step1:before {
        content: "1"
    }

    #progressbar #step2:before {
        content: "2"
    }

    #progressbar #step3:before {
        content: "3"
    }

    #progressbar #step4:before {
        content: "4"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #2F8D46
    }

    .progress {
        height: 20px;
        width: 737px;
        position: relative;
        right: 120px;
    }

    .progress-bar {
        background-color: #2F8D46
    }
    #text1:hover{
        text-decoration-line: underline;
        text-decoration-color: #1099cf;
    }
    input[type="radio"] {
        display: none;
        margin: auto;
    }

    label img {
        cursor: pointer;
        border: 2px solid transparent;
        transform: scale(0.5);
        width: 100px;
    }


    .radio-container{
        border: 2px solid #E1ECFE;
        background-color: #E1ECFE;
        border-radius: 13px;

    }
    .radio-containe2{
        border: 2px solid #E1ECFE;
        background-color: #E1ECFE;
        border-radius: 13px;

    }
    .radio-containe2:hover{
        background-color: #C7DCFF;
    }
    .radio-container:hover{
        background-color: #C7DCFF;
    }
    input[type="radio"]:checked + .radio-container{
        background-color: #2563eb;

    }
    .datepicker-toggle {
        display: inline-block;
        position: relative;
        width: 18px;
        height: 19px;
    }
    .datepicker-toggle-button {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-image: url('data:image/svg+xml;base64,...');
    }

</style>
<body>
<p style="margin-left: 33px;margin-top: 23px"><i class="fa-solid fa-arrow-left"></i><a href="{{route('client')}}" style="text-decoration: none;color: black">  Home</a></p>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-9 col-md-7
				col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="px-0 pt-4 pb-0 mt-3 mb-3">
                <form id="form" action="{{route('addann')}}" method="POST">
                    @csrf
                    <ul id="progressbar">
                        <li class="active" id="step1">
                            <strong>Overview</strong>
                        </li>
                        <li id="step2"><strong>Payment Category</strong></li>
                        <li id="step3"><strong>Payment Type</strong></li>
                        <li id="step4"><strong>Description and number of proposals</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar"></div>
                    </div> <br>
                    <fieldset>
                        <div class="card" style="width: 29rem;">
                            <div class="card-body">
                                <h4 class="card-title">Project overview</h4>
                                <br>
                                <div class="form-group">
                                    <h5 for="exampleInputTitle1" style="margin-right: 70%;">Project Title</h5>
                                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" required>
                                    <br>
                                    <hr>
                                    <h5 style="margin-right: 75%;">Domaine</h5>
                                    <p>Select a domaine so it's easy for freelancers to find your project.</p>
                                    <!-- Button trigger modal -->
                                    <p data-toggle="modal" data-target="#exampleModalCenter" style="color:#1099cf;text-align: left;cursor: pointer" id="text1">
                                        Browse all Domaine
                                    </p>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="check1" required name="category" value="" checked style="display: none">
                                        <label class="form-check-label" for="check1" id="check"></label>

                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="check2" name="sous_category" required value="" checked style="display: none">
                                        <label class="form-check-label" for="check2" id="checkk"></label>

                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Project categorization</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <label style="font-family: 'Trebuchet MS';margin-right: 80%">Domaine</label>
                                                    <select class="form-control" aria-label="Default select example" name="categorie" value="none" id="category" required onchange="change()">
                                                        <option value="">Select domaine</option>
                                                        @foreach ($categories as $category)
                                                            <option >{{ $category->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                    <br>
                                                    <select class="form-control animate__animated animate__jackInTheBox" aria-label="Default select example" name="subcategory1" id="sub_category_graphics_design" onchange="change2()" >
                                                        <option value="null" id="null" >---</option>
                                                        @foreach ($graphics_design as $graphics_design)
                                                            <option value="{{ $graphics_design->nom }}" >{{ $graphics_design->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                    <select class="form-control animate__animated animate__jackInTheBox" aria-label="Default select example" name="subcategory2" id="sub_category_digital_marketing" onchange="change2()" >
                                                        <option value="null" id="null" >---</option>
                                                        @foreach ($digital_marketing as $digital_marketing)
                                                            <option value="{{ $digital_marketing->nom }}" >{{ $digital_marketing->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                    <select class="form-control animate__animated animate__jackInTheBox" aria-label="Default select example" name="subcategory3" id="sub_category_writing_translation" onchange="change2()" >
                                                        <option value="null" id="null" >---</option>
                                                        @foreach ($writing_translation as $writing_translation)
                                                            <option value="{{ $writing_translation->nom }}" >{{ $writing_translation->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                    </select>
                                                    <select class="form-control animate__animated animate__jackInTheBox" aria-label="Default select example" name="subcategory4" id="sub_category_vedio_annimation" onchange="change2()" >
                                                        <option value="null" id="null" >---</option>
                                                        @foreach ($video_annimation as $video_annimation)
                                                            <option value="{{ $video_annimation->nom }}" >{{ $video_annimation->nom }}</option>
                                                        @endforeach

                                                    </select>
                                                    <select class="form-control animate__animated animate__jackInTheBox" aria-label="Default select example" name="subcategory5" id="sub_category_music_audio" onchange="change2()">
                                                        <option value="null" id="null" >---</option>
                                                        @foreach ($music_audio as $music_audio)
                                                            <option value="{{ $music_audio->nom }}" >{{ $music_audio->nom }}</option>
                                                        @endforeach

                                                    </select>
                                                    <select class="form-control animate__animated animate__jackInTheBox" aria-label="Default select example" name="subcategory6" id="sub_category_programming_tech" onchange="change2()">
                                                        <option value="null" id="null" >---</option>
                                                        @foreach ($programming_tech as $programming_tech)
                                                            <option value="{{ $programming_tech->nom }}" >{{ $programming_tech->nom }}</option>
                                                        @endforeach

                                                    </select>
                                                    <select class="form-control animate__animated animate__jackInTheBox" aria-label="Default select example" name="subcategory7" id="sub_category_business" onchange="change2()">
                                                        <option value="null" id="null" >---</option>
                                                        @foreach ($business as $business)
                                                            <option value="{{ $business->nom }}" >{{ $business->nom }}</option>
                                                        @endforeach

                                                    </select>
                                                    <select class="form-control animate__animated animate__jackInTheBox" aria-label="Default select example" name="subcategory8" id="sub_category_life_style" onchange="change2()">
                                                        <option value="null" id="null">---</option>
                                                        @foreach ($life_style as $life_style)
                                                            <option value="{{ $life_style->nom }}" >{{ $life_style->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                    <br>
                                                    <input class="form-control animate__animated animate__jackInTheBox" type="text"  aria-label="default input example" name="other" id="other" placeholder="enter your subcategory here" style="border-color: gray; border-radius: 5px">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" disabled style="background-color: #1099cf; border-color: #1099cf" onclick="save()" id="btnsave" data-dismiss="modal">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next-step"
                               class="next-step" value="Next Step" />
                    </fieldset>
                    <fieldset>
                        <div class="mt-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <label class="radio-container">
                                            <img src="../../../assets/gestion-du-temps.png" alt="Option 1">
                                            <p style="text-align: center;font-family: 'Trebuchet MS'">Per /hour</p>
                                            <input type="radio" name="priceCat" value="Per /hour" onclick="changeColor(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="radio-containe2">
                                            <img src="../../../assets/horloge-circulaire.png" alt="Option 2">
                                            <p style="text-align: center; font-family: 'Trebuchet MS'">Fixed Price</p>
                                            <input type="radio" name="priceCat" value="Fixed Price" onclick="changeColor(this)" >
                                            <span class="checkmark"></span>
                                        </label>
                                        @error('priceCat')
                                        <script>
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: 'Fill in the priceCat input please !',
                                            })
                                        </script>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="currency-field" style="margin-right: 70%">Enter Amount</label>
                            <input type="number" class="form-control" name="price" id="price" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" value="" data-type="currency" >
                            @error('price')
                            <script>
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Fill in the price input please !',
                            })
                            </script>
                            @enderror
                        </div>
                        <input type="button" name="next-step"
                               class="next-step" value="Next Step" />
                        <input type="button" name="previous-step"
                               class="previous-step"
                               value="Previous Step" />
                    </fieldset>
                    <fieldset>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Price type</label>
                            <select class="form-control" name="Price_type" id="Price_type" required onchange="change3()">
                                <option value="---" disabled>---</option>
                                <option value="Per semaine">Per semaine</option>
                                <option value="Specific date">Specific date</option>
                            </select>
                            @error('Price_type')
                            <script>
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Fill in the Price_type input please !',
                                })
                            </script>
                            @enderror
                        </div>
                        <div class="form-group" id="semaine" style="display: block">
                            <select class="form-control" id="exampleFormControlSelect1" name="semaine">
                                <option value="0" selected>0</option>
                                    @for($i=1;$i<=156;$i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="form-group" id="date" style="display: none">
                            <input type="date" class="form-control" id="date" aria-describedby="emailHelp" name="date">
                        </div>
                        <input type="button" name="next-step"
                               class="next-step" value="Final Step" />
                        <input type="button" name="previous-step"
                               class="previous-step"
                               value="Previous Step" />
                    </fieldset>
                    <fieldset>
                        <div class="finish">
                            <label>Number Of Proposals</label>
                            <select class="form-control" aria-label="Default select example" name="nb_prop">
                                @for($i=1;$i<=5;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3" oninput="verifierTexte()" required></textarea>
                                <p id="message"></p>
                                @error('description')
                                <script>
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: '{{$message}}',
                                    })
                                </script>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning" id="submit" style="padding: 20px;border-radius: 20px;margin-left: 241px;margin-top: 10px;">Save</button>
                        <input type="button" name="previous-step"
                               class="previous-step"
                               value="Previous Step" />
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@if (session('status'))
    <script>
        Swal.fire(
            'Publish !',
            'You Post is Save!',
            'success'
        )
    </script>
@endif
</body>
<script>
    $(document).ready(function () {
        var currentGfgStep, nextGfgStep, previousGfgStep;
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next-step").click(function () {
                currentGfgStep = $(this).parent();
                nextGfgStep = $(this).parent().next();

                $("#progressbar li").eq($("fieldset")
                    .index(nextGfgStep)).addClass("active");

                nextGfgStep.show();
                currentGfgStep.animate({opacity: 0}, {
                    step: function (now) {
                        opacity = 1 - now;

                        currentGfgStep.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        nextGfgStep.css({'opacity': opacity});
                    },
                    duration: 500
                });
                setProgressBar(++current);
        });

        $(".previous-step").click(function () {

            currentGfgStep = $(this).parent();
            previousGfgStep = $(this).parent().prev();

            $("#progressbar li").eq($("fieldset")
                .index(currentGfgStep)).removeClass("active");

            previousGfgStep.show();

            currentGfgStep.animate({ opacity: 0 }, {
                step: function (now) {
                    opacity = 1 - now;

                    currentGfgStep.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previousGfgStep.css({ 'opacity': opacity });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(currentStep) {
            var percent = parseFloat(100 / steps) * current;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function () {
            return false;
        })
    });

</script>
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
            console.log(displaytext);
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

        if(displaymarketing!="---"){
            document.getElementById("btnsave").disabled=false;
        }
        if(displaygraphics!="---"){
            document.getElementById("btnsave").disabled=false;
        }
        if(displaymwriting!="---"){
            document.getElementById("btnsave").disabled=false;
        }
        if(displayvideo!="---"){
            document.getElementById("btnsave").disabled=false;
        }
        if(displaymusic!="---"){
            document.getElementById("btnsave").disabled=false;
        }
        if(displayprogramming!="---"){
            document.getElementById("btnsave").disabled=false;
        }
        if(displaybusiness!="---"){
            document.getElementById("btnsave").disabled=false;
        }
        if(displaylifestyle!="---"){
            document.getElementById("btnsave").disabled=false;
        }







    }
    function save(){
        var category = document.getElementById("category");
        var graphics=document.getElementById("sub_category_graphics_design");
        var degital_marketing=document.getElementById("sub_category_digital_marketing");
        var writing_translation=document.getElementById("sub_category_writing_translation");
        var video_annimation=document.getElementById("sub_category_vedio_annimation");
        var music_audio=document.getElementById("sub_category_music_audio");
        var programming_tech=document.getElementById("sub_category_programming_tech");
        var business=document.getElementById("sub_category_business");
        var life_style=document.getElementById("sub_category_life_style");


        var categoryOption = category.options[category.selectedIndex];
        const categorieValue = categoryOption.value;
        document.getElementById("check").innerHTML=categorieValue;
        const input=document.getElementById("check1");
        input.value=categorieValue;
        document.getElementById("check1").style.display="block";

        var graphicsOption=graphics.options[graphics.selectedIndex];
        const graphicsValue=graphicsOption.value;

        if (graphicsValue != "null"){
            document.getElementById("checkk").innerHTML=graphicsValue;
            const input=document.getElementById("check2");
            input.value=graphicsValue;
            document.getElementById("check2").style.display="block";
        }
        var degitalOption=degital_marketing.options[degital_marketing.selectedIndex];
        const degitalValue=degitalOption.value;
        if (degitalValue != "null"){
            document.getElementById("checkk").innerHTML=degitalValue;
            const input=document.getElementById("check2");
            input.value=degitalValue;
            document.getElementById("check2").style.display="block";
        }
        var writingOption=writing_translation.options[writing_translation.selectedIndex];
        const writingValue=writingOption.value;
        if (writingValue != "null"){
            document.getElementById("checkk").innerHTML=writingValue;
            const input=document.getElementById("check2");
            input.value=writingValue;
            document.getElementById("check2").style.display="block";
            console.log(writingValue);
        }
        var videoOption=video_annimation.options[video_annimation.selectedIndex];
        const videoValue=videoOption.value;
        if (videoValue != "null"){
            document.getElementById("checkk").innerHTML=videoValue;
            const input=document.getElementById("check2");
            input.value=videoValue;
            document.getElementById("check2").style.display="block";
            console.log(videoValue);
        }
        var musicOption=music_audio.options[music_audio.selectedIndex];
        const musicValue=musicOption.value;
        if (musicValue != "null"){
            document.getElementById("checkk").innerHTML=musicValue;
            const input=document.getElementById("check2");
            input.value=musicValue;
            document.getElementById("check2").style.display="block";
        }
        var programmingOption=programming_tech.options[programming_tech.selectedIndex];
        const programmingValue=programmingOption.value;
        if (programmingValue != "null"){
            document.getElementById("checkk").innerHTML=programmingValue;
            const input=document.getElementById("check2");
            input.value=programmingValue;
            document.getElementById("check2").style.display="block";
        }
        var businessOption=business.options[business.selectedIndex];
        const businessValue=businessOption.value;
        if (businessValue != "null"){
            document.getElementById("checkk").innerHTML=businessValue;
            const input=document.getElementById("check2");
            input.value=businessValue;
            document.getElementById("check2").style.display="block";
        }
        var life_styleOption=life_style.options[life_style.selectedIndex];
        const life_styleValue=life_styleOption.value;
        if (life_styleValue != "null"){
            document.getElementById("checkk").innerHTML=life_styleValue;
            const input=document.getElementById("check2");
            input.value=life_styleValue;
            document.getElementById("check2").style.display="block";
            console.log(life_styleValue);
        }
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
            title: 'Nice !'
        })
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
    function changeColor(radio) {

        const container1 = document.querySelectorAll('.radio-container');
        const container2 = document.querySelectorAll('.radio-containe2');
        if (radio.value=="Per /hour"){
            container1.forEach(container => {
                container.style.backgroundColor = "#9DC2FF";
            });
            container2.forEach(container => {
                container.style.backgroundColor = "#E1ECFE";
            });
        }
        if (radio.value=="Fixed Price"){
            container2.forEach(container => {
                container.style.backgroundColor = "#9DC2FF";
            });
            container1.forEach(container => {
                container.style.backgroundColor = "#E1ECFE";
            });
        }
    }
</script>

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


    const form = document.getElementById('submit');
    const titreInput = document.getElementById('title');
    const categorie=document.getElementById('check1');
    const sous_categorie=document.getElementById('check2');
    const Price_type=document.getElementById('Price_type');
    const description=document.getElementById('description');
    form.addEventListener('click', myfunction);
    function myfunction() {
        if (estVide(titreInput.value)) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Fill in the title input please',
            })
            event.preventDefault(); // Empêche la soumission du formulaire
        }
        if (estVide(categorie.value)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Fill in the categorie input please',
            })
            event.preventDefault(); // Empêche la soumission du formulaire
        }
        if (estVide(sous_categorie.value)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Fill in the sous categorie input please',
            })
            event.preventDefault(); // Empêche la soumission du formulaire
        }
        if (estVide(Price_type.value)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Fill in the price type input please',
            })
            event.preventDefault(); // Empêche la soumission du formulaire
        }
        if (estVide(description.value)){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Fill in the description input please',
            })
            event.preventDefault(); // Empêche la soumission du formulaire
        }

    }

    function estVide(chaine) {
        if (chaine.trim().length === 0) {
            return true;
        } else {
            return false;
        }
    }
</script>
<script>
    function verifierTexte() {
        let textarea = document.getElementById("exampleFormControlTextarea1");
        let texte = textarea.value;
        let longueur = texte.length;
        if (longueur >= 70 && longueur <= 200 ) {
            document.getElementById("message").innerHTML = "The text is valid";
            document.getElementById("message").style.color="#17950e";
        } else {
            document.getElementById("message").innerHTML = "The text must contain between 70 and 200 characters";
            document.getElementById("message").style.color="red";

        }
    }
</script>
</html>
