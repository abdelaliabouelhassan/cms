<?php











function products_view()
{


    $query = query("SELECT * FROM products");
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
                        <a href="index?product_details=<?php echo $row['id']; ?>" class="btn btn-primary">Add to Cart</a>
                        <a href="index?product_details=<?php echo $row['id']; ?>" class="btn btn-outline-light">Details</a>
                        <a href="index?product_details=<?php echo $row['id']; ?>" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
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
                        <div class="ribbons"></div>
                        <div class="ribbons-text">New</div>
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
                            <a href="index?View&id=<?php echo $row['id']; ?>" class="btn btn-primary">Add to Cart</a>
                            <a href="index?View&id=<?php echo $row['id']; ?>" class="btn btn-outline-light">Details</a>
                            <a href="index?View&id=<?php echo $row['id']; ?>" class="btn btn-outline-light"><i class="fas fa-exchange-alt"></i></a>
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
            <a href="index?View&cat_id=<?php echo $row['cat_id']; ?>">
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
?>