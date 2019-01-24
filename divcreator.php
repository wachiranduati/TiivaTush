<?php

?>
<!doctype html>
<html>
    <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="bootstrapdist/css/bootstrap.min.css">
                <link rel="stylesheet" href="final.css">
                <script src="jquery.min.js"></script>
                <script src="bootstrapdist/js/bootstrap.min.js"></script>
                <script src="display.js"></script>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style type="text/css">
                #box1 {
                    border: 1px solid gainsboro;
                }
            </style>
    </head>
    <body onload="findprice();">
        <div class="container-fluid">
            <div class="row" id="box">
                
            </div>
        </div>
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
                    xmlhttp.open('GET','looper.php',true);
                    xmlhttp.send();
            
            }
    </script>
    </body>
</html>
