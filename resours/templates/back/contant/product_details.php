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







            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">E-commerce Product Single </h2>
                        <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">E-coommerce</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">E-Commerce Product Single</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <?php

            if (isset($_GET['product_details'])) {
                $id_selected =  escape_string($_GET['product_details']);
                $query = query("SELECT * FROM products WHERE id = '$id_selected'");
                confirm($query);
                $row = fetch_array($query);
            }
            $error_array = array();
            if (isset($_POST['sell'])) {
                $Quantity = trim(escape_string($_POST['Quantity']));
                $price = trim(escape_string($_POST['price']));
                $Profit = trim(escape_string($_POST['Profit']));
                $Quantity_available =  $row['product_count'];
                    if($Quantity_available == 0){
              array_push($error_array, "<span style='color: #ed3228;'>Sorry there is no Quantity available</span>");
                    }
                if (strlen($price) == 0 || strlen($Profit) == 0) {
                    array_push($error_array, "<span style='color: #ed3228;'>Fill Price Input or Profit Input</span>");
                } if(empty($error_array)) {
                    $query = query("INSERT INTO the_sales (Quantity,Price,Profit,product_id) VALUES('$Quantity','$price','$Profit','$id_selected')");
                    confirm($query);
             $Quantity_available = $Quantity_available -  $Quantity;
             $query = query("UPDATE products set product_count = ('$Quantity_available') WHERE id = ('$id_selected')");
             confirm($query);
                }
            }

            ?>

            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pr-xl-0 pr-lg-0 pr-md-0  m-b-30">
                            <div class="product-slider">
                                <div id="productslider-1" class="product-carousel carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="" src="<?php echo $row['product_image']; ?>" width="300" height="370">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pl-xl-0 pl-lg-0 pl-md-0 border-left m-b-30">
                            <?php if (in_array("<span style='color: #ed3228;'>Fill Price Input or Profit Input</span>", $error_array)) {
                                echo "<span style='color: #ed3228;'>Fill Price Input or Profit Input</span><br>";
                            }
                            if (in_array("<span style='color: #ed3228;'>Sorry there is no Quantity available</span>", $error_array)) {
                                echo "<span style='color: #ed3228;'>Sorry there is no Quantity available</span><br>";
                            }
                            ?>
                            <form action="index?product_details=<?php echo  $id_selected; ?>" method="post">
                                <div class="product-details">
                                    <div class="border-bottom pb-3 mb-3">
                                        <h2 class="mb-3"><?php echo $row['product_name']; ?></h2>
                                        <div class="product-rating d-inline-block float-right">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                        </div>
                                        <h3 class="mb-0 text-primary">$<?php echo $row['product_price']; ?></h3>
                                    </div>
                                    <div class="product-colors border-bottom">
                                        <h4>Product Color</h4>

                                        <input type="" id="hue-demo" class="form-control demo" data-control="hue" style="background-color: <?php echo $row['product_color']; ?>;">
                                    </div>
                                    <div class="product-size border-bottom">
                                        <h4>Size</h4>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-outline-light"><?php echo $row['product_size']; ?></button>

                                        </div>
                                        <h4>Quantity available</h4>
                                        <div class="btn-group" role="group" aria-label="First group">
                                            <button type="button" class="btn btn-outline-light"><?php echo $row['product_count']; ?></button>

                                        </div>
                                        <div class="product-qty">
                                            <h4>Quantity</h4>
                                            <div class="quantity">
                                                <input type="number" min="1" max="9" step="1" value="1" name="Quantity">
                                            </div>
                                        </div>
                                        <div class="">
                                            <h4>Price</h4>
                                            <div class="">
                                                <input type="text" class="form-control" name="price">
                                            </div>
                                        </div>
                                        <div class="">
                                            <h4>Net Profit</h4>
                                            <div class="">
                                                <input type="text" class="form-control" name="Profit">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-description">
                                        <h4 class="mb-1">Descriptions</h4>
                                        <p><?php echo $row['product_description']; ?></p>
                                        <input type="submit" value="Sell is done" class="btn btn-primary btn-block btn-lg" name="sell">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-b-60">
                            <div class="simple-card">
                                <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active border-left-0" id="product-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="product-tab-1" aria-selected="true">Descriptions</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent5">
                                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="product-tab-1">
                                        <p><?php echo $row['product_description']; ?></p>
                                        <ul class="list-unstyled arrow">

                                            <li> dont forget to enter the Quantity</li>
                                            <li>dont forget to enter the Net Profit</li>
                                            <li>Donec at leo sed nisl vestibulum fermentum.</li>

                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
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