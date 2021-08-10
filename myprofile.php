
<?php include("header/headerprofile.php"); ?>
<?php
include("global/conexion.php");
$iduser = $_SESSION['usuarioid'];
$sentenciaSQL=$conect->query("SELECT * FROM walkartregister WHERE id='$iduser'");
$registros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="grid-start">
    <div class="profile-information">
        <div class="image-user">
            <div class="theimage" style="background-image:  <?php foreach ($registros as $muestra) { $valuelen = strlen($muestra['img']); 
                $resultadohash = str_replace(" ", "\ ", $muestra['img']);
                $exp_regular = array();
                $exp_regular[1] = "/(\(\d{1})\)/";
                $exp_regular[2] = "/(\(\d{2})\)/";
                $exp_regular[2] = "/(\(\d{3-9})\)/";
                $cadena_nueva = array();
                $cadena_nueva[1] = "\(1\)";
                $cadena_nueva[2] = "\(11\)";
                $cadena_nueva[2] = "\(111\)";
                $replace = preg_replace($exp_regular, $cadena_nueva, $resultadohash); if ($valuelen > 0){ echo "url(" . "img/users-images/" . $replace . ");"; } else { echo "url(img/about-us/img2.jpg);"; } }?>"></div>
        </div>
        <div class="username">
            <label href="" class="item-indrop">Welcome
                <?php foreach ($registros as $muestra) { echo $muestra['username']; }?>
            </label>
        </div>
        <div class="my-information">
            <a onclick="openuserinformation();" class="text-information"><i class="fas fa-user-circle"></i>&nbsp;My
                information</a>
        </div>
        <div class="my-information">
            <a class="text-information"><i class="fas fa-shopping-cart"></i>&nbsp;My shopping</a>
        </div>
        <div class="my-information">
            <a class="text-information"><i class="fas fa-envelope-square"></i>&nbsp;My mailbox</a>
        </div>
        <div class="my-information" style="border-bottom: solid 3px white">
            <a onclick="opennews();" class="text-information"><i class="fas fa-newspaper"></i>&nbsp;News</a>
        </div>
        <div class="sign-out">
            <a class="text-information"><i class="fas fa-sign-out-alt"></i>&nbsp;Sign out</a>
        </div>
    </div>

    <div class="profile-edit">
        <div class="news" id="news">
            <div class="title-news">NEWS</div>
            <div class="subtitle-news">what's new?</div>
            <div class="title-thenews">03/29/2021 / launch of our page</div>
            <div class="content-thenews">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ipsum laborum
                incidunt ut labore ullam velit ipsam. Obcaecati, cumque totam dolores provident, quibusdam accusamus
                voluptatum ad nihil maxime, quidem saepe?</div>
            <div class="img-adjust">
                <div class="img-notice"></div>
            </div>
        </div>

        <div class="information-user" id="information-user">
        <div class="absolute-load" id="loading-ini" style="display: none">
            <div class="preloader"></div>
        </div>
            <div class="before-border-form" style="<?php foreach ($registros as $muestra) { if ($muestra['activate'] == 1) { echo "display: none;"; } else { echo ""; } }?>">
                <div class="border-form">
                    <div class="center-email">
                        <img src="img/header/imgmail.png" class="adjust-emailimg">
                    </div>
                    <div class="bar">
                        <div class="title-input" style="padding: 15px 0px">Your account has not been verified please verify it to validate your identity</div>
                        <div class="large-buttoninput">
                            <a onclick="openverifyemail();" class="buttonto-input" name="username" value="lol" type="text" id="">Check<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <form method="post" id="frmajaxfirst">
                <div class="button-bar">
                    <div class="grid-1">
                        <label class="change-ifclass">Change information</label>
                    </div>
                    <div class="grid-2">
                    <button onclick="succes();" type="submit" id="send-changesbut" disabled="true" name="submit-changes" name="Register" value="Save" class="send-changes-disabled">save</button>
                    </div>
                </div>
                <div class="img-user-register" id="subprofile-image" style="background-image:  <?php foreach ($registros as $muestra) { $valuelen = strlen($muestra['img']); 
                   $resultadohash = str_replace(" ", "\ ", $muestra['img']);
                   $exp_regular = array();
                   $exp_regular[1] = "/(\(\d{1})\)/";
                   $exp_regular[2] = "/(\(\d{2})\)/";
                   $exp_regular[2] = "/(\(\d{3-9})\)/";
                   $cadena_nueva = array();
                   $cadena_nueva[1] = "\(1\)";
                   $cadena_nueva[2] = "\(11\)";
                   $cadena_nueva[2] = "\(111\)";
                   $replace = preg_replace($exp_regular, $cadena_nueva, $resultadohash); if ($valuelen > 0){ echo "url(" . "img/users-images/" . $replace . ");"; } else { echo "url(img/about-us/img2.jpg);"; } }?>">
                    <a onclick="imagechange();" class="a-beforeicon"><i class="fas fa-edit"></i></a>
                </div>

            <div class="before-border-form">
                <div class="border-form">
                <div class="bar">
                    <div class="title-input" style="padding: 15px 0px">User name</div>
                    <div class="large-buttoninput">
                        <a onclick="openusername();" class="buttonto-input" name="username" value="" type="text" id="usernamevalue">
                        <?php foreach ($registros as $muestra) { $valuelen = strlen($muestra['username']); if ($valuelen > 0){ echo $muestra['username']; } else { echo "register a username"; } }?><i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="bar">
                    <div  class="title-input">Email</div>
                    <div class="large-buttoninput">
                        <a onclick="openemail();" class="buttonto-input" name="email" value="" type="text" id="emailvalue">
                        <?php foreach ($registros as $muestra) { $valuelen = strlen($muestra['email']); if ($valuelen > 0){ echo $muestra['email']; } else { echo "register an email"; } }?><i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                
                <div class="bar">
                    <div class="title-input">Your phone</div>
                    <div class="large-buttoninput">
                        <a onclick="openphone();" class="buttonto-input" name="username" type="text" value="" id="phonevalue">
                       <?php foreach ($registros as $muestra) { if ($muestra['phone'] > 0) { echo $muestra['phone']; } else { echo "register a phone"; } }?><i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                <div class="bar">
                    <div class="title-input">Your Age</div>
                    <input id="agecamp" min="1" max="99" onchange="changeFunc();" class="inputs-request" name="age" type="number"
                        value="<?php foreach ($registros as $muestra) { echo $muestra['age']; }?>">
                </div>
                <div class="">
                <label class="font-alert" id="simple-alertfirst" style="display: none">Por favor ingrese un valor</label>
                </div>
                <div class="">
                <label class="font-alert" id="simple-alertfirst2" style="display: none">ingrese un numero valido</label>
                </div>
                <div class="bar">
                    <fieldset id="select-language">
                        <div class="title-input">Your Country</div>
                        <label for="language-selector" class="visually-hidden">Select your country</label>
                        <select onchange="changeFunc();" id="language-selector"  name="select-country" class="inputs-request">
                            <option  id="aselector" name="item-selector" selected="selected" value="<?php foreach ($registros as $muestra) { echo $muestra['country']; }?>"><?php foreach ($registros as $muestra) { echo $muestra['country']; }?></option>
                            <option class="clicked-option" value="Afganistan">Afghanistan</option>
                            <option class="clicked-option" value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
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
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote DIvoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
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
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="India">India</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
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
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                </div>
                <div class="bar">
                    <div class="title-input">Postal Code</div>
                    <input id="postalcamp" onchange="changeFunc();" class="inputs-request" name="postalcode" type="number"
                        value="<?php foreach ($registros as $muestra) { $valuelen = strlen($muestra['postalCode']); if ($valuelen > 0) { echo $muestra['postalCode']; } else { echo ""; } }?>">
                </div>
                <div class="">
                <label class="font-alert" id="simple-alertfirst3" style="display: none">ingrese un codigo valido</label>
                </div>
                <div class="bar">
                    <div class="title-input">Addres</div>
                    <input id="addrescamp" onchange="changeFunc();" class="inputs-request" name="addres" type="text"
                        value="<?php foreach ($registros as $muestra) { echo $muestra['addres']; }?>">
                </div>
                <div class="">
                <label class="font-alert" id="simple-alertfirst4" style="display: none">ingrese un valor valido</label>
                </div>
                </div>
            </div>
                <div class="bar">
                    <div class="title-input">Your information will help us to get to know you better and to be able to
                        send you the products faster.</div>
                </div>
                
            </form>
        </div>
    <div class="information-user" id="openusername" style="display: none; min-height: 670px">
    <div class="absolute-load" id="loading-user" style="display: none">
            <div class="preloader"></div>
    </div>
        <form method="post" id="frmajax">
        <div class="before-border-form" style="height: 100%">
            <div class="border-form">
                <div class="bar">
                    <div class="title-input">enter a new username</div>
                    <input id="usernamecamp" onclick="succes();" onchange="changeFunc2();" class="inputs-request" name="editusername" type="text"
                        value="<?php foreach ($registros as $muestra) { echo $muestra['username']; }?>"  >
                    
                </div>
                <div class="">
                    <label class="font-alert" id="simple-alert" style="display: none">ingrese un nombre valido</label>
                </div>
                <div class="">
                    <label class="font-alert" id="simple-alert2" style="display: none">Por favor escoja otro nombre de usuario</label>
                </div>
                    <div class="grid-2" style="padding: 20px">
                        <button onclick="loaduser();" id="send-changesbut2" disabled="true" name="submit-username" name="Register" value="Save" class="send-changes-disabled">Send</button>
                    </div>
                </div>
                
        </div>
            
        </form>

    </div>

    <div class="information-user" id="openemail" style="display: none; min-height: 670px">
    <div class="absolute-load" id="loading-email" style="display: none">
            <div class="preloader"></div>
    </div>
        <form method="post" id="frmajax2">
        <div class="before-border-form" style="height: 100%">
            <div class="border-form">
                <div class="bar">
                    <div class="title-input" style="padding: 15px 0px">enter a new email</div>
                    <input  id="emailcamp" onclick="succes();" onchange="changeFunc3();" class="inputs-request" name="editemail" type="text"
                        value="<?php foreach ($registros as $muestra) { echo $muestra['email']; }?>" >
                    
                </div>
                <div class="">
                    <label class="font-alert" id="simple-alert3" style="display: none">El email ya a sido registrado</label>
                </div>
                <div class="">
                    <label class="font-alert" id="simple-alert4" style="display: none">El email que a ingresado no es valido</label>
                </div>

                    <div class="grid-2" style="padding: 20px">
                        <button type="submit" id="send-changesbut3" disabled="true" name="submit-email" name="Register" value="Save" class="send-changes-disabled">Send</button>
                    </div>
                </div>
                
        </div>
            
        </form>

    </div>

    <div class="information-user" id="paswordconfirmation" style="display: none; min-height: 670px">
        <div class="absolute-load" id="loading-pasword" style="display: none">
            <div class="preloader"></div>
        </div>
        <form method="post" id="confirmpasword">
        <div class="before-border-form" style="height: 100%">
        <div class="border-form">
            <div class="bar">
                <div class="title-input" style="padding: 15px 0px">to continue confirm your password</div>
                <input  id="paswordcamp" onclick="succes();" onchange="changeFunc3();" class="inputs-request" name="paswordsend" type="password">
            </div>
            <div class="">
                <label class="font-alert" id="simple-alert5" style="display: none">la contraseña es incorrecta</label>
            </div>
                <div class="grid-2" style="padding: 20px">
                    <button type="submit" id="paswordconfirm" name="submit-email" name="Register" value="Save" class="send-changes">Send</button>
                </div>
            </div>
            
        </div>
        
        </form>

    </div>
    
    <div class="information-user" id="openphone" style="display: none; min-height: 670px">
        <div class="absolute-load" id="loading-phone" style="display: none">
            <div class="preloader"></div>
        </div>
        <form method="post" id="frmajaxphone">
        <div class="before-border-form" style="height: 100%">
            <div class="border-form">
                <div class="bar">
                    <div class="title-input" style="padding: 15px 0px">enter a new phone</div>
                <div class="grid-phone">
                    <select onchange="changephone();" id="phone-selector"  name="" class="inputs-request-selectphone">
                            <option value="+1">United States of America (+1)</option>
                            <option value="+93">Afghanistan (+93)</option>
                            <option value="+355">Albania (+355)</option>
                            <option value="+213">Algeria (+213)</option>
                            <option value="+1">American Samoa (+1)</option>
                            <option value="+376">Andorra (+376)</option>
                            <option value="+244">Angola (+244)</option>
                            <option value="+1">Anguilla (+1)</option>
                            <option value="+1">Antigua & Barbuda (+1)</option>
                            <option value="+54">Argentina (+54)</option>
                            <option value="+374">Armenia (+374)</option>
                            <option value="+297">Aruba (+297)</option>
                            <option value="+61">Australia (+61)</option>
                            <option value="+43">Austria (+43)</option>
                            <option value="+994">Azerbaijan (+994)</option>
                            <option value="+1">Bahamas (+1)</option>
                            <option value="+973">Bahrain (+973)</option>
                            <option value="+880">Bangladesh (+880)</option>
                            <option value="+1">Barbados (+1)</option>
                            <option value="+375">Belarus (+375)</option>
                            <option value="+32">Belgium (+32)</option>
                            <option value="+501">Belize (+501)</option>
                            <option value="+229">Benin (+229)</option>
                            <option value="+1">Bermuda (+1)</option>
                            <option value="+975">Bhutan (+975)</option>
                            <option value="+591">Bolivia (+591)</option>
                            <option value="+599">Bonaire (+599)</option>
                            <option value="+387">Bosnia & Herzegovina (+387)</option>
                            <option value="+267">Botswana (+267)</option>
                            <option value="+55">Brazil (+55)</option>
                            <option value="+246">British Indian Ocean Ter (+246)</option>
                            <option value="+673">Brunei (+673)</option>
                            <option value="+359">Bulgaria (+359)</option>
                            <option value="+226">Burkina Faso (+226)</option>
                            <option value="+257">Burundi (+257)</option>
                            <option value="+855">Cambodia (+855)</option>
                            <option value="+237">Cameroon (+237)</option>
                            <option value="+1">Canada (+1)</option>
                            <option value="+34 ">Canary Islands (+34)</option>
                            <option value="+238">Cape Verde (+238)</option>
                            <option value="+1">Cayman Islands (+1)</option>
                            <option value="+236">Central African Republic (+236)</option>
                            <option value="+235">Chad (+235)</option>
                            <option value="+1">Channel Islands (+1)</option>
                            <option value="+56">Chile (+56)</option>
                            <option value="+86">China (+86)</option>
                            <option value="+61">Christmas Island (+61)</option>
                            <option value="+61">Cocos Island (+61)</option>
                            <option value="+57">Colombia (+57)</option>
                            <option value="+269">Comoros (+269)</option>
                            <option value="+242">Congo (+242)</option>
                            <option value="+682">Cook Islands (+682)</option>
                            <option value="+506">Costa Rica (+506)</option>
                            <option value="+225">Cote DIvoire (+225)</option>
                            <option value="+385">Croatia (+385)</option>
                            <option value="+53">Cuba (+53)</option>
                            <option value="+599">Curacao (+599)</option>
                            <option value="+357">Cyprus (+357)</option>
                            <option value="+420">Czech Republic (+420)</option>
                            <option value="+45">Denmark (+45)</option>
                            <option value="+253">Djibouti (+253)</option>
                            <option value="+1">Dominica (+1)</option>
                            <option value="+1">Dominican Republic (+1)</option>
                            <option value="+670">East Timor (+670)</option>
                            <option value="+593">Ecuador (+593)</option>
                            <option value="+20">Egypt (+20)</option>
                            <option value="+503">El Salvador (+503)</option>
                            <option value="+240">Equatorial Guinea (+240)</option>
                            <option value="+291">Eritrea (+291)</option>
                            <option value="+372">Estonia (+372)</option>
                            <option value="+251">Ethiopia (+251)</option>
                            <option value="+500">Falkland Islands (+500)</option>
                            <option value="+298">Faroe Islands (+298)</option>
                            <option value="+679">Fiyi (+679)</option>
                            <option value="+358">Finland (+358)</option>
                            <option value="+33">France (+33)</option>
                            <option value="+594">French Guiana (+594)</option>
                            <option value="+689">French Polynesia (+689)</option>
                            <option value="+33">French Southern Ter (+33)</option>
                            <option value="+241">Gabon (+241)</option>
                            <option value="+220">Gambia (+220)</option>
                            <option value="+995">Georgia (+995)</option>
                            <option value="+49">Germany (+49)</option>
                            <option value="+233">Ghana (+233)</option>
                            <option value="+350">Gibraltar (+350)</option>
                            <option value="+44">Great Britain (+44)</option>
                            <option value="+30">Greece (+30)</option>
                            <option value="+299">Greenland (+299)</option>
                            <option value="+1">Grenada (+1)</option>
                            <option value="+590">Guadeloupe (+590)</option>
                            <option value="+1">Guam (+1)</option>
                            <option value="+502">Guatemala (+502)</option>
                            <option value="+224">Guinea (+224)</option>
                            <option value="+592">Guyana (+592)</option>
                            <option value="+509">Haiti (+509)</option>
                            <option value="+808">Hawaii (+808)</option>
                            <option value="+504">Honduras (+504)</option>
                            <option value="+852">Hong Kong (+852)</option>
                            <option value="+36">Hungary (+36)</option>
                            <option value="+354">Iceland (+354)</option>
                            <option value="+62">Indonesia (+62)</option>
                            <option value="+91">India (+91)</option>
                            <option value="+98">Iran (+98)</option>
                            <option value="+964">Iraq (+964)</option>
                            <option value="+353">Ireland (+353)</option>
                            <option value="+44">Isle of Man (+44)</option>
                            <option value="+972">Israel (+972)</option>
                            <option value="+39">Italy (+39)</option>
                            <option value="+1">Jamaica (+1)</option>
                            <option value="+81">Japan (+81)</option>
                            <option value="+962">Jordan (+962)</option>
                            <option value="+7">Kazakhstan (+7)</option>
                            <option value="+254">Kenya (+254)</option>
                            <option value="+686">Kiribati (+686)</option>
                            <option value="+850">Korea North (+850)</option>
                            <option value="+82">Korea South (+82)</option>
                            <option value="+965">Kuwait (+965)</option>
                            <option value="+996">Kyrgyzstan (+996)</option>
                            <option value="+856">Laos (+856)</option>
                            <option value="+371">Latvia (+371)</option>
                            <option value="+961">Lebanon (+961)</option>
                            <option value="+266">Lesotho (+266)</option>
                            <option value="+231">Liberia (+231)</option>
                            <option value="+218">Libya (+218)</option>
                            <option value="+423">Liechtenstein (+423)</option>
                            <option value="+370">Lithuania (+370)</option>
                            <option value="+352">Luxembourg (+352)</option>
                            <option value="+853">Macau (+853)</option>
                            <option value="+389">Macedonia (+389)</option>
                            <option value="+261">Madagascar (+261)</option>
                            <option value="+60">Malaysia (+60)</option>
                            <option value="+265">Malawi (+265)</option>
                            <option value="+960">Maldives (+960)</option>
                            <option value="+223">Mali (+223)</option>
                            <option value="+356">Malta (+356)</option>
                            <option value="+692">Marshall Islands (+692)</option>
                            <option value="+596">Martinique (+596)</option>
                            <option value="+222">Mauritania (+222)</option>
                            <option value="+230">Mauritius (+230)</option>
                            <option value="+262">Mayotte (+262)</option>
                            <option value="+52">Mexico (+52)</option>
                            <option value="+808">Midway Islands (+808)</option>
                            <option value="+373">Moldova (+373)</option>
                            <option value="+377">Monaco (+377)</option>
                            <option value="+976">Mongolia (+976)</option>
                            <option value="+1">Montserrat (+1)</option>
                            <option value="+212">Morocco (+212)</option>
                            <option value="+258">Mozambique (+258)</option>
                            <option value="+95">Myanmar (+95)</option>
                            <option value="+264">Nambia (+264)</option>
                            <option value="+674">Nauru (+674)</option>
                            <option value="+977">Nepal (+977)</option>
                            <option value="+599">Netherland Antilles (+599)</option>
                            <option value="+31">Netherlands (Holland, Europe) (+31)</option>
                            <option value="+1">Nevis (+1)</option>
                            <option value="+687">New Caledonia (+687)</option>
                            <option value="+64">New Zealand (+64)</option>
                            <option value="+505">Nicaragua (+505)</option>
                            <option value="+227">Niger (+227)</option>
                            <option value="+234">Nigeria (+234)</option>
                            <option value="+683">Niue (+683)</option>
                            <option value="+672">Norfolk Island (+672)</option>
                            <option value="+47">Norway (+47)</option>
                            <option value="+968">Oman (+968)</option>
                            <option value="+92">Pakistan (+92)</option>
                            <option value="+680">Palau Island (+680)</option>
                            <option value="+970">Palestin (+970)e</option>
                            <option value="+507">Panama (+507)</option>
                            <option value="+675">Papua New Guinea (+675)</option>
                            <option value="+595">Paraguay (+595)</option>
                            <option value="+51">Peru (+51)</option>
                            <option value="+63">Philippines (+63)</option>
                            <option value="+64">Pitcairn Island (+64)</option>
                            <option value="+48">Poland (+48)</option>
                            <option value="+351">Portugal (+351)</option>
                            <option value="+1">Puerto Rico (+1)</option>
                            <option value="+974">Qatar (+974)</option>
                            <option value="+382">Republic of Montenegro (+382)</option>
                            <option value="+381">Republic of Serbia (+381)</option>
                            <option value="+262">Reunion (+262)</option>
                            <option value="+40">Romania (+40)</option>
                            <option value="+7">Russia (+7)</option>
                            <option value="+250">Rwanda (+250)</option>
                            <option value="+590">St Barthelemy (+590)</option>
                            <option value="+5993">St Eustatius (+5993)</option>
                            <option value="+290">St Helena (+290)</option>
                            <option value="+1">St Kitts-Nevis (+1)</option>
                            <option value="+1">St Lucia (+1)</option>
                            <option value="+599">St Maarten (+599)</option>
                            <option value="+508">St Pierre & Miquelon (+508)</option>
                            <option value="+1">St Vincent & Grenadines (+1)</option>
                            <option value="+670">Saipan (+670)</option>
                            <option value="+685">Samoa (+685)</option>
                            <option value="+1">Samoa American (+1)</option>
                            <option value="+378">San Marino (+378)</option>
                            <option value="+239">Sao Tome & Principe (+239)</option>
                            <option value="+966">Saudi Arabia (+966)</option>
                            <option value="+221">Senegal (+221)</option>
                            <option value="+248">Seychelles (+248)</option>
                            <option value="+232">Sierra Leone (+232)</option>
                            <option value="+65">Singapore (+65)</option>
                            <option value="+421">Slovakia (+421)</option>
                            <option value="+386">Slovenia (+386)</option>
                            <option value="+677">Solomon Islands (+677)</option>
                            <option value="+252">Somalia (+252)</option>
                            <option value="+27">South Africa (+27)</option>
                            <option value="+34">Spain (+34)</option>
                            <option value="+94">Sri Lanka (+94)</option>
                            <option value="+249">Sudan (+249)</option>
                            <option value="+597">Suriname (+597)</option>
                            <option value="+268">Swaziland (+268)</option>
                            <option value="+46">Sweden (+46)</option>
                            <option value="+41">Switzerland (+41)</option>
                            <option value="+963">Syria (+963)</option>
                            <option value="+689">Tahiti (+689)</option>
                            <option value="+886">Taiwan (+886)</option>
                            <option value="+992">Tajikistan (+992)</option>
                            <option value="+255">Tanzania (+255)</option>
                            <option value="+66">Thailand (+66)</option>
                            <option value="+228">Togo (+228)</option>
                            <option value="+690">Tokelau (+690)</option>
                            <option value="+676">Tonga (+676)</option>
                            <option value="+868">Trinidad & Tobago (+868)</option>
                            <option value="+216">Tunisia (+216)</option>
                            <option value="+90">Turkey (+90)</option>
                            <option value="+993">Turkmenistan (+993)</option>
                            <option value="+1-649">Turks & Caicos Is (+1-649)</option>
                            <option value="+688">Tuvalu (+688)</option>
                            <option value="+256">Uganda (+256)</option>
                            <option value="+44">United Kingdom (+44)</option>
                            <option value="+380">Ukraine (+380)</option>
                            <option value="+971">United Arab Emirates (+971)</option>
                            <option value="+598">Uruguay (+598)</option>
                            <option value="+998">Uzbekistan (+998)</option>
                            <option value="+678">Vanuatu (+678)</option>
                            <option value="+379">Vatican City State (+379)</option>
                            <option value="+58">Venezuela (+58)</option>
                            <option value="+84">Vietnam (+84)</option>
                            <option value="+1">Virgin Islands (Brit) (+1)</option>
                            <option value="+1">Virgin Islands (USA) (+1)</option>
                            <option value="+808">Wake Island (+808)</option>
                            <option value="+681">Wallis & Futana Is (+681)</option>
                            <option value="+967">Yemen (+967)</option>
                            <option value="+243">Zaire (+243)</option>
                            <option value="+260">Zambia (+260)</option>
                            <option value="+263">Zimbabwe (+263)</option>
                    </select>
            
                    <input onchange="changephone2();"  id="phonecamp" class="inputs-request-phone2" name="editphone" type="text" value="<?php foreach ($registros as $muestra) { if ($muestra['phone'] > 0) { echo $muestra['phone']; } else { echo "+1"; } }?>">    
                </div>
                </div>
                <div class="">
                    <label class="font-alert" id="simple-phonealert" style="display: none">Ingrese un numero de telefono valido</label>
                </div>
                    <div class="grid-2" style="padding: 20px">
                        <button id="send-changesbutphone" disabled="true" class="send-changes-disabled">Send</button>
                    </div>
                </div>
                
        </div>
        <div class="alertconfirmation" id="codeconfirmation" style="display: none">
            <div class="box-alert-phone">
                <div class="text-phone">
                    <label for="">enter the number sent by text message to the phone:</label>
                </div>
                <div class="text-phone" id="phone-number">

                </div>
            <div class="text-phone">
                <input onchange="changetextsend();" id="confirmationphone" class="inputs-request-phone2" name="textconfirmation" type="text">
            </div>
            <label class="font-alert" id="simple-phonealert2" style="display: none">El numero enviado no es el correcto</label>
            <div class="icon-close text-phone">
                <button id="send-thephone" disabled="true" class="send-changes-disabled">Send</button>
            </div>
            </div>      
        </div>
        </form>
    </div>

    <div class="information-user" id="emailverify" style="display: none; min-height: 670px">
        <div class="absolute-load" id="loading" style="display: none">
            <div class="preloader"></div>
        </div>
        <form method="post" id="verifyemail">
        
        <div class="before-border-form">
                <div class="border-form">
                    <div class="center-email">
                        <img src="img/header/imemail.png" class="adjust-emailimg">
                    </div>
                    <div class="bar">
                    <div class="title-input" style="padding: 15px 0px">We will send the url to this email, if this is not your email please carry out the due process of change</div>
                        <input  id="emailcampverify" class="inputs-request" name="editemail" type="text"
                        value="<?php foreach ($registros as $muestra) { echo $muestra['email']; }?>" readonly="readonly">
                    </div>
                    <div class="grid-2" style="padding: 20px">
                        <button onclick="load();" id="send-changesvalid" class="send-changes">Send</button>
                    </div>
                </div>
        </div>

        
        </form>

    </div>

    <div class="information-user" id="emailverify-check-send" style="display: none; min-height: 670px">

        <div class="before-border-form">
                <div class="border-form">
                    <div class="center-email">
                        <img src="img/header/check.png" class="adjust-emailimg">
                    </div>
                    <div class="bar">
                        <div class="title-input" style="padding: 15px 0px; text-align: center">the message has been sent correctly, please check your email</div>
                        <div class="grid-2" style="padding: 20px; text-align: center">
                            <button onclick="redirectemail();" id="send-changesvalid" class="send-changes">Check</button>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    </div>
    
