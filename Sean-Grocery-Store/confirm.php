<!DOCTYPE html>

<?php 
session_start();
session_unset();
session_destroy();
?>

<html>
    <head>
        <title>Confirmation</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 style="text-align:center">Thank you for your purchase! A receipt is sending to your email.</h1>
        <form action="/index.php">
            <input type="submit" value="Home Page"/>
        </form>
    </body>
</html>