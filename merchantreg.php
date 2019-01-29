<?php
session_start();
ob_start();
require 'core.inc.php';
require 'looptemplater.php';
require 'utils/userutils.php';

if(userLoggedIn() != True){
    header('Location:index.php');
}

if(isUserMerchant($conn) == True){
    header('Location:sellerprof.php');
}

?>
<!DOCTYPE html>
<html>
<title>Tiiva | Merchant Registration</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>
    
</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--                    first create a header saluting said customer and explaining what teh page does plus a link to contact us-->
                    <div class="row" style="background-color:rgba(0, 0, 0, 0.72);color:white;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><p>Hi <?php echo getUserName($conn);?>, Welcome to the vendor registration page</p></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" style="background-image:url(editions/milos-simic-351441.jpg);background-size:110%;background-position:center;background-attachment:fixed;background-repeat: no-repeat;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-top:20px;padding-bottom:20px;">
                            <h4 class="text-center text-uppercase" style="font-size:140%;color:orange;text-shadow:-1px 2px 1px black;">Tiiva &nbsp;&nbsp;Merchant registration</h4>
                            <hr>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-sm-12 coll-xs-12">
                            <a href="index.php">Back To Tiiva Home</a>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                            <a href="index.php" style="display: inline-block;"><img src="images/otherphotoo.png" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom:1%;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><small>1. MERCHANT DETAILS</small></div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><small>2. BUSINESS DETAILS</small></div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><small>3. NAME REGISRATION</small></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><small class="pull-right">4. FINISH REGISTRATION</small></div>
                    </div>
                    <div class="progress">
                              <div id="progressbar" class="progress-bar progress-bar-primary progress-bar-striped active" role="progressbar"
                              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:10%;">
                                10% Complete (success)
                              </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <form role="form" id="multiphase" onsubmit="return false">
                                <div class="row" id="phase1">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="Fisrtname">Sur Name:</label>
                                            <input type="text" class="form-control" id="Surname" placeholder="ie. Joyce" name="surname"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="Firstname">First-Name:</label>
                                            <input type="text" class="form-control" id="Firstname" name="firstname"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="Lastname">Last-Name:</label>
                                            <input type="text" class="form-control" id="Lastname" name="lastname"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="ID no">ID no:</label>
                                            <input type="number" class="form-control" id="idno" placeholder="eg. 302123232" name="idno"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="Phonenumber">Phone number:</label>
                                            <input type="text" class="form-control" id="phonenumber" placeholder="e.g. 0722347212" name="phonenumber"/>
                                        </div>
                                        <a class="btn btn-primary pull-right" onclick="processphase1();">Continue</a>
                                        
                                    </div>
                                </div>
                                
                                <div class="row" id="phase2" style="visibility:hidden;display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="businesstype">Business Type:</label>
                                        <select class="form-control" value="Mtumba" id="businesstype" name="businesstype" onchange="selectedoptioninfo();">

                                        <optgroup label="Business type" >
                                        <option value="Mtumba">Mtumba</option>
                                        <!-- <option value="wholesaler">Wholesaler</option>
                                        <option value="retailer">Retailer</option>
                                        <option value="fashiondesigner">Fashion Designer</option>
                                        <option value="skills">Skills</option>
                                        <option value="Hardware">Hardware</option>
                                        <option value="GeneralSupplies">General Supplies</option>
                                        <option value="Electronics">Electronics</option>
                                        <option value="Boutique">Boutique</option>
                                        <option value="Bookshop">Bookshop</option>
                                        <option value="Petstore">Petstore</option>
                                        <option value="Juakali">Jua Kali</option>
                                        <option value="Agrovets">Agrovets</option>
                                        <option value="Animalfeeds">Animal Feeds</option>
                                        <option value="importers">Importers</option>
                                        <option value="Supermarkets">Supermarkets</option>
                                        <option value="Travel">Travel &#38 touring</option>
                                        <option value="Builds">Workshop</option> -->
                                        
                                        </optgroup>
                                      </select>
                                        
                                        <div class="form-group">
                                            <label for="Country">Country:</label>
                                            <input type="text" class="form-control" id="Country" name="firstname" value="Kenya" readonly/>
                                        </div>
                                        
                                        
                                        <label for="county">County:</label>
                                        <select class="form-control" id="county" name="county">

                                        <optgroup label="COUNTIES/STATE/REGION" >PROVINCE
                                        <option value="Baringo">Baringo county</option>
                                        <option value="Bomet">Bomet county</option>
                                        <option value="Bungoma">Bungoma county</option>
                                        <option value="Busia">Busia county</option>
                                        <option value="Elgeyo Marakwet">Elgeyo Marakwet county</option>
                                        <option value="Embu">Embu county</option>
                                        <option value="Garissa">Garissa county</option>
                                        <option value="Homa bay">Homa bay county</option>
                                        <option value="Isiolo">Isiolo county</option>
                                        <option value="Kajiado">Kajiado county</option>
                                        <option value="Kakamega">Kakamega county</option>
                                        <option value="Kericho">Kericho county</option>
                                        <option value="Kiambu">Kiambu county</option>
                                        <option value="Kilifi">Kilifi county</option>
                                        <option value="Kirinyaga">Kirinyaga county</option>
                                        <option value="Kisii">Kisii county</option>
                                        <option value="Kisumu">Kisumu county</option>
                                        <option value="Kitui">Kitui county</option>
                                        <option value="Kwale">Kwale county</option>
                                        <option value="Laikipia">Laikipia county</option>
                                        <option value="Lamu">Lamu county</option>
                                        <option value="Machakos">Machakos county</option>
                                        <option value="Makueni">Makueni county</option>
                                        <option value="Mandera">Mandera county</option>
                                        <option value="Meru">Meru county</option>
                                        <option value="Migori">Migori county</option>
                                        <option value="Marsabit">Marsabit county</option>
                                        <option value="Mombasa">Mombasa county</option>
                                        <option value="Muranga">Murang'a county</option>
                                        <option value="Nairobi">Nairobi county</option>
                                        <option value="Nakuru">Nakuru county</option>
                                        <option value="Nandi">Nandi county</option>
                                        <option value="Narok">Narok county</option>
                                        <option value="Nyamira">Nyamira county</option>
                                        <option value="Nyandarua">Nyandarua county</option>
                                        <option value="Nyeri">Nyeri county</option>
                                        <option value="Samburu">Samburu county</option>
                                        <option value="Siaya">Siaya county</option>
                                        <option value="Taita Taveta">Taita Taveta county</option>
                                        <option value="Tana River">Tana River county</option>
                                        <option value="Tharaka Nithi">Tharaka Nithi county</option>
                                        <option value="Trans Nzoia">Trans Nzoia county</option>
                                        <option value="Turkana">Turkana county</option>
                                        <option value="Uasin Gishu">Uasin Gishu county</option>
                                        <option value="Vihiga">Vihiga county</option>
                                        <option value="Wajir">Wajir county</option>
                                        <option value="West Pokot">West Pokot county</option>

                                        </optgroup>
                                      </select>
                                        
                                        <div class="form-group">
                                            <label for="Lastname">Township:</label>
                                            <input type="text" class="form-control" id="township" name="township"/>
                                        </div>
                                        
                                        <a class="btn btn-primary pull-right" onclick="processphase2();">Continue</a>
                                        
                                    </div>
                                </div>
                                <div class="row" id="businessname" style="visibility:hidden;display:none;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>Business Name</h4>
                                        <small>Please provide a name for your business with which your clients will be able to distinguish you by. e.g. <strong><br>Tiiva stores<br> Mama Jane Boutique etc.</strong></small><br>
                                        <span><small style="color:red">Once you set your business name it can not be changed nor used by another merchant</small></span><br>
                                        <form class="form-group">
                                        <label for="Bname">Business Name:</label>
                                            <input type="text" id="business" class="input-sm form-control" placeholder="Insert your preferred business name"/>
                                        </form>
                                        
                                        <br>
                                        <a class="btn btn-primary" onclick="businessname();">Continue</a>
                                    </div>
                                </div>
                                <div class="row" id="showalldata" style="visibility:hidden;display:NONE;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h4>Please confirm that your details are correct</h4>
                                        <strong>Sur Name:</strong> <span id="display_surname"></span>&nbsp;&nbsp;
                                        <strong>First Name:</strong> <span id="display_firstname"></span>&nbsp;&nbsp;
                                        <strong>Last Name:</strong> <span id="display_lastname"></span><br>
                                        <strong>ID No:</strong> <span id="display_idno"></span><br>
                                        <strong>Phone Number:</strong> <span id="display_phone"></span><br>
                                        <strong>Business Name:</strong> <span id="display_businessname"></span><br>
                                        <strong>Business Type:</strong> <span id="display_businesstype"></span><br>
                                        <strong>Country:</strong> <span id="display_country"></span><br>
                                        <strong>County:</strong> <span id="display_county"></span><br>
                                        <strong>Township:</strong> <span id="display_township"></span><br>
                                        <a class="btn btn-primary pull-right" onclick="submitform();" id="submitdatabutton">Submit Data</a>
                                    </div>
                                </div>
                                
                                
                            </form>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="row" id="page1info">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h5><em>Some minor info</em></h5>
                                    <p>Hi, Were glad you'd like to work with us.<br>Please fill in your details to your left and click continue.<br>We at Tiiva strive to create a better relation between the seller and the buyer.<br>Currently we support most types of businesses <!-- <br>We also support local talent saay your an artist.... you draw potraits?...we will help you sell your art work.. --><br>All the items you see on Tiiva are uploaded by individual business owners. We as Tiiva own no single upload, it would be unfair being the referee and the player at the same time.<br>We do not control pricing on items that you post here...we leave that to you. <br>As far as ranking we try to be fair by randomizing it every 5 minutes, this means that items you post will at some time feature on the front page.<br>To learn more about Tiiva check out our <a href="Termsofuse.php">Rules and guidlines</a> </p>
                                </div>
                            </div>
                            <div class="row" id="page2info" style="visibility:hidden;display:none;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <h4>Psst... just a bit more maybe..*wink</h4>
                                            <!-- <small><p>Hello again, so you're halfway down just one more step to go but first you need to select your business type.<br><strong>Depending on the business type you select infortion below will change explaining a bit about the selected option.</strong></p></small> -->
                                            <small> <p>Hello again, so you're halfway down just one more step to go but first provide your location details.</p> </small>
                                        </div>
                                    </div>
                                    <div class="row" style="display: none;">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="selectedcontent">
                                            <h5 class="text-uppercase"><strong><span id="selectedtitle">Wholesaler</span></strong></h5>
                                            <small><span id="selectedinfo">
                                                <span style="color:red;">This text will differ in all business types. Select your preferred Business type and check out this section</span>
                                                </span>.
                                                <br>
                                            <strong>Always ensure you check your account and confirm the agents photos against the photo sent to your account when we come to pick up items.</strong>
                                            </small>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="serverresponse"></div>
                                    </div>
                        </div>
                    </div>
