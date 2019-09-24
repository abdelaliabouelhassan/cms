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

                if($_SERVER['REQUEST_URI']== "/cms/public/index.php" || $_SERVER['REQUEST_URI'] == "/cms/public/index"){
                           include(TEMPLATE_BACK . "/contant/indexwraper.php");
                }

                if(isset($_GET['add'])){
                    include(TEMPLATE_BACK . "/contant/Add_Products.php");
                }

            if (isset($_GET['Categories'])) {
                include(TEMPLATE_BACK . "/contant/Categories.php");
            }

            if(isset($_GET['View'])){
                include(TEMPLATE_BACK . "/contant/View.php");
            }

            if (isset($_GET['product_details'])) {
                include(TEMPLATE_BACK . "/contant/product_details.php");
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