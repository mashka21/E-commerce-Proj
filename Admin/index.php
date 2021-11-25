<?php require_once 'include/header.php'; ?>

        


        
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



<?php require_once 'include/footer.php'; ?>