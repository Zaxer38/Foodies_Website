<?php
// Start the session
session_start();

// Check if the cart array exists in the session
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    // Database connection
    include ("connect.php");

    // Retrieve cart items from the database
    $cart_items = $_SESSION['cart'];
    $total_price = 0;

    echo "<h1>Your Cart</h1>";

    foreach ($cart_items as $item_id) {
        // Retrieve item details from the database
        $sql = "SELECT * FROM menu_options WHERE FoodID=$item_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $item_name = $row['FoodName'];
            $item_price = $row['FoodPrice'];

            // Display item details
            echo "<div class='cart-item'>";
            echo "<h2>$item_name</h2>";
            echo "<p>Price: £$item_price</p>";
            echo "</div>";

            // Calculate total price
            $total_price += $item_price;
        }
    }

    // Display total price
    echo "<h2>Total: £$total_price</h2>";

    // Provide checkout options
    echo "<form action='checkout.php' method='post'>";
    echo "<button type='submit' name='checkout'>Proceed to Checkout</button>";
    echo "</form>";
} else {
    echo "<p>Your cart is empty.</p>";
}
?>