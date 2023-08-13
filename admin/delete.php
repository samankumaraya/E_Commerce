<?php
 
 echo $Id = $_GET['ID'];
 $con = mysqli_connect('localhost','root','','ecommerce');
 mysqli_query($con,"DELETE FROM `users` Id = $Id");
 header("location:user.php");
 
?>