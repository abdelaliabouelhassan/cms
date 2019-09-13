<?php


$error_array = array();
if (isset($_POST['Cancel'])) {
    redirect("index.php");
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



if (strlen($_POST['product_title']) == 0 || strlen($_POST['product_price']) == 0 || strlen($_POST['net_profit']) == 0) {
    array_push($error_array, "please fill this input!");
} elseif ($product_cat == "categories") {
    array_push($error_array, "please Select categories of the product");
}



// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["product_image"]["tmp_name"]);
    if ($check !== false) {
        echo "<span style='color: #ed3228;'>File is an image - " . $check["mime"] . ".</span>";
        $uploadOk = 1;
        $doicansendtodatabase = 1;
    } else {
        echo "<span style='color: #ed3228;'>File is not an image.</span>";
        $uploadOk = 0;
        $doicansendtodatabase = 1;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "<span style='color: #ed3228;'>Sorry, file already exists.</span>";
    $uploadOk = 0;
    $doicansendtodatabase = 1;
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
    echo "<span style='color: #ed3228;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</span>";
    $uploadOk = 0;
    $doicansendtodatabase = 1;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<span style='color: #ed3228;'>Sorry, your file was not uploaded.</span>";
    $doicansendtodatabase = 1;
    // if everything is ok, try to upload file
} else {

            if($doicansendtodatabase == 0 && empty($error_array)){
            if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
                $product_image = escape_string($target_file);
                $query = query("INSERT INTO products (product_name,product_price,net_profit,product_code,product_image,product_description,product_color,product_size,product_type,product_count,product_cat_id) VALUES('$product_title','$product_price','$net_profit','$product_code','$product_image','$product_disc','$product_color','$product_size','$product_type','$product_count','$product_cat')");
                confirm($query);
                echo "<span style='color: #00FFFF;'>The Product has been Added</span>";
            } else {
                echo "<span style='color: #ed3228;'>Sorry, there was an error uploading your file.</span>";
                $doicansendtodatabase = 1;
            }
            }

}
}


?>