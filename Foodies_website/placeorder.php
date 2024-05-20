<h1>Would you like to purchase those order?</h1>
<?php
$sql = "SELECT * FROM food_perpare";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $ID = $row["FoodID"];
    $sql2 = "SELECT * FROM food_menu_options WHERE FoodID = '$ID'";
    $result2 = $conn->query($sql2);
    while ($row2 = $result2->fetch_assoc()) {
        $Name = $row2["FoodName"];
        $FoodPrice = $row2["FoodPrice"];
        echo "<p>" . $Name . " - £" . $FoodPrice . "</p>";
        echo "<form action = 'Cancel.php' method = 'POST'>";
        echo "<button type = 'submit' name = 'ID' value = '$ID'>Cancel</button>";
        echo "</fomr>";
    }
}
$conn->close();

?>
<br><br>

<div>
    <button><a href="Purchase.php">Purchase</a></button>
</div>