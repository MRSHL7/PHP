<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name :
        <input type="text" name="name">
        <br>
        Phone Number :
        <input type="number" name="number">
        <br>
        Car Brands :
        <select name="brands">
            <option name="brands" value="Toyota">Toyota</option>
            <option name="brands" value="Honda">Honda</option>
            <option name="brands" value="Telsa">Telsa</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
    $name = $_POST ["name"];
    $number = $_POST ["number"];
    $brands = $_POST ["brands"];

    echo "Hello, $name. Your phone number is $number and your preferred car brand is $brands.";
}
?>