</div>

    <div class="alertconfirmation" id="img-url-change" style="display: none">
        <form action="" id="img-form" enctype="multipart/form-data" class="style-form">
            <div class="grid-andimg">
                <div class="image-profile" id="example-image" style="background-image:  <?php foreach ($registros as $muestra) { $valuelen = strlen($muestra['img']); 
                    $resultadohash = str_replace(" ", "\ ", $muestra['img']);
                    $exp_regular = array();
                    $exp_regular[1] = "/(\(\d{1})\)/";
                    $exp_regular[2] = "/(\(\d{2})\)/";
                    $exp_regular[2] = "/(\(\d{3-9})\)/";
                    $cadena_nueva = array();
                    $cadena_nueva[1] = "\(1\)";
                    $cadena_nueva[2] = "\(11\)";
                    $cadena_nueva[2] = "\(111\)";
                    $replace = preg_replace($exp_regular, $cadena_nueva, $resultadohash);; if ($valuelen > 0){ echo "url(" . "img/users-images/" . $replace . ");"; } else { echo "url(img/about-us/img2.jpg);"; } }?>;">
                </div>
                <div class="text-input">
                    <div class="icon-close">
                        <a onclick="closemodalimg();"><i class="fas fa-times-circle"></i></a>
                    </div>
                    <div class="box-alert-phone">
                        <div class="text-phone">
                            <label for="">upload a new profile picture:</label>
                        </div>
                        <div class="text-phone" id="phone-number">

                        </div>
                    </div>
                    <div class="text-phone">
                        <input onchange="changesendimage();" value="<?php foreach ($registros as $muestra) { $valuelen = strlen($muestra['img']); if ($valuelen > 0){ echo "url(" . $muestra['img'] . ");"; } else { echo "url(img/about-us/img2.jpg);"; } }?>" class="inputs-request-phone2" id="imagesend" name="imagesend" type="file">
                    </div>
                    <label class="font-alert" id="simple-phonealert2" style="display: none">El numero enviado no es el correcto</label>
                </div>
            </div>
            <div class="icon-close text-phone-2">
                <button id="send-imgdata" disabled="true" class="send-changes-disabled">Send</button>
            </div>  
        </form>   
    </div>
    
