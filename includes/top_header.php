<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="float-start">
                    <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>
                <div class="float-end">
                    <div class="dropdown dib">
                        <div class="header-icon" data-toggle="dropdown">
                            <span class="user-avatar">
                                <img src="assets/images/1.jpg" alt="">
                                <?php 
                                $user=User::find_by_id($_SESSION['user_id']);
                                echo $user->first_name . " " . $user->last_name;
                                ?>
                                <i class="ti-angle-down f-s-10"></i>
                            </span>
                        </div>
                            <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="user_profile.php">
                                                <i class="ti-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="setting.php">
                                                <i class="ti-settings"></i>
                                                <span>Setting</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="logout.php">
                                                <i class="ti-power-off"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>