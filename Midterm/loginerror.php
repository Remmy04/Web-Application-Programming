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
    <title>Log In Error</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
      Oops... looks like there's a login error! Please try again :)
      </p>
      <br>
      <div class="loginerror">
                <a href="index.php">Back to Sign In Page</a>
      </div>
    </div>
</body>
</html>