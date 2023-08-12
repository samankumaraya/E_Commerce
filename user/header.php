<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>


<?php
session_start();
$count = 0;
if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}
?>


<nav class="navbar navbar-light bg-light">
  <div class="container-fluid font-monospace">
    <a class="navbar-brand pb-2"><img src="logo.jpeg" class="logo" alt=""></a>
    
    <div class="d-flex">
    <a href="index.php" class="text-secondary text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
    <a href="" class="text-secondary text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>Cart(<?php echo $count ?>) |</a>

    <span  class="text-dark-gray pe-2">
       <i class="fas fa-user-shield"></i>Hello, |
       <a href="" class="text-secondary text-decoration-none pe-2"><i class="fas fa-sign-in-alt"></i>&nbsp;Login</a>
       <a href="../admin/store.php" class="text-secondary text-decoration-none pe-2">Admin</a>
    </span>
    
</nav>
</div>

 <div class="bg-warning sticky-top font-monospace">
    <ul class="list-unstyled d-flex justify-content-center">
        <li><a href="Laptop.php" class="text-decoration-none text-dark fw-bold fs-4 px-5">LAPTOP</a></li>
        <li><a href="Mobile.php" class="text-decoration-none text-dark fw-bold fs-4 px-5">Mobile</a></li>
        <li><a href="Bag.php" class="text-decoration-none text-dark fw-bold fs-4 px-5">Bag</a></li>
    </ul>
 </div>
</body>
</html>