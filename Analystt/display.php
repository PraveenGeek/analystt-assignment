
<?php
include 'connection.php';

session_start();

$id = $_SESSION['id'];

$sql_display = "SELECT * FROM user_table WHERE id = '$id'";

$res_display = mysqli_query($conn , $sql_display);

if ($res_display) {
    while ($row_display = mysqli_fetch_assoc($res_display)) {
        $name = $row_display['Name'];
        $phone = $row_display['Phone'];
        $email = $row_display['Email'];
        $pass = $row_display['Password'];
        $id = $row_display['id'];
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>analytic</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <h1>Details</h1>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr></tr>
            </thead>
            <tbody>
                <tr></tr>
                <tr>
                    <td>Name</td>
                    <td><?php echo "$name"; ?></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><?php echo "$phone"; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo "$email"; ?></td>
                </tr>
                
                <tr>
                    <td>Password</td>
                    <td><?php echo "$pass"; ?></td>
                </tr>
            </tbody>
        </table>
    </div><button class="btn btn-primary" type="button" onclick="redirect()">Edit Details</button>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">

function redirect(){
var id = <?php echo "$id"; ?>;
window.location.href = "update.php?get_id=" + id;

}
</script>
</body>

</html>
