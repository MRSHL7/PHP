<?php
$cars = array(
    'Fortuner' => 'Toyota',
    'Mustang' => 'Ford',
    'Model S' => 'Tesla',
    'Civic' => 'Honda',
    'X5' => 'BMW' );
foreach($cars as $models => $brands){
    echo "Car Model : $models - Brand : $brands <br>";
}
?>