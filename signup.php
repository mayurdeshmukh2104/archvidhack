<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="keywords" content="" />
<meta name="author" content="" />


<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">
</head>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['submit'])) { //user logging in

        require 'register.php';
        
    }
}
?>

<body>
    <br>
         <div class="col-md-6">
        <div class="p-30 mt-10 bg-theme-colored">
        <br>
        <center><img src="logo.png" height="120" width="213"></center>
        <header>
        <center>
        <strong><span class="backspace"><font color="white">Sign up to find interesting thing</strong></span>
        </center>
        </header>
            
              <form id="reservation_form" name="reservation_form" class="reservation-form mt-20" method="post" action="signup.php">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <input placeholder="Full Name" type="text" id="reservation_name" name="fullname" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="Email id." type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" id="reservation_email" name="email" required="" class="form-control" >
                    </div>
                   
                  </div>
                 
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="Phone No." type="number" maxlength="10"  pattern="[0-9]{10}" id="reservation_phone" name="phoneno" required=""  class="form-control" >
                    </div>
                  </div>
                   <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <div class="styled-select">
 <select id="person_select" name="age" class="form-control">
                          <option value="" selected disabled hidden>Age</option> 

<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">52</option>
<option value="53">53</option>
<option value="54">54</option>
<option value="55">55</option>
<option value="56">56</option>
<option value="57">57</option>
<option value="58">58</option>
<option value="59">59</option>
<option value="60">60</option>
<option value="61">61</option>
<option value="62">62</option>
<option value="63">63</option>
<option value="64">64</option>
<option value="65">65</option>
<option value="66">66</option>
<option value="67">67</option>
<option value="68">68</option>
<option value="69">69</option>
<option value="70">70</option>
<option value="71">71</option>
<option value="72">72</option>
<option value="73">73</option>
<option value="74">74</option>
<option value="75">75</option>
<option value="76">76</option>
<option value="77">77</option>
<option value="78">78</option>
<option value="79">79</option>
<option value="80">80</option>
<option value="81">81</option>
<option value="82">82</option>
<option value="83">83</option>
<option value="84">84</option>
<option value="85">85</option>
<option value="86">86</option>
<option value="87">87</option>
<option value="88">88</option>
<option value="89">89</option>
<option value="90">90</option>
<option value="91">91</option>
<option value="92">92</option>
<option value="93">93</option>
<option value="94">94</option>
<option value="95">95</option>
<option value="96">96</option>
<option value="97">97</option>
<option value="98">98</option>
<option value="99">99</option>
<option value="100">100</option>
</select>
             
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <div class="styled-select">
                        <select id="person_select" name="person_subject" name="gender" class="form-control">
                          <option value="" selected disabled hidden>Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="Date of Birth" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="dob" name="dob" required=""  class="form-control" >
                    </div>
                  </div>
               
                 
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="City" type="text" id="reservation_email" name="city" required="" class="form-control" >
                    </div>
                   
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="State" type="text" id="reservation_email" name="state" required="" class="form-control" >
                    </div>
                   
                  </div>
                 
                 <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <div class="styled-select">
                        <select id="person_select" name="country" class="form-control">
                          <option value="" selected disabled hidden>Choose Country</option>         
  <option value="AFG">Afghanistan</option>
  <option value="ALA">Åland Islands</option>
  <option value="ALB">Albania</option>
  <option value="DZA">Algeria</option>
  <option value="ASM">American Samoa</option>
  <option value="AND">Andorra</option>
  <option value="AGO">Angola</option>
  <option value="AIA">Anguilla</option>
  <option value="ATA">Antarctica</option>
  <option value="ATG">Antigua and Barbuda</option>
  <option value="ARG">Argentina</option>
  <option value="ARM">Armenia</option>
  <option value="ABW">Aruba</option>
  <option value="AUS">Australia</option>
  <option value="AUT">Austria</option>
  <option value="AZE">Azerbaijan</option>
  <option value="BHS">Bahamas</option>
  <option value="BHR">Bahrain</option>
  <option value="BGD">Bangladesh</option>
  <option value="BRB">Barbados</option>
  <option value="BLR">Belarus</option>
  <option value="BEL">Belgium</option>
  <option value="BLZ">Belize</option>
  <option value="BEN">Benin</option>
  <option value="BMU">Bermuda</option>
  <option value="BTN">Bhutan</option>
  <option value="BOL">Bolivia, Plurinational State of</option>
  <option value="BES">Bonaire, Sint Eustatius and Saba</option>
  <option value="BIH">Bosnia and Herzegovina</option>
  <option value="BWA">Botswana</option>
  <option value="BVT">Bouvet Island</option>
  <option value="BRA">Brazil</option>
  <option value="IOT">British Indian Ocean Territory</option>
  <option value="BRN">Brunei Darussalam</option>
  <option value="BGR">Bulgaria</option>
  <option value="BFA">Burkina Faso</option>
  <option value="BDI">Burundi</option>
  <option value="KHM">Cambodia</option>
  <option value="CMR">Cameroon</option>
  <option value="CAN">Canada</option>
  <option value="CPV">Cape Verde</option>
  <option value="CYM">Cayman Islands</option>
  <option value="CAF">Central African Republic</option>
  <option value="TCD">Chad</option>
  <option value="CHL">Chile</option>
  <option value="CHN">China</option>
  <option value="CXR">Christmas Island</option>
  <option value="CCK">Cocos (Keeling) Islands</option>
  <option value="COL">Colombia</option>
  <option value="COM">Comoros</option>
  <option value="COG">Congo</option>
  <option value="COD">Congo, the Democratic Republic of the</option>
  <option value="COK">Cook Islands</option>
  <option value="CRI">Costa Rica</option>
  <option value="CIV">Côte d'Ivoire</option>
  <option value="HRV">Croatia</option>
  <option value="CUB">Cuba</option>
  <option value="CUW">Curaçao</option>
  <option value="CYP">Cyprus</option>
  <option value="CZE">Czech Republic</option>
  <option value="DNK">Denmark</option>
  <option value="DJI">Djibouti</option>
  <option value="DMA">Dominica</option>
  <option value="DOM">Dominican Republic</option>
  <option value="ECU">Ecuador</option>
  <option value="EGY">Egypt</option>
  <option value="SLV">El Salvador</option>
  <option value="GNQ">Equatorial Guinea</option>
  <option value="ERI">Eritrea</option>
  <option value="EST">Estonia</option>
  <option value="ETH">Ethiopia</option>
  <option value="FLK">Falkland Islands (Malvinas)</option>
  <option value="FRO">Faroe Islands</option>
  <option value="FJI">Fiji</option>
  <option value="FIN">Finland</option>
  <option value="FRA">France</option>
  <option value="GUF">French Guiana</option>
  <option value="PYF">French Polynesia</option>
  <option value="ATF">French Southern Territories</option>
  <option value="GAB">Gabon</option>
  <option value="GMB">Gambia</option>
  <option value="GEO">Georgia</option>
  <option value="DEU">Germany</option>
  <option value="GHA">Ghana</option>
  <option value="GIB">Gibraltar</option>
  <option value="GRC">Greece</option>
  <option value="GRL">Greenland</option>
  <option value="GRD">Grenada</option>
  <option value="GLP">Guadeloupe</option>
  <option value="GUM">Guam</option>
  <option value="GTM">Guatemala</option>
  <option value="GGY">Guernsey</option>
  <option value="GIN">Guinea</option>
  <option value="GNB">Guinea-Bissau</option>
  <option value="GUY">Guyana</option>
  <option value="HTI">Haiti</option>
  <option value="HMD">Heard Island and McDonald Islands</option>
  <option value="VAT">Holy See (Vatican City State)</option>
  <option value="HND">Honduras</option>
  <option value="HKG">Hong Kong</option>
  <option value="HUN">Hungary</option>
  <option value="ISL">Iceland</option>
  <option value="IND">India</option>
  <option value="IDN">Indonesia</option>
  <option value="IRN">Iran, Islamic Republic of</option>
  <option value="IRQ">Iraq</option>
  <option value="IRL">Ireland</option>
  <option value="IMN">Isle of Man</option>
  <option value="ISR">Israel</option>
  <option value="ITA">Italy</option>
  <option value="JAM">Jamaica</option>
  <option value="JPN">Japan</option>
  <option value="JEY">Jersey</option>
  <option value="JOR">Jordan</option>
  <option value="KAZ">Kazakhstan</option>
  <option value="KEN">Kenya</option>
  <option value="KIR">Kiribati</option>
  <option value="PRK">Korea, Democratic People's Republic of</option>
  <option value="KOR">Korea, Republic of</option>
  <option value="KWT">Kuwait</option>
  <option value="KGZ">Kyrgyzstan</option>
  <option value="LAO">Lao People's Democratic Republic</option>
  <option value="LVA">Latvia</option>
  <option value="LBN">Lebanon</option>
  <option value="LSO">Lesotho</option>
  <option value="LBR">Liberia</option>
  <option value="LBY">Libya</option>
  <option value="LIE">Liechtenstein</option>
  <option value="LTU">Lithuania</option>
  <option value="LUX">Luxembourg</option>
  <option value="MAC">Macao</option>
  <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
  <option value="MDG">Madagascar</option>
  <option value="MWI">Malawi</option>
  <option value="MYS">Malaysia</option>
  <option value="MDV">Maldives</option>
  <option value="MLI">Mali</option>
  <option value="MLT">Malta</option>
  <option value="MHL">Marshall Islands</option>
  <option value="MTQ">Martinique</option>
  <option value="MRT">Mauritania</option>
  <option value="MUS">Mauritius</option>
  <option value="MYT">Mayotte</option>
  <option value="MEX">Mexico</option>
  <option value="FSM">Micronesia, Federated States of</option>
  <option value="MDA">Moldova, Republic of</option>
  <option value="MCO">Monaco</option>
  <option value="MNG">Mongolia</option>
  <option value="MNE">Montenegro</option>
  <option value="MSR">Montserrat</option>
  <option value="MAR">Morocco</option>
  <option value="MOZ">Mozambique</option>
  <option value="MMR">Myanmar</option>
  <option value="NAM">Namibia</option>
  <option value="NRU">Nauru</option>
  <option value="NPL">Nepal</option>
  <option value="NLD">Netherlands</option>
  <option value="NCL">New Caledonia</option>
  <option value="NZL">New Zealand</option>
  <option value="NIC">Nicaragua</option>
  <option value="NER">Niger</option>
  <option value="NGA">Nigeria</option>
  <option value="NIU">Niue</option>
  <option value="NFK">Norfolk Island</option>
  <option value="MNP">Northern Mariana Islands</option>
  <option value="NOR">Norway</option>
  <option value="OMN">Oman</option>
  <option value="PAK">Pakistan</option>
  <option value="PLW">Palau</option>
  <option value="PSE">Palestinian Territory, Occupied</option>
  <option value="PAN">Panama</option>
  <option value="PNG">Papua New Guinea</option>
  <option value="PRY">Paraguay</option>
  <option value="PER">Peru</option>
  <option value="PHL">Philippines</option>
  <option value="PCN">Pitcairn</option>
  <option value="POL">Poland</option>
  <option value="PRT">Portugal</option>
  <option value="PRI">Puerto Rico</option>
  <option value="QAT">Qatar</option>
  <option value="REU">Réunion</option>
  <option value="ROU">Romania</option>
  <option value="RUS">Russian Federation</option>
  <option value="RWA">Rwanda</option>
  <option value="BLM">Saint Barthélemy</option>
  <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
  <option value="KNA">Saint Kitts and Nevis</option>
  <option value="LCA">Saint Lucia</option>
  <option value="MAF">Saint Martin (French part)</option>
  <option value="SPM">Saint Pierre and Miquelon</option>
  <option value="VCT">Saint Vincent and the Grenadines</option>
  <option value="WSM">Samoa</option>
  <option value="SMR">San Marino</option>
  <option value="STP">Sao Tome and Principe</option>
  <option value="SAU">Saudi Arabia</option>
  <option value="SEN">Senegal</option>
  <option value="SRB">Serbia</option>
  <option value="SYC">Seychelles</option>
  <option value="SLE">Sierra Leone</option>
  <option value="SGP">Singapore</option>
  <option value="SXM">Sint Maarten (Dutch part)</option>
  <option value="SVK">Slovakia</option>
  <option value="SVN">Slovenia</option>
  <option value="SLB">Solomon Islands</option>
  <option value="SOM">Somalia</option>
  <option value="ZAF">South Africa</option>
  <option value="SGS">South Georgia and the South Sandwich Islands</option>
  <option value="SSD">South Sudan</option>
  <option value="ESP">Spain</option>
  <option value="LKA">Sri Lanka</option>
  <option value="SDN">Sudan</option>
  <option value="SUR">Suriname</option>
  <option value="SJM">Svalbard and Jan Mayen</option>
  <option value="SWZ">Swaziland</option>
  <option value="SWE">Sweden</option>
  <option value="CHE">Switzerland</option>
  <option value="SYR">Syrian Arab Republic</option>
  <option value="TWN">Taiwan, Province of China</option>
  <option value="TJK">Tajikistan</option>
  <option value="TZA">Tanzania, United Republic of</option>
  <option value="THA">Thailand</option>
  <option value="TLS">Timor-Leste</option>
  <option value="TGO">Togo</option>
  <option value="TKL">Tokelau</option>
  <option value="TON">Tonga</option>
  <option value="TTO">Trinidad and Tobago</option>
  <option value="TUN">Tunisia</option>
  <option value="TUR">Turkey</option>
  <option value="TKM">Turkmenistan</option>
  <option value="TCA">Turks and Caicos Islands</option>
  <option value="TUV">Tuvalu</option>
  <option value="UGA">Uganda</option>
  <option value="UKR">Ukraine</option>
  <option value="ARE">United Arab Emirates</option>
  <option value="GBR">United Kingdom</option>
  <option value="USA">United States</option>
  <option value="UMI">United States Minor Outlying Islands</option>
  <option value="URY">Uruguay</option>
  <option value="UZB">Uzbekistan</option>
  <option value="VUT">Vanuatu</option>
  <option value="VEN">Venezuela, Bolivarian Republic of</option>
  <option value="VNM">Viet Nam</option>
  <option value="VGB">Virgin Islands, British</option>
  <option value="VIR">Virgin Islands, U.S.</option>
  <option value="WLF">Wallis and Futuna</option>
  <option value="ESH">Western Sahara</option>
  <option value="YEM">Yemen</option>
  <option value="ZMB">Zambia</option>
  <option value="ZWE">Zimbabwe</option>
</select>
             
                      </div>
                    </div>
                  </div>
                       <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <input placeholder="Create password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" type="password" id="reservation_phone" name="password" required=""  class="form-control" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                    </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="form-group mb-20">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block" name="submit" data-loading-text="Please wait...">Sign up</button>
                    </div>
                 
                  </div>
</form>
              <!-- Application Form End-->

              <!-- Application Form Validation Start-->
              <script type="text/javascript">
                $("#reservation_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType:  'json',
                      success: function(data) {
                        if( data.status == 'true' ) {
                          $(form).find('.form-control').val('');
                        }z
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                      }
                    });
                  }
                });
              </script>
              <!-- Application Form Validation Start -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script>
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
</script>

</body>
</html>