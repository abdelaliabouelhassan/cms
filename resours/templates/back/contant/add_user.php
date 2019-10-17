       <?php require "../resours/templates/back/fun/fun_add_user.php";?>
       <div class="dashboard-main-wrapper">
            <div class="dashboard-wrapper">
                <div class="container-fluid  dashboard-content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">


                            <?php

                                if(in_array("<span style='color: #00FFFF;'>Please Fill All Inputs !</span>", $error_arreay)){
                                    echo "<h1><span style='color: #fc0303;'>Please Fill All Inputs !</span></h1>";
                                }
                            if (in_array("<span style='color: #00FFFF;'>The Password Not Match</span>", $error_arreay)) {
                                echo "<h1><span style='color: #fc0303;'>The Password Not Match</span></h1>";
                            }
                            if (in_array("<span style='color: #00FFFF;'>Please Choose User Roll</span>", $error_arreay)) {
                                echo "<h1><span style='color: #fc0303;'>Please Choose User Roll</span></h1>";
                            }

                            if (in_array("<span style='color: #0318fc;'>The User Has Been Added !</span>", $error_arreay)) {
                                echo "<h1><span style='color: #0318fc;'>The User Has Been Added !</span></h1>";
                            }



                            ?>



                            <div class="card">

                                <h5 class="card-header">Add Users</h5>
                                <div class="card-body">
                                    <form action="index?add_user" method="POST" id="basicform" data-parsley-validate="">
                                        <div class="form-group">
                                            <label for="inputUserName">User Name</label>
                                            <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail">Log Key</label>
                                            <input id="inputEmail" type="text" name="log_key" data-parsley-trigger="change" required="" placeholder="Uesr Log Key" autocomplete="off" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <input id="inputPassword" type="password" placeholder="Password" name="password" required="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Repeat Password</label>
                                            <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" name="password_re" required="" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputRepeatPassword">Monthly Salary</label>
                                            <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="number" name="Monthly_Salary" reMonthly Salaryuired="" placeholder="Monthly Salary" class="form-control">
                                        </div>
                                        <div class="card-body border-top">

                                            <select name="roll" class="">
                                                <option value="Select" data-content="<span class='badge badge-primary'>Mustard</span>">Select Roll of this user</option>
                                                <option value="Admin" data-content="<span class='badge badge-success'>Relish</span>">Admin</option>
                                                <option value="Moderator" data-content="<span class='badge badge-brand'>Ketchup</span>">moderator</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" name="Submit" class="btn btn-space btn-primary">Add User</button>
                                                    <button name="Cancel" class="btn btn-space btn-secondary">Cancel</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>