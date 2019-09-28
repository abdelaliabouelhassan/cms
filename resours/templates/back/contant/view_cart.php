<div class="dashboard-main-wrapper">
    <div class="dashboard-wrapper">
        <div class="container-fluid  dashboard-content">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <h5 class="card-header">Striped Table</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Price</th>
                                    <th scope="col">Quantity available</th>
                                    <th scope="col">date</th>
                                    <th scope="col">Sell</th>
                                    <th scope="col">Remove</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $query = query("SELECT * FROM cart");
                                confirm($query);

                                while ($row = fetch_array($query)) {

                                    $id = $row['id_cart'];
                                    $query1 = query("SELECT * FROM products where id = '$id'");
                                    confirm($query1);
                                    $row1 = fetch_array($query1);
                                    echo <<<DELIMETER
                                <tr>
                                    <th scope="row">{$row1['id']}</th>
                                    <td>{$row1['product_name']}</td>
                                    <td>{$row1['product_price']}</td>
                                    <td>{$row1['product_count']}</td>
                                    <td>{$row['date']}</td>
                                    <td><a href=""> <a class="btn btn-success" href="../resours/templates/back/fun/fun_view_cart.php?add_p={$row1['id']}"><span class="glyphicon glyphicon-plus"></span>+</a></a></td>
                                    <td> <a class="btn btn-danger" href="../resours/templates/back/fun/fun_view_cart.php?delete_p={$row1['id']}"><span class="glyphicon glyphicon-remove"></span>-</a> </td>
                                </tr>
DELIMETER;
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>