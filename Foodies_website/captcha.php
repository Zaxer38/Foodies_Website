<?php
// Start or resume the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] != "POST" || !isset($_POST['login'])) {
    // Define the directory where your CAPTCHA images are stored
    $captchaDir = 'CaptchaImages/';

    // Array of image filenames and their corresponding codes
    $captchaData = array(
        'image1.jpg' => 'Aeik2',
        'image2.jpg' => 'ecb4f',
        'image3.jpg' => '7plBJ8',
        'image4.jpg' => '24qu3'
    );

    // Randomly select a CAPTCHA image from the array
    $captchaImageFile = $captchaDir . array_rand($captchaData);

    // Get the CAPTCHA code associated with the selected image
    $captchaCode = $captchaData[basename($captchaImageFile)];

    // Store the CAPTCHA code and image filename in session variables
    $_SESSION['captcha_code'] = $captchaCode;
    $_SESSION['captcha_image'] = $captchaImageFile;

    // Output the selected CAPTCHA image
    header('Content-type: image/jpg');
    readfile($captchaImageFile);

    // Stop further execution
    exit();
}

// Verify CAPTCHA
if (!isset($_POST['captcha']) || $_POST['captcha'] !== $_SESSION['captcha_code']) {
    // CAPTCHA verification failed, redirect back to the login page or display an error message

    header('Location: login.php?error=captcha');
    exit();
}
?>