<?php











function products_view()
{
    if (isset($_GET['Search'])) {
        $sr = trim(escape_string($_GET['Search']));
        $query = query("SELECT * FROM products WHERE product_name LIKE '%$sr%' OR product_price LIKE '%$sr%'");
        confirm($query);
        $count = mysqli_num_rows($query);
    } else {
        if(isset($_GET['Page'])){
            $page = trim(escape_string($_GET['Page']));
        }else{
            $page ="";
        }

        if($page == "" || $page == 1){
            $page_1 = 0;
        }
        else{
            $page_1 = ($page * 5 ) -5;
        }
        $query = query("SELECT * FROM products LIMIT $page_1 , 6");
        confirm($query);
        $count = mysqli_num_rows($query);
    }



    while ($row = fetch_array($query)) {


        // $date =  $row['product_date'];


        // $date1 = str_replace('-', '/', $date);
        // $tomorrow = date('Y-m-d', strtotime($date1 . "+2 days"));

        // echo $tomorrow;



        ?>
        <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="product-thumbnail">
                <div class="product-img-head">
                    <div class="product-img">
                        <img src="<?php echo $row['product_image']; ?>" alt="" class="img-fluid"></div>


                    <?php
                            if ($row['product_count'] != 0) {
                                ?>

                        <div class="ribbons"></div>
                        <div class="ribbons-text">good</div>

                    <?php } ?>
                    <?php
                            if ($row['product_count'] == 0) {
                                ?>
                        <div class="ribbons bg-danger"></div>
                        <div class="ribbons-text">END</div>

                    <?php } ?>

                    <?php
                            if ($row['product_count'] <= 3 && $row['product_count'] >= 1) {

                                ?>

                        <div class="ribbons bg-brand"></div>
                        <div class="ribbons-text">close</div>

                    <?php    } ?>

                    <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div>
                </div>
                <div class="product-content">
                    <div class="product-content-head">
                        <h3 class="product-title"><?php echo $row['product_name']; ?></h3>
                        <div class="product-rating d-inline-block">
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                            <i class="fa fa-fw fa-star"></i>
                        </div>
                        <div class="product-price">$<?php echo $row['product_price']; ?></div>
                    </div>
                    <div class="product-btn">
                        <a href="../resours/templates/back/fun/fun_view_cart?cart=<?php echo $row['id']; ?>" class="btn btn-primary">Add to Cart</a>
                        <a href="index?product_details=<?php echo $row['id']; ?>" class="btn btn-outline-light">Details</a>
                        <a href="index?edit=<?php echo $row['id']; ?>" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>



        <?php }
        }


        function filter_cat()
        {
            if (isset($_GET['cat_id'])) {

                $id = $_GET['cat_id'];

                $query = query("SELECT * FROM products WHERE product_cat_id ='$id'");
                confirm($query);
                while ($row = fetch_array($query)) {
                    // $date =  $row['product_date'];


                    // $date1 = str_replace('-', '/', $date);
                    // $tomorrow = date('Y-m-d', strtotime($date1 . "+2 days"));

                    // echo $tomorrow;

                    ?>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="product-thumbnail">
                    <div class="product-img-head">
                        <div class="product-img">
                            <img src="<?php echo $row['product_image']; ?>" alt="" class="img-fluid"></div>
                        <?php
                                    if ($row['product_count'] != 0) {
                                        ?>

                            <div class="ribbons"></div>
                            <div class="ribbons-text">good</div>

                        <?php } ?>
                        <?php
                                    if ($row['product_count'] == 0) {
                                        ?>
                            <div class="ribbons bg-danger"></div>
                            <div class="ribbons-text">END</div>

                        <?php } ?>

                        <?php
                                    if ($row['product_count'] <= 3 && $row['product_count'] >= 1) {

                                        ?>

                            <div class="ribbons bg-brand"></div>
                            <div class="ribbons-text">close</div>

                        <?php    } ?>
                        <div class=""><a href="#" class="product-wishlist-btn"><i class="fas fa-heart"></i></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-content-head">
                            <h3 class="product-title"><?php echo $row['product_name']; ?></h3>
                            <div class="product-rating d-inline-block">
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                                <i class="fa fa-fw fa-star"></i>
                            </div>
                            <div class="product-price">$<?php echo $row['product_price']; ?></div>
                        </div>
                        <div class="product-btn">
                            <a href="../resours/templates/back/fun/fun_view_cart?cart=<?php echo $row['id']; ?>" class="btn btn-primary">Add to Cart</a>
                            <a href="index?product_details=<?php echo $row['id']; ?>" class="btn btn-outline-light">Details</a>
                            <a href="index?edit=<?php echo $row['id']; ?>" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>



<?php
        }
    } else {
        products_view();
    }
}
?>





<?php
function get_cat_felter()
{
    $query = query("SELECT * FROM products_categorys");
    confirm($query);

    while ($row = fetch_array($query)) {
        ?>


        <div class="custom-control custom-checkbox">
            <a class="btn btn-rounded btn-brand" href="index?View&cat_id=<?php echo $row['cat_id']; ?>">
                <?php echo $row['cat_name']; ?>

            </a>

        </div>

    <?php
        }

        // if(isset($_POST['Filter'])){
        // $cat = $_POST['']{

        // }
        // }


    }


    function get_Pagination()
{


    if(isset($_GET['cat_id'])){

        $cat_id = trim(escape_string($_GET['cat_id']));
        $query = query("SELECT * FROM products WHERE product_cat_id = '$cat_id'");
        confirm($query);

    }else{

        $query = query("SELECT * FROM products");
        confirm($query);
        $count = mysqli_num_rows($query);
        $count = $count / 5;
        $count = ceil($count);
        $page = 0;
        if (isset($_GET['Page'])) {
            $page = trim(escape_string($_GET['Page']));
        }

        for ($i = 1; $i <= $count; $i++) {

            if ($page == $i) {
                echo  "<li class='page-item active'><a class='page-link' href='index?View&Page={$i}'>{$i}</a></li>";
            } else {
                echo  "<li class='page-item'><a class='page-link' href='index?View&Page={$i}'>{$i}</a></li>";
            }
        }


    }
}




?>