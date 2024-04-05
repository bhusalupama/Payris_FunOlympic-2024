<?php
session_start(); //to start the session 
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
    <meta name="author" content="Upama">
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
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
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
    <style>
        .comment-section {
            width:62%;
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color:#cbcbcb;
}

.comment-form {
    margin-bottom: 20px;
}

.comment-form textarea {
    width: 100%;
    height: 100px;
    resize: vertical;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    font-size: 16px;
}

.comment-form button {
    margin-top: 10px;
}

.comment {
    margin-bottom: 10px;
}

.comment p {
    margin: 5px 0;
    padding: 10px;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.comment p strong {
    font-weight: bold;
}

/* Style for the username */
.comment p strong::after {
    content: ":";
}

.comment p span {
    font-size: 12px;
    color: #999;
    margin-left: 5px;
}

    </style>
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])) {
        include 'header.php';
    } else {
    include 'userheader.php';
    }
    ?>

    <div class="jumbotron jumbotron-fluid mb-0 " style="margin-top: 5%; padding: 2rem 2rem;">
        <div class="container text-center">
            <h1 class="display-4">Videos</h1>
        </div>
    </div>
    <!-- main body start  -->
    <div class="container-fluid bg-white p-5">
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-9">
                    <hr class="my-2">

                    <?php
                    // <!-- creating variable  -->
                    $dir = glob('assets/video/{*.mp4}', GLOB_BRACE);
                    //  loop start 
                    foreach ($dir as $value) {

                        ?>
                        <!-- photo insert  -->
                        <center>
                                <a href="<?php echo $value; ?>">
                                    <!-- <video src="<?php echo $value; ?>" alt="Gurus of Fitness" width="300px" align="left" hspace="5px"
                                        vspace="5px">  or -->

                                <video width="640px" height="350px" controls>
                                    <source src="<?php echo $value; ?>" type="video/mp4" />
                                    <!-- <source src="<?php echo $value; ?>" type="video/ogg" /> -->
                                </video>
                                <!-- Add this code below each video -->
                                
                            </a>
                            <div class="comment-section mb-3">
                            <div class="comments "></div>
                                <form onsubmit="submitComment(this); return false;">
                                <input type="hidden" name="video_url" value="<?php echo $value; ?>">
                                <div class="form-group">
                                    <textarea class="form-control" name="comment" rows="3" placeholder="Write your comment..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-dark">Comment</button>
                            </form>
                            
                        </div>
                    </center>
                        <!-- loop end  -->
                        <?php
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
    <script>
    function submitComment(form) {
        var videoUrl = form.querySelector('[name="video_url"]').value;
        var comment = form.querySelector('[name="comment"]').value;
        var username = '<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : '' ?>';

        // Validate and process the comment
        if (comment.trim() !== '') {
            var commentHtml = '<p><strong>' + username + ':</strong> ' + comment + '</p>';
            form.parentNode.querySelector('.comments').innerHTML += commentHtml;
            form.reset();
        } else {
            alert('Please enter a comment.');
        }
    }
</script>

</body>

</html>