<div class="alert" id="alert" style="display: none">
    <div class="box-alert">
        <div class="text">
            <label for="">changes have been saved</label>
        </div>
        <div class="icon-close">
            <a onclick="closemodal();"><i class="fas fa-times-circle"></i></a>
        </div>
    </div>      
</div>

</body>

<script type="text/javascript">

	$(document).ready(function(){
		$('#send-changesbut').click(function(){
			var datos=$('#frmajaxfirst').serialize();
			$.ajax({
				type:"POST",
				url:"phpprofile/editprofile.php",
				data:datos,
				success:function(alldata){
                    if(alldata == 1){
                        document.getElementById("agecamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alertfirst").style.display = "block";
                        return false;
                    } else if(alldata == 2){
                        document.getElementById("agecamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alertfirst2").style.display = "block";
                        return false;
                    } else if(alldata == 3){
                        document.getElementById("postalcamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alertfirst3").style.display = "block";
                        return false;
                    } else if(alldata == 4){
                        document.getElementById("addrescamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alertfirst4").style.display = "block";
                        return false;
                    } else {
                        document.getElementById("send-changesbut").disabled=true;
                        document.getElementById("alert").style.display = "block";
                        document.getElementById("agecamp").style.border = "solid 1.5px rgba(97, 97, 97, 0.836)";
                        document.getElementById("postalcamp").style.border = "solid 1.5px rgba(97, 97, 97, 0.836)";
                        document.getElementById("addrescamp").style.border = "solid 1.5px rgba(97, 97, 97, 0.836)";
                        document.getElementById("simple-alertfirst").style.display = "none";
                        document.getElementById("simple-alertfirst2").style.display = "none";
                        document.getElementById("simple-alertfirst3").style.display = "none";
                        document.getElementById("simple-alertfirst4").style.display = "none";
                        document.getElementById('send-changesbut').disabled=true;
                        $('#send-changesbut').addClass('send-changes-disabled');
                        $('#send-changesbut').removeClass('send-changes');
                        
                    } 
					
				},
                error:function(){
                    alert("hay un error");
                }
			});
			return false;
		});
        return false;
	});
