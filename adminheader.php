<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vehicle Rental System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+919023920XXX</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>xyz@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary mb-1">VehicleBook</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="adminindex.php" class="nav-item nav-link active">Home</a>
                        <a href="admindriverlist.php" class="nav-item nav-link">Drivers</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Vehicles</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="vehiclelisting.php" class="dropdown-item">Vehicle Listing</a>
                                <a href="vehicledetail.php" class="dropdown-item">Vehicle Detail</a>
                                <a href="adminuserbookinghistory.php" class="dropdown-item">Booking History</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="adminteam.php" class="dropdown-item">The Team</a>
                                <a href="adminfeedbacklist.php" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>

                        <a href="report.php" class="nav-item nav-link">Report</a>

                        <div class="hero">
                        <img src="img/user.png" class="user-pic" alt="" onclick="toggleMenu()">
                        <div class="sub-menu-wrap" id="submenu">
                            <div class="sub-menu">
                                <div class="uer-info">
                                    <img src="img/user.png" alt="sdv" >
                                    <h3>
                                        <p>ADMIN</p>
                                    </h3>
                                </div>
                                <hr>
                                <a href="#" class="sub-menu-links">
                                    <img src="img/profile.png" alt="">
                                    <p>Admin@gmail.com</p>
                                </a>
                                <a href="logout.php" class="sub-menu-links">
                                    <img src="img/logout.png" alt="">
                                    <p>logout</p>
                                    <span>></span>
                                </a>
                            </div>
                        </div>
                    </div>
                        <!-- <div class="nav-item col-xl-2 col-lg-4 col-md-6 px-2" style="padding: 20px 0px 0px 0px">
                            <button class="btn btn-primary btn-block mb-3" type="submit" style="height: 44px; padding:10px">Login</button>
                        </div> -->
                        <!-- <div class="nav-item col-xl-2 col-lg-4 col-md-6 px-2" style="padding: 20px 0px 0px 0px">
                            <a href="login.php" class="btn btn-primary btn-block mb-3" style="height: 44px; padding:10px 5px;">Login</a>
                        </div> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    
    <script>
        let subMenu = document.getElementById("submenu");
        
        function toggleMenu()
        {
            subMenu.classList.toggle("open-menu");
        }
        </script>
        
</body>
</html>