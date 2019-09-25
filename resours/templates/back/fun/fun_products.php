<?php


$error_array = array();

    if (isset($_POST['Cancel'])) {
        redirect("index");
    }


 if (isset($_POST['add'])) {
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
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$ifican = 0;

if (strlen($_POST['product_title']) == 0 || strlen($_POST['product_price']) == 0 || strlen($_POST['net_profit']) == 0) {
    array_push($error_array, "please fill this input!");
} elseif ($product_cat == "categories") {
    array_push($error_array, "please Select categories of the product");
}

if(strlen($_POST['product_code']) == 0 || strlen($_POST['product_size']) == 0 || strlen($_POST['product_type']) == 0 || strlen($_POST['product_disc']) == 0){
        $product_code = "#p".rand();
        $product_size = "No";
        $product_type = "No";
        $product_disc = "There are several factors as to why the product descriptions didnâ€™t convert well. Itâ€™s possible they werenâ€™t written correctly for the audience, they were placed in a less visible area, or were written in the wrong format. However, when it comes";
}

    define('UPLOAD_DIR', 'uploads/');
    $fileName = $_FILES['product_image'];


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



// Check if file already exists
if (file_exists($target_file)) {
        $ifican = 1;
        $updatedFileName = update_file_name($fileName['name']);

        move_uploaded_file($fileName['tmp_name'], UPLOAD_DIR . $updatedFileName);
}
// Check file size
//         if ($_FILES["product_image"]["size"] > 500000) {
//             echo "<span style='color: #ed3228;'>Sorry, your file is too large.</span>";
//             $uploadOk = 0;
// $doicansendtodatabase = 1;
//         }
// Allow certain file formats
if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "<h1><span style='color: #ed3228;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</span></h1>";
    $uploadOk = 0;
    $doicansendtodatabase = 1;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<h1><span style='color: #ed3228;'>Sorry, your file was not uploaded.</span></h1>";
    $doicansendtodatabase = 1;
    // if everything is ok, try to upload file
} else {

            if($doicansendtodatabase == 0 && empty($error_array)){
                if($ifican == 1){
                $product_image = escape_string(UPLOAD_DIR . $updatedFileName);
                $query = query("INSERT INTO products (product_name,product_price,net_profit,product_code,product_image,product_description,product_color,product_size,product_type,product_count,product_cat_id) VALUES('$product_title','$product_price','$net_profit','$product_code','$product_image','$product_disc','$product_color','$product_size','$product_type','$product_count','$product_cat')");
                confirm($query);
                echo "<h1><span style='color: #00FFFF;'>The Product has been Added</span></h1>";
                }
                else{
                if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {




                    $product_image = escape_string($target_file);

                    $query = query("INSERT INTO products (product_name,product_price,net_profit,product_code,product_image,product_description,product_color,product_size,product_type,product_count,product_cat_id) VALUES('$product_title','$product_price','$net_profit','$product_code','$product_image','$product_disc','$product_color','$product_size','$product_type','$product_count','$product_cat')");
                    confirm($query);
                    echo "<h1><span style='color: #00FFFF;'>The Product has been Added</span></h1>";
                } else {

                    echo "<h1><span style='color: #ed3228;'>Sorry, there was an error uploading your file.</span></h1>";
                    $doicansendtodatabase = 1;
                }
                }

            }

}
}


?>