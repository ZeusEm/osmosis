 <!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gate Pass Creation Page. Personnel/ Guest In/ Out Management System. Built at INS Shivaji">
    <meta name="author" content="Lt. Shubham Mehta, 09109A">
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon.png">

    <title>Create Visitors' Gate Pass</title>

    <link rel="canonical" href="">

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light" style="padding-bottom: 1.5rem;">

    <div class="container">
      <div class="py-5 text-center">
        <a id="shivajiLogo" href="index.html"><img class="d-block mx-auto mb-4" src="images/shivajiLogo.png" alt=""></a>
        <h2>Visitors' Gate Pass Generation Form</h2>
        <p class="lead">Enter the details below to generate valid gate passes for your guests.<br>Remember to take the signature of the OOD/ AOOD post taking a print-out of the same.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <!-- <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Previous Visits</span>
            <span class="badge badge-secondary badge-pill">1</span>
          </h4> -->
          <ul class="list-group mb-3" style="list-style: none">
            <!-- <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Ashwani Mehta</h6>
                <small class="text-muted">Weekend Visit</small>
              </div>
              <span class="text-muted">31 March 2019</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Total Visits</h6>
                <small>last 06 months</small>
              </div>
              <span class="text-success">01</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Time Spent in Base</h6>
                <small>last 06 months</small>
              </div>
              <span class="text-success">04 Hrs</span>
            </li> -->
            <li>
              <!-- <video autoplay style="width: 18rem; height: 18rem;"></video> -->
              <div id="screenshot" style="text-align:center;">
                <video class="videostream" autoplay style="width: 18rem; height: 18rem;"></video>
                <img id="screenshot-img" style="width: 18rem; height: 14rem; border-style: none;">
                <br><br>
                <p><button class="btn btn-primary capture-button">Initiate Image Capture</button>
                <p><button class="btn btn-success" id="screenshot-button" disabled>Capture Image</button></p>
              </div>
            </li>
          </ul>

          
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">General Details</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="inDate"><strong>In Date:</strong>&nbsp;&nbsp;</label><span id="inDate"></span>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="inTime"><strong>In Time:</strong>&nbsp;&nbsp;</label><span id="inTime"></span>
                </div>
            </div>
            <br>
            <h5>Host Details</h5>
            <div class="row">
              <div class="col-md-7 mb-3">
                <label for="country">Service History</label>
                <select class="custom-select d-block w-100" id="serviceHistory" required="" onchange="populateServices()">
                  <option value="">Choose...</option>
                  <option>Serving Personnel of Indian Armed Forces</option>
                  <option>Retired Personnel of Indian Armed Forces</option>
                  <option>Civilian</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid option.
                </div>
              </div>
              <div class="col-md-5 mb-3" id="servicesDiv" style="display: none;">
                <label for="service">Branch</label>
                <select class="custom-select d-block w-100" id="branch" required="" onchange="populateRanks()">
                </select>
                <div class="invalid-feedback">
                  Please select a valid service branch.
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input name="firstName" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3" id="ranksDiv" style="display: none;">
                <label for="rank">Rank</label>
                <select class="custom-select d-block w-100" id="ranks" required="">
                </select>
                <div class="invalid-feedback">
                  Please select a valid rank.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="unit">Unit</label>
                <select class="custom-select d-block w-100" id="unit" required="" onchange="populateDepartments()">
                  <option value="">Choose...</option>
                  <option>INS Shivaji</option>
                  <option>INHS Kasturi</option>
                  <option>NBCD School</option>
                  <option>Other (Specify in Remarks)</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid unit.
                </div>
              </div>
              <div class="col-md-4 mb-3" id="departmentDiv" style="display: none;">
                <label for="department">Department</label>
                <select class="custom-select d-block w-100" id="department" required="">
                </select>
                <div class="invalid-feedback">
                  Please select a valid department.
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="personalNumber">Personal Number</label>
                <input type="text" pattern="^[0-9]+[a-zA-Z]$" class="form-control" placeholder="98765A" id="personalNumber" required>
                <div class="invalid-feedback">
                  Please enter a valid service/ personal number.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="mobileNumber">Mobile Number</label>
                <input type="tel" pattern="^[0-9]{10}$" class="form-control" placeholder="9876543210" id="mobileNumber" oninput="check(this)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                <div class="invalid-feedback">
                  Please enter a valid 10-digit mobile number for communication.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="K-108 Wardroom Mess" required="">
              <div class="invalid-feedback">
                Please enter host's address.
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 mb-3">
                <label for="text">Purpose of Visit</label>
                <input type="text" class="form-control" id="purpose" placeholder="Weekend Get-Together">
              </div>
            </div>

            

            <!-- <div class="row">
              <br>&nbsp;
              <div class="col-md-3 mb-3"></div>
              <div class="col-md-3 mb-3" style="padding-top: 0.4rem;">
                <label for="text">Number of Guests</label>
              </div>
              <div class="col-md-2 mb-3">                
                  <input type="number" class="form-control" id="noOfGuests" placeholder="" min="1" max="100">
              </div>
              <div class="col-md-4 mb-3"></div>
            </div> -->

            <!-- <button id = "submitHostDetails" class="btn btn-primary btn-lg btn-block" style="position: fixed; left: -0.1rem; bottom: 0rem; width: 99.1rem; height: 3rem; z-index: 1;" onclick="print_this('to_print')">Print Gate Pass</button> -->

            <hr class="mb-4">

            <div class="col-md-12 order-md-1">
              <h4 class="mb-3">Guest/ Visitor Details</h4>
              <!-- <form class="needs-validation" novalidate=""> -->
                <div id="visitors">



                  <div class="row">
                    <div class="col-md-7 mb-3">
                      <label for="guestServiceHistory">Service History</label>
                      <select class="custom-select d-block w-100" id="guestServiceHistory" required="">
                        <option value="">Choose...</option>
                        <option>Serving Personnel of Indian Armed Forces</option>
                        <option>Retired Personnel of Indian Armed Forces</option>
                        <option>Civilian</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid option.
                      </div>
                    </div>
                    <div class="col-md-5 mb-3">
                      <label for="guestCurrentEmployer">Current Employer</label>
                        <input type="text" class="form-control" id="guestCurrentEmployer" placeholder="Indian Navy, Wipro, etc.">  
                      <div class="invalid-feedback">
                        Please specify a valid employer (defence force, corporate, etc.).
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="guestFirstName">First name</label>
                      <input type="text" class="form-control" id="guestFirstName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid first name is required.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="guestLastName">Last name</label>
                      <input type="text" class="form-control" id="guestLastName" placeholder="" value="" required="">
                      <div class="invalid-feedback">
                        Valid last name is required.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8 mb-3">
                      <label for="guestAddress">Permanent Address (Home/ Office)</label>
                      <input type="text" class="form-control" id="guestAddress" placeholder="Locality, City, State" required="">
                      <div class="invalid-feedback">
                        Please enter the visitor's permanent address.
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="guestMobileNumber">Mobile Number</label>
                      <input type="tel" pattern="^[0-9]{10}$" class="form-control" placeholder="9876543210" id="guestMobileNumber" oninput="check(this)" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                      <div class="invalid-feedback">
                        Please enter a valid 10-digit mobile number for communication.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7 mb-3">
                      <label for="guestTransitAddress">Transit Address</label>
                      <input type="text" class="form-control" id="guestTransitAddress" placeholder="K108 Wardroom Mess" required="">
                      <div class="invalid-feedback">
                        Please enter the visitor's transit address.
                      </div>
                    </div>
                    <div class="col-md-5" mb-3>
                      <!-- <div class="custom-control custom-checkbox">
                        <label class="custom-control-label" for="sameAddressAsHost">Same as Host?</label>
                        <input type="checkbox" class="custom-control-input" id="sameAddressAsHost">
                      </div> -->
                      <label for="text">Number of Additional Guests</label>
                      <input type="number" class="form-control" id="noOfGuests" placeholder="" min="0" max="3" style="display: inline;">
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="guestGender">Gender</label>
                      <select class="custom-select d-block w-100" id="guestGender" required="">
                        <option value="">Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid option.
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="guestNationality">Nationality</label>
                      <select class="custom-select d-block w-100" id="guestNationality" required="">
                        <option value="">Choose...</option>
                        <option value="Afghan">Afghan</option>
                        <option value="Albanian">Albanian</option>
                        <option value="Algerian">Algerian</option>
                        <option value="American">American</option>
                        <option value="Andorran">Andorran</option>
                        <option value="Angolan">Angolan</option>
                        <option value="Antiguans">Antiguans</option>
                        <option value="Argentinean">Argentinean</option>
                        <option value="Armenian">Armenian</option>
                        <option value="Australian">Australian</option>
                        <option value="Austrian">Austrian</option>
                        <option value="Azerbaijani">Azerbaijani</option>
                        <option value="Bahamian">Bahamian</option>
                        <option value="Bahraini">Bahraini</option>
                        <option value="Bangladeshi">Bangladeshi</option>
                        <option value="Barbadian">Barbadian</option>
                        <option value="Barbudans">Barbudans</option>
                        <option value="Batswana">Batswana</option>
                        <option value="Belarusian">Belarusian</option>
                        <option value="Belgian">Belgian</option>
                        <option value="Belizean">Belizean</option>
                        <option value="Beninese">Beninese</option>
                        <option value="Bhutanese">Bhutanese</option>
                        <option value="Bolivian">Bolivian</option>
                        <option value="Bosnian">Bosnian</option>
                        <option value="Brazilian">Brazilian</option>
                        <option value="British">British</option>
                        <option value="Bruneian">Bruneian</option>
                        <option value="Bulgarian">Bulgarian</option>
                        <option value="Burkinabe">Burkinabe</option>
                        <option value="Burmese">Burmese</option>
                        <option value="Burundian">Burundian</option>
                        <option value="Cambodian">Cambodian</option>
                        <option value="Cameroonian">Cameroonian</option>
                        <option value="Canadian">Canadian</option>
                        <option value="Cape Verdean">Cape Verdean</option>
                        <option value="Central African">Central African</option>
                        <option value="Chadian">Chadian</option>
                        <option value="Chilean">Chilean</option>
                        <option value="Chinese">Chinese</option>
                        <option value="Colombian">Colombian</option>
                        <option value="Comoran">Comoran</option>
                        <option value="Congolese">Congolese</option>
                        <option value="Costa Rican">Costa Rican</option>
                        <option value="Croatian">Croatian</option>
                        <option value="Cuban">Cuban</option>
                        <option value="Cypriot">Cypriot</option>
                        <option value="Czech">Czech</option>
                        <option value="Danish">Danish</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominican">Dominican</option>
                        <option value="Dutch">Dutch</option>
                        <option value="East Timorese">East Timorese</option>
                        <option value="Ecuadorean">Ecuadorean</option>
                        <option value="Egyptian">Egyptian</option>
                        <option value="Emirian">Emirian</option>
                        <option value="Equatorial guinean">Equatorial Guinean</option>
                        <option value="Eritrean">Eritrean</option>
                        <option value="Estonian">Estonian</option>
                        <option value="Ethiopian">Ethiopian</option>
                        <option value="Fijian">Fijian</option>
                        <option value="Filipino">Filipino</option>
                        <option value="Finnish">Finnish</option>
                        <option value="French">French</option>
                        <option value="Gabonese">Gabonese</option>
                        <option value="Gambian">Gambian</option>
                        <option value="Georgian">Georgian</option>
                        <option value="German">German</option>
                        <option value="Ghanaian">Ghanaian</option>
                        <option value="Greek">Greek</option>
                        <option value="Grenadian">Grenadian</option>
                        <option value="Guatemalan">Guatemalan</option>
                        <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                        <option value="Guinean">Guinean</option>
                        <option value="Guyanese">Guyanese</option>
                        <option value="Haitian">Haitian</option>
                        <option value="Herzegovinian">Herzegovinian</option>
                        <option value="Honduran">Honduran</option>
                        <option value="Hungarian">Hungarian</option>
                        <option value="Icelander">Icelander</option>
                        <option value="Indian">Indian</option>
                        <option value="Indonesian">Indonesian</option>
                        <option value="Iranian">Iranian</option>
                        <option value="Iraqi">Iraqi</option>
                        <option value="Irish">Irish</option>
                        <option value="Israeli">Israeli</option>
                        <option value="Italian">Italian</option>
                        <option value="Ivorian">Ivorian</option>
                        <option value="Jamaican">Jamaican</option>
                        <option value="Japanese">Japanese</option>
                        <option value="Jordanian">Jordanian</option>
                        <option value="Kazakhstani">Kazakhstani</option>
                        <option value="Kenyan">Kenyan</option>
                        <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                        <option value="Kuwaiti">Kuwaiti</option>
                        <option value="Kyrgyz">Kyrgyz</option>
                        <option value="Laotian">Laotian</option>
                        <option value="Latvian">Latvian</option>
                        <option value="Lebanese">Lebanese</option>
                        <option value="Liberian">Liberian</option>
                        <option value="Libyan">Libyan</option>
                        <option value="Liechtensteiner">Liechtensteiner</option>
                        <option value="Lithuanian">Lithuanian</option>
                        <option value="Luxembourger">Luxembourger</option>
                        <option value="Macedonian">Macedonian</option>
                        <option value="Malagasy">Malagasy</option>
                        <option value="Malawian">Malawian</option>
                        <option value="Malaysian">Malaysian</option>
                        <option value="Maldivan">Maldivan</option>
                        <option value="Malian">Malian</option>
                        <option value="Maltese">Maltese</option>
                        <option value="Marshallese">Marshallese</option>
                        <option value="Mauritanian">Mauritanian</option>
                        <option value="Mauritian">Mauritian</option>
                        <option value="Mexican">Mexican</option>
                        <option value="Micronesian">Micronesian</option>
                        <option value="Moldovan">Moldovan</option>
                        <option value="Monacan">Monacan</option>
                        <option value="Mongolian">Mongolian</option>
                        <option value="Moroccan">Moroccan</option>
                        <option value="Mosotho">Mosotho</option>
                        <option value="Motswana">Motswana</option>
                        <option value="Mozambican">Mozambican</option>
                        <option value="Namibian">Namibian</option>
                        <option value="Nauruan">Nauruan</option>
                        <option value="Nepalese">Nepalese</option>
                        <option value="New Zealander">New Zealander</option>
                        <option value="Ni-Vanuatu">Ni-Vanuatu</option>
                        <option value="Nicaraguan">Nicaraguan</option>
                        <option value="Nigerien">Nigerien</option>
                        <option value="North Korean">North Korean</option>
                        <option value="Northern Irish">Northern Irish</option>
                        <option value="Norwegian">Norwegian</option>
                        <option value="Omani">Omani</option>
                        <option value="Pakistani">Pakistani</option>
                        <option value="Palauan">Palauan</option>
                        <option value="Panamanian">Panamanian</option>
                        <option value="Papua New Guinean">Papua New Guinean</option>
                        <option value="Paraguayan">Paraguayan</option>
                        <option value="Peruvian">Peruvian</option>
                        <option value="Polish">Polish</option>
                        <option value="Portuguese">Portuguese</option>
                        <option value="Qatari">Qatari</option>
                        <option value="Romanian">Romanian</option>
                        <option value="Russian">Russian</option>
                        <option value="Rwandan">Rwandan</option>
                        <option value="Saint Lucian">Saint Lucian</option>
                        <option value="Salvadoran">Salvadoran</option>
                        <option value="Samoan">Samoan</option>
                        <option value="San Marinese">San Marinese</option>
                        <option value="Sao Tomean">Sao Tomean</option>
                        <option value="Saudi">Saudi</option>
                        <option value="Scottish">Scottish</option>
                        <option value="Senegalese">Senegalese</option>
                        <option value="Serbian">Serbian</option>
                        <option value="Seychellois">Seychellois</option>
                        <option value="Sierra Leonean">Sierra Leonean</option>
                        <option value="Singaporean">Singaporean</option>
                        <option value="Slovakian">Slovakian</option>
                        <option value="Slovenian">Slovenian</option>
                        <option value="Solomon Islander">Solomon Islander</option>
                        <option value="Somali">Somali</option>
                        <option value="South African">South African</option>
                        <option value="South Korean">South Korean</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Sri Lankan">Sri Lankan</option>
                        <option value="Sudanese">Sudanese</option>
                        <option value="Surinamer">Surinamer</option>
                        <option value="Swazi">Swazi</option>
                        <option value="Swedish">Swedish</option>
                        <option value="Swiss">Swiss</option>
                        <option value="Syrian">Syrian</option>
                        <option value="Taiwanese">Taiwanese</option>
                        <option value="Tajik">Tajik</option>
                        <option value="Tanzanian">Tanzanian</option>
                        <option value="Thai">Thai</option>
                        <option value="Togolese">Togolese</option>
                        <option value="Tongan">Tongan</option>
                        <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                        <option value="Tunisian">Tunisian</option>
                        <option value="Turkish">Turkish</option>
                        <option value="Tuvaluan">Tuvaluan</option>
                        <option value="Ugandan">Ugandan</option>
                        <option value="Ukrainian">Ukrainian</option>
                        <option value="Uruguayan">Uruguayan</option>
                        <option value="Uzbekistani">Uzbekistani</option>
                        <option value="Venezuelan">Venezuelan</option>
                        <option value="Vietnamese">Vietnamese</option>
                        <option value="Welsh">Welsh</option>
                        <option value="Yemenite">Yemenite</option>
                        <option value="Zambian">Zambian</option>
                        <option value="Zimbabwean">Zimbabwean</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid option.
                      </div>
                    </div>
                    <div class="col-md-5 mb-3">
                      <label for="guestHostRelation">Relation with Host</label>
                      <select class="custom-select d-block w-100" id="guestHostRelation" required="">
                        <option value="">Choose...</option>
                        <option>Friend</option>
                        <option>Colleague</option>
                        <option>Father</option>
                        <option>Mother</option>
                        <option>Son</option>
                        <option>Daughter</option>
                        <option>Brother</option>
                        <option>Sister</option>
                        <option>Husband</option>
                        <option>Wife</option>
                        <option>Grandfather</option>
                        <option>Grandmother</option>
                        <option>Grandson</option>
                        <option>Granddaughter</option>
                        <option>Uncle</option>
                        <option>Aunt</option>
                        <option>Nephew</option>
                        <option>Niece</option>
                        <option>Other (Mention in Remarks)</option>
                      </select>
                      <div class="invalid-feedback">
                        Please enter the visitor's transit address.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <label for="">Particulars of Accompanying Guests</label><span class="text-muted"> (Optional)</span>
                      <input type="text" class="form-control" id="additionalGuestNo1" placeholder="Guest No. 02"><br>
                      <input type="text" class="form-control" id="additionalGuestNo2" placeholder="Guest No. 03"><br>
                      <input type="text" class="form-control" id="additionalGuestNo3" placeholder="Guest No. 04">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <div class="custom-control custom-checkbox" style="display: inline;">
                        <input type="checkbox" class="custom-control-input" id="withVehicle" onchange="document.getElementById('guestVehicleDetails').style.display = 'inline';">
                        <label class="custom-control-label" for="withVehicle">With vehicle?</label>
                        <input type="text" class="form-control" id="guestVehicleDetails" placeholder="Vehicle Details" style="display: none; margin-top: 0.9rem;">
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="custom-control custom-checkbox" style="display: inline;">
                        <input type="checkbox" class="custom-control-input" id="withLaptop" onchange="document.getElementById('guestLaptopDetails').style.display = 'inline';">
                        <label class="custom-control-label" for="withLaptop">With laptop?</label>
                        <input type="text" class="form-control" id="guestLaptopDetails" placeholder="Laptop Details" style="display: none; margin-top: 0.9rem;">
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <div class="custom-control custom-checkbox" style="display: inline;">
                        <input type="checkbox" class="custom-control-input" id="withCarriageMaterial" onchange="document.getElementById('guestCarriageMaterialDetails').style.display = 'inline';">
                        <label class="custom-control-label" for="withCarriageMaterial">Carriage material?</label>
                        <input type="text" class="form-control" id="guestCarriageMaterialDetails" placeholder="Carriage Material" style="display: none; margin-top: 0.9rem;">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="passType">Type of Pass</label>
                      <select class="custom-select d-block w-100" id="passType" required="" onchange="toggleOvernightStay()">
                        <option value="">Choose...</option>
                        <option>Guest Pass</option>
                        <option>Visitor Pass</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select the type of pass to be generated.
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="outTime">Pass Validity</label>
                      <br>
                      <input id="outTimeDays" type="number" class="form-control col-md-4 mb-3" placeholder="" min="00" max="30" style="display: inline-block;" required="" onchange="updateOutTimeDay()">&nbsp;Days
                      <input id="outTimeHours" type="number" class="form-control col-md-4 mb-3" placeholder="" min="00" max="23" style="display: inline-block;" required="" onchange="updateOutTimeHour()">&nbsp;Hours
                      <div class="invalid-feedback">
                        Please provide the departure time.
                      </div>
                    </div>
                  </div>
                  <div class="row" id="visitorDetails" style="display: none;">
                    <div class="col-md-6 mb-3">
                        <div class="custom-control custom-checkbox" style="display: inline;">
                          <input type="checkbox" class="custom-control-input" id="overtimeRequired">
                          <label class="custom-control-label" for="overtimeRequired">Additional Overtime Required?</label>
                          <br>
                          <em><blockquote class="small">Necessary if Out Time extends beyond 1730. If applicable, an additional signature (along with the duration) of Divisional/ Departmental Officer is required on the pass.</blockquote></em>
                          <br>
                          <input type="number" class="form-control col-md-3 mb-3" id="overtimeHrs" placeholder="" min="00" max="05" style="display: none; margin-top: 0.9rem;"><span style="display: none;" id="overtimeHrsText">&nbsp;Hrs&nbsp;</span>
                          <input type="number" class="form-control col-md-3 mb-3" id="overtimeMins" placeholder="" min="00" max="59" style="display: none; margin-top: 0.9rem;"><span style="display: none;" id="overtimeMinsText">&nbsp;Mins&nbsp;</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3" style="display: inline-block;">
                        <div class="custom-control custom-checkbox">
                          <label for="placeOfDuty">Place of Duty</label>
                          <select class="custom-select d-block w-100" id="placeOfDuty" required="" style="display: none; margin-top: 0.4rem;">
                            <option value="">Choose...</option>
                            <option>Pratap Nagar</option>
                            <option>Ashiyana</option>
                            <option>BSO</option>
                            <option>URC</option>
                            <option>INHS Kasturi</option>
                            <option>SMQ Area/ NWWA</option>
                            <option>Kinara/ Basera</option>
                            <option>Admin Building/ MT Pool</option>
                            <option>DOT/ CMET</option>
                            <option>Rajendra Nagar</option>
                            <option>Wardroom/ OI</option>
                            <option>Kalimata Mandir</option>
                            <option>Other (Mention in Remarks)</option>
                          </select>
                          <div class="invalid-feedback">
                            Please enter the visitor's place of duty.
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="row" style="display: none;" id="overnightStay">
                    <div class="col-md-6 mb-3">
                        <div class="custom-control custom-checkbox" style="display: inline;">
                          <input type="checkbox" class="custom-control-input" id="overnight">
                          <label class="custom-control-label" for="overnight">Staying Overnight?</label>
                        </div>
                    </div>
                  </div>

                  <br>
                      <div class="row">
                          <div class="col-md-8 mb-3">
                            <label for="outDate"><strong>Out Date: </strong>&nbsp;&nbsp;</label><span id="outDate"></span>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="outTime"><strong>Out Time:</strong>&nbsp;&nbsp;</label><span id="outTime"></span>
                          </div>
                      </div>

                  <hr>

                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <label for="text">Remarks</label>
                      <input type="text" class="form-control" id="remarks" placeholder="">
                    </div>
                  </div>



                </div>
              <!-- </form> -->
            </div>
                

            <!-- <button class="btn btn-primary btn-lg btn-block" type="submit">Print Gate Pass</button> -->
            <!-- <button id = "submitDetails" class="btn btn-primary btn-lg btn-block" type="submit">Print Gate Pass</button>
            <button id = "submitHostDetails" class="btn btn-primary btn-lg btn-block">Submit to fill Visitor Details</button> -->
            <br>
            <input type="submit" class="btn btn-primary btn-lg btn-block" onclick="print_this('to_print')" value="Print Gate Pass">
          </form>
        </div>





        <!-- <div class="col-md-8 order-md-1">
          <h4 class="mb-3">General Details</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required="">
                  <option value="">Choose...</option>
                  <option>United States</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">State</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Choose...</option>
                  <option>California</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid state.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div> -->
      </div>
      <br><br><br>
      <blockquote class="blockquote text-center">
        <p class="mb-0">Note</p>
        <footer class="blockquote-footer">
          A fine of <cite>₹50</cite> shall be imposed on the host for non-returning of the guest pass.
        </footer>
        <footer class="blockquote-footer">
          Loss of pass shall invite a fine of <cite>₹100</cite> towards the host.
        </footer>
        <footer class="blockquote-footer">
          The pass is not to be photocopied.
        </footer>
        <footer class="blockquote-footer">
          The host shall bring along an undertaking with the particulars of his/ her guest(s) while getting a guest pass made for them. The undertaking must be signed by his/ her departmental/ divisional officer.
        </footer>
        <footer class="blockquote-footer">
          Return this pass to the Outer Gate on completion of visit.
        </footer>
        </blockquote>
      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p>Built with <img src="icons/heartBlack.svg" style="width: 2rem;">, by <a href="#">Lt. Shubham Mehta</a>.</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Features</a></li>
          <li class="list-inline-item"><a href="#">Contact</a></li>
          <li class="list-inline-item"><a href="#">Admin</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="scripts/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="scripts/popper.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script src="scripts/holder.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      //shows current system time
      var currentTime = new Date(),
          hours = currentTime.getHours(),
          minutes = currentTime.getMinutes();
    
      if (minutes < 10) {
       minutes = "0" + minutes;
      }

      if (hours < 10) {
       hours = "0" + hours;
      }
      
      var inTime = hours + ":" + minutes;

      document.getElementById("inTime").innerHTML = inTime;
    </script>
    <script>
      //shows current system date
      var currentDate = new Date(),
      day = currentDate.getDate(),
      month = currentDate.getMonth() + 1,
      year = currentDate.getFullYear();
      
      if (day < 10) {
        day = "0" + day;
      }

      if (month < 10) {
        month = "0" + month;
      }          

      var inDate = day + "/" + month + "/" + year;

      document.getElementById("inDate").innerHTML = inDate;
    </script>
    <script>
      //populates departments according to the selected unit
      function populateDepartments(){
        $("#departmentDiv").show();
        var unit = document.getElementById('unit');
        var department = document.getElementById("department");
        var unitValue = unit.options[unit.selectedIndex].value;
          
        if (unitValue == 'INS Shivaji')
        {
          department.options.length = 0;
          department.options[0] = new Option('Choose...');
          department.options[1] = new Option('CMET');
          department.options[2] = new Option('CoE (ME)');
          department.options[3] = new Option('EDU');
          department.options[4] = new Option('EXO');
          department.options[5] = new Option('LOG');
          department.options[6] = new Option('Project');
          department.options[7] = new Option('Medical');            
        }
        else
        {
          // department.options.length = 0;
          $("#departmentDiv").hide();
        }
      }
    </script>    
    <script>
      //populates services according to the selected service history
      function populateServices(){
        $("#servicesDiv").show();
        var serviceHistory = document.getElementById('serviceHistory');
        var branch = document.getElementById("branch");
        var serviceHistoryValue = serviceHistory.options[serviceHistory.selectedIndex].value;
          
        if ((serviceHistoryValue == 'Serving Personnel of Indian Armed Forces') || (serviceHistoryValue == 'Retired Personnel of Indian Armed Forces'))
        {
          branch.options.length = 0;
          branch.options[0] = new Option('Choose...');
          branch.options[1] = new Option('Army');
          branch.options[2] = new Option('Air Force');
          branch.options[3] = new Option('Navy');
          branch.options[4] = new Option('Coast Guard');           
        }
        else
        {
          // department.options.length = 0;
          $("#servicesDiv").hide();
        }
      }
    </script>    
    <script>
      //populates ranks according to the selected service branch
      function populateRanks(){
        $("#ranksDiv").show();
        var branch = document.getElementById('branch');
        var ranks = document.getElementById("ranks");
        var branchValue = branch.options[branch.selectedIndex].value;
          
        if (branchValue == 'Army')
        {
          ranks.options.length = 0;
          ranks.options[0] = new Option('Choose...');
          ranks.options[1] = new Option('Field Marshal');
          ranks.options[2] = new Option('General');
          ranks.options[3] = new Option('Lieutenant General');
          ranks.options[4] = new Option('Major General');
          ranks.options[5] = new Option('Brigadier');
          ranks.options[6] = new Option('Colonel');
          ranks.options[7] = new Option('Lieutenant Colonel');
          ranks.options[8] = new Option('Major');
          ranks.options[9] = new Option('Captain');
          ranks.options[10] = new Option('Lieutenant');
          ranks.options[11] = new Option('Subedar Major');
          ranks.options[12] = new Option('Subedar');
          ranks.options[13] = new Option('Naib Subedar');
          ranks.options[14] = new Option('Havaldar');
          ranks.options[15] = new Option('Naik');
          ranks.options[16] = new Option('Lance Naik');
          ranks.options[17] = new Option('Sepoy');        
        }  
        else if (branchValue == 'Air Force')
        {
          ranks.options.length = 0;
          ranks.options[0] = new Option('Choose...');
          ranks.options[1] = new Option('Marshal of the IAF');
          ranks.options[2] = new Option('Air Chief Marshal');
          ranks.options[3] = new Option('Air Marshal');
          ranks.options[4] = new Option('Air Vice Marshal');
          ranks.options[5] = new Option('Air Commodore');
          ranks.options[6] = new Option('Group Captain');
          ranks.options[7] = new Option('Wing Commander');
          ranks.options[8] = new Option('Squadron Leader');
          ranks.options[9] = new Option('Flight Lieutenant');
          ranks.options[10] = new Option('Flying Officer');
          ranks.options[11] = new Option('Master Warrant Officer');
          ranks.options[12] = new Option('Warrant Officer');
          ranks.options[13] = new Option('Junior Warrant Officer');
          ranks.options[14] = new Option('Sergeant');
          ranks.options[15] = new Option('Corporal');
          ranks.options[16] = new Option('Leading Aircraftsman');
          ranks.options[17] = new Option('Aircraftsman');     
        }  
        else if (branchValue == 'Navy')
        {
          ranks.options.length = 0;
          ranks.options[0] = new Option('Choose...');
          ranks.options[1] = new Option('Admiral of the Fleet');
          ranks.options[2] = new Option('Vice Admiral');
          ranks.options[3] = new Option('Rear Admiral');
          ranks.options[4] = new Option('Commodore');
          ranks.options[5] = new Option('Captain');
          ranks.options[6] = new Option('Commander');
          ranks.options[7] = new Option('Lieutenant Commander');
          ranks.options[8] = new Option('Lieutenant');
          ranks.options[9] = new Option('Sub Lieutenant');
          ranks.options[10] = new Option('Master Chief Petty Officer I');
          ranks.options[11] = new Option('Master Chief Petty Officer II');
          ranks.options[12] = new Option('Chief Petty Officer');
          ranks.options[13] = new Option('Petty Officer');
          ranks.options[14] = new Option('Leading Seaman');
          ranks.options[15] = new Option('Seaman I');
          ranks.options[16] = new Option('Seaman II');           
        }
        else if (branchValue == 'Coast Guard')
        {
          ranks.options.length = 0;
          ranks.options[0] = new Option('Choose...');
          ranks.options[1] = new Option('Inspector General');
          ranks.options[2] = new Option('Deputy Inspector General');
          ranks.options[3] = new Option('Commandant');
          ranks.options[4] = new Option('Deputy Commandant');
          ranks.options[5] = new Option('Assistant Commandant');
          ranks.options[6] = new Option('Pradhan Adhikari');
          ranks.options[7] = new Option('Uttam Adhikari');
          ranks.options[8] = new Option('Adhikari');
          ranks.options[9] = new Option('Pradhan Navik');
          ranks.options[10] = new Option('Uttam Navik');
          ranks.options[11] = new Option('Navik'); 
        }
        else 
        {
          //department.options.length = 0;
          $("#ranksDiv").hide();
        }
      }
    </script>
    <script>
      //displays multiple visitor formfields dynamically
      function createVisitors(){
        var visitorInstances = "";
        for (var i = 0; i < (document.getElementById('noOfGuests').value); i++) {
          visitorInstances += '<div class="box">HAHA</div>';
        }
        var container = document.getElementById("visitors");
        container.innerHTML = visitorInstances;
        // $('#visitors').load(document.URL +  ' #visitors');
        $(document).ready(function(){
          $('#submitHostDetails').click(function(e){
            e.preventDefault();
            $('#visitors').load(document.URL +  ' #visitors');            
          });
        });
      }
    </script>
    <script>
      function maxVisitDuration(){
        if(document.getElementById('passType').selectedIndex.value == 'Visitor Pass')
        {
          
          document.getElementById('visitDuration').setAttribute("max", maxTimeVisitor);
        }
      }
    </script>
    <script>
      function toggleOvernightStay(){
        // var passType = document.getElementById("passType").selectedIndex.value;
        // if(document.getElementById('passType').selectedIndex.value == 'Guest Pass') {$('#overnightStay').show();}
        // if (document.getElementById('passType').selectedIndex.value == 'Guest Pass')
        //   document.getElementById('overnightStay').style.display = 'inline-block';
        
        
        var passType = document.getElementById("passType");
        var passTypeValue = passType.options[passType.selectedIndex].value;
        if (passTypeValue == 'Guest Pass')
        {
          $("#overnightStay").show();
          $("#visitorDetails").hide();
        }
        else if (passTypeValue == 'Visitor Pass')
        {
          $("#overnightStay").hide();
          $("#visitorDetails").show();
          $("#outTimeDays").attr("max","00");
          $("#outTimeDays").attr("min","00");
          $("#outTimeHours").attr("max","16");
          // $("#outTimeHours").attr("min","09");
        }
        else
        {
          $("#visitorDetails").hide();
          $("#overnightStay").hide();
        }
      }
    </script>
    <script>
      function updateOutTimeDay()
      {
        //var updatedDate = new Date();
        // var passValididtyDays = document.getElementById("outTimeDays").value;
        // updatedDate.setDate(updatedDate.getDate() + passValididtyDays);
        
        //document.getElementById("outDate").innerHTML = passValididtyDays;


        //shows current system date
        // var currentDate = new Date();
        // var day = currentDate.getDate();
        // currentDate = currentDate.setDate(day + passValididtyDays);
        // var month = currentDate.getMonth() + 1;
        // var year = currentDate.getFullYear();
        
        // if (day < 10) {
        //   day = "0" + day;
        // }

        // if (month < 10) {
        //   month = "0" + month;
        // }          

        // var outDate = day + "/" + month + "/" + year;

        // document.getElementById("outDate").innerHTML = outDate;


        var passValidityDays = document.getElementById("outTimeDays").value;
        var currentDate = new Date();
        currentDate.setDate(currentDate.getDate() + parseInt(passValidityDays));
        var day = currentDate.getDate(),
        month = currentDate.getMonth() + 1,
        year = currentDate.getFullYear();
        
        if (day < 10) {
          day = "0" + day;
        }

        if (month < 10) {
          month = "0" + month;
        }          

        var outDate = day + "/" + month + "/" + year;

        document.getElementById("outDate").innerHTML = outDate;
      }
    </script>
    
    <script>
      function updateOutTimeHour()
      {
        var passValidityHours = document.getElementById("outTimeHours").value;
        var currentTime = new Date(),
          hours = currentTime.getHours(),
          minutes = currentTime.getMinutes();
        document.getElementById('outTimeHours').setAttribute("max", (23-hours));
        hours = parseInt(hours);
        hours += parseInt(passValidityHours);
        if (minutes < 10) {
        minutes = "0" + minutes;
        }

        if (hours < 10) {
        hours = "0" + hours;
        }
        else if (hours > 23)
        {
          var currentDate = new Date();
          currentDate.setDate(currentDate.getDate() + 1);
          var day = currentDate.getDate(),
          month = currentDate.getMonth() + 1,
          year = currentDate.getFullYear();
          
          if (day < 10) {
            day = "0" + day;
          }

          if (month < 10) {
            month = "0" + month;
          }          

          var outDate = day + "/" + month + "/" + year;

          document.getElementById("outDate").innerHTML = outDate;
        }
        
        
        var outTime = hours + ":" + minutes;

        document.getElementById("outTime").innerHTML = outTime;
      }
    </script>



    <!-- <script>
      function hasGetUserMedia() {
        return !!(navigator.mediaDevices &&
          navigator.mediaDevices.getUserMedia);
      }

      if (hasGetUserMedia()) {
        alert('getUserMedia() is supported by your browser');
      } else {
        alert('getUserMedia() is not supported by your browser');
      }
    </script> -->
    <!-- <script>
      const constraints = {
        video: true
      };

      const video = document.querySelector('video');

      navigator.mediaDevices.getUserMedia(constraints).
        then((stream) => {video.srcObject = stream});
    </script> -->
    <script>
      const constraints = {
        video: true
      };
      function handleError(error) {
        console.error('Error: ', error);
      }
      const captureVideoButton =
        document.querySelector('#screenshot .capture-button');
      const screenshotButton = document.querySelector('#screenshot-button');
      const img = document.querySelector('#screenshot img');
      const video = document.querySelector('#screenshot video');
      
      const canvas = document.createElement('canvas');
      
      captureVideoButton.onclick = function() {
        navigator.mediaDevices.getUserMedia(constraints).
          then(handleSuccess).catch(handleError);
      };
      
      screenshotButton.onclick = video.onclick = function() {
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0);
        // Other browsers will fall back to image/png
        img.src = canvas.toDataURL('image/webp');
        console.log(img.src);
      };
      
      function handleSuccess(stream) {
        screenshotButton.disabled = false;
        video.srcObject = stream;
      }
      </script>

      <script>
        window.print_this = function(id) {
          var shivajiLogo = document.getElementById("shivajiLogo").innerHTML;

          var currentTime = new Date(),
          hours = currentTime.getHours(),
          minutes = currentTime.getMinutes(),
          day = currentDate.getDate(),
          month = currentDate.getMonth() + 1,
          year = currentDate.getFullYear();
          var insertionIdString = '' + hours + minutes + day + month + year;
          var insertionId = parseInt(insertionIdString);
          
          document.cookie = 'insertionId=' + insertionId + '; expires=; path=/';

          var passType = document.getElementById("passType").value;
          document.cookie = 'passType=' + passType + '; expires=; path=/';

          var inDate = document.getElementById("inDate").innerHTML;
          // 11/06/2019
          var inDateSQL =  parseInt(inDate.substring(0, 2) + inDate.substring(3, 5) + inDate.substring(6, 10));
          document.cookie = 'inDate=' + inDateSQL + '; expires=; path=/';

          var inTime = document.getElementById("inTime").innerHTML;
          document.cookie = 'inTime=' + inTime + '; expires=; path=/';

          var hostFirstName = document.getElementById("firstName").value;
          document.cookie = 'hostFirstName=' + hostFirstName + '; expires=; path=/';
          var hostLastName = document.getElementById("lastName").value;
          document.cookie = 'hostLastName=' + hostLastName + '; expires=; path=/';
          var hostName = hostFirstName + ' ' + hostLastName;

          var hostRank = document.getElementById("ranks").value;
          document.cookie = 'hostRank=' + hostRank + '; expires=; path=/';

          var hostPersonalNumber = document.getElementById("personalNumber").value;
          document.cookie = 'hostPersonalNumber=' + hostPersonalNumber + '; expires=; path=/';

          var hostDepartment = document.getElementById("department").value;
          document.cookie = 'hostDepartment=' + hostDepartment + '; expires=; path=/';

          var hostMobileNumber = document.getElementById("mobileNumber").value;
          document.cookie = 'hostMobileNumber=' + hostMobileNumber + '; expires=; path=/';

          var hostAddress = document.getElementById("address").value;
          document.cookie = 'hostAddress=' + hostAddress + '; expires=; path=/';

          var purposeOfVisit = document.getElementById("purpose").value;
          document.cookie = 'purposeOfVisit=' + purposeOfVisit + '; expires=; path=/';

          var gvFirstName = document.getElementById("guestFirstName").value;
          document.cookie = 'gvFirstName=' + gvFirstName + '; expires=; path=/';
          var gvLastName = document.getElementById("guestLastName").value;
          document.cookie = 'gvLastName=' + gvLastName + '; expires=; path=/';
          var guestName =  gvFirstName + ' ' + gvLastName;

          var guestAddress = document.getElementById("guestAddress").value;
          document.cookie = 'guestAddress=' + guestAddress + '; expires=; path=/';

          var guestMobileNumber = document.getElementById("guestMobileNumber").value;
          document.cookie = 'guestMobileNumber=' + guestMobileNumber + '; expires=; path=/';

          var guestTransitAddress = document.getElementById("guestTransitAddress").value;
          document.cookie = 'guestTransitAddress=' + guestTransitAddress + '; expires=; path=/';

          var additionalGuestNo1 = document.getElementById("additionalGuestNo1").value;
          document.cookie = 'additionalGuestNo1=' + additionalGuestNo1 + '; expires=; path=/';

          var additionalGuestNo2 = document.getElementById("additionalGuestNo2").value;
          document.cookie = 'additionalGuestNo2=' + additionalGuestNo2 + '; expires=; path=/';

          var additionalGuestNo3 = document.getElementById("additionalGuestNo3").value;
          document.cookie = 'additionalGuestNo3=' + additionalGuestNo3 + '; expires=; path=/';

          var guestGender = document.getElementById("guestGender").value;
          document.cookie = 'guestGender=' + guestGender + '; expires=; path=/';

          var guestNationality = document.getElementById("guestNationality").value;
          document.cookie = 'guestNationality=' + guestNationality + '; expires=; path=/';

          var guestHostRelation = document.getElementById("guestHostRelation").value;
          document.cookie = 'guestHostRelation=' + guestHostRelation + '; expires=; path=/';

          var guestVehicleDetails = document.getElementById("guestVehicleDetails").value;
          document.cookie = 'guestVehicleDetails=' + guestVehicleDetails + '; expires=; path=/';

          var outDate = document.getElementById("outDate").innerHTML;
          var outDateSQL = outDate.substring(6, 10) + '-' + outDate.substring(3, 5) + '-' + outDate.substring(0, 2);
          document.cookie = 'outDate=' + outDateSQL + '; expires=; path=/';

          var outTime = document.getElementById("outTime").innerHTML;
          document.cookie = 'outTime=' + outTime + '; expires=; path=/';

          var guestServiceHistory = document.getElementById("guestServiceHistory").value;
          document.cookie = 'guestServiceHistory=' + guestServiceHistory + '; expires=; path=/';

          var guestCurrentEmployer = document.getElementById("guestCurrentEmployer").value;
          document.cookie = 'guestCurrentEmployer=' + guestCurrentEmployer + '; expires=; path=/';

          var guestLaptopDetails = document.getElementById("guestLaptopDetails").value;
          document.cookie = 'guestLaptopDetails=' + guestLaptopDetails + '; expires=; path=/';

          var guestCarriageMaterialDetails = document.getElementById("guestCarriageMaterialDetails").value;
          document.cookie = 'guestCarriageMaterialDetails=' + guestCarriageMaterialDetails + '; expires=; path=/';

          var whetherVisitorPass = document.getElementById("passType").value;
          document.cookie = 'whetherVisitorPass=' + whetherVisitorPass + '; expires=; path=/';

          var overnight = document.getElementById("overnight");
          if(overnight.checked == true)
            document.cookie = 'overnight=' + 'true' + '; expires=; path=/';
          else
            document.cookie = 'overnight=' + 'false' + '; expires=; path=/';

          var whetherOvertimeRequired = document.getElementById("overtimeRequired");
          if(whetherOvertimeRequired.checked == true)
            document.cookie = 'whetherOvertimeRequired=' + 'true' + '; expires=; path=/';
          else
            document.cookie = 'whetherOvertimeRequired=' + 'false' + '; expires=; path=/';

          var placeOfDuty = document.getElementById("placeOfDuty").value;
          document.cookie = 'placeOfDuty=' + placeOfDuty + '; expires=; path=/';          

          var serviceHistory = document.getElementById("serviceHistory").value;
          document.cookie = 'serviceHistory=' + serviceHistory + '; expires=; path=/';       

          var branch = document.getElementById("branch").value;
          document.cookie = 'branch=' + branch + '; expires=; path=/';    

          var hostUnit = document.getElementById("unit").value;
          document.cookie = 'hostUnit=' + hostUnit + '; expires=; path=/'; 

          var gvNoOfAdditionalGuests = document.getElementById("noOfGuests").value;
          document.cookie = 'gvNoOfAdditionalGuests=' + gvNoOfAdditionalGuests + '; expires=; path=/';

          var outTimeDays = document.getElementById("outTimeDays").value;
          document.cookie = 'outTimeDays=' + outTimeDays + '; expires=; path=/';

          var outTimeHours = document.getElementById("outTimeHours").value;
          document.cookie = 'outTimeHours=' + outTimeHours + '; expires=; path=/';

          var remarks = document.getElementById("remarks").value;
          document.cookie = 'remarks=' + remarks + '; expires=; path=/';

          var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
          
          WinPrint.document.write('<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">');
          WinPrint.document.write("<style>td{padding-bottom: 0.2rem; padding-left: 2rem;}</style>");
          
          // To keep styling
          /*var file = WinPrint.document.createElement("link");
          file.setAttribute("rel", "stylesheet");
          file.setAttribute("type", "text/css");
          file.setAttribute("href", 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
          WinPrint.document.head.appendChild(file);*/

          WinPrint.document.write(shivajiLogo);

          WinPrint.document.write('<table>');
          WinPrint.document.write('<tr><td><strong>Type of Pass: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(passType);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>In Date: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(inDate);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>In Time: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(inTime);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('</table>');

          WinPrint.document.write('<table>');
          WinPrint.document.write('<hr><div style="margin: 0 auto; text-align: center;"><strong><u>Host Details</u></strong></div>');
          WinPrint.document.write('<tr><td><strong>Name: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(hostName);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Rank: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(hostRank);
          WinPrint.document.write('</td></tr>');
          // WinPrint.document.write('<tr><td><strong>Personal Number: </strong></td>');
          // WinPrint.document.write('<td>');
          // WinPrint.document.write(hostPersonalNumber);
          // WinPrint.document.write('</td></tr>');
          // WinPrint.document.write('<tr><td><strong>Department: </strong></td>');
          // WinPrint.document.write('<td>');
          // WinPrint.document.write(hostDepartment);
          // WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Mobile Number: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(hostMobileNumber);
          WinPrint.document.write('</td></tr>');
          // WinPrint.document.write('<tr><td><strong>Address: </strong></td>');
          // WinPrint.document.write('<td>');
          // WinPrint.document.write(hostAddress);
          // WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Purpose of Visit: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(purposeOfVisit);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('</table>');

          WinPrint.document.write('<hr><div style="margin: 0 auto; text-align: center;"><strong><u>Guest/ Visitor Details</u></strong></div>');

          WinPrint.document.write('<div style="margin: 0 auto; position: relative; float: right; top: 1.5rem; right: 2rem;"><img style="border: 3px solid black;" height="230" width="300" src="');
          WinPrint.document.write(img.src);
          WinPrint.document.write('"><br><br><br><br><strong>Signature of OOD: </strong></div>');

          WinPrint.document.write('<table>');
          WinPrint.document.write('<tr><td><strong>Name: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(guestName);
          WinPrint.document.write('</td></tr>');
          // WinPrint.document.write('<tr><td><strong>Permanent Address: </strong></td>');
          // WinPrint.document.write('<td>');
          // WinPrint.document.write(guestAddress);
          // WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Mobile Number: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(guestMobileNumber);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Transit Address: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(guestTransitAddress);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Gender: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(guestGender);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Nationality: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(guestNationality);
          WinPrint.document.write('</td></tr>');
          // WinPrint.document.write('<tr><td><strong>Service History: </strong></td>');
          // WinPrint.document.write('<td>');
          // WinPrint.document.write(guestServiceHistory);
          // WinPrint.document.write('</td></tr>');
          // WinPrint.document.write('<tr><td><strong>Current Employer: </strong></td>');
          // WinPrint.document.write('<td>');
          // WinPrint.document.write(guestCurrentEmployer);
          // WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Relation with Host: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(guestHostRelation);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Additional Guest Details #1: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(additionalGuestNo1);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Additional Guest Details #2: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(additionalGuestNo2);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Additional Guest Details #3: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(additionalGuestNo3);
          WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Vehicle Details: </strong></td>');
          WinPrint.document.write('<td>');
          WinPrint.document.write(guestVehicleDetails);
          WinPrint.document.write('</td></tr>');
          // WinPrint.document.write('<tr><td><strong>Laptop Details: </strong></td>');
          // WinPrint.document.write('<td>');
          // WinPrint.document.write(guestLaptopDetails);
          // WinPrint.document.write('</td></tr>');
          // WinPrint.document.write('<tr><td><strong>Carriage Material Details: </strong></td>');
          // WinPrint.document.write('<td>');
          // WinPrint.document.write(guestCarriageMaterialDetails);
          // WinPrint.document.write('</td></tr>');
          if(whetherVisitorPass == "Visitor Pass")
          {
            WinPrint.document.write('<tr><td><strong>Overtime Required? </strong></td>');
            if(whetherOvertimeRequired)
            {
              WinPrint.document.write('<td>');
              WinPrint.document.write('Yes');
              WinPrint.document.write('</td></tr>');
            }
            else
            {
              WinPrint.document.write('<td>');
              WinPrint.document.write('No');
              WinPrint.document.write('</td></tr>');
            }
            WinPrint.document.write('<tr><td><strong>Place of Duty: </strong></td>');
            WinPrint.document.write('<td>');
            WinPrint.document.write(placeOfDuty);
            WinPrint.document.write('</td></tr>');
          }
          WinPrint.document.write('</table>');

          WinPrint.document.write('<hr>');
          WinPrint.document.write('<table>');
          WinPrint.document.write('<tr><td><strong>Out Date: </strong></td>');
            WinPrint.document.write('<td>');
          WinPrint.document.write(outDate);
            WinPrint.document.write('</td></tr>');
          WinPrint.document.write('<tr><td><strong>Out Time: </strong></td>');
            WinPrint.document.write('<td>');
          WinPrint.document.write(outTime);
            WinPrint.document.write('</td></tr>');
          WinPrint.document.write('</table>');
          WinPrint.document.close();
          
          WinPrint.setTimeout(function(){
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
          }, 1000);
          document.location.reload(true);
        }
        
      </script>

      <?php

        //Initialization
        // $host = 'localhost';
        // $databaseName = 'personnelmanagementsystemdb';
        // $user = "root";
        // $password = "1MCxoQGxSQPHDuM7";
        

        // //Create Connection
        // $connection = mysqli_connect($host, $user, $password, $databaseName);

        // //Check Connection
        // if($connection->connect_error)
        // die("Connection failed: ".$connection->connect_error);
        // else
        // echo "<br>Connected successfully!<br>";

        //Test
        //echo "<br>Connected successfully!<br>";

        //Echo Cookie
        // echo "Cookie value is " . ($_COOKIE['passType']!='' ? $_COOKIE['passType'] : 'unknown');
        // echo "Insertion ID is " . ($_COOKIE['insertionId']!='' ? $_COOKIE['insertionId'] : 'unknown');
        // echo "<br>";
        // echo PHP_INT_MAX;

        function recurringCookieReader()
        {
          // if(isset($insertionId)){
          //   $insertionId = $_COOKIE['insertionId'];
          // }
          
          $insertionId = $_COOKIE['insertionId'];
          //$insertionId = mysql_real_escape_string($insertionId);

          $inDate = $_COOKIE['inDate'];
          //$inDate = mysql_real_escape_string($inDate);

          $inTime = $_COOKIE['inTime'];
          //$inTime = mysql_real_escape_string($inTime);
          


          $hostServiceHistory = $_COOKIE['serviceHistory'];
          //$hostServiceHistory = mysql_real_escape_string($hostServiceHistory);

          $hostBranch = $_COOKIE['branch'];
          //$hostBranch = mysql_real_escape_string($hostBranch);

          $hostFirstName = $_COOKIE['hostFirstName'];
          //$hostFirstName = mysql_real_escape_string($hostFirstName);

          $hostLastName = $_COOKIE['hostLastName'];
          //$hostLastName = mysql_real_escape_string($hostLastName);

          $hostRank = $_COOKIE['hostRank'];
          //$hostRank = mysql_real_escape_string($hostRank);

          $hostUnit = $_COOKIE['hostUnit'];
          //$hostUnit = mysql_real_escape_string($hostUnit);

          $hostDepartment = $_COOKIE['hostDepartment'];
          //$hostDepartment = mysql_real_escape_string($hostDepartment);

          $hostPersonnelNo = $_COOKIE['hostPersonalNumber'];
          //$hostPersonnelNo = mysql_real_escape_string($hostPersonnelNo);

          $hostMobileNo = $_COOKIE['hostMobileNumber'];
          //$hostMobileNo = mysql_real_escape_string($hostMobileNo);

          $hostAddress = $_COOKIE['hostAddress'];
          //$hostAddress = mysql_real_escape_string($hostAddress);

          $hostPurposeOfVisit = $_COOKIE['purposeOfVisit'];
          //$hostPurposeOfVisit = mysql_real_escape_string($hostPurposeOfVisit);



          $gvServiceHistory = $_COOKIE['guestServiceHistory'];
          //$gvServiceHistory = mysql_real_escape_string($gvServiceHistory);

          $gvCurrentEmployer = $_COOKIE['guestCurrentEmployer'];
          //$gvCurrentEmployer = mysql_real_escape_string($gvCurrentEmployer);

          $gvFirstName = $_COOKIE['gvFirstName'];
          //$gvFirstName = mysql_real_escape_string($gvFirstName);

          $gvLastName = $_COOKIE['gvLastName'];
          //$gvLastName = mysql_real_escape_string($gvLastName);

          $gvPermanentAddress = $_COOKIE['guestAddress'];
          //$gvPermanentAddress = mysql_real_escape_string($gvPermanentAddress);

          $gvMobileNo = $_COOKIE['guestMobileNumber'];
          //$gvMobileNo = mysql_real_escape_string($gvMobileNo);

          $gvTransitAddress = $_COOKIE['guestTransitAddress'];
          //$gvTransitAddress = mysql_real_escape_string($gvTransitAddress);

          $gvNoOfAdditionalGuests = $_COOKIE['gvNoOfAdditionalGuests'];
          //$gvNoOfAdditionalGuests = mysql_real_escape_string($gvNoOfAdditionalGuests);

          $gvGender = $_COOKIE['guestGender'];
          //$gvGender = mysql_real_escape_string($gvGender);

          $gvNationality = $_COOKIE['guestNationality'];
          //$gvNationality = mysql_real_escape_string($gvNationality);

          $gvRelationWithHost = $_COOKIE['guestHostRelation'];
          //$gvRelationWithHost = mysql_real_escape_string($gvRelationWithHost);

          $gvAdditionalGuest2Details = $_COOKIE['additionalGuestNo1'];
          //$gvAdditionalGuest2Details = mysql_real_escape_string($gvAdditionalGuest2Details);

          $gvAdditionalGuest3Details = $_COOKIE['additionalGuestNo2'];
          //$gvAdditionalGuest3Details = mysql_real_escape_string($gvAdditionalGuest3Details);

          $gvAdditionalGuest4Details = $_COOKIE['additionalGuestNo3'];
          //$gvAdditionalGuest4Details = mysql_real_escape_string($gvAdditionalGuest4Details);

          $gvVehicleDetails = $_COOKIE['guestVehicleDetails'];
          //$gvVehicleDetails = mysql_real_escape_string($gvVehicleDetails);

          $gvLaptopDetails = $_COOKIE['guestLaptopDetails'];
          //$gvLaptopDetails = mysql_real_escape_string($gvLaptopDetails);

          $gvCarriageMaterialDetails = $_COOKIE['guestCarriageMaterialDetails'];
          //$gvCarriageMaterialDetails = mysql_real_escape_string($gvCarriageMaterialDetails);

          $gvTypeOfPass = $_COOKIE['passType'];
          //$gvTypeOfPass = mysql_real_escape_string($gvTypeOfPass);

          $gvPassValidityDays = $_COOKIE['outTimeDays'];
          //$gvPassValidityDays = mysql_real_escape_string($gvPassValidityDays);

          $gvPassValidityHours = $_COOKIE['outTimeHours'];
          //$gvPassValidityHours = mysql_real_escape_string($gvPassValidityHours);

          $gvStayingOvernight = $_COOKIE['overnight'];
          //$gvStayingOvernight = mysql_real_escape_string($gvStayingOvernight);

          $gvAdditionalOvertimeRequired = $_COOKIE['whetherOvertimeRequired'];
          //$gvAdditionalOvertimeRequired = mysql_real_escape_string($gvAdditionalOvertimeRequired);

          $gvPlaceOfDuty = $_COOKIE['placeOfDuty'];
          //$gvPlaceOfDuty = mysql_real_escape_string($gvPlaceOfDuty);

          $gvOutDate = $_COOKIE['outDate'];
          //$gvOutDate = mysql_real_escape_string($gvOutDate);

          $gvOutTime = $_COOKIE['outTime'];
          //$gvOutTime = mysql_real_escape_string($gvOutTime);

          $remarks = $_COOKIE['remarks'];
          //$remarks = mysql_real_escape_string($remarks);

          // echo "<br>" . $insertionId . "<br>" . $inDate . "<br>" . $inTime . "<br>" . $hostServiceHistory . "<br>" . $hostBranch . 
          // "<br>" . $hostFirstName . "<br>" . $hostLastName . "<br>" . $hostRank . "<br>" . $hostUnit . "<br>" . $hostDepartment . "<br>" . $hostPersonnelNo . 
          // "<br>" . $hostMobileNo . "<br>" . $hostAddress . "<br>" . $hostPurposeOfVisit . "<br>" . $gvServiceHistory . "<br>" . $gvCurrentEmployer . "<br>" . $gvFirstName . 
          // "<br>" . $gvLastName . "<br>" . $gvPermanentAddress . "<br>" . $gvMobileNo . "<br>" . $gvTransitAddress . "<br>" . $gvNoOfAdditionalGuests . "<br>" . $gvGender . 
          // "<br>" . $gvNationality . "<br>" . $gvRelationWithHost . "<br>" . $gvAdditionalGuest2Details . "<br>" . $gvAdditionalGuest3Details . "<br>" . $gvAdditionalGuest4Details . "<br>" . $gvVehicleDetails . 
          // "<br>" . $gvLaptopDetails . "<br>" . $gvCarriageMaterialDetails . "<br>" . $gvTypeOfPass . "<br>" . $gvPassValidityDays . "<br>" . $gvPassValidityHours . 
          // "<br>" . $gvStayingOvernight . "<br>" . $gvAdditionalOvertimeRequired . "<br>" . $gvPlaceOfDuty . "<br>" . $gvOutDate . "<br>" . $gvOutTime . "<br>" . $remarks;

          // $sql = "INSERT INTO guestvisitorpassdetails (insertionId, inDate, inTime, hostServiceHistory, hostBranch, hostFirstName, hostLastName, hostRank, hostUnit, hostDepartment, hostPersonnelNo, hostMobileNo, hostAddress, hostPurposeOfVisit, gvServiceHistory, gvCurrentEmployer, gvFirstName, gvLastName, gvPermanentAddress, gvMobileNo, gvTransitAddress, gvNoOfAdditionalGuests, gvGender, gvNationality, gvRelationWithHost, gvAdditionalGuest2Details, gvAdditionalGuest3Details, gvAdditionalGuest4Details, gvVehicleDetails, gvLaptopDetails, gvCarriageMaterialDetails, gvTypeOfPass, gvPassValidityDays, gvPassValidityHours, gvStayingOvernight, gvAdditionalOvertimeRequired, gvPlaceOfDuty, gvOutDate, gvOutTime, remarks)
          //         VALUES ("'.$insertionId.'", "'.$inDate.'", "'.$inTime.'", "'.$hostServiceHistory.'", "'.$hostBranch.'", "'.$hostFirstName.'", "'.$hostLastName.'", "'.$hostRank.'", "'.$hostUnit.'", "'.$hostDepartment.'", "'.$hostPersonnelNo.'", "'.$hostMobileNo.'", "'.$hostAddress.'", "'.$hostPurposeOfVisit.'", "'.$gvServiceHistory.'", "'.$gvCurrentEmployer.'", "'.$gvFirstName.'", "'.$gvLastName.'", "'.$gvPermanentAddress.'", "'.$gvMobileNo.'", "'.$gvTransitAddress.'", "'.$gvNoOfAdditionalGuests.'", "'.$gvGender.'", "'.$gvNationality.'", "'.$gvRelationWithHost.'", "'.$gvAdditionalGuest2Details.'", "'.$gvAdditionalGuest3Details.'", "'.$gvAdditionalGuest4Details.'", "'.$gvVehicleDetails.'", "'.$gvLaptopDetails.'", "'.$gvCarriageMaterialDetails.'", "'.$gvTypeOfPass.'", "'.$gvPassValidityDays.'", "'.$gvPassValidityHours.'", "'.$gvStayingOvernight.'", "'.$gvAdditionalOvertimeRequired.'", "'.$gvPlaceOfDuty.'", "'.$gvOutDate.'", "'.$gvOutTime.'", "'.$remarks.'" )";

          
          //$dbString = new PDO("mysql:host='localhost';dbname='personnelmanagementsystemdb\_%'", 'root', '1MCxoQGxSQPHDuM7');
          $dbString = new PDO("mysql:host=localhost;dbname=personnelmanagementsystemdb", 'zeusem', 'zeusem');
          // $sql = "INSERT INTO guestvisitorpassdetails (insertionId, inDate, inTime, hostServiceHistory, hostBranch, hostFirstName, hostLastName, hostRank, hostUnit, hostDepartment, hostPersonnelNo, hostMobileNo, hostAddress, hostPurposeOfVisit, gvServiceHistory, gvCurrentEmployer, gvFirstName, gvLastName, gvPermanentAddress, gvMobileNo, gvTransitAddress, gvNoOfAdditionalGuests, gvGender, gvNationality, gvRelationWithHost, gvAdditionalGuest2Details, gvAdditionalGuest3Details, gvAdditionalGuest4Details, gvVehicleDetails, gvLaptopDetails, gvCarriageMaterialDetails, gvTypeOfPass, gvPassValidityDays, gvPassValidityHours, gvStayingOvernight, gvAdditionalOvertimeRequired, gvPlaceOfDuty, gvOutDate, gvOutTime, remarks) 
          // VALUES (:insertionId, :inDate, :inTime, :hostServiceHistory, :hostBranch, :hostFirstName, :hostLastName, :hostRank, :hostUnit, :hostDepartment, :hostPersonnelNo, :hostMobileNo, :hostAddress, :hostPurposeOfVisit, :gvServiceHistory, :gvCurrentEmployer, :gvFirstName, :gvLastName, :gvPermanentAddress, :gvMobileNo, :gvTransitAddress, :gvNoOfAdditionalGuests, :gvGender, :gvNationality, :gvRelationWithHost, :gvAdditionalGuest2Details, :gvAdditionalGuest3Details, :gvAdditionalGuest4Details, :gvVehicleDetails, :gvLaptopDetails, :gvCarriageMaterialDetails, :gvTypeOfPass, :gvPassValidityDays, :gvPassValidityHours, :gvStayingOvernight, :gvAdditionalOvertimeRequired, :gvPlaceOfDuty, :gvOutDate, :gvOutTime, :remarks)";
          // $sql = "INSERT INTO personnelmanagementsystemdb.guestvisitorpassdetails 
          //         VALUES (:insertionId, 
          //                 :inDate, 
          //                 :inTime, 
          //                 :hostServiceHistory, 
          //                 :hostBranch, 
          //                 :hostFirstName, 
          //                 :hostLastName, 
          //                 :hostRank, 
          //                 :hostUnit, 
          //                 :hostDepartment, 
          //                 :hostPersonnelNo, 
          //                 :hostMobileNo, 
          //                 :hostAddress, 
          //                 :hostPurposeOfVisit, 
          //                 :gvServiceHistory, 
          //                 :gvCurrentEmployer, 
          //                 :gvFirstName, 
          //                 :gvLastName, 
          //                 :gvPermanentAddress, 
          //                 :gvMobileNo, 
          //                 :gvTransitAddress, 
          //                 :gvNoOfAdditionalGuests, 
          //                 :gvGender, 
          //                 :gvNationality, 
          //                 :gvRelationWithHost, 
          //                 :gvAdditionalGuest2Details, 
          //                 :gvAdditionalGuest3Details, 
          //                 :gvAdditionalGuest4Details, 
          //                 :gvVehicleDetails, 
          //                 :gvLaptopDetails, 
          //                 :gvCarriageMaterialDetails, 
          //                 :gvTypeOfPass, 
          //                 :gvPassValidityDays, 
          //                 :gvPassValidityHours, 
          //                 :gvStayingOvernight, 
          //                 :gvAdditionalOvertimeRequired, 
          //                 :gvPlaceOfDuty, 
          //                 :gvOutDate, 
          //                 :gvOutTime, 
          //                 :remarks)";
          // $query = $dbString->prepare($sql);
          // $query->bindParam(':insertionId', $insertionId);
          // $query->bindParam(':inDate', $inDate);
          // $query->bindParam(':inTime', $inTime);
          // $query->bindParam(':hostServiceHistory', $hostServiceHistory);
          // $query->bindParam(':hostBranch', $hostBranch);
          // $query->bindParam(':hostFirstName', $hostFirstName);
          // $query->bindParam(':hostLastName', $hostLastName);
          // $query->bindParam(':hostRank', $hostRank);
          // $query->bindParam(':hostUnit', $hostUnit);
          // $query->bindParam(':hostDepartment', $hostDepartment);
          // $query->bindParam(':hostPersonnelNo', $hostPersonnelNo);
          // $query->bindParam(':hostMobileNo', $hostMobileNo);
          // $query->bindParam(':hostAddress', $hostAddress);
          // $query->bindParam(':hostPurposeOfVisit', $hostPurposeOfVisit);
          // $query->bindParam(':gvServiceHistory', $gvServiceHistory);
          // $query->bindParam(':gvCurrentEmployer', $gvCurrentEmployer);
          // $query->bindParam(':gvFirstName', $gvFirstName);
          // $query->bindParam(':gvLastName', $gvLastName);
          // $query->bindParam(':gvPermanentAddress', $gvPermanentAddress);
          // $query->bindParam(':gvMobileNo', $gvMobileNo);
          // $query->bindParam(':gvTransitAddress', $gvTransitAddress);
          // $query->bindParam(':gvNoOfAdditionalGuests', $gvNoOfAdditionalGuests);
          // $query->bindParam(':gvGender', $gvGender);
          // $query->bindParam(':gvNationality', $gvNationality);
          // $query->bindParam(':gvRelationWithHost', $gvRelationWithHost);
          // $query->bindParam(':gvAdditionalGuest2Details', $gvAdditionalGuest2Details);
          // $query->bindParam(':gvAdditionalGuest3Details', $gvAdditionalGuest3Details);
          // $query->bindParam(':gvAdditionalGuest4Details', $gvAdditionalGuest4Details);
          // $query->bindParam(':gvVehicleDetails', $gvVehicleDetails);
          // $query->bindParam(':gvLaptopDetails', $gvLaptopDetails);
          // $query->bindParam(':gvCarriageMaterialDetails', $gvCarriageMaterialDetails);
          // $query->bindParam(':gvTypeOfPass', $gvTypeOfPass);
          // $query->bindParam(':gvPassValidityDays', $gvPassValidityDays);
          // $query->bindParam(':gvPassValidityHours', $gvPassValidityHours);
          // $query->bindParam(':gvStayingOvernight', $gvStayingOvernight);
          // $query->bindParam(':gvAdditionalOvertimeRequired', $gvAdditionalOvertimeRequired);
          // $query->bindParam(':gvPlaceOfDuty', $gvPlaceOfDuty);
          // $query->bindParam(':gvOutDate', $gvOutDate);
          // $query->bindParam(':gvOutTime', $gvOutTime);
          // $query->bindParam(':remarks', $remarks);
          // $query->execute();

          // $sql = "INSERT INTO personnelmanagementsystemdb.guestvisitorpassdetails (insertionId)
          //         VALUES (:insertionId)";
          // $query = $dbString->prepare($sql);
          // $query->bindParam(':insertionId', $insertionId);
          // $query->execute();

          // $sql = "INSERT INTO personnelmanagementsystemdb.guestvisitorpassdetails (insertionId, inDate, inTime, hostServiceHistory, hostBranch, hostFirstName, hostLastName, hostRank, hostUnit, hostDepartment, hostPersonnelNo, hostMobileNo, hostAddress, hostPurposeOfVisit, gvServiceHistory, gvCurrentEmployer, gvFirstName, gvLastName, gvPermanentAddress, gvMobileNo, gvTransitAddress, gvNoOfAdditionalGuests, gvGender, gvNationality, gvRelationWithHost, gvAdditionalGuest2Details, gvAdditionalGuest3Details, gvAdditionalGuest4Details, gvVehicleDetails, gvLaptopDetails, gvCarriageMaterialDetails, gvTypeOfPass, gvPassValidityDays, gvPassValidityHours, gvStayingOvernight, gvAdditionalOvertimeRequired, gvPlaceOfDuty, gvOutDate, gvOutTime, remarks)
          //         VALUES (:insertionId, :inDate, :inTime, :hostServiceHistory, :hostBranch, :hostFirstName, :hostLastName, :hostRank, :hostUnit, :hostDepartment, :hostPersonnelNo, :hostMobileNo, :hostAddress, :hostPurposeOfVisit, :gvServiceHistory, :gvCurrentEmployer, :gvFirstName, :gvLastName, :gvPermanentAddress, :gvMobileNo, :gvTransitAddress, :gvNoOfAdditionalGuests, :gvGender, :gvNationality, :gvRelationWithHost, :gvAdditionalGuest2Details, :gvAdditionalGuest3Details, :gvAdditionalGuest4Details, :gvVehicleDetails, :gvLaptopDetails, :gvCarriageMaterialDetails, :gvTypeOfPass, :gvPassValidityDays, :gvPassValidityHours, :gvStayingOvernight, :gvAdditionalOvertimeRequired, :gvPlaceOfDuty, :gvOutDate, :gvOutTime, :remarks)";
          $sql = "INSERT INTO personnelmanagementsystemdb.guestvisitorpassdetails (insertionId, inDate, inTime, hostServiceHistory, hostBranch, hostFirstName, hostLastName, hostRank, hostUnit, hostDepartment, hostPersonnelNo, hostMobileNo, hostAddress, hostPurposeOfVisit, gvServiceHistory, gvCurrentEmployer, gvFirstName, gvLastName, gvPermanentAddress, gvMobileNo, gvTransitAddress, gvNoOfAdditionalGuests, gvGender, gvNationality, gvRelationWithHost, gvAdditionalGuest2Details, gvAdditionalGuest3Details, gvAdditionalGuest4Details, gvVehicleDetails, gvLaptopDetails, gvCarriageMaterialDetails, gvTypeOfPass, gvPassValidityDays, gvPassValidityHours, gvStayingOvernight, gvAdditionalOvertimeRequired, gvPlaceOfDuty, gvOutDate, gvOutTime, remarks)
                  VALUES (:insertionId, :inDate, :inTime, :hostServiceHistory, :hostBranch, :hostFirstName, :hostLastName, :hostRank, :hostUnit, :hostDepartment, :hostPersonnelNo, :hostMobileNo, :hostAddress, :hostPurposeOfVisit, :gvServiceHistory, :gvCurrentEmployer, :gvFirstName, :gvLastName, :gvPermanentAddress, :gvMobileNo, :gvTransitAddress, :gvNoOfAdditionalGuests, :gvGender, :gvNationality, :gvRelationWithHost, :gvAdditionalGuest2Details, :gvAdditionalGuest3Details, :gvAdditionalGuest4Details, :gvVehicleDetails, :gvLaptopDetails, :gvCarriageMaterialDetails, :gvTypeOfPass, :gvPassValidityDays, :gvPassValidityHours, :gvStayingOvernight, :gvAdditionalOvertimeRequired, :gvPlaceOfDuty, :gvOutDate, :gvOutTime, :remarks)";
          $query = $dbString->prepare($sql);
          $query->bindParam(':insertionId', $insertionId);
          $query->bindParam(':inDate', $inDate);
          $query->bindParam(':inTime', $inTime);
          $query->bindParam(':hostServiceHistory', $hostServiceHistory);
          $query->bindParam(':hostBranch', $hostBranch);
          $query->bindParam(':hostFirstName', $hostFirstName);
          $query->bindParam(':hostLastName', $hostLastName);
          $query->bindParam(':hostRank', $hostRank);
          $query->bindParam(':hostUnit', $hostUnit);
          $query->bindParam(':hostDepartment', $hostDepartment);
          $query->bindParam(':hostPersonnelNo', $hostPersonnelNo);
          $query->bindParam(':hostMobileNo', $hostMobileNo);
          $query->bindParam(':hostAddress', $hostAddress);
          $query->bindParam(':hostPurposeOfVisit', $hostPurposeOfVisit);
          $query->bindParam(':gvServiceHistory', $gvServiceHistory);
          $query->bindParam(':gvCurrentEmployer', $gvCurrentEmployer);
          $query->bindParam(':gvFirstName', $gvFirstName);
          $query->bindParam(':gvLastName', $gvLastName);
          $query->bindParam(':gvPermanentAddress', $gvPermanentAddress);
          $query->bindParam(':gvMobileNo', $gvMobileNo);
          $query->bindParam(':gvTransitAddress', $gvTransitAddress);
          $query->bindParam(':gvNoOfAdditionalGuests', $gvNoOfAdditionalGuests);
          $query->bindParam(':gvGender', $gvGender);
          $query->bindParam(':gvNationality', $gvNationality);
          $query->bindParam(':gvRelationWithHost', $gvRelationWithHost);
          $query->bindParam(':gvAdditionalGuest2Details', $gvAdditionalGuest2Details);
          $query->bindParam(':gvAdditionalGuest3Details', $gvAdditionalGuest3Details);
          $query->bindParam(':gvAdditionalGuest4Details', $gvAdditionalGuest4Details);
          $query->bindParam(':gvVehicleDetails', $gvVehicleDetails);
          $query->bindParam(':gvLaptopDetails', $gvLaptopDetails);
          $query->bindParam(':gvCarriageMaterialDetails', $gvCarriageMaterialDetails);
          $query->bindParam(':gvTypeOfPass', $gvTypeOfPass);
          $query->bindParam(':gvPassValidityDays', $gvPassValidityDays);
          $query->bindParam(':gvPassValidityHours', $gvPassValidityHours);
          $query->bindParam(':gvStayingOvernight', $gvStayingOvernight);
          $query->bindParam(':gvAdditionalOvertimeRequired', $gvAdditionalOvertimeRequired);
          $query->bindParam(':gvPlaceOfDuty', $gvPlaceOfDuty);
          $query->bindParam(':gvOutDate', $gvOutDate);
          $query->bindParam(':gvOutTime', $gvOutTime);
          $query->bindParam(':remarks', $remarks);
          $query->execute();

          // $query->execute(array(':insertionId'=>$insertionId, ':inDate'=>$inDate, ':inTime'=>$inTime, ':hostServiceHistory'=>$hostServiceHistory, ':hostBranch'=>$hostBranch, ':hostFirstName'=>$hostFirstName, ':hostLastName'=>$hostLastName, ':hostRank'=>$hostRank, ':hostUnit'=>$hostUnit, ':hostDepartment'=>$hostDepartment, ':hostPersonnelNo'=>$hostPersonnelNo, ':hostMobileNo'=>$hostMobileNo, ':hostAddress'=>$hostAddress, ':hostPurposeOfVisit'=>$hostPurposeOfVisit, ':gvServiceHistory'=>$gvServiceHistory, ':gvCurrentEmployer'=>$gvCurrentEmployer, ':gvFirstName'=>$gvFirstName, ':gvLastName'=>$gvLastName, ':gvPermanentAddress'=>$gvPermanentAddress, ':gvMobileNo'=>$gvMobileNo, ':gvTransitAddress'=>$gvTransitAddress, ':gvNoOfAdditionalGuests'=>$gvNoOfAdditionalGuests, ':gvGender'=>$gvGender, ':gvNationality'=>$gvNationality, ':gvRelationWithHost'=>$gvRelationWithHost, ':gvAdditionalGuest2Details'=>$gvAdditionalGuest2Details, ':gvAdditionalGuest3Details'=>$gvAdditionalGuest3Details, ':gvAdditionalGuest4Details'=>$gvAdditionalGuest4Details, ':gvVehicleDetails'=>$gvVehicleDetails, ':gvLaptopDetails'=>$gvLaptopDetails, ':gvCarriageMaterialDetails'=>$gvCarriageMaterialDetails, ':gvTypeOfPass'=>$gvTypeOfPass, ':gvPassValidityDays'=>$gvPassValidityDays, ':gvPassValidityHours'=>$gvPassValidityHours, ':gvStayingOvernight'=>$gvStayingOvernight, ':gvAdditionalOvertimeRequired'=>$gvAdditionalOvertimeRequired, ':gvPlaceOfDuty'=>$gvPlaceOfDuty, ':gvOutDate'=>$gvOutDate, ':gvOutTime'=>$gvOutTime, ':remarks'=>$remarks));
          //$dbString = null;

          // if ($connection->query($sql) === TRUE) {
          //   echo "New record created successfully";
          // } else {
          //   echo "Error: " . $sql . "<br>" . $connection->error;
          // }

          //$connection->close();
        }

        recurringCookieReader();
        // while(true)
        // {
        //   recurringCookieReader();
        //   sleep(3);
        // }
        
        

        
      ?>

  </body>
</html>