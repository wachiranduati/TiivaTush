<?php
ob_start();
session_start();
require 'search.inc.php';

$century = 860;
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Frequently-Asked-Questions</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>
    <style type="text/css">
.panel-group .panel {
        border-radius: 0;
        box-shadow: none;
        border-color: #EEEEEE;
    }

    .panel-default > .panel-heading {
        padding: 0;
        border-radius: 0;
        color: #212121;
        background-color: #FAFAFA;
        border-color: #EEEEEE;
    }

    .panel-title {
        font-size: 14px;
    }

    .panel-title > a {
        display: block;
        padding: 15px;
        text-decoration: none;
    }

    .more-less {
        float: right;
        color: #212121;
    }

    .panel-default > .panel-heading + .panel-collapse > .panel-body {
        border-top-color: #EEEEEE;
    }
    </style>

</head>
    <body onload="boxed();">
        <?php 
        require('templates/header.php');
        ?>
                <div class="container">
             <?php
        require 'templates/pagetitle.php';
        echo pageTitle('HOW TO - tIIVA');
                ?>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        WHAT IS TIIVA
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                      tiiva is an ecommerce site that purely deals in mtumba items. Ever wished to visit the famed gikomba market or any other that you've heard about but never had time to? Or your negotiation skills are kinda poor :) We'll as tiiva we try and bridge the gap enabling merchants to list their items on tiiva to sellers like yourself at the same market price physical shoppers get in their stalls. As a trader on tiiva you're advantaged as you can now have two fronts to sell your wears on. Think about it like this, we do the marketing and handle the logistics for you and all you have to do is just wait. No more having to battle the cold weather when you can take a day off and have tiiva do the selling for you.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingtargetMrk">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetargetMrk" aria-expanded="false" aria-controls="collapsetargetMrk">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                       WHO IS OUR TARGET MARKET?
                    </a>
                </h4>
            </div>
            <div id="collapsetargetMrk" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtargetMrk">
                <div class="panel-body">
                    Anyone that loves mtumba for the quality and the really low prices.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingktls">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsektls" aria-expanded="false" aria-controls="collapsektls">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                       HOW DOES TIIVA WORK?
                    </a>
                </h4>
            </div>
            <div id="collapsektls" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingktls">
                <div class="panel-body">
                    Simply put, Merchants upload products. We list the items to our users. A user purchases an item by paying for their cart to our till number. We retrieve the item from the Merchant and deliver it to the buyer with a 24 hour return period from the delivery time. If no return has been made by the buyer, we credit the merchant with the sale. A satisfied buyer will now rock the amazing item they purchased on tiiva and the merchant is happy having made a sale while at the comfort of their shop.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        CREATE A TIIVA ACCOUNT?
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    How do you create a tiiva account and how exactly do you go about that?
                    As a guest user, you can only peruse the website without the ability of buying items. Creating an account is very easy, all the details you need to do this is provide your details. Please ensure that they are correct to the latter. Creating a basic user account enables you to now create a merchant account. To do all this simply click on the blue user icon and click on the proper link below.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        HOW TO BUY?
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    login into your already created user account and simply press on the add to cart button. A green notification should show up on top with a message implying that you've added the item to cart. You can choose to continue shopping, or proceed to checkout and buy the item. Adding the item to cart only makes it unavailable to other users and ties it to your account implying that you're interested in the item. To buy the item, click on the blue shopping cart at the top of the page and a modal popup should show up. Click the button to checkout and this should redirect you to the checkout page. 
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingsix">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        WHAT IS IT WITH BOOKING AND UNBOOKING?
                    </a>
                </h4>
            </div>
            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                <div class="panel-body">
                    You shouldn't bother yourself with this. This is automated and only means that items are booked every time you view an item. Remember that mtumba items exist as singles. By automatically prebooking items, this prevents other users from viewing the booked items giving you all the time to add the item to cart without anyone scooping it from below. 
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingfour">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        HOW TO CHECKOUT
                    </a>
                </h4>
            </div>
            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                <div class="panel-body">
                    Fill in all your details in the checkout page. Ensure you provide the correct details as this will be checked against when the delivery is being made to you. Remember to also provide the extra description in the final field. This is simply a way to give us a second delivery address should you not be available when the delivery is being made. Remember that we literally deliver to you in person to whatever location you provide us with. Just try us.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingfive">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        SHIPPING FEE
                    </a>
                </h4>
            </div>
            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                <div class="panel-body">
                    We have a set flat fee of 150 ksh. We intended to have free shipping all over but sadly we just realized on the last minute that doing this could would make us broker than we already are. Remember that we are a startup and we have much to prove, to you. We hope you understand.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headinglewk">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapselewk" aria-expanded="false" aria-controls="collapselewk">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        WHO CAN SELL ON TIIVA?
                    </a>
                </h4>
            </div>
            <div id="collapselewk" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headinglewk">
                <div class="panel-body">
                    Anyone can become a seller on tiiva. Provided you have the merchandise to sell, we are set to go. Note that you will be required to pay the tax on your sales on your end as tiiva will not handle that for you. You could just as easily start by selling one single item and see how our relationship grows from there. Do note that we expect you to only provide us with good quality items, we will reject items that are clearly defective. We will notify the buyer about this cancellation and duely refund them for that item. We go a step further to also ensure that we protect our merchants too. This means that an item being returned has to pass the same checks it did when the item was when we inspected it. The returned item is only cleared once the seller is content with the item being returned this is to prevent exploitation from both ways.
                    More to this, you can start selling as soon as you create a merchant account. Kindly note that your first pickup, the handler will then activate your account a process  that simply locks your exact gps coordinates. This is to aid us in locating you in subsequent pickups and also on payouts should you choose to be paid in cash.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingfive">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        ANY HELP FOR MERCHANTS?
                    </a>
                </h4>
            </div>
            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                <div class="panel-body">
                    Merchants can easily click on the blue user icon at the top of the page and select the merchants home option. The first tab presented describes everything about the Merchant's account.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingseven">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        HOW TO PAY FOR ITEMS IN MY CART
                    </a>
                </h4>
            </div>
            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                <div class="panel-body">
                    After succesfully filling your details in the checkout page, navigate to the final step where you are now met with the payment options. Sadly we currently only support payment via safaricom's mpesa, we are definitely working towards that. Follow the steps outlined in the instructions detailed on that page and pay to the till number provided. copy and paste your transaction code in the input box provided and click on clear to finalize payment on the cart. If successfull, you should be redirected to a provisional receipt page of your entire cart. You can take a screenshot of this though a final receipt is provided upon delivery. 
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingseven">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        MORE ON SHIPPING
                    </a>
                </h4>
            </div>
            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                <div class="panel-body">
                    We make deliveries in 3 - 5 working days. In reality, I still make extra deliveries on the weekends at no extra cost. Just treating it like a road trip to go out and meet you, our supporters.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingseven">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        EXTRA FEATURES?
                    </a>
                </h4>
            </div>
            <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                <div class="panel-body">
                    Almost forgot about this. So your user's prof page has soo many features, you should definitely go out and explore. Did you know that you get live updates on how far your shipping has gone as far as the timing, location, journey travelled, current location and handler?
                    There's really more you need to explore so always swing by your users prof page when you can. To access this simply login and click on the blue user icon and select profpage and simply explore.
                    Same goes for the merchant's home page. This offers a wide range of features like monitoring your items in transit, to monitoring your live sells, online items even payouts mature here.
                </div>
            </div>
        </div>

    </div><!-- panel-group -->
                </div>
            </div>
            

             

             

             

             

</div>
<?php 
        require('templates/footer.php');
        ?>
        <script type="text/javascript">
            function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);

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
