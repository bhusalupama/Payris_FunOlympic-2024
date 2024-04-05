<?php
session_start(); //to start the session 
if (!isset($_SESSION['username'])) {
    header("location:index.php");
} else {
?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Welcome to Fun Olympic Games 2024</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="keywords" content="FunOlympic Games 2024, Online Broadcast, Sports Registration, Admin Portal">
        <meta name="description" content="Explore the FunOlympic Games 2024 - Register to access online broadcasts of various sports. Admin portal for managing user interactions.">
        <meta name="author" content="Your Name">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link rel="stylesheet" href="assets/css/style.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caprasimo&family=Monoton&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body {
                overflow: hidden;
                /* Hide scroll bars until the timeout expires */
            }

            #spinner-container {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: whitesmoke;
                /* Set the background color to match your site's background */
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999;
            }

            #spinner {
                font-size: 3rem;
            }

            .card-img-top {
                height: 300px;
                /* Set the desired height for all card images */
                object-fit: cover;
                /* This property ensures the image covers the entire card */
            }
        </style>
    </head>

    <body>
        <div id="spinner-container">
            <div id="spinner" class="spinner-grow text-dark" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <script>
            // Function to hide the spinner and show the content
            function hideSpinnerAndLoadContent() {
                document.getElementById("spinner-container").style.display = "none";
                document.body.style.overflow = "auto"; // Show scroll bars
            }

            // Hide the spinner and load content after a timeout
            setTimeout(function() {
                hideSpinnerAndLoadContent();
            }, 2000); // Adjust the delay as needed (e.g., 3000 milliseconds or 3 seconds)
        </script>

        <!-- header start  -->
        <?php
        include 'userheader.php';
        ?>
        <!-- header end  -->
        <!-- slide start  -->
        <div id="carouselId" class="carousel slide" style="margin-top:5%" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active  ">
                    <img src="assets/images/slide1.jpg" alt="First slide">

                </div>
                <div class="carousel-item">
                    <img src="assets/images/slide2.jpg" alt="Second slide">

                </div>
                <div class="carousel-item">
                    <img src="assets/images/slide3.jpg" alt="Third slide">

                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- slide end  -->
        <div class="jumbotron jumbotron-fluid text-center mb-0 ">
            <div class="container" data-aos="fade-up">
                <h1 class="display-4">Fun Olympic Games 2024</h1>
                <hr class="my-2">
                <p>"Fun Olympic Paris 2024 invites the world to a grand celebration of athletic prowess and global unity against the enchanting backdrop of the City of Light. As athletes from across the globe converge to showcase their skills and determination, the event promises a mesmerizing blend of sportsmanship, cultural richness, and unforgettable moments, making it a landmark chapter in the illustrious history of the FunOlympic Games."</p>
                <p class="lead">
                    <a class="btn btn-dark" href="about-us.php" role="button">Read more</a>
                </p>
                <img src="./assets/img/olympic.jpeg" alt="olympic" class="img-thumbnail" data-aos="fade-up" width="100%">
                <br>
            </div>
        </div>
        <div class="container-fluid bg-white text-center mb-0 p-2">
            <h2 class="display-4">Explore Olympic Games 2024</h2>
            <p>Discover the excitement of different Olympic sports at Paris 2024.</p>
            <br>
            <div class="row">
                <!-- Athletics -->
                <div class="col-md-4">
                    <div class="card" data-aos="flip-left">
                        <img src="assets/img/athletics.jpg" class="card-img-top" alt="Athletics">
                        <div class="card-body">
                            <h3 class="card-title">Athletics</h3>
                        </div>
                    </div>
                </div>

                <!-- Swimming -->
                <div class="col-md-4">
                    <div class="card" data-aos="flip-left">
                        <img src="assets/img/swimming.jpg" class="card-img-top" alt="Swimming">
                        <div class="card-body">
                            <h3 class="card-title">Swimming</h3>
                        </div>
                    </div>
                </div>

                <!-- Gymnastics -->
                <div class="col-md-4">
                    <div class="card" data-aos="flip-left">
                        <img src="assets/img/gymnastics.jpg" class="card-img-top" alt="Gymnastics">
                        <div class="card-body">
                            <h3 class="card-title">Gymnastics</h3>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="row">
                <!-- Cycling -->
                <div class="col-md-4">
                    <div class="card" data-aos="flip-left">
                        <img src="assets/img/cycling.jpg" class="card-img-top" alt="Cycling">
                        <div class="card-body">
                            <h3 class="card-title">Cycling</h3>
                        </div>
                    </div>
                </div>

                <!-- Basketball -->
                <div class="col-md-4">
                    <div class="card" data-aos="flip-left">
                        <img src="assets/img/basketball.jpg" class="card-img-top" alt="Basketball">
                        <div class="card-body">
                            <h3 class="card-title">Basketball</h3>
                        </div>
                    </div>
                </div>

                <!-- Football (Soccer) -->
                <div class="col-md-4">
                    <div class="card" data-aos="flip-left">
                        <img src="assets/img/football.jpg" class="card-img-top" alt="Football (Soccer)">
                        <div class="card-body">
                            <h3 class="card-title">Football (Soccer)</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- news area start  -->
        <div class="jumbotron jumbotron-fluid  mb-0" id="news">
            <div class="container">
                <h2 class="display-4 text-center" data-aos="zoom-in">News and Events</h1>
                    <hr class="my-2">
                    <br>
                    <div class="row" data-aos="zoom-in">
                        <?php
                        include 'connection.php';
                        $query = "select * from posts order by rand() limit 3";
                        $run = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($run)) {
                            $a = $row['id'];
                            $b = $row['title'];
                            $c = substr($row['content'], 0, 300);
                            $d = $row['image'];

                        ?>
                            <div class="col-md-9">
                                <h3>
                                    <?php echo $b; ?>
                                </h3>
                                <p>
                                    <?php echo $c; ?>
                                <p>
                                    <a href="post.php ?id=<?php echo $a; ?>" class="btn btn-dark">Read more</a>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/<?php echo $d; ?>" alt="Flood-victim" class="img-thumbnail">
                            </div>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </div>


        <!-- private trainer area end  -->

        <!-- footer start  -->
        <?php
        include 'footer.php';
        ?>
        <!-- footer end  -->
        <script>
            AOS.init({
                offset: 300,
                duration: 1200
            });
        </script>

    </body>

    </html>
<?php
}
?>