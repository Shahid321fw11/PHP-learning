<?php
// index.php

// Determine which page to show based on URL parameter 'page'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php
        // Display content based on the value of 'page'
        if ($page == 'login') {
            require 'login.php';
        } elseif ($page == 'signup') {
            require 'signup.php';
        } else {
            // Default home page content
            echo '<h1 class="text-center mt-5">Welcome to the User System</h1>';
            echo '<div class="text-center mt-4">';
            echo '<a href="index.php?page=login" class="btn btn-primary mx-2">Login</a>';
            echo '<a href="index.php?page=signup" class="btn btn-success mx-2">Sign Up</a>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
