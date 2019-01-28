<?php
function returnEmptyCategory(){
    // this is used to return a templated error that category is empty
    return "
                <div class=\"row visible-lg visible-md\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"height:400px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                        <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this category</h4>
                    </div>
                </div>

                <div class=\"row visible-sm visible-xs\">
                    <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\" style=\"height:200px;width:100%;color:red;background-image:url('editions/man-person-jumping-desert.jpg');background-size:100%;background-position:center;background-repeat:no-repeat;\">
                        <h4 class=\"text-center text-capitalize\" style=\"margin-top:20%;\">Sorry items have ran out in this category</h4>
                    </div>
                </div>


            ";
}

function returnProperItems($id, $imageone, $label, $title, $price){
    $shortnam = substr($title, 0, 25);
    $urlcaption = urlencode($title);
    return "
    <div class=\"col-lg-4 col-md-4 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <a href=\"productdetails.php?$urlcaption&id=$id\" target=\"_blank\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage\" style=\"background-image:url('mtumbauploads/compresseduploads/$imageone'); height:160px;width:100%;background-size:90%;\">
                </div>
            </a>
            <h5 class=\"text-capitalize\">$label</h5>
            <hr style=\"margin:0.5px;\">
            <h5 class=\"text-center text-capitalize\" style=\"font-weight:300;height:20px;overflow:hidden;\"><a href=\"productdetails.php?id=$id\">$shortnam..</a></h5>
            <h5 class=\"text-center\" style=\"padding:0px;margin:0px;font-weight:bold;color:#ffa427;\">Ksh $price</h5>


        </div>
        </div>
        ";
}

function returnProperItemsMainpagees($id, $imageone, $label, $title, $price){
    $urlcaption = urlencode($title);
    $shortnam = substr($title, 0, 20);
    return "
    <div class=\"col-lg-2 col-md-2 col-sm-6 col-xs-6\" id=\"box1\">
    <div class=\"row\" style=\"padding:4px;\">
            <a href=\"productdetails.php?$urlcaption&id=$id\" target=\"_blank\">
                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12 productimage\" style=\"background-image:url('mtumbauploads/compresseduploads/$imageone'); height:160px;width:100%;background-size:90%;\">
                </div>
            </a>
            <h5 class=\"text-capitalize\">$label</h5>
            <hr style=\"margin:0.5px;\">
            <h5 class=\"text-center text-capitalize\" style=\"font-weight:300;height:20px;overflow:hidden;\"><a href=\"productdetails.php?id=$id\">$shortnam..</a></h5>
            <h5 class=\"text-center\" style=\"padding:0px;margin:0px;font-weight:bold;color:#ffa427;\">Ksh $price</h5>


        </div>
        </div>
        ";
}
?>