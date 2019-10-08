   <div class="dashboard-ecommerce">
       <div class="container-fluid dashboard-content ">
           <!-- ============================================================== -->
           <!-- pageheader  -->
           <!-- ============================================================== -->
           <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                   <div class="page-header">
                       <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                       <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                       <div class="page-breadcrumb">
                           <nav aria-label="breadcrumb">
                               <ol class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                   <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                               </ol>
                           </nav>
                       </div>
                   </div>
               </div>
           </div>
           <!-- ============================================================== -->
           <!-- end pageheader  -->
           <!-- ============================================================== -->
           <div class="ecommerce-widget">
               <?php

                $query_day = query("SELECT * FROM day_net");
                confirm($query_day);
                $row_day = fetch_array($query_day);
                $query_day = query("SELECT * FROM week_net");
                confirm($query_day);
                $row_week = fetch_array($query_day);
                $query_day = query("SELECT * FROM month_net");
                confirm($query_day);
                $row_month = fetch_array($query_day);
                $query_day = query("SELECT * FROM year_net");
                confirm($query_day);
                $row_year = fetch_array($query_day);
                ?>
               <div class="row">
                   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                       <div class="card">
                           <div class="card-body">
                               <h5 class="text-muted">Daily Net Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">$<?php echo $row_day['Profit'];    ?></h1>
                               </div>
                               <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                   <span><i class="fa fa-fw fa-arrow-up"></i></span><span>6.86%</span>
                               </div>
                           </div>
                           <div id="sparkline-revenue"></div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                       <div class="card">
                           <div class="card-body">
                               <h5 class="text-muted">Weekly Net Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">$<?php echo $row_week['Profit'];    ?></h1>
                               </div>
                               <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                   <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                               </div>
                           </div>
                           <div id="sparkline-revenue2"></div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                       <div class="card">
                           <div class="card-body">
                               <h5 class="text-muted">Monthly Net Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">$<?php echo $row_month['Profit'];    ?></h1>
                               </div>
                               <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                   <span>N/A</span>
                               </div>
                           </div>
                           <div id="sparkline-revenue3"></div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                       <div class="card">
                           <div class="card-body">
                               <h5 class="text-muted">Annual Net Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">$<?php echo $row_year['Profit'];    ?></h1>
                               </div>
                               <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                   <span>-2.00%</span>
                               </div>
                           </div>
                           <div id="sparkline-revenue4"></div>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <!-- ============================================================== -->
                   <?php

                    $query_day = query("SELECT * FROM day_g");
                    confirm($query_day);
                    $row_day = fetch_array($query_day);
                    $query_day = query("SELECT * FROM week_g");
                    confirm($query_day);
                    $row_week = fetch_array($query_day);
                    $query_day = query("SELECT * FROM month_g");
                    confirm($query_day);
                    $row_month = fetch_array($query_day);
                    $query_day = query("SELECT * FROM year_g");
                    confirm($query_day);
                    $row_year = fetch_array($query_day);
                    ?>
                   <!-- ============================================================== -->
                   <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                       <!-- ============================================================== -->
                       <!-- top perfomimg  -->
                       <!-- ============================================================== -->
                       <div class="card border-3 border-top border-top-primary">
                           <div class="card-body">
                               <h5 class="text-muted">Daily General Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">$<?php echo $row_day['profit'];    ?></h1>
                               </div>
                               <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                   <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                               </div>
                           </div>
                       </div>


                       <div class="card border-3 border-top border-top-primary">
                           <div class="card-body">
                               <h5 class="text-muted">Weekly General Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">$<?php echo $row_week['profit'];    ?></h1>
                               </div>
                               <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                   <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                               </div>
                           </div>
                       </div>
                       <div class="card border-3 border-top border-top-primary">
                           <div class="card-body">
                               <h5 class="text-muted">Monthly General Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">$<?php echo $row_month['profit'];    ?></h1>
                               </div>
                               <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                   <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                               </div>
                           </div>
                       </div>
                       <div class="card border-3 border-top border-top-primary">
                           <div class="card-body">
                               <h5 class="text-muted">Annual General Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">$<?php echo $row_year['profit'];    ?></h1>
                               </div>
                               <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                   <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                               </div>
                           </div>
                       </div>

                       <!-- ============================================================== -->
                       <!-- end top perfomimg  -->
                       <!-- ============================================================== -->
                   </div>
                   <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                       <div class="card">
                           <h5 class="card-header">Total Revenue</h5>
                           <div class="card-body">
                               <div id="morris_totalrevenue"></div>
                           </div>
                           <div class="card-footer">
                               <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                           </div>
                       </div>
                   </div>
                   <!-- ============================================================== -->

                   <!-- recent orders  -->
                   <!-- ============================================================== -->

                   <!-- ============================================================== -->
                   <!-- end recent orders  -->



                   <!-- ============================================================== -->
                   <!-- end customer acquistion  -->

                   <!-- ============================================================== -->
               </div>
               <div class="row">
                   <!-- ============================================================== -->
                   <!-- product category  -->
                   <!-- ============================================================== -->

                   <!-- ============================================================== -->
                   <!-- end product category  -->
                   <!-- product sales  -->
                   <!-- ============================================================== -->
                   <!-- ============================================================== -->
                   <!-- end product sales  -->

               </div>

               <div class="row">
                   <!-- ============================================================== -->
                   <!-- sales  -->
                   <!-- ============================================================== -->
                   <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                       <div class="card">
                           <h5 class="card-header">Recent selling</h5>
                           <div class="card-body p-0">
                               <div class="table-responsive">
                                   <table class="table">
                                       <thead class="bg-light">
                                           <tr class="border-0">
                                               <th class="border-0">selling Id</th>
                                               <th class="border-0">Image</th>
                                               <th class="border-0">Product Name</th>
                                               <th class="border-0">Product Id</th>
                                               <th class="border-0">Quantity</th>
                                               <th class="border-0">Price</th>
                                               <th class="border-0">Profit</th>
                                               <th class="border-0">Order Time</th>
                                               <th class="border-0">Status</th>
                                           </tr>
                                       </thead>

                                       <tbody>
                                           <?php


                                            $query = query("SELECT * FROM the_sales  ORDER BY id DESC LIMIT 6");
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
                                                   <td><span class="badge-dot badge-success mr-1"></span>Done </td>
                                               </tr>
                                           <?php  }



                                            ?>



                                           <tr>
                                               <td colspan="9"><a href="index?Recent_Selling" class="btn btn-outline-light float-right">View Details</a></td>
                                           </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>

                   </div>
                   <!-- ============================================================== -->
                   <!-- end sales  -->
                   <!-- ============================================================== -->
                   <!-- ============================================================== -->
                   <!-- new customer  -->
                   <!-- ============================================================== -->

                   <!-- ============================================================== -->
                   <!-- end new customer  -->
                   <!-- ============================================================== -->
                   <!-- ============================================================== -->
                   <!-- visitor  -->
                   <!-- ============================================================== -->

                   <!-- ============================================================== -->
                   <!-- end visitor  -->
                   <!-- ============================================================== -->
                   <!-- ============================================================== -->
                   <!-- total orders  -->
                   <!-- ============================================================== -->

                   <!-- ============================================================== -->
                   <!-- end total orders  -->
                   <!-- ============================================================== -->
               </div>

               <!-- ============================================================== -->
               <!-- total revenue  -->
               <!-- ============================================================== -->


               <!-- ============================================================== -->
               <!-- ============================================================== -->
               <!-- category revenue  -->
               <!-- ============================================================== -->

               <!-- ============================================================== -->
               <!-- end category revenue  -->
               <!-- ============================================================== -->




               <!-- ============================================================== -->
               <!-- end sales traffice source  -->
               <!-- ============================================================== -->
               <!-- ============================================================== -->
               <!-- sales traffic country source  -->
               <!-- ============================================================== -->

               <!-- ============================================================== -->
               <!-- end sales traffice country source  -->
               <!-- ============================================================== -->
           </div>
       </div>
   </div>