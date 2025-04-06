<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Advanced Searcg</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body style="background-color: #1a1d53;">

    <!-- nav bar -->
    <?php include "header.php" ?>
    <!-- nav bar -->


    <section class="h-100">
        <div class="container py-5">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong text-white bg-dark" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-4">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-4 px-md-2">Advanced Search <i class="bi bi-binoculars"></i></h3>

                            <form class="px-md-2">

                                <div class="form-outline mb-4">
                                    <div class="input-group">
                                        <span class="input-group-text bg-transparent text-white bg-white"><i class="bi bi-search"></i></span>
                                        <input type="text" class="form-control bg-white" placeholder="Search for Anything..." style="color:#7a7a7a" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4 mb-1">

                                        <div class="dropdown text-start">
                                            <a class="btn btn-dark border border-1 border-white text-white-50 dropdown-toggle form-control form-control-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Category
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-1 text-end">

                                        <div class="dropdown">
                                            <a class="btn btn-dark border border-1 border-white text-white-50 dropdown-toggle form-control form-control-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Brand
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="col-md-4 mb-1 text-end">

                                        <div class="dropdown">
                                            <a class="btn btn-dark border border-1 border-white text-white-50 dropdown-toggle form-control form-control-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Select Model
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <h5><i class="bi bi-funnel"></i> Filter By;</h5>
                                </div>
                                <div class="col-md-12 text-center">
                                    <h6>Price Range <i class="bi bi-tags"></i></h6>
                                </div>
                                <div class="row mb-4 pb-2 pb-md-0 mb-md-4">
                                    <div class="col-md-6 mb-1">

                                        <div class="form-outline">
                                            <input type="number" id="form3Example" class="form-control" placeholder="Min." />
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-1">

                                        <div class="form-outline">
                                            <input type="number" id="form3Example" class="form-control" placeholder="Max." />

                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 text-center">
                                    <h6>Special Services & Ratings <i class="bi bi-layers"></i></h6>
                                </div>
                                <div class="row mb-4 pb-2 pb-md-0 mb-md-4">
                                    <div class="col-md-12">

                                        <div class="form-outline">
                                            <ul class="nav nav-pills nav-fill">
                                                <li class="nav-item me-1 mb-1">
                                                    <a class="nav-link bg-transparent border border-white active" aria-current="page" href="#">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault1">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault1">Free Shipping</label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item me-1 mb-1">
                                                    <a class="nav-link bg-transparent border border-white active" aria-current="page" href="#">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault2">Free Return</label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item me-1">
                                                    <a class="nav-link bg-transparent border border-white active" aria-current="page" href="#">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault3">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault3">
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star-fill text-warning"></i>
                                                                <i class="bi bi-star text-warning"></i> & Up
                                                            </label>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12 mb-md-2">
                                    <h5><i class="bi bi-sort-down"></i> Sort By;</h5>
                                </div>
                                <div class="row mb-4 pb-2 pb-md-0 mb-md-4">
                                    <div class="col-md-12">
                                        <div class="form-outline">
                                            <ul class="nav nav-pills nav-fill">
                                                <li class="nav-item me-1 mb-1">
                                                    <a class="nav-link bg-transparent border border-white active" aria-current="page" href="#">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option1" id="flexSwitchCheckDefault5">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault5">Orders High to Low</label> <br>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option2" id="flexSwitchCheckDefault7">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault7">Orders Low to High</label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item me-1 mb-1">
                                                    <a class="nav-link bg-transparent border border-white active" aria-current="page" href="#">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option1" id="flexSwitchCheckDefault5">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault5">Newest to Oldest</label> <br>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option2" id="flexSwitchCheckDefault7">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault7">Oldest to Newest</label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item me-1 mb-1">
                                                    <a class="nav-link bg-transparent border border-white active" aria-current="page" href="#">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option1" id="flexSwitchCheckDefault5">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault5">Price High to Low</label> <br>
                                                            <input class="form-check-input" type="radio" name="exampleRadios" value="option2" id="flexSwitchCheckDefault7">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault7">Price Low to High</label>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="nav-item me-1">
                                                    <a class="nav-link bg-transparent border border-white active" aria-current="page" href="#">
                                                        <div class="form-check form-check">
                                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault4">
                                                            <label class="form-check-label" for="flexSwitchCheckDefault4">Best Match <i class="bi bi-hand-thumbs-up"></i></label>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mb-4 pb-2 pb-md-0 mb-md-4">
                                    <div class="col-md-6 mb-1">
                                        <a href="advancedSearch.php" class="btn btn-warning w-100">Reset <i class="bi bi-arrow-clockwise"></i></a>
                                    </div>
                                    <div class="col-md-6 mb-1">
                                        <a href="advancedSearch.php" class="btn btn-primary w-100">Search <i class="bi bi-search"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include "footer.php" ?>
    <!-- footer -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>