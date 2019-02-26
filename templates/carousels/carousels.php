<?php

function mainCarousels($imageone, $imagetwo, $imagethree, $imagefour){
	return "
		
                                            <div id=\"imagecarousel2\" class=\"carousel slide\" data-interval=\"4000\" data-ride=\"carousel\">
                                                <div class=\"carousel-inner\">
                                                    <ol class=\"carousel-indicators\">
                            <li data-target=\"#imagecarousel2\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#imagecarousel2\" data-slide-to=\"1\"></li>
                            <li data-target=\"#imagecarousel2\" data-slide-to=\"2\"></li>
                            <li data-target=\"#imagecarousel2\" data-slide-to=\"3\"></li>
                          </ol>
                                                    <div class=\"item active\">
                                                            <img src=\"images\\carousels\\main\\$imageone\" class=\"img-responsive\">
                                                    </div>

                                                    <div class=\"item\">
                                                            <img src=\"images\\carousels\\main\\$imagetwo\" class=\"img-responsive\">
                                                    </div>

                                                    <div class=\"item\">
                                                            <img src=\"images\\carousels\\main\\$imagethree\" class=\"img-responsive\">
                                                    </div>

                                                    <div class=\"item\">
                                                            <img src=\"images\\carousels\\main\\$imagefour\" class=\"img-responsive\">
                                                    </div>

                                                </div>
                                            </div>
                                        
	";
}

function offersCarousels($imageone, $imagetwo, $imagethree, $imagefour, $height){
	$height = $height.'px';
	return "
			<div id=\"imagecarousel1\" class=\"carousel slide\" data-interval=\"2000\" data-ride=\"carousel\">
                                            <div class=\"carousel-inner\">

                                                <ol class=\"carousel-indicators\">
                        <li data-target=\"#imagecarousel1\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#imagecarousel1\" data-slide-to=\"1\"></li>
                        <li data-target=\"#imagecarousel1\" data-slide-to=\"2\"></li>
                        <li data-target=\"#imagecarousel1\" data-slide-to=\"3\"></li>
                      </ol>

                                                <div class=\"item active\">
                                                        <img src=\"images\\carousels\\newsboard\\$imageone\" class=\"img-responsive\" style=\"height:$height;\">

                                                        <div class=\"carousel-caption\">
                                                            <h3>Flat Fee Shipping</h3>

                                                            <p>Same Price all Over Kenya</p>
                                                        </div>
                                                </div>

                                                <div class=\"item\">
                                                        <img src=\"images\\carousels\\newsboard\\$imagetwo\" class=\"img-responsive\" style=\"height:$height;\">
                                                        <div class=\"carousel-caption\">
                                                            <h3>Great Variety</h3>
                                                            <p>Have fun discovering</p>
                                                        </div>
                                                </div>

                                                <div class=\"item\">
                                                        <img src=\"images\\carousels\\newsboard\\$imagethree\" class=\"img-responsive\" style=\"height:$height;\">
                                                        <div class=\"carousel-caption\">
                                                            <h3>We're Fun</h3>
                                                            <p>Nuff said hmm</p>
                                                        </div>
                                                </div>

                                                <div class=\"item\">
                                                        <img src=\"images\\carousels\\newsboard\\$imagefour\" class=\"img-responsive\" style=\"height:$height;\">
                                                        <div class=\"carousel-caption\">
                                                            <h3>Sell on Tiiva</h3>
                                                            <p>Make money on the side</p>
                                                        </div>
                                                </div>

                                            </div>
                                        </div>
	";
}

function groupedCarousels($imageone, $imagetwo, $imagethree, $imagefour, $height){
    $height = $height.'px';
    return "
        
                                            <div id=\"imagecarousel\" class=\"carousel slide\" data-interval=\"2000\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">

                            <div class=\"item active\">
                                    <img src=\"images\\carousels\\grouped\\$imageone\" class=\"img-responsive\" style=\"height: $height;\">
                            </div>

                            <div class=\"item\">
                                    <img src=\"images\\carousels\\grouped\\$imagetwo\" class=\"img-responsive\" style=\"height: $height;\">
                            </div>

                            <div class=\"item\">
                                    <img src=\"images\\carousels\\grouped\\$imagethree\" class=\"img-responsive\" style=\"height: $height;\">
                            </div>

                            <div class=\"item\">
                                    <img src=\"images\\carousels\\grouped\\$imagefour\" class=\"img-responsive\" style=\"height: $height;\">
                            </div>

                        </div>
                    </div>
                                        
    ";
}

function sisterPagesCarousel(){
    return "
    <div id=\"imagecarousel\" class=\"carousel slide\" data-interval=\"2000\" data-ride=\"carousel\">
                        <div class=\"carousel-inner\">

                            <ol class=\"carousel-indicators\">
    <li data-target=\"#imagecarousel\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#imagecarousel\" data-slide-to=\"1\"></li>
    <li data-target=\"#imagecarousel\" data-slide-to=\"2\"></li>
    <li data-target=\"#imagecarousel\" data-slide-to=\"3\"></li>
  </ol>

                            <div class=\"item active\">
                                    <img src=\"images/carousels/main_sisters/desert.png\" class=\"img-responsive visible-lg visible-md\">
                                    <img src=\"images\carousels\main\imageone.png\" class=\"img-responsive visible-sm visible-xs\">
                                    <div class=\"carousel-caption\">
                                        <h3>Dressed for any occasion</h3>

                                        <p>#Tiiva #Mtumba The open air market is now open and live on Tiiva</p>
                                    </div>
                            </div>

                            <div class=\"item\">
                                    <img src=\"images/carousels/main_sisters/grass.png\" class=\"img-responsive visible-lg visible-md\">
                                    <img src=\"images\carousels\main\imagetwo.png\" class=\"img-responsive visible-sm visible-xs\">
                                    <div class=\"carousel-caption\">
                                        <h3>For the Kids?</h3>
                                        <p>#Tiiva #Mtumba shopping for the kids? Yes! only on Tiiva #Mtumba</p>
                                    </div>
                            </div>

                            <div class=\"item\">
                                    <img src=\"images/carousels/main_sisters/jumpin.png\" class=\"img-responsive visible-lg visible-md\">
                                    <img src=\"images\carousels\main\imagethree.png\" class=\"img-responsive visible-sm visible-xs\">
                                    <div class=\"carousel-caption\">
                                        <h3>Gear for the outdoors, maybe chill clothes? or dress for the games?</h3>
                                        <p>#Tiiva #Mtumba Dress for the outdoors, look good, feel good. only on Tiiva #Mtumba</p>
                                    </div>
                            </div>

                            <div class=\"item\">
                                    <img src=\"images/carousels/main_sisters/morocco.png\" class=\"img-responsive visible-lg visible-md\">
                                    <img src=\"images\carousels\main\imagefour.png\" class=\"img-responsive visible-sm visible-xs\">
                                    <div class=\"carousel-caption\">
                                        <h3>Stand Out</h3>
                                        <p>#Tiiva Try us</p>
                                    </div>
                            </div>




                        </div>
                    </div>
    ";
}
?>