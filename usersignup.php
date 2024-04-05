<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign up to Fun Olympic Games</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            color: #495057;
            font-family: Arial, sans-serif;
        }

        .form-container {

            margin-top: 5%;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            background-color: #f1f3f6;
            color: #495057;
            border: none;
            border-radius: 20px;
            padding: 15px;
            box-shadow: none;
        }

        .form-control:focus {
            background-color: #f1f3f6;
            color: #495057;
            box-shadow: none;
            border-color: #f1f3f6;
        }

        .btn {
            background-color: #ffc107;
            color: #212529;
            border: none;
            border-radius: 20px;
            font-weight: bold;
            padding: 12px 30px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #ffca2c;
            color: #212529;
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        }

        .btn-cancel {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-cancel:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .link {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .link:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .form-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-subtitle {
            font-size: 18px;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-4 pt-4">
                    <h1 class="form-title">Sign Up</h1>
                    <h2 class="form-subtitle">Join us and be part of the Fun Olympic Games community!</h2>
                    <img src="assets/img/slide1.jpg" alt="Olympic Games" class="form-img">
                </div>
                <div class="col-md-6 form-container">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password">
                        </div>

                        <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>
                        <br>

                        <button type="submit" class="btn btn-block">Sign Up</button>
                        <button type="reset" class="btn btn-cancel btn-block">Cancel</button>
                        <div class="text-center mt-3">
                            Already have an account? <a href="userlogin.php" class="link">Log in</a>
                        </div>
                    </form>

                    <?php
                    include "connection.php";
                    if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['g-recaptcha-response'])) {
                        $secretkey="6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
                        $ip=$_SERVER['REMOTE_ADDR'];
                        $response=$_POST['g-recaptcha-response'];
                        $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                        $request=file_get_contents($url);
                        $data=json_decode($request);
                        $a = $_POST['fname'];
                        $b = $_POST["lname"];
                        $c = $_POST["username"];
                        $d = md5($_POST["password"]); //md5 is used to make the text cipher 
                        $e = md5($_POST["cpassword"]);

                        if($data->success==false)
                        {
                            echo "<div class='alert alert-danger mt-3'>Fill Recaptcha</div>";
                        }
                        if ($a == "" || $b == "" || $c == "" || $d == "" || $e == "") {
                            //echo "Please fill all fields.";
                            echo "<div class='alert alert-danger mt-3'>Some fields are empty</div>";
                            //echo "<script>window.alert('Some fields are empty!')</script>";
                    
                        } else if ($d != $e) {
                            echo "<div class='alert alert-danger mt-3'>Password do not match</div>";
                        } else {

                            $query = "insert into users(first_name, last_name, username, password)
                             values('$a','$b','$c','$d')";
                            $run = mysqli_query($conn, $query);
                            if ($run) {
                                echo "<div class='alert alert-success mt-3'>Sign up successfull</div>";
                            } else {
                                echo "<div class='alert alert-success mt-3'>Error found! </div>";
                            }
                        }

                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>
