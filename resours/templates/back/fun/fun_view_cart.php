<?php


//add to sell
if(isset($_GET['add_p'])){
    header("Location: ../../../../public/index?product_details=".$_GET['add_p']);

}



//remove from cart
if (isset($_GET['delete_p'])) {
    require("../../../config.php");

    $id = $_GET['delete_p'];
    $query = query("DELETE FROM cart WHERE id_cart = '$id'");
    redirect("../../../../public/index?cart");
 }

//add to cart
if(isset($_GET['cart'])){
    require("../../../config.php");

    $id = $_GET['cart'];
    $added_by = $_SESSION['roll'];
    $query = query("INSERT INTO cart (id_cart,added_by) VALUES ('$id','$added_by')");



  redirect("../../../../public/index?View");


}







?>