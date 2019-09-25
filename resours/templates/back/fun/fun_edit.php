<?php

$error_array = array();


if (isset($_POST['Cancel'])) {
    redirect("index?View");
}


if (isset($_POST['update'])) {
    $doicansendtodatabase = 0;
    $date = date("Y-m-d");
    $product_title = escape_string($_POST['product_title']);
    $product_price = escape_string($_POST['product_price']);
    $net_profit = escape_string($_POST['net_profit']);
    $product_code = escape_string($_POST['product_code']);
    $product_count = escape_string($_POST['product_count']);
    $product_color = escape_string($_POST['product_color']);
    $product_size = escape_string($_POST['product_size']);
    $product_type = escape_string($_POST['product_type']);
    $product_cat = escape_string($_POST['product_cat']);
    $product_disc = escape_string($_POST['product_disc']);
    if (strlen($_POST['product_title']) == 0 || strlen($_POST['product_price']) == 0 || strlen($_POST['net_profit']) == 0) {
        array_push($error_array, "please fill this input!");
    } elseif ($product_cat == "categories") {
        $product_cat = escape_string($row['product_cat_id']);
    }



    if(empty($error_array)){

        $idp = escape_string($_GET['edit']);
        $query = query("UPDATE products SET product_name = '$product_title',product_price = '$product_price',net_profit = '$net_profit',product_code = '$product_code',product_description = '$product_disc',product_color = '$product_color',product_size = '$product_size',product_type = '$product_type',product_count = '$product_count',product_cat_id = '$product_cat', date_update = NOW() WHERE id = '$idp'");
        confirm($query);
        echo "<h1><span style='color: #00FFFF;'>The Product has been Updated</span></h1>";
    }

}















?>