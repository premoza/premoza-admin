@extends('layouts.app')

@section('pageTitle', 'Add Property')

@section('content')
<h1>Add Property</h1>

<div class="row">
    <div class="col-12 col-lg-5 col-xl-4">
        <div class="p-3">
            Select or drop image file here.<br>max: 1MB
            <div class="border mb-3 rounded shadow-sm">
                <div class="row mb-3 p-2">
                    <div id="drop-area">
                        <div class="drop-icon mt-4">
                            <i class="fa-regular fa-image" id="dropIcon"></i>
                        </div>

                        <input name="image1" type="file" class="file-upload" id="droppedContent" accept="image/*" required>
                    </div>
                </div>
            </div>
            <button class="btn btn-outline-primary w-100 shadow-sm"><i class="fa-solid fa-plus mx-2"></i>Add more image</button>
        </div>
    </div>
    <div class="col-12 col-lg-5 col-xl-4">
        <div class="p-3 border mb-3 rounded shadow-sm">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="text" id="category" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" id="description" class="form-control" required></textarea>
                <span class="text-muted">0/150</span>
            </div>
        </div>
        <div class="p-3 border mb-3 rounded shadow-sm">
            <h5>Location</h5>
            <div class="mb-3">
                <label for="line" class="form-label">Line</label>
                <input type="text" id="line" class="form-control" required autocomplete="address-line1">
            </div>
            <div class="row mb-3">
                <div class="col-sm-5 col-md-6">
                    <label for="country">Country</label>
                    <input name="country" list="countries" type="text" class="form-control" id="country" autocomplete="country-name" required>
                    <datalist id="countries">
                        <option value="Afghanistan" />
                        <option value="Albania" />
                        <option value="Algeria" />
                        <option value="American Samoa" />
                        <option value="Andorra" />
                        <option value="Angola" />
                        <option value="Anguilla" />
                        <option value="Antarctica" />
                        <option value="Antigua and Barbuda" />
                        <option value="Argentina" />
                        <option value="Armenia" />
                        <option value="Aruba" />
                        <option value="Australia" />
                        <option value="Austria" />
                        <option value="Azerbaijan" />
                        <option value="Bahamas" />
                        <option value="Bahrain" />
                        <option value="Bangladesh" />
                        <option value="Barbados" />
                        <option value="Belarus" />
                        <option value="Belgium" />
                        <option value="Belize" />
                        <option value="Benin" />
                        <option value="Bermuda" />
                        <option value="Bhutan" />
                        <option value="Bolivia" />
                        <option value="Bosnia and Herzegovina" />
                        <option value="Botswana" />
                        <option value="Bouvet Island" />
                        <option value="Brazil" />
                        <option value="British Indian Ocean Territory" />
                        <option value="Brunei Darussalam" />
                        <option value="Bulgaria" />
                        <option value="Burkina Faso" />
                        <option value="Burundi" />
                        <option value="Cambodia" />
                        <option value="Cameroon" />
                        <option value="Canada" />
                        <option value="Cape Verde" />
                        <option value="Cayman Islands" />
                        <option value="Central African Republic" />
                        <option value="Chad" />
                        <option value="Chile" />
                        <option value="China" />
                        <option value="Christmas Island" />
                        <option value="Cocos (Keeling) Islands" />
                        <option value="Colombia" />
                        <option value="Comoros" />
                        <option value="Congo" />
                        <option value="Congo, The Democratic Republic of The" />
                        <option value="Cook Islands" />
                        <option value="Costa Rica" />
                        <option value="Cote D'ivoire" />
                        <option value="Croatia" />
                        <option value="Cuba" />
                        <option value="Cyprus" />
                        <option value="Czech Republic" />
                        <option value="Denmark" />
                        <option value="Djibouti" />
                        <option value="Dominica" />
                        <option value="Dominican Republic" />
                        <option value="Ecuador" />
                        <option value="Egypt" />
                        <option value="El Salvador" />
                        <option value="Equatorial Guinea" />
                        <option value="Eritrea" />
                        <option value="Estonia" />
                        <option value="Ethiopia" />
                        <option value="Falkland Islands (Malvinas)" />
                        <option value="Faroe Islands" />
                        <option value="Fiji" />
                        <option value="Finland" />
                        <option value="France" />
                        <option value="French Guiana" />
                        <option value="French Polynesia" />
                        <option value="French Southern Territories" />
                        <option value="Gabon" />
                        <option value="Gambia" />
                        <option value="Georgia" />
                        <option value="Germany" />
                        <option value="Ghana" />
                        <option value="Gibraltar" />
                        <option value="Greece" />
                        <option value="Greenland" />
                        <option value="Grenada" />
                        <option value="Guadeloupe" />
                        <option value="Guam" />
                        <option value="Guatemala" />
                        <option value="Guinea" />
                        <option value="Guinea-bissau" />
                        <option value="Guyana" />
                        <option value="Haiti" />
                        <option value="Heard Island and Mcdonald Islands" />
                        <option value="Holy See (Vatican City State)" />
                        <option value="Honduras" />
                        <option value="Hong Kong" />
                        <option value="Hungary" />
                        <option value="Iceland" />
                        <option value="India" />
                        <option value="Indonesia" />
                        <option value="Iran, Islamic Republic of" />
                        <option value="Iraq" />
                        <option value="Ireland" />
                        <option value="Israel" />
                        <option value="Italy" />
                        <option value="Jamaica" />
                        <option value="Japan" />
                        <option value="Jordan" />
                        <option value="Kazakhstan" />
                        <option value="Kenya" />
                        <option value="Kiribati" />
                        <option value="Korea, Democratic People's Republic of" />
                        <option value="Korea, Republic of" />
                        <option value="Kuwait" />
                        <option value="Kyrgyzstan" />
                        <option value="Lao People's Democratic Republic" />
                        <option value="Latvia" />
                        <option value="Lebanon" />
                        <option value="Lesotho" />
                        <option value="Liberia" />
                        <option value="Libyan Arab Jamahiriya" />
                        <option value="Liechtenstein" />
                        <option value="Lithuania" />
                        <option value="Luxembourg" />
                        <option value="Macao" />
                        <option value="Macedonia, The Former Yugoslav Republic of" />
                        <option value="Madagascar" />
                        <option value="Malawi" />
                        <option value="Malaysia" />
                        <option value="Maldives" />
                        <option value="Mali" />
                        <option value="Malta" />
                        <option value="Marshall Islands" />
                        <option value="Martinique" />
                        <option value="Mauritania" />
                        <option value="Mauritius" />
                        <option value="Mayotte" />
                        <option value="Mexico" />
                        <option value="Micronesia, Federated States of" />
                        <option value="Moldova, Republic of" />
                        <option value="Monaco" />
                        <option value="Mongolia" />
                        <option value="Montserrat" />
                        <option value="Morocco" />
                        <option value="Mozambique" />
                        <option value="Myanmar" />
                        <option value="Namibia" />
                        <option value="Nauru" />
                        <option value="Nepal" />
                        <option value="Netherlands" />
                        <option value="Netherlands Antilles" />
                        <option value="New Caledonia" />
                        <option value="New Zealand" />
                        <option value="Nicaragua" />
                        <option value="Niger" />
                        <option value="Nigeria" />
                        <option value="Niue" />
                        <option value="Norfolk Island" />
                        <option value="Northern Mariana Islands" />
                        <option value="Norway" />
                        <option value="Oman" />
                        <option value="Pakistan" />
                        <option value="Palau" />
                        <option value="Palestinian Territory, Occupied" />
                        <option value="Panama" />
                        <option value="Papua New Guinea" />
                        <option value="Paraguay" />
                        <option value="Peru" />
                        <option value="Philippines" />
                        <option value="Pitcairn" />
                        <option value="Poland" />
                        <option value="Portugal" />
                        <option value="Puerto Rico" />
                        <option value="Qatar" />
                        <option value="Reunion" />
                        <option value="Romania" />
                        <option value="Russian Federation" />
                        <option value="Rwanda" />
                        <option value="Saint Helena" />
                        <option value="Saint Kitts and Nevis" />
                        <option value="Saint Lucia" />
                        <option value="Saint Pierre and Miquelon" />
                        <option value="Saint Vincent and The Grenadines" />
                        <option value="Samoa" />
                        <option value="San Marino" />
                        <option value="Sao Tome and Principe" />
                        <option value="Saudi Arabia" />
                        <option value="Senegal" />
                        <option value="Serbia and Montenegro" />
                        <option value="Seychelles" />
                        <option value="Sierra Leone" />
                        <option value="Singapore" />
                        <option value="Slovakia" />
                        <option value="Slovenia" />
                        <option value="Solomon Islands" />
                        <option value="Somalia" />
                        <option value="South Africa" />
                        <option value="South Georgia and The South Sandwich Islands" />
                        <option value="Spain" />
                        <option value="Sri Lanka" />
                        <option value="Sudan" />
                        <option value="Suriname" />
                        <option value="Svalbard and Jan Mayen" />
                        <option value="Swaziland" />
                        <option value="Sweden" />
                        <option value="Switzerland" />
                        <option value="Syrian Arab Republic" />
                        <option value="Taiwan, Province of China" />
                        <option value="Tajikistan" />
                        <option value="Tanzania, United Republic of" />
                        <option value="Thailand" />
                        <option value="Timor-leste" />
                        <option value="Togo" />
                        <option value="Tokelau" />
                        <option value="Tonga" />
                        <option value="Trinidad and Tobago" />
                        <option value="Tunisia" />
                        <option value="Turkey" />
                        <option value="Turkmenistan" />
                        <option value="Turks and Caicos Islands" />
                        <option value="Tuvalu" />
                        <option value="Uganda" />
                        <option value="Ukraine" />
                        <option value="United Arab Emirates" />
                        <option value="United Kingdom" />
                        <option value="United States" />
                        <option value="United States Minor Outlying Islands" />
                        <option value="Uruguay" />
                        <option value="Uzbekistan" />
                        <option value="Vanuatu" />
                        <option value="Venezuela" />
                        <option value="Viet Nam" />
                        <option value="Virgin Islands, British" />
                        <option value="Virgin Islands, U.S" />
                        <option value="Wallis and Futuna" />
                        <option value="Western Sahara" />
                        <option value="Yemen" />
                        <option value="Zambia" />
                        <option value="Zimbabwe" />
                    </datalist>
                </div>
                <div class="col-4">
                    <label for="state" class="form-label">State</label>
                    <input type="text" id="state" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-5 col-md-6">
                    <label for="city" class="form-label">City</label>
                    <input type="text" id="city" class="form-control" required>
                </div>
                <div class="col-4">
                    <label for="city" class="form-label">Zip Code</label>
                    <input type="text" id="city" class="form-control" required>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-5 col-xl-4">
        <div class="p-3 border mb-3 rounded shadow-sm">
            <div class="row mb-3">
                <div class="col-sm-5 col-md-4">
                    <label for="price">Price</label>
                    <input type="text" id="price" class="form-control" required>
                </div>

                <div class="col-4">
                    <label for="currency">Currency</label>
                    <select id="currency" name="currency" class="form-control" required>
                        <option value="usd">USD</option>
                        <option value="aud">AUD</option>
                        <option value="php">PHP</option>
                    </select>

                </div>
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">Tags <small class="text-muted">(seperate with spaces)</small></label>
                <textarea type="text" id="tags" class="form-control" required></textarea>
                <span class="text-muted">0/10</span>
            </div>
            <div class="d-flex">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="visible" id="visible" checked>
                    <label class="form-check-label" for="visible">Visible</label>
                </div>
            </div>
        </div>
        <!-- This must be on main site
        <div class="p-3 border mb-3 rounded">
            <h5>Time/Date</h5>
            <div class="row mb-3">
                <div class="col-md-5">
                    <label for="checkin" class="form-label">Checkin</label>
                    <input type="datetime-local" id="checkin" class="form-control" required>
                </div>
                <div class="col-md-5">
                    <label for="checkout" class="form-label">Checkout</label>
                    <input type="datetime-local" id="checkout" class="form-control" required>
                </div>
            </div>
        </div>
-->
    </div>
</div>
<button class="fab btn btn-primary shadow-lg">
<i class="fa-solid fa-plus"></i> &nbsp; Add Property
</button>
@endsection