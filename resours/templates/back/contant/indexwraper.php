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

                   <!-- ============================================================== -->

                   <!-- recent orders  -->
                   <!-- ============================================================== -->
                   <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                       <div class="card">
                           <h5 class="card-header">Recent Orders</h5>
                           <div class="card-body p-0">
                               <div class="table-responsive">
                                   <table class="table">
                                       <thead class="bg-light">
                                           <tr class="border-0">
                                               <th class="border-0">#</th>
                                               <th class="border-0">Image</th>
                                               <th class="border-0">Product Name</th>
                                               <th class="border-0">Product Id</th>
                                               <th class="border-0">Quantity</th>
                                               <th class="border-0">Price</th>
                                               <th class="border-0">Order Time</th>
                                               <th class="border-0">Customer</th>
                                               <th class="border-0">Status</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <tr>
                                               <td>1</td>
                                               <td>
                                                   <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                                               </td>
                                               <td>Abdelali Abouelhassan </td>
                                               <td>id000001 </td>
                                               <td>20</td>
                                               <td>$900</td>
                                               <td>27-08-2018 01:22:12</td>
                                               <td>Patricia J. King </td>
                                               <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                                           </tr>
                                           <tr>
                                               <td>2</td>
                                               <td>
                                                   <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                                               </td>
                                               <td>Mohammed Amine kassam </td>
                                               <td>id000002 </td>
                                               <td>12</td>
                                               <td>$500</td>
                                               <td>25-08-2018 21:12:56</td>
                                               <td>Rachel J. Wicker </td>
                                               <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                           </tr>
                                           <tr>
                                               <td>3</td>
                                               <td>
                                                   <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                                               </td>
                                               <td>Ayoub El Qorchi </td>
                                               <td>id000003 </td>
                                               <td>23</td>
                                               <td>$400</td>
                                               <td>24-08-2018 14:12:77</td>
                                               <td>Michael K. Ledford </td>
                                               <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                           </tr>
                                           <tr>
                                               <td>4</td>
                                               <td>
                                                   <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                                               </td>
                                               <td>Fatima ELbiyad </td>
                                               <td>id000004 </td>
                                               <td>34</td>
                                               <td>$500</td>
                                               <td>23-08-2018 09:12:35</td>
                                               <td>Michael K. Ledford </td>
                                               <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                                           </tr>
                                           <tr>
                                               <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                                           </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
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
                   <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                       <div class="card">
                           <h5 class="card-header"> Total Revenue</h5>
                           <div class="card-body">
                               <div id="morris_totalrevenue"></div>
                           </div>
                           <div class="card-footer">
                               <p class="display-7 font-weight-bold"><span class="text-primary d-inline-block">$26,000</span><span class="text-success float-right">+9.45%</span></p>
                           </div>
                       </div>
                   </div> <!-- ============================================================== -->
                   <!-- end product sales  -->
                   <!-- ============================================================== -->
                   <div class="col-xl-3 col-lg-12 col-md-6 col-sm-12 col-12">
                       <!-- ============================================================== -->
                       <!-- top perfomimg  -->
                       <!-- ============================================================== -->
                       <div class="card border-3 border-top border-top-primary">
                           <div class="card-body">
                               <h5 class="text-muted">Daily General Profit</h5>
                               <div class="metric-value d-inline-block">
                                   <h1 class="mb-1">1340</h1>
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
                                   <h1 class="mb-1">13000</h1>
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
                                   <h1 class="mb-1">$12099</h1>
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
                                   <h1 class="mb-1">1245</h1>
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
               </div>

               <div class="row">
                   <!-- ============================================================== -->
                   <!-- sales  -->
                   <!-- ============================================================== -->

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