<div class="container-fluid  dashboard-content">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">archive of all your selling</h5>
                    <p>You can use ctrl-F to find product</p>
                </div>
                <div class="card-body">

                    <div class="table-responsive">

                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                                <tr>
                                    <th>selling Id</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Product Id</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Profit</th>
                                    <th> Order Time</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $query = query("SELECT * FROM the_sales  ORDER BY id DESC");
                                confirm($query);


                                while ($row = fetch_array($query)) {
                                    $product_id =  $row['product_id'];
                                    $query1 = query("SELECT * FROM products  WHERE id = '$product_id'");
                                    confirm($query1);
                                    $row1 = fetch_array($query1)
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'];  ?></td>
                                        <td>
                                            <div class="m-r-10"><img src="<?php echo $row1['product_image'];  ?>" alt="user" class="rounded" width="45"></div>
                                        </td>
                                        <td><?php echo $row1['product_name'];  ?></td>
                                        <td><?php echo $product_id;  ?> </td>
                                        <td><?php echo $row['Quantity'];  ?></td>
                                        <td><?php echo $row['Price'];  ?></td>
                                        <td><?php echo $row['Profit'];  ?></td>
                                        <td><?php echo $row['timeOfSalling'];  ?></td>
                                    </tr>
                                <?php
                                }
                                ?>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>selling Id</th>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Product Id</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Profit</th>
                                    <th> Order Time</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>