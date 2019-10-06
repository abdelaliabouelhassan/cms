     <div class="dashboard-wrapper">
         <div class="influence-profile">
             <div class="container-fluid dashboard-content ">
                 <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                         <div class="page-header">
                             <h3 class="mb-2">Edite Your Profile </h3>
                             <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                             <div class="page-breadcrumb">
                                 <nav aria-label="breadcrumb">
                                     <ol class="breadcrumb">
                                         <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                         <li class="breadcrumb-item active" aria-current="page">Influencer Profile Template</li>
                                     </ol>
                                 </nav>
                             </div>
                         </div>
                     </div>
                 </div>



                 <!-- fetch user info -->
                 <?php
                    $id = $_SESSION['id_user'];
                    $query = query("SELECT * FROM users WHERE id = '$id'");
                    confirm($query);


                    ?>




                 <div class="row">
                     <!-- ============================================================== -->
                     <!-- profile -->
                     <!-- ============================================================== -->
                     <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                         <div class="card">
                             <div class="card-body">
                                 <div class="user-avatar text-center d-block">
                                     <img src="<?php echo $row['image']; ?>" alt="User Avatar" class="rounded-circle user-avatar-xxl">
                                 </div>
                                 <div class="text-center">
                                     <h2 class="font-24 mb-0"><?php echo $row['username']; ?></h2>
                                     <p>Project Manager @<?php echo $row['roll']; ?></p>
                                 </div>
                             </div>
                             <div class="card-body border-top">
                                 <h3 class="font-16">Contact Information</h3>
                                 <div class="">
                                     <ul class="list-unstyled mb-0">
                                         <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><?php echo $row['email']; ?></li>
                                         <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i>(+212)<?php echo $row['phone']; ?></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="card-body border-top">
                                 <h3 class="font-16">Rating</h3>
                                 <h1 class="mb-0">4.8</h1>
                                 <div class="rating-star">
                                     <i class="fa fa-fw fa-star"></i>
                                     <i class="fa fa-fw fa-star"></i>
                                     <i class="fa fa-fw fa-star"></i>
                                     <i class="fa fa-fw fa-star"></i>
                                     <i class="fa fa-fw fa-star"></i>
                                     <p class="d-inline-block text-dark">14 Reviews </p>
                                 </div>
                             </div>
                             <div class="card-body border-top">
                                 <h3 class="font-16">Social Channels</h3>
                                 <div class="">
                                     <ul class="mb-0 list-unstyled">
                                         <li class="mb-1"><a href="#"><i class="fab fa-fw fa-facebook-square mr-1 facebook-color"></i>fb.me/michaelchristy</a></li>
                                         <li class="mb-1"><a href="#"><i class="fab fa-fw fa-twitter-square mr-1 twitter-color"></i>twitter.com/michaelchristy</a></li>
                                         <li class="mb-1"><a href="#"><i class="fab fa-fw fa-instagram mr-1 instagram-color"></i>instagram.com/michaelchristy</a></li>
                                         <li class="mb-1"><a href="#"><i class="fas fa-fw fa-rss-square mr-1 rss-color"></i>michaelchristy.com/blog</a></li>
                                         <li class="mb-1"><a href="#"><i class="fab fa-fw fa-pinterest-square mr-1 pinterest-color"></i>pinterest.com/michaelchristy</a></li>
                                         <li class="mb-1"><a href="#"><i class="fab fa-fw fa-youtube mr-1 youtube-color"></i>youtube/michaelchristy</a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="card-body border-top">
                                 <h3 class="font-16">Category</h3>
                                 <div>
                                     <a href="#" class="badge badge-light mr-1">Fitness</a><a href="#" class="badge badge-light mr-1">Life Style</a><a href="#" class="badge badge-light mr-1">Gym</a>
                                 </div>
                             </div>
                         </div>
                     </div>




                     <?php require("../resours/templates/back/fun/fun_Setting.php"); ?>










                     <div class="tab-content" id="pills-tabContent">
                         <div class="tab-pane fade show active" id="pills-campaign" role="tabpanel" aria-labelledby="pills-campaign-tab">
                             <?php
                                if (in_array("<h1><span style='color: #ed3228;'>Please Fill all Inputs.</span></h1>", $error_array)) {
                                    echo "<h1><span style='color: #ed3228;'>Please Fill all Inputs.</span></h1>";
                                }

                                ?>

                             <div class="row">
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                     <div class="section-block">
                                         <h3 class="section-title">Change My Information</h3>
                                     </div>
                                 </div>
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                     <form action="index?Setting" method="post">
                                         <div class="card">
                                             <h5 class="card-header">Login Information</h5>
                                             <div class="card-body">

                                                 <div class="form-group row">
                                                     <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">User Name</label>
                                                     <div class="col-9 col-lg-10">
                                                         <input id="inputEmail2" type="text" required="" data-parsley-type="text" placeholder="User Name" name="User_name" class="form-control">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                                                     <div class="col-9 col-lg-10">
                                                         <input id="inputPassword2" type="password" required="" placeholder="Password" name="password" class="form-control">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">login Key</label>
                                                     <div class="col-9 col-lg-10">
                                                         <input id="inputWebSite" type="text" required="" data-parsley-type="text" name="log_key" placeholder="text" class="form-control">
                                                     </div>
                                                 </div>
                                                 <div class="row pt-2 pt-sm-5 mt-1">

                                                     <div class="col-sm-6 pl-0">
                                                         <p class="text-right">
                                                             <button type="submit" name="Save" class="btn btn-space btn-primary">Save</button>
                                                             <button name="Cancel" class="btn btn-space btn-secondary">Cancel</button>
                                                         </p>
                                                     </div>
                                                 </div>

                                             </div>
                                         </div>
                                     </form>
                                 </div>






                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                     <form action="index?Setting" method="post" enctype="multipart/form-data">
                                         <div class="card">
                                             <h5 class="card-header">About Me Information</h5>
                                             <div class="card-body">

                                                 <div class="form-group row">
                                                     <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                                                     <div class="col-9 col-lg-10">
                                                         <input id="inputEmail2" type="email" required="" name="email" data-parsley-type="email" placeholder="Email" class="form-control">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Phone</label>
                                                     <div class="col-9 col-lg-10">
                                                         <input id="inputPassword2" type="text" required="" name="Phone" placeholder="Phone" class="form-control">
                                                     </div>
                                                 </div>
                                                 <div class="form-group row">
                                                     <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Profile Image</label>
                                                     <div class="col-9 col-lg-10">
                                                         <input id="inputWebSite" type="file" required="" name="Image" data-parsley-type="file" placeholder="profile image" class="form-control">
                                                     </div>
                                                 </div>
                                                 <div class="row pt-2 pt-sm-5 mt-1">

                                                     <div class="col-sm-6 pl-0">
                                                         <p class="text-right">
                                                             <button name="save2" type="submit" class="btn btn-space btn-primary">Save</button>
                                                             <button name="Cancel" class="btn btn-space btn-secondary">Cancel</button>
                                                         </p>
                                                     </div>
                                                 </div>

                                             </div>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>