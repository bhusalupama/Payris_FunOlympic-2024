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
    <meta name="keywords" content="Gururs of Fitness| Zumba| Yoga| Sauna">
    <meta name="description" content="Gururs of Fitness| Zumba classes| Yoga Classes| Sauna Classes">
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
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
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

    <div class="jumbotron jumbotron-fluid mb-0" style="margin-top: 5%; padding: 2rem 2rem;">
        <div class="container text-center">
            <h1 class="display-3">About us</h1>
        </div>
    </div>
    <!-- main body start  -->
    <div class="container-fluid bg-white p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                <h2>Welcome to Fun Olympic Paris 2024</h2>
                <p>
                    Embrace the rich history and thrill of FunOlympic Games at our spectacular event in Paris in 2024. Since our inception, FunOlympic has been a beacon of sportsmanship and global unity, bringing together athletes, enthusiasts, and cultures from around the world.
                </p>
                <img src="./assets/img/about_olympic.jpeg" alt="Olympic Paris 2024" class="img-thumbnail">
    <p>
        Our journey began with a vision to create more than just a sporting event. FunOlympic Games have evolved into a celebration of resilience, determination, and the pursuit of excellence. From the inaugural games to the upcoming Fun Olympic Paris 2024, each edition is etched with unforgettable moments and stories of triumph.
    </p>
    <p>
        Fun Olympic Paris 2024 is not just an event; it's a continuation of our legacy. Nestled in the iconic city of Paris, known for its history and artistry, this edition promises to be a dazzling chapter in the FunOlympic saga. Join us as we weave together the tapestry of history and write new stories of inspiration and accomplishment.
    </p>
    <h3>Broadcasting Excellence</h3>
    <p>
        Immerse yourself in the Games like never before with our cutting-edge online broadcast platform. Fun Olympic Paris 2024 brings the excitement directly to your screens, offering an unparalleled viewing experience. Our platform ensures that every triumph, every record-breaking moment, and every display of athleticism is captured and delivered to your devices in real-time.
    </p>
    <p>
        With high-definition streams, interactive features, and expert commentary, our online broadcast platform is designed to make you feel like you are right there in the heart of the action. Join us from the comfort of your home or on the go, and be part of the global audience witnessing the magic of Fun Olympic Paris 2024.
    </p>
    <p>
        FunOlympic Games are not just an event; they are an experience. Join us on this journey, celebrate the spirit of sportsmanship, and witness history unfold at Fun Olympic Paris 2024.
    </p>
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