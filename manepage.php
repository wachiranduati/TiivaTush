<?php
ob_start();
session_start();
require 'connect.php';
require 'templates/carousels/carousels.php';


$search = $_GET['search'];
$sub = $_GET['sub'];
$page = $_GET['page'];
$nextpage = ceil($page + 1);

$century = 860;//Mtush
// using id like this so that we can increment it will the 5 minute lapse
// wer are going to select all the items any single div will require
// then post them on the identical div id container
// items required img source, price, title, then formulate the button data-name, data-price
//for this page only get the lead image, follow up to details page query up the total 3 images
$jump = 0;
$items = 40;


$query2 = "SELECT * FROM `products` WHERE `subcategory`='".mysqli_real_escape_string($conn, $search)."' AND `sex`!='".mysqli_real_escape_string($conn, $sub)."' AND `availability`='1' AND `buyer`='0'";
$query_run2 = mysqli_query($conn, $query2);
$query_num_rows2 = mysqli_num_rows($query_run2);
$pagecount = $query_num_rows2 / $items;

if($sub == 'female'){
    $gender = 'Men\'s';
}else{
    $gender = 'Women\'s';
}
//echo $query_num_rows2;

//$query_row = mysqli_fetch_assoc($query_run);
//echo $query_row[imageone];
?>

<!doctype html>
<html>
    <title>Tiiva.co.ke | Mtumba | <?php echo $search.' | '.$gender;?></title>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>

            
    </head>
    <body>
        <?php 
        require('templates/header.php');
        ?>
<div class="container-fluid">

            <div class="row visible-sm visible-xs" style="margin-top:5px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom:2px solid orange;">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="border-bottom:1px solid white;background-color:black;margin-bottom:5px;"><h4 class="text-center text-uppercase" style="font-weight:bold;color:white;"><a href="item.html" style="color:white;" class="btn-block"><?php echo $search.' | '.$gender;?></a></h4></div>
                    </div>


                </div>
                <div class="row hidden">
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <span id="sub"><?php echo $sub;?></span>
                    <span id="cat"><?php echo $search;?></span>
                    <span id="page"><?php echo $page;?></span>
                    </div>
                </div>
            </div>


<!--            starts here-->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
                    <?php echo sisterPagesCarousel();?>
                </div>
            </div>
<!--            ends here-->

            <div class="row visible-lg visible-md">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin-top:1%;">
                    <a href="index.php">
                        <img src="banners/mtumbanner.png" class="img-responsive"/>
                    </a>
                </div>
            </div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="row" id="spinner">
    <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2"></div>
    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8"><img src="icons/Preloader_1.gif" class="img-responsive"/></div>
    <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2"></div>
</div>
    <div class="row" id="querycontents"></div></div>

<?php

//$pagecount;
$loopscount = 1;
echo "  <div class=\"row\">
            <div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"></div>
            <div class=\"col-lg-4 col-md-4 col-sm-8 col-xs-8\">
                <ul class=\"pagination\">";

while($loopscount <= $pagecount+1){


        if($loopscount == $page){
            echo "<li class=\"active\"><a href=\"manepage.php?search=$search&sub=$sub&page=$loopscount\">$loopscount</a></li>";
        }else{
            echo "<li><a href=\"manepage.php?search=$search&sub=$sub&page=$loopscount\">$loopscount</a></li>";
        }
    $loopscount++;

}
echo "</ul>
            </div>
            <div class=\"col-lg-4 col-md-4 col-sm-2 col-xs-2\"></div>
        </div>";

echo "
        <div class=\"row visible-lg visible-md\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"padding:0px;margin-top:1%;\">
                    <a href=\"merchantreg.php\">
                        <img src=\"banners/merchant.png\" class=\"img-responsive\"/>
                    </a>
                </div>
            </div>
    ";
?>

            <div class="row" id="box" style="margin-top:1%;"></div>
</div>
<?php 
        require('templates/footer.php');
        ?>

    <script type="text/javascript">
    function findprice(){
              if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
           xmlhttp.onreadystatechange = function(){
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                    document.getElementById('box').innerHTML= xmlhttp.responseText;

                    }
                    }
                    xmlhttp.open('GET','looper.php21',true);
                    xmlhttp.send();

            }
        window.onscroll = function() {scrollFunction()};
       $(document).ready(function(){
            //alert($("#sub").text());
            //alert($("#cat").text());
            $(document).scroll(function(){
               // alert('haiya');
            });
            function displayquery(){
                $("#spinner").fadeIn();
                var cat = $("#cat").text();
                var sub = $("#sub").text();
                var page = $("#page").text();
                var query = "search="+cat+"&sub="+sub+"&page="+page;
                $.ajax({
                    type: "GET",
                    data: query,
                    url: "manepagehelper.php",
                    success: function(data){
                        $("#spinner").fadeOut();
                        $("#querycontents").html(data);
                    }
                })
            };
            displayquery();
            function loadaccount(){
                $.ajax({
                    url: "account.php",
                    type: "GET",
                    success: function(data){
                        $("#boxtainer").html(data);
                    }
                });
            }
            loadaccount();

        });

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
        boxed();

    </script>
    </body>
</html>
