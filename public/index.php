<?php
include('../resours/config.php');
include(TEMPLATE_BACK . "/header.php");
if (!isset($_SESSION['islogin'])) {
    redirect("login");
}



            ///update day month years net profit is here

            $query = query("SELECT * FROM day_net");
            confirm($query);
            $row = fetch_array($query);
            $tt = $row['time'];
            $nexday = strtotime($tt) + (1 * 24 * 60 * 60);
            $today = time("Y-m-d  h:i:s");
//day
            if($today >= $nexday){
                     $sum_day = $row['Profit'];
                    $query = query("SELECT * FROM week_net");
                    confirm($query);
                    $row = fetch_array($query);
                    $week_net = $row['Profit'];
                    $_7day_net = $week_net + $sum_day;
                    $query = query("UPDATE week_net set Profit = '$_7day_net'");
                    confirm($query);
                    $zero = 0;
                    $query = query("UPDATE day_net set Profit = '$zero', time = NOW()");
                    confirm($query);
            }
 //week


            $query = query("SELECT * FROM week_net");
            confirm($query);
            $row = fetch_array($query);
            $tt = $row['time'];
            $nexweek = strtotime($tt) + (7 * 24 * 60 * 60);
            $today = time("Y-m-d  h:i:s");

            if ($today >= $nexweek) {
                $sum_week = $row['Profit'];
                $query = query("SELECT * FROM month_net");
                confirm($query);
                $row = fetch_array($query);
                $month_net = $row['Profit'];
                $_30day_net = $month_net + $sum_week;
                $query = query("UPDATE month_net set Profit = '$_30day_net'");
                confirm($query);
                $zero = 0;
                $query = query("UPDATE week_net set Profit = '$zero', time = NOW()");
                confirm($query);
            }
  //month
            $query = query("SELECT * FROM month_net");
            confirm($query);
            $row = fetch_array($query);
            $tt = $row['time'];
            $nextmonth = strtotime($tt) + (30 * 24 * 60 * 60);
            $today = time("Y-m-d  h:i:s");

            if ($today >= $nextmonth) {
                $sum_month = $row['Profit'];
                $query = query("SELECT * FROM year_net");
                confirm($query);
                $row = fetch_array($query);
                $year_net = $row['Profit'];
                $_360day_net = $year_net + $sum_month;
                $query = query("UPDATE year_net set Profit = '$_360day_net'");
                confirm($query);
                $zero = 0;
                $query = query("UPDATE month_net set Profit = '$zero', time = NOW()");
                confirm($query);
            }

            //year

            $query = query("SELECT * FROM year_net");
            confirm($query);
            $row = fetch_array($query);
            $tt = $row['time'];
            $nextyear = strtotime($tt) + (365 * 24 * 60 * 60);
            $today = time("Y-m-d  h:i:s");

            if ($today >= $nextyear) {

                $zero = 0;
                $query = query("UPDATE year_net set Profit = '$zero', time = NOW()");
                confirm($query);
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
    if (isset($_GET['user'])) {
        include(TEMPLATE_BACK . "/contant/user.php");
    }

    if (isset($_GET['Search'])) {
        include(TEMPLATE_BACK . "/contant/View.php");
    }




}







if($_SESSION['roll'] == "Moderator"){
    if (isset($_GET['View'])) {
        include(TEMPLATE_BACK . "/contant/View.php");
    }
    if (isset($_GET['user'])) {
        include(TEMPLATE_BACK . "/contant/user.php");
    }
    if (isset($_GET['Search'])) {
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