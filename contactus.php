<?php
ob_start();
session_start();
require 'search.inc.php';
require 'connect.php';

$century = 860;



?>
<!DOCTYPE html>
<html>
<title>Tiiva | Contact-us</title>

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



</head>
    <body onload="boxed();">
        <?php 
        require('templates/header.php');
        ?>
                <div class="container">
            <div class="row" style="z-index:5;position:relative;top:200px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="themessage">
<!--
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                <strong>Here!!</strong>
                                <span>This is where is was supposed to be at</span>
                            </div>
-->
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
            </div>
            <div class="row" style="margin-top:5px;">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" style="padding:15px;border:1px solid white;border-radius:10px;font-family:kok;">
                    <form class="form-group" action="contactus.php" method="post">
                        <label for="county">Subject:</label>
                        <select class="form-control" title="<h5>Reason for Contacting us</h5>Please select one of the reasons below for contacting us" id="subject" name="subject" style="margin-bottom:3%;background-color:rgba(255, 255, 255, 0.11);">

                                        <optgroup label="SUBJECT FOR WHICH YOU ARE CONTACTING US" >PROVINCE
                                        <option value="Complaint">Complaint On Services Offered</option>
                                        <option value="Feedback">Feedback</option>
                                        <option value="Orderissue">Order Issue</option>
                                        <option value="Review">Review Us?</option>
                                        <option value="Request">Request</option>
                                        <option value="Improve">Help Us Improve</option>
                                        <option value="Merchant">Merchant Issues</option>
                                        <option value="User">User account Issues</option>
                                        <option value="Other">Other</option>

                                        </optgroup>
                                      </select>
                        <label for="email">Email:</label>
                        <input type="email" title="<h5>Reason for Contacting us</h5>Please select one of the reasons below for contacting us" id="email" maxlength="100" placeholder="Email Address" class="form-control" name="email" style="background-color:rgba(220, 220, 220, 0.33);border:none;"/>
                        <label for="phonenumber">Phonenumber:</label>
                        <input type="tel" title="<h5>Your Email Address</h5>Please provide us with your email address. We may need it to contact you later" id="phonenumber" maxlength="20" placeholder="Your Phone number" class="form-control" name="phonenumber" style="background-color:rgba(220, 220, 220, 0.33);border:none;"/>
                        <label for="name">Name:</label>
                        <input type="text" title="<h5>Your Name</h5>Please provide us with your full Name" id="name" maxlength="100" placeholder="Your Name" class="form-control" name="name" style="background-color:rgba(220, 220, 220, 0.33);border:none;"/>
                        <label for="details">Message:</label>
                        <textarea placeholder="Your message" title="<h5>Message Input Field</h5>Please provide your message in the input box below in detail" id="details" maxlength="1000" class="form-control" rows="10" name="details" style="background-color:rgba(220, 220, 220, 0.33);border:none;"></textarea><br>
                        <input type="button" onclick="showself();" id="sendbutton" value="Send Message" class="btn btn-primary btn-block"/>
                    </form>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="text-capitalize" style="text-decoration:underline;font-family:kok;"><em>Why we want you to contact us</em></h3>
                            <blockquote>
                            <p><small><em>"It takes 20 years to grow a good reputation but only 5 minutes to destroy it completely."</em></small></p>
                            <footer>Warrent Buffet</footer>
                          </blockquote>

                            <img src="icons/kidsicon.png" class="img-responsive pull-left" style="height:90px;"/>
                            <p><span class="lead">Hi</span>, i'm <small><em>WN</em></small> and i'm going to tell you a story about Tiiva. So Tiiva is really young and it is our wish to grow and get bigger.Your feedback happens to be very dear to me. I take every feedback seriously and try my best to sort out any issue. 9 out of 10 times I do commit to the requests but then I surely cant change everyones background color to pink....*wink *wink<br>haha right?</p>
                            <img src="icons/emojiicon.png" class="img-responsive pull-right" style="height:90px;"/>
                            <p>
                            At Tiiva we value your feedback. It helps us serve you better by pointing out the uglyness we need to take care of. You are our most prized possession </p>
                            <p>We'd love to hear from you: your feedback, your critique, your requests ooh and your funny jokes too. Help us improve and serve you better.Thanks</p>
                            <p class="pull-left"><small><em>Yours,<br> WN.</em></small></p>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <pre class="pre-scrollable">CONTACT US
                                  Tiiva Inc.
                                  125 KIRIAINI
                                  TEL +254705780775
                                  EMAIL info@tiiva.com
                          </pre>

                        </div>
                    </div>


                </div>
            </div>

</div>
<?php 
        require('templates/footer.php');
        ?>
        <script type="text/javascript">
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

            function showself(){
                var subject = document.getElementById('subject').value;
                var email = document.getElementById('email').value;
                var phonenumber = document.getElementById('phonenumber').value;
                var name = document.getElementById('name').value;
                var details = document.getElementById('details').value;
                var sendbutton = document.getElementById('sendbutton');

                if(subject != ''){
                    //continue
                    if(phonenumber != ''){
                        //continue
                        if(name != ''){
                            if(details != ''){
                                //continue
                                if(email == ''){
                                    var emailcontents = '';
                                }else{
                                    var emailcontents = email;
                                }

//                                var formvalues = "Subject="+subject+"&email="+emailcontents+"&phonenumber="+phonenumber+"&name="+name+"&details="+details;
//                                //alert(formvalues);
                               // sendmessage(formvalues);
                                if(XMLHttpRequest){
                                    xmlhttp = new XMLHttpRequest();
                                }else{
                                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                                }
                                xmlhttp.onreadystatechange = function(){
                                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                                        document.getElementById('themessage').innerHTML = xmlhttp.responseText;
                                        sendbutton.disabled = true;
                                    }
                                }
                                xmlhttp.open('POST','contactparse.php',true);
                                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                                xmlhttp.send("subject="+subject+"&email="+emailcontents+"&phonenumber="+phonenumber+"&name="+name+"&details="+details);

                            }else{
                                alert('Your message seems to be empty');
                            }
                        }else{
                            alert('Please provide us with your name');
                        }
                    }else{
                        alert('Please provide us with your phonenumber');
                    }
                }else{
                    // empty
                    alert("Please select a subject");
                }
            }
            $(document).ready(function(){
               $(":input").tooltip({
                   placement: "top",
                   html:"true"
               })
            });
        </script>
    </body>
</html>
