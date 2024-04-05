<?php
include '../connection.php';
if(isset($_GET['submit']))
{
  
     $a=$_GET['id1'];
     $b=$_GET['fname1'];
     $c=$_GET['lname1'];
     $d=$_GET['address1'];
     $e=$_GET['country1'];
     $f=$_GET['city1'];
     $g=$_GET['phone1'];
     $h=$_GET['email1'];
     $i=$_GET['booking1'];
     
     $query="update reservation set first_name='$b',last_name='$c',address='$d',country='$e', city='$f', phone='$g', email='$h', olympicGames='$i'  where id='$a'";
     $run=mysqli_query($conn,$query);
     if($run)
     {
        header("location:reservation.php");
     }
     else
     {
        echo "Update not successful!";
     }
   }

?>

