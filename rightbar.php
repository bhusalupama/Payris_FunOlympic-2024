<div class="container">
    <h2>
        Photo Gallery
    </h2>
    <a href="gallery.php"><img src="assets/img/slide2.jpg" alt="home" class="img-thumbnail"></a>
    <h2>News and Events</h2>
    <?php
    include 'connection.php';
    $query = "select * from posts order by rand() limit 3";

    $run = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($run)) {
        $a = $row['id'];
        $b = $row['title'];
        $c = $row['content'];
        $d = $row['image'];

    ?>
        <ul>
            <li>
                <a href="post.php ?id=<?php echo $a; ?>"><?php echo $b; ?></a>
            </li>

        </ul>

    <?php } ?>
    <h2>Advertisement</h2>
    <img src="assets/img/advertisement.png" alt="advertisement" class="img-thumbnail">
</div>