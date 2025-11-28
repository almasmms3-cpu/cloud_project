<?php
// index.php: The landing page that welcomes users to Qassim Cloud
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Set character encoding -->
    <title>Qassim Cloud</title> <!-- Page title -->
    <link rel="stylesheet" type="text/css" href="style1.css"> <!-- Link to external CSS file -->
</head>
<body>
    <div class="container"> <!-- Main container for centered content -->
        <h1>Welcome to Qassim Cloud</h1> <!-- Welcome message -->
        <p>  
            <a href="signin.php">Sign In</a> or 
            <a href="signup.php">Sign Up</a>
        </p>
        <style>
            .container {
                background-image: url('C:\Users\almas2\Desktop\cloud.jpg');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </div>
</body>
</html>