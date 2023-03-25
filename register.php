<?php
session_start();
include("./connection.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register to craakit</title>
    <!--Fav icon-->
    <link href="./exam_icon.png" rel="icon">
    <link href="./apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="./all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        .bg-register-img {
            background: url(../assets/img/register.jpg);
            background-position: center;
            background-size: 720px;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-img"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="firstname" id="firstname" required="" placeholder="First Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lastname" id="lastName" required="" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" id="email" required="" placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="username" id="username" required="" placeholder="Enter username">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password" id="password" required="" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="contact" id="contact" required="" placeholder="Contact ">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="course" required="" id="course" placeholder="Enter course: UPSC/JEE/NEET/IIT">
                                        <!-- <div class="form-group col-lg-12">
                                            <label>Course</label>
                                            <select class="form-group" required="" name="course">
                                                <option>UPSC</option>
                                                <option>NEET</option>
                                                <option>JEE</option>
                                                <option>IIT</option>
                                                <option>CET</option>
                                            </select>

                                        </div> -->

                                    </div>
                                </div>

                                <button type="submit" name="submit1" class="btn btn-primary btn-user btn-block">Register Account </button>

                                <div class="alert alert-success" id="success" style="margin-top:10px; display: none">
                                    <strong>Success!</strong> Account registered succesfully

                                </div>
                                <div class="alert alert-danger" id="failure" style="margin-top:10px; display: none">
                                    <strong>Already Exist!</strong> This Username Already Exists
                                </div>
                                <!-- <a href="login.php" aria-required="" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a> -->
                                <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="../index.php">Click here to go for Home page!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    if (isset($_POST["submit1"])) {
        $count = 0;
        $Bytes = random_bytes(3);
        $UUID = bin2hex($Bytes);
        $res = mysqli_query($link, "select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
        $count = mysqli_num_rows($res);

        if ($count > 0) {
    ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "none";
                document.getElementById("failure").style.display = "block";
            </script>
        <?php
        } else {
            mysqli_query($link, "insert into registration values('$UUID','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[course]')");
        ?>
            <script type="text/javascript">
                document.getElementById("success").style.display = "block";
                document.getElementById("failure").style.display = "none";
            </script>
    <?php
        }
    }

    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="./jquery.min.js"></script>
    <script src="./bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./sb-admin-2.min.js"></script>

</body>

</html>