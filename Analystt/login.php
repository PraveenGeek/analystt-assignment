<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>analytic</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1>Login :</h1>
    <div class="table-responsive">
        <table class="table">
           <form method="POST">
            <tbody>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email"> </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="Password" name="password"></td>
                </tr>
                <tr>
                    <td><input class="btn btn-success" type="submit" name="submit"> </td>
                    <td><a href="register.php">Not a user , Register.</a></td>
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

if (isset($_POST['submit'])) 
{
 
$usr_email =  $_POST['email'];
$usr_pass = $_POST['password']; 

$eny_pass = md5($usr_pass);

$sql_login = "SELECT * FROM user_table WHERE Email = '$usr_email' and Password = '$eny_pass'";

$res_login = mysqli_query($conn , $sql_login);
}

if ($res_login) {
    while ($row_login = mysqli_fetch_assoc($res_login)) {
        session_start();
        $_SESSION["id"] = $row_login['id'];
        header("Location:display.php");
    }

}

?>