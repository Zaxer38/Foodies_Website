<?php
include ("Connect.php");
session_start();


$Email = $_POST['username'];
$Password = $_POST['password'];


$Email = htmlspecialchars(strip_tags($Email));
$Password = htmlspecialchars(strip_tags($Password));

$sql = "SELECT * FROM customer WHERE EmailID = '$Email' AND Password = '$Password'";
$result = $conn->query($sql);
$call = 0;
$Name;
while ($row = $result->fetch_assoc()) {
    $Name = $row['CustomerName'];
    $call = $call + 1;
}
if ($call == 0) {
    $_SESSION['loggedinfailure_unvalid'] = True;
    header("Location: Login.php");
} else {
    $_SESSION['loggedin'] = True;
    $_SESSION['loggedinfailure_unvalid'] = False;
    $_SESSION["UserName"] = $Name;
    header("Location: index.php");
    exit();
}



?>