<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>viewCart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <?php
      include 'header.php';
    ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5 rounded">
            <h1 class="text-dark">My Cart</h1>
        </div>
    </div>
</div>   


<div class="container-fluid">
    <div class="row justify-content-around" >
        <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table table-bordered text-center">
                <thead class="bg-danger text-dark fs-5">
                    <th>index no.</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Total Price</th>
                    <th>Update</th>
                    <th>Delete</th>
                </thead>

                <tbody>
                    <?php
                    
                        session_start();
                        $total = 0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key => $value){
                                $total = $value['productPrice'] * $value['productQuantity'];
                                echo "
                                <form action = 'Insertcart.php' method= 'POST'>
                                <tr>
                                 <td>$key</td>
                                 <td><input type = 'text' name=''PName' value='$value[productName]'>$value[productName]</td>
                                 <td><input type = 'text' name=''PPrice' value='$value[productPrice]'>$value[productPrice]</td>
                                 <td><input type = 'text' name='PQuantity' value='$value[productQuantity]'>$value[productQuantity]</td>
                                 <td> $total</td>
                                 <td><button name='update' class= 'btn-warning'>Update</button></td>
                                 <td><button name= 'remove' class= 'btn-danger'>Delete</button></td>
                                 <td> <input type='text' name='item' value= '$value[productName]'> </td>
                                </tr>
                                </form>
                                ";

                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>