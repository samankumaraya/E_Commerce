<?php

$con = mysqli_connect('localhost','root','','ecommerce');

$user_name = $_POST['username'];
$user_password= $_POST['userpassword'];

$result = mysqli_query($con, "SELECT * FROM `admin` WHERE username = '$user_name' AND userpassword = '$user_password'");

if(mysqli_num_rows($result)){
   echo"
      <script>
        alert('Login successfully');
        window.location.href='../store.php';
      </script>
   ";
}
else{
    echo"
      <script>
        alert('Invalid username/password');
        window.location.href='login.php';
      </script>
   ";
}
?>