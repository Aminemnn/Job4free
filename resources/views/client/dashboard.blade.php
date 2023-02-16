<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js
"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Client Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged ingg!
                </div>
            </div>
            @if (session('status'))
                <script>
                    Swal.fire(
                        'Good job!',
                        'Your data has been registered successfully!',
                        'success'
                    )
                </script>
            @endif
        </div>
    </div>
</x-client-layout>

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

                    <div class="mt-3">
                        <form  method="POST" action="{{route('freelancer')}}">
                            @csrf
                            <label style="font-family: 'Trebuchet MS'">Category</label><span style="color: red !important; display: inline; float: none;">*</span>
                            <select class="form-select" aria-label="Default select example" name="categorie" value="none" id="category" onchange="change()">
                                <option value="">Select category</option>
                                @foreach ($categories as $category)
                                    <option >{{ $category->nom }}</option>
                                @endforeach
                            </select>
                            <br>
                            <label style="font-family: 'Trebuchet MS'" id="labelcategory">Sub Category<span style="color: red " id="span">*</span></label>
                            <select class="form-select" aria-label="Default select example" name="subcategory1" id="sub_category_graphics_design" >
                                <option value="">Select subcategory</option>
                                @foreach ($graphics_design as $graphics_design)
                                    <option value="{{ $graphics_design->name }}" >{{ $graphics_design->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example" name="subcategory2" id="sub_category_digital_marketing" >
                                <option value="">Select subcategory</option>
                                @foreach ($digital_marketing as $digital_marketing)
                                    <option value="{{ $digital_marketing->name }}" >{{ $digital_marketing->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example" name="subcategory3" id="sub_category_writing_translation" >
                                <option value="">Select subcategory</option>
                                @foreach ($writing_translation as $writing_translation)
                                    <option value="{{ $writing_translation->name }}" >{{ $writing_translation->name }}</option>
                                @endforeach
                            </select>
                            </select>
                            <select class="form-select" aria-label="Default select example" name="subcategory4" id="sub_category_vedio_annimation" >
                                <option value="">Select subcategory</option>
                                @foreach ($video_annimation as $video_annimation)
                                    <option value="{{ $video_annimation->name }}" >{{ $video_annimation->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example" name="subcategory5" id="sub_category_music_audio" >
                                <option value="">Select subcategory</option>
                                @foreach ($music_audio as $music_audio)
                                    <option value="{{ $music_audio->name }}" >{{ $music_audio->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example" name="subcategory6" id="sub_category_programming_tech" >
                                <option value="">Select subcategory</option>
                                @foreach ($programming_tech as $programming_tech)
                                    <option value="{{ $programming_tech->name }}" >{{ $programming_tech->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example" name="subcategory7" id="sub_category_business" >
                                <option value="">Select subcategory</option>
                                @foreach ($business as $business)
                                    <option value="{{ $business->name }}" >{{ $business->name }}</option>
                                @endforeach
                            </select>
                            <select class="form-select" aria-label="Default select example" name="subcategory8" id="sub_category_life_style" >
                                <option value="">Select subcategory</option>
                                @foreach ($life_style as $life_style)
                                    <option value="{{ $life_style->name }}" >{{ $life_style->name }}</option>
                                @endforeach
                            </select>
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
                            <label>City</label><span style="color: red !important; display: inline; float: none;">*</span>
                            <input class="form-control" type="text"  aria-label="default input example" name="ville" required style="border-color: gray; border-radius: 5px">
                            <br>
                            <label>Adress</label><span style="color: red !important; display: inline; float: none;">*</span>
                            <input class="form-control" type="text"  aria-label="default input example" name="adresse" required style="border-color: gray; border-radius: 5px">
                            <br>
                            <label>Postal code</label><span style="color: red !important; display: inline; float: none;">*</span>
                            <input class="form-control" type="number"  aria-label="default input example" name="code" required style="border-color: gray; border-radius: 5px">
                            <br>
                            <button type="submit" class="btn btn-primary" style="background-color: #f59977 ;color: white;border-color: #f59977; width: 100%; font-family: 'Trebuchet MS'">Save</button>
                        </form>

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
        }
        if (displaytext=="Graphics & Desgin"){
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
        }
        if (displaytext=="Video & annimation"){
            document.getElementById("sub_category_vedio_annimation").style.display="block";
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("sub_category_life_style").style.display="none";
            document.getElementById("labelcategory").style.display="block";
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
        }
        if (displaytext=="Life Style"){
            document.getElementById("sub_category_life_style").style.display="block";
            document.getElementById("sub_category_graphics_design").style.display="none";
            document.getElementById("sub_category_digital_marketing").style.display="none";
            document.getElementById("sub_category_writing_translation").style.display="none";
            document.getElementById("sub_category_vedio_annimation").style.display="none";
            document.getElementById("sub_category_music_audio").style.display="none";
            document.getElementById("sub_category_programming_tech").style.display="none";
            document.getElementById("sub_category_business").style.display="none";
            document.getElementById("labelcategory").style.display="block";
        }
    }
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
</body>
</html>