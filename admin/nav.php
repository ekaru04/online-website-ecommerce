<?php

session_start();
include 'koneksi.php';

@$sess = $_SESSION['user_admin'];


?>

<nav class="navbar navbar-default mb-xl-5 mb-4">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                <i class="fas fa-bars"></i>
            </button>
        </div>
<!-- Search-from -->
                    
<nav class="navbar navbar-light bg-light" style="width:72%">
    <form class="form-inline" style="width: 100%;" method="get" action="index.php">
        <input class="form-control mr-sm-6" name="cari" type="text" placeholder="Search" aria-label="Search" style="width: 86%!important;margin-right:20px">
        <div class="input-group-append">
                <button type="SUBMIT" class="btn btn-primary"><i class="fa fa-search"></i></button>
        </div>   
    </form>
</nav>  
                    <!--// Search-from -->

                    <!-- NOTIFIKASI-->
    <ul class="top-icons-agileits-w3layouts float-right">
                        <!--PROFIL-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i></a>
                <div class="dropdown-menu drop-3">
                    <div class="profile d-flex mr-o">
                        <div class="profile-r align-self-center">
                            <?php if($sess == null){ ?>
                            <form action="cek_login.php" method="post">
                              <div class="form-group">
                                <input id="email-modal" type="text" placeholder="username" name="username" class="form-control">
                              </div>
                              <div class="form-group">
                                <input id="password-modal" type="password" placeholder="password" name="password" class="form-control">
                              </div>
                              <a href="lupapass.php">Lupa password?</a>
                              <p class="text-center">
                                <button class="btn btn-primary" type="submit" name="login"><i class="fa fa-sign-in"></i> Log in</button>
                              </p>
                            </form>
                         <?php }else{ ?>
                            <h6 class="sub-title-w3-agileits"><?php echo $_SESSION['user_admin']; ?></h6>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                        <?php }  ?>
                    </div>     
                    
                </div>
        </li>
    </ul>
    </div>
</nav>