<?php
ob_start();
session_start();
require 'connect.php';
if(isset($_POST['search'])){
  $search = $_POST['search'];
  if(!empty($search)){
    $theword = $search;
    //$theword = "m123";

    $cat = substr($theword,0,1);
    $search = substr($theword,1);

    if($cat == 'M' || $cat == 'm'){
      //tiivashack
      $dbs = "products";
      $imagelink = "mtumbauploads/compresseduploads/";
      $productpage = "productdetails.php?id=$search";
    }elseif($cat=='S' || $cat = 's'){
      //tiivashop
      $dbs = "brandyproducts";
      $imagelink = "uploadproducts/compressedproducts/";
      $productpage = "storeproduct.php?id=$search";
    }else{
      // return nothing...actually die
    }

    $query = "SELECT * FROM `$dbs` WHERE `id`='$search'";
    $query_run = mysql_query($query);
    if($row = mysql_fetch_assoc($query_run)){
      // echo $row['itemtitle'];
      // echo $row['imageone'];
      $name = $row['itemtitle'];
      $image = $row['imageone'];
      $label = $row['label'];
      $storename = $row['storename'];
      //echo "<img src=\"$imagelink$image\" style=\"max-height:50px;\"/>";
      echo "
      <div class=\"table-responsive\">
        <table class=\"table\">
          <thead>
            <tr>

            </tr>
          </thead>
          <tbody>
            <tr class=\"success\">
              <td><a href=\"$productpage\" title=\"visit the ||| $name ||| productpage\" target=\"_blank\"><img src=\"$imagelink$image\" style=\"max-height:50px;\"/></a> &nbsp; $name &nbsp;Designed by $label &nbsp; Sold by $storename</td>

            </tr>
            <tr class=\"ratingbox\">
              <td>Care to rate the item above?<br><label><small>To Rate it click on button below that best fits your opinion of the product listed above:<br></small></label></td>
            </tr>
            <tr class=\"ratingbox rate animated bounce\">
              <td>
              <a data-value=\"1\" class=\"btn buror btn-danger\">Poor</a>
              <a data-value=\"2\" class=\"btn buror btn-warning\">Fair</a>
              <a data-value=\"3\" class=\"btn buror btn-info\">Standard</a>
              <a data-value=\"4\" class=\"btn buror btn-primary\">ReallyNice</a>
              <a data-value=\"5\" class=\"btn buror btn-success\">Outstanding</a><br>

            </tr>
            <tr class=\"ratingmessage\">
              <td><h1 class=\"text-capitalize\">Awesome 1 more Step to go</h1></td>
            </tr>
            <tr class=\"reviewbox review\">
              <td>
                <label>Care to write a small review on the product?</label>
                <textarea style=\"width:100%;\" id=\"actualreview\" placeholder=\"reviews give other potential buyers your honest opinion on the product before buying it\" class=\"form-control\"></textarea>
              </td>
            </tr>
            <tr class=\"reviewbox \">
              <td>
                <a class=\"btn btn-success\" id=\"submitbutton\">Submit</a>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
        ";
    }

  }
}else{
  echo "nothing here";
}

?>
