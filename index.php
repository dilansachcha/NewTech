<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Sign Up </title>

    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resources/NewTechIcon-modified.png" />

</head>

<body style="background-color: #1a1d53;">

    <section class="d-flex flex-column min-vh-100 justify-content-center align-align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto bg-dark shadow rounded">
                    <div class="row">
                        <div class="col-md-6">
                            <div>
                                <img src="resources/NewTech-Logo.png" class="img-fluid p-4" alt="sigup">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form class="p-4" action="signup">
                                <div class="text-center">
                                    <h1 class="fw-bolder text-white display-6">Sign Up</h1>
                                    <p class="text-white-50 fs-6">Get Registered on NewTech.</p>
                                </div>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Pick a Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                                    <input type="email" class="form-control" placeholder="Enter Your Email Address" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Choose a Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-1">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                                    <input type="password" class="form-control" placeholder="Confirm Your Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="text-center py-1">
                                    <a href="signin.php" type="submit" class="col-12 btn btn-primary shadow">Sign Up</a>
                                    <p class="text-center text-white mt-2" style="font-size: 13px;">Already have an Account? <a href="signin.php">Sign In Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-white-50 mt-4">
            <h6><i class="bi bi-c-circle-fill"></i> 2022 NewTech.lk | All Rights Reserved</h6>
            <p style="font-size: 12px;">44 Software Solutions</p>
            <a href="adminsignin.php" style="font-size: 12px;" class="btn btn-primary bg-transparent rounded-pill text-white-50">Admin Login</a>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>