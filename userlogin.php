
<?php
session_start();
?>
<!doctype html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login to Fun Olympic Games</title>
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
        background: linear-gradient(86deg, #f5d86f, #e7cece);
    color: #333;
}

.form-container {
    background: linear-gradient(18deg, #ffcb0e, #e5cece);
    border-radius: 20px;
    padding: 50px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

.form-control {
    background-color: #fff;
    color: #333;
    border: none;
    border-radius: 5px;
    box-shadow: none;
}

.form-control:focus {
    box-shadow: 0 0 0 0.2rem rgba(25, 118, 210, 0.5);
}

.input-group-text {
    background-color: #fff;
    color: #333;
    border: none;
    border-radius: 5px;
    box-shadow: none;
}

.input-group-text:hover {
    cursor: pointer;
}

.btn {
    background: linear-gradient(135deg, #ffa726, #fb8c00);
    color: #fff;
    border: none;
    border-radius: 20px;
    font-weight: bold;
    box-shadow: none;
}

.btn:hover {
    background: linear-gradient(135deg, #fb8c00, #f57c00);
    color: #fff;
}

.btn:focus {
    box-shadow: 0 0 0 0.2rem rgba(251, 140, 0, 0.5);
}

.btn-cancel {
    background: linear-gradient(135deg, #e57373, #c62828);
    border: none;
}

.btn-cancel:hover {
    background: linear-gradient(135deg, #c62828, #b71c1c);
    border: none;
}

.form-group a {
    color: #1976d2;
}

.form-group a:hover {
    text-decoration: none;
    color: #1565c0;
}

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-4 " style="color: #c34307;|">
                    <h2 class="display-4">Login to Fun Olympic Games</h2>
                    <h4>Get the Olympic Highlights for free</h4>
                    <img src="assets/img/slide2.jpg" alt="" class="img-thumbnail">
                </div>
                <div class="col-md-6 mt-lg-5 form-container">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="showPasswordToggle">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>
                        <br>


                        <button type="submit" class="btn btn-block" name="submit">Login</button>

                        <button type="reset" class="btn btn-cancel btn-block">Cancel</button>
                        <div class="form-group mt-3 text-center">
                            <a href="forgot-password.php" class="text-primary">Forgot Password?</a>
                        </div>
                        <div class="form-group text-center">
                            <a href="usersignup.php" class="text-success">Create new account</a>
                        </div>
                    </form>
                    <?php


                    // connecting database  with file name 'connection.php'
                    include "connection.php";
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
                        $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
                        $ip = $_SERVER['REMOTE_ADDR'];
                        $response = $_POST['g-recaptcha-response'];
                        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                        $request = file_get_contents($url);
                        $data = json_decode($request);
                        $a = $_POST['username'];
                        $b = md5($_POST['password']);
                        if ($a == '' || $b == '') {
                            echo "<div class='alert alert-warning'> some fields are empty! </div>";
                        } else {
                            $query = "select * from users where username='$a' and password='$b'";
                            $run = mysqli_query($conn, $query);
                            if (mysqli_num_rows($run) > 0) {
                                $_SESSION['username'] = $a;
                                echo "<script>window.open('userindex.php','_self') </script>";
                            } else {
                                echo "<div class='alert alert-danger'> Invalid User! </div>";
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <!-- Password Toggle Script -->
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordToggle = document.getElementById('showPasswordToggle');

        showPasswordToggle.addEventListener('click', () => {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordToggle.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                passwordInput.type = 'password';
                showPasswordToggle.innerHTML = '<i class="fas fa-eye"></i>';
            }
        });
    </script>
</body>

</html>