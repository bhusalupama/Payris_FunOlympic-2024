<?php
session_start()
?>
<!doctype html>
<html lang="en">

<head>
    <title>Welcome to Fun Olympic Games 2024</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="United Limited| Real State Business| Buy House| Buy Land">
    <meta name="description" content="United Limited| Real State Business| Buy House| Buy Land">
    <meta name="author" content="Asbin Magar">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/logo2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Monoton&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <!-- <style>
        /* Add the desired height and width for carousel images */
        .carousel-item img {
            width: 100%; /* Set the width as you like, it will scale proportionally */
            height: 500px; /* Set the height as you like */
            object-fit: cover; /* This property ensures the image covers the entire container */
        }
    </style> -->
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])) {
        include 'header.php';
    } else {
        include 'userheader.php';
    }
    ?>

    <div class="jumbotron jumbotron-fluid bg-light   mb-0" style="margin-top:5% ;" id="news">
        <div class="container">
            <h2 class="display-4 text-center">Contact us</h1>
                <hr class="my-2">
                <br>
                <div class="row">
                    <div class="col-md-8">
                        <strong>Fun Olympic Paris</strong>
                        <p> <i class='fa fa-map-marker'></i> Paris, France </p>
                        <p> <i class='fa fa-phone'></i> +33 1 23 45 67 89</p>
                        <p> <i class='fa fa-envelope'></i> info@funolympicparis.com</p>
                        <a href="https://www.funolympicparis.com" class="t-black">
                            <p> <i class='fa fa-globe'></i> www.funolympicparis.com</p>
                        </a>


                        <h2>Send feedback to us:</h2>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group">
                                <label for="name"><i class="fa fa-user"></i> Your name</label>
                                <input type="text" class="form-control" name="fname" id="fullname" aria-describedby="helpId" placeholder="Full Name" Required>

                            </div>

                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <label for="message"><i class="fa fa-comment"></i> Message:</label>
                                <textarea class="form-control" name="message" id="message" rows="10" placeholder="Your message here" required></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn-lg btn-outline-dark">Send</button>
                        <button type="reset" name="reset" class="btn-lg btn-outline-danger">Cancel</button>
                    </div>
                    <div class="col-md-4">
                        <?php
                        include 'rightbar.php';
                        ?>
                    </div>
                </div>
                </form>
                <!-- php start  -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                    $name = $_POST["fname"];
                    $email = $_POST["email"];
                    $message = $_POST["message"];

                    $to = "himalthapa346@gmail.com"; // Replace with your email address
                    $subject = "Feedback from $name";
                    $headers = "From: $email";

                    $fullMessage = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

                    if (mail($to, $subject, $fullMessage, $headers)) {
                        echo "<div class='alert alert-success'>Thank you for your feedback!</div>";
                    } else {
                        echo "<div class='alert alert-danger'>There was an error sending your feedback.</div>";
                    }
                }
                ?>

        </div>
        </form>

    </div>
    </div>
    </div>
    <!-- main body end  -->

    <?php
    include 'footer.php';
    ?>
</body>

</html>