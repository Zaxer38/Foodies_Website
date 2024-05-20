<?php
$sql = "SELECT * FROM food_ordered WHERE EmailID = '$Email'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $ID = $row["OrderID"];
    $Price = $row["Price"];
    echo "<div><h1><strong>OrderID : " . $ID . " - £" . $Price . "<strong></h1>";
    $sql2 = "SELECT * FROM food_ordered_information WHERE OrderID = '$ID'";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_assoc()) {
        $Food = $row2["FoodID"];
        $sql3 = "SELECT * FROM food_menu_options WHERE FoodID = '$Food'";
        $result3 = $conn->query($sql3);
        while ($row3 = $result3->fetch_assoc()) {
            $Name = $row3["FoodName"];
            $FoodPrice = $row3["FoodPrice"];
            echo "<p>" . $Name . " - £" . $FoodPrice . "</p>";
        }
    }
    echo "</div>";

}
$conn->close();
?>