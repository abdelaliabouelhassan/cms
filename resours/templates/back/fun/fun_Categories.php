<?php


$error_array = array();

//add cat
if(isset($_POST['add_cat'])){

$cat_name = escape_string($_POST['cat']);

$query  = query("SELECT * FROM products_categorys WHERE cat_name ='$cat_name'");
confirm($query);
if(strlen($cat_name)!=0){
        if (mysqli_num_rows($query) == 0) {
            array_push($error_array, "<span style='color: #00FFFF;'>The categories has been Added</span>");
            $query  = query("INSERT INTO  products_categorys (cat_name) VALUES('$cat_name')");
            confirm($query);
        } else {
            array_push($error_array, "<span style='color: #ed3228;'>This Categories Is already exist!</span>");
        }
}
else{
        array_push($error_array, "<span style='color: #ed3228;'>Fill this Input pleas</span>");
}

}

///delete cat

if(isset($_POST['Delete'])){
    $cat = $_POST['product_cat'];
    if($cat != "Selecte Categories To Delete"){
        array_push($error_array, "<span style='color: #00FFFF;'>The Categorie has been Deleted</span>");
        $query = query("DELETE FROM products_categorys WHERE cat_id = $cat");
        confirm($query);
    }else{
        array_push($error_array, "<span style='color: #ed3228;'>Please Select Categories</span>");
    }

}




?>