<?php
ob_start();
session_start();
require 'connect.php';

returnlocations();
function returnlocations(){
  // this script will search through merchants locations trying to locate one similar to the one provided
  // we're using merchats registrations since they represent the actual businesses
  if(isset($_GET['loc'])){
    $location = $_GET['loc'];
    if(!empty($location)){
      $querylocs = "SELECT * FROM `merchants` WHERE `township` LIKE '$location%'";
      $querylocs_run = mysqli_query($conn, $conn,$querylocs);
      $querylocs_num = mysqli_num_rows($querylocs_run);
      if($querylocs_num > 0){
        //continue
        echo "<table class=\"table table-hover\">
                <tbody>";
        while($querylocs_row = mysqli_fetch_assoc($querylocs_run)){
          $town = $querylocs_row['township'];
          $county = $querylocs_row['county'];
          echo "<tr>
                    <td>$county, $town</td>
                    <td><a class=\"btn btn-success pull-right btn-sm locselec\" data-location=\"$county, $town\">I'm here</a></td>
                  </tr>";
        }
        echo "  </tbody>
              </table>";
      }else{
        // die
      }
    }
  }else{
    // do not show products//just show an error
  }

}
?>
