<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Admin Panel</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body style="background-color: #1a1d53;">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 col-lg-2">
                <div class="row">
                    <div class="col-12 align-items-start bg-dark vh-100">
                        <div class="row">

                            <div class="container d-flex overflow-hidden py-4">
                                <div class="bg-dark">
                                    <div class="text-center py-4 primary-text py-3 fs-4 fw-bold text-uppercase border-bottom">
                                        <a class="navbar-brand ps-2 text-white" href=""><img src="resources/NewTechIcon-modified.png" style="width: 3rem;">&nbsp;New<b class="text-primary">Tech<b class="text-white">&trade;</b></b></a>
                                    </div>
                                    <div class="list-group list-group-flush my-3">
                                        <a href="#" class="btn btn-dark list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-speedometer me-2"></i>Dashboard</a>
                                        <a href="#" class="btn btn-dark list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-graph-up-arrow me-2"></i>Analytics</a>
                                        <a href="userManagement.php" class="btn btn-dark list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-people-fill me-2"></i></i>Manage Users</a>
                                        <a href="productManagement.php" class="btn btn-dark list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-gift me-2"></i>Manage Products</a>
                                        <a href="#" class="btn btn-dark list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-receipt me-2"></i>Manage Sales</a>
                                        <a href="#" class="btn btn-dark list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-person-heart me-2"></i>Customer Care</a>
                                        <a href="#" class="btn btn-dark list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-truck me-2"></i>Deliveries</a>
                                        <a href="adminsignin.php" class="btn btn-dark list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-10">
                <div class="row">

                    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                        <div class="d-flex align-items-center">
                            <i class="fs-4 me-3" id="menu-toggle"></i>
                            <h3 class="fs-4 m-0 text-white-50"><i class="bi bi-speedometer me-2"></i> Admin Dashboard</h3>
                        </div>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle second-text fw-bold text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-user me-2"></i>Admin Name
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- 
                    <div class="text-white fw-bold mb-1 mt-3">
                        <h2 class="fw-bold">Dashboard</h2>
                    </div>
                    <div class="col-12">
                        <hr />
                    </div> -->
                    <div class="col-12">
                        <div class="row g-1">

                            <div class="col-6 col-lg-4 px-1 shadow">
                                <div class="row g-1">
                                    <div class="col-12 text-center text-white rounded pt-3 bg-dark shadow-sm d-flex justify-content-around align-items-center">
                                        <div>
                                            <h6 class="fs-2">Products</h6>
                                            <select class="form-select text-center bg-dark border border-white text-white-50" aria-label="Default select example">
                                                <option selected>Overall</option>
                                                <option value="1">Yearly</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Daily</option>
                                            </select>
                                            <p class="fs-3 mt-2">10,567</p>
                                        </div>
                                        <i class="bi bi-gift display-2 p-2"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 text-center text-primary rounded pt-3 bg-dark shadow-sm d-flex justify-content-around align-items-center">
                                        <div>
                                            <h3 class="fs-2">Sales</h3>
                                            <select class="form-select text-center bg-dark border border-primary text-white-50" aria-label="Default select example">
                                                <option selected>Overall</option>
                                                <option value="1">Yearly</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Daily</option>
                                            </select>
                                            <p class="fs-3 mt-2">9875</p>
                                        </div>
                                        <i class="bi bi-receipt-cutoff display-2 p-2"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 text-center text-info rounded pt-3 bg-dark shadow-sm d-flex justify-content-around align-items-center">
                                        <div>
                                            <h3 class="fs-2">Deliveries</h3>
                                            <select class="form-select text-center bg-dark border border-info text-white-50" aria-label="Default select example">
                                                <option selected>Overall</option>
                                                <option value="1">Yearly</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Daily</option>
                                            </select>
                                            <p class="fs-3 mt-2">9815</p>
                                        </div>
                                        <i class="bi bi-truck display-2 p-2"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 text-center text-success rounded pt-3 bg-dark shadow-sm d-flex justify-content-around align-items-center">
                                        <div>
                                            <h3 class="fs-2">Customers</h3>
                                            <select class="form-select text-center bg-dark border border-success text-white-50" aria-label="Default select example">
                                                <option selected>Overall</option>
                                                <option value="1">Yearly</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Daily</option>
                                            </select>
                                            <p class="fs-3 mt-2">5245</p>
                                        </div>
                                        <i class="bi bi-people display-2 p-2"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 px-1">
                                <div class="row g-1">
                                    <div class="col-12 text-center text-warning rounded pt-3 bg-dark shadow-sm d-flex justify-content-around align-items-center">
                                        <div>
                                            <h3 class="fs-2">Increase%</h3>
                                            <select class="form-select text-center bg-dark border border-warning text-white-50" aria-label="Default select example">
                                                <option selected>Overall</option>
                                                <option value="1">Yearly</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Daily</option>
                                            </select>
                                            <p class="fs-3 mt-2">22%</p>
                                        </div>
                                        <i class="bi bi-graph-up display-2 p-2"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-lg-4 px-1 shadow">
                                <div class="row g-1">
                                    <div class="col-12 text-center text-danger rounded pt-3 bg-dark shadow-sm d-flex justify-content-around align-items-center">
                                        <div>
                                            <h3 class="fs-2">Profit</h3>
                                            <select class="form-select text-center bg-dark border border-danger text-white-50" aria-label="Default select example">
                                                <option selected>Overall</option>
                                                <option value="1">Yearly</option>
                                                <option value="2">Monthly</option>
                                                <option value="3">Daily</option>
                                            </select>
                                            <p class="fs-3 mt-2">Rs. 1,357,890 .00</p>
                                        </div>
                                        <i class="bi bi-coin display-2 p-2"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="p-2">
                        <div class="col-12 bg-dark">
                            <div class="row p-3">
                                <div class="col-12 col-lg-5 text-center align-self-center">
                                    <label class="form-label fs-3 fw-bold text-white">Total Active Time</label>
                                </div>
                                <div class="col-12 col-lg-7 text-center">
                                    <label class="form-label fs-4 fw-bold text-primary">
                                        00 Years 00 Months 00 Days <br> 00 Hours 00 Minutes 00 Seconds
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-2">
                        <div class="col-12 bg-dark">
                        <div class="row">
                    <h3 class="fs-4 mb-3 text-white-50 text-center pt-3">Recent Orders</h3>
                    <div class="col px-4">
                        <table class="table table-dark bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>SMT145679</td>
                                    <td>notorious_mcg</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>SMT145679</td>
                                    <td>dilan_sachcha</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>SMT145679</td>
                                    <td>bonny_jones</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>SMT145679</td>
                                    <td>gemin1</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>SMT145679</td>
                                    <td>j_gaethje</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>SMT145679</td>
                                    <td>dusting_thediamond</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>SMT145679</td>
                                    <td>izzy_ade</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>SMT145679</td>
                                    <td>khabib_eagle</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">9</th>
                                    <td>SMT145679</td>
                                    <td>thug_rose</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>SMT145679</td>
                                    <td>leon_rocky</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>SMT145679V</td>
                                    <td>khamzat_b</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>SMT145679</td>
                                    <td>ngannou_hw</td>
                                    <td>Rs. 717,299 .00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                        </div>
                    </div>
