<?php
function bootstrapAlert($alert, $icon, $strong, $message, $cartstat){
	return "<div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-$alert\">
                            <span class=\"glyphicon $icon pull-left\" style=\"font-size:140%;\"></span><strong>$strong</strong>$message
                        </div>
                        <p id=\"cartstat\" style=\"display:none;visibility:hidden;\">$cartstat</p>
                    </div>
                </div>";
}

function timeDeltaCurrentTime($delta){
    return Date('Y-m-d H:i:s', strtotime($delta));
}

function timeDeltaExtendTime($time, $extend, $format){
    $date = date_create($time);
    date_add($date, date_interval_create_from_date_string($extend));
    echo date_format($date, $format);
}

function timeDeltaExtendTimeReturn($time, $extend, $format){
    $date = date_create($time);
    date_add($date, date_interval_create_from_date_string($extend));
    return date_format($date, $format);
}

function timeDeltaExtendTime_return($time, $extend, $format){
    $date = date_create($time);
    date_add($date, date_interval_create_from_date_string($extend));
    return date_format($date, $format);
}

function showHeaderMessage($header, $message){
    return "<$header class=\"text-center text-capitalize\">$message</$header>";
}

function returnthesearchresultstable($productdetails, $imageaddr, $cartname){
    $prodid = $productdetails['id'];
    $category = $productdetails['category'];
    $subcategory = $productdetails['subcategory'];
    $size = $productdetails['size'];
    $sex = $productdetails['sex'];
    $label = $productdetails['label'];
    $titles = substr($productdetails['itemtitle'],0,15);
    $formatvat = number_format($productdetails['price']);
    $titlesLarge = substr($productdetails['itemtitle'],0,35);
            
    return "
        <tr>
        <td><a target=\"_blank\" href=\"productdetails.php?id=$prodid\"><img src=\"$imageaddr$productdetails[imageone]\" class=\"img-responsive\" Style=\"max-height:40px;\"/></a></td>
        <td><p style=\"cursor:default;\" class=\"text-capitalize visible-lg visible-md\">$titlesLarge</p><p style=\"color:blue;cursor:default;\" class=\"text-capitalize visible-sm visible-xs\">$titles...</p></td>
        <td>$category / $subcategory</td>
        <td>$size / $sex / $label</td>
        <td><span class=\"text-capitalize visible-lg visible-md\">$formatvat&nbsp;<p style=\"display:inline;\">Ksh</p></a></p><p class=\"text-capitalize visible-sm visible-xs\">$formatvat&nbsp; Ksh</a></span></td>
        <td><a class=\"btn btn-danger btn-sm retbtnitem\" data-prod=\"$prodid\" data-cart=\"$cartname\">Return me?</a></td>
        </tr>
    ";
}

function returnImagePreAddrMtush(){
    $imageaddr = 'mtumbauploads/compresseduploads/';
    return $imageaddr;
}

function DateDiffInterval($sDate1, $sDate2, $sUnit='M') {
//subtract $sDate2-$sDate1 and return the difference in $sUnit (Days,Hours,Minutes,Seconds)
    $nInterval = strtotime($sDate2) - strtotime($sDate1);
    if ($sUnit=='D') { // days
        $nInterval = $nInterval/60/60/24;
    } else if ($sUnit=='H') { // hours
        $nInterval = $nInterval/60/60;
    } else if ($sUnit=='M') { // minutes
        $nInterval = $nInterval/60;
    } else if ($sUnit=='S') { // seconds
    }
    return $nInterval;
} 

// UPDATE TO DATE TIME TIMESTAMP Year-month-day time space hour min sec
// echo $ctime = Date('Y-m-d H:i:s');
?>