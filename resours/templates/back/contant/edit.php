<!-- ============================================================== -->
<div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <!-- ============================================================== -->
            <!-- pageheader -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- end horizontal form -->
            <!-- ============================================================== -->



            <?php
            if (isset($_GET['edit'])) {
                $id_p = escape_string($_GET['edit']);
                $query = query("SELECT * FROM products WHERE id = '$id_p'");
                confirm($query);
                $row = fetch_array($query);
            }

            if (isset($_POST['Delete'])) {
                $query = query("DELETE FROM products WHERE id='$id_p'");
                confirm($query);
                unlink($row["product_image"]);
                redirect("index?View");
            }


            ///upload image
            if (isset($_POST['upimg'])) {
                $error_array = array();
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($_FILES["product_image"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $doicansendtodatabase = 0;



                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    echo "<h1><span style='color: #ed3228;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</span></h1>";
                    $uploadOk = 0;
                    array_push($error_array, "er1");
                    $doicansendtodatabase = 1;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    array_push($error_array, "er");
                    echo "<h1><span style='color: #ed3228;'>Sorry, your file was not uploaded.</span></h1>";
                    $doicansendtodatabase = 1;
                    // if everything is ok, try to upload file
                } else {

                    if ($doicansendtodatabase == 0 && empty($error_array)) {
                        if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {


                            unlink($row['product_image']);
                            $product_image = escape_string($target_file);
                            $query = query("UPDATE products SET product_image = '$product_image' WHERE id = '$id_p' ");
                            echo "<h1><span style='color: #00FFFF;'>The Product has been Added</span></h1>";
                            redirect("index?edit=" . $id_p);
                        } else {
                            array_push($error_array, "er3");
                            echo "<h1><span style='color: #ed3228;'>Sorry, there was an error uploading your file.</span></h1>";
                            $doicansendtodatabase = 1;
                        }
                    }
                }
            }





            ?>

            <?php require "../resours/templates/back/fun/fun_edit.php"; ?>



            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                <form action="index?edit=<?php echo $id_p; ?>" method="post" enctype="multipart/form-data">
                    <div class="card">
                        <h5 class="card-header">Update Product Image</h5>
                        <div class="card-body">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?php echo $row['product_image']; ?>" alt="First slide">
                                        <input type="file" name="product_image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-space btn-secondary" name="upimg">Update Image</button>
                    </div>
                </form>
            </div>


            <div class="row">
                <!-- ============================================================== -->
                <!-- valifation types -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Update products</h5>
                        <div class="card-body">
                            <form id="validationform" action="index?edit=<?php echo $id_p; ?>" enctype="multipart/form-data" data-parsley-validate="" novalidate="" method="post">
                                <div class="form-group row">
                                    <?php
                                    if (in_array("please fill this input!", $error_array)) {
                                        echo  "<span style='color: #ed3228;'>please fill this input!</span>";
                                    }

                                    ?>
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product Title</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" required="" placeholder="Title of product" value="<?php echo $row["product_name"] ?>" name="product_title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php
                                    if (in_array("please fill this input!", $error_array)) {
                                        echo  "<span style='color: #ed3228;'>please fill this input!</span>";
                                    }

                                    ?>
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product Price</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" required="" data-parsley-minlength="11" value="<?php echo $row["product_price"] ?>" name="product_price" placeholder="Price DH" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php
                                    if (in_array("please fill this input!", $error_array)) {
                                        echo  "<span style='color: #ed3228;'>please fill this input!</span>";
                                    }

                                    ?>
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">net profit</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" required="" data-parsley-minlength="11" name="net_profit" value="<?php echo $row["net_profit"] ?>" placeholder="net profit DH" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product code</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" required="" name="product_code" value="<?php echo $row["product_code"] ?>" placeholder="Code" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product Quantity</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input required="" type="number" min="1" max="100" name="product_count" value="<?php echo $row["product_count"] ?>" placeholder="Number between 1 - 100" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Prodict color</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="color" required="" data-parsley-pattern="#[A-Fa-f0-9]{6}" value="<?php echo $row["product_color"] ?>" name="product_color" placeholder="Hex. Color" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product Size</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input data-parsley-type="digits" type="text" required="" value="<?php echo $row["product_size"] ?>" name="product_size" placeholder="Enter only digits" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Type</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input data-parsley-type="alphanum" type="text" required="" name="product_type" value="<?php echo $row["product_type"] ?>" placeholder="Type of Product" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <?php
                                    if (in_array("please Select categories of the product", $error_array)) {
                                        echo  "<span style='color: #ed3228;'>please Select categories of the product</span>";
                                    }

                                    ?>
                                    <select name="product_cat" class=" browser-default custom-select">
                                        <option selected>categories</option>
                                        <?php get_cat(); ?>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">description</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <textarea required="" rows="4" cols="50" name="product_disc" class="form-control"><?php echo $row["product_description"] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                        <button type="submit" class="btn btn-space btn-primary" name="update">Update Product</button>
                                        <button type="submit" class="btn btn-space bg-danger" name="Delete">Delete Product</button>
                                        <button type="submit" class="btn btn-space btn-secondary" name="Cancel">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end valifation types -->
                <!-- ============================================================== -->
            </div>

        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/vendor/parsley/parsley.js"></script>
<script src="../assets/libs/js/main-js.js"></script>
<script>
    $('#form').parsley();
</script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
</body>