<!--                    TRIAL AND ERROR START-->
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            
                        </div>
                    </div>
            
<!--                    TRIAL AND ERROR FININSH-->
<!--            TABABBLE CONTENT BEGINS HERE-->
<!--
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color:rgba(255, 255, 255, 0.4);">
                                            <h4>Important links</h4>
                                            <div class="tabbable">
                                                
                                                <hr>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">
                                                    <h5>Hola!</h5>
                                                    <p>We're glad you have an interest in blogging, we do hope our traffick will do some good to your career</p>
                                                    <p>Do get intouch with us if you encounter a problem</p>
                                                    <p>Lastly have fun! Blog</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                        <p>This should load a list of all your blogs in the left pane</p>
-->
<!--
                                                        <p>Ooh...Remember to update your profile by clicking on the link above * Hi, you</p>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                    <p>This should load up a list of all your current tabs on the left panel</p>
                                                        <p>You're free to use image links in your blog.They may appear funky in here but our team will resize them for you and upload your blog</p>
                                                        <p>Now remember to link to blogs you may have out there too :)</p>
                                                    </div>
                                                    
                                                </div>
                                                <ul class="nav nav-pills">
                                                    <li class="active"><a class="btn btn-sm" href="#tab1" data-toggle="tab">Guideline</a></li>
                                                    <li><a href="#tab2" data-toggle="tab">Online</a></li>
                                                    <li><a href="#tab3" data-toggle="tab">Drafts</a></li>
                                                </ul>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                                            </div>
                                        </div>        
            </div>
