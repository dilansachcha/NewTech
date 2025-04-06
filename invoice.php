<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Invoice</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body style="background-color: #1a1d53;">
    <section class="py-4 shadow">
        <div class="container p-5 bg-white border border-3 border-dark" style="max-width: 850px;">
            <div>
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <h2 class="text-black" href="home.php"><i class="bi bi-mouse2 text-black-50"></i>New<b class="text-black-50">Tech<b class="text-black">&trade;</b></b></h2>
                    </div>
                    <div class="col-sm-5 text-end">
                        <h4 class="fw-bold text-black-50">Invoice</h4>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-4"><b>Date:</b><small> 01/11/2022</small></div>
                    <div class="col-sm-4 text-center"><b>Time:</b><small> 11:59:03</small></div>
                    <div class="col-sm-4 text-end"><b>Invoice No:</b><small> 0001</small></div>
                </div>
                <hr />
            </div>
            <div class="row">
                <div class="col-sm-6"><b>Bill to:</b><br /><small> Dilan Sachintha <br>No.44, Kottawa,<br>Sri Lanka.</small></div>
                <div class="col-sm-6 text-end"><b>From: </b><small><a class="text-decoration-none" href="home.php">NewTech (Pvt) Ltd.</a><br>No.2 Flower Rd., <br>Colombo, <br>Sri Lanka.</small></div>
            </div>
            <hr />
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-light text-center table-responsive">
                        <thead class="card-header table-dark text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Order ID</th>
                                <th scope="col">Product Description</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>0001</td>
                                <td>Samsung Neo QN90B Smart TV</td>
                                <td>Rs. 717,299 .00</td>
                                <td>02</td>
                                <td>Rs. 1,434,598 .00</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>0002</td>
                                <td>Samsung Neo QN90B Smart TV</td>
                                <td>Rs. 717,299 .00</td>
                                <td>02</td>
                                <td>Rs. 1,434,598 .00</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>0003</td>
                                <td>Samsung Neo QN90B Smart TV</td>
                                <td>Rs. 717,299 .00</td>
                                <td>02</td>
                                <td>Rs. 1,434,598 .00</td>
                            </tr>
                        </tbody>
                        <tfoot class="card-footer table-dark text-white">
                            <tr>
                                <td colspan="5" class="text-end"><b>Sub Total:</b></td>
                                <td>Rs. 4,303,794 .00</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-end"><b>Sales Tax 6.5%:</b></td>
                                <td>Rs. 279,746.61 .00</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="text-end"><b>Sub Total:</b></td>
                                <td>Rs. 32,278,455 .00</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="text-center mt-4">
                <p><b>NOTE: </b><small>This is a computer generate receipt, no signature required.</small></p>
                <p>Thank You!</p>
                <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" class="btn btn-outline-dark">Print <i class="bi bi-printer"></i></button>
                    <button type="button" class="btn btn-outline-dark">Export as a PDF <i class="bi bi-filetype-pdf"></i></button>
                </div>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>