<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="registration.css">
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

    <section class="contact-page inner-page">
        <div class="container">
            <div class="row">
                <!-- REGISTER -->
                <div class="col-md-8">
                    <div class="widget">
                        <div class="widget-body">

                            <form action="register.php" method="post">
                                <div class="row">
                                    <h1>Registration</h1>

                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            placeholder="Enter your first name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input class="form-control" type="text" name="lastname"
                                            id="example-text-input-2" placeholder="Last Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="text" class="form-control" name="email" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email"> <small
                                            id="emailHelp" class="form-text text-muted">We"ll never share your email
                                            with anyone else.</small>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1">Phone number</label>
                                        <input class="form-control" type="text" name="phone" id="example-tel-input-3"
                                            placeholder="Phone"> <small class="form-text text-muted">We"ll never share
                                            your email with anyone else.</small>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" name="password"
                                            id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4">
                                        <p> <input type="submit" value="Register" name="submit" class="btn theme-btn">
                                        </p>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- end: Widget -->
                    </div>
                    <!-- /REGISTER -->
                </div>
                <!-- WHY? -->

            </div>
            <!-- /WHY? -->
        </div>
        </div>
    </section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $username = $_POST["username"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];

        // Add your database connection and insertion logic here
        echo "<h2>Registration Successful!</h2>";
        echo "<p>Username: $username</p>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
    }
    ?>





    <script src="scripts.js"></script>
    <div id="root"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/react/17.0.2/umd/react.production.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/17.0.2/umd/react-dom.production.min.js"></script>
    <script src="App.js"></script>
</body>

</html>