</script>
<script type="text/javascript">

	$(document).ready(function(){
		$('#send-changesbut2').click(function(){
            
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"phpprofile/usernameprofile.php",
				data:datos,
				success:function(alldata){
                    if(alldata == 1){
                        document.getElementById("usernamecamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alert2").style.display = "block";
                        document.getElementById("simple-alert").style.display = "none";
                        return false;
                    } if(alldata == 2){
                        document.getElementById("usernamecamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alert").style.display = "block";
                        return false;
                    } if(alldata == 3){
                        document.getElementById("usernamecamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alert").style.display = "block";
                        return false;
                    } else {
                        document.getElementById("send-changesbut2").disabled=true;
                        document.getElementById("usernamecamp").style.border = "solid 1.5px green";
                        document.getElementById("alert").style.display = "block";
                        document.getElementById("simple-alert2").style.display = "none";
                        document.getElementById("simple-alert").style.display = "none";
                        document.getElementById('send-changesbut2').disabled=true;
                        $('#send-changesbut2').addClass('send-changes-disabled');
                        $('#send-changesbut2').removeClass('send-changes');
                        setTimeout(function(){ 
                        document.getElementById("usernamecamp").style.border = "solid 1.5px rgba(97, 97, 97, 0.836)";
                        document.getElementById("openusername").style.display = "none";
                        document.getElementById("information-user").style.display = "block";phonecamp
                        document.getElementById('usernamevalue').innerHTML=alldata+'<i class="fas fa-chevron-right"></i>';
                    }, 1000);
                    } 
					
				},
                error:function(){
                    alert("hay un error");
                }
			});
			return false;
		});
        return false;
	});
