<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>analytic</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1>Registeration:&nbsp;</h1>
    <div class="table-responsive">
        <table class="table">
            <form method="POST">
            <tbody>
                
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="mail" name="email"></td>
                </tr>
                
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                   <td> <input class="btn btn-success" type="submit" name="submit"> </td>
                </tr>
            </tbody>
            
            </form>
        </table>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>


<?php 

error_reporting(0);
include 'connection.php';
if (isset($_POST['submit'])) {

$usr_name =  $_POST['name'];
$usr_phone =  $_POST['phone'];
$usr_email =  $_POST['email'];
$usr_pass = $_POST['password'];
$eny_pass = md5($usr_pass);

$sql = "INSERT INTO user_table(Name , Phone , Email , Password) VALUES ('$usr_name' , '$usr_phone' ,'$usr_email' , '$eny_pass')";

$res = mysqli_query($conn , $sql);

}

if ($res) {
    echo '<script>alert("Inserted");</script>';
    header("Location:login.php");
}

?>
