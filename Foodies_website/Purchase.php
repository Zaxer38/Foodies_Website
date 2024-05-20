<?php
include ("Connect.php");
session_start();
if (isset($_SESSION['loggedin'])) {
    $Email = $_SESSION["Email"];
    $Price = 0;
    $OrderID = 0;
    $sql = "SELECT * FROM food_perpare";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $ID = $row["FoodID"];
        $sql2 = "SELECT * FROM food_menu_options WHERE FoodID = '$ID'";
        $result2 = $conn->query($sql2);
        while ($row2 = $result2->fetch_assoc()) {
            $Price = $Price + $row2["FoodPrice"];
        }
    }
    $sql = "SELECT * FROM food_ordered";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $OrderID = $OrderID + 1;
    }

    $OrderID = $OrderID + 1;

    $sql = "INSERT INTO food_ordered VALUES ('$OrderID', '$Email', '$Price');";
    $result = $conn->query($sql);
    $sql = "SELECT * FROM food_perpare";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $ID = $row["FoodID"];
        $sql2 = "INSERT INTO food_ordered_information VALUES ('$OrderID', '$ID');";
        $result2 = $conn->query($sql2);
    }
    $sql = "DELETE FROM food_perpare";
    $result = $conn->query($sql);
    $conn->close();
    header("Location: Ordered.php");
} else {
    header("Location: Login.php");
}


?>