</script>
<script type="text/javascript">

	$(document).ready(function(){
		$('#paswordconfirm').click(function(){
			var datos=$('#confirmpasword').serialize();
            document.getElementById("loading-pasword").style.display = "flex";
			$.ajax({
				type:"POST",
				url:"phpprofile/confirmpasword.php",
				data:datos,
				success:function(alldata){
                    if(alldata == 1){
                        document.getElementById("paswordcamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alert5").style.display = "block";
                        document.getElementById("loading-pasword").style.display = "none";
                        return false;
                    }  else if (document.getElementById("usernamevalue").value == "1"){
                        document.getElementById("loading-pasword").style.display = "none";
                        document.getElementById("paswordcamp").style.border = "solid 1.5px green";
                        document.getElementById("simple-alert5").style.display = "none";
                        setTimeout(function(){ 
                        document.getElementById("paswordcamp").style.border = "solid 1.5px rgba(97, 97, 97, 0.836)";
                        document.getElementById("paswordconfirmation").style.display = "none";
                        document.getElementById("openusername").style.display = "block";
                        
                    }, 1000);
                    } else if (document.getElementById("emailvalue").value == "1") {
                        document.getElementById("loading-pasword").style.display = "none";
                        document.getElementById("paswordconfirm").disabled=true;
                        document.getElementById("paswordcamp").style.border = "solid 1.5px green";
                        document.getElementById("simple-alert5").style.display = "none";
                        setTimeout(function(){ 
                        document.getElementById("paswordcamp").style.border = "solid 1.5px rgba(97, 97, 97, 0.836)";
                        document.getElementById("paswordconfirmation").style.display = "none";
                        document.getElementById("openemail").style.display = "block";
                        
                    }, 1000);
                    } else if (document.getElementById("phonevalue").value == "1") {
                        document.getElementById("loading-pasword").style.display = "none";
                        document.getElementById("paswordconfirm").disabled=true;
                        document.getElementById("paswordcamp").style.border = "solid 1.5px green";
                        document.getElementById("simple-alert5").style.display = "none";
                        setTimeout(function(){ 
                        document.getElementById("paswordcamp").style.border = "solid 1.5px rgba(97, 97, 97, 0.836)";
                        document.getElementById("paswordconfirmation").style.display = "none";
                        document.getElementById("openphone").style.display = "block";
                        
                    }, 1000);
                        
                    } 
					
				},
                error:function(){
                    alert("hay un error");
                }
			});
			return false;
		});
        return false;
	});
    
