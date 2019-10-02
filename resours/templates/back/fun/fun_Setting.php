<?php


$error_array = array();

if(isset($_POST['Save'])){

    $username =  trim(escape_string($_POST['User_name']));
    $password = trim(escape_string($_POST['password']));
    $log_key =  trim(escape_string($_POST['log_key']));
    $id = $_SESSION['id_user'];
    if(strlen($username) == 0 || strlen($password) == 0 || strlen($log_key) == 0 ){
        array_push($error_array, "<h1><span style='color: #ed3228;'>Please Fill all Inputs.</span></h1>");
    }
if(empty($error_array)){

     $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = query("UPDATE users SET username ='$username',password ='$hash',log_name='$log_key',id_firTime='no' WHERE id = '$id'");
    confirm($query);
    $_SESSION['is_firsttime'] = "no";
    redirect("index?Setting");
}

}




if(isset($_POST['save2'])){
    $email =  trim(escape_string($_POST['email']));
    $phone = trim(escape_string($_POST['Phone']));
    //$image =  trim(escape_string($_FILES['Image']));
    $target_dir = "uploads/image_prof/";
    $target_file = $target_dir . basename($_FILES["Image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $ifican = 0;
    $id = $_SESSION['id_user'];
    if (strlen($email) == 0 || strlen($phone) == 0 ) {
        array_push($error_array, "<h1><span style='color: #ed3228;'>Please Fill all Inputs.</span></h1>");
    }
    define('UPLOAD_DIR', 'uploads/image_prof/');
    $fileName = $_FILES['Image'];


    // function to rename file
    function update_file_name($file)
    {
        $pos = strrpos($file, '.');
        $ext = substr($file, $pos);
        $dir = strrpos($file, '/');
        $dr  = substr($file, 0, ($dir + 1));

        $arr = explode('/', $file);
        $fName = trim($arr[(count($arr) - 1)], $ext);

        $exist = FALSE;
        $i = 2;
        while (!$exist) {
            if (file_exists($file . $i) || file_exists($file)) {
                continue;
            } else {
                $exist = TRUE;
                $rd = rand();
                $file = $dr . $fName . $rd . $ext;
            }
            $i++;
        }

        return $file;
    }

    if (file_exists($target_file)) {
        $ifican = 1;
        $updatedFileName = update_file_name($fileName['name']);

        move_uploaded_file($fileName['tmp_name'], UPLOAD_DIR . $updatedFileName);
    }

    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "<h1><span style='color: #ed3228;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</span></h1>";
        $uploadOk = 0;
        $doicansendtodatabase = 1;
    }
    if ($uploadOk == 0) {
        echo "<h1><span style='color: #ed3228;'>Sorry, your file was not uploaded.</span></h1>";
        $doicansendtodatabase = 1;
        // if everything is ok, try to upload file
    }



    if(empty( $doicansendtodatabase == 0 && $error_array)){
        if ($ifican == 1) {
            $image = escape_string(UPLOAD_DIR . $updatedFileName);
        $query = query("UPDATE users SET email ='$email',phone ='$phone', image='$image' WHERE id = '$id'");
        confirm($query);
        redirect("index?Setting");
    }else{
            if (move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file)){
                $image = escape_string($target_file);
                $query = query("UPDATE users SET email ='$email',phone ='$phone', image='$image' WHERE id = '$id'");
                confirm($query);
                redirect("index?Setting");
            } else {

                echo "<h1><span style='color: #ed3228;'>Sorry, there was an error uploading your file.</span></h1>";
                $doicansendtodatabase = 1;
            }

    }
    }


}


if(isset($_POST['Cancel'])){
    redirect("index");
}




















?>