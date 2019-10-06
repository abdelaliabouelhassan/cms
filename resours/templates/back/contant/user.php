<div class="dashboard-influence">
    <div class="container-fluid dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h3 class="mb-2">Infulencer Dashboard Template </h3>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User Information</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <?php require "../resours/templates/back/fun/fun_user.php";

        $query = query("SELECT * FROM users WHERE id = '$id'");
        confirm($query);
        if (mysqli_num_rows($query) == 0) {
            return;
        }

        ?>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card influencer-profile-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="text-center">
                                    <img src="<?php echo get_account_info("image") ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                <div class="user-avatar-info">
                                    <div class="m-b-20">
                                        <div class="user-avatar-name">
                                            <h2 class="mb-1"><?php echo get_account_info("username") ?></h2>
                                        </div>
                                        <div class="rating-star  d-inline-block">
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <i class="fa fa-fw fa-star"></i>
                                            <p class="d-inline-block text-dark">14 Reviews </p>
                                        </div>
                                    </div>
                                    <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                                    <div class="user-avatar-address">
                                        <p class="border-bottom pb-3">
                                            <span class="d-xl-inline-block d-block mb-2">Adress : <i class="fa fa-map-marker-alt mr-2 text-primary "></i><?php echo get_account_info("adress"); ?></span>
                                            <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date: <?php echo get_account_info("date_beginning"); ?> </span>
                                            <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">
                                                Phone :<?php echo get_account_info("phone") ?>
                                            </span>
                                            <span class=" mb-2 d-xl-inline-block d-block ml-xl-4"> Email :<?php echo get_account_info("email"); ?> </span>
                                            <span class=" mb-2 d-xl-inline-block d-block ml-xl-4"> Roll : <span style="color:#164cfa;"><?php echo get_account_info("roll"); ?></span> </span>
                                            <span class=" mb-2 d-xl-inline-block d-block ml-xl-4"> Monthly Salary : <span style="color:#f0cd1d;"><?php echo get_account_info("monthly"); ?>DH</span> </span>
                                        </p>
                                        <div class="mt-3">
                                            <a href="#" class="badge badge-light mr-1">Fitness</a> <a href="#" class="badge badge-light mr-1">Life Style</a> <a href="#" class="badge badge-light">Gym</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="border-top user-social-box">
                        <div class="user-social-media d-xl-inline-block"><span class="mr-2 twitter-color"> <i class="fab fa-twitter-square"></i></span><span>13,291</span></div>
                        <div class="user-social-media d-xl-inline-block"><span class="mr-2  pinterest-color"> <i class="fab fa-pinterest-square"></i></span><span>84,019</span></div>
                        <div class="user-social-media d-xl-inline-block"><span class="mr-2 instagram-color"> <i class="fab fa-instagram"></i></span><span>12,300</span></div>
                        <div class="user-social-media d-xl-inline-block"><span class="mr-2  facebook-color"> <i class="fab fa-facebook-square "></i></span><span>92,920</span></div>
                        <div class="user-social-media d-xl-inline-block "><span class="mr-2 medium-color"> <i class="fab fa-medium"></i></span><span>291</span></div>
                        <div class="user-social-media d-xl-inline-block"><span class="mr-2 youtube-color"> <i class="fab fa-youtube"></i></span><span>1291</span></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="row">
            <!-- ============================================================== -->
            <!-- campaign activities   -->
            <!-- ============================================================== -->
            <div class="col-lg-12">
                <div class="section-block">
                    <h3 class="section-title">My Active users</h3>
                </div>


                <?php

                $query = query("SELECT * FROM users WHERE id = '$id ='");
                confirm($query);
                $row = fetch_array($query);


                ?>
                <?php

                if (in_array("<span style='color: #00FFFF;'>Please Fill All Inputs !</span>", $error_arreay)) {
                    echo "<h1><span style='color: #fc0303;'>Please Fill All Inputs !</span></h1>";
                }

                if (in_array("<span style='color: #00FFFF;'>Please Choose User Roll</span>", $error_arreay)) {
                    echo "<h1><span style='color: #fc0303;'>Please Choose User Roll</span></h1>";
                }

                if (in_array("<span style='color: #0318fc;'>The User Has Been Added !</span>", $error_arreay)) {
                    echo "<h1><span style='color: #0318fc;'>The User Has Been Updated !</span></h1>";
                }



                ?>




                <?php
                if ($_SESSION['roll'] == "Admin") {

                    ?>
                    <div class="card-body">
                        <form action="index?user=<?php echo $id; ?>" method="POST" id="basicform" data-parsley-validate="">
                            <div class="form-group">
                                <label for="inputUserName">User Name</label>
                                <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" value="<?php echo $row['username']  ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Log Key</label>
                                <input id="inputEmail" type="text" name="log_key" value="<?php echo $row['log_name'];  ?>" data-parsley-trigger="change" required="" placeholder="Uesr Log Key" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Password</label>
                                <input id="inputPassword" type="password" placeholder="Password" name="password" required="" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputRepeatPassword">Monthly Salary</label>
                                <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="number" value="<?php echo $row['monthly']; ?>" name="Monthly_Salary" reMonthly Salaryuired="" placeholder="Monthly Salary" class="form-control">
                            </div>
                            <div class="card-body border-top">

                                <select name="roll" class="selectpicker">
                                    <option value="Select" data-content="<span class='badge badge-primary'>Mustard</span>">Select Roll of this user</option>
                                    <option value="Admin" data-content="<span class='badge badge-success'>Relish</span>">Admin</option>
                                    <option value="Moderator" data-content="<span class='badge badge-brand'>Ketchup</span>">moderator</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" name="Submit" class="btn btn-space btn-primary">Edite User</button>

                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>

                <?php

                }
                ?>
                <?php
                if ($_SESSION['roll'] == "Moderator") {


                    $query = query("SELECT * FROM users WHERE id = '$id'");
                    confirm($query);

                    $row = fetch_array($query);
                    if ($row['roll'] == "Admin") {
                        die();
                    }


                    ?>

                    <div class="card-body">
                        <form action="index?user=<?php echo $id; ?>" method="POST" id="basicform" data-parsley-validate="">
                            <div class="form-group">
                                <label for="inputUserName">User Name</label>
                                <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" value="<?php echo $row['username']  ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input id="inputEmail" type="email" name="email" value="<?php echo $row['email'];  ?>" data-parsley-trigger="change" required="" placeholder="Email.." autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Adress</label>
                                <input id="inputPassword" type="text" placeholder="Adress..." name="adress" required="" value="<?php echo $row['adress'];  ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="inputRepeatPassword">Phone</label>
                                <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="number" value="<?php echo $row['phone']; ?>" name="phone" reMonthly Salaryuired="" placeholder="Phone" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" name="Submit" class="btn btn-space btn-primary">Edite</button>

                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>

                <?php

                }
                ?>


            </div>
            <!-- ============================================================== -->
            <!-- end campaign activities   -->
            <!-- ============================================================== -->
        </div>
    </div>
</div>