<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" 
    crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-secondary">
<div class="container">
    <div class="row">
        <div class="col-md-6 shadow bg-white p-3 m-auto border font-monospace border-primary mt-3">
                <form action="login1.php" method="POST">
                    <div class="mb-3">
                    <p class="text-center fw-bold fs-3 text-success">Login:</p>
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="username" class="form-control"  placeholder="Enter username">
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text"  name="userpassword" class="form-control"  placeholder="Enter password">
                    </div>
                    <button name="submit" class="bg-warning fs-4 fw-bold my-3 form-control">Login</button>
                </form>

</div>
    </div>
 </div>
</body>
</html>