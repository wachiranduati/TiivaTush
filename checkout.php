<?php
session_start();
ob_start();
require 'search.inc.php';
require 'core.inc.php';
require 'looptemplater.php';

//echo strpos('i love php so im seated here worndering what im doing here','im');

//echo array_search('me',$thething);
//$a=array('green','blue','red');
//echo array_search("red",$a);
//echo isset($_SESSION['user']);
//echo $_SERVER['REMOTE_ADDR'];

//echo md5(1);
//echo $_SERVER['HTTP_CLIENT_IP'];
//echo $_SERVER['HTTP_X_FORWARDED_FOR'];
$century = 860;//Mtush

// $_SESSION['$user_id'];
// md5('wagwanista');

if(isset($_POST['useremail'])){
    $useremail = $_POST['useremail'];
    if(!empty($useremail)){
        //echo "It is set";
        //echo $useremail;
        if($useremail == 'a3f1abc0a7101ccf68bb31192780aa42@me.com'){
            header('location:shop.php');
        }

    }else {
        echo "The input is empty";
    }
}else {
    //echo "Nuthn";
}



?>
<!DOCTYPE html>
<html>
<title>Tiiva.co.ke | Home</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

</head>
    <body onload="boxed();">
        <?php 
        require('templates/header.php');
        ?>
        <div class="container-fluid">
            <div class="row visible-lg visible-md" style="margin-top:10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.php">Home </a> / <a href="checkout.php">Checkout</a><h2 class="text-center text-uppercase" style="margin-top:-10px; color:orange;">Checkout</h2></div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="newcartitems"></div>
            </div>
            


            <div class="row visible-sm visible-xs" style="margin-top:1px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.php">Home </a> / <a href="checkout.php">Checkout</a><h4 class="text-center text-uppercase" style="margin-top:5px; color:orange;">Checkout</h4></div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                    <div class="row visible-lg visible-md details" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 1</h4></div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style=""><h4 class="text-capitalize">Shipping details</h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 bills" style="border-left:1px solid white;background-color:lime;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 bills" style="border-left:1px solid white;background-color:red;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>

                    </div>

                    <div class="row visible-xs visible-sm details" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 1</h4></div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8" style=""><h4 class="text-capitalize">Shipping details</h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:lime;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:red;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>
                    </div>

                    <div class="row" id="checkoutcontainer">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;"><h3>Check out details</h3></div>
                    </div>


                    <div class="row" style="border-top:1px solid gainsboro;;">

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h3>Bill to</h3></div>
                            </div>
                            <div class="row" style="font-family:kok;margin-top:10px;">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md"></div>
                                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                    <form class="form-group" action="checkout.php" method="get">
                                        <label for="username">Name:</label>
                                        <input type="text" value="something" id="username" name="username" placeholder="Name: Jeniffer Craig Someone" class="form-control" title="<h5>Name Field</h5>Please provide your full name. Your delivery will be made to this name unless a special request is provided in the <strong>Special Requests Field</strong>"/><br>
                                        <label for="useridno">ID no:</label>
                                        <input type="number" value="0785959" id="useridno" name="useridno" placeholder="ID Number: 302367236" class="form-control" title="<h5>Identification number Field</h5>Please provide your identification number in the input below"/><br>
                                        <label for="emailaddress">Emailaddress: (optional)</label>
                                        <input type="email" id="emailaddress" value="myemail@gmail.com" name="emailaddress" placeholder="Email: me@gmail.com" class="form-control" title="<h5>Email address Field</h5>Please provide us with your Email Address.ps. We will send your receipt to the provided email. This step is optional"/><br>
                                        <label>Country</label>
                                        <input type="text" placeholder="Country: Kenya" readonly disabled class="form-control" title="<h5>Country Field</h5>Please provide us with your country where the shopping should be delivered"/><br>
                                        <label for="phonenumber">Phone Number:</label>
                                        <input type="text" value="something" id="phonenumber" name="phonenumber" placeholder="Mobile Phone: 072323321" class="form-control" title="<h5>PhoneNumber Field</h5>Please provide your phone number. This must be the same one used to pay for your cart but it can be an optional contact during delivery if another one is provided in the special requests input field"/><br>
                                        <div class="form-group">
                                        <label for="county">County:</label>
                                        <select class="form-control" value="something" id="county" name="county" title="<h5>County to Deliver cart Field</h5>Please select the county in Kenya where the delivery is to be made">

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
                                    </div>
                                        <label for="area">Area: eg.Garissa town</label>
                                        <input type="text" value="somewhere" id="area" name="area" placeholder="Town/Area*" class="form-control" title="<h5>Town Delivery Field</h5>Please provide the town in which your delivery will be made p.s. You can also provide your exact gps coordinates and we will deliver straight to your doorstep at no extra cost"/><br>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h3>Special request</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