</script>
<script type="text/javascript">

	$(document).ready(function(){
		$('#send-changesbut3').click(function(){
			var datos=$('#frmajax2').serialize();
			$.ajax({
				type:"POST",
				url:"phpprofile/emailprofile.php",
				data:datos,
				success:function(alldata){
                    if(alldata == 1){
                        document.getElementById("emailcamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alert3").style.display = "block";
                        document.getElementById("simple-alert4").style.display = "none";
                        return false;
                    } if(alldata == 2){
                        document.getElementById("emailcamp").style.border = "solid 1.5px red";
                        document.getElementById("simple-alert4").style.display = "block";
                        document.getElementById("simple-alert3").style.display = "none";
                        return false;
                    } else {
                        document.getElementById("send-changesbut3").disabled=true;
                        document.getElementById("emailcamp").style.border = "solid 1.5px green";
                        document.getElementById("alert").style.display = "block";
                        document.getElementById("simple-alert3").style.display = "none";
                        document.getElementById("simple-alert4").style.display = "none";
                        document.getElementById('send-changesbut3').disabled=true;
                        $('#send-changesbut3').addClass('send-changes-disabled');
                        $('#send-changesbut3').removeClass('send-changes');
                        setTimeout(function(){ 
                        document.getElementById("emailcamp").style.border = "solid 1.5px rgba(97, 97, 97, 0.836)";
                    }, 500);
                    setTimeout(function(){ 
                        location.href="loginform.php";
                    }, 1000);
                    
                    } 
					
				},
                error:function(){
                    alert("hay un error");
                }
			});
			return false;
		});
        return false;
	});
