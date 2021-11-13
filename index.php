<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <div class="wrapper">
        <div class="navigation navbar bg-light">
            <div class="container justify-content-around">
                <!-- inser logo -->
                <div class="logo">
                    <img src="images/logo.png" alt="logo">
                </div>

                <!-- search place -->
                <div class="search_area float-left">
                    <form action="" method="POST">
                        <input type="text" name="search_box" class="search_box" placeholder="Search all items here">
                        
                        <button class="search_btn btn btn-success"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <!-- user menu -->
                <div class="user_menu">
                    <ul>
                        <li>
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" ><i class="fas fa-user"></i> Login/sign up</a>
                            
                            <!-- dropdown box -->
                            <div class="dropdown-menu dropdown-menu-right bg-dark" style="width:300px;">
                                <a href="#"><button type="button" class="dropdown-item"><i class="far fa-user"></i>&nbsp profile</button></a>
                                <a href="#"><button type="button" class="dropdown-item"><i class="fas fa-cubes"></i>&nbsp orders</button></a>
                                <a href="#"><button type="button" class="dropdown-item"><i class="fas fa-heart"></i>&nbsp wishlist</button></a>

                                <div class="dropdown-divider bg-white"></div>
                                <p class="text-center text-white" style="line-height:20px">if you are new user.</p>
                                
                                <a href="#"><button type="button" class="dropdown-item text-center bg-primary"><i class="fas fa-user-plus"></i>&nbsp Sing Up Now</button></a>
                                <a href="#"><button type="button" class="dropdown-item text-center bg-danger"><i class="fas fa-sign-in-alt"></i>&nbsp Login Your Account</button></a>

                            </div>
                        </li>
                        <li><a href="#" class="text-danger nav-link"><i class="fas fa-cart-plus"> cart</i></a></li>
                    </ul>
                </div>
                
            </div>
        </div>

        <!-- slider part -->
        <div class="slider-area navbar">
            <div class="slider">
                <div>
                    <a href="#">
                        <img src="images/slider1.jpeg" alt="">
                    </a>
                    <!-- slide content -->
                    <div class="slider_content">
                        <h3 class="text-white text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id numquam ullam consequatur quo recusandae, quam facilis eveniet quod voluptatibus architecto eius magnam itaque nobis ut blanditiis facere est? Asperiores.</h3>
                        <a href="$"><button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Buy now</button></a>
                        <a href="$"><button class="btn btn-outline-danger ms-5">Read more..</button></a>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img src="images/slider2.jpeg" alt="">
                    </a>
                    <div class="slider_content">
                        <h3 class="text-white text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id numquam ullam consequatur quo recusandae, quam facilis eveniet quod voluptatibus architecto eius magnam itaque nobis ut blanditiis facere est? Asperiores.</h3>
                        <a href="$"><button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Buy now</button></a>
                        <a href="$"><button class="btn btn-outline-danger ms-5">Read more..</button></a>
                    </div>
                </div>
                <div>
                    <a href="#">
                        <img src="images/slider3.jpeg" alt="">
                    </a>
                    <div class="slider_content">
                        <h3 class="text-white text-capitalize">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id numquam ullam consequatur quo recusandae, quam facilis eveniet quod voluptatibus architecto eius magnam itaque nobis ut blanditiis facere est? Asperiores.</h3>
                        <a href="$"><button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Buy now</button></a>
                        <a href="$"><button class="btn btn-outline-danger ms-5">Read more..</button></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- working area -->
        <div class="containar-fluid">
            <!-- product section -->
            <section class="product-section">
                <div class="section-heading">
                    <h3 class="heading">Latest products</h3>
                </div>

                <div class="section-product-cards">
                    <div class="owl-carousel">

                    <div class="product-card">
                        <div class="product-image">
                            <img src=".\images\product-images\1.png" alt="product name">
                        </div>
                        <!-- product hover -->
                        <div class="card-contents">
                            <button type="button" class="btn btn-warning cart-btn">
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </div>
                        <!-- product details -->
                        <div class="product-details">
                            <h5 class="product-name">Men's T-shirt with Sport Mark</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>Tk. 460</s> </small>
                                <span class="text-success">Tk. 440</span>
                            </p>
                        </div>

                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src=".\images\product-images\2.png" alt="product name">
                        </div>
                        <!-- product hover -->
                        <div class="card-contents">
                            <button type="button" class="btn btn-warning cart-btn">
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </div>
                        <!-- product details -->
                        <div class="product-details">
                            <h5 class="product-name">Men's T-shirt with Sport Mark</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>Tk. 460</s> </small>
                                <span class="text-success">Tk. 440</span>
                            </p>
                        </div>

                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src=".\images\product-images\4.png" alt="product name">
                        </div>
                        <!-- product hover -->
                        <div class="card-contents">
                            <button type="button" class="btn btn-warning cart-btn">
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </div>
                        <!-- product details -->
                        <div class="product-details">
                            <h5 class="product-name">Men's T-shirt with Sport Mark</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>Tk. 460</s> </small>
                                <span class="text-success">Tk. 440</span>
                            </p>
                        </div>

                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src=".\images\product-images\3.jpg" alt="product name">
                        </div>
                        <!-- product hover -->
                        <div class="card-contents">
                            <button type="button" class="btn btn-warning cart-btn">
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </div>
                        <!-- product details -->
                        <div class="product-details">
                            <h5 class="product-name">Men's T-shirt with Sport Mark</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>Tk. 460</s> </small>
                                <span class="text-success">Tk. 440</span>
                            </p>
                        </div>

                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src=".\images\product-images\5.jpg" alt="product name">
                        </div>
                        <!-- product hover -->
                        <div class="card-contents">
                            <button type="button" class="btn btn-warning cart-btn">
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </div>
                        <!-- product details -->
                        <div class="product-details">
                            <h5 class="product-name">Men's T-shirt with Sport Mark</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>Tk. 460</s> </small>
                                <span class="text-success">Tk. 440</span>
                            </p>
                        </div>

                    </div>

                    <div class="product-card">
                        <div class="product-image">
                            <img src=".\images\product-images\6.jpg" alt="product name">
                        </div>
                        <!-- product hover -->
                        <div class="card-contents">
                            <button type="button" class="btn btn-warning cart-btn">
                                <i class="fas fa-cart-arrow-down"></i>
                            </button>
                        </div>
                        <!-- product details -->
                        <div class="product-details">
                            <h5 class="product-name">Men's T-shirt with Sport Mark</h5>
                            <p class="product-price">
                                <small class="text-danger"><s>Tk. 460</s> </small>
                                <span class="text-success">Tk. 440</span>
                            </p>
                        </div>

                    </div>
                    
                    </div>
                </div>
            </section>
        </div>
    </div>





    <script src="https://kit.fontawesome.com/2b180732d7.js" crossorigin="anonymous"></script>
    <script src="js file/jquery.js"></script>
    <script src="js file/jquery.bxslider.min.js"></script>
    <script src="js file/owl.carousel.js"></script>
    <script src="js file/bootstrap.bundle.min.js"></script>
    <script src="js file/main.js"></script>
    
</body>
</html>