-->
<!--            TABABBLE CONTENT ENDS HERE-->
                </div>
            </div>
        </div>
        <?php require 'templates/footer.php';?>
        <script>
            var Sname, fname, lname, idno, phone ,progressbarz, page1info, page2info;
            function _(x){
                return document.getElementById(x);
            }
            function processphase1(){
                Sname = _('Surname').value;
                Fname = _('Firstname').value;
                Lname = _('Lastname').value;
                idno = _('idno').value;
                phone = _('phonenumber').value;
                
                if(Sname != '' && Fname != '' && Lname != '' && idno != '' && phone != ''){
                    _('phase1').style.display = "none";
                    _('phase1').style.visibility = "hidden";
                    _('phase2').style.display = "block";
                    _('phase2').style.visibility = "visible";
                    _('progressbar').style.width = "50%";
                    _('progressbar').innerHTML = "50% Complete(Success)";
                    _('page1info').style.display = "none";
                    _('page1info').style.visibility = "hidden";
                    _('page2info').style.display = "block";
                    _('page2info').style.visibility = "visible";
                
                }else{
                    alert("Please fill in all fields");
                }
            }
            var businesstype, county, township, country;
           function processphase2(){
                businesstype = _('businesstype').value;
                county = _('county').value;
                township = _('township').value;
                country = _('Country').value;
                
                if(businesstype != '' && county != '' && country != '' && township != ''){
                    _('phase2').style.display = "none";
                    _('phase2').style.visibility = "hidden";
                    _('businessname').style.display = "block";
                    _('businessname').style.visibility = "visible";
                    _('page2info').style.display = "none";
                    _('page2info').style.visibility = "hidden";
                     

                }else{
                    alert("Please fill in all fields");
                }
            }
            function businessname(){
                var business = document.getElementById('business').value;
                //alert(business);
                if(business != ''){
                    // not empty
                    var choice = confirm("You have selected --->>>"+business+"--<<< as your businessname");
                    if(choice == true){
                        //continue
                    _('businessname').style.display = "none";
                    _('businessname').style.visibility = "hidden";    
                    _('showalldata').style.display = "block";
                    _('showalldata').style.visibility = "visible";
                    _('display_surname').innerHTML = Sname;
                    _('display_firstname').innerHTML = Fname;
                    _('display_lastname').innerHTML = Lname;
                    _('display_idno').innerHTML = idno;
                    _('display_phone').innerHTML = phone;
                    _('display_businesstype').innerHTML = businesstype;
                    _('display_businessname').innerHTML = business;
                    _('display_country').innerHTML = country;
                    _('display_county').innerHTML = county;
                    _('display_township').innerHTML = township;
                    _('progressbar').style.width = "90%";
                    _('progressbar').innerHTML = "90% Complete(Success)";
                    _('page2info').style.display = "none";
                    _('page2info').style.visibility = "hidden";
                    }else{
                        // cancel
                        alert("You have pressed cancel.Please provide a name and press continue");
                    }
                }else{
                    // empty
                }
            }
            
            function payslip(){
                        document.location.href = 'sellerprof.php';
                            }
            
            function submitform(){
                //alert(businesstype);
                var businessvalue = document.getElementById('business').value;
                var datatosend = "Sname="+Sname+"&Fname="+Fname+"&Lname="+Lname+"&idno="+idno+"&phone="+phone+"&businesstype="+businesstype+"&country="+country+"&county="+county+"&township="+township+"&businessname="+businessvalue;
                //alert(datatosend);
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('serverresponse').innerHTML= xmlhttp.responseText;
                    
                    _('progressbar').style.width = "100%";
                    _('progressbar').innerHTML = "100% Complete(Success)";
                    _('progressbar').className = "progress-bar progress-bar-success progress-bar-striped active";
                    var submitdatabutton = document.getElementById('submitdatabutton');
                    submitdatabutton.disabled = true;
                    setTimeout("payslip();",3000);


                    }
                    }
                    xmlhttp.open("POST","merchantregistrationserver.php",true);
                    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp.send(datatosend);

                
                
                

                //alert("We will contact you shortly.Thankyou");
            }
            
            
            
            function selectedoptioninfo(){
                var businesstype = document.getElementById('businesstype').value;
                
                switch(businesstype){
                    case "wholesaler":
                        var wholesaletitle = "wholesaler";
                        var wholesaleinfo = "As a wholesaler you will post items you supply in bulk with the prices for wholesale you charge and the recommended retail price. Tiiva operates on 12% of your price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                     case "retailer":
                        var wholesaletitle = "retailer";
                        var wholesaleinfo = "As a retailer you will be able to post various items you sell at the fairest price. Tiiva operates on 10% of your item price with no extra costs.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account.Ensure you provide the best quality items as your customers on Tiiva can rate your products. Better ratings equals more sales";
                        break;
                        
                     case "fashiondesigner":
                        var wholesaletitle = "fashion designer";
                        var wholesaleinfo = "As a fashion designer, you will be able to post various designs against your profile so that potential customers can reach out to you with their preferred measurements and designs in mind.You can also post finished designs and constumes on sale and sell them thought Tiiva.Now to maintain your sanity we've made it impossible for you to accept a request not until you're done with the initial request,but you can still sell your complete designs as usual. Tiiva operates on 10% of your price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account.Of importance to note is that your customers can rate you and well, the better the ratings, the better the sales.";
                        break;
                        
                     case "skills":
                        var wholesaletitle = "skills";
                        var wholesaleinfo = "Skills should be honed and frankly you should make a living from what you enjoy doing. At Tiiva we will give you a platform for you to display your works of art, be it home decor or potraits, Tiiva has got your back. Here you can post finished works for sale.You can also do requests which will be displayed in your private account. Remember to log in to your account and upload previously done works as customers will be able to view and vet your previous works before requesting or buying your products. Tiiva operates on 10% of your items price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account. Your customers can rate you, so remember to do your best and always remember that better ratings equals more sales.";
                        break;
                        
                     case "Hardware":
                        var wholesaletitle = "Hardware";
                        var wholesaleinfo = "Do you operate a hardware? Well your in luck. Say you sell vehicle hardware or some other type of hardware. We know more people out there want to see what your selling. We at Tiiva are providing you with a platfrom where you can post your wares and sell them all over E.Africa. You heard it right, now you no longer need the front store, just team up with us and let us bring traffick to your store. Tiiva operates on 12% of your item price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                     case "GeneralSupplies":
                        var wholesaletitle = "General Supplies";
                        var wholesaleinfo = "As a wholesaler you will post items you supply in bulk with the prices for wholesale you charge and the recommended retail price. Tiiva operates on 12% of your price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                     case "Electronics":
                        var wholesaletitle = "Electronics";
                        var wholesaleinfo = "Say you operate an electronics store, we help you sell your wares all over E.Africa. We don't control your pricing and there are not hidden costs for teaming with us. Now you have the ability to post your entire shop online and competer with other businesses fairly. No more need for a front store shop we will get the customer for you, and ship the item to the customers for free.As a wholesaler you will post items you supply in bulk with the prices for wholesale you charge and the recommended retail price. Tiiva operates on 12% of your item price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                        case "Builds":
                        var wholesaletitle = "Workshop";
                        var wholesaleinfo = "You deal in built and customized items e.g. aquariums, furniture  and such. We will provide you with a platform to increase your sales by enabling your store to reach further. We will enable potential customers to design items and have them sent to your account for confirmation and pricing after which you will then embark on building the item after the user has paid for the item and a deadline set after which you will start your build and on completion Tiiva will confirm and inspect the item.Sent out to the customer and you are paid in full. You can also sell your already completed items on Tiiva but you cannot take an order before your other order is completed.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                     case "Bookshop":
                        var wholesaletitle = "Bookshop";
                        var wholesaleinfo = "Do you sell items you'd find in a bookshop? Team up with us and let us help you market your products all over E.Africa. Tiiva operates on 12% of your item price and remember we do not control your pricing. Most of the businesses are going online to serve more people so heres what were offering you, we have traffick, were like an open air market people come and shop. You are assured of front page publicity how is this? Our algorithm shuffles everythign randomly every 5 minutes.This ensures every single store gets some time on the frong page. People won't have to physically find your store location.Think of it this way we will help you competer fairly on the online realm.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account.";
                        break;
                        
                     case "Petstore":
                        var wholesaletitle = "Petstore";
                        var wholesaleinfo = "As a wholesaler you will post items you supply in bulk with the prices for wholesale you charge and the recommended retail price. Tiiva operates on 12% of your price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                     case "Mtumba":
                        var wholesaletitle = "Mtumba";
                        var wholesaleinfo = "You own a stall of a 'kibanda' where you sell second hand clothes i.e Mtumba.We provide you with a platform to get to more clients especially to those out of town who wouldnt make it to your stall. We help you get the items in mind to a willing buyer and deliver it to them with no extra costs. We do charge a one time charge of 10% of item price with no extra charges. Remember we do not control your pricing, you have the freedom to price your items. With Mtumba we target mostly the teens and early 20's adults who happen to be most of our users. From you we only require quality products. We will inspect items before deliveryt to ensure items reach up to our minimum standards. Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                        case "Boutique":
                        var wholesaletitle = "Boutique";
                        var wholesaleinfo = "You own a stall or a shop where you sell new clothes we can help you ease out of the highly competed field. With us you have a fair and equal share compared to store in a prime location. We have traffick and you need the traffick. Of importance to note is that we require standard items from you. Your customers can rate your items after buying them on Tiiva and well the better the rating the better the sales. We do not charge you to open an account but for Tiiva to function we charge 10% of your item price to and remember we do not control pricing. Tiiva posting system is not human controlled it uses a complex algorithm to ensure everyone gets a fair chance to sell his wares, so your products are bound to show up on the first page for maximum advertising. We will inspect items before deliveryt to ensure items reach up to our minimum standards. Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                        
                         case "Juakali":
                        var wholesaletitle = "Jua Kali";
                        var wholesaleinfo = "You work in the Juakali sector, were all for youth empowerment and more so supporting our own local products. You can now post your products on Tiiva and get to customers easily. Most of your potential customers can't get to your physical location or are towns away and thats where step in. You post an item and let us advertise it to our customers who upon liking said item will purchase it on our site and have it delivered to them at no extra charge. Transport charges are all on us. It does not matter whether your stall is in Garissa and the client in Vanga. We take up the costs to take it to the customer and of that we charge you nothing nor do we charge the customer shipping. We only take 10% of your item price a price which you yourself set. We do not control pricing, but we do care about quality items before delivery must pass by our standards before being shipped. Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                        
                     case "Animalfeeds":
                        var wholesaletitle = "Animal feeds supplier";
                        var wholesaleinfo = "As an animal feeds supplier, we will connect you with the buyers directly such that by the time your stocking up your warehouses, orders are flying in. We deliver all over E.Africa at no hidden or extra cost to the customer of the supplier.As a wholesaler you will post items you supply in bulk with the prices for wholesale you charge and the recommended retail price. Tiiva operates on 12% of your price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                        
                        case "Travel":
                        var wholesaletitle = "Tours and Travelling";
                        var wholesaleinfo = "Do you own a tours and travelling company? We help you with just that advertising and do i say we pay on the same day unlike other categories. Local tourism is blowing up and we would love to get a bite of the pie and help you grow too. Now with our traffick you can market your various tours. We do not control your pricing but we do charge a 10% of the total in every sale. Now you can compete on a totally fair and equal ground. Tiiva staff have no business in travelling not that the system would be tampered with but we prefer to remain neutral. On our site we channel our traffick to your affordable tours with packages affordable for the local masses.On your profile you will have a clearly stipulated calendar with prices and packages you offer from which customers can then book. For this you have to cleared and approved by our agenst such that once a client pays the money is credited direclty to your account. Of importance to note is that you can edit posts you've already made to possible changes in pricing and dates. Remember your clients on Tiiva can rate you and well the better the ratings the more the sales. <br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                        
                        
                        case "Supermarkets":
                        var wholesaletitle = "Supermarkets";
                        var wholesaleinfo = "As a supermarket you take in items in bulk and sell in the general locality we help you cover a region better to top the growing competiton in the business. We have a feature that enables customers from a specific region to request items with same day delivery unlike other products which generally take 3 - 5 working days. On this we choose to team up with Supermarkets since quality and pricing is already fair. By helping you offload stock behind the shelves we will generally help you do a better turnover than you did last year. With us customers get their whole shopping delivered to their doorsted and unlike other Tiiva where we pay the supplier two days after delivery with this we pay 1 day after delivery but all this happens after the customer has paid for the shopping. We give the customer time to lodge a complaint hence the 1 day for supermarkets. We do not charge you to post your items on our website and we do not charge the customer extra for services offered and shipping we just take a 10% cut off the total shopping which we use for Tiiva operations. You customers can rate services and quality of products from you supermarkets so ensure you provide quality items as a better rating equal more sales. Make your supermarket stand out from the rest. To serve our customer we use the nearest supermarkets to his location unless he/she strictly chooses one over the other whereby we will ship the shopping directly to him/her. We do not deliver perishable goods for more than 1 day delivery.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                        
                        
                        
                     case "imports":
                        var wholesaletitle = "Imports";
                        var wholesaleinfo = "Yours is a broad category and we will give you the platform to post your wares and connect you with sellers all over E.Africa. We also have an extra feature where Tiiva users can send out alerts requesting and paying for items in advance which you can then import on their behalf and have us deliver to them free of charge. Tiiva operates on 12% of your price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        break;
                     default:
                        var wholesaletitle = "wholesaler";
                        var wholesaleinfo = "As a wholesaler you will post items you supply in bulk with the prices for wholesale you charge and the recommended retail price. Tiiva operates on 12% of your price.<br>Upon purchase, a message will be sent to your account and a photos of the agents that will come to pick up said item.<br>By the time we come for the items we have cleared payment but for us to credit your account you will be required to wait for two days after delivery of items to the customer after which we will duely credit your account";
                        
                        
                        
                }
                
                //var wholesaletitle = "Asii";
                //var wholesaleinfo = "Nothing to see here";
                //alert(businesstype);
               
                var selectedtitle = document.getElementById('selectedtitle');
                var selectedinfo = document.getElementById('selectedinfo');
                selectedtitle.innerHTML = wholesaletitle;
                selectedinfo.innerHTML = wholesaleinfo;
            }
            
        </script>
    </body>
</html>