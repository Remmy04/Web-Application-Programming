<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                Home Page
            </div>
            <div class="menu">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Explore</a>
                <a href="#">Contact</a>
            </div>
            <div class="logout">
                <a href="logout.php">Logout</a>
            </div>
        </nav>
        <section class="h-text">
            <span>Welcome to</span>
            <h1>Web Applications Programming</h1>
            <br>
            <br>
            <br>
            <div class="profilepage">
                <a href="profilepage.php">Visit Profile Page</a>
            </div>
        </section>
    </header>
</body>
</html>
