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

function users_online(){



    $seasion = session_id();
    $time = time();
    $time_out_log_in = 30;
    $time_out =   $time - $time_out_log_in;


    $query = query("SELECT * FROM users_online WHERE session = '$seasion'");
    confirm($query);
    $count = mysqli_num_rows($query);
    if ($count == null) {
        $query  = query("INSERT INTO users_online (session,time) values('$seasion','$time')");
        confirm($query);
    } else {
        $query = query("UPDATE users_online SET  time='$time' WHERE session='$seasion'");
        confirm($query);
    }


    $query = query("SELECT * FROM users_online WHERE time >'$time_out'");
    confirm($query);
    $count = mysqli_num_rows($query);
    echo $count;

}


?>