<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="index">Concept</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item">
                    <div id="custom-search" class="top-search-bar">
                        <form action="index?View" method="GET">
                            <input class="form-control" type="text" name="Search" placeholder="Search..">
                        </form>
                    </div>
                </li>

                <?php
                ///notif
                $ct = 0;
                $query1 = query("SELECT * FROM products WHERE product_count = '$ct'");
                confirm($query1);
                while ($row = fetch_array($query1)) {
                    $id = $row['id'];
                    $query3 = query("SELECT * FROM notif WHERE id_p = '$id'");
                    if (mysqli_num_rows($query3) == 0) {
                        $tt = " This product is no longer available in Stock";
                        $query = query("INSERT INTO notif (id_p,title,date) VALUES ('$id','$tt',NOW())");
                        confirm($query);
                    }
                }

                //check if noti is still
                $query = query("SELECT * FROM notif");
                confirm($query);
                while ($row = fetch_array($query)) {
                    $id = $row['id_p'];
                    $query1 = query("SELECT * FROM products WHERE id='$id'");
                    confirm($query1);
                    if (mysqli_num_rows($query1) == 0) {
                        $query3 = query("DELETE FROM notif WHERE id_p =$id");
                        confirm($query3);
                    } else {
                        $row3 = fetch_array($query1);
                        if ($row3['product_count'] != 0) {
                            $query5 = query("DELETE FROM notif WHERE id_p =$id");
                            confirm($query5);
                        }
                    }
                }

                // if (isset($_POST['Search']))
                //     echo 'index?View=' . $_POST['Search'];
                // else
                //     echo 'index?View';

                ?>
                <li class="nav-item dropdown notification">
                    <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i>
                        <?php
                        $query = query("SELECT * FROM notif");
                        confirm($query);
                        if (mysqli_num_rows($query) != 0) {
                            echo "<span class='indicator'></span>";
                        }
                        ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                        <li>
                            <div class="notification-title"> Notification</div>
                            <div class="notification-list">
                                <div class="list-group">
                                    <?php

                                    $query = query("SELECT * FROM notif");
                                    confirm($query);
                                    while ($row = fetch_array($query)) {
                                        $id = $row['id_p'];
                                        $query1 = query("SELECT * FROM products WHERE id = '$id'");
                                        confirm($query1);
                                        $row1 = fetch_array($query1);
                                        ?>

                                        <a href="index?View_Notification=<?php echo $id  ?>" class="list-group-item list-group-item-action active">
                                            <div class="notification-info">
                                                <div class="notification-list-user-img"><img src="<?php echo $row1['product_image'];  ?>" alt="" class="user-avatar-md rounded-circle"></div>
                                                <div class="notification-list-user-block"><span class="notification-list-user-name"><?php echo $row1['product_name'];  ?></span><?php echo $row['title'];  ?>.
                                                    <div class="notification-date"><?php echo $row['date'];  ?></div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li>
                             <a href="index?View_Notification"><div class="list-footer">View all notifications</div></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown connection">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i>
                        <?php
                        $query = query("SELECT * FROM cart");
                        confirm($query);
                        if (mysqli_num_rows($query) >= 1) {
                            echo "<span class='indicator'></span>";
                        }

                        ?> </a>
                    <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                        <li class="connection-list">




                            <div class="row">
                                <?php
                                $query = query("SELECT * FROM cart LIMIT 6 ");
                                confirm($query);
                                while ($row = fetch_array($query)) {
                                    $id = $row['id_cart'];
                                    $query1 = query("SELECT * FROM products where id = '$id'");
                                    confirm($query1);
                                    $row1 = fetch_array($query1);
                                    ?>

                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                        <a href="index?cart" class="connection-item"><img src="<?php echo $row1['product_image']; ?>" alt=""> <span><?php echo $row1['product_name']; ?></span></a>
                                    </div>
                                <?php
                                }
                                if (mysqli_num_rows($query) == 0) {
                                    echo "<h2><center>No Thing In Cart</center></h2>";
                                }
                                ?>
                            </div>

                        </li>
                        <li>
                            <a href="index?cart">
                                <div class="conntection-footer">More</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- fetch user info assets/images/avatar-1.jpg -->
                <?php
                $id = $_SESSION['id_user'];
                $query = query("SELECT * FROM users WHERE id = '$id'");
                confirm($query);
                $row = fetch_array($query);


                ?>

                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $row['image']; ?>" alt="" class="user-avatar-md rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h5 class="mb-0 text-white nav-user-name"><?php echo $row['username']; ?></h5>
                            <span class="status"></span><span class="ml-2"><?php echo $row['status']; ?></span>
                        </div>
                        <a class="dropdown-item" href="index?Account"><i class="fas fa-user mr-2"></i>Account</a>
                        <a class="dropdown-item" href="index?Setting"><i class="fas fa-cog mr-2"></i>Setting</a>
                        <a class="dropdown-item" href="../resours/templates/back/fun/logout.php"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>