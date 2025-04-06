<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Cart</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body style="background-color: #1a1d53;">

    <!-- nav bar -->
    <?php include "header.php" ?>
    <!-- nav bar -->
    <section class="p-lg-5 p-4">
    <div class="col-lg-12 m-auto text-center">
            <h1 class="lh-sm text-white">Cart <i class="bi bi-cart4"></i></h1>
            <p class="text-white">Just One Step Away!</p>
        </div>   
            <div class="table-responsive ">
                <table class="table table-light table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th class="text-end" scope="col">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="align-middle" scope="row">1</th>
                            <td>
                                <div class="card mb-3 border-0" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="resources/snglprdctimgs/TVfront.webp" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title">Samsung Neo QN90B Smart TV</h6>
                                                <p class="card-text"><small class="text-muted">Price: Rs. 717,299 .00</small></p>
                                                <a href="#" style="font-size: 13px;" class="btn btn-danger border border-dark border-1 rounded-pill text-black mt-1"><i class="bi bi-trash3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><input type="number" value="1" style="width: 40px; height: 30px;"></td>
                            <td class="text-end align-middle ">Rs. 717,299 .00</td>
                        </tr>
                        <tr>
                            <th class="align-middle" scope="row">2</th>
                            <td>
                                <div class="card mb-3 border-0" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="resources/snglprdctimgs/TVfront.webp" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title">Samsung Neo QN90B Smart TV</h6>
                                                <p class="card-text"><small class="text-muted">Price: Rs. 717,299 .00</small></p>
                                                <a href="#" style="font-size: 13px;" class="btn btn-danger border border-dark border-1 rounded-pill text-black mt-1"><i class="bi bi-trash3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><input type="number" value="1" style="width: 40px; height: 30px;"></td>
                            <td class="text-end align-middle ">Rs. 717,299 .00</td>
                        </tr>
                        <tr>
                            <th class="align-middle" scope="row">3</th>
                            <td>
                                <div class="card mb-3 border-0" style="max-width: 540px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="resources/snglprdctimgs/TVfront.webp" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h6 class="card-title">Samsung Neo QN90B Smart TV</h6>
                                                <p class="card-text"><small class="text-muted">Price: Rs. 717,299 .00</small></p>
                                                <a href="#" style="font-size: 13px;" class="btn btn-danger border border-dark border-1 rounded-pill text-black mt-1"><i class="bi bi-trash3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><input type="number" value="1" style="width: 40px; height: 30px;"></td>
                            <td class="text-end align-middle">Rs. 717,299 .00</td>
                        </tr>
                    </tbody>
                </table>       
            <div class="fs-5 offset-lg-7 offset-md-7">
                <table class="table bg-transparent text-white border-top border-3 table-borderless table-responsive">
                    <tbody>
                        <tr>
                            <td>Sub Total</td>
                            <td class="text-end">Rs. 2,151,897 .00</td>
                        </tr>
                        <tr>
                            <td>Delivery</td>
                            <td class="text-end">Rs. 1500 .00</td>
                        </tr>
                        <tr>
                            <td>Discount</td>
                            <td class="text-end">Rs. 15,500 .00</td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td class="text-end">Rs. 200 .00</td>
                        </tr>
                        <tr>
                            <td class="fw-bolder">Total</td>
                            <td class="fw-bolder text-end">Rs. 2,138,097 .00</td>
                        </tr>
                    </tbody>
                </table>
                <a href="invoice.php" class="btn btn-success col-12">Proceed to Checkout</a>
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