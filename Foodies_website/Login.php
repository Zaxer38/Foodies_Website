<?php

include ("connect.php"); // Include connection file once
session_start();
error_reporting(0); // Hide undefined index errors

$message = ''; // Initialize message variable

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:wght@200;300;400;500;600;700;800;900">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="Login.css">
</head>

<body>

    <!-- Navigation Bar -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="index.php">
                <div class="logo">
                    Foodies
                </div>
            </a>
            <div class="menu h-xs">
                <a href="index.php">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="index.php">
                    <div class="menu-item">
                        Menu
                    </div>
                </a>

                <a href="login.php">
                    <div class="menu-item">
                        Login
                    </div>
                </a>
                <a href="registration.php">
                    <div class="menu-item">
                        Signup
                    </div>
                </a>
                <a href="#admin">
                    <div class="menu-item">
                        Admin
                    </div>
                </a>
            </div>
            <div class="right-menu">
                <div class="cart-btn">
                    <i class='bx bx-cart-alt'></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navigation Bar -->

    <!-- Login Form -->
    <div class="login-container">
        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Check if the login button was clicked
            if (isset($_POST['login'])) {
                // Check if any field is empty
                if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['captchaInput'])) {
                    echo '<div class="alert alert-danger" role="alert">Please fill in all fields.</div>';
                } else {
                    // Check if CAPTCHA code is entered correctly
                    if ($_POST['captchaInput'] === $_SESSION['captcha_code']) {
                        // CAPTCHA code is correct, proceed with login
        
                        header("Location: index.php");
                        exit;
                    } else {
                        // CAPTCHA code is incorrect, deny access
                        echo '<div class="alert alert-danger" role="alert">Incorrect CAPTCHA code. Access denied!</div>';
                    }
                }
            }
        }
        ?>
        <!-- Login Form -->
        <form id="loginForm" action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
            </div>
            <!-- Include CAPTCHA image here -->
            <div class="form-group">
                <label for="captcha">CAPTCHA:</label><br>
                <img src="captcha.php" alt="CAPTCHA">
            </div>
            <div class="form-group">
                <label for="captchaInput">Enter CAPTCHA:</label>
                <input type="text" class="form-control" id="captchaInput" name="captchaInput"
                    placeholder="Enter CAPTCHA">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Log in</button>
            <p class="mt-3">Don't have an account? <a href="registration.php">Register here</a></p>
        </form>
    </div>
    <!-- End Login Form -->
</body>

</html>