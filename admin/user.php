<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body>

<?php
include 'store.php';
 $con = mysqli_connect('localhost','root','','ecommerce');
 $Record = mysqli_query($con," SELECT * FROM `users` ");
 $row_count = mysqli_num_rows($Record);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">

        
    
    <table class="table table-secondary table-bodered">
        <thead class="text-center">
            <th>Se.N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Delete</th>
            
            
        </thead>

        <tbody class="text-center text-danger">
          <?php
           while($row = mysqli_fetch_array($Record))
          echo "
           <tr>
           <td>$row[Id]</td>
           <td>$row[username]</td>
           <td>$row[Email]</td>
           <td>$row[Number]</td>
           <td><a href='delete.php' class='btn btn-outline-danger'>Delete</a></td>
       </tr> 
       "
            
          ?>
        </tbody>
    </table>
    </div>

    <div class="col-md-2 pr-5 text-center">
        <h3 class="text-danger">Total</h3>
        <h1 class="bg-danger text-white"><?php echo $row_count?></h1>
    </div>
    </div>
</div>
</body>
</html>