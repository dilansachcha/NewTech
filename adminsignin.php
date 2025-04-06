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
                <div class="col-md-5 mx-auto bg-dark shadow rounded">
                    <div class="row">
                            <form class="p-4" action="signin">
                                <div class="text-center py-2">
                                    <h1 class="fw-bolder text-white display-6">Admin Login</h1>
                                </div>
                                <div class="input-group mb-2">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                                    <input type="email" class="form-control" placeholder="Admin Email" aria-label="adminemail" aria-describedby="basic-addon1">
                                </div>
                                <div class="text-center">
                                    <a href="adminpanel.php" type="submit" class="col-12 btn btn-primary shadow">Send the Verification Code</a>
                                    <p class="text-center text-white mt-2" style="font-size: 13px;"><a href="signin.php">Back to Customer Sign In</a></p>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center text-white-50 mt-4">
            <h6><i class="bi bi-c-circle-fill"></i> 2022 NewTech.lk | All Rights Reserved</h6>
            <p style="font-size: 12px;">44 Software Solutions</p>
        </div>
    </section>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>