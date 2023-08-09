<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <?php
    include 'header.php'
    ?>

</head>
<body>

    <h1 class="text-warning font-monospace text-center my-3">Home</h1>

<?php
 include 'Config.php';
 $Record = mysqli_query($con, "select * from sproduct");
   while($row=mysqli_fetch_array($Record)){
    
   }
 
?>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>  

</body>
</html>