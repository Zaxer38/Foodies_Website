<?php
include ("Connect.php");
session_start();


$First_name = $_POST['firstname'];
$Last_name = $_POST['lastname'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Password = $_POST['password'];


// sanitize
$First_name = htmlspecialchars(strip_tags($First_name));
$Last_name = htmlspecialchars(strip_tags($Last_name));
$Email = htmlspecialchars(strip_tags($Email));
$Phone = htmlspecialchars(strip_tags($Phone));
$Password = htmlspecialchars(strip_tags($Password));

$sql = "SELECT * FROM customer WHERE EmailID = '$Email'";
$result = $conn->query($sql);
$call = 0;
while ($row = $result->fetch_assoc()) {
    $call = $call + 1;
}
if ($call > 0) {
    $_SESSION['registerfailure_unvalid'] = True;
    header("Location: registration.php");
    exit();
} else {
    $sql = "INSERT INTO customer VALUES ('$Email', '$First_name','$Last_name', '$Phone', '$Password');";
    $result = $conn->query($sql);
    $conn->close();
    $_SESSION['loggedin'] = True;
    $_SESSION["UserName"] = $Name;
    $_SESSION["Email"] = $Email;
    header("Location: index.php");
    exit();
}




?>