<?php
//phpcs:ignore
    error_reporting(E_ALL);
    error_reporting(-1);
    ini_set('error_reporting', E_ALL);

    require dirname(__DIR__)."/database/DB.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
    <body>
    <div class="container mt-4">
        <form  method="POST" class="w-25 m-auto" action="" method="POST">
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email1" name="email1" required>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>