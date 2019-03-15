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
        <?php require 'templates/resourcelinks/headerlinks.php';?>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="text-center text-uppercase">About us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <h4 class="text-uppercase"><u>Founder</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p> I am Nduati, the sole founder and creator of tiiva. Inadvertly alot of time and dedication was taken into making <a href="index.php">tiiva</a> a reality from my friends to my family and my dear worn out laptop, i couldnt have done this without you.My most heartfelt gratitude goes to <a href="http://www.google.com">Google</a> and moreso <a href="http://www.youtube.com">Youtube</a> with whom i would never have gotten to learn about the <a href="http://www.thenewboston.com">Thenewboston</a> and moreso <a href="http://thenewboston.com/bucky">Bucky Roberts</a> and his dark humour, not forgetting <a href="http://thenewboston.com/alexgarret">Alex Garret</a> for teaching me all the php code i need for this.To my friends <a href="http://www.facebook.com/jefferypaw">Jeff</a> those tuts did me a solid men, thanks, my very good friend<a href="htt://www.facebook.com/joy">Wamaina</a> for always being there, me ranting code and you staring at me uncomfortably. To my tiiva hype guys <a href="#">Beverly</a> for all help you provided fashion wise, Salu, to <a href="#">Ralph</a> for the timed "iyo sh** iko sawa" remarks you made with every code upgrade, Salu. To my parents, for giving me the peace of mind to do whatever i was doing staring a computer screen all day long and to my brother <a href="#">Kiune</a>, for getting me interested in code Thankyou.Last but not least to my <a href="#">Laptop</a>You served me well. If you do plan on crashing for the 13th time do it after i've safely backed everything up:).</p>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h4 class="text-uppercase"><u>tiiva's Story</u></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p>tiiva was born out of necessity. I was and still are a fan of cheap quality shoes but the problem was that most of my friends didn't really know how or where to find such. As a result i took them to my usual dens but being guys, were really not that good at picking out stuff we ended up leaving with nothing that day. Partly because the guys didnt want to feel less of themselves and mostly because they were lazy. This kind of shopping i was introduced to by my long time friend <a href="http:facebook.com/miriamgabriella">Miriam</a> and pretty much liked it.</p>But once i finished school and had to move back home, i had to find new shopping dens, but they never did reach up to what id had before, the fix wasnt enough. Merchandise here was more expensive and the sellers more hesitant to give a better price. More to this is the fare id have to spend commuting to make it for that saturday market day. This was too much hassle for a couple of shoes, plus too expensive bearing in mind that the 200Ksh id have to spend on transport would mean 1 pair less. Something had to be done, it was obvious that this was the case with other shoppers like myself. So i decided to build tiiva, ofcourse not that i was a new to code, i'd been writing code for 2 years and had quit not seeing its relevance. So the story tells where i learnt all about web development, all from youtube, stack overflow , github and most online forums. 7 months down the line and i'm glad to say that the struggle was a success and now i give you tiiva.
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="text-capitalize"><u>Our Mission</u></h4>
                    <p>It was my intetion as the founder of tiiva to provide a platform, a platform that would ease the way we do our shopping as far as clothes are concerend.We intend to provide a platform, the first of its kind, where shoppers can interact with sellers from all over the country. Dealing with open air markets we hope to get every single shopper on to our site, provide competitive pricing and free shipping and the best customer service.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="text-capitalize"><u>Credits</u></h4>
                    <p>To the awesome devs out there who've contributed so much to online resources by provide knowledge for free. The amazing designers and photographers who provide royalty free photos. <br> Thankyou!</p>
                    <h3>Photocredits</h3>
                    <ul>
                        <li><a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@auttgood?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Autumn Goodman"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Autumn Goodman</span></a></li>
                        <li> <a href="https://www.pexels.com/photo/grayscale-photo-of-man-904332/">Photo by Edson Habacuc Rafael from Pexels</a>  </li>
                        <li> <a href="https://www.pexels.com/photo/smiling-boy-wearing-grey-hoodie-1102603/"> Photo by Peace Alberto Iteriteka from Pexels </a> </li>
                        <li> <a href="https://www.pexels.com/photo/garage-sale-1087727/"> Photo by Min An from Pexels </a> </li>
                        <li><a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@x__raah?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Raíssa de Paula"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Raíssa de Paula</span></a></li>
                        <li><a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@harryhundal1?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Harry Hundal"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Harry Hundal</span></a></li>
                        <li> <a href="https://www.pexels.com/photo/brand-trademark-cobblestones-community-denim-pants-609771/?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels"> Photo by Ingo Joseph from Pexels </a> </li>
                        <li><a href="https://www.pexels.com/photo/man-playing-soccer-ball-1311616/"> Photo by Maurício Mascaro from Pexels </a></li>
                        <li><a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@jakobowens1?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Jakob Owens"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Jakob Owens</span></a></li>
                        <li><a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@jessicamaephotographyga?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Jessica Furtney"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Jessica Furtney</span></a></li>
                        <li><a href="https://www.pexels.com/photo/rainbow-color-patch-on-area-rug-673588/"> Photo by Sanketh Rao from Pexels </a></li>
                        <li><a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@francesgunn?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Frances Gunn"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Frances Gunn</span></a></li>
                        

                    </ul>
                </div>
            </div>
        </div>
        <?php 
        require('templates/footer.php');
        ?>
        <script type="text/javascript">
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