<!-- 
                    <div class="offset-1 col-10 col-lg-4 my-3 rounded bg-body">
                        <div class="row g-1">
                            <div class="col-12 text-center">
                                <label class="form-label fs-4 fw-bold text-decoration-underline">Mostly Sold Item</label>
                            </div>
                            <div class="col-12 text-center shadow">
                                <img src="resource/empty.svg" class="img-fluid rounded-top" style="height: 250px;" />
                            </div>
                            <div class="col-12 text-center my-3">
                                <span class="fs-5 fw-bold">Apple iPhone 12</span><br />
                                <span class="fs-6">100 items</span><br />
                                <span class="fs-6">Rs. 100000 .00</span>
                            </div>
                            <div class="col-12">
                                <div class="first-place"></div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>

        </div>
    </div>

    <!-- <div class="container d-flex overflow-hidden py-4">
        <div class="bg-dark h-100">
            <div class="text-center py-4 primary-text p-3 fs-4 fw-bold text-uppercase border-bottom">
                <a class="navbar-brand ps-2 text-white" href=""><img src="resources/NewTechIcon-modified.png" style="width: 3rem;">&nbsp;New<b class="text-primary">Tech<b class="text-white">&trade;</b></b></a>
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="bi bi-speedometer me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-graph-up-arrow me-2"></i>Analytics</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-people-fill me-2"></i></i>User Management</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-gift me-2"></i>Product Management</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-person-heart me-2"></i>Customer Care</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text text-white-50 fw-bold"><i class="bi bi-truck me-2"></i>Deliveries</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
            </div>
</div>

        
    </div> -->



    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>