<?php

$Con = mysqli_connect('localhost','root','','ecommerce');

if(isset($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email']; 
    $Number = $_POST['number']; 
    $Password = $_POST['password']; 

    
     $Dup_Email = mysqli_query($Con,"SELECT * FROM `users` WHERE Email = '$Email'");
     $Dup_username = mysqli_query($Con,"SELECT * FROM `users` WHERE username  = '$Name'");

     if(mysqli_num_rows($Dup_Email)){
        echo "
         <script>
           alert('This Email Already has registered');
           window.location.href = 'register.php';
         </script>
        ";
     }
     if(mysqli_num_rows($Dup_username)){
        echo "
         <script>
           alert('This username has already taken');
           window.location.href = 'register.php';
         </script>
        ";
     }
     else{
        mysqli_query($Con, "INSERT INTO `users`(`username`, `Email`, `Number`, `Password`) 
        VALUES ('$Name','$Email','$Number','$Password')");
        echo "
        <script>
          alert('Registered success');
          window.location.href = 'login.php';
        </script>
       ";
     }


}
?>