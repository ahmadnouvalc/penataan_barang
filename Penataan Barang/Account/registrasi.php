<?php
require 'functions.php';

// if ($conn->connect_error) {
//     die('Koneksi database gagal: ' . $conn->connect_error);
// }
// echo 'Koneksi database berhasil!';

if( isset($_POST["singup"])){
    if(signup($_POST) > 0){
        echo "<script>alert('akun baru telah dibuat!');</script>";
    }else{
        echo mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MATPING | Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 bg-dark bg-gradient shadow-sm" style="background-color: #DC3545;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign Up</h3>
                            <form action="" method="POST">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="username"></label>
                                    <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Create Username"/>
                                </div>
        
                                <div class="form-outline mb-4">
                                    <label class="text-start form-label" for="password"></label>
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Create Password"/>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="text-start form-label" for="password2"></label>
                                    <input type="password" id="password2" name="password2" class="form-control form-control-lg " placeholder="Confirm Password" />
                                </div>

                                <button class="btn btn-danger btn-lg btn-block" type="submit" id="signup" name="signup">Sign Up</button>
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
        crossorigin="anonymous"></script>
</body>

</html>