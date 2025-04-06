<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Home</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body style="background-color: #1a1d53;">

    <!-- nav bar -->
    <?php include "header.php" ?>
    <!-- nav bar -->

    <!-- hero-->

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 600px;">
                <img src="resources/homeimgs/lapmobBckg.jpg" class="d-block w-100 bg-black opacity-50" style="height: 100%; object-fit: cover;" alt="...">
                <div class="carousel-caption top-0 mt-5">
                    <h1 class="mt-5 text-white fw-bolder text-uppercase display-1">Bigger than ever!</h1>
                    <p class="fs-3 mt-5 text-capitalize fw-bolder display-1">NewTech NOW at your fingertip...</p>
                    <button class="btn btn-primary rounded-pill bg-transparent px-4 py-2 fs-5 mt-5">Get Started <i class="bi bi-caret-right-square"></i></button>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px;">
                <img src="resources/homeimgs/washingmachiBckg.jpg" class="d-block w-100 bg-black opacity-50" style="height: 100%; object-fit: cover;" alt="...">
                <div class="carousel-caption top-0 mt-5">
                    <h1 class="mt-5 text-white fw-bolder text-uppercase display-4">The ultimate one-Stop shop. <i class="bi bi-shop-window"></i></h1>
                    <p class="fs-3 mt-5 fw-bolder text-capitalize">From laptops & mobile phones to home appliances...</p>
                    <button class="btn btn-primary rounded-pill bg-transparent px-4 py-2 fs-5 mt-5">Explore <i class="bi bi-caret-right-square"></i></button>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px;">
                <img src="resources/homeimgs/TVbckg.jpg" class="d-block w-100 bg-black opacity-50" style="height: 100%; object-fit: cover;" alt="...">
                <div class="carousel-caption top-0 mt-5">
                    <h1 class="mt-5 text-white fw-bolder text-capitalize display-1">First slide label</h1>
                    <p class="fs-3 mt-5 text-uppercase fw-bolder text-capitalize display-1">Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-primary rounded-pill bg-transparent px-4 py-2 fs-5 mt-5">Get Started <i class="bi bi-caret-right-square"></i></button>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px;">
                <img src="resources/homeimgs/refreBckg.jpg" class="d-block w-100 bg-black opacity-50" style="height: 100%; object-fit: cover;" alt="...">
                <div class="carousel-caption top-0 mt-5">
                    <h1 class="mt-5 text-white fw-bolder text-capitalize display-1">First slide label</h1>
                    <p class="fs-3 mt-5 text-uppercase fw-bolder text-capitalize display-1">Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-primary rounded-pill bg-transparent px-4 py-2 fs-5 mt-5">Get Started <i class="bi bi-caret-right-square"></i></button>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px;">
                <img src="resources/homeimgs/camBackg.jpg" class="d-block w-100 bg-black opacity-50" style="height: 100%; object-fit: cover;" alt="...">
                <div class="carousel-caption top-0 mt-5">
                    <h1 class="mt-5 text-white fw-bolder text-capitalize display-1">First slide label</h1>
                    <p class="fs-3 mt-5 text-uppercase fw-bolder text-capitalize display-1">Some representative placeholder content for the first slide.</p>
                    <button class="btn btn-primary rounded-pill bg-transparent px-4 py-2 fs-5 mt-5">Get Started <i class="bi bi-caret-right-square"></i></button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- hero-->

    <!-- products -->

    <div class="container-fluid py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="text-white">Product Categories <i class="bi bi-ui-checks-grid"></i></h1>
                <p class="text-white">Over Eight Product Categories to choose from The World's Best Brands.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/mobiletbltproduct.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">Mobile Phones, Tablets & Accessories</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/lapcomacc.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">Laptops & Computer Accessories</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/CategTV.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">TVs & Video Accessories</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/categCam.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">Cameras, Camcorders & Drones</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/categAudio.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">Audio & MP3 Devices</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/categHomeApp.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">Electronic Home Appliances</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/cateogAC.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">Air Conditioners & Electrical Fittings</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/CateogGame.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">Video Games & Consoles</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="resources/productimgs/CategOther.jpg" class="rounded-circle img-fluid border border-3 border-dark" /></a>
                <h5 class="text-center text-white mt-3 mb-3">Other Electronic Items</h5>
                <p class="text-center"><a href="" class="btn btn-primary rounded-pill">Explore <i class="bi bi-binoculars"></i></a></p>
            </div>
        </div>
    </div>

    <hr style="color: black;">

    <section class="py-0 pb-6">
        <div class="container">
            <div class="row h-100">
                <div class="col-lg-12 m-auto text-center">
                    <h1 class="lh-sm text-white">New Arrivals & Popular items<i class="bi bi-stars"></i></h1>
                    <p class="text-white">We build the Trust through The Quality & The Consistency.</p>
                </div>
                <div class="col-12">
                    <nav>
                        <div class="nav nav-tabs mb-4 justify-content-center" id="nt" role="tablist">
                            <button class="nav-link active" id="nav-new-tab" data-bs-toggle="tab" data-bs-target="#nav-new" type="button" role="tab" aria-controls="nav-new" aria-selected="true">New Arrivals</button>
                            <button class="nav-link" id="nav-pop-tab" data-bs-toggle="tab" data-bs-target="#nav-pop" type="button" role="tab" aria-controls="nav-pop" aria-selected="false">Popular Items</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nt-content">
                        <div class="tab-pane fade show active" id="nav-new" role="tabpanel" aria-labelledby="nav-new-tab">
                            <div class="carousel slide" id="carouselnew" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="15000">
                                        <div class="row h-100 align-items-center">
                                            <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                <div class="card bg-black text-white p-6 pb-8">
                                                    <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                        <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                        <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                        <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                        <div class="mt-2">
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-half text-warning fs-6"></i>
                                                        </div>
                                                        <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                <div class="card bg-black text-white p-6 pb-8">
                                                    <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                        <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                        <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                        <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                        <div class="mt-2">
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-half text-warning fs-6"></i>
                                                        </div>
                                                        <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                <div class="card bg-black text-white p-6 pb-8">
                                                    <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                        <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                        <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                        <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                        <div class="mt-2">
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-half text-warning fs-6"></i>
                                                        </div>
                                                        <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item" data-bs-interval="10000">
                                        <div class="row h-100 align-items-center">
                                            <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                <div class="card bg-black text-white p-6 pb-8">
                                                    <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                        <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                        <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                        <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                        <div class="mt-2">
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-half text-warning fs-6"></i>
                                                        </div>
                                                        <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                <div class="card bg-black text-white p-6 pb-8">
                                                    <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                        <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                        <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                        <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                        <div class="mt-2">
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-half text-warning fs-6"></i>
                                                        </div>
                                                        <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                <div class="card bg-black text-white p-6 pb-8">
                                                    <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                    <div class="card-body text-center">
                                                        <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                        <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                        <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                        <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                        <div class="mt-2">
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-fill text-warning fs-6"></i>
                                                            <i class="bi bi-star-half text-warning fs-6"></i>
                                                        </div>
                                                        <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                            <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselnew" data-bs-slide="next">
                                            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselnew" data-bs-slide="next">
                                            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="nav-pop" role="tabpanel" aria-labelledby="nav-pop-tab">
                            <div class="carousel slide" id="carouselpop" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-bs-interval="15000">
                                            <div class="row h-100 align-items-center">
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="card bg-black text-white p-6 pb-8">
                                                        <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                            <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                            <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                            <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                            <div class="mt-2">
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-half text-warning fs-6"></i>
                                                            </div>
                                                            <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="card bg-black text-white p-6 pb-8">
                                                        <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                            <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                            <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                            <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                            <div class="mt-2">
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-half text-warning fs-6"></i>
                                                            </div>
                                                            <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="card bg-black text-white p-6 pb-8">
                                                        <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                            <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                            <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                            <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                            <div class="mt-2">
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-half text-warning fs-6"></i>
                                                            </div>
                                                            <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="carousel-item" data-bs-interval="10000">
                                            <div class="row h-100 align-items-center">
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="card bg-black text-white p-6 pb-8">
                                                        <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                            <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                            <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                            <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                            <div class="mt-2">
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-half text-warning fs-6"></i>
                                                            </div>
                                                            <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="card bg-black text-white p-6 pb-8">
                                                        <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                            <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                            <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                            <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                            <div class="mt-2">
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-half text-warning fs-6"></i>
                                                            </div>
                                                            <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 mb-3 mb-md-0">
                                                    <div class="card bg-black text-white p-6 pb-8">
                                                        <img class="card-img-top" src="resources/snglprdctimgs/TVfront.webp" alt="..">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title">Samsung Neo QN90B Smart TV</h5>
                                                            <span class="card-text d-block text-white-50">65" , Neo Quantum Processor 4K , EyeComfort , Dolby Atmos Audio</span>
                                                            <h4 class="fw-bold text-success mt-2">Rs. 717,299 .00</h4>
                                                            <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                                                            <div class="mt-2">
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-fill text-warning fs-6"></i>
                                                                <i class="bi bi-star-half text-warning fs-6"></i>
                                                            </div>
                                                            <div class="p-3">
                                                            <a class="text-sm-center btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary rounded-pill bg-transparent"><i class="bi bi-eye"></i></a>
                                                                <a href="singleProductView.php" class="btn btn-outline-primary text-uppercase rounded-pill bg-transparent">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselpop" data-bs-slide="next">
                                                <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselpop" data-bs-slide="next">
                                                <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <hr style="color: black;">

    <!-- offers -->
    <div class="container pt-5 pb-4 w-75">
        <div class="row h-100 text-center pt-3">
            <div class="col-lg-12 m-auto">
                <h1 class="lh-sm text-white text-center">Sales & Offers! <i class="bi bi-piggy-bank-fill"></i></h1>
                <p class="text-white">Go! Grab Your Opportunity.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="resources/homeimgs/FreeDelivery.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="resources/homeimgs/MobileAd.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="resources/homeimgs/TVad.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="resources/homeimgs/Home Appliances.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="resources/homeimgs/Laptoppromo.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- offers -->

    <!-- footer -->

    <?php include "footer.php" ?>

    <!-- footer -->


    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>