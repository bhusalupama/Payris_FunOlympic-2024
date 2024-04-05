<?php
include '../connection.php';
if(isset($_GET['submit']))
{
  
     $a=$_GET['id1'];
     $b=$_GET['fname1'];
     $c=$_GET['lname1'];
     $d=$_GET['username1'];
     $e=$_GET['password1'];
     $e=md5($e);
     $query="update users set first_name='$b',last_name='$c',username='$d',password='$e' where id='$a'";
     $run=mysqli_query($conn,$query);
     if($run)
     {
        header("location:users.php");
     }
     else
     {
        echo "Update not successful!";
     }
   }

?>
<h2>
    <a href="index.php">Go to home &gt; &gt;</a>
</h2>
