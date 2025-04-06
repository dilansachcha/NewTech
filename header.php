<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Header</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body class="main-body">
    <nav class="navbar navbar-expand-lg sticky-top navbar-light p-3 shadow-sm" style="background: rgb(136,139,199);
background: radial-gradient(circle, rgba(136,139,199,1) 0%, rgba(26,29,83,1) 100%);">
        <div class="container">
            <a class="navbar-brand ps-2" href="home.php"><img src="resources/NewTechIcon-modified.png" style="width: 3rem;"><b class="text-white"> New</b><b class="text-primary">Tech<b class="text-white">&trade;</b></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
                <div class="input-group">
                    <span class="border-dark input-group-text bg-transparent text-white"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-dark bg-transparent" style="color:#7a7a7a" placeholder="Search on NewTech..." />
                    <button class="btn btn-primary border border-dark text-white border-primary">Search</button>
                    <a href="advancedSearch.php" class="btn btn-primary text-white border border-dark border-3"><small>Advanced Search</small></a>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02">
                <ul class="navbar-nav ms-auto fw-bold">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="home.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">contact us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto fw-bold">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="cart.php">Cart <i class="bi bi-cart3 me-1"></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mx-2 text-uppercase" href="#" type="button" id="AccountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i> My Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="AccountDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Orders</a></li>
                            <li><a class="dropdown-item" href="watchlist.php">Watchlist</a></li>
                            <li><a class="dropdown-item" href="purchasedhistory.php">Purchased History</a></li>
                            <li><a class="dropdown-item" href="#">Saved</a></li>
                            <li><a class="dropdown-item" href="#">Recently Viewed</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item text-danger" href="signin.php">Sign Out <i class="bi bi-box-arrow-right"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="ms-auto d-none d-lg-block">
        <div class="input-group">
            <span class="border-primary input-group-text bg-transparent text-white bg-transparent"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control border-primary bg-transparent" placeholder="Search on NewTech..." style="color:#7a7a7a" />
            <button class="btn btn-sm btn-primary text-white border-primary">Search</button>
            <a href="advancedSearch.php" class="btn btn-sm btn-dark text-white border border-primary border-3"><small>Advanced Search</small></a>
        </div>
    </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>