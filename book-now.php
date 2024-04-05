<?php 
session_start()
?>
<!doctype html>
<html lang="en">

<head>
    <title>Welcome to United limited</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="United Limited| Real State Business| Buy House| Buy Land">
    <meta name="description" content="United Limited| Real State Business| Buy House| Buy Land">
    <meta name="author" content="Asbin Magar">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Monoton&family=Roboto:wght@100;300;400&display=swap"
        rel="stylesheet">
    <!-- <style>
        /* Add the desired height and width for carousel images */
        .carousel-item img {
            width: 100%; /* Set the width as you like, it will scale proportionally */
            height: 500px; /* Set the height as you like */
            object-fit: cover; /* This property ensures the image covers the entire container */
        }
    </style> -->
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
    if (!isset($_SESSION['username'])) {
        include 'header.php';
    } else {
        include 'userheader.php';
    }
    ?>

   
    <!-- main body start  -->
    <div class="container-fluid bg-light p-4 " style=" margin-top:5%; ">
        <div class="container ">
            <div class=" display-3 text-center">
                <h3 class="display-4">Register now</h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-9">
                    <form action="?" method="post">
                        <!-- first name  -->
                        <div class="form-group">
                            <label for="FirstName"><i class="fa fa-user"></i> First Name:</label>
                            <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                        </div>

                        <!-- last name  -->
                        <div class="form-group">
                            <label for="LastName"> <i class="fa fa-user"></i> Last Name:</label>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                        </div>
                        <!-- address  -->
                        <div class="form-group">
                            <label for="Address"> <i class="fa fa-address-book"></i> Address:</label>
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <!-- city  -->
                        <div class="form-group">
                            <label for="City"> <i class='fa fa-address-card'></i> City:</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
                        </div>
                        <!-- country  -->
                        <div class="form-group">
                            <label for="Country"><i class='fa fa-flag'></i> Country:</label>
                            <input type="text" class="form-control" name="country" id="country" placeholder="Nepal"
                                required>
                        </div>
                        <!-- phone  -->
                        <div class="form-group">
                            <label for="Phone"> <i class='fa fa-phone'></i> Phone:</label>
                            <input type="text" class="form-control" name="phone" id="Phone"
                                placeholder="+977 9800000000" required>
                        </div>
                        <!-- Email  -->
                        <div class="form-group">
                            <label for="Email"><i class='fa fa-envelope'></i> Email:</label>
                            <input type="text" class="form-control" name="email" id="Email"
                                placeholder="sample@gmail.com" required>
                        </div>
                        <!-- booking  -->
                        <div class="form-group">
                            <label for="interest"><i class="bi bi-dice-1-fill"></i>  Interested sport:</label>
                            <select id="olympicGames" name="olympicGames" class="form-control">
                                <option value="Athletics">Athletics</option>
                                <option value="Swimming">Swimming</option>
                                <option value="Gymnastics">Gymnastics</option>
                                <option value="Cycling">Cycling</option>
                                <option value="Basketball">Basketball</option>
                                <option value="Football (Soccer)">Football (Soccer)</option>
                                <option value="Tennis">Tennis</option>
                            </select>
                            
                        </div>
                       
                        <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>
                            
                        
                        <br>
                        <!-- button  -->
                        <button type="submit" name="submit" class="btn-lg btn-outline-dark">Send</button>
                        <button type="reset" name="reset" class="btn-lg btn-outline-danger">Cancel</button>
                    </form>
                    <?php
                    include 'connection.php';
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
                        $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
                        $ip = $_SERVER['REMOTE_ADDR'];
                        $response = $_POST['g-recaptcha-response'];
                        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                        $request = file_get_contents($url);
                        $data = json_decode($request);
                        $a = $_POST['fname'];
                        $b = $_POST['lname'];
                        $c = $_POST['address'];
                        $d = $_POST['city'];
                        $e = $_POST['country'];
                        $f = $_POST['phone'];
                        $g = $_POST['email'];
                        $h = $_POST['olympicGames'];

                        $query = "insert into reservation(first_name,last_name,address,city,country,phone,email,olympicGames)values('$a','$b','$c','$d','$e','$f','$g','$h')";
                        $run = mysqli_query($conn, $query);

                        if ($run) {
                            echo "<script>window.alert('Reservation Successfull!')</script>";
                            echo "<script>window.open('book-now.php','_self')</script>";

                        } else {
                            echo "<script>window.alert('Not Success! Try Again')</script>";
                        }
                    }
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                    include 'rightbar.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- main body end  -->

    <?php
    include 'footer.php';
    ?>
</body>

</html>