</script>
<script type="text/javascript">

	$(document).ready(function(){
		$('#send-changesbutphone').click(function(){
            document.getElementById("loading-phone").style.display = "flex";
			var datos=$('#frmajaxphone').serialize();
			$.ajax({
				type:"POST",
				url:"phpprofile/sendsms.php",
				data:datos,
				success:function(alldata){
                    var valoresAceptados = /^[0-9]+$/;
                    if(alldata.match(valoresAceptados)){
                        document.getElementById("send-changesbutphone").disabled=true;
                        document.getElementById("codeconfirmation").style.display = "flex";
                        document.getElementById("loading-phone").style.display = "none";
                        $('#send-changesbutphone').addClass('send-changes-disabled');
                        $('#send-changesbutphone').removeClass('send-changes');
                            $('#send-thephone').click(function(){
                                var datos2=document.getElementById("confirmationphone").value;
                                var alldata2=$('#frmajaxphone').serialize();
                                if(alldata == datos2){
                                    $.ajax({
				                        type:"POST",
				                        url:"phpprofile/sendphone.php",
				                        data:alldata2,
				                        success:function(alldata2){
                                            if(alldata2 == 1){
                                            document.getElementById("alert").style.display = "block";
                                            document.getElementById("openphone").style.display = "none";
                                            document.getElementById("information-user").style.display = "block";
                                            document.getElementById("codeconfirmation").style.display = "none";
                                            document.getElementById('phonevalue').innerHTML=document.getElementById("phonecamp").value;+'<i class="fas fa-chevron-right"></i>';
                                            }
                                            else{
                                                alert("ocurrio un error");
                                                return(false);
                                            }
                                            
                                        },
                                        error:function(){
                                            alert("hay un error");
                                        }
                                    });
                                    return(false);    
                                } else {
                                    document.getElementById("simple-phonealert2").style.display = "block";
                                    document.getElementById("loading-phone").style.display = "none";
                                    return(false);  
                                }
                                
                            });
                            return(false);
                    } else {
                        document.getElementById("simple-phonealert").style.display = "block";
                        document.getElementById("loading-phone").style.display = "none";
                        }
				},
                
                error:function(){
                    alert("hay un error");
                }
			});
			return(false);
		});
        return(false);
	});
