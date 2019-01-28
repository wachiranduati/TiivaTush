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
                                                            <h3>Free shipping</h3>

                                                            <p>Yup! Free shipping with Tiiva</p>
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
?>