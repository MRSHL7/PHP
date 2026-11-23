<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employee_db";

    $conn = new mysqli($server,$username,$password,$dbname);

    if(!$conn){
        echo "<script> alert('Connection Failed ! Try Again Later') </script>";
    }
    
?>