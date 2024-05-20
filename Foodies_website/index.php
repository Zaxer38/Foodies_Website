<!DOCTYPE html>

<html lang="en">
<?php
include ("connect.php");  //include connection file
session_start();


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodies</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="indexStyle.css">
</head>

<body>
    <!-- MOBILE NAV -->
    <div class="mb-nav">
        <div class="mb-move-item"></div>
        <div class="mb-nav-item active">
            <a href="index.html">
                <i class="bx bxs-home"></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#about">
                <i class='bx bxs-wink-smile'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#food-menu-section">
                <i class='bx bxs-food-menu'></i>
            </a>
        </div>
        <div class="mb-nav-item">
            <a href="#testimonial">
                <i class='bx bxs-comment-detail'></i>
            </a>
        </div>
    </div>
    <!-- END MOBILE NAV -->
    <!-- BACK TO TOP BTN -->
    <a href="#home" class="back-to-top">
        <i class="bx bxs-to-top"></i>
    </a>
    <!-- END BACK TO TOP BTN -->
    <!-- TOP NAVIGATION -->
    <div class="nav">
        <div class="menu-wrap">
            <a href="#home">
                <div class="logo">
                    Foodies
                </div>
            </a>
            <div class="menu h-xs">
                <a href="#home">
                    <div class="menu-item active">
                        Home
                    </div>
                </a>
                <a href="#food-menu-section">
                    <div class="menu-item">
                        Menu
                    </div>
                </a>
                <a href="#testimonial">
                    <div class="menu-item">
                        Testimonials
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
                <a href="SignOut.php">
                    <div class="menu-item">
                        Sign Out
                    </div>
                </a>

            </div>
            <div class="right-menu">

                <div class="cart-btn">
                    <i class='bx bx-cart-alt'>
                        <a href="checkout.php"></a>

                    </i>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION -->


    <!-- SECTION HOME -->
    <section id="home" class="fullheight align-items-center bg-img bg-img-fixed"
        style="background-image: url(https://embed.widencdn.net/img/mccormick/6hvkqaid2w/1009x567px/Frank’s%20Grilled%20Buffalo%20Chicken%20Sandwich-7705.jpg?crop=true&q=80&u=o2hyef);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <div class="slogan">
                        <h1 class="left-to-right play-on-scroll">
                            Foodies


                        </h1>

                        <div class="left-to-right play-on-scroll delay-4">
                            <button>
                                <a href="#food-menu-section">
                                    Order now
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION HOME -->

    <!-- FOOD MENU SECTION -->
    <section class="align-items-center bg-img bg-img-fixed" id="food-menu-section"
        style="background-image: url(images/img/falafel_sandwich.jpeg);">
        <div class="container">
            <div class="food-menu">
                <h1>
                    What will <span class="primary-color">you</span> eat today?
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque alias aliquam eveniet, iure
                    praesentium dicta ex dolorum inventore itaque minus repudiandae, odio provident? Velit architecto
                    natus expedita non? Odio, dolorum.
                </p>
                <div class="food-category">
                    <div class="zoom play-on-scroll">
                        <button class="active" data-food-type="all">
                            All food
                        </button>
                    </div>


                </div>

                <div class="food-item-wrap all">

                    <?php
                    // Database connection and query
                    $sql = "SELECT * FROM menu_options";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $ID = $row["FoodID"];
                            $Name = $row["FoodName"];
                            $Price = $row["FoodPrice"];
                            $CateID = $row["CategoryID"];
                            $FileName = $row["FoodImage"];
                            echo "<div class='food-item category-$CateID bottom-up play-on-scroll'>";
                            echo "<div class='item-wrap'>";
                            echo "<div class='item-img'><div class='img-holder bg-img' style='background-image: url(Images/$FileName);'></div></div>";
                            echo "<div class='item-info'>";
                            echo "<div><h3>$Name</h3><span>£$Price</span></div>";
                            echo "<div class='cart-btn'><i class='bx bx-cart-alt'></i></div>";
                            echo "</div></div></div>";
                        }
                    } else {
                        echo "<p>No food items found.</p>";
                    }

                    ?>
                </div>
            </div>


        </div>
        </div>
        </div>


        </div>
    </section>

    <!-- TESTIMONIAL SECTION -->
    <section id="testimonial">
        <h1 class="testimonies"><span class="Testimonials">
                <h1>Testimonials</h1>
            </span></h1>
        <div class="container">
            <div class="row">
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-2">
                        <div class="review-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, labore nisi non
                                molestias, minus laboriosam nostrum impedit iure facilis odio unde quia ad sunt corrupti
                                dolores ratione voluptatibus quidem explicabo.
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(assets/close-up-portrait-cute-young-woman-holding-textbook-colored-pencils-posing-studio-isolated-pink_176532-9674.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3>
                                Lorem Ipsum Dolor
                            </h3>
                            <div class="rating">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="zoom play-on-scroll">
                        <div class="review-wrap active">
                            <div class="review-content">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, labore nisi non
                                    molestias, minus laboriosam nostrum impedit iure facilis odio unde quia ad sunt
                                    corrupti
                                    dolores ratione voluptatibus quidem explicabo.
                                </p>
                                <div class="review-img bg-img"
                                    style="background-image: url(assets/michael-dam-mEZ3PoFGs_k-unsplash.jpg);">
                                </div>
                            </div>
                            <div class="review-info">
                                <h3>
                                    Lorem Ipsum Dolor
                                </h3>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-xs-12">
                    <div class="review-wrap zoom play-on-scroll delay-4">
                        <div class="review-content">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, labore nisi non
                                molestias, minus laboriosam nostrum impedit iure facilis odio unde quia ad sunt corrupti
                                dolores ratione voluptatibus quidem explicabo.
                            </p>
                            <div class="review-img bg-img"
                                style="background-image: url(assets/portrait-happy-young-man_171337-21716.jpg);">
                            </div>
                        </div>
                        <div class="review-info">
                            <h3>
                                Lorem Ipsum Dolor
                            </h3>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL SECTION -->
    <!-- FOOTER SECTION -->
    <section class="footer bg-img"
        style="background-image: url(https://www.tastingtable.com/img/gallery/12-low-carb-fast-food-options-that-wont-ruin-your-diet/intro-1651501665.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-6 col-xs-12">
                    <h1>

                    </h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quas harum? Atque eius
                        quaerat fuga sint molestiae illo corrupti vitae voluptatibus. Dicta rerum est delectus
                        perspiciatis nemo nihil autem! Doloremque?</p>
                    <br>
                    <p>Email: xyz@email.com</p>
                    <p>Phone: +1234567890</p>
                    <p>Website: website.com</p>
                </div>

                <div class="col-4 col-xs-12">
                    <h1>
                        About Us
                    </h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto aspernatur doloremque rerum nam
                        ullam obcaecati error asperiores temporibus quo eum eaque sed odio vitae accusantium, dolorem
                        nihil molestiae deserunt maxime!</p>

                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER SECTION -->

    <script src="main.js"></script>
    <script>
        // Simulating user login status (true if logged in, false if not)
        var isLoggedIn = <?php echo json_encode(isset($_SESSION['username'])); ?>;

        // Function to check if user is logged in
        function checkLoginForCart() {
            if (isLoggedIn) {
                // User is logged in, redirect to cart page
                window.location.href = "checkout.php";
            } else {
                // User is not logged in, redirect to login page
                window.location.href = "login.php";
            }
        }

        // Event listener for cart buttons
        var cartButtons = document.querySelectorAll('.cart-btn');
        cartButtons.forEach(function (cartBtn) {
            cartBtn.addEventListener('click', function () {
                // Check login status when any cart button is clicked
                checkLoginForCart();
            });
        });
    </script>
</body>

</html>