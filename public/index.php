<?php
include('../resours/config.php');
include(TEMPLATE_BACK . "/header.php");
if (!isset($_SESSION['islogin'])) {
    redirect("login");
}


?>


<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php
        include(TEMPLATE_BACK . "/top_side.php");


        ?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php
        include(TEMPLATE_BACK . "/left_side.php");
        ?>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->



        <div class="dashboard-wrapper">
            <?php
            if ($_SESSION['is_firsttime'] == 'yes') {

                ?>


                <div class="card-body border-top">
                    <h4>Important</h4>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hi welcome sir !</strong> You should change the password and log key in setting
                        <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </a>
                    </div>
                </div>

            <?php } ?>




            <?php
last_active();
if($_SESSION['roll'] == "Admin"){
    if ($_SERVER['REQUEST_URI'] == "/cms/public/index.php" || $_SERVER['REQUEST_URI'] == "/cms/public/index" || $_SERVER['REQUEST_URI'] == "/cms/public/") {
        include(TEMPLATE_BACK . "/contant/indexwraper.php");
    }

    if (isset($_GET['add'])) {
        include(TEMPLATE_BACK . "/contant/Add_Products.php");
    }

    if (isset($_GET['Categories'])) {
        include(TEMPLATE_BACK . "/contant/Categories.php");
    }

    if (isset($_GET['View'])) {
        include(TEMPLATE_BACK . "/contant/View.php");
    }

    if (isset($_GET['product_details'])) {
        include(TEMPLATE_BACK . "/contant/product_details.php");
    }

    if (isset($_GET['edit'])) {
        include(TEMPLATE_BACK . "/contant/edit.php");
    }

    if (isset($_GET['cart'])) {
        include(TEMPLATE_BACK . "/contant/view_cart.php");
    }

    if (isset($_GET['Setting'])) {
        include(TEMPLATE_BACK . "/contant/Setting.php");
    }

    if (isset($_GET['Account'])) {
        include(TEMPLATE_BACK . "/contant/Account.php");
    }
    if (isset($_GET['add_user'])) {
        include(TEMPLATE_BACK . "/contant/add_user.php");
    }
}

if($_SESSION['roll'] == "Moderator"){
    if (isset($_GET['View'])) {
        include(TEMPLATE_BACK . "/contant/View.php");
    }

}





            ?>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php
            include(TEMPLATE_BACK . "/footer.php");
            ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>