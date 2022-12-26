<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Travel Freeby</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&amp;display=swap"
            rel="stylesheet"
        />

        <link rel="stylesheet" href="assetsh/css/welcome_css_.css" />
        <script
            src="https://kit.fontawesome.com/4b5d72e539.js"
            crossorigin="anonymous"
        ></script>
    </head>
    <body>
        <header>
            <nav class="fixed_menu">
                <div class="container">
                    <div
                        class="nav-wrapper d-flex align-items-center justify-content-between"
                    >
                        <a href="/" class="brand-logo">
                            <img
                                src="assetsh/img/welcome_img/logo.webp"
                                alt=""
                            />
                        </a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li
                                onclick="menuToggle('toggle_menu')"
                                class="position-relative toggle_link"
                            >
                                <a
                                    class="active d-inline-block"
                                    href="javascript:void(0)"
                                    >Free Quotation
                                </a>
                                <button class="toggle_btn d-inline-block">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu"
                                    class="toggle_menu position-absolute"
                                >
                                    <li>
                                        <a href="/leadsFlightOut">flights</a>
                                    </li>
                                    <li><a href="/leadsHotelOut">hotels</a></li>
                                    <li>
                                        <a href="/leadsPackagesOut">packages</a>
                                    </li>
                                </ul>
                            </li>

                            <li
                                onclick="menuToggle('toggle_menu_my_ques')"
                                class="position-relative toggle_link"
                            >
                                <a
                                    class="active d-inline-block"
                                    href="javascript:void(0)"
                                    >my Quotations
                                </a>
                                <button class="toggle_btn d-inline-block">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu_my_ques"
                                    class="toggle_menu position-absolute"
                                >
                                    <li>
                                        <a href="/myQuotationFlight">flights</a>
                                    </li>
                                    <li>
                                        <a href="/myQuotationHotel">hotels</a>
                                    </li>
                                    <li>
                                        <a href="/myQuotationPackages"
                                            >packages</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li
                                onclick="menuToggle('toggle_menu_bookings')"
                                class="position-relative toggle_link"
                            >
                                <a
                                    class="active d-inline-block"
                                    href="javascript:void(0)"
                                    >my bookings
                                </a>
                                <button class="toggle_btn d-inline-block">
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul
                                    id="toggle_menu_bookings"
                                    class="toggle_menu position-absolute"
                                >
                                    <li>
                                        <a href="/myBookingflight">flights</a>
                                    </li>
                                    <li>
                                        <a href="/myBookinghotel">hotels</a>
                                    </li>
                                    <li>
                                        <a href="/myBookingPackages"
                                            >packages</a
                                        >
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a href="/customerLogin">Log In</a>
                            </li>
                            <li class="">
                                <a href="/customerRegister">Sign Up</a>
                            </li>
                        </ul>
                        <i
                            onclick="menuToggle('nav-mobile')"
                            class="fa fa-bars"
                        ></i>
                    </div>
                </div>
            </nav>
        </header>
        <!-- hero section end -->

        <div class="content"></div>
        <div class="country_selector">
        <div class="container">
            <div class="row">
            <div class="col-md-6 my-3">
                <div class="form-floating">
                    <select class="form-select" id="yourCountry">
                      <option selected>India</option>
                    </select>
                    <label for="yourCountry">Your Country</label>
                  </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="form-floating">
                    <select class="form-select" id="selectCountry" name="selectCountry">
                        <option>Select country</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Aland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Cote D'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and Mcdonald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran, Islamic Republic of</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="XK">Kosovo</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libyan Arab Jamahiriya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="AN">Netherlands Antilles</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territory, Occupied</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthelemy</option>
                        <option value="SH">Saint Helena</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="CS">Serbia and Montenegro</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.s.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    <label for="selectCountry">Select Country</label>
                  </div>
            </div>
        </div>
        </div>
    </div>
        <div class="container">
            <div class="country_list_container">
                <div class="single_country_list">
                    <h2 class="country_head">A</h2>
                    <div class="row">

                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="single_country_list">
                    <h2 class="country_head">B</h2>
                    <div class="row">

                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-3 mb-3">
                            <a href="/afganistan" class="d-flex align-items-center">
                                <i class="flag afgan_flag"></i>
                                <p>Afganistan</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer section start -->

        <footer>
            <div class="container">
                <div class="row bottom_part">
                    <div class="col-md-5">
                        <img
                            src="assetsh/img/welcome_img/logo.png"
                            alt="logo"
                        />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Adipisci, cupiditate.
                        </p>
                    </div>
                    <div class="col-md-2">
                        <ul>
                            <li><a href="/services">Service</a></li>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/visa">Visa</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li><a href="/terms">Teams and Conditions</a></li>
                            <li><a href="/privacy">Privacy Policy</a></li>
                            <li><a href="/cookie">Cookie Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul>
                            <li>
                                <a href="mailto:travelfreeby@gmail.com"
                                    >travelfreeby@gmail.com</a
                                >
                            </li>
                            <li class="social">
                                <a href="https://facebook.com"
                                    ><i class="fa fa-facebook"></i
                                ></a>
                                <a href="https://twitter.com"
                                    ><i class="fa fa-twitter"></i
                                ></a>
                                <a href="https://linkedin.com"
                                    ><i class="fa fa-linkedin"></i
                                ></a>
                                <a href="https://instagram.com"
                                    ><i class="fa fa-instagram"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr style="background: #fff" />
            <div class="text-center copyright">
                <p class="mb-0">
                    Copyright © 2022 Travel Freeby - A Product of EBMV LLP - All
                    Rights Reserved.
                </p>
            </div>
        </footer>

        <div id="spinner" class="spinner">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="assetsh/js/welcome.js"></script>
    </body>
</html>
