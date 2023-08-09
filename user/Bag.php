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
    <div class="container-fluid">
        <div class="colmd-12">
        <div class="row">


        
    <h1 class="text-warning font-monospace text-center my-3">Bags</h1>
<br><br>
<?php
 include 'Config.php';
 $Record = mysqli_query($con, "select * from sproduct");
   while($row=mysqli_fetch_array($Record)){
       $check_page = $row['PCategory'];
       if($check_page === 'Bag'){

    echo "
    <div class='col-md-6 col-lg-4 m-auto mb-3'>
       <div class='card m-auto' style='width: 18rem;'>
    <img src='../admin/product/$row[PImage]' class='card-img-top'>
    <div class='card-body text-center'>
      <h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
      <p class='card-text text-danger fs-4 fw-bold'>Rs: $row[PPrice]</p>
      <input type='number' value = 'min='1' max= '20'' placeholder = 'Quantity'> <br><br>
      <input type='submit' class='btn btn-danger text-white w-100' value = 'Add To Cart'>
    </div>
   </div>  
  </div>
    ";
   }
}
?>

  </div>
 </div>
</div>


</body>
</html>