<!--                                    <form>-->
                                        <textarea title="<h5>Special Request Field</h5>Please provide extra information pertaining to your delivery. You can have your package delivered to a friend or dropped off at a drop off point of your choosing" rows="15" cols="37" id="details" name="details" class="form-control" placeholder="Notes about your order. Special Notes for Delivery. Here you can specify the exact location where you want the package dropped off, it can also include a fall back should you be unable to receive the package. This will be used as the drop off.E.g Kindly leave my delivery with the secretary at Shikhokho Building opposite the Marsabit National Postbank." style="background-color:rgba(220, 220, 220, 0.24);"></textarea>
<!--                                    </form>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="row" style="margin-top:20px;">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visile-lg visible-md"></div>
                                <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                                    <div class="row">
                                <div class="col-lg-12 col-sm-12 col-sm-12 col-xs-12" style="background-color:rgba(255, 0, 0, 0.92);border-top-right-radius:5px;border-top-left-radius:5px;">
                                        <h4 class="text-center">Note</h4>
                                </div>
                            </div>
                            <div class="row" style="background-color:rgba(153, 174, 216, 0.65);">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ol>
                                <li>Currently we are only shipping in Kenya.</li>
                                <li>Provide us with your correct details as you will be required to sign off for your package</li>
                                <li>You must provide us with your name and mobile phone number</li>
                                <li>Select your county from the drop down list</li>
                                <li>Write down your Township or Area where you choose to receive your package</li>
                                <li>We will contact you via your mobile number</li>
                            </ol>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>

            <div class="row visible-lg visible-md shipping" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 2</h4></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style=""><h4 class="text-capitalize">Delivery options</h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:lime;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:red;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>
            </div>

            <div class="row visible-xs visible-sm shipping" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 2</h4></div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style=""><h4 class="text-capitalize">Delivery options</h4></div>
            </div>


            <div class="row" style="margin-top:1px;display:none;" id="shippingdetails">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11" style="background-color:rgba(165, 165, 165, 0.15);">
                 <p>Please decide on your mode of delivery</p>
                    <form id="radioform">
                        <div class="radio">
                      <label><input title="<h5>Free delivery with Tiiva</h5>With this option you get your package delivered in 3-5 working days free of charge through Tiiva's bulk shipping. This is our way of giving back to our customers. you get a harty smile and a Thankyou with every delivery." value="free" checked type="radio" name="optradio">Free delivery with Tiiva (1 - 5 working days) - Flat rate - FREE</label>
                    </div>

                    <div class="radio">
                      <label><input title="<h5>Experss delivery with Tiiva</h5>With this option you get your package delivered in 1 - 3 days at a flatrate of 400Ksh no matter the size of the package.With this option you get your package delivered faster, we top off any extra costs if any and you get a harty smile and a Thankyou with every delivery." value="ExpressTiiva" type="radio" name="optradio">Express Delivery with Tiiva (1 - 3 days) - Flat rate - 400 KSH</label>
                    </div>
                    <div class="radio">
                      <label><input title="<h5>Fargo courier COURIER Option</h5>With this option you get your package delivered to you via Fargo courier.We top off any extra charges if your package shipping cost is higher and you receive your package faster.p.s They're awesome" value="Others" type="radio" name="optradio">Others i.e WellsFargo | G4S | 2Nk (1 - 2 days) - Flat rate - 400 KSH</label>
                    </div>
                    </form>
                    <small style="color:red">*NB Flat Rates factor in any unexpected changes in pricing likely to be met on our side. You should be glad to hear that we refund you the change in Cash.</small>
                    

                </div>
<!--                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>-->
            </div>


            <div class="row visible-lg visible-md review" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 3</h4></div>
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style=""><h4 class="text-capitalize">Review &amp; Payment</h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:lime;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:red;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>
            </div>

            <div class="row visible-xs visible-sm review" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">Step 3</h4></div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style=""><h4 class="text-capitalize">Review &amp; Payment</h4></div>
            </div>


<!--            start of cart-->
            <div class="row" style="margin-top:1px;display:none;" id="reviews">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="checkoutcartitems"></div>
            </div>

