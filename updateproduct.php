<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Home</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body style="background-color: #1a1d53;">


    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration bg-dark" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <div class="row">
                                <div class="col-md-9">
                                    <small>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="adminpanel.php">Admin Panel</a></li>
                                                <li class="breadcrumb-item"><a href="productManagement.php">Product Management</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Product Registration</li>
                                            </ol>
                                        </nav>
                                    </small>
                                </div>
                                <div class="col-md-3 text-end">
                                    <a href="home.php" class="text-decoration-none">
                                        <h6 class="text-white " href="home.php"><i class="bi bi-mouse2 text-primary"></i>New<b class="text-primary">Tech<b class="text-white">&trade;</b></b></h6>
                                    </a>
                                </div>
                            </div>
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-white">Product Updating <i class="bi bi-box-seam"></i></h3>
                            <form class="text-white-50">

                                <div class="row mb-1">
                                    <div class="col-md-4 mb-4">

                                        <div class="dropdown text-start">
                                            <a class="btn btn-dark border border-1 border-white text-white-50 dropdown-toggle form-control form-control-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" disabled>
                                                Already Selected
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="col-md-4 mb-4 text-end">

                                        <div class="dropdown">
                                            <a class="btn btn-dark border border-1 border-white text-white-50 dropdown-toggle form-control form-control-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" disabled>
                                                Already Selected
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="col-md-4 mb-4 text-end">

                                        <div class="dropdown">
                                            <a class="btn btn-dark border border-1 border-white text-white-50 dropdown-toggle form-control form-control-lg" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" disabled>
                                                Already Selected
                                            </a>

                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 d-flex align-items-center">

                                        <div class="form-outline w-100">
                                            <input type="text" class="form-control form-control-lg" id="productName" />
                                            <label for="productName" class="form-label">Add Product Name</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <h6 class="mb-2 pb-1">Condition: </h6>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked disabled/>
                                            <label class="form-check-label" for="femaleGender">Brand New</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" disabled/>
                                            <label class="form-check-label" for="maleGender">Used</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 mb-4">

                                        <div class="input-group">
                                            <span class="input-group-text">Rs.</span>
                                            <input type="text" class="form-control form-control-lg" aria-label="Amount">
                                            <span class="input-group-text">.00</span>
                                            <label class="form-label" for="emailAddress">Cost per Item</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-4">
                                        <div class="form-outline">
                                            <input type="number" id="qty" value="1" class="form-control form-control-lg" />
                                            <label class="form-label" for="phoneNumber">Quantity</label>
                                        </div>
                                    </div>
                                    <div class="col-md-5 mb-4">
                                        <div class="input-group">
                                            <span class="input-group-text">Rs.</span>
                                            <input type="text" class="form-control form-control-lg" aria-label="Amount">
                                            <span class="input-group-text">.00</span>
                                            <label class="form-label" for="emailAddress">Product Delivery Fee</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 mb-4">
                                        <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        <label class="form-label">Add Product Description</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="offset-lg-3 col-12 col-lg-6">
                                            <div class="row">
                                                <div class="col-4 border border-dark-50 rounded">
                                                    <img src="resources/snglprdctimgs/TVfront.webp" class="img-fluid" style="width: 250px;" />
                                                </div>
                                                <div class="col-4 border border-dark-50 rounded">
                                                    <img src="resources/snglprdctimgs/TVangle.webp" class="img-fluid" style="width: 250px;" />
                                                </div>
                                                <div class="col-4 border border-dark-50 rounded">
                                                    <img src="resources/snglprdctimgs/TVside.webp" class="img-fluid" style="width: 250px;" />
                                                </div>
                                            </div>
                                            <small class="form-label text-center">Add Product Images</small>

                                        </div>
                                        <div class="offset-lg-3 col-12 col-lg-6 d-grid mt-3">
                                            <input type="file" class="d-none" id="imageuploader" multiple />
                                            <label for="imageuploader" class="btn btn-primary">Upload Images <i class="bi bi-cloud-upload"></i></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4 pt-2 text-center">
                                    <input class="btn btn-success" type="submit" value="Save Product"/>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>