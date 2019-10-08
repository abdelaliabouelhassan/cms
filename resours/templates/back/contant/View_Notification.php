      <div class="dashboard-ecommerce">
          <div class="container-fluid dashboard-content ">
              <div class="row">
                  <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                      <div class="card">
                          <h5 class="card-header">Products Who has 0 IN Quantity</h5>
                          <div class="card-body p-0">
                              <div class="table-responsive">
                                  <table class="table">
                                      <thead class="bg-light">
                                          <tr class="border-0">
                                              <th class="border-0">Notification Id</th>
                                              <th class="border-0">Image</th>
                                              <th class="border-0">Product Name</th>
                                              <th class="border-0">Product Id</th>
                                              <th class="border-0">Quantity</th>
                                              <th class="border-0">Price</th>
                                              <th class="border-0">Time</th>
                                              <th class="border-0">Status</th>
                                          </tr>
                                      </thead>

                                      <tbody>
                                          <?php
                                            if (isset($_GET['View_Notification'])) {
                                                $id = $_GET['View_Notification'];

                                                if (empty($_GET['View_Notification'])) {
                                                    $query = query("SELECT * FROM notif ");
                                                    confirm($query);
                                                    while ($row = fetch_array($query)) {
                                                        $id = $row['id_p'];
                                                        $query1 = query("SELECT * FROM products WHERE id = '$id'");
                                                        confirm($query1);
                                                        $row1 = fetch_array($query1);


                                                        ?>

                                                      <tr>
                                                          <td><?php echo $row['id'];  ?></td>
                                                          <td>
                                                              <div class="m-r-10"><img src="<?php echo $row1['product_image'];  ?>" alt="user" class="rounded" width="45"></div>
                                                          </td>
                                                          <td><?php echo $row1['product_name'];  ?></td>

                                                          <td><?php echo $row1['id'];  ?></td>
                                                          <td><?php echo $row1['product_count'];  ?></td>
                                                          <td><?php echo $row1['product_price'];  ?></td>
                                                          <td><?php echo $row['date'];  ?></td>
                                                          <td> <a class="btn btn-danger" href="index?edit=<?php echo $id ?>"><span class="glyphicon glyphicon-remove"></span>Edit Or Delete</a> </td>
                                                      </tr>
                                                  <?php  }
                                                        } else {
                                                            $query = query("SELECT * FROM notif WHERE id_p = $id");
                                                            confirm($query);
                                                            while ($row = fetch_array($query)) {
                                                                $id = $row['id_p'];
                                                                $query1 = query("SELECT * FROM products WHERE id = '$id'");
                                                                confirm($query1);
                                                                $row1 = fetch_array($query1);


                                                                ?>

                                                      <tr>
                                                          <td><?php echo $row['id'];  ?></td>
                                                          <td>
                                                              <div class="m-r-10"><img src="<?php echo $row1['product_image'];  ?>" alt="user" class="rounded" width="45"></div>
                                                          </td>
                                                          <td><?php echo $row1['product_name'];  ?></td>

                                                          <td><?php echo $row1['id'];  ?></td>
                                                          <td><?php echo $row1['product_count'];  ?></td>
                                                          <td><?php echo $row1['product_price'];  ?></td>
                                                          <td><?php echo $row['date'];  ?></td>
                                                          <td> <a class="btn btn-danger" href="index?edit=<?php echo $id ?>"><span class="glyphicon glyphicon-remove"></span>Edit Or Delete</a> </td>
                                                      </tr>
                                          <?php  }
                                                }
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
      </div>