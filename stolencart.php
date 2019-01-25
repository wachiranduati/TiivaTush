<?php
require 'connect.php';
ob_start();
session_start();
require 'core.inc.php';

if(isset($_GET['site'])){
    $site = $_GET['site'];
    // decide on which database to use
    if(!empty($site)){
        if($site == 'shack'){
            $dbs = 'products';
            $cartame = 'shackcart';
            $dbsother = 'brandyproducts';
            $cartameother = 'shopcart';
            //the database is products
            if(isset($_GET['action'])){
                $id = intval($_GET['id']);
                if($_GET['action'] == 'add'){
                    if(isset($_SESSION['shackcart'][$id])){
                    $_SESSION['shackcart'][$id]['quantity']++;
                        echo "item was already in the cart doing a plus one";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);


                }else{
                    $query = "SELECT * FROM `products` WHERE `id`='$id'";
                    $query_run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($query_run) != 0){
                        $row_s = mysqli_fetch_array($query_run);
                        $_SESSION['shackcart'][$row_s['id']]=array(
                            "quantity" => 1,
                            "price" => $row_s['price']
                        );
                        echo "item has been added/ not plus one to the cart";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);


                    }
                }
                }
                else{
                    if(isset($_SESSION['shackcart'][$id])){
                        if($_SESSION['shackcart'][$id]['quantity'] > 0){
                            $_SESSION['shackcart'][$id]['quantity']--;
                            echo "item was already in cart removing minus one";
                            displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                        }else{
                            unset($_SESSION['shackcart'][$id]);
                            echo "item wasnt in the cart";
                            displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                        }

                }else{
                        echo "There's nothing to take out of the cart";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                    }

                }
            }


        }else if($site == 'shop'){
            //the database is brandyproducts
            $dbs = 'brandyproducts';
            $cartame = 'shopcart';
            $dbsother = 'products';
            $cartameother = 'shackcart';

            if(isset($_GET['action'])){
                $id = intval($_GET['id']);
                if($_GET['action'] == 'add'){
                    if(isset($_SESSION['shopcart'][$id])){
                    $_SESSION['shopcart'][$id]['quantity']++;
                        echo "item was already in the cart doing a plus one";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);


                }else{
                    $query = "SELECT * FROM `brandyproducts` WHERE `id`='$id'";
                    $query_run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($query_run) != 0){
                        $row_s = mysqli_fetch_array($query_run);
                        $_SESSION['shopcart'][$row_s['id']]=array(
                            "quantity" => 1,
                            "price" => $row_s['price']
                        );
                        echo "item has been added/ not plus one to the cart";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);


                    }
                }
                }
                else{
                    if(isset($_SESSION['shopcart'][$id])){
                        if($_SESSION['shopcart'][$id]['quantity'] > 0){
                            $_SESSION['shopcart'][$id]['quantity']--;
                            echo "item was already in cart removing minus one";
                            displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                        }else{
                            unset($_SESSION['shopcart'][$id]);
                            echo "item wasnt in the cart";
                            displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                        }

                }else{
                        echo "There's nothing to take out of the cart";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                    }

                }
            }

        }else{
            // the database is products
            $dbs = 'products';
            $cartame = 'shackcart';
            $dbsother = 'brandyproducts';
            $cartameother = 'shopcart';
            if(isset($_GET['action'])){
                $id = intval($_GET['id']);
                if($_GET['action'] == 'add'){
                    if(isset($_SESSION['shackcart'][$id])){
                    $_SESSION['shackcart'][$id]['quantity']++;
                        echo "item was already in the cart doing a plus one";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);


                }else{
                    $query = "SELECT * FROM `products` WHERE `id`='$id'";
                    $query_run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($query_run) != 0){
                        $row_s = mysqli_fetch_array($query_run);
                        $_SESSION['shackcart'][$row_s['id']]=array(
                            "quantity" => 1,
                            "price" => $row_s['price']
                        );
                        echo "item has been added/ not plus one to the cart";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);


                    }
                }
                }
                else{
                    if(isset($_SESSION['shackcart'][$id])){
                        if($_SESSION['shackcart'][$id]['quantity'] > 0){
                            $_SESSION['shackcart'][$id]['quantity']--;
                            echo "item was already in cart removing minus one";
                            displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                        }else{
                            unset($_SESSION['shackcart'][$id]);
                            echo "item wasnt in the cart";
                            displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                        }

                }else{
                        echo "There's nothing to take out of the cart";
                        displaycart($dbs,$cartame,$dbsother,$cartameother, $conn);

                    }

                }
            }


        }
    }
    // something is wrong
}// site has not been set

