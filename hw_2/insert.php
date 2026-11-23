<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
</head>
<body>
    <form action="" method="POST">
        Name : <input type="text" name="name"> <br>
        Job Title : <input type="text" name="title"> <br>
        Salary : <input type="text" name="sal"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    include "q1.php";

    if($_SERVER["REQUEST_METHOD"]==="POST") {
        
        $name = $_POST['name'];
        $title = $_POST['title'];
        $sal = $_POST['sal'];
        
        $sql = $conn -> prepare ("Insert into Employees (name,job_title,salary) values (?,?,?)");
        $sql -> bind_param("ssd",$name,$title,$sal);

        if($sql -> execute()){
            echo "<script> alert('Data Inserted Successfully !') </script>";
        } else {
            echo "<script> alert('Failed to insert data. Please Try Again.') </script>";
        }
    }

?>