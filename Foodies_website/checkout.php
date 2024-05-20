<?php
include ("Connect.php");
session_start();
if (isset($_SESSION['loggedin'])) {

    $FoodID = $_POST['order'];

    $sql = "INSERT INTO food_perpare VALUES ('$FoodID');";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: placeorder.php");
} else {
    header("Location: Login.php");
}


?>