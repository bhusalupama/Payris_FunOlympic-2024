<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav class="navbar navbar-expand-sm fixed-top">
    <a class="navbar-brand mx-4" style="color: white;" href="userindex.php">
        <img src="assets/img/logo.png" alt="" width="55" class="mx-3 my-0">
        Fun Olympic Games 2024 </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="userindex.php"><i class="fa fa-home" style="font-size:20px"></i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about-us.php"><i class="bi bi-file-earmark-person"></i> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="news-events.php"><i class="bi bi-newspaper"></i> News and Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery.php"> <i class="fa fa-photo" style="font-size:18px"></i> Photo Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Video.php"> <i class="bi bi-play-btn"></i> Videos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contact.php"><i class="bi bi-telephone"></i> Contact us</a>
            </li>
            <li class="nav-item dropdown pe-3 ">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-toggle="dropdown">
                    <img src="./assets/images/user.avif" height="25px" width="25px" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2 mx-1">
                        <?php echo "Welcome " . $_SESSION['username']; ?>
                    </span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6 class="m-3 ">
                            <?php echo  $_SESSION['username']; ?>
                        </h6>
                        <a href="userlogout.php">
                            <i class="bi bi-box-arrow-right"></i>
                            <span class="text-danger">Log Out</span>
                        </a>
                    </li>
                    
                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
        <div class="loginn m-2">
        <button type="submit" class=" login btn text-light  ">Logged in</button>
        </div>
        <form class="form-inline my-2 my-lg-0">
            <a href="book-now.php" class="btn btn-danger text-light">Register Now</a>
        </form>

    </div>
</nav>