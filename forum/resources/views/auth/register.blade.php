@extends('layouts.app')

@section('content')
<div class="ms-hero-page-override ms-hero-img-reg ms-bg-fixed ms-hero-bg-dark-light">
    <div class="container">
      <div class="text-center">
        <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Registration</h1>
        <p class="lead lead-lg color-light text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">Welcome to Join our community<br>
          <span class="color-info" style="text-transform: lowercase;">... a community of happy people</span></p>
      </div>
    </div>
</div>
    <div class="container">
        <div class="card card-primary card-hero animated fadeInUp animation-delay-7">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">New Registration</div>
                            <div class="panel-body">
                                <form role="form" class="form-horizontal" id="defaultForm" method="post" action="https://www.happyworldmealgate.org/saveregister">
                      <input type="hidden" name="_token" value="v6Tukoy8XtvWWTVGHadZ8opm4UtBEVjVLbBBXD1z">
                      <div class="panel panel-warning">
                          <div class="panel-heading">Sponsor and parent Information</div>
                          <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="refferer">Sponsor ID</label>
                                </div>
                                <div class="col-md-6">
                                    <input data-toggle="tooltip" data-placement="top" title="This person gets the referral Bonus" type="text" class="form-control" id="sponsorid" name="reffererid" value=""  placeholder="Enter Refferer ID" required>
                                </div>
                                <div class="col-md-4">
                                <span id="sponsoridindicator"></span>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="parentid">Parent ID</label>
                                </div>
                                <div class="col-md-6">
                                <input data-toggle="tooltip" data-placement="top" title="This is the person you want to place your registration under" type="text" class="form-control" id="parentid" name="parentid" value="" placeholder="Enter parent ID" required>

                                </div>
                                <div class="col-md-4">
                                <span id="parentidindicator"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="position">Position</label>
                                </div>
                                <div class="col-md-6">
                                    <select  class="form-control " name="place" data-toggle="tooltip" data-placement="top" title="Place your downline on the leg you want" required>
                                        <option class="0" disabled="true" selected="true">--Position--</option>
                                        <option class="1" value="L" >Left Leg</option>
                                        <option class="2" value="R" >Right Leg</option>
                                    </select>
                                </div>       
                            </div>

                            <input  type="hidden" class="form-control"  name="role" placeholder="" value="user" required>



                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="membershipid">Membership ID</label>
                                </div>
                                <div class="col-md-6">
                                    <input data-toggle="tooltip" data-placement="top" title="Enter membership ID of the pin" type="text" class="form-control" id="membershipid" name ="membershipid" value="" placeholder="Enter Membership ID of pin" required>

                                </div>
                            </div>

                               <div class="form-group">
                                <div class="col-md-4">
                                    <label for="Registrationpin">Registration Pin</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="Registrationpin" name="registrationpin" value="" placeholder="Enter Registration Pin" required>

                                </div>

                           </div> 

                       


                          </div>
                        </div>


                        <div class="panel panel-warning">
                            <div class="panel-heading">Personal Information</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="firstname">First Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="firstname" name="firstname" value="" placeholder="Enter first Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="middlename">Middle Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="middle" name="middlename" value="" placeholder ="Enter Middle Name" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="lastname">Last Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="lastname" name="lastname" value="" placeholder="Enter Lastname" required>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="lastame">Date of Birth</label>
                                    </div>
                                    <div class= "col-md-6">
                                        <div class="input-group date" data-provide="datepicker">
                                            <input type="text" class="form-control" id="datepicker" name="dob" value="">
                                            <div class="input-group-addon" required>
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                        </div>
                                        <small>example: 30/10/1914</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="lastame">Gender</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control sex" name="sex" required>
                                            <option class="0" disabled="true" selected="true">--Gender--</option>
                                            <option class="1" value="male" >Male</option>
                                            <option class="2" value="female" >Female</option>
                                        </select>
                                    </div>       
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="email" name="email" value="" placeholder="Enter email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="phonenumber">Phone Number</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="phonenumber" class="form-control" id="phonenumber" name="phonenumber" value="" placeholder="Enter Phone Number" required>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="country">Country</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control select2" id="country"  name="country">                
                                            <option value="Afghanistan">Afghanistan</option>
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
                                            <option value="British Ind Ocean Terr">British Ind. Ocean Terr.</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Rep.">Central African Rep.</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Keeling">Cocos Keeling</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="country.PS">country PS</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Cote d Ivoire">Cote d Ivoire</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El salvador">El salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Sthern Terr">French Southern Terr.</option>
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
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea Bissau">Guinea Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Is McDonald Is">Heard Is McDonald Is</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakstan">Kazakstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgystan">Kyrgystan</option>
                                            <option value="Lao">Lao</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia: FYR">Macedonia FYR</option>
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
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
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
                                            <option selected="" value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="Northern Mariana Is.">Northern Mariana Is</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
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
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia">South Georgia</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts+Nevis">St Kitts Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Pierre Miquelon">St Pierre Miquelon</option>
                                            <option value="St Vincent+Grenadines">St Vincent Grenadines</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard Jan Mayen Is">Svalbard Jan Mayen Is</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Is">Turks and Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="US Minor Outlying Is">US Minor Outlying Is</option>
                                            <option value="USA">USA</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Is British">Virgin Is British</option>
                                            <option value="Virgin Is US">Virgin Is US</option>
                                            <option value="Wallis and Futuna Is">Wallis and Futuna Is</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Yugoslavia">Yugoslavia</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <label for="state">State</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type ="text" class ="form-control" id ="state" name ="state" value="" placeholder ="Enter State" required>
                                    </div>

                                </div> 
                            </div>
                        </div>
                                    
                            

                            <div class="panel panel-warning">
                              <div class="panel-heading">Username And Password Information</div>
                              <div class="panel-body">
                                
                               

                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="username">Username</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="username" name="username" value="" placeholder="Enter username" required>
                                </div>
                                <span id="user-result"></span>
                            </div>

                            <div class="form-group" id="newpassword">
                                <div class="col-md-4">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                                </div>
                            </div>
                            <div class="form-group" id="confirmnewpassword">
                                <div class="col-md-4">
                                    <label for="password2">Confirm Password</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id ="password2" name="password2" placeholder="Confirm password" required>
                                </div>
                            </div>

                            <div class="form-group" id="transpassword">
                                <div class="col-md-4">
                                    <label for="transactionpass">Transaction Password</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="transactionpass" name="transactionpass" placeholder="Enter Transaction password" required>
                                </div>
                            </div>

                            <div class="form-group" id="transpassword2">
                                <div class="col-md-4">
                                    <label for="transactionpass">Confirm Transaction Password</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" id="transactionpass2" name="transactionpass2" placeholder="Conf Transaction password" required>
                                </div>
                            </div>
                              </div>
                            </div>  





                            <div class="panel panel-warning">
                              <div class="panel-heading">Account Information</div>
                              <div class="panel-body">
                                    <div class="form-group">
                                <div class="col-md-4">
                                    <label for="accountnumber">Account Number</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="accountnumber" name="accountnumber" value="" placeholder="Enter Account Number" required>
                                </div>
                            </div>
                              </div>
                            </div>

                            <button type="submit" style="" class ="btn btn-large btn-default registerbtn pull-right">Submit</button>

                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
