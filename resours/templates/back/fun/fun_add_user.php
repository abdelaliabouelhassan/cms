<?php

$error_arreay = array();

if(isset($_POST['Submit'])){

$username = trim(escape_string($_POST['name']));
$log_key = trim(escape_string($_POST['log_key']));
$password = trim(escape_string($_POST['password']));
$password_re = trim(escape_string($_POST['password_re']));
$monthly = escape_string($_POST['Monthly_Salary']);
$roll = escape_string($_POST['roll']);
$email = "undefined";
$phone = "undefined";
$image ="uploads/avatar-1.jpg";
$status = "Online";
$isfi = "no";

    if(strlen($username) == 0 || strlen($log_key) == 0 || strlen($password) == 0 || strlen($password_re) == 0 || strlen($roll) == 0 || strlen($monthly) == 0 )
    {
array_push($error_arreay, "<span style='color: #00FFFF;'>Please Fill All Inputs !</span>");
    }
    if($password != $password_re){
array_push($error_arreay, "<span style='color: #00FFFF;'>The Password Not Match</span>");
    }
if($roll == "Select"){
    array_push($error_arreay, "<span style='color: #00FFFF;'>Please Choose User Roll</span>");
}


if(empty($error_arreay)){
        $password = password_hash($password, PASSWORD_DEFAULT);
    $query = query("INSERT INTO users (username,password,log_name,roll,monthly,status,email,phone,image,id_firTime) VALUES ('$username','$password','$log_key','$roll','$monthly','$status','$email','$phone','$image','$isfi')");
    confirm($query);
        array_push($error_arreay, "<span style='color: #0318fc;'>The User Has Been Added !</span>");
}

}


if(isset($_POST['Cancel'])){
    redirect("index");
}










?>