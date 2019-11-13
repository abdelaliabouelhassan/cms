<?php

if ($_SESSION['roll'] == "Admin") {
    ?>


    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?Account">View Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?Setting">Setting</a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Products</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?View">View Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?add">Add Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?Categories">Add Categories</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index?cart">View Cart<span class="badge badge-secondary">New</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="index?Recent_Selling">Recent Selling<span class="badge badge-secondary">New</span></a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fab fa-fw fa-wpforms"></i>Add Users</a>
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?add_user">Add User</a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fas fa-fw fa-chart-pie"></i>Profits</a>
                            <div id="submenu-4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?Monthly_profits">Monthly profits</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?Annual_profits">Annual profits</a>
                                    </li>

                        </li>
                    </ul>
                </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-user-circle"></i>Calendar <span class="badge badge-success">6</span></a>
                    <div id="submenu-5" class="collapse submenu" style="">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="index?Calendar">Add Events</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-power-off mr-2"></i>Log Out</a>
                    <div id="submenu-6" class="collapse submenu" style="">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link" href="../resours/templates/back/fun/logout.php">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </li>


                </ul>
        </div>
        </nav>
    </div>
    </div>
<?php
} else {
    ?>

    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-rocket"></i>Products <span class="badge badge-success">6</span></a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">


                                    <li class="nav-item">
                                        <a class="nav-link" href="index?View">View Products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index?user=<?php echo $_SESSION['id_user']; ?>">Account Setting</a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-power-off mr-2"></i>Log Out</a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">

                                    <li class="nav-item">
                                        <a class="nav-link" href="../resours/templates/back/fun/logout.php">Log Out</a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
            </nav>
        </div>
    </div>


<?php
}
?>