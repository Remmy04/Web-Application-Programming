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
    <title>Profile Page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                Profile Page
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
            <div class="info-box">
                <h2>Personal Information</h2>
                <br>
                <p>First Name: <?php if(isset($_SESSION['email'])){
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                    while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'];
                    }
                    }
                    ?>
                </p>
        
                <p>Last Name: <?php if(isset($_SESSION['email'])){
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                    while($row=mysqli_fetch_array($query)){
                    echo $row['lastName'];
                    }
                    }
                    ?>
                </p>
                <p>Phone Number: <?php if(isset($_SESSION['email'])){
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                    while($row=mysqli_fetch_array($query)){
                    echo $row['phoneNumber'];
                    }
                    }
                    ?>
                </p>
                <p>Gmail: <?php if(isset($_SESSION['email'])){
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                    while($row=mysqli_fetch_array($query)){
                    echo $row['email'];
                    }
                    }
                    ?>
                </p>
                <br>
            </div>
            <br>
            <br>
            <div class="homepage">
                <a href="homepage.php">Visit Home Page</a>
            </div>
        </section>
    </header>
</body>
</html>