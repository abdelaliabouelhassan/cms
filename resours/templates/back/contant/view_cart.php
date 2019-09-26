<?php
  require "../resours/templates/back/fun/fun_view_cart.php";

?>


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
                                    <th scope="col">Sell</th>
                                    <th scope="col">Remove</th>

                                </tr>
                            </thead>
                            <tbody>
                               <?php cart(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>