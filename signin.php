<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NewTech | Sign In </title>

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
                            <form class="p-4" action="signin">
                                <div class="text-center">
                                    <h1 class="fw-bolder text-white display-6">Sign In</h1>
                                    <p class="text-white-50 fs-6">Welcome Back! Please Enter Your Details.</p>
                                </div>
                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group py-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="py-1 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-white pe-lg-5" for="exampleCheck1">Remember Me</label>
                                    &nbsp;
                                    <a class="ps-lg-5 ms-lg-5 ms-4 ps-5" href="#">Forgot Password</a>
                                </div>
                                <div class="text-center py-2">
                                    <a href="home.php" type="submit" class="col-12 btn btn-primary shadow">Sign In</a>
                                    <p class="text-center text-white mt-2" style="font-size: 13px;">New to newTech? <br /> <a href="index.php">Sign Up Now</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div>
                                <img src="resources/NewTech-Logo.png" class="img-fluid p-4" alt="signin">
                            </div>
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