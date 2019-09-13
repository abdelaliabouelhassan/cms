<?php


require "../resours/templates/back/fun/fun_Categories.php";

?>

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h1 class="card-header">Add Categories</h1>
            <div class="card-body">
               <?php if(in_array("<span style='color: #ed3228;'>This Categories Is already exist!</span>", $error_array)){
                    echo "<span style='color: #ed3228;'>This Categories Is already exist!</span>";
               }
            elseif (in_array("<span style='color: #00FFFF;'>The categories has been Added</span>", $error_array)) {
              echo "<span style='color: #00FFFF;'>The categories has been Added</span>";
             }
             elseif (in_array("<span style='color: #ed3228;'>Fill this Input pleas</span>",$error_array)) {
                echo "<span style='color: #ed3228;'>Fill this Input pleas</span>";
             }
               ?>
                <form id="validationform" action="index?Categories" enctype="multipart/form-data" data-parsley-validate="" novalidate="" method="post">
                    <div class="form-group row">
                        <div class="col-12 col-sm-8 col-lg-6">
                            <input type="text" required="" placeholder="Add Categories" name="cat" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                            <button type="submit" class="btn btn-space btn-primary" name="add_cat">Add Categories</button>
                            <button type="submit" class="btn btn-space btn-secondary" name="Cancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h1 class="card-header">Delete Categories</h1>
            <div class="card-body">
                <?php
                    if(in_array("<span style='color: #ed3228;'>Please Select Categories</span>",$error_array))
                        echo "<span style='color: #ed3228;'>Please Select Categories</span>";

                    if(in_array("<span style='color: #00FFFF;'>The Categorie has been Deleted</span>",$error_array))
                        echo "<span style='color: #00FFFF;'>The Categorie has been Deleted</span>";
                ?>
                <form id="validationform" action="index?Categories" enctype="multipart/form-data" data-parsley-validate="" novalidate="" method="post">
                    <div class="form-group row">
                        <div class="col-12 col-sm-8 col-lg-6">
                            <select name="product_cat" class=" browser-default custom-select">
                                <option selected>Selecte Categories To Delete</option>
                                <?php get_cat(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                            <button type="submit" class="btn btn-space btn-primary" name="Delete">Delete Categorie</button>
                            <button type="submit" class="btn btn-space btn-secondary" name="Cancel">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>