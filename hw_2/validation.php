<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Full Name :
        <input type="text" name="name"><br>
        Email :
        <input type="text" name="email"><br>
        Password :
        <input type="pass" name="pass"><br>
        Confirm Password :
        <input type="pass" name="cpass"><br>
        Job Title :
        <input type="text" name="title"><br>
        <button type="submit">Submit</button>

        <?php
            if($_SERVER["REQUEST_METHOD"]==="POST"){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];
                $title = $_POST['title'];

                if(empty ($name)){
                    echo "<script> alert('Please enter name')</script>";
                }
                if(!filter_var ($email,FILTER_VALIDATE_EMAIL)){
                    echo "<script> alert('Pleare enter validate email address')</script>";
                }
                if(empty ($pass)){
                    echo "<script> alert('Please enter password')</script>";
                }
                else if($pass!=$cpass){
                    echo "<script> alert('Pleare enter same pass')</script>";
                }
                if(empty ($title)){
                    echo "<script> alert('Please enter Job Title')</script>";
                }
            }    
        ?>
    </form>
</body>
</html>
