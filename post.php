<?php
session_start()
?>
<!doctype html>
<html lang="en">

<head>
    <title>Welcome to Fun Olymic Games 2024</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])) {
        include 'header.php';
    } else {
        include 'userheader.php';
    }
    ?>

    <?php
    include 'connection.php';
    if (isset($_GET['id'])) {
        $postid = $_GET['id'];
        $query = "select * from posts where id='$postid'";
        $run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($run)) {
            $b = $row['title'];
            $c = $row['content'];
            $d = $row['image'];
    ?>
            <div class="jumbotron" style="margin-bottom:0px; margin-top:5%">
                <h1 class="display-4"><?php echo $b; ?></h1>
                <hr class="my-2">

                <img src="assets/img/<?php echo $d;  ?>" alt="" class="img-thumbnail">
                <p><?php echo $c; ?></p>
            </div>
    <?php }
    } ?>
    <?php include 'footer.php'; ?>
</body>

</html>