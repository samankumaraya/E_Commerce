<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <?php
     session_start();
     if(!$_SESSION['admin']){
       header("location:form/login.php");
     }
    ?>
<body>
   
<!-- nav bar -->
<nav class="navbar  bg-dark">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white">SKStore</a>
    <span>
    <i class="fa-solid fa-user-shield"></i>
    Hello, |<?php echo $_SESSION['admin']; ?>
    &nbsp;
    <i class="fa-solid fa-right-from-bracket"></i>
    <a href="form/logout.php" class="text-decoration-none text-white">Logout</a> |&nbsp;
    <a href="./user/header.php" class="text-decoration-none text-white">UserPage</a> 
    </span>
  </div>
</nav>

  <div>
    <h2 class="text-center">Dashboard</h2>
  </div>

  <div class=" col-md-6 bg-warning text-center m-auto" >
    <a href="product/index.php" class="text-blue text-decoration-none fs-4 fw-bold px-5">Add Item</a>&nbsp;|
    <a href="" class="text-blue text-decoration-none fs-4 fw-bold px-5">Users</a>
  </div>
</body>
</html>