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
                        <div class="card bg-orange-g text-white">
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
                        <div class="card bg-green-g text-white">
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
                        <div class="card bg-primary-g text-white">
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

                <!-- all order table -->
                <div class="All-order mt-5">
                <h2>New Orders</h2>
                <hr>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th scope="col">Order No.</th>
                            <th scope="col">Order Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Paid Status</th>
                            <th scope="col">Order Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>12/03/2021</td>
                            <td><span class="badge bg-danger"> Unpaid</span></td>
                            <td><span class="badge bg-warning"> No service</span></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>12/03/2021</td>
                            <td ><span class="badge bg-success"> paid</span></td>
                            <td><span class="badge bg-info"> process</span></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry the Bird</td>
                            <td>12/03/2021</td>
                            <td><span class="badge bg-success"> paid</span> </td>
                            <td><span class="badge bg-danger"> Rejected</span> </td>
                        </tr>
                    </tbody>
                 </table>
                </div>

                <!-- pagination   -->
                <div class="order-pagination">
                <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
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