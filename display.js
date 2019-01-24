//the to top button
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    'use strict';
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

//search function with display from ajax
function letsgo(whereto){
    window.location = whereto;
    //alert(whereto);
}
$(document).ready(function(){
    $('#advancedresulst').hide();
    $("a.pull-right").click(function(){
        $("#advancedresulst").toggle();
    });

    $('[name="search_text"]').keypress(function(event){
        if(event.which == 13){
            event.preventDefault();

        }
    });

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

function loadmodalcart(){
  if(window.XMLHttpRequest){
        xmlhttp3 = new XMLHttpRequest();
    }else{
        xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
    }
xmlhttp3.onreadystatechange = function(){
    if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
        document.getElementById('cartmodalcontents').innerHTML= xmlhttp3.responseText;

        }
        }
        xmlhttp3.open('GET','displaycartcheckout.php',true);
        xmlhttp3.send();


}
