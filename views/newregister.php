<?php
//phpcs:ignore
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
require_once dirname(__DIR__) . "/vendor/autoload.php";

use App\Models\NewUser;
use Database\DB;
use App\Models\Model;
$db = new DB();

$conn = $db->connect();
if (isset($_POST["newregister"]) ) {
    Model::$conn = $conn;
    $user = new NewUser(
        $_POST["username"],
        $_POST["email"],
        $_POST["password"],
        $_POST["gender"]
    );
    // print_r($user)
    $result = $NewUser->save();
    if ($result) {
        echo "Registeration Successful";
    } else {
        echo "Please Try Again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> New Register Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
    <body>
    <div class="container mt-4">
        <form  method="POST" class="w-25 m-auto" action="">
        <div class="form-group mb-3">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="email1" name="email" required>
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male">
                <label class="form-check-label" for="male">
                    Male
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female">
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
            <button type="submit" class="btn btn-primary" name="newregister">Register</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>