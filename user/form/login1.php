
<?php

$Name = $_POST['name'];

$Password = $_POST['password'];

$Con = mysqli_connect('localhost','root','','ecommerce');
$result = mysqli_query($Con,"SELECT * FROM `users` WHERE username = '$Name' AND Password = '$Password' "); 

session_start();
if(mysqli_num_rows($result)){

    $_SESSION['user'] = $Name;
    echo "
         <script>
           alert('Login Successfully');
           window.location.href = '../index.php';
         </script>
        ";
}
else{
            echo "
            <script>
            alert('Incorrect email or password');
            window.location.href = 'login.php';
            </script>
        ";
}

?>