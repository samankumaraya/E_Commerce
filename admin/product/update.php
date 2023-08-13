
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body>

<?php
$id =$_GET['ID'];
include 'Config.php';
$Record = mysqli_query($con , "SELECT * FROM `sproduct` WHERE Id");
$data = mysqli_fetch_array($Record);
?> 

 <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">
                <form action=" update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                    <p class="text-center fw-bold fs-3 text-success">Product Update:</p>
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="Pname" value="<?php echo $data['PName']?>" class="form-control"  placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text"  name="Pprice" value="<?php echo $data['PPrice']?>" class="form-control"  placeholder="Enter Product Price">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Add Product Image</label>
                    <input type="file" name="Pimage" class="form-control">
                    <img src="<?php echo $data['PName']?>" alt="" style = "height:100px;">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Choose Page Category</label>
                    <select class="form-select" name="Pages">
                        <option selected>Home</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Bag">Bag</option>
                        <option value="Mobile">Mobile</option>
                    </select>
                    </div>
                    <input type="hidden" name= "id " value="<?php echo $data['Id']?>" name="" id="">
                    <button name="update" class="bg-warning fs-4 fw-bold my-3 form-control">Update</button>
                </form>

</div>
    </div>
 </div>
     
   <!-- php update code -->

   <?php
     if(isset($_POST['update'])){

            $id = $_POST['id'];
        $product_name = $_POST['Pname'];
        $product_price = $_POST['Pprice'];
        $product_image = $_FILES['Pimage'];
        $image_loc = $_FILES['Pimage']['tmp_name'];
        $image_name = $_FILES['Pimage']['name'];
          $img_des = "Uploadimage/" .$image_name; 
        move_uploaded_file($image_loc, "Uploadimage/" .$image_name);
    
    
        $product_category = $_POST['Pages'];
        include 'Config.php';
        mysqli_query($con," UPDATE `sproduct` SET `PName`='$product_name',
        `PPrice`='$product_price',`PImage`='$img_des',`PCategory`=' $product_category' WHERE id = $id");
        header("location:index.php");
     }
   ?>
    
</body>
</html>