<!--            end of the actual cart-->

            <div class="row visible-lg visible-md payment" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">step 4</h4></div>
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style=""><h4 class="text-capitalize">Payment</h4></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:lime;color:white;display:none;"><h4 class="text-center"><span class="glyphicon glyphicon-ok"></span></h4></div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" style="border-left:1px solid white;background-color:red;color:white;"><h4 class="text-center"><span class="glyphicon glyphicon-remove"></span></h4></div>
            </div>


            <div class="row visible-xs visible-sm payment" style="margin-top:1px;background-color:rgba(0,0,0,0.1);font-family:kok;cursor:pointer;">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="border:1px solid black;background-color:black;color:white;"><h4 class="text-uppercase">step 4</h4></div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style=""><h4 class="text-capitalize">payment</h4></div>
            </div>


                    <div class="row" style="display:none;" id="paymentid">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                                    <p>Please decide on your mode of payment</p>
                    <div class="radio">
                      <label><input title="<h5>Airtel Pesa</h5>You simply pay for your cart using your Airtel Pesa. Please ensure the number provided is the same provided in your billing details.Ensure you pay the exact total provided in step 3.p.s there are no transaction charges for this method" type="radio" name="optradio">Airtel Pesa (<small>no transaction charges</small>)</label>
                    </div>
                    <div class="radio">
                      <label><input title="<h5>Eazzy pay</h5>You simply pay for your cart using your Equitel line. Please ensure the number provided is the same provided in your billing details.Ensure you pay the exact total provided in step 3.p.s there are no transaction charges for this method" type="radio" name="optradio">EazzyPay (<small>no transaction charges</small>)</label>
                    </div>
                    <div class="radio">
                      <label><input checked title="<h5>M-Pesa</h5>You simply pay for your cart using your Safaricom line. Please ensure the number provided is the same provided in your billing details.Ensure you pay the exact total provided in step 3.p.s there are no transaction charges for this method" type="radio" name="optradio">M-Pesa (<small>no transaction charges</small>)</label>
                    </div>
                    <div class="radio">
                      <label><input title="<h5>Telkom Pesa</h5>You simply pay for your cart using your Telkom line. Please ensure the number provided is the same provided in your billing details.Ensure you pay the exact total provided in step 3.p.s there are no transaction charges for this method" type="radio" name="optradio">Telkom Pesa (<small>no transaction charges</small>)</label>
                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top:1px;">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border:2px solid blue;padding-bottom:3%;border-radius:5px;">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--                        <h4 class="text-center text-capitalize">Mpesa</h4>-->
                            <img src="images/lipanampesa.png" class="img-responsive"/>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ol>
                                <li>Go to the <strong>M-PESA</strong> Menu</li>
                                <li>Go to <strong>Lipa na M-PESA</strong></li>
                                <li>Go to <strong>Buy Goods and Services</strong> </li>
                                <li>Enter <strong>Till Number: <span style="color:orange;text-shadow:1px 1px 1px black;font-size:130%;">860321</span></strong></li>
                                <li>Enter <strong>amount: <span id="mytotal" style="color:blue;font-size:120%;">Your Total</span></strong></li>
                                <li>Enter your <strong>M-PESA pin</strong></li>
                                <li>Confirm the name checks out as Tiiva Shopping mall</li>
                                <li>By now your all done.Provide us with the transaction code in the input bar below</li>
                                <li>Proceed to checkout and your receipt will be processed</li>
                            </ol>

                            <form class="form-inline" method="post" action="index.php">
                                 <label for="transcode">Transaction code</label> i.e. DKM38CW7EP
                                <div class="input-group col-lg-12" style="font-family:kok;">
                                <input type="text" id="transcationinputid" onkeyup="transactioncovertuppercase();" class="form-control" placeholder="Transcation code" name="transcode" style="text-transform:uppercase;background-color:rgba(220, 220, 220, 0.47);" title="<h5>Transaction Code</h5>Please provide the transaction code you receive after your payment. This is to help Tiiva guys clear you cart faster.p.s Thankyou for understanding"/>
                                <span class="input-group-btn">
                                    <input type="button" id="checkoutbutton" onclick="checkout();" class="btn btn-success" value="Checkout"/>
    <!--                                            <button type="button" class="btn btn-default">Go</button>-->
                                </span>

                                </div>
                            </form>
                        <div class="row visible-sm visible-xs">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="newcartitems3"></div>
                    <div class="row" style="display:none;visibility:hidden;" id="spinnersmall">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="images/spinner/spinner_medium.gif" class="img-responsive"/>
                            <span class="text-center">Loading...</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    </div>
            </div>
                    </div>

                    </div>

                </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 visible-lg visible-md">

                <div class="row visible-md visible-lg">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="newcartitems2"></div>
                    <div class="row" style="margin-top:25%;display:none;visibility:hidden;" id="spinnerlarge">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <img src="images/spinner/spinner_large.gif" class="img-responsive"/>
                            <span class="text-center">Loading...</span>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    </div>
            </div>
                </div>

            </div>
                        </div>
                    </div>


            </div>

                </div>

