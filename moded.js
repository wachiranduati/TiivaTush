 function showcount(){
        $.ajax({
            url: "cartcount.php",
            type: "GET",
            success: function(data){
                $("#cartitems").html(data);
            }
        });
    }
showcount();

function unbookitem(prod){
    // alert('unbooking item');
    $.ajax({
    url: "mtushcart.php",
    type: "POST",
    data: "action=unbook&prod="+prod,
    success: function(data){
        $("#itemstat").html(data);
        
    }
  });
}

            
function addnewitem(prod){

  $.ajax({
      url: "mtushcart.php",
      type: "POST",
      data: "action=addtocart&prod="+prod,
      success: function(data){
          $("#itemstat").html(data);
          
      }
    });

}

function removeItem(prod){
  $.ajax({
      url: "mtushcart.php",
      type: "POST",
      data: "action=removeFrCart&prod="+prod,
      success: function(data){
          $("#itemstat").html(data);
          
      }
    });
}

setInterval(function(){ 
      console.log('auto unbook');
   }, 120000);


            
            function toggleadvancedsearch(){
                var AdvancedSearchContainer = document.getElementById('AdvancedSearchContainer');
                var simplesearchresults = document.getElementById('simplesearchresults');
                if(AdvancedSearchContainer.style.display == 'block' && AdvancedSearchContainer.style.visibility == 'visible'){
                    AdvancedSearchContainer.style.display = 'none';
                    AdvancedSearchContainer.style.visibility = 'hidden';
                }else{
                    AdvancedSearchContainer.style.display = 'block';
                    AdvancedSearchContainer.style.visibility = 'visible';
                }
                
            }
           function advancedsearch(){
               var searchphrase = document.getElementById('searchphrase').value;
               var minprice = document.getElementById('minprice').value;
               var maxprice = document.getElementById('maxprice').value;
               var site = document.getElementById('site').value;
               var category = document.getElementById('category').value;
               
               function miniadvance(filterz){
                if(XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById('advancedresulst').innerHTML = xmlhttp.responseText;
                                           }
                }
                xmlhttp.open('POST','advancedsearch.php',true);
                xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xmlhttp.send(filterz);
             }
               var search_text = "search_text="+searchphrase+"&minprice="+minprice+"&maxprice="+maxprice+"&site="+site+"&category="+category;
               if(searchphrase != ''){
                   //continue
                   if(minprice != '' && minprice >= 0){
                       //continue
                       if(maxprice != '' && maxprice > minprice){
                           //continue
                           if(site != ''){
                               //continue
                               if(category != ''){
                                   //continue
                                   //alert('searchphrase = '+searchphrase+" , minprice = "+minprice+" , maxprice = "+maxprice+" ,site = "+site+" and category ="+category);
                                   miniadvance(search_text);
                               }else{
                                   //no category selected
                                   alert("Please select a category to narrow your search");
                               }
                           }else{
                               // no site selected/tampering
                               alert("Please select a site to be searched");
                           }
                       }else{
                           //possible tampering
                           alert("Ooops something is wrong.Please ensure that you provided a value in the maxprice");
                       }
                   }else{
                       // someone is trying to manipulate the system
                       alert("Ooops something is wrong.Please ensure that you provided a value in the minprice");
                   }
               }else{
                   // search box is empty alert
                   alert("Please input a value to search");
               }
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
                    xmlhttp3.open('GET','displaycartcontents.php',true);
                    // xmlhttp3.open('GET','displaycartcheckout.php',true);
                    xmlhttp3.send();
            
            
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
                    loadmodalcart();

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
                    loadmodalcart();

                    }
                    }
                    xmlhttp06.open('GET','stolencart.php?action=remove&id='+irem,true);
                    xmlhttp06.send();
            }

function loadnewip(){
    //alert('function one');
          if(window.XMLHttpRequest){
                xmlhttp3 = new XMLHttpRequest();
            }else{
                xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
            }
       xmlhttp3.onreadystatechange = function(){
            if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                //document.getElementById('nduse').innerHTML= xmlhttp3.responseText;
                loadhitsip();
                }
                }
                xmlhttp3.open('GET','newip.php',true);
                xmlhttp3.send();


        }

function loadhitsip(){
   // alert('function two');
          if(window.XMLHttpRequest){
                xmlhttp3 = new XMLHttpRequest();
            }else{
                xmlhttp3 = new ActiveXObject('Microsoft.XMLHTTP');
            }
       xmlhttp3.onreadystatechange = function(){
            if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200){
                //document.getElementById('nduse').innerHTML= xmlhttp3.responseText;
                }
                }
                xmlhttp3.open('GET','hitsip.php',true);
                xmlhttp3.send();


        }

loadnewip();

