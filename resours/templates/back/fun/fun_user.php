<?php



$id = escape_string($_GET['user']);

if(isset($_GET['delete'])){
    $ro = "Moderator";
   $query = query("DELETE  FROM users WHERE id = '$id' AND roll ='$ro'");
   confirm($query);
   redirect("index?Account");

}

function get_account_info($name)
{
    $id = escape_string($_GET['user']);
    $query = query("SELECT * FROM users WHERE id = '$id'");
    confirm($query);
    $row = fetch_array($query);
    return $row[$name];
}

$error_arreay = array();
if ($_SESSION['roll'] == "Admin") {
if (isset($_POST['Submit'])) {

    $username = trim(escape_string($_POST['name']));
    $log_key = trim(escape_string($_POST['log_key']));
    $password = trim(escape_string($_POST['password']));
    $monthly = escape_string($_POST['Monthly_Salary']);
    $roll = escape_string($_POST['roll']);

    if (strlen($username) == 0 || strlen($log_key) == 0 || strlen($password) == 0 ||  strlen($roll) == 0 || strlen($monthly) == 0) {
        array_push($error_arreay, "<span style='color: #00FFFF;'>Please Fill All Inputs !</span>");
    }

    if ($roll == "Select") {
        array_push($error_arreay, "<span style='color: #00FFFF;'>Please Choose User Roll</span>");
    }


    if (empty($error_arreay)) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = query("UPDATE  users  SET username = '$username',password = '$password',log_name = '$log_key', roll = '$roll' ,monthly = '$monthly' WHERE id = '$id'");
        confirm($query);
        array_push($error_arreay, "<span style='color: #0318fc;'>The User Has Been Added !</span>");
    }
}
}

if ($_SESSION['roll'] == "Moderator") {
    if (isset($_POST['Submit'])) {

        $username = trim(escape_string($_POST['name']));
        $email = trim(escape_string($_POST['email']));
        $adress = trim(escape_string($_POST['adress']));
        $phone = escape_string($_POST['phone']);


        if (strlen($username) == 0 || strlen($email) == 0 || strlen($adress) == 0 ||  strlen($phone) == 0 ) {
            array_push($error_arreay, "<span style='color: #00FFFF;'>Please Fill All Inputs !</span>");
        }




        if (empty($error_arreay)) {

            $query = query("UPDATE  users  SET username = '$username',email = '$email' , adress = '$adress' , phone = '$phone' WHERE id = '$id'");
            confirm($query);
            array_push($error_arreay, "<span style='color: #0318fc;'>The User Has Been Added !</span>");
        }
    }
}


?>