<!-- ============================================================== -->
<!-- main wrapper -->
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




            <?php require "../resours/templates/back/fun/fun_products.php";?>










            <div class="row">
                <!-- ============================================================== -->
                <!-- valifation types -->
                <!-- ============================================================== -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Add products</h5>
                        <div class="card-body">
                            <form id="validationform" action="index?add" enctype="multipart/form-data" data-parsley-validate="" novalidate="" method="post">
                                <div class="form-group row">
                                    <?php
                                    if (in_array("please fill this input!", $error_array)) {
                                        echo  "<span style='color: #ed3228;'>please fill this input!</span>";
                                    }

                                    ?>
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product Title</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" required="" placeholder="Title of product" name="product_title" class="form-control">
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
                                        <input type="text" required="" data-parsley-minlength="11" name="product_price" placeholder="Price DH" class="form-control">
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
                                        <input type="text" required="" data-parsley-minlength="11" name="net_profit" placeholder="net profit DH" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product Image</label>
                                    <div class="col-12 col-sm-3 custom-file mb-3">
                                        <input type="file" class="col-12 col-sm-3 custom-file-input" name="product_image" id="customFile">
                                        <label class="col-12 col-sm-3 custom-file-label" for="customFile">File Input</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product code</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="text" required="" name="product_code" placeholder="Code" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product count</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input required="" type="number" min="1" max="100" name="product_count" placeholder="Number between 1 - 100" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Prodict color</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input type="color" required="" data-parsley-pattern="#[A-Fa-f0-9]{6}" name="product_color" placeholder="Hex. Color" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Product Size</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input data-parsley-type="digits" type="text" required="" name="product_size" placeholder="Enter only digits" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Type</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input data-parsley-type="alphanum" type="text" required="" name="product_type" placeholder="Type of Product" class="form-control">
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
                                        <textarea required="" name="product_disc" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row text-right">
                                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                        <button type="submit" class="btn btn-space btn-primary" name="add">Add Product</button>
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

</html>