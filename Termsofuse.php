<?php
ob_start();
session_start();
require 'search.inc.php';

$century = 860;
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Home</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrapdist/css/bootstrap.min.css">
        <link rel="stylesheet" href="final.css">
        <script src="jquery.min.js"></script>
        <script src="bootstrapdist/js/bootstrap.min.js"></script>
        <script src="display.js"></script>
        <script src="moded.js"></script>
        <link rel="stylesheet" href="MaterialDesign-Webfont-master/css/materialdesignicons.min.css">
        <link rel="icon" type="image/png" href="icons/thaticon.png">
    <style type="text/css">
        .searchbox {
            border-bottom: 1px solid black;
        }

        #box1 {
                    border-right: 1px dotted gainsboro;
                }
                #box1:hover {
                    box-shadow: 0px -1px 10px red;
                }
    </style>

</head>
    <body onload="boxed();">
        <?php 
        require('templates/header.php');
        ?>
<div class="container">

                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="index.php"><span class="glyphicon glyphicon-home">Home</span></a> / <a href="Termsofuse.php">Terms&C</a></div>
                </div>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:15%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:30%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:45%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:60%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:75%;"></i>
                <i class="mdi mdi-content-cut" style="position:relative;top:10px;left:90%;"></i>
                <i class="mdi mdi-content-cut mdi-rotate-90" style="position:relative;top:5%;left:89.3%;"></i>





                <div class="row" style="border:1px dashed blue;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row visible-lg visible-md">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="text-center"><strong>Tiiva Inc</strong></h1>
                    </div>
                </div>

                <div class="row visible-sm visible-xs">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="text-center"><strong>Tiiva Inc</strong></h2>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                        <h3 class="text-capitalize"><strong>Terms and conditions</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                        <h4 class="text-uppercase"><stong>Please note that by using the services provided in this site you signify your acceptance to be legally bound by the terms and conditions set out below. It is etherefore important that you carefully read these terms and conditions. You may also seek independent legal advice on the same</stong></h4>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h4 class="text-capitalize"><strong>1.General company information paper</strong></h4>
                            <p>Tiiva was started by Nick and he to this day owns 100% of all company shares.</p>
                        </div>

                    </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4 class="text-capitalize"><strong>2.Tiiva's rights and obligations</strong></h4>
                                <p>(1) The merchant acknowledges that the relationship between customers and
                                    Tiiva is governed by the privacy policy and the general terms and conditions,
                                    both available on the website.<br><br>
                                    (2) Tiiva is authorised to accept binding sales on behalf of the merchant and
                                    will be careful to pass order data on to the merchant as well as technology
                                    allows.<br><br>
                                    (3) In order to maintain its reputation for quality and high standard of service,
                                    Tiiva reserves the right to terminate the relationship with the merchant if the
                                    merchant repeatedly receives bad reviews or complaints, or fails to comply with
                                    our recommendations.<br></p>
                                <h4 class="text-capitalize"><strong>3.liability</strong></h4>
                                <p>(1) The merchant indemnifies Tiiva from all claims arising in relation to
                                    matters outside Tiiva's control, including but not limited to the quality of
                                    goods and services provided by the seller. The merchant further indemnifies
                                    Tiiva from third parties' claims resulting from any violation of laws and
                                    regulations by the seller.<br><br>
                                    (2) Tiiva cannot guarantee that its service will be free from all malfunctions,
                                    but will exercise all reasonable care and skill to resolve any such case.<br><br>
                                </p>
                                <h4 class="text-capitalize"><strong>4.Privacy Policy</strong></h4>
                                <p>Tiiva respects the privacy of every individual who visits our website. This
                                    Privacy Policy outlines the information Tiiva may collect and how we may use
                                    that information.
                                </p>
                                <p class="text-capitalize"><strong>Personal Data</strong></p>
                                <p>Tiiva.com will not collect any personally identifiable information about you
                                    (e.g., your name, address, telephone number or email address ("personal data"))
                                    through our website unless you have provided it to us voluntarily. If you do not
                                    want your personal data collected, please do not submit it to us.<br><br>
                                    When you do provide us with personal data, we may use that information in the
                                    following ways, unless stated otherwise: we may store and process that
                                    information to better understand your needs and how we can improve our
                                    products and services; we (or a fulfillment house or other third party on our
                                    behalf in connection with a promotion) may use that information to contact you;
                                    and/or we may provide other third parties with aggregate - but not individual -
                                    information about visitors to or users of our sites. We do not know and do not
                                    intend to sell, rent or market personal data about you to third parties.<br><br>
                                    When you provide your personal information(such as name, address, phone
                                    number, company name, email address, credit card number, or the products you
                                    are shopping for or purchasing) we will not give or sell your individual information
                                    to any outside company for its use in marketing or solicitation. We will maintain
                                    the confidentiality of your personal information and it will be used only to support
                                    your customer relationship with us. Additionally, internal practices help protect
                                    your privacy by limiting employee access to and use of customer data.<br><br>
                                    Both parties are obliged to treat confidentially the content of this agreement, as
                                    well as all other information and data they acquire in connection with the
                                    partnership, and not use it for purposes outside the scope of this contract or
                                    pass it on to third parties. Both parties are obliged to follow privacy laws and
                                    handle accordingly all data related to customers, suppliers and business partners.<br><br>
                                    If you have any questions or concerns in this area we are happy to respond
                                    personally to you; e-mail you</p>
                                <h5 class="text-capitalize"><strong>Additional Information Collected Automatically</strong></h5>
                                <p>In some cases, we may automatically (i.e., not via registration) collect technical
                                    information when you connect to our site that is not personally identifiable.
                                    Examples of this type of information include the type of Internet Browser you are
                                    using, the type of computer operating system you are using and the domain
                                    name of the website from which you linked to our site.</p>
                                <h5 class="text-capitalize"><strong>Information Placed Automatically on Your Computer -- Cookies</strong></h5>
                                <p>When you view one of our websites, we may store some information on your
                                    computer. This information will be in the form of a "Cookie" or similar file and can
                                    help us in many ways. For example, Cookies allow us to tailor a website to better
                                    match your interests and preferences. With most Internet Browsers, you can
                                    erase Cookies from your computer hard drive, block all Cookies or receive a
                                    warning before a Cookie is stored. Please refer to your Browser instructions or
                                    help screen to learn more about these</p>
                                <h4 class="text-capitalize"><strong>5.License</strong></h4>
                                <p>(1) Tiiva has the right to freely maintain the merchant's listing and its ranking
                                    on the website. Tiiva offers customers the opportunity to give ratings and
                                    reviews of the goods and services on the website, and has the right but not the
                                    obligation to publish these online and make them visible to all customers.
                                    Tiiva reserves the right to delete ratings and reviews.<br><br>
                                    (2) Tiiva may scan, transcribe, and publish online the merchant's listings,
                                    logos and other materials required. The merchant grants to Tiiva a royaltyfree, perpetual, unrestricted licence to use and distribute any materials provided
                                    by him, for the purpose of advertising Tiiva's service. In particular, this
                                    includes use in Google AdWords campaigns, domain name registrations and
                                    other online marketing and search engine optimization measures.</p>
                                <h4><strong>6.Return Policy</strong></h4>
                                <p>(1) We shall only accept products if faulty or damaged, returns will be made to
                                    the store they were ordered from.<br>
                                    (2) Reports of damages must be made within 12 hours of pick up or delivery.<br>
                                    (3) Reports of faults are subject to product warranty as per manufacturers Terms and Conditions.<br>
                                    (4) If a product is returned then the packaging must be intact, and proof of
                                    purchase will be required.<br></p>
                                <h4><strong>7.Terms and Termination</strong></h4>
                                <p>(1) This agreement is valid as soon as the merchant signs the contract, or fulfils
                                an order referred by Tiiva, and remains valid indefinitely, until termination by
                                either party. Termination can occur at any time, with a period of notice of one
                                month, in writing, by email, post or fax. The revenues generated during this notice
                                period are still subject to the partnership agreement. The right to immediate
                                termination by either party for important cause remains unaffected.<br><br>
                                (2) The right to immediate termination in particular covers the case where the
                                merchant repeatedly receives negative ratings and reviews on the website, and
                                when these are not obviously unjustified. Repeatedly providing misleading
                                information or withholding information required to present the merchant's items
                                is also grounds for immediate termination. Typos, mistakes and transmission
                                errors are excluded from this, as long as they are not caused with intent or by
                                gross negligence.<br><br></p>
                                <h4><strong>8.General Terms of Use</strong></h4>
                                <p>(1) If a single clause in this agreement is invalid, both parties will endeavor to
                                replace the invalid clause by a valid one that reproduces as closely as possible
                                the intended economic meaning of the invalid clause. The validity of the rest of
                                the agreement remains unaffected. This applies in particular if the agreement is
                                found to be incomplete.<br><br>
                                (2) Tiiva reserves the right to modify his general terms and conditions
                                without giving any justification. In that case, Tiiva will give the merchant
                                adequate notice via email. The notice will contain advice on the right and period
                                of objection to the changes, and on the consequences of leaving unexercised the
                                right to object.<br><br>
                                (3) The changed terms and conditions are considered agreed by the merchant if
                                he does not object to them in writing within 2 weeks of receiving notice of the
                                changes.<br><br>
                                (4) Any terms and conditions of the merchant are not part of this agreement
                                unless Tiiva expressly agrees to adhere to them in writing.<br><br></p>
                                <h4><strong>9.Copyright</strong></h4>
                                <p>(1) The contents of this website, including softwares, text, graphics, logos, button
                            icons, images, audio clips, digital downloads and data compilations made
                            available herein or any other product or service are either our copyrights or those
                            of our affiliates, or third parties transacting on Tiiva and are duly protected by
                            applicable local as well as international laws.<br><br>
                            (2) You may not extract and/or re-utilise parts of the content of this website or
                            products or services hosted in this website without our express written consent
                            or the respective third parties.<br><br>
                            (3) Unless express authority is given you may not incorporate any portion of any
                            software found on this site into your own programs or compile any portion of it in
                            combination with your own programs, transfer it for use with another service, or
                            sell, rent, lease, lend, loan, distribute or sublicense software or otherwise assign
                            any rights to the software in whole or in part<br><br>
                            (4) You may not circumvent, manufacture or distribute devices which are
                            primarily designed or produced for the purpose of circumventing technical
                            measures designed to protect the copyrights.<br><br>
                            (5) You may not remove or alter any electronic rights management information;
                            or distribute, broadcast or make available to the public, protected works, records
                            or copies from which electronic rights management information has been
                            removed or has been altered without our express authority or that of respective
                            third parties.<br><br>
                            (6) You may not utilise any data mining, robots, or similar data gathering and
                            extraction tools to extract (whether once or many times) for re-utilisation any
                            substantial parts of the content of this website, without our express written
                            consent of Tiiva Limited.<br><br>
                            (7) You may not create and/or publish your own database that features
                            substantial parts our services (e.g. our prices and product listings) without our
                            express written consent.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-1"></div>
                </div>
            </div>
                    </div>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:15%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:30%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:45%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:60%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:75%;"></i>
                    <i class="mdi mdi-content-cut" style="position:relative;top:-10px;left:90%;"></i>
                </div>

             <!--Ends here -->
           <?php 
        require('templates/footer.php');
        ?>
        <script type="text/javascript">
            // changes the title box with the hello welcome to Tiiva logout thingi
            function boxed(){
              if(window.XMLHttpRequest){
                    xmlhttp2 = new XMLHttpRequest();
                }else{
                    xmlhttp2 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp2.onreadystatechange = function(){
                if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200){
                    document.getElementById('boxtit').innerHTML= xmlhttp2.responseText;

                    }
                    }
                    xmlhttp2.open('GET','account.php',true);
                    xmlhttp2.send();

                cart();

            }

              // changes the title box with the hello welcome to Tiiva logout thingi
            function cart(){
              if(window.XMLHttpRequest){
                    xmlhttp12 = new XMLHttpRequest();
                }else{
                    xmlhttp12 = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp12.onreadystatechange = function(){
                if (xmlhttp12.readyState == 4 && xmlhttp12.status == 200){
                    document.getElementById('cartitems').innerHTML= xmlhttp12.responseText;

                    }
                    }
                    xmlhttp12.open('GET','shoppingcartcount.php',true);
                    xmlhttp12.send();

            }

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
        </script>
    </body>
</html>
