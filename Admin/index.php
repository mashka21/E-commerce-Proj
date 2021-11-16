<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_panel.css">
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="header-content">
                <!-- sider place of the header -->
                <div class="side-head">
                    <span class="text-white">Admin Panel</span> &nbsp;
                    <i class="fas fa-bars menu-btn text-white"></i>
                </div>

                <!-- header navigation bar -->
                <div class="header-nav">
                    <ul>
                        <li><a href="#"><i class="fas fa-shopping-basket"></i> Order</a></li>
                        <li><a href="#"><i class="fas fa-truck"></i> Delivary</a></li>
                        <li><a href="#"><i class="fas fa-users"></i> User</a></li>
                        <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    

    <div class="wrapper">
        <!-- sidebar -->
        <section class="sidebar">
            <ul class="nav-bar">
                <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#"><i class="fas fa-dolly-flatbed"></i> Brand</a></li>
                <li><a href="#"><i class="fas fa-dolly"></i> Category</a></li>
                <li><a href="#"><i class="fas fa-shopping-basket"></i> Products</a></li>
                <li><a href="#"><i class="fas fa-truck"></i> Orders</a></li>
                <li><a href="#"><i class="fas fa-truck-loading"></i> Delivery</a></li>
                <li><a href="#"><i class="fas fa-cogs"></i> Settings</a></li>
                <li><a href="#"><i class="fas fa-id-badge"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </section>
        <!-- This is working place/panel-->
        <section class="working-panel">
            <div class="container-fluid">
                <h1>Welcome to Dashboard</h1>
                <hr>

                <div class="row">
                    <!-- catogory part-->
                    <div class="col-md-3">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h4 class="fw-light"><i class="fas fa-dolly"></i> All Catogory</h4>
                                <hr>
                                <h5>
                                    <b>12345</b>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- catogory brand -->
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h4 class="fw-light"><i class="fas fa-dolly-flatbed"></i> All Brands</h4>
                                <hr>
                                <h5>
                                    <b>2432</b>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- catogory users -->
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h4 class="fw-light"><i class="fas fa-users"></i> All User</h4>
                                <hr>
                                <h5>
                                    <b>89382</b>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- catogory orders -->
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h4 class="fw-light"><i class="fas fa-truck-loading"></i> All Orders</h4>
                                <hr>
                                <h5>
                                    <b>689</b>
                                </h5>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>

    
    
    <script src="https://kit.fontawesome.com/2b180732d7.js" crossorigin="anonymous"></script>
    <script src="../js file/jquery.js"></script>
    <script src="../js file/jquery.bxslider.min.js"></script>
    <script src="../js file/owl.carousel.js"></script>
    <script src="../js file/bootstrap.bundle.min.js"></script>
    <script src="js file/main.js"></script>
</body>
</html>