</div>
<?php 
        require('templates/footer.php');
        ?>
        <script type="text/javascript">

                 //search function right here

            function findmatch(){
		if(window.XMLHttpRequest){
			xmlhttp01 = new XMLHttpRequest();
		}else{
			xmlhttp01 = new ActiveXObject('Microsoft.XMLHTTP');
		}

		xmlhttp01.onreadystatechange = function(){
			if (xmlhttp01.readyState == 4 && xmlhttp01.status == 200){
				document.getElementById('results').innerHTML = xmlhttp01.responseText;

			}
		}
		xmlhttp01.open('GET','search.inc.php?search_text='+ document.search.search_text.value+'&timing='+<?php echo $century;?>,true);
		xmlhttp01.send();
	}

            // changes the title box with the hello welcome to airmark logout thingi
            

            // changes the title box with the hello welcome to airmark logout thingi
            

            function transactioncovertuppercase(){
                var transcationinputid = document.getElementById('transcationinputid').value;
                transcationinputid = transcationinputid.toLocaleUpperCase;
            }
            function total(){
                var total = document.getElementById('total').innerHTML;
                var mytotal = document.getElementById('mytotal');
                mytotal.innerHTML = total;
            }
            function additem(iad){
                if(window.XMLHttpRequest){
                    xmlhttp05 = new XMLHttpRequest();
                }else{
                    xmlhttp05 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp05.onreadystatechange = function(){
                if (xmlhttp05.readyState == 4 && xmlhttp05.status == 200){
                    //document.getElementById('newcartitems').innerHTML= xmlhttp05.responseText;
                    // cart();

                    }
                    }
                    xmlhttp05.open('GET','stolencart.php?action=add&id='+iad,true);
                    xmlhttp05.send();
            }
            function removeitem(irem){
                if(window.XMLHttpRequest){
                    xmlhttp06 = new XMLHttpRequest();
                }else{
                    xmlhttp06 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp06.onreadystatechange = function(){
                if (xmlhttp06.readyState == 4 && xmlhttp06.status == 200){
                    //document.getElementById('newcartitems').innerHTML= xmlhttp06.responseText;

                    }
                    }
                    xmlhttp06.open('GET','stolencart.php?action=remove&id='+irem,true);
                    xmlhttp06.send();
            }

            $(document).ready(function(){
                $.ajax({
                            url: "displaycartcontents.php",
                            type: "GET",
                            success: function(data){
                                $("#checkoutcartitems").html(data);
                                //alert(data);
                                total();
                            }
                        });
            });
            function cartship(){
                // alert("cartship called");
                var xer = $("#radioform input[type='radio']:checked").val();
                var message = "shipping="+xer;
                        $.ajax({
                            url: "displaycartcontents.php",
                            type: "POST",
                            data: message,
                            success: function(data){
                                $("#checkoutcartitems").html(data);
                                //alert(data);
                                total();
                            }
                        })
                    
            }

            
            function removeitemship(irem){
                if(window.XMLHttpRequest){
                    xmlhttp06 = new XMLHttpRequest();
                }else{
                    xmlhttp06 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp06.onreadystatechange = function(){
                if (xmlhttp06.readyState == 4 && xmlhttp06.status == 200){
                    //document.getElementById('newcartitems').innerHTML= xmlhttp06.responseText;
                    cartship();

                    }
                    }
                    xmlhttp06.open('GET','stolencart.php?action=remove&id='+irem,true);
                    xmlhttp06.send();
            }


            function checkout(){
                // remember to filter the buttons before
                var username = document.getElementById('username').value;
                var useridno = document.getElementById('useridno').value;
                var emailaddress = document.getElementById('emailaddress').value;
                var phonenumber = document.getElementById('phonenumber').value;
                var county = document.getElementById('county').value;
                var area = document.getElementById('area').value;
                var details = document.getElementById('details').value;
                var transcationinputid = document.getElementById('transcationinputid').value;
                var xer = $("#radioform input[type='radio']:checked").val();

                var checkoutinfo = 'username='+username+'&useridno='+useridno+'&emailaddress='+emailaddress+'&phonenumber='+phonenumber+'&county='+county+'&area='+area+'&details='+details+'&transcationinputid='+transcationinputid+"&shipping="+xer;
                alert(xer);
                if(username != ''){
                    if(phonenumber != ''){
                        var cnty = confirm('You selected '+county+' as your county');
                        if(cnty != false){
                            if(area != ''){
                                if(transcationinputid != ''){
                                    if(details != ''){
                                        sencheckout(checkoutinfo);
                                    }else{
                                        alert('Please provide instructions for you delivery');
                                    }
                                }else{
                                    alert('Please provide mpesa transaction code in the input below');
                                }
                            }else{
                                alert('Please provide us with your drop off location');
                            }
                        }else{
                            alert('Please select your correct county');
                        }
                    }else{
                        alert('Sorry but you MUST PROVIDE YOUR PHONENUMBER');
                    }
                }else{
                    alert('Please provide your Names');
                }
                function sencheckout(checkoutinfo){
                    var spinnersmall = document.getElementById('spinnersmall');
                    var spinnerlarge = document.getElementById('spinnerlarge');
                    spinnersmall.style.visibility = 'visible';
                    spinnersmall.style.display = 'block';

                    spinnerlarge.style.visibility = 'visible';
                    spinnerlarge.style.display = 'block';


                    if(window.XMLHttpRequest){
                    xmlhttp06 = new XMLHttpRequest();
                }else{
                    xmlhttp06 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp06.onreadystatechange = function(){
                if (xmlhttp06.readyState == 4 && xmlhttp06.status == 200){
                    document.getElementById('newcartitems').innerHTML= xmlhttp06.responseText;
                    document.getElementById('newcartitems2').innerHTML= xmlhttp06.responseText;
                    document.getElementById('newcartitems3').innerHTML= xmlhttp06.responseText;
                    //cart();
                    var checkoutbutton = document.getElementById('checkoutbutton');
                    checkoutbutton.disabled = true;
                    spinnersmall.style.visibility = 'hidden';
                    spinnersmall.style.display = 'none';

                    spinnerlarge.style.visibility = 'hidden';
                    spinnerlarge.style.display = 'none';

                            if(xmlhttp06.responseText == 1){
                                setTimeout("payslip();",1000);
                            }


                    }
                    }
                    xmlhttp06.open('POST','checkoutbrains.php',true);
                    xmlhttp06.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp06.send(checkoutinfo);
                }
            }
            function payslip(){
                        document.location.href = 'paymentslip.php';
                            }

        $(document).ready(function(){

                $(".details").click(function(){
                    $("#reviews, #paymentid, #shippingdetails").hide();
                    $("#checkoutcontainer").fadeToggle();
                });

                $(".review").click(function(){
                    $("#reviews").fadeToggle();
                });

                $(".payment").click(function(){
                    $("#paymentid").fadeToggle();
                });

                $("#radioform").change(function(){
                    var xer = $("#radioform input[type='radio']:checked").val();
                    //alert(xer);
                    //insert ajax call in here
                    var message = "shipping="+xer;
                    
                        $.ajax({
                            url: "displaycartcontents.php",
                            type: "GET",
                            data: message,
                            success: function(data){
                                $("#checkoutcartitems").html(data);
                                // total();
                                cartship();
                                //alert(data);
                            }
                        })
                    

                });

                $(".shipping").click(function(){
                    $("#shippingdetails").fadeToggle();
                });

                $(document).scroll(function(){
                    //alert('There are three kids');

                    if($("#username").val().length > 7){
                        if($("#useridno").val().length > 0){
                            if($("#phonenumber").val().length > 0){
                                if($("#county").val().length > 0){
                                    if($("#area").val().length > 0){
                                        $(".bills").eq(0).show();
                                        $(".bills").eq(1).hide();
                                    }else{
                                        $(".bills").eq(0).hide();
                                        $(".bills").eq(1).show();
                                    }
                                }else{
                                    $(".bills").eq(0).hide();
                                    $(".bills").eq(1).show();
                                }
                            }else{
                                $(".bills").eq(0).hide();
                                $(".bills").eq(1).show();
                            }
                        }else{
                            $(".bills").eq(0).hide();
                            $(".bills").eq(1).show();
                        }
                    }else{
                        $(".bills").eq(0).hide();
                        $(".bills").eq(1).show();
                    }

                });

            $(":input").tooltip({
                placement:"top",
                html: "true",
                //title: "i have nothing to say anything"
            })

        })
        </script>
    </body>
</html>
