<?php

function redirect($location)
{
    header("Location: $location");
}


function query($sql)
{
    global $connection;

    return mysqli_query($connection, $sql);
}

function confirm($result)
{
    global $connection;
    if (!$result) {
        die("QUERY FAILED : " . mysqli_error($connection));
    }
}

function escape_string($string)
{
    global $connection;

    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result)
{
    return mysqli_fetch_array($result);
}

function get_cat(){

      $query = query("SELECT * FROM products_categorys");
    confirm($query);

    while($row = fetch_array($query)) {

$product_cat =<<<DELIMETER
 <option value="{$row['cat_id']}">{$row['cat_name']}</option>
DELIMETER;
        echo $product_cat;
    }

}


function last_active(){
    $id = $_SESSION['id_user'];
    $query1  = query("UPDATE users SET last_active = NOW() WHERE id = '$id'");
    confirm($query1);
}




?>