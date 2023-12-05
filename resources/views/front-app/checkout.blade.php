@extends('front-app.layout.template')
@section('content')
<div class="top_panel_title top_panel_style_1 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner ">
        <div class="content_wrap">
            <h1 class="page_title">Checkout</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{route('shop')}}">Shop</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Checkout</span>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumbs -->
<!-- Page Content -->
<div class="page_content_wrap page_paddings_yes ">
    <div class="content_wrap">
        <!-- Content -->
        <div class="content">
            <article class="post_item post_item_single">
                <section class="post_content">
                    <div class="woocommerce">
                        <div class="woocommerce-info">Have a coupon?
                            <a href="#" class="showcoupon">Click here to enter your code</a>
                        </div>
                        <form action="{{route('order-submit')}}" method="POST">
                            @csrf
                            <div class="col2-set" id="customer_details">
                                <!-- Billing Details -->
                                <div class="col-1">
                                    <div class="">
                                        <h3>Billing details</h3>
                                        <div class="woocommerce-billing-fields__field-wrapper">
                                            <p class="form-row form-row-first validate-required" id="billing_first_name_field">
                                                <label for="billing_first_name" class="">First name
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="input-text " name="first_name" id="billing_first_name" placeholder="" value="" autofocus="autofocus" />
                                                @error('first_name')
                                                <label class="text-danger">{{$message}}</label>
                                            @enderror
                                            </p>

                                            <p class="form-row form-row-last validate-required" id="billing_last_name_field">
                                                <label for="billing_last_name" class="">Last name
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text"  class="input-text " name="last_name" id="billing_last_name" placeholder="" value="" />
                                            </p>
                                            <p class="form-row form-row-wide" id="billing_company_field">
                                                <label for="billing_company" class="">Company name</label>
                                                <input type="text" class="input-text " name="company_name" id="billing_company" placeholder="" value="" />
                                            </p>
                                            <p class="form-row form-row-wide address-field update_totals_on_change validate-required" id="billing_country_field">
                                                <label for="billing_country" class="" >Country
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <select name="country" id="billing_country" class="border ">
                                                    <option value="">Select a country&hellip;</option>
                                                    <option value="AX">&#197;land Islands</option>
                                                    <option value="AF">Afghanistan</option>
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
                                                    <option value="PW">Belau</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="VG">British Virgin Islands</option>
                                                    <option value="BN">Brunei</option>
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
                                                    <option value="CG">Congo (Brazzaville)</option>
                                                    <option value="CD">Congo (Kinshasa)</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CU">Cuba</option>
                                                    <option value="CW">Cura&ccedil;ao</option>
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
                                                    <option value="FK">Falkland Islands</option>
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
                                                    <option value="HM">Heard Island and McDonald Islands</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IR">Iran</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="CI">Ivory Coast</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao S.A.R., China</option>
                                                    <option value="MK">Macedonia</option>
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
                                                    <option value="FM">Micronesia</option>
                                                    <option value="MD">Moldova</option>
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
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="NF">Norfolk Island</option>
                                                    <option value="KP">North Korea</option>
                                                    <option value="MP">Northern Mariana Islands</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PS">Palestinian Territory</option>
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
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                                                    <option value="BL">Saint Barth&eacute;lemy</option>
                                                    <option value="SH">Saint Helena</option>
                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                    <option value="LC">Saint Lucia</option>
                                                    <option value="SX">Saint Martin (Dutch part)</option>
                                                    <option value="MF">Saint Martin (French part)</option>
                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                    <option value="SZ">Swaziland</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="SY">Syria</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania</option>
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
                                                    <option value="GB" selected='selected'>United Kingdom (UK)</option>
                                                    <option value="US">United States (US)</option>
                                                    <option value="UM">United States (US) Minor Outlying Islands</option>
                                                    <option value="VI">United States (US) Virgin Islands</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VA">Vatican</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="WF">Wallis and Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                                @error('country')
                                                <label class="text-danger">{{$message}}</label>
                                            @enderror
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field">
                                                <label for="billing_address_1" class="">Address
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="input-text " name="address" id="billing_address_1" placeholder="Street address" value="" />
                                                @error('address')
                                                <label class="text-danger">{{$message}}</label>
                                            @enderror
                                            </p>
                                            <p class="form-row form-row-wide address-field" id="billing_address_2_field" data-priority="60">
                                                <input type="text" class="input-text " name="address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="" />
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-required" id="billing_city_field">
                                                <label for="billing_city" class="">Town / City
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="input-text " name="city" id="billing_city" placeholder="" value="" />
                                                @error('city')
                                                <label class="text-danger">{{$message}}</label>
                                            @enderror
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-validate-state" id="billing_state_field">
                                                <label for="billing_state" class="">State / County
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input  type="text" class="input-text " value="" placeholder="" name="state" id="billing_state"  />
                                                @error('state')
                                                <label class="text-danger">{{$message}}</label>
                                            @enderror
                                            </p>
                                            <p class="form-row form-row-wide address-field validate-validate-postcode" id="billing_postcode_field">
                                                <label for="billing_postcode" class="">Postcode / ZIP
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="text" class="input-text " name="postal_code" id="billing_postcode" placeholder="" value="" />
                                                @error('postal_code')
                                                <label class="text-danger">{{$message}}</label>
                                            @enderror
                                            </p>
                                            <p class="form-row form-row-first validate-validate-phone" id="billing_phone_field">
                                                <label for="billing_phone" class="">Phone
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="tel" class="input-text w-100" name="phone" id="billing_phone" style="background:#121215;color:#787678;"  placeholder="" value="" />
                                                @error('phone')
                                                <label class="text-danger">{{$message}}</label>
                                            @enderror
                                            </p>
                                            <p class="form-row form-row-last validate-validate-email" id="billing_email_field" >
                                                <label for="billing_email" class="">Email address
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input type="email" class="input-text " name="email" id="billing_email" placeholder="" value="" />
                                                @error('email')
                                                <label class="text-danger">{{$message}}</label>
                                            @enderror
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Billing Details -->
                                <!-- Additional Information -->
                                <div class="col-2">
                                    <div class="woocommerce-shipping-fields">
                                    </div>
                                    <div class="woocommerce-additional-fields">
                                        <h3>Additional information</h3>

                                    </div>
                                    <div class="woocommerce-additional-fields">

                                        <div class="woocommerce-additional-fields__field-wrapper">
                                            <p class="form-row notes" id="order_comments_field" data-priority="">
                                                <label for="order_comments" class="">Bank Payment</label>
                                                <div class="border py-3 px-2 bg-white">
                                                    <img src="{{asset('assets/bankful.png')}}" class="w-25" alt="">
                                                    <div class="border py-3 my-2 px-3">
                                                        <div class="container-fluid">
                                                            <article class="card">
                                                                <div class="card-body p-5">

                                                                <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
                                                                    <li class="nav-item " style="background: #8B0000;">
                                                                        <a class="nav-link " data-toggle="pill" href="#nav-tab-card">
                                                                        <i class="fa fa-credit-card"></i> Bankful</a></li>
                                                                    <li class="nav-item bg-secondary">
                                                                        <a class="nav-link" data-toggle="pill" href="#nav-tab-paypal">
                                                                        <i class="fab fa-paypal"></i>  Credova</a></li>
                                                                    <li class="nav-item bg-secondary">
                                                                        <a class="nav-link" data-toggle="pill" href="#nav-tab-bank">
                                                                        <i class="fa fa-university"></i>  Sezzle</a></li>
                                                                </ul>

                                                                <div class="tab-content">
                                                                <div class="tab-pane fade show active" id="nav-tab-card">
                                                                        <p class="text-danger">Only Bankful is available for payment</p>

                                                                    <div class="form-group">
                                                                        <label for="username">Full name (on the card)</label>
                                                                        <input type="text" class="form-control bg-white" name="cardname" placeholder="" required="">
                                                                    </div> <!-- form-group.// -->

                                                                    <div class="form-group">
                                                                        <label for="cardNumber">Card number</label>
                                                                        <div class="input-group">
                                                                            <input type="number" required class="form-control bg-white" name="cardnumber" placeholder="">
                                                                            <div class="input-group-append" style="    border: 1px solid #D4D4D4;
                                                                            padding: 6px;
                                                                            border-radius: 0px;">
                                                                                <span class="input-group-text text-muted">
                                                                                    <i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>  
                                                                                    <i class="fab fa-cc-mastercard"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div> <!-- form-group.// -->

                                                                    <div class="row ">
                                                                        <div class="col-sm-8 p-0">
                                                                            <div class="form-group">
                                                                                <label><span class="hidden-xs">Expiration</span> </label>
                                                                                <div class="input-group">
                                                                                    <input type="text"  required class="form-control bg-white" placeholder="MM" name="expiration_month">
                                                                                    <input type="text" required  class="form-control bg-white" placeholder="YY" name="expiration_year">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                                                                                <input type="number" name="cvv" class="form-control bg-white" required="">
                                                                            </div> <!-- form-group.// -->
                                                                        </div>
                                                                    </div> <!-- row.// -->

                                                                </div> <!-- tab-pane.// -->
                                                                <div class="tab-pane fade" id="nav-tab-paypal">
                                                                <p>Paypal is easiest way to pay online</p>
                                                                <p>
                                                                <button type="button" class="btn btn-primary"> <i class="fab fa-paypal"></i> Log in my Paypal </button>
                                                                </p>
                                                                <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. </p>
                                                                </div>
                                                                <div class="tab-pane fade" id="nav-tab-bank">
                                                                <p>Bank accaunt details</p>
                                                                <dl class="param">
                                                                  <dt>BANK: </dt>
                                                                  <dd> THE WORLD BANK</dd>
                                                                </dl>
                                                                <dl class="param">
                                                                  <dt>Accaunt number: </dt>
                                                                  <dd> 12345678912345</dd>
                                                                </dl>
                                                                <dl class="param">
                                                                  <dt>IBAN: </dt>
                                                                  <dd> 123456789</dd>
                                                                </dl>
                                                                <p><strong>Note:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                                tempor incididunt ut labore et dolore magna aliqua. </p>
                                                                </div> <!-- tab-pane.// -->
                                                                </div> <!-- tab-content .// -->

                                                                </div> <!-- card-body.// -->
                                                                </article> <!-- card.// -->


                                                                    </aside> <!-- col.// -->
                                                                </div> <!-- row.// -->

                                                                </div>
                                                                <!--container end.//-->

                                                                <br><br>

                                                    </div>
                                                    </div>
                                                </div>
                                                <h3 id="order_review_heading">Your order</h3>
                                                <div id="order_review" class="woocommerce-checkout-review-order">
                                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                                        <thead>
                                                            <tr>
                                                                <th class="product-name">Product</th>
                                                                <th class="product-total text-white">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse ($data as $item)
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                   {{$item->products->name}}
                                                                    <strong class="product-quantity">&times; {{$item->quantity}}</strong>
                                                                </td>
                                                                <td class="product-total">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">&#36;</span>@php  echo    $item->sub_total @endphp
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            @empty

                                                            @endforelse


                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th class="text-white">Sales Tax(5.4%)</th>
                                                                <td class="text-white">
                                                                    @php
                                                                    $total_price=0;
                                                                    foreach ($data as $key => $item) {
                                                                        $total_price +=$item->sub_total;
                                                                    }
                                                                    $sales_tax = $total_price * 0.054; // Calculate 5.4% sales tax
    $total_price_with_tax = $total_price + $sales_tax; // Add sales tax to total price

                                                                @endphp
                                                                  ${{ number_format($sales_tax, 2) }}
                                                                </td>
                                                            </tr>
                                                              <tr>
                                                                <th class="text-white">Shipping and handling</th>
                                                                <td class="text-white">$25</td>
                                                            </tr>
                                                            <tr class="cart-subtotal">
                                                                <th class="text-white">Subtotal</th>
                                                                <td>
                                                                    <span class="woocommerce-Price-amount amount text-white">
                                                                        @php
                                                                            $total_price=0;
                                                                            foreach ($data as $key => $item) {
                                                                                $total_price +=$item->quantity*$item->sub_total;
                                                                            }


                                                                        @endphp

                                                                        <span class="woocommerce-Price-currencySymbol text-white">&#36;</span>{{$total_price_with_tax+25}}
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr class="order-total text-white">
                                                                <th class="text-white">Total</th>
                                                                <td>
                                                                    <strong>
                                                                        <span class="woocommerce-Price-amount amount text-white">
                                                                            <span class="woocommerce-Price-currencySymbol text-white">&#36;</span>{{$total_price_with_tax+25}}
                                                                            <input type="hidden" name="sub_total" value="{{$total_price_with_tax+25}}">
                                                                        </span>
                                                                    </strong>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                    {{-- <span>3.4 %fee for using sezzle and credova</span> --}}
                                                    <div id="payment" class="woocommerce-checkout-payment">
                                                        {{-- <ul class="wc_payment_methods payment_methods methods">
                                                            <li class="woocommerce-notice woocommerce-notice--info woocommerce-info">Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.</li>
                                                        </ul> --}}
                                                        <div class="form-row place-order">
                                                          <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- /Additional Information -->
                            </div>

                            <!-- Your Order -->

                        </form>
                    </div>
                </section>
            </article>
        </div>
        <!-- /Content -->
    </div>
</div>
@endsection
