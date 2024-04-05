<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Welcome to Fun Olymic Games 2024</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="FunOlympic Games 2024, Online Broadcast, Sports Registration, Admin Portal">
    <meta name="description" content="Explore the FunOlympic Games 2024 - Register to access online broadcasts of various sports. Admin portal for managing user interactions.">
    <meta name="author" content="Your Name">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../assets/css/adminformstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Monoton&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Theme Style -->

</head>

<body class="d-flex align-items-center">

    <div class="col-md-4 mt-5 mb-4 p-2 border rounded bg-transparent mx-auto ">
        <form action="index.php" method="post">
            <!-- Form Group -->
            <div class="form-group">
                <label for="username"><i class="bi bi-person-circle"></i> Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <!-- Form Group -->
            <!-- Form Group -->
            <div class="form-group">
                <label for="password"><i class="bi bi-lock"></i> Password:</label>
                <div class="input-group ">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <span class="input-group-text" id="showPasswordToggle">
                            <i class="bi bi-eye" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>

            <script>
                const passwordInput = document.getElementById('password');
                const showPasswordToggle = document.getElementById('showPasswordToggle');

                showPasswordToggle.addEventListener('click', () => {
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        showPasswordToggle.innerHTML = '<i class="bi bi-eye-slash" aria-hidden="true"></i>';
                    } else {
                        passwordInput.type = 'password';
                        showPasswordToggle.innerHTML = '<i class="bi bi-eye" aria-hidden="true"></i>';
                    }
                });
            </script>

            <!-- Google reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>

            <!-- Form Buttons -->
            <button type="submit" class="btn btn-warning"><i class="bi bi-person"></i> Login</button>
            <button type="reset" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancel</button>


        </form>
        <?php
        include "../connection.php";

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
            $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
            $ip = $_SERVER['REMOTE_ADDR'];
            $response = $_POST['g-recaptcha-response'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
            $request = file_get_contents($url);
            $data = json_decode($request);

            $a = $_POST['username'];
            $b = md5($_POST['password']);

            if (empty($a) || empty($b)) {
                echo "<div class='alert alert-warning mt-3'> Some fields are empty! </div>";
            } else {
                // Check if entered credentials are the default admin credentials
                if ($a == "admin" && $b == md5("admin")) {
                    $_SESSION['username'] = $a;
                    echo "<script>window.open('main.php', '_self')</script>";
                } else {
                    echo "<div class='alert alert-danger mt-3'> Invalid User! </div>";
                }
            }
        }


        ?>
    </div>
</body>

</html>