// // ORIGINAL CODE START
// if(isset($_GET['action'])){
//     $id = intval($_GET['id']);
//     if($_GET['action'] == 'add'){
//         if(isset($_SESSION['cart'][$id])){
//         $_SESSION['cart'][$id]['quantity']++;
//             echo "item was already in the cart doing a plus one";
//             displaycart();
//
//     }else{
//         $query = "SELECT * FROM `products` WHERE `id`='$id'";
//         $query_run = mysqli_query($conn, $query);
//         if(mysqli_num_rows($query_run) != 0){
//             $row_s = mysqli_fetch_array($query_run);
//             $_SESSION['cart'][$row_s['id']]=array(
//                 "quantity" => 1,
//                 "price" => $row_s['price']
//             );
//             echo "item has been added/ not plus one to the cart";
//             displaycart();
//
//         }
//     }
//     }
//     else{
//         if(isset($_SESSION['cart'][$id])){
//             if($_SESSION['cart'][$id]['quantity'] > 0){
//                 $_SESSION['cart'][$id]['quantity']--;
//                 echo "item was already in cart removing minus one";
//                 displaycart();
//             }else{
//                 unset($_SESSION['cart'][$id]);
//                 echo "item wasnt in the cart";
//                 displaycart();
//             }
//
//     }else{
//             echo "There's nothing to take out of the cart";
//             displaycart();
//         }
//
//     }
// }
// ORIGINAL CODE END
// $dbs = 'products';
// $cartame = 'shackcart';

function displaycart($dbs,$cartame,$dbsother,$cartameother, $conn){
    $sql = "SELECT * FROM $dbs WHERE id IN (";
    foreach($_SESSION[$cartame] as $id => $value){
        $sql.=$id.",";
    }
    $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
    $query = mysqli_query($conn, $sql);
    $totalprice = 0;
    if($_SESSION[$cartame][$id]['quantity'] != 0){
        while($row=mysqli_fetch_assoc($query)){
        $subtotal = $_SESSION[$cartame][$row['id']]['quantity']*$row['price'];
        $totalprice += $subtotal;

        echo '<br>'.$row['itemtitle'];
        echo '<br>&nbsp;'.$row['id'];
        echo '<br>'.$_SESSION[$cartame][$row['id']]['quantity'];
        echo '<br>'.$row['price'];
        echo '<br>'.$_SESSION[$cartame][$row['id']]['quantity']*$row['price'];
        echo '<br>'.$totalprice;
    }
    }


    if(isset($_SESSION[$cartameother])){
        $sql = "SELECT * FROM $dbsother WHERE id IN (";
        foreach($_SESSION[$cartameother] as $id => $value){
            $sql.=$id.",";
        }
        $sql = substr($sql, 0, -1).") ORDER BY itemtitle ASC";
        $query = mysqli_query($sql);
        $totalprice2 = 0;
        if($_SESSION[$cartameother][$id]['quantity'] != 0){
            while($row=mysqli_fetch_assoc($query)){
            $subtotal = $_SESSION[$cartameother][$row['id']]['quantity']*$row['price'];
            $totalprice2 += $subtotal;

            echo '<br>'.$row['itemtitle'];
            echo '<br>&nbsp;'.$row['id'];
            echo '<br>'.$_SESSION[$cartameother][$row['id']]['quantity'];
            echo '<br>'.$row['price'];
            echo '<br>'.$_SESSION[$cartameother][$row['id']]['quantity']*$row['price'];
            echo '<br>'.$totalprice2;
            $totalprice2 = $totalprice2;
            echo '<br>';
        }
        }
        $grandtotal =  intval($totalprice) + intval($totalprice2);
        echo $grandtotal;
    }else{
        $grandtotal = intval($totalprice);
        echo '<br>'.$grandtotal;
    }

}


?>