</script>
<script type="text/javascript">

	$(document).ready(function(){
		$('#send-changesvalid').click(function(){
			var datos=$('#verifyemail').serialize();
            document.getElementById("send-changesvalid").disabled=true;
            $('#send-changesvalid').addClass('send-changes-disabled');
			$.ajax({
				type:"POST",
				url:"phpprofile/verifyemail.php",
				data:datos,
				success:function(alldata){
                        document.getElementById("emailverify-check-send").style.display = "block";
                        document.getElementById("emailverify").style.display = "none";
                        return(false);          
				},
                error:function(){
                    alert("hay un error");
                }
			});
			return false;
		});
        return false;
	});
</script>
<script type="text/javascript">

	$(document).ready(function(){
		$('#send-imgdata').click(function(){
            var formData = new FormData();
            var files = $('#imagesend')[0].files[0];
            formData.append('file',files);
			$.ajax({
				type:"POST",
				url:"phpprofile/imagechange.php",
				data:formData,
                contentType: false,
                processData: false,
				success:function(alldata){
                    alert(alldata);
                        document.getElementById("alert").style.display = "block";
                        document.getElementById("img-url-change").style.display = "none";    
                        let image1 = document.getElementById('subprofile-image');
                        image1.style.backgroundImage  = "url('"+alldatat+"')";
                        
				},
                error:function(){
                    alert("hay un error");
                }
			});
			return false;
		});
        return false;
	});
</script>
<!-- IMPORTANTE -->
<script>
if (window.history.replaceState) { 
    window.history.replaceState(null, null, window.location.href);
    }
</script>
<!-- IMPORTANTE -->

<script>
    function opennews() {
        document.getElementById("news").style.display = "block";
        document.getElementById("information-user").style.display = "none";
        document.getElementById("openusername").style.display = "none";
    }
    function openuserinformation() {
        location.href="myprofile.php";
    }
    function closemodal() {
        document.getElementById("alert").style.display = "none";
        
    }
   
    function openusername(){
        document.getElementById("usernamevalue").value = "1"; 
        document.getElementById("information-user").style.display = "none";
        document.getElementById("paswordconfirmation").style.display = "block";
        
    }
    function openemail(){
        document.getElementById("emailvalue").value = "1"; 
        document.getElementById("information-user").style.display = "none";
        document.getElementById("paswordconfirmation").style.display = "block";
        
    }
    function openphone(){
        document.getElementById("phonevalue").value = "1";
        document.getElementById("information-user").style.display = "none";
        document.getElementById("paswordconfirmation").style.display = "block";
        
    }
    function changeFunc(){
        document.getElementById('send-changesbut').disabled=false;
        $('#send-changesbut').addClass('send-changes');
        $('#send-changesbut').removeClass('send-changes-disabled');
        
    } 
    function changeFunc2(){
        document.getElementById('send-changesbut2').disabled=false;
        $('#send-changesbut2').addClass('send-changes');
        $('#send-changesbut2').removeClass('send-changes-disabled');
        
    } 
    function changeFunc3(){
        document.getElementById('send-changesbut3').disabled=false;
        $('#send-changesbut3').addClass('send-changes');
        $('#send-changesbut3').removeClass('send-changes-disabled');
        
    } 
    function openverifyemail(){
        document.getElementById("information-user").style.display = "none";
        document.getElementById("emailverify").style.display = "block";
        
    } 
    function load(){
        document.getElementById("loading").style.display = "flex";
    } 
    function succes(){
        document.getElementById("loading-ini").style.display = "flex";
        setTimeout(function(){ 
            document.getElementById("loading-ini").style.display = "none";
        }, 800);
    } 
    function loaduser(){
        document.getElementById("loading-user").style.display = "flex";
        setTimeout(function(){ 
            document.getElementById("loading-user").style.display = "none";
        }, 800);
    } 
    function redirectemail(){
        location.href="https://mail.google.com/mail/u/0/?tab=wm#inbox";
    } 
    function imagechange(){
        document.getElementById("img-url-change").style.display = "flex";
    }
    function closemodalimg(){
        document.getElementById("img-url-change").style.display = "none";
    }

    document.getElementById("imagesend").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    document.getElementById('send-imgdata').disabled=false;
        $('#send-imgdata').addClass('send-changes');
        $('#send-imgdata').removeClass('send-changes-disabled');
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);

    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function(){
        let preview = document.getElementById('example-image');
            preview.style.backgroundImage  = "url('"+reader.result+"')";

    };
    }
    
    
    
</script>
<script type="text/javascript">

function changephone(){
document.getElementById("phonecamp").value = document.getElementById("phone-selector").value;
}
function changephone2(){
    document.getElementById('send-changesbutphone').disabled=false;
        $('#send-changesbutphone').addClass('send-changes');
        $('#send-changesbutphone').removeClass('send-changes-disabled');
        
}
function changetextsend(){
    document.getElementById('send-thephone').disabled=false;
        $('#send-thephone').addClass('send-changes');
        $('#send-thephone').removeClass('send-changes-disabled');
        
}

</script>





