<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
</head>
<body>

 <div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">
                <form action=" insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                    <p class="text-center fw-bold fs-3 text-success">Product Details:</p>
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" name="Pname" class="form-control"  placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text"  name="Pprice" class="form-control"  placeholder="Enter Product Price">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Add Product Image</label>
                    <input type="file" name="Pimage" class="form-control">
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
                    <button name="submit" class="bg-warning fs-4 fw-bold my-3 form-control">Upload</button>
                </form>

</div>
    </div>
 </div>
   
</body>
</html>