<?php

if(isset($_POST['submit'])){
       include 'Config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];
    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];
      $img_des = "Uploadimage/" .$image_name; 
    move_uploaded_file($image_loc, "Uploadimage/" .$image_name);


    $product_category = $_POST['Pages'];
    mysqli_query($con," INSERT INTO `sproduct`(`PName`, `PPrice`, `PImage`, `PCategory`) VALUES 
    ('$product_name','$product_price','$img_des','$product_category')");

    header("location:index.php");
}

?>

