<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        Username :
        <input type="text" name="username">
        <br>
        Password :
        <input type="password" name="password">
        <br>
        Agree to the terms and Conditions.
        <input type="checkbox" name="agree">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="GET") {
    $username = $_GET ["username"];
    $agree = ISSET($_GET["agree"])? "agreed" : "not agreed";

    echo "O/P: Welcome, $username. You have $agree to the terms and conditions.";
}
?>