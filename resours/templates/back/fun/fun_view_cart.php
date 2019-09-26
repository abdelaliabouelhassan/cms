<?php


if(isset($_get['cart'])){
    require("../../../config.php");
    $gts = escape_string($_GET['cart']);
    $stri = $gts;
     $_SESSION[$stri] = $gts;
     echo "gg";
}

function Cart(){



$gts = escape_string($_GET['cart']);
$stri = "p".$gts;
$id_pp =  $_SESSION[$stri] = $gts;

$query = query("SELECT * FROM products WHERE id = '$id_pp'");
confirm($query);
while ($row = fetch_array($query)) {

    $cart_p = <<<DELIMETER
            <tr>
                       <th scope="row">{$row['id']}</th>
                       <td>{$row['product_name']}</td>
                       <td>{$row['product_price']}</td>
                       <td>{$row['product_count']}</td>
                       <td><a href=""> <a class="btn btn-success" href="../resours/templates/back/fun/fun_view_cart.php"><span class="glyphicon glyphicon-plus"></span>+</a></a></td>
                       <td> <a class="btn btn-danger" href=""><span class="glyphicon glyphicon-remove"></span>-</a> </td>
            </tr>
DELIMETER;
    echo $cart_p;




}




}




?>