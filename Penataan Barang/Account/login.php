<?php

session_start();


    if( isset($_SESSION["login"])){
        header("Location: ../Admin/index.php");
        exit;
    }


require 'functions.php';

if( isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin_account WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    //cek username
    if( $result->num_rows == 1 ){

        $_SESSION["login"] = true;

        header("Location: ../Admin/index.php");
    }else{
        echo "<script>alert('Username/password salah!')</script>;";
    }

}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MATPING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <section class="vh-100 bg-dark bg-gradient shadow-sm" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>
                            <form action="" method="POST">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control form-control-lg" />
                            </div>
    
                            <div class="form-outline mb-4">
                                <label class="text-start form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            </div>
                            <!-- Checkbox -->
                            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END MAIN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></>
</body>

</html>