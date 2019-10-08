    <div class="container-fluid  dashboard-content">
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Annual Net Profits</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profits</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = query("SELECT * FROM annual_profits");
                                confirm($query);
                                while ($row = fetch_array($query)) {
                                    ?>

                                    <tr>
                                        <th scope="row"><?php echo $row['id'];  ?></th>
                                        <td><?php echo $row['profits'];  ?></td>
                                        <td><?php echo $row['date'];  ?></td>

                                    </tr>

                                <?php
                                }
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- striped table -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Annual General Profits</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Profits</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = query("SELECT * FROM annual_profits_g");
                                confirm($query);
                                while ($row = fetch_array($query)) {
                                    ?>

                                    <tr>
                                        <th scope="row"><?php echo $row['id'];  ?></th>
                                        <td><?php echo $row['profits'];  ?></td>
                                        <td><?php echo $row['date'];  ?></td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end striped table -->
            <!-- ============================================================== -->
        </div>