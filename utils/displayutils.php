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

function timeDeltaExtendTime_return($time, $extend, $format){
    $date = date_create($time);
    date_add($date, date_interval_create_from_date_string($extend));
    return date_format($date, $format);
}

// UPDATE TO DATE TIME TIMESTAMP Year-month-day time space hour min sec
// echo $ctime = Date('Y-m-d H:i:s');
?>