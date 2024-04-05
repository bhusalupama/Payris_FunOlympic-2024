<?php
session_start(); //to start the session 
if (!isset($_SESSION['username'])) {
    header("location:index.php"); //if username is correcttly taken in session then open index.php
} else {
    ?>
    <!-- bootstrap start  -->
    <!doctype html>
    <html lang="en">

    <head>
        <title>Dashboard</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">    
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
    </head>

    <body>
        <!-- nav bar start  -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="main.php">Dashboard</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                </ul>
                <ul class="form-inline my-2 my-lg-0">
                    <strong class="text text-light text-uppercase">Welcome
                        <?php echo $_SESSION['username']; ?> &nbsp &nbsp
                        <a href="logout.php" class="btn btn-light">Log out </a>
                    </strong>
                </ul>
            </div>
        </nav>
        <!-- nav bar end  -->
        <!-- dashbord area start  -->
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-md-3 ">
                    <a href="users.php" class="btn btn-success btn-block">Users</a> <!-- block makes the button longer -->
                    <a href="reservation.php" class="btn btn-success btn-block">Reservations</a>
                    <a href="upload-image.php" class="btn btn-success btn-block">Upload Image</a>
                    <a href="upload-video.php" class="btn btn-success btn-block">upload Video</a>
                    <a href="add-post.php" class="btn btn-success btn-block">Add posts</a>
                </div>
                <div class="col-md-9">
                    <h1>Users Information </h1>
                    <table class="table table-border table-dark table-hover table-striped">
                        <thead>
                            <th>UserID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Edit</th>
                            <th>Delete</th>

                        </thead>
                        <?php
                        include "../connection.php";
                        $query = "select * from users";
                        $run = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($run)) {
                            $a = $row['id'];
                            $b = $row['first_name'];
                            $c = $row['last_name'];
                            $d = $row['username'];
                            $e = $row['password'];

                            ?>
                            <tbody class="table-striped ">
                                <td>
                                    <?php echo $a; ?>
                                </td>
                                <td>
                                    <?php echo $b; ?>
                                </td>
                                <td>
                                    <?php echo $c; ?>
                                </td>
                                <td>
                                    <?php echo $d; ?>
                                </td>
                                <td>
                                    <?php echo $e; ?>
                                </td>
                                <td>
                                    <a href="edit.php?id=<?php echo $a; ?> &fname=<?php echo $b;?> &lname=<?php echo $c ?> &username=<?php echo $d ?> &password=<?php echo $e ?>" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="delete.php?id=<?php echo $a; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tbody>

                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- dashboard area end  -->

        <!-- bootstrap end  -->
    </body>

    </html>
    <?php
}
?>