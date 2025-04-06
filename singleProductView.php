<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Single Product View</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body style="background-color: #1a1d53;">

    <!-- nav bar -->
    <?php include "header.php" ?>
    <!-- nav bar -->
    <div class="container bg-white text-dark">
        <div class="row mt-5 mb-5">

            <div class="col-md-5 col-sm-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="resources/snglprdctimgs/TVfront.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/snglprdctimgs/TVangle.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/snglprdctimgs/TVside.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/snglprdctimgs/TVback.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="resources/snglprdctimgs/TVdimensions.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-7 mt-lg-3  text-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb col-12" style="font-size:13px;">
                        <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="home.php">Products</a></li>
                        <li class="breadcrumb-item"><a href="home.php">TVs</a></li>
                        <li class="breadcrumb-item"><a href="home.php">Samsung</a></li>
                        <li class="breadcrumb-item active" aria-current="page">65” Class QN90B Samsung Neo QLED 4K Smart</li>
                    </ol>
                </nav>
                <p class="condition text-sm-center text-white fs-6" style="background-color: #1a1d53;">ALL NEW <i class="bi bi-stars"></i></p>
                <h2 class="product_name fs-4 fw-bolder">65” Class QN90B Samsung Neo QLED 4K Smart TV <i class="bi bi-tv"></i></h2>
                <p>Product Code: #PQT2355</p>
                <div class="rating" style="margin-top: -10px;">
                    <i class="bi bi-star-fill text-warning fs-6"></i>
                    <i class="bi bi-star-fill text-warning fs-6"></i>
                    <i class="bi bi-star-fill text-warning fs-6"></i>
                    <i class="bi bi-star-fill text-warning fs-6"></i>
                    <i class="bi bi-star-half text-warning fs-6"></i>
                    &nbsp;
                    <label class="text-dark fw-bold fs-6">4.5 Stars</label>
                </div>
                <div class="col-lg-12 col-sm-6 pt-2 pb-3">
                    <span class="fs-4 fw-bold text-success">Rs. 717,299 .00</span>
                    &nbsp;&nbsp; | &nbsp;&nbsp;
                    <span class="fs-5 fw-bold text-danger text-decoration-line-through">Rs. 977,490 .00</span>
                    &nbsp;&nbsp; | &nbsp;&nbsp;
                    <span class="fs-6 fw-bold text-black-50">26.6% Discount</span>
                </div>
                <div class="col-lg-12 col-sm-6 mb-sm-1">
                    <b class="availability text-primary bg-warning p-1 fw-bold">In Stock</b>
                    &nbsp;&nbsp; | &nbsp;&nbsp;
                    <b class="text-primary">04 </b><b class="text-black-50">Items Available</b>
                    &nbsp;&nbsp; | &nbsp;&nbsp;
                    <b class="condition text-primary p-1 border border-2 border-info rounded-3" style="font-size: 12px;">New</b>
                    &nbsp;&nbsp; | &nbsp;&nbsp;
                    <label>Quantity :</label>
                    <input class=" fw-bold text-center" style="height: 30px; width: 35px;" type="number" value="1" />
                </div>
                <div class="pt-3 mb-4">
                    <a class="text-black col-lg-5 col-5 btn btn-success fw-bold border border-2 border-dark fs-6" href="invoice.php">Buy Now <i class="bi bi-bag-fill"></i></a>
                    <a class="text-black col-lg-5 col-5 btn btn-warning fw-bold border border-2 border-dark fs-6" href="cart.php">Add to Cart <i class="bi bi-cart-plus-fill"></i></a>
                    <a class="text-sm-center col-lg-1 col-1 btn btn-danger border border-2 border-dark opacity-100 rounded-pill" href="watchlist.php"><i class="bi bi-heart-fill text-black-50 fw-bold"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include "footer.php" ?>
